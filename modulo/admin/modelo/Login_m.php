<?php
   
  class Login_m extends ConectarDB
  {    
    public function login($correo, $pass)  
    {
      $conectar=parent::getConnection();
      parent::set_names(); 
      $sql = "SELECT usu.ideusu, usu.nomusu, usu.apeusu, rol.nomrol
      FROM usuarios AS usu
      INNER join roles AS rol on rol.iderol = usu.iderol
      WHERE corusu=? and pasusu=? and estusu=1";
      $stmt=$conectar->prepare($sql);
      $stmt->bindValue(1, $correo);
      $stmt->bindValue(2, $pass);
      $stmt->execute();
      $resultado = $stmt->fetch();
      return $resultado;
    }
   
    public function redireccionar()  
    {
      $redirect = parent::ruta().'modulo/admin/vista/panel/index.php';
      //$redirect = parent::ruta().'modulo/admin/controlador/homeController.php';
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

   
          
 