<?php

  
class Cliente {

  // ********************************************
  // ESTADO!!!
  // ********************************************
  // Properties

  private $codigo;   
  private $descripcion;
  private $nombre;  
  private $apellidos;
  private $dni;
  
  // ********************************************
  // COMPORTAMIENTO!!!
  // ********************************************
  // Methods
  // Constructor
  function __construct($nCodigo, $nDescripcion, $nombre, $apellidos, $dni) {
  
    $this->codigo = $nCodigo;
    $this->descripcion = $nDescripcion;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->dni = $dni;
     
    
  }

  
  //Getters

  function getCodigo() {
    return $this->codigo;
  }

  function getDescripcion() {
    return $this->descripcion;
  }
  
  function getnombre() {
    return $this->nombre;
  }

  function getapellidos() {
    return $this->apellidos;
  }
  
  function getdni() {
    return $this->dni;
  }
  
 

  function imprimeCliente() {
    return "<p>$this->codigo,$this->descripcion,$this->nombre,$this->apellidos,$this->dni</p>";
  }


  //sql para inserción del producto
  function getInsertSQL() {
    $sql = "INSERT INTO clientes (codigo, descripcion, nombre, apellidos, dni) VALUES ($this->codigo,'$this->descripcion','$this->nombre','$this->apellidos','$this->dni') ";

    return $sql;
  }

  public static function getSelectSQL($tipoOrdenacion) {

    $sql = "SELECT * FROM clientes ORDER BY ";

    switch ($tipoOrdenacion) {
      case "nombreasc":
        $sql = $sql . "nombre ASC";
        break;
      case "nombredes":
        $sql = $sql . "nombre DESC";
        break;
      case "descripcionasc":
        $sql = $sql . "descripcion ASC";
        break;
      case "descripciondesc":
          $sql = $sql . "descripcion DESC";
          break;
      default:
        $sql = $sql . "descripcion ASC";
    }

    return $sql;
  }


}
?>
