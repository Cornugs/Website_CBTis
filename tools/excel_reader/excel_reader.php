<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>CBTis136</title>
        <link rel="stylesheet" href="../../website/css/bootstrap.css">
        <link rel="stylesheet" href="../../website/css/styles.css">
        <link rel="icon" href="../../website/img/icono_cbtis136.ico">
    </head>

    <body>
        <div class="error">
            <span>Tu usuario o contraseña son incorrectos, por favor vuelve a intentarlo.</span>
        </div>

        <div class="container-fluid">
            <section class="row">
                <div class="col-6 offset-3 div_formulario_subir_excel" align="center">
                    <h1 class="text-center etacqqsalbdd">Elige tu archivo .csv que quieras subir a la base de datos</h1>
                    <div class="row">
                        <div class="col-8 offset-2">
							<form id="formulario_examinar" method="POST" action="">
								<input class="input_examinar" name="examinar" type="file" required>
								<input class="boton_enviar" type="submit" value="Enviar">
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