<?php

class resena{
  protected $identificador="";
  protected $titulo="";
  protected $autor="";
  protected $fecha_pub="";
	protected $hora_pub="";
	protected $contenido="";

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

  function setcontenido($pcontenido){
    $this->contenido = $pcontenido;
  }

  function getcontenido(){
    return $this->contenido;
  }

  function tablaresena($id_ope){
    include 'basedatos/conexion.php';
    $result=pg_query($conexion, 'select * from reseña where id_reseña ='.$id_ope);
    while ($dato = pg_fetch_array($result)){

      $this->setid($dato['id_reseña']);
      $this->settitulo($dato['titulo']);
      $this->setautor($dato['autor']);
      $this->setfechapub($dato['fecha_pub']);
      $this->sethorapub($dato['hora']);
      $this->setcontenido($dato['descripcion']);
    }
    pg_close($conexion);
  }

}
?>
