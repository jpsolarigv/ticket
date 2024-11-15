<?php

session_start();
session_unset();  // Elimina todas las variables de sesión
session_destroy();  // Destruye la sesión completamente



//require_once("modulo/login/conf/ConectarDB.php");
  
  //$login = new Login_m();
  //$login->login();
  //$login = new ConectarDB();
  //echo $controlador->saludar();
  
  
  //require_once("modulo/login/controlador/ConectarDB.php");
  //session_destroy();
  //header("Location:".$conectar::ruta()."index.php");
  //$conectar::cerrarConexion();
  //  exit();
  //$controlador = new UsuarioController();
  //echo $controlador->saludar();


  //echo $login->cerrarConexion();
  //echo Config::getBaseUrl();

  //echo Titulo::getBaseUrl();