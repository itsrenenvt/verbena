<?php

class obras{
  protected $identificador="";
  protected $nombre="";
  protected $artista="";
  protected $categoria="Categoría";
  protected $descripcion="";
	protected $precio="";

  function setid($pidentificador){
    $this->identificador = $pidentificador;
  }

  function getid(){
    return $this->identificador;
  }

  function setnombre($pnombre){
    $this->nombre = $pnombre;
  }

  function getnombre(){
    return $this->nombre;
  }

  function setartista($partista){
    $this->artista = $partista;
  }

  function getartista(){
    return $this->artista;
  }

  function setcategoria($pcategoria){
    $this->categoria = $pcategoria;
  }

  function getcategoria(){
    return $this->categoria;
  }

  function setdescripcion($pdescripcion){
    $this->descripcion = $pdescripcion;
  }

  function getdescripcion(){
    return $this->descripcion;
  }

  function setprecio($pprecio){
    $this->precio = $pprecio;
  }

  function getprecio(){
    return $this->precio;
  }



}
?>
