<?php
	session_start();
	session_unset(); 
	session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>CBTis136</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="icon" href="img/icono_cbtis136.ico">
    </head>

    <body>
        <div class="error">
            <span>Tu usuario o contraseña son incorrectos, por favor vuelve a intentarlo.</span>
        </div>

        <div class="container-fluid">
            <header class="row">
                <div class="col-3 offset-1 justify-content-center div_logo_cbtis136">
                    <img class="text-center logo_cbtis136" src="img/logo_cbtis136.png">
                </div>

                <div class="col-3 offset-4 div_logo_uemstis">
                    <img class="logo_uemstis" src="img/logo_uemstis.png">
                </div>
            </header>

            <section class="row">
                <div class="col-6 offset-3 div_formulario_iniciar_sesion" align="center">
                    <h1 class="text-center iniciar_sesion">Iniciar Sesión</h1>
                    <div class="row">
                        <div class="col-8 offset-2">
							<form id="formulario_login" method="POST" action="">
								<input class="input_usuario" name="usuario_login" type="text" placeholder="Nombre de Usuario" required>
								<input class="input_password" name="password_login" type="password" placeholder="Contraseña" required>
								<input class="boton_enviar" type="submit" value="Iniciar Sesión">
							</form>
                        </div>   
                    </div>
                </div>
            </section>
        </div>

        <!--Scripts-->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>