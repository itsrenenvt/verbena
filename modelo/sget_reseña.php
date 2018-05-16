<?php

class reseña{
  protected $identificador="";
  protected $titulo="";
  protected $autor="";
  protected $fecha_pub="";
	protected $hora_pub="";
	protected $descripcion="";

  function setid($pidentificador){
    $this->identificador = $pidentificador;
  }

  function getid(){
    return $this->identificador;
  }

  function settitulo($ptitulo){
    $this->titulo = $ptitulo;
  }

  function gettitulo(){
    return $this->titulo;
  }

  function setautor($pautor){
    $this->autor = $pautor;
  }

  function getautor(){
    return $this->autor;
  }

  function setfechapub($pfecha_pub){
    $this->fecha_pub = $pfecha_pub;
  }

  function getfechapub(){
    return $this->fecha_pub;
  }

  function sethorapub($phora_pub){
    $this->hora_pub = $phora_pub;
  }

  function gethorapub(){
    return $this->hora_pub;
  }

  function setdescripcion($pdescripcion){
    $this->descripcion = $pdescripcion;
  }

  function getdescripcion(){
    return $this->descripcion;
  }

}
?>
