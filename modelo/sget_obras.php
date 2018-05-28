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
      $this->setsrcimg($dato['imagen']);
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
        <p class="nombre"><?php echo $this->getnombre(); ?></p>
        <p class="precio"><?php echo "$ ".$this->getprecio(); ?></p>
        <button type="button" name="button" class="info" onclick="location='info_obra.php?id=<?php echo $this->getid(); ?>'"><i class="fas fa-info"></i></button>
        <button type="button" name="button" class="add"><i class="fas fa-cart-plus"></i></button>

        <script type="text/javascript">

        </script>

      </div>
      <?php

    }pg_close($conexion);
  }

  function info_obra($id_ope){
    include 'basedatos/conexion.php';
    $result=pg_query($conexion, 'select * from obra where id_obra ='.$id_ope);
    while ($dato = pg_fetch_array($result)){

      $this->setid($dato['id_obra']);
      $this->setnombre($dato['nombre']);
      $this->setartista($dato['artista']);
      $this->setcategoria($dato['categoria']);
      $this->setdescripcion($dato['descripcion']);
      $this->setprecio($dato['precio']);
      $this->setsrcimg($dato['imagen']);
    }pg_close($conexion);
    ?>

    <div class="img">
      <img src="img/obras/<?php echo $this->getsrcimg(); ?>" alt="">
    </div>

    <div class="info_box">
      <div class="nombre_obra">
        <h3><?php echo $this->getnombre();?></h3>
      </div>

      <div class="datos_obra">
        <p><strong>Precio: </strong><?php echo "$ ".$this->getprecio(); ?></p>
        <p><strong>Artista: </strong><?php  echo $this->getartista();?></p>
        <p><strong>Categoría: </strong><?php  echo $this->getcategoria();?></p>
        <p><strong>Descripción: </strong><?php  echo $this->getdescripcion();?></p>
      </div>

      <button type="button" name="button" class="add"><i class="fas fa-cart-plus"></i></button>
  </div>
    <?php

  }




}
?>
