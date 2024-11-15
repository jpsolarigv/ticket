<?php
  class Escritorio
  {
	
	  public function index()
	  {
		  $data = [
          'titulo'   => 'Escritorio',
				  'jss' => array( ),
          'csss' => array(),  
  	  ];
		
      
		  //$misession = session();
		
		  $data['url'] = 'escritorio/';
		  $estsis = 1;
		  $iderol = $_SESSION["usu_ide"];
		
		$permiso = new Permisos_m();
			
		$data['sistemas'] = $permiso->listarSistemaRoles($estsis,$iderol);
		
		
		if ($misession->get('ideusu')) 
    {
      //echo view('login/login',$data); 
			return view('escritorio',$data);
    }
    else
    {
      return redirect()->to(site_url('login/salir'));
		}
	}
	
}
