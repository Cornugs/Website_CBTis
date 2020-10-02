jQuery(document).on('submit', '#formulario_login', function (event)
{
    var botonEnviar = $('.boton_enviar');
    var inputUsuario = $('.input_usuario');
    var inputPassword = $('.input_password')
    var error = $('.error');
    event.preventDefault();

    jQuery.ajax({
        url: 'main_app/login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function ()
        {
            botonEnviar.val('Validando... ')
        }
    })
    .done(function(respuesta) {
        console.log(respuesta);
        if (respuesta.error != true)
        {   
            if (respuesta.tipo == "Admin")
            {
                location = 'main_app/Admin/admin.php';
            } else if (respuesta.tipo == "Usuario") {
                location = 'main_app/Usuario/usuario.php';
            }
            inputUsuario.val('');
            inputPassword.val('');
        } else {
            error.slideDown('slow');
            inputUsuario.val('');
            inputPassword.val('');

            setTimeout(function()
            {
                error.slideUp('slow');
            }, 3000);
            botonEnviar.val('Iniciar Sesión');
        }
    })
    .fail( function(resp) {
        console.log("Tengo algun error.");
        console.log(resp.responseText);
    })
    .always(function() {
        console.log("Completado.");
    });
});