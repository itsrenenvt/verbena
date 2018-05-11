<?php
// require '..\basedatos\conexion.php';
?>
<?php
$c_user="";
$c_pass="";
class usuario{
  protected $pass_user="";
  protected $pass_user_c="";
  protected $name_user="";

  function setpass($ppass_user){
    $this->pass_user = $ppass_user;
  }

  function getpass(){
    return $this->pass_user;
  }

  function setuser($pname_user){
    $this->name_user = $pname_user;
  }

  function getuser(){
    return $this->name_user;
  }

  function setpass_c($ppass_user_c){
    $this->pass_user_c = $ppass_user_c;
  }

  function getpass_c(){
    return $this->pass_user_c;
  }

  public function buscaadmin(){
    // echo '<p>' .$this->getuser().'</p>';
    require '..\basedatos\conexion.php';
    $result=pg_query($conexion,
    'select usuario, contraseña from administrador where usuario ='."'". $this->getuser()."'");
    while ($dato = pg_fetch_array($result)){
      $c_user = $dato['usuario'];
      $c_pass = $dato['contraseña'];
      // echo "c_user: ".$c_user;
      // echo "c_pass: ".$c_pass;
      // if ($this->getpass()==$c_pass) {
      //   header('Location: ../administrador.php');
      // }else{
      //   header('Location: ../login.php');
      // }
      $this->setpass_c($c_pass);
    }
    echo "USUARIO NO EXISTE";

  }
  public function buscacolaborador(){

  }
  public function buscacliente(){

  }

}
?>
