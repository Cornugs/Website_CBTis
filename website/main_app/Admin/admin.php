<?php 
	session_start();

	require '../conexion.php';

	$usuario = $_SESSION['usuario'];
	$password = $_SESSION['password'];

	$usuarios = $mysqli->query("SELECT * FROM usuarios
    WHERE usuario = '".$usuario."' AND password = '".$password."'
	AND tipo_usuario = 'Admin'");

	if($usuarios->num_rows == 0):
        header("Location: http://127.0.0.1/cbtis136/website/");
    endif;

	echo 'SOY UN ADMINISTRADOR';
?>