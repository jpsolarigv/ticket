<?php
  if(isset($_POST["enviar"]) and base64_decode($_POST["enviar"])=="si")
  {
    require_once("modulo/login/conf/ConectarDB.php");
    require_once("modulo/login/modelo/Login_m.php"); 
    $login = new Login_m();
    $login->login();
  }
  