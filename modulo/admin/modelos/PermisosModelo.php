<?php
  
  class PermisosModelo extends ConectarDB
  {    
    public function listar_sistema_roles($rol_ide)
	  {  
      $conectar=parent::getConnection();
      parent::set_names(); 
        
      $sql="SELECT modu.mod_nom, modu.mod_des, modu.mod_url 
      FROM modulos AS modu
      INNER JOIN permisos_modulos AS permod ON permod.mod_ide = modu.mod_ide
      INNER JOIN roles AS rol ON rol.rol_ide = permod.rol_ide
      WHERE rol.rol_ide = :p1 AND permod.per_mod = 1 
      ";  
      $stmt=$conectar->prepare($sql);
      $stmt->bindParam(':p1', $rol_ide, PDO::PARAM_INT); // Parámetro entero
      $stmt->execute();
      return $resultado=$stmt->fetchAll(PDO::FETCH_OBJ);
		}

    public function permisos_nombre_del_modulo($mod_nom, $rol_ide)
    {
      $conectar = parent::getConnection();
      parent::set_names();

      $sql = "SELECT permod.per_mod, modu.mod_nom, rol.rol_ide 
        FROM modulos AS modu
        INNER JOIN permisos_modulos AS permod ON permod.mod_ide = modu.mod_ide
        INNER JOIN roles AS rol ON rol.rol_ide = permod.rol_ide
        WHERE modu.mod_nom = :p1 AND rol.rol_ide = :p2 AND permod.per_mod = 1";
      $stmt = $conectar->prepare($sql);
      $stmt->bindParam(':p1', $mod_nom, PDO::PARAM_STR);
      $stmt->bindParam(':p2', $rol_ide, PDO::PARAM_INT);
      $stmt->execute();
   
      $resultado = $stmt->fetch(PDO::FETCH_OBJ);
      return $resultado; 
    }

    public function permisos_menus_del_modulo($mod_nom, $rol_ide)
    {
      $conectar = parent::getConnection();
      parent::set_names();

      $sql = "SELECT permen.per_men, men.men_nom, ico.ico_nom, ico.ico_des 
      FROM modulos AS modu
      INNER JOIN menus AS men ON men.mod_ide = modu.mod_ide
      INNER JOIN iconos AS ico ON ico.ico_ide = men.ico_ide
      INNER JOIN permisos_menus AS permen ON permen.men_ide = men.men_ide AND permen.mod_ide = men.mod_ide
      INNER JOIN roles AS rol ON rol.rol_ide = permen.rol_ide
      WHERE modu.mod_nom = :p1 AND rol.rol_ide = :p2 AND permen.per_men = 1";
      $stmt = $conectar->prepare($sql);
      $stmt->bindParam(':p1', $mod_nom, PDO::PARAM_STR);
      $stmt->bindParam(':p2', $rol_ide, PDO::PARAM_INT);
      $stmt->execute();
   
      $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
      return $resultado; 
    }

    public function permisos_sub_menus_del_modulo($mod_nom, $rol_ide)
    {
      $conectar = parent::getConnection();
      parent::set_names();

      $sql = "SELECT submen.submen_nom,submen.submen_url,men.men_nom 
      FROM modulos AS modu
      INNER JOIN menus AS men ON men.mod_ide = modu.mod_ide
      INNER JOIN submenus AS submen ON submen.men_ide = men.men_ide
      INNER JOIN permisos_submenus AS persubmen ON persubmen.men_ide = submen.men_ide AND persubmen.submen_ide = submen.submen_ide AND persubmen.mod_ide = submen.mod_ide
      INNER JOIN roles AS rol ON rol.rol_ide = persubmen.rol_ide
      WHERE modu.mod_nom = :p1 AND rol.rol_ide = :p2 AND persubmen.per_submen = 1";
      $stmt = $conectar->prepare($sql);
      $stmt->bindParam(':p1', $mod_nom, PDO::PARAM_STR);
      $stmt->bindParam(':p2', $rol_ide, PDO::PARAM_INT);
      $stmt->execute();
   
      $resultado = $stmt->fetchAll(PDO::FETCH_OBJ);
      return $resultado; 

      //INNER JOIN iconos AS ico ON ico.ide_ico = men.ide_ico
    }

    public function permisos_CRUD_del_modulo($mod_nom, $men_nom, $submen_nom, $rol_ide)
    {
      $conectar = parent::getConnection();
      parent::set_names();

      //persubm.estsubmen,persubm.perxls,persubm.perins,persubm.perpdf,persubm.peract,persubm.pereli
      $sql = "SELECT persubmen.per_submen 
      FROM modulos AS modu
      INNER JOIN menus AS men ON men.mod_ide = modu.mod_ide
      INNER JOIN submenus AS submen ON submen.men_ide = men.men_ide
      INNER JOIN permisos_submenus AS persubmen ON persubmen.men_ide = submen.men_ide AND persubmen.submen_ide = submen.submen_ide AND persubmen.mod_ide = submen.mod_ide
      INNER JOIN roles AS rol ON rol.rol_ide = persubmen.rol_ide
      WHERE modu.mod_nom = :p1 AND men.men_nom = :p2 AND submen.submen_nom = :p3 AND rol.rol_ide = :p4 AND persubmen.per_submen = 1";
      
      $stmt = $conectar->prepare($sql);
      $stmt->bindParam(':p1', $mod_nom, PDO::PARAM_STR);
      $stmt->bindParam(':p2', $men_nom, PDO::PARAM_STR);
      $stmt->bindParam(':p3', $submen_nom, PDO::PARAM_STR);
      $stmt->bindParam(':p4', $rol_ide, PDO::PARAM_INT);
      $stmt->execute();
   
      $resultado = $stmt->fetch(PDO::FETCH_OBJ);
      return $resultado; 
    }

    /*
    public function permisos_controlador($nomsis, $nommen, $nomsubmen, $estsubmen, $iderol) {
    
    $resultado = $consulta->where(array(
        "sis.nomsis" => $nomsis,
        "men.nommen" => $nommen,
        "submen.nomsubmen" => $nomsubmen,

        "persubm.estsubmen" => $estsubmen,
        
        "rol.iderol" => $iderol,
    ));

    return $resultado->get()->getRowArray();
  }
  }
    */
    
  
     
   

  }