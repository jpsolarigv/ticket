<?php

require_once("BaseControlador.php");
require_once("../../configuraciones/ConectarDB.php");
require_once("../../modelos/PermisosModelo.php");

class PanelControlador extends BaseControlador
{
  public function __construct() 
  {
    $this->titulo_1 = 'Panel';
    $this->descripcion = 'Descripción general';
    $this->ruta = '../login/';
    
    session_start();
    $this->rol_ide = $_SESSION["rol_ide"];
    
    $this->permisos = new PermisosModelo();
  }
  
  public function index()
  {
    $modulos = $this->permisos->listar_sistema_roles($this->rol_ide);

    if (isset($this->rol_ide)) 
    {
      require_once("../../vistas/panel/01-head.php");
      require_once("../../vistas/panel/02-menu-superior.php");
      require_once("../../vistas/panel/03-titulo.php");
      require_once("../../vistas/panel/lista.php");
      require_once("../../vistas/panel/04-footer.php");
    } 
    else 
    {
      header("Location: " . $this->ruta);
    }
  
  }
}
