<?php
  
  class ModulosModelo extends ConectarDB
  {    
    public function listar_modelos()
	  {  
      $conectar=parent::getConnection();
      parent::set_names(); 
      
      $sql="SELECT modu.ide_mod, modu.nom_mod, modu.des_mod, modu.url_mod 
      FROM modulos AS modu";
      $stmt=$conectar->prepare($sql);
      $stmt->execute();
      return $resultado=$stmt->fetchAll(); 
		}

    


   

  }