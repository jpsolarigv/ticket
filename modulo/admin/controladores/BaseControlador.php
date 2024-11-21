<?php

//require_once("../../modelos/PermisosModelo.php");

abstract class BaseControlador
{
  
  protected $titulo_1, $titulo_2,  $descripcion;
  
  protected $ruta;
  protected $label_1, $label_2, $label_3;
  protected $input_1, $input_2, $input_3;
  protected $boton_1;

  /***### IDENTIFICADOR DE ROL Y DE USUARIO  ###***/
  protected $rol_ide, $usu_ide;

  /***###   NOMBRE DE MODULO, MENU Y SUB MENU  ###***/
  protected $mod_nom, $men_nom, $submen_nom;
  
  /***###   PERMISOS  ###***/
  protected $permisos;

 

  protected $modulos, $menus_m, $submenus_m;
  
  protected $iconos_m ;

  protected $est_sis, $estmen = TRUE, $estsubmen = TRUE;

  protected $datahelpers = [];

  /*
  public function per_nom_sis($nomsis, $estsis, $iderol) 
  {
    $nombre = new PermisosModelo();
    return $nombre->permisos_nombre_del_modulo($nomsis, $estsis, $iderol);
  }
*/

}
