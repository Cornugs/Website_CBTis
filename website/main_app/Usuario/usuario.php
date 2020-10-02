<?php 
	require '../conexion.php';

	session_start();

	$usuario = $_SESSION['usuario'];
	$password = $_SESSION['password'];

	$usuarios = $mysqli->query("SELECT * FROM usuarios
    WHERE usuario = '".$usuario."' AND password = '".$password."'
	AND tipo_usuario = 'Usuario'");

	if($usuarios->num_rows == 0):
        header("Location: http://127.0.0.1/cbtis136/website/");
    endif; 
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>CBTis136</title>
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../css/styles.css">
        <link rel="icon" href="../../img/icono_cbtis136.ico">
    </head>

    <body>
        <div class="container-fluid">
            <header class="row justify-content-center">
                <div class="div_qsdr">
                  <h1 align="center" class="h1_qsdr">¿Qué solicitud deseas realizar?</h1>
                </div>
            </header>

            <section class="row">
                <div class="col-5">
                    <button class="boton_extraordinario" onclick="location='Extraordinario/extraordinario_views.php'">Extraordinario</button>
                    <button class="boton_intersemestral" onclick="location='Intersemestral/intersemestral_views.php'">Intersemestral</button>
                    <button class="boton_contraturno" onclick="location='Contraturno/contraturno_views.php'">Contraturno</button>
                </div>

                <div class="col-6 offset-1">
                    <div class="div_logo_cbtis136_2">
                        <img src="../../img/logo_cbtis136_2.png" class="logo_cbtis136_2" />
                    </div>
                </div>
            </section>
        </div>

        <!--Scripts-->
        <script src="../../js/jquery.min.js"></script>
        <script src="../../js/bootstrap.js"></script>
    </body>
</html>
