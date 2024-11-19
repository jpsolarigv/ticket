<?php
  
  class Permisos_m extends ConectarDB
  {    
      public function listar_sistema_roles($estsis,$iderol)
	  {  
      $conectar=parent::getConnection();
      parent::set_names(); 
      
      $sql="SELECT modu.idesis, modu.nomsis, modu.dessis, modu.urlsis 
      FROM modulos AS modu";
      $stmt=$conectar->prepare($sql);
      $stmt->execute();
      return $resultado=$stmt->fetchAll();

    
		}

   

  }