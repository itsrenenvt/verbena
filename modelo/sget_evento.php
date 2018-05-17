<?php

class evento{
  protected $identificador="";
  protected $nombre="";
  protected $direccion="";
  protected $fecha="";
	protected $hr_inicio="";
	protected $hr_fin="";
	protected $organizador="";
  protected $clasificacion="Clasificación";
  protected $categoria="Categoría";
  protected $descripcion="";

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

  function setdireccion($pdireccion){
    $this->direccion = $pdireccion;
  }

  function getdireccion(){
    return $this->direccion;
  }

  function setfecha($pfecha){
    $this->fecha = $pfecha;
  }

  function getfecha(){
    return $this->fecha;
  }

  function sethrinicio($phr_inicio){
    $this->hr_inicio = $phr_inicio;
  }

  function gethrinicio(){
    return $this->hr_inicio;
  }


  function sethrfin($phr_fin){
    $this->hr_fin = $phr_fin;
  }

  function gethrfin(){
    return $this->hr_fin;
  }


  function setorganizador($porganizador){
    $this->organizador = $porganizador;
  }

  function getorganizador(){
    return $this->organizador;
  }

  function setclasificacion($pclasificacion){
    $this->clasificacion = $pclasificacion;
  }

  function getclasificacion(){
    return $this->clasificacion;
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

  function gettiempo(){
    return $this->hr_inicio." - ".$this->hr_fin;
  }

}
?>
