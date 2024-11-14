<?php

class ConectarDB
{
  private $ser = "localhost";
  private $dbn = "jpsolarig_kermes";
  private $use = "jpsolarig_kermes";
  private $pas = "Kermes2024**..";
  private $pdo;

  // Constructor para inicializar la conexión al instanciar la clase
  public function __construct() 
  {
    $this->Conexion();
  }

  protected function Conexion()
  {
    $dsn = "mysql:local={$this->ser};dbname={$this->dbn}";
    try{
      $this->pdo = new PDO($dsn, $this->use, $this->pas);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Conexión exitosa!";
	  } catch (PDOException $e) {
      echo "Error en la conexión: " . $e->getMessage();
	    die();
	  }
  }

  public function getConnection() 
  {
    return $this->pdo;
  }

  public function set_names(){
		return $this->pdo->query("SET NAMES 'utf8'");
  }

  public static function ruta(){
    return "https://matervirtual.edu.pe/materv/";
	}

  public function cerrarConexion() {
    $this->pdo->close();
  }
}

