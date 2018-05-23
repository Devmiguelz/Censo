<?php
session_start();

require('../Conexion/conexion.php');   

sleep(2);

$email = $_POST['email'];
$password = $_POST['password'];

$usuarios = $conectar->query("SELECT P.documento,P.nombre,P.apellido,S.tipo FROM usuario S,persona P  
	WHERE P.documento = S.documento 
	AND correo ='".$email."' AND password ='".$password."' ");

if ($usuarios->num_rows == 1):
	$row = $usuarios->fetch_assoc();
	$_SESSION["estado"] = true;
	$_SESSION["documento"] = $row['documento'];
	$_SESSION["nombre"] = $row['nombre'];
	$_SESSION["apellido"] = $row['apellido']; 
	$_SESSION["tipo"] = $row['tipo'];
	echo json_encode(array('error'=>false,'tipo'=> $row['tipo']));
else:
	echo json_encode(array('error'=>true));
	session_destroy();
endif;

$conectar->close();

?>
