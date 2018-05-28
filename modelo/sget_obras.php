<?php

class obras{
  protected $identificador="";
  protected $nombre="";
  protected $artista="";
  protected $categoria="Categoría";
  protected $descripcion="";
	protected $precio="";
  protected $srcimagen="";

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

  function setsrcimg($psrcimagen){
    $this->srcimagen= $psrcimagen;
  }

  function getsrcimg(){
    return $this->srcimagen;
  }

  function tablaobras($id_ope){
    include 'basedatos/conexion.php';
    $result=pg_query($conexion, 'select * from obra where id_obra ='.$id_ope);
    while ($dato = pg_fetch_array($result)){

      $this->setid($dato['id_obra']);
      $this->setnombre($dato['nombre']);
      $this->setartista($dato['artista']);
      $this->setcategoria($dato['categoria']);
      $this->setdescripcion($dato['descripcion']);
      $this->setprecio($dato['precio']);
    }
    pg_close($conexion);
  }

  function insertaObra(){
    include 'basedatos/conexion.php';
    $result=pg_query($conexion, 'select * from obra');
    while ($dato = pg_fetch_array($result)){

      $this->setid($dato['id_obra']);
      $this->setnombre($dato['nombre']);
      $this->setartista($dato['artista']);
      $this->setcategoria($dato['categoria']);
      $this->setdescripcion($dato['descripcion']);
      $this->setprecio($dato['precio']);
      $this->setsrcimg($dato['imagen']);

      ?>
      <div class="item-obra">

        <img src="img/obras/<?php echo $this->getsrcimg(); ?>" alt="">
        <p><?php echo "$ ".$this->getprecio(); ?></p>
        <button type="button" name="button"><i class="fas fa-info"></i></button>
        <button type="button" name="button"><i class="fas fa-cart-plus"></i></button>

      </div>
      <?php
      
    }pg_close($conexion);
  }


}
?>
