<?php

  require_once("../conf/ConectarDB.php");
  require_once("../modelo/Login_m.php");

  header('Content-Type: application/json');

  
  
  // Array para almacenar errores
  $errores = [];

  // Verificar si el método es POST
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {

    // Validación del correo electrónico
    if (empty($_POST["corusu"])) 
    {
      $errores[] = "El correo electrónico es obligatorio.";
      //$errores[] = $t_login2;
      
    } 
    else 
    {
      $email = filter_var(trim($_POST["corusu"]), FILTER_SANITIZE_EMAIL);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
      {
        $errores[] = "El correo electrónico no es válido.";
      }
    }

    if (empty($_POST["pasusu"])) 
    {
      $errores[] = "La contraseña es obligatoria.";
    }
    else
    {
     
      $login = new Login_m();
      $resultado = $login->login(($_POST["corusu"]),($_POST["pasusu"]));

      if (is_array($resultado) and count($resultado)>0)
      {
        ini_set('session.gc_maxlifetime', 86400);  // Duración de la sesión en segundos (24 horas)
        ini_set('session.cookie_lifetime', 86400); // Duración del cookie de sesión en segundos (24 horas)
        session_start();   
          
          $_SESSION["ide_usu"]=$resultado["ideusu"];
          $_SESSION["nom_usu"]=$resultado["nomusu"];
          $_SESSION["ape_usu"]=$resultado["apeusu"];
          $_SESSION["nom_rol"]=$resultado["nomrol"];
      } 
      else
      {
        $errores[] = "Correo y/o contraseña no es válida, verifique sus credenciales.";
        //$misession -> setFlashdata('mensaje_flash', 'Correo y/o contraseña no es válida, verifique sus credenciales.');
				//$this->index();
      }

    }

    // Responder dependiendo de si hay errores o no
    if (empty($errores)) 
    {
      // Si no hay errores, enviamos la respuesta de éxito
      $ruta = $login->redireccionar();

      echo json_encode([
        "exito" => true,
        "mensaje" => "Formulario enviado correctamente.",
        'redirect' => $ruta
      ]);
    } 
    else 
    {
      // Si hay errores, los enviamos en la respuesta
      echo json_encode([
        "exito" => false,
        "errores" => $errores
      ]);
    }
  } 
  
