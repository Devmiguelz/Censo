<?php
session_start();
require('../Conexion/conexion.php');
sleep(2);
$email = $_POST['email'];
$password = $_POST['password'];
$usuarios = $mysqli->query("SELECT * From usuarios Where correo ='".$email."' AND password ='".$password."'");
if ($usuarios->num_rows == 1):
	$row = $usuarios->fetch_assoc();
	$_SESSION["estado"] = true;
	$_SESSION["id"] = $row['id'];
	$_SESSION["nombre"] = $row['nombre'];
	$_SESSION["apellido"] = $row['apellido']; 
	$_SESSION["correo"] = $row['correo'];
	$_SESSION["password"] = $row['password'];
	$_SESSION["tipo"] = $row['tipo'];
	echo json_encode(array('error'=>false,'tipo'=> $row['tipo']));
else:
	echo json_encode(array('error'=>true));
	session_destroy();
endif;
$mysqli->close();
?>
