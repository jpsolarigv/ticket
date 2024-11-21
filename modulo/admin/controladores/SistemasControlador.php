<?php

require_once("BaseControlador.php");
require_once("../../configuraciones/ConectarDB.php");
require_once("../../modelos/PermisosModelo.php");

class SistemasControlador extends BaseControlador
{
  public function __construct() 
  {
    
    $this->titulo_1 = 'Modulos';
    $this->descripcion = 'Modulos del sistema';

    session_start();
    $this->usu_ide = $_SESSION["usu_ide"];
    $this->rol_ide = $_SESSION["rol_ide"];

    $this->mod_nom = 'Admin';
    $this->men_nom = 'Admin';
    $this->submen_nom = 'Modulos';

    $this->permisos = new PermisosModelo();

    $this->ruta = '../login/';

    //$this->modulos = new SistemasModelo();
  }

  public function index()
  {
    $per_mod = $this->permisos->permisos_nombre_del_modulo($this->mod_nom, $this->rol_ide);
    $per_men = $this->permisos->permisos_menus_del_modulo($this->mod_nom, $this->rol_ide);
    $per_submen = $this->permisos->permisos_sub_menus_del_modulo($this->mod_nom, $this->rol_ide);
    $per_CRUD = $this->permisos->permisos_CRUD_del_modulo($this->mod_nom, $this->men_nom, $this->submen_nom, $this->estsubmen, $this->rol_ide);

    echo $per_CRUD->per_submen;


    if (isset($this->rol_ide) && ($per_mod->per_mod === 1)&& ($per_CRUD->per_submen === 1)) 
    {
      require_once("../../vistas/plantilla/01-head.php");
      require_once("../../vistas/plantilla/02-menu-superior.php");
      require_once("../../vistas/plantilla/03-menu-nav.php");
      require_once("../../vistas/plantilla/04-menu-titulo.php");
      require_once("../../vistas/sistemas/lista.php");
      require_once("../../vistas/plantilla/05-footer.php");
      require_once("../../vistas/plantilla/06-js.php");
    } else {
      header("Location: " . $this->ruta);
      
    }
    


  }
}
    

    

    //$est_mod = $pm['est_mod'];

    //echo $est_mod; // Salida: 1
    //echo $pm['est_mod'];
    //print_r($pm);
/*

//$nombre = new PermisosModelo();
    
    

    echo "nom_mod: ".$per_mod->mod_nom. "<br>";
    echo "per_mod: ". $per_mod->per_mod. "<br>";
    echo "ide_rol: ".$per_mod->rol_ide. "<br><br>";
    
    if($per_mod->per_mod === 1) {
      echo "estado del modulo"."<br>";
    } 
    else{ 
     echo "REDIREC"."<br>";
    }

     
   

    if (empty($per_men)) 
    {
      echo "No se encontraron registros con los parámetros dados.";
    } 
    else 
    {
      foreach ($per_men as $obj) 
      {
        echo "Nombre del menu: " . $obj->men_nom . "<br>";
        echo "Descripcion del icono: " . $obj->ico_nom. "<br>";
        echo "Nombre del ico: " . $obj->ico_des . "<br>";
        echo "-----------------------------"."<br>"; 
      }
    }

    $per_submen = $this->permisos->permisos_sub_menus_del_modulo($this->modulo_nombre, $this->rol_ide);

    if (empty($per_submen)) 
    {
      echo "No se encontraron registros con los parámetros dados.";
    } 
    else 
    {
      foreach ($per_submen as $obj) 
      {
        echo "Nombre del sub menu: " . $obj->submen_nom . "<br>";
        echo "URL: " . $obj->submen_url. "<br>"; 
        echo "MENU: " . $obj->men_nom . "<br>";
        echo "-----------------------------"."<br>"; 
      }
    }



    if (isset($pm['est_mod'])) 
    {
      echo "aca";
    }
    else
    {
      echo "direccionar";

    }
*/
    //$ps = $this->per_nom_sis($this->nombre_modulo, $this->estsis, $this->iderol);
    
   
    

     //*$estsis = 1;
    //$iderol = $_SESSION["ide_usu"];

    //$permiso = new Permisos_m();
    //$sistemas = $permiso->listar_sistema_roles($estsis, $iderol);

    //$sistema = new SistemasModelo();
    //$sistemas = $sistema->listar_sistemas();

    


/*
public function __construct() 
  {
    $this->titulo = 'Sistemas';
    
    $this->nomsis = 'Administrador';
    $this->nommen = 'Admin';
    $this->nomsubmen = 'Sistemas';

    $this->misession = session();

    $this->iderol = $this->misession->get('iderol');
    $this->ideusu = $this->misession->get('ideusu');
    
    $this->mr = \Config\Services::request();
    $this->url = "administrador/admin/sistemas/";
    
    $this->sistemas_m = new Sistemas_m();
    $this->iconos_m = new Iconos_m();
    
    $this->js_insertar = 'js/'.$this->url.'insertar.js';
    $this->js_eliminar = 'js/'.$this->url.'eliminar.js';
    $this->js_actualizar = 'js/'.$this->url.'actualizar.js';
    $this->css_lista = 'css/'.$this->url.'lista.css';
    
    $this->libreria_select = new Select_option();
  }
  

  public function lista() 
  {
    //$ps = $this->per_nom_sis($this->nomsis, $this->estsis, $this->iderol);
    
	$pm = $this->per_men_sis($this->nomsis, $this->estmen, $this->iderol);
    
	$psm = $this->per_submen_sis($this->nomsis, $this->estsubmen, $this->iderol);
    
	$pc = $this->per_con($this->nomsis, $this->nommen, $this->nomsubmen, $this->estsubmen, $this->iderol);

    $sis = $this->sistemas_m->listar(); 
    
	$ico = $this->iconos_m->listar(); 
    
	$selico =  $this->libreria_select->selected($ico);
    
    if ($this->ideusu && $ps['estsis'] == TRUE && $pc['estsubmen'] == TRUE) 
    {
      $data = [ 
          'url' => $this->url, 'titulo' => $this->titulo, 'lis' => $sis,
          
          'menus' => $pm, 'submenus' => $psm,  
          
          'perins' => $pc['perins'], 'peract' => $pc['peract'], 
          'pereli' => $pc['pereli'], 'perxls' => $pc['perxls'], 
          'perpdf' => $pc['perpdf'], 
          
          'selico' => $selico,
          
          'jss' => array( $this->js_insertar,  $this->js_eliminar,  $this->js_actualizar  ),
          
          'csss' => array($this->css_lista)
        ];
      echo view($this->url . '/index', $data);
    } 
    else { return redirect()->to(site_url('escritorio')); }
  }
    */