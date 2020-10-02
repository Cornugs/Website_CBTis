<?php
	$host = '127.0.0.1';
	$usuario = 'root';
	$password = '';
	$database = 'cbtis';
	$port = 3306;

    $mysqli = new mysqli($host, $usuario, $password, $database, $port);

    if ($mysqli->connect_errno):
        echo 'Error al conectarse con la base de datos MySQL. :(';
    endif;

	if (!$mysqli->set_charset("utf8")):
       die("Error cargando el conjunto de caracteres utf8");
	endif;
?>