<?php 
    require 'conexion.php';
    sleep(2);

	session_start();

    $usuario = $_POST['usuario_login'];
    $password = $_POST ['password_login'];

	$_SESSION['usuario'] = $usuario;
	$_SESSION['password'] = $password;

    $usuarios = $mysqli->query("SELECT tipo_usuario FROM usuarios
    WHERE usuario = '".$usuario."' AND password = '".$password."'");

    if($usuarios->num_rows == 1):
        $datos = $usuarios->fetch_assoc();
        echo json_encode(array('error' => false, 'tipo' => $datos['tipo_usuario'], 'validacion' => 'validado'));
    else:
        echo json_encode(array('error' => true));
    endif;

    $mysqli->close();
?>