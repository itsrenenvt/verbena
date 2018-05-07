<?php
	$conexion=pg_connect("dbname=verbena user=postgres password=LaRanaRene")or die("Lo sentimos pero no se pudo conectar a la base de datos de verbena". pg_last_error());
?>

<?php
//
//  error_reporting(E_ALL);
//  class conexion{
//  private $ConectaBD=null;
//
// /*Función Conectar*/
//  function conectar(){
// 	 $booleanReturn = false;
// 	 try{
// 		 $this->ConectaBD = new PDO("pgsql:dbname=verbena; host=localhost; user=verbuenorene; password=LaRanaRene");
// 		 $booleanReturn = true;
// 	 }catch(Exception $e){
// 		 throw $e;
// 	 }
// 	 return $booleanReturn;
//  }
//
// /*Función Desconectar*/
// function desconectar(){
// 	$booleanReturn = true;
// 	if ($this->ConectaBD != null){
// 		$this->ConectaBD=null;
// 	}
// 	return $booleanReturn;
// }
//
//
// function ejecutarConsulta($psConsulta){
// 	$arrayResultSet = null;
// 	$ResultStatement = null;
// 	$oLinea = null;
// 	$sValCol = "";
// 	$i=0;
// 	$j=0;
//
// 	if ($psConsulta == ""){
// 		throw new Exception("AccesoDatos->ejecutarConsulta: falta indicar la consulta");
// 	}
// 	if ($this->ConectaBD == null){
// 		throw new Exception("AccesoDatos->ejecutarConsulta: falta conectar la base");
// 	}
//
// 	try{
// 		$ResultStatement = $this->ConectaBD->query($psConsulta); //un objeto PDOStatement o falso en caso de error
// 	}catch(Exception $e){
// 		throw $e;
// 	}
// 	if ($ResultStatement){
// 		foreach($ResultStatement as $oLinea){
// 			foreach($oLinea as $llave=>$sValCol){
// 				if (is_string($llave)){
// 					$arrayResultSet[$i][$j] = $sValCol;
// 					$j++;
// 				}
// 			}
// 			$j=0;
// 			$i++;
// 		}
// 	}
// 	return $arrayResultSet;
// }
//
//
// function ejecutarComando($psComando){
// 	$nAfectados = -1;
// 	if ($psComando == ""){
// 		throw new Exception("AccesoDatos->ejecutarComando: falta indicar el comando");
// 	}
// 	if ($this->ConectaBD == null){
// 		throw new Exception("AccesoDatos->ejecutarComando: falta conectar la base");
// 	}
// 	try{
// 		$nAfectados =$this->ConectaBD->exec($psComando);
// 	}catch(Exception $e){
// 		throw $e;
// 	}
// 	return $nAfectados;
// }
//
// }
 ?>
