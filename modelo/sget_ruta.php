<?php

class rutas{
  protected $identificador="";
  protected $nombre="";
  protected $calle="";
  protected $cp="";
	protected $colonia="";
	protected $ciudad="";
  protected $num_ext="";
  protected $num_int="";
  protected $coordenadas="";

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

  function setcalle($pcalle){
    $this->calle = $pcalle;
  }

  function getcalle(){
    return $this->calle;
  }

  function setcp($pcp){
    $this->cp = $pcp;
  }

  function getcp(){
    return $this->cp;
  }

  function setcolonia($pcolonia){
    $this->colonia = $pcolonia;
  }

  function getcolonia(){
    return $this->colonia;
  }

  function setciudad($pciudad){
    $this->ciudad = $pciudad;
  }

  function getciudad(){
    return $this->ciudad;
  }

  function setnumext($pnum_ext){
    $this->num_ext = $pnum_ext;
  }

  function getnumext(){
    return $this->num_ext;
  }

  function setnumint($pnum_int){
    $this->num_int = $pnum_int;
  }

  function getnumint(){
    return $this->num_int;
  }

  function setcoordenadas($pcoordenadas){
    $this->coordenadas = $pcoordenadas;
  }

  function getcoordenadas(){
    return $this->coordenadas;
  }

  function getnumeros(){
    return $this->num_ext." - ".$this->num_int;
  }

}
?>
