<?php
   
  class Login_m extends ConectarDB
  {    
    public function login($correo, $pass)  
    { 
      $conectar=parent::getConnection();
      parent::set_names(); 
      $sql = "SELECT usu.usu_ide, usu.usu_nom, usu.usu_ape, rol.rol_ide, rol.rol_nom
      FROM usuarios AS usu
      INNER join roles AS rol on rol.rol_ide = usu.rol_ide
      WHERE usu_cor=? and usu_pas=? and usu_est=1";
      $stmt=$conectar->prepare($sql);
      $stmt->bindValue(1, $correo);
      $stmt->bindValue(2, $pass);
      $stmt->execute();
      $resultado = $stmt->fetch();
      return $resultado;
    } 
   
    public function redireccionar()  
    {
      $redirect = parent::ruta().'modulo/admin/vistas/panel/index.php';
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

   
          
 