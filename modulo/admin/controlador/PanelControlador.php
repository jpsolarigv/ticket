<?php

require_once("BaseControlador.php");
require_once("../../conf/ConectarDB.php");
require_once("../../modelo/Permisos_m.php");

class PanelControlador extends BaseControlador {
    public function index() {
        
        session_start();
        $this->titulo = 'Panel';
        $this->descripcion = 'Descripción general';
        //$this->ruta =;
        
        $estsis = 1;
        $iderol = $_SESSION["ide_usu"];

        $permiso = new Permisos_m();

        $sistemas = $permiso->listar_sistema_roles($estsis, $iderol);

        if(isset($iderol))
        {
            include __DIR__ . '/../vista/plantilla/01-encabezado.php';
            include __DIR__ . '/../vista/plantilla/02-menu-superior-min.php';
            include __DIR__ . '/../vista/plantilla/04-titulo.php';
            include __DIR__ . '/../vista/panel/lista.php';
            include __DIR__ . '/../vista/plantilla/06-pie.php';
        }
        else  
        {
	        header("Location:../login/index.php");
        }
}
}


