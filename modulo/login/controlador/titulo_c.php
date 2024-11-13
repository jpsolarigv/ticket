<?php
  
  require_once("modulo/login/conf/Titulo.php");

   
  // Crear una instancia de la clase TitleManager
  $titulos = new Titulo();
 
  // Obtener el título de la página
  $t_login = $titulos->getTitle('t_login');   
  $t_login2 = $titulos->getTitle('t_login2');  

  // Obtener los label
  $l_email = $titulos->getTitle('l_email');
  $l_password = $titulos->getTitle('l_password');  
  
  // Obtener los input
  $i_email = $titulos->getTitle('i_email');
  $i_password = $titulos->getTitle('i_password'); 

   // Obtener los botones
   $b_login = $titulos->getTitle('b_login');
   