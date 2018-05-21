<?php
session_start();
include '../Conexion/conexion.php';
if(isset($_SESSION['estado'])){ 
	if($_SESSION['tipo'] == 0){ 
		$nombre = $_SESSION["nombre"];
		$apellido = $_SESSION["apellido"];
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Inicio | Bienvenido Censo Poblacional 2018</title>
		<link href="../Public/css/bootstrap.min.css" rel="stylesheet">
		<link href="../Public/css/bootstrap.css" rel="stylesheet">
		<link href="../Public/css/main.css" rel="stylesheet">
		<link href="../Public/css/CustomEstilos.css" rel="stylesheet">
	</head>
	<body>
		<div class="container" >
			<h1 class="font-weight-bold titulo"><?php echo "<span>".$nombre." ".$apellido."</span>"; ?> bienvenido(a)  al Censo Poblacional 2018</h1>
			<p class="subtitulo">Es necesario que completes <strong>todas las preguntas de cada sección para poder avanzar a la siguiente.</strong></p>
			<div class="form-group row espacio">
				<div class="col-md-3">
					<div class="seccion11" id="seccion11">
						<p class="font-weight-bold text-center texto" id="texto1" for="seccion">UBICACIÓN</p>
						<img  class="imag" id="Imge" src="../Public/images/ubicacion.png" alt="">
					</div>
					<a class="btn btn-dark B_empezar" href="ubicacion.php"><strong>EMPEZAR<span class="glyphicon glyphicon-chevron-right"></span></strong>
					</a>
					<p>Preguntas sobre la ubicación de su vivienda.</p>
				</div>
				<div class="col-md-3">
					<div class="seccion22" id="seccion22">
						<p  class="font-weight-bold text-center texto" id="texto2" for="seccion">VIVIENDA</p>
						<img  class="imag" src="../Public/images/vivienda.png" alt="">
					</div>
					<a  class="btn btn-dark B_empezar" href="vivienda.php"><strong>EMPEZAR<span class="glyphicon glyphicon-chevron-right"></span></strong>
					</a>
					<p>Preguntas sobre la vivienda en la reside habitualmente.</p>
				</div>
				<div class="col-md-3">
					<div class="seccion33" id="seccion33">
						<p class="font-weight-bold text-center texto" id="texto3" for="seccion">HOGAR</p>
						<img  class="imag" src="../Public/images/hogar.png" alt="">
					</div>
					<a class="btn btn-dark B_empezar" href="hogar.php"><strong>EMPEZAR<span class="glyphicon 	glyphicon-chevron-right"></span></strong>
					</a>
					<p>Preguntas sobre las caracteristicas de su hogar.</p>
				</div>
				<div class="col-md-3">
					<div class="seccion44" id="seccion44">
						<p class="font-weight-bold text-center texto" id="texto4" for="seccion">PERSONAS</p>
						<img  class="imag" src="../Public/images/personas.png" alt="">
					</div>
					<a  class="btn btn-dark B_empezar" href="personas.php"><strong>EMPEZAR<span class="glyphicon glyphicon-chevron-right"></span></strong>
					</a>
					<p>Preguntas sobre las personas que conforman su hogar.</p>
				</div>
			</div>
			<div class="text-center progress_bar">
				<div class="progress">
					<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10% COMPLETADO</div>
				</div>
			</div>	
			<div class="btn salir"><a class="Bsalir" href="logout.php" ><strong>SALIR</strong></a></div>
		</div>

		<script src="../Public/js/jquery.js"></script>
		<script src="../Public/js/script_home.js" type="text/javascript" charset="utf-8"></script>
	</body>
	</html>
	<?php
	}else if($_SESSION['tipo'] == 1){
		echo '<script> window.location="admin.php"; </script>';
	}
}else{
	echo '<script> window.location="../index.php"; </script>';
}
?>