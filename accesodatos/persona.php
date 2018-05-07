<?php

class persona{
  protected $identificadors="";
  protected $nombre="";
	protected $ap_paterno="";
	protected $ap_materno="";
	protected $usuario="";
	protected $contraseña="";
  protected $email="";
  protected $telefono="";
  protected $direccion="";

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


  function setpaterno($pap_paterno){
    $this->ap_paterno = $pap_paterno;
  }

  function getpaterno(){
    return $this->ap_paterno;
  }


  function setmaterno($pap_materno){
    $this->ap_materno = $pap_materno;
  }

  function getmaterno(){
    return $this->ap_materno;
  }

  function setusuario($pusuario){
    $this->usuario = $pusuario;
  }

  function getusuario(){
    return $this->usuario;
  }

  function setcontrasena($pcontraseña){
    $this->contraseña = $pcontraseña;
  }

  function getcontrasena(){
    return $this->contraseña;
  }

  function setemail($pemail){
    $this->email = $pemail;
  }

  function getemail(){
    return $this->email;
  }

  function settelefono($ptelefono){
    $this->telefono = $ptelefono;
  }

  function gettelefono(){
    return $this->telefono;
  }

  function setdireccion($pdireccion){
    $this->direccion = $pdireccion;
  }

  function getdireccion(){
    return $this->direccion;
  }

	function getNombreCompleto(){
		return $this->ap_paterno." ".$this->ap_materno." ".$this->nombre;
	}


}
?>
