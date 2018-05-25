<?php
$conectar = new mysqli('localhost','root','','censo');
if ($conectar->connect_errno) {
	echo "Error al conectarse con My SQL debido al error".$conectar->connect_error;
}else{
	if (!$conectar->set_charset("utf8")) {
		printf("Error cargando el conjunto de caracteres utf8: %s\n", $conectar->error);
		exit();
	}
}
?>
