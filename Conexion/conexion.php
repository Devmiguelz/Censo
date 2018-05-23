<?php
	$conectar = new mysqli('localhost','root','','censo');
	if ($conectar->connect_errno) {
	  echo "Error al conectarse con My SQL debido al error".$conectar->connect_error;
	}
?>
