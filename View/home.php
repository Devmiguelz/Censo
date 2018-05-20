<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">
	<title>Inicio | Bienvenido al Censo Poblacional 2018</title>
	<link href="../Public/css/bootstrap.css" rel="stylesheet">
	<link href="../Public/css/bootstrap.min.css" rel="stylesheet">
  	<link href="../Public/css/CustomEstilos.css" rel="stylesheet">
</head>
<body>
	<div class="col-md-12 fondo">
		<h1 class="">Bienvenido(a) al Censo Poblacional 2018</h1>
		<p class="titulo">Es necesario que complete <strong>todas las preguntas de cada sección para poder avanzar a la siguiente.</strong></p>
		<div class="btn salir"><a class="Bsalir" href="login.html" ><strong>SALIR</strong></a></div>
		<div class="form-group row">
			<div class="col-md-3">
				<div class="seccion11" id="seccion11">
					<p class="font-weight-bold text-center texto" id="texto1" for="seccion">UBICACIÓN</p>
					<img  class="imag" id="Imge" src="../Public/images/ubicacion.png" alt="">
				</div>
				<a class="btn btn-dark B_empezar" href="ubicacion.html"><strong>EMPEZAR<span class="glyphicon glyphicon-chevron-right"></span></strong>
				</a>
				<p>Preguntas sobre la ubicación de su vivienda.</p>
			</div>
			<div class="col-md-3">
				<div class="seccion22" id="seccion22">
					<p  class="font-weight-bold text-center texto" id="texto2" for="seccion">VIVIENDA</p>
					<img  class="imag" src="../Public/images/vivienda.png" alt="">
				</div>
				<a  class="btn btn-dark B_empezar" href="vivienda.html"><strong>EMPEZAR<span class="glyphicon glyphicon-chevron-right"></span></strong>
				</a>
				<p>Preguntas sobre la vivienda en la reside habitualmente.</p>
			</div>
			<div class="col-md-3">
				<div class="seccion33" id="seccion33">
					<p class="font-weight-bold text-center texto" id="texto3" for="seccion">HOGAR</p>
					<img  class="imag" src="../Public/images/hogar.png" alt="">
				</div>
				<a class="btn btn-dark B_empezar" href="hogar.html"><strong>EMPEZAR<span class="glyphicon 	glyphicon-chevron-right"></span></strong>
				</a>
				<p>Preguntas sobre las caracteristicas de su hogar.</p>
			</div>
			<div class="col-md-3">
				<div class="seccion44" id="seccion44">
					<p class="font-weight-bold text-center texto" id="texto4" for="seccion">PERSONAS</p>
					<img  class="imag" src="../Public/images/personas.png" alt="">
				</div>
				<a  class="btn btn-dark B_empezar" href="personas.html"><strong>EMPEZAR<span class="glyphicon glyphicon-chevron-right"></span></strong>
				</a>
				<p>Preguntas sobre las personas que conforman su hogar.</p>
			</div>
		</div>
	</div>
	<div class="text-center progress_bar">
         <div class="progress">
            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">10%</div>
        </div>
    </div>	
    <script src="../Public/js/jquery.js"></script>
    <script src="../Public/js/script_home.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>