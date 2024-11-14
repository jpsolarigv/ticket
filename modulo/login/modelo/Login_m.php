<?php
   
  class Login_m extends ConectarDB
  {    
    public function login()  
    {
      $conectar=parent::getConnection();
      parent::set_names(); 
      if(isset($_POST["enviar"]))
      {     
        $correo = $_POST["corusu"];
        $pass = $_POST["pasusu"];
                               
        if(empty($correo) and empty($pass))
        {
          $m2 = base64_encode(2);
          //header("Location:".parent::ruta()."index.php?m=$m2");
          header("Location:".Titulo::getBaseUrl()."index.php?m=$m2");
        }
        else
        {
          $sql = "SELECT * FROM tm_usuario WHERE usu_cor=? and usu_pas=? and usu_est=1";
          $stmt=$conectar->prepare($sql);
          $stmt->bindValue(1, $correo);
          $stmt->bindValue(2, $pass);
          $stmt->execute();
          $resultado = $stmt->fetch();
          if (is_array($resultado) and count($resultado)>0)
          {
            ini_set('session.gc_maxlifetime', 86400);  // Duración de la sesión en segundos (24 horas)
            ini_set('session.cookie_lifetime', 86400); // Duración del cookie de sesión en segundos (24 horas)
            session_start(); 
            $_SESSION["usu_ide"]=$resultado["usu_ide"];
            $_SESSION["usu_nom"]=$resultado["usu_nom"];
            $_SESSION["usu_ape"]=$resultado["usu_ape"];

            
            header("Location:".Titulo::getBaseUrl()."modulo/panel");
            exit(); 
          }   
          else
          {
            $m1 = base64_encode(1);
            header("Location:".parent::ruta()."index.php?m=$m1");
            exit();
          }
        }
      }
    }

    public function logout()  
    {
      session_destroy();
      header("Location:".parent::ruta()."index.php");
      parent::cerrarConexion();
      exit();
    }

  }