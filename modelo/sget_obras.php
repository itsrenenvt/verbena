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
    return $id_ope;
  }

  function insertaObra(){ //Agrega al carrito
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

      $c=0;
      ?>
      <div class="item-obra">


          <img src="img/obras/<?php echo $this->getsrcimg(); ?>" alt="">
          <p class="nombre"><?php echo $this->getnombre(); ?></p>
          <p class="precio"><?php echo "$ ".$this->getprecio(); ?></p>

          <button type="button" name="button" class="info" onclick="location='info_obra.php?id=<?php echo $this->getid(); ?>'"><i class="fas fa-info"></i></button>
          <button type="submit" name="" class="add" onclick="location='modelo/addcarrito.php?obra=<?php echo $this->getid(); ?>'"><i class="fas fa-cart-plus" ></i></button>


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

      <button type="submit" name="" class="add" onclick="location='modelo/addcarrito.php?obra=<?php echo $this->getid(); ?>'"><i class="fas fa-cart-plus" ></i></button>

  </div>
    <?php

  }

  function consultacarrito(){

    $usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : "";
    if ($usuario == "cliente") {
      $usuario="usuario";
    }
    include 'basedatos/conexion.php';
    include_once 'modelo/sget_obras.php';
    ?>
    <div class="fondo_tabla">
      <h2>CARRITO</h2>
      <div class="contenedor_tabla">
        <form name="form_carrito" action="" method="post">

          <input type="hidden" name="txtope_crud">
          <input type="hidden" name="txtid_crud">

          <table class="tabla_carrito">
            <thead>
              <tr>
                <th>ID</th>
                <th>Imágen</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th colspan="2">Operaciones</th>
              </tr>
            </thead>
            <?php
            $result=pg_query($conexion, 'select obra.id_obra, obra.imagen, obra.nombre,obra.descripcion, obra.precio, obra.categoria
                                         from obra inner join carrito on obra.id_obra = carrito.id_obra
                                         inner join '.$usuario.' on '.$usuario.'.id_'.$usuario.' = carrito.id_usuario');
            while ($dato = pg_fetch_array($result)){

              $objObra = new obras();

              $auxid=$dato['id_obra'];
              $objObra->setid($dato['id_obra']);
              $objObra->setnombre($dato['nombre']);
              // $objObra->setartista($dato['artista']);
              $objObra->setcategoria($dato['categoria']);
              $objObra->setdescripcion($dato['descripcion']);
              $objObra->setprecio($dato['precio']);
              $objObra->setsrcimg($dato['imagen']);
            ?>
            <tr>
              <td><?php echo $objObra->getid() ?></td>
              <td><img class="img_obra" src="img/obras/<?php echo $objObra->getsrcimg() ?>" alt=""></td>
              <td><?php echo $objObra->getnombre() ?></td>
              <td><?php echo $objObra->getdescripcion() ?></td>
              <td><?php echo "$ ".$objObra->getprecio() ?></td>
              <td><?php echo $objObra->getcategoria() ?></td>
              <td><input type="submit" name="" class="btn-enviar" id="btn-enviar" value="Ordenar" onClick="form_carrito.action='modelo/addcarrito.php';txtope_crud.value='o';txtid_crud.value='<?php echo $objObra->getid() ?>'"></td>
              <td><input type="submit" name="" class="btn-cancelar" id="btn-cancelar" value="Eliminar" onClick="form_carrito.action='modelo/addcarrito.php';txtope_crud.value='e';txtid_crud.value='<?php echo $objObra->getid() ?>'"></td>
            </tr>
            <?php
          }

          if (empty($auxid)) {
            ?>
            <tr><td colspan="8">NO HAY DATOS</td></tr>
            <?php
          }
          pg_close($conexion);
            ?>

          </table>
        </form>

      </div>

    </div>
    <?php
  }

  function consultaid($username){
    $idusuario="";
    include 'basedatos/conexion.php';
    $result=pg_query($conexion, "select id_usuario from usuario where usuario = '".$username."'");
    while ($dato = pg_fetch_array($result)){
       $idusuario = $dato['id_usuario'];
    }
    // return "15011200";
    return $idusuario;
  }

}
?>
