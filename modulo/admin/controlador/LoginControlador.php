<?php
require_once("../conf/ConectarDB.php");
require_once("../modelo/Login_m.php");

class LoginController
{
    private $errores = [];

    public function handleRequest()
    {
        header('Content-Type: application/json');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->procesarFormulario();
        } else {
            $this->enviarRespuesta([
                "exito" => false,
                "errores" => ["Método no permitido."]
            ]);
        }
    }

    private function procesarFormulario()
    {
        // Validar correo
        $email = $this->validarCorreo($_POST["corusu"] ?? null);

        // Validar contraseña
        $password = $this->validarContrasena($_POST["pasusu"] ?? null);

        // Si no hay errores, procesar el inicio de sesión
        if (empty($this->errores)) {
            $this->procesarLogin($email, $password);
        } else {
            $this->enviarRespuesta([
                "exito" => false,
                "errores" => $this->errores
            ]);
        }
    }

    private function validarCorreo($correo)
    {
        if (empty($correo)) {
            $this->errores[] = "El correo electrónico es obligatorio.";
            return null;
        }

        $correoSanitizado = filter_var(trim($correo), FILTER_SANITIZE_EMAIL);
        if (!filter_var($correoSanitizado, FILTER_VALIDATE_EMAIL)) {
            $this->errores[] = "El correo electrónico no es válido.";
            return null;
        }

        return $correoSanitizado;
    }

    private function validarContrasena($contrasena)
    {
        if (empty($contrasena)) {
            $this->errores[] = "La contraseña es obligatoria.";
            return null;
        }
        return $contrasena;
    }

    private function procesarLogin($correo, $contrasena)
    {
        $login = new Login_m();
        $resultado = $login->login($correo, $contrasena);

        if (is_array($resultado) && count($resultado) > 0) {
            $this->iniciarSesion($resultado);
            $this->enviarRespuesta([
                "exito" => true,
                "mensaje" => "Inicio de sesión exitoso.",
                "redirect" => $login->redireccionar()
            ]);
        } else {
            $this->errores[] = "Correo y/o contraseña no es válida, verifique sus credenciales.";
            $this->enviarRespuesta([
                "exito" => false,
                "errores" => $this->errores
            ]);
        }
    }

    private function iniciarSesion($datosUsuario)
    {
        ini_set('session.gc_maxlifetime', 86400);  // 24 horas
        ini_set('session.cookie_lifetime', 86400); // 24 horas
        session_start();

        $_SESSION["ide_usu"] = $datosUsuario["ideusu"];
        $_SESSION["nom_usu"] = $datosUsuario["nomusu"];
        $_SESSION["ape_usu"] = $datosUsuario["apeusu"];
        $_SESSION["nom_rol"] = $datosUsuario["nomrol"];
    }

    private function enviarRespuesta($respuesta)
    {
        echo json_encode($respuesta);
        exit;
    }
}

// Crear instancia del controlador y manejar la solicitud
$loginController = new LoginController();
$loginController->handleRequest();