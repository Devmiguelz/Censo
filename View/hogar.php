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
	<title>Vivienda | Censo Poblacional 2018</title>
	<link href="../Public/css/bootstrap.min.css" rel="stylesheet">
	<link href="../Public/css/bootstrap.css" rel="stylesheet">
	<link href="../Public/css/CustomEstilos.css" rel="stylesheet">
	<link href="../Public/css/main.css" rel="stylesheet">
</head>
<body class="bg-dark">
	<div class="container-login100 Fondo">
		<div class="card card-register">
			<div class="card-header">HOGAR / DATOS DEL HOGAR</div>
			<div class="card-body">
				<form id="Form_Hogar" method="POST" action="../Model/Registrar_Hogar.php">
					<!-- SECCION #1-->
					<div class="tab">
						<div class="form-group">
							<label for="exampleFormControlSelect1">¿ De cuántos cuartos en total dispone su hogar ?</label>
							<label for="exampleFormControlSelect1">(Incluya la sala y el comedor. No incluya cocina ni los cuartos utilizados solo para garage o negocio)</label>
							<select class="form-control" id="validationDefault03">
								<option>Cuántos cuartos</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleFormControlSelect1">¿ Cuántos de esos cuartos usan las personas para dormir ?</label>
							<select class="form-control" id="validationDefault03">
								<option>Cuántos cuartos para dormir</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</div>
					</div>
					<!-- SECCION #2-->
					<div class="tab">
						
					</div>
					<!-- SECCION #3-->
					<div class="tab">
						
					</div>
					<!-- SECCION #4-->
					<div class="tab">
						
					</div>
				</form>
				<div style="overflow:auto;">
					<div class="text-center progress_bar">
						<div class="progress" id="myProgress">
							<div class="progress-bar progress-bar-striped" id="myBar" role="progressbar" style="width: 0%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">0%</div>
						</div>
					</div>
					<div style="float:right;">
						<button class="btn btn-back" type="button" id="prevBtn" onclick="nextPrev(-1)">ANTERIOR</button>
						<button class=" btn btn-next" type="button" id="nextBtn" onclick="nextPrev(1)">SIGUIENTE</button>
					</div>
				</div>
				<!-- Circles which indicates the steps of the form: -->
				<div style="text-align:center;margin-top:40px;">
					<span class="step"></span>
					<span class="step"></span>
					<span class="step"></span>
					<span class="step"></span>
					<span class="step"></span>
					<span class="step"></span>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- Bootstrap core JavaScript-->
<script src="../Public/js/jquery.min.js"></script>
<script src="../Public/js/jquery.steps.js"></script>
<script src="../Public/js/script_hogar.js"></script>
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
