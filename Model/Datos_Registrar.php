<?php

include '../Conexion/conexion.php';

$tipo = $_POST['tipo_documento'];
$tipo_doc = 0;
if ($tipo == "Cédula de Ciudadania") {
	$tipo_doc = 1;
}else{
	$tipo_doc = 2;
}	
$n_doc = $_POST['n_documento'];

$exp_anio =  $_POST['exp_anio'];
$exp_mes = $_POST['exp_mes'];
$exp_dia = $_POST['exp_dia'];


$exp = strtotime($exp_mes."/".$exp_dia."/".$exp_anio);

$fecha_exp = date('Y-m-d',$exp);

$p_nombre = $_POST['p_nombre'];
$s_nombre = $_POST['s_nombre'];
$p_apellido = $_POST['p_apellido'];
$s_apellido = $_POST['s_apellido'];

$s_radio = $_POST['genero'];
//echo $s_radio;
$sexo = 0;
if ($s_radio == "HOMBRE") {
	$sexo = 1;
}else if ($s_radio == "MUJER") {
	$sexo = 2;
}

$ser_publico = $_POST['s_publico'];
//echo $ser_publico;

$nac_anio =  $_POST['nac_anio'];
$nac_mes = $_POST['nac_mes'];
$nac_dia = $_POST['nac_dia'];

$nac = strtotime($nac_mes."/".$nac_dia."/".$nac_anio);

$fecha_nac = date('Y-m-d',$nac);

$correo = $_POST['correo'];
$pass = $_POST['contraseña1'];

//IMPRIMIR
/*echo $n_doc." ".$tipo_doc." ".$fecha_exp." ".$fecha_nac." ".$p_nombre." ".$s_nombre." ".$p_apellido." 
		".$s_apellido." ".$sexo." ".$ser_publico;*/


$insertar_persona = "INSERT INTO persona(documento,tipo_documento,fecha_expedicion, fecha_nacimiento,nombre,segundo_nombre,apellido,segundo_apellido,sexo,ser_publico) VALUES 
	('$n_doc','$tipo_doc','$fecha_exp','$fecha_nac','$p_nombre','$s_nombre','$p_apellido','$s_apellido',1,'NO')";

$insertar_usuario = "INSERT INTO usuario(correo,password,documento,tipo) VALUES 
					('$correo','$pass','$n_doc',0)";

$verificar_doc = $conectar->query("SELECT * FROM persona WHERE documento = '$n_doc' ");
if ($verificar_doc->fetch_assoc() > 0) {
	exit;
}

$verificar_correo = $conectar->query("SELECT * FROM usuario WHERE correo = '$correo' ");
if ($verificar_correo->fetch_assoc() > 0) {
	exit;
}

$resultado1 = $conectar->query($insertar_persona);
$resultado2 = $conectar->query($insertar_usuario);
if (!$resultado1 && !$resultado2) {
	echo "ERROR AL REGISTRAR";
}else{
	echo "USUARIO REGISTRADO";
}

$conectar->close();
?>