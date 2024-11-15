<?php
   
  class Login_m extends ConectarDB
  {    
    public function login($correo, $pass)  
    {
      $conectar=parent::getConnection();
      parent::set_names(); 
      $sql = "SELECT * FROM usuarios WHERE corusu=? and pasusu=? and estusu=1";
      $stmt=$conectar->prepare($sql);
      $stmt->bindValue(1, $correo);
      $stmt->bindValue(2, $pass);
      $stmt->execute();
      $resultado = $stmt->fetch();
      return $resultado;
    }
   
    public function redireccionar()  
    {
      $redirect = parent::ruta().'modulo/panel/index.php';
      return $redirect;
    }


    public function logout()  
    {
      session_destroy();
      header("Location:".parent::ruta()."index.php");
      parent::cerrarConexion();
      exit();
    }

  }

   
          
 