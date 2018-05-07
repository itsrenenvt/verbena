<?php
// include_once("../includes/header.html");
?>

<section>
  <h1>Error</h1>
  <h4><?php echo((isset($_REQUEST["sError"]))? $_REQUEST["sError"]: "Otro error"); ?></h4>
			<?php
				if (isset($_SESSION["oUsu"])){
			?>
				<a href="../login.php">Regresar al inicio</a>
			<?php
				}else{
			?>
				<a href="../index.php">Regresar al inicio</a>
			<?php
				}
			?>
		</section>
<?php
// include_once("../includes/footer.html");
?>
