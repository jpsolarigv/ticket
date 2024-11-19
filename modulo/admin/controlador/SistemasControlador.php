<?php

require_once("BaseControlador.php");
require_once("../../conf/ConectarDB.php");
require_once("../../modelo/Permisos_m.php");

class SistemasControlador extends BaseControlador {
    
    public function index() {
        
        
        session_start();
        $this->titulo = 'Modulos';
        $this->descripcion = 'Modulos del sistema';
        //$this->ruta =;
        
        $estsis = 1;
        $iderol = $_SESSION["ide_usu"];

        $permiso = new Permisos_m();
        $sistemas = $permiso->listar_sistema_roles($estsis, $iderol);

        if(isset($iderol))
        {
            include __DIR__ . '/../vista/plantilla/01-encabezado-lista.php';
            include __DIR__ . '/../vista/plantilla/02-menu-superior.php';
            include __DIR__ . '/../vista/plantilla/03-menu-nav.php';
            include __DIR__ . '/../vista/plantilla/05-titulo-lista.php';
            include __DIR__ . '/../vista/sistemas/lista.php';
            include __DIR__ . '/../vista/plantilla/06-pie.php';

        }
        else  
        {
	        header("Location:../login/index.php");
        }







}
}


