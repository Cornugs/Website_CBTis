jQuery(document).on('submit', '#formulario_bpndc', function (event)
{
    var spanNoControl = $('.span_no_control');
    var spanNombre = $('.span_nombre');
    var spanPaterno = $('.span_paterno');
    var spanMaterno = $('.span_materno');
    var spanGrupo = $('.span_grupo');
    var spanTurno = $('.span_turno');
    var spanCarrera = $('.span_carrera');
    var inputNoControl = $('.input_no_control');
    var divDatosAlumno = $('.div_datos_alumno');
    var botonLimpiar = $('.boton_limpiar');
    var divMateriasNoReprobadas = $('.div_materias_no_reprobadas');
    var divMateriasReprobadas = $('.div_materias_reprobadas');
    var botonSeguir = $('.boton_seguir');
    var error = $('.error');
    var divUnaMateriaReprobada = $('.div_una_materia_reprobada');
    var divDosMateriasReprobadas = $('.div_dos_materias_reprobadas');
    var divTresMateriasReprobadas = $('.div_tres_materias_reprobadas');
    var divCuatroMateriasReprobadas = $('.div_cuatro_materias_reprobadas');
    var divCincoMateriasReprobadas = $('.div_cinco_materias_reprobadas');
    var divSeisMateriasReprobadas = $('.div_seis_materias_reprobadas');
    var divSieteMateriasReprobadas = $('.div_siete_materias_reprobadas');
    var labelCheckbox1 = $('.label_checkbox_1');
    var labelCheckbox2 = $('.label_checkbox_2');
    var labelCheckbox3 = $('.label_checkbox_3');
    var labelCheckbox4 = $('.label_checkbox_4');
    var labelCheckbox5 = $('.label_checkbox_5');
    var labelCheckbox6 = $('.label_checkbox_6');
    var labelCheckbox7 = $('.label_checkbox_7');
    var idCheckbox1 = $('#id_checkbox_1');
    var idCheckbox2 = $('#id_checkbox_2');
    var idCheckbox3 = $('#id_checkbox_3');
    var idCheckbox4 = $('#id_checkbox_4');
    var idCheckbox5 = $('#id_checkbox_5');
    var idCheckbox6 = $('#id_checkbox_6');
    var idCheckbox7 = $('#id_checkbox_7');
    var idCheckbox8 = $('#id_checkbox_8');
    var idCheckbox9 = $('#id_checkbox_9');
    var idCheckbox10 = $('#id_checkbox_10');
    var idCheckbox11 = $('#id_checkbox_11');
    var idCheckbox12 = $('#id_checkbox_12');
    var idCheckbox13 = $('#id_checkbox_13');
    var idCheckbox14 = $('#id_checkbox_14');
    var idCheckbox15 = $('#id_checkbox_15');
    var idCheckbox16 = $('#id_checkbox_16');
    var idCheckbox17 = $('#id_checkbox_17');
    var idCheckbox18 = $('#id_checkbox_18');
    var idCheckbox19 = $('#id_checkbox_19');
    var idCheckbox20 = $('#id_checkbox_20');
    var idCheckbox21 = $('#id_checkbox_21');
    var idCheckbox22 = $('#id_checkbox_22');
    var idCheckbox23 = $('#id_checkbox_23');
    var idCheckbox24 = $('#id_checkbox_24');
    var idCheckbox25 = $('#id_checkbox_25');
    var idCheckbox26 = $('#id_checkbox_26');
    var idCheckbox27 = $('#id_checkbox_27');
    var idCheckbox28 = $('#id_checkbox_28');
    var botonRegresar = $('.boton_regresar');
    var botonSeguir2 = $('.boton_seguir_2');
    var divNingunaMateriaSeleccionada = $('.div_ninguna_materia_seleccionada');
    var divLimitePasadoMateriasSeleccionadas = $('.div_limite_pasado_de_materias_seleccionadas');
    var divMateriasSeleccionadas = $('.div_materias_seleccionadas');

    event.preventDefault();

    jQuery.ajax({
        url: 'extraordinario_app/extraordinario_functions.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function ()
        {
            idCheckbox1.val('');
            idCheckbox2.val('');
            idCheckbox3.val('');
            idCheckbox4.val('');
            idCheckbox5.val('');
            idCheckbox6.val('');
            idCheckbox7.val('');
            idCheckbox8.val('');
            idCheckbox9.val('');
            idCheckbox10.val('');
            idCheckbox11.val('');
            idCheckbox12.val('');
            idCheckbox13.val('');
            idCheckbox14.val('');
            idCheckbox15.val('');
            idCheckbox16.val('');
            idCheckbox17.val('');
            idCheckbox18.val('');
            idCheckbox19.val('');
            idCheckbox20.val('');
            idCheckbox21.val('');
            idCheckbox22.val('');
            idCheckbox23.val('');
            idCheckbox24.val('');
            idCheckbox25.val('');
            idCheckbox26.val('');
            idCheckbox27.val('');
            idCheckbox28.val('');
            idCheckbox1.prop('checked', false);
            idCheckbox2.prop('checked', false);
            idCheckbox3.prop('checked', false);
            idCheckbox4.prop('checked', false);
            idCheckbox5.prop('checked', false);
            idCheckbox6.prop('checked', false);
            idCheckbox7.prop('checked', false);
            idCheckbox8.prop('checked', false);
            idCheckbox9.prop('checked', false);
            idCheckbox10.prop('checked', false);
            idCheckbox11.prop('checked', false);
            idCheckbox12.prop('checked', false);
            idCheckbox13.prop('checked', false);
            idCheckbox14.prop('checked', false);
            idCheckbox15.prop('checked', false);
            idCheckbox16.prop('checked', false);
            idCheckbox17.prop('checked', false);
            idCheckbox18.prop('checked', false);
            idCheckbox19.prop('checked', false);
            idCheckbox20.prop('checked', false);
            idCheckbox21.prop('checked', false);
            idCheckbox22.prop('checked', false);
            idCheckbox23.prop('checked', false);
            idCheckbox24.prop('checked', false);
            idCheckbox25.prop('checked', false);
            idCheckbox26.prop('checked', false);
            idCheckbox27.prop('checked', false);
            idCheckbox28.prop('checked', false); 
            labelCheckbox1.text('');
            labelCheckbox2.text('');
            labelCheckbox3.text('');
            labelCheckbox4.text('');
            labelCheckbox5.text('');
            labelCheckbox6.text('');
            labelCheckbox7.text('');
            divUnaMateriaReprobada.css("display", "none");
            divDosMateriasReprobadas.css("display", "none");
            divTresMateriasReprobadas.css("display", "none");
            divCuatroMateriasReprobadas.css("display", "none");
            divCincoMateriasReprobadas.css("display", "none");
            divSeisMateriasReprobadas.css("display", "none");
            divSieteMateriasReprobadas.css("display", "none");
            divMateriasNoReprobadas.css("display", "none");
            divMateriasReprobadas.css("display", "none");
            divNingunaMateriaSeleccionada.css("display", "none");
            divLimitePasadoMateriasSeleccionadas.css("display", "none");
            divMateriasSeleccionadas.css("display", "none");
            divDatosAlumno.slideUp('slow');
        }
    })
    .done(function (respuesta) {
        console.log(respuesta);
        var array = respuesta;
        var primero = array[0];
        var ultimo = array.length;
        if (primero.error != true)
        {
            spanNoControl.text(primero.no_control);
            spanNombre.text(primero.nombre);
            spanPaterno.text(primero.apellido_paterno);
            spanMaterno.text(primero.apellido_materno);
            spanGrupo.text(primero.grupo);
            spanTurno.text(primero.turno);
            spanCarrera.text(primero.carrera);
            inputNoControl.val('');
            divDatosAlumno.slideDown('slow');
            botonLimpiar.click(function () {
                divMateriasSeleccionadas.css("display", "none");
                divLimitePasadoMateriasSeleccionadas.css("display", "none");
                divNingunaMateriaSeleccionada.css("display", "none");
                divUnaMateriaReprobada.css("display", "none");
                divDosMateriasReprobadas.css("display", "none");
                divTresMateriasReprobadas.css("display", "none");
                divCuatroMateriasReprobadas.css("display", "none");
                divCincoMateriasReprobadas.css("display", "none");
                divSeisMateriasReprobadas.css("display", "none");
                divSieteMateriasReprobadas.css("display", "none");
                divMateriasNoReprobadas.css("display", "none");
                divMateriasReprobadas.css("display", "none");
                spanNoControl.text('');
                spanNombre.text('');
                spanPaterno.text('');
                spanMaterno.text('');
                spanGrupo.text('');
                spanTurno.text('');
                spanCarrera.text('');
                idCheckbox1.val('');
                idCheckbox2.val('');
                idCheckbox3.val('');
                idCheckbox4.val('');
                idCheckbox5.val('');
                idCheckbox6.val('');
                idCheckbox7.val('');
                idCheckbox8.val('');
                idCheckbox9.val('');
                idCheckbox10.val('');
                idCheckbox11.val('');
                idCheckbox12.val('');
                idCheckbox13.val('');
                idCheckbox14.val('');
                idCheckbox15.val('');
                idCheckbox16.val('');
                idCheckbox17.val('');
                idCheckbox18.val('');
                idCheckbox19.val('');
                idCheckbox20.val('');
                idCheckbox21.val('');
                idCheckbox22.val('');
                idCheckbox23.val('');
                idCheckbox24.val('');
                idCheckbox25.val('');
                idCheckbox26.val('');
                idCheckbox27.val('');
                idCheckbox28.val('');
                labelCheckbox1.text('');
                labelCheckbox2.text('');
                labelCheckbox3.text('');
                labelCheckbox4.text('');
                labelCheckbox5.text('');
                labelCheckbox6.text('');
                labelCheckbox7.text('');
                idCheckbox1.prop('checked', false);
                idCheckbox2.prop('checked', false);
                idCheckbox3.prop('checked', false);
                idCheckbox4.prop('checked', false);
                idCheckbox5.prop('checked', false);
                idCheckbox6.prop('checked', false);
                idCheckbox7.prop('checked', false);
                idCheckbox8.prop('checked', false);
                idCheckbox9.prop('checked', false);
                idCheckbox10.prop('checked', false);
                idCheckbox11.prop('checked', false);
                idCheckbox12.prop('checked', false);
                idCheckbox13.prop('checked', false);
                idCheckbox14.prop('checked', false);
                idCheckbox15.prop('checked', false);
                idCheckbox16.prop('checked', false);
                idCheckbox17.prop('checked', false);
                idCheckbox18.prop('checked', false);
                idCheckbox19.prop('checked', false);
                idCheckbox20.prop('checked', false);
                idCheckbox21.prop('checked', false);
                idCheckbox22.prop('checked', false);
                idCheckbox23.prop('checked', false);
                idCheckbox24.prop('checked', false);
                idCheckbox25.prop('checked', false);
                idCheckbox26.prop('checked', false);
                idCheckbox27.prop('checked', false);
                idCheckbox28.prop('checked', false); 
                divDatosAlumno.slideUp('slow');
            });
            botonSeguir.on('click', function (e) {
                e.preventDefault();

                divMateriasSeleccionadas.css("display", "none");
                divLimitePasadoMateriasSeleccionadas.css("display", "none");
                divNingunaMateriaSeleccionada.css("display", "none");
                idCheckbox1.prop('checked', false);
                idCheckbox2.prop('checked', false);
                idCheckbox3.prop('checked', false);
                idCheckbox4.prop('checked', false);
                idCheckbox5.prop('checked', false);
                idCheckbox6.prop('checked', false);
                idCheckbox7.prop('checked', false);
                idCheckbox8.prop('checked', false);
                idCheckbox9.prop('checked', false);
                idCheckbox10.prop('checked', false);
                idCheckbox11.prop('checked', false);
                idCheckbox12.prop('checked', false);
                idCheckbox13.prop('checked', false);
                idCheckbox14.prop('checked', false);
                idCheckbox15.prop('checked', false);
                idCheckbox16.prop('checked', false);
                idCheckbox17.prop('checked', false);
                idCheckbox18.prop('checked', false);
                idCheckbox19.prop('checked', false);
                idCheckbox20.prop('checked', false);
                idCheckbox21.prop('checked', false);
                idCheckbox22.prop('checked', false);
                idCheckbox23.prop('checked', false);
                idCheckbox24.prop('checked', false);
                idCheckbox25.prop('checked', false);
                idCheckbox26.prop('checked', false);
                idCheckbox27.prop('checked', false);
                idCheckbox28.prop('checked', false); 

                if (primero.reprobar != false) {
                    divUnaMateriaReprobada.css("display", "none");
                    divDosMateriasReprobadas.css("display", "none");
                    divTresMateriasReprobadas.css("display", "none");
                    divCuatroMateriasReprobadas.css("display", "none");
                    divCincoMateriasReprobadas.css("display", "none");
                    divSeisMateriasReprobadas.css("display", "none");
                    divSieteMateriasReprobadas.css("display", "none");
                    divMateriasNoReprobadas.css("display", "none");
                    divMateriasReprobadas.css("display", "none");
                    divMateriasReprobadas.css("display", "block");
                    divMateriasNoReprobadas.css("display", "none");

                    var scrollDivMateriasReprobadas = $('.div_materias_reprobadas').offset().top;

                    $('html, body').animate({
                        scrollTop: scrollDivMateriasReprobadas
                    }, 'slow');

                    for ($i = 0; $i < ultimo; $i++) {
                        if (ultimo - 1 == 0)
                        {
                            labelCheckbox1.text(array[$i].asignatura);
                            idCheckbox1.val(array[$i].asignatura);
                            divUnaMateriaReprobada.css("display", "block");
                        } else if (ultimo - 1 == 1) {
                            if ($i == 0)
                            {
                                labelCheckbox1.text(array[$i].asignatura);
                                idCheckbox2.val(array[$i].asignatura);
                            } else if ($i == 1) {
                                labelCheckbox2.text(array[$i].asignatura);
                                idCheckbox3.val(array[$i].asignatura);
                            }
                            divDosMateriasReprobadas.css("display", "block");
                        } else if (ultimo - 1 == 2) {
                            if ($i == 0) {
                                labelCheckbox1.text(array[$i].asignatura);
                                idCheckbox4.val(array[$i].asignatura);
                            } else if ($i == 1) {
                                labelCheckbox2.text(array[$i].asignatura);
                                idCheckbox5.val(array[$i].asignatura);
                            } else if ($i == 2) {
                                labelCheckbox3.text(array[$i].asignatura);
                                idCheckbox6.val(array[$i].asignatura);
                            }
                            divTresMateriasReprobadas.css("display", "block");
                        } else if (ultimo - 1 == 3) {
                            if ($i == 0) {
                                labelCheckbox1.text(array[$i].asignatura);
                                idCheckbox7.val(array[$i].asignatura);
                            } else if ($i == 1) {
                                labelCheckbox2.text(array[$i].asignatura);
                                idCheckbox8.val(array[$i].asignatura);
                            } else if ($i == 2) {
                                labelCheckbox3.text(array[$i].asignatura);
                                idCheckbox9.val(array[$i].asignatura);
                            } else if ($i == 3) {
                                labelCheckbox4.text(array[$i].asignatura);
                                idCheckbox10.val(array[$i].asignatura);
                            }
                            divCuatroMateriasReprobadas.css("display", "block");
                        } else if (ultimo - 1 == 4) {
                            if ($i == 0) {
                                labelCheckbox1.text(array[$i].asignatura);
                                idCheckbox11.val(array[$i].asignatura);
                            } else if ($i == 1) {
                                labelCheckbox2.text(array[$i].asignatura);
                                idCheckbox12.val(array[$i].asignatura);
                            } else if ($i == 2) {
                                labelCheckbox3.text(array[$i].asignatura);
                                idCheckbox13.val(array[$i].asignatura);
                            } else if ($i == 3) {
                                labelCheckbox4.text(array[$i].asignatura);
                                idCheckbox14.val(array[$i].asignatura);
                            } else if ($i == 4) {
                                labelCheckbox5.text(array[$i].asignatura);
                                idCheckbox15.val(array[$i].asignatura);
                            }
                            divCincoMateriasReprobadas.css("display", "block");
                        } else if (ultimo - 1 == 5) {
                            if ($i == 0) {
                                labelCheckbox1.text(array[$i].asignatura);
                                idCheckbox16.val(array[$i].asignatura);
                            } else if ($i == 1) {
                                labelCheckbox2.text(array[$i].asignatura);
                                idCheckbox17.val(array[$i].asignatura);
                            } else if ($i == 2) {
                                labelCheckbox3.text(array[$i].asignatura);
                                idCheckbox18.val(array[$i].asignatura);
                            } else if ($i == 3) {
                                labelCheckbox4.text(array[$i].asignatura);
                                idCheckbox19.val(array[$i].asignatura);
                            } else if ($i == 4) {
                                labelCheckbox5.text(array[$i].asignatura);
                                idCheckbox20.val(array[$i].asignatura);
                            } else if ($i == 5) {
                                labelCheckbox6.text(array[$i].asignatura);
                                idCheckbox21.val(array[$i].asignatura);
                            }
                            divSeisMateriasReprobadas.css("display", "block");
                        } else if (ultimo - 1 == 6) {
                            if ($i == 0) {
                                labelCheckbox1.text(array[$i].asignatura);
                                idCheckbox22.val(array[$i].asignatura);
                            } else if ($i == 1) {
                                labelCheckbox2.text(array[$i].asignatura);
                                idCheckbox23.val(array[$i].asignatura);
                            } else if ($i == 2) {
                                labelCheckbox3.text(array[$i].asignatura);
                                idCheckbox24.val(array[$i].asignatura);
                            } else if ($i == 3) {
                                labelCheckbox4.text(array[$i].asignatura);
                                idCheckbox25.val(array[$i].asignatura);
                            } else if ($i == 4) {
                                labelCheckbox5.text(array[$i].asignatura);
                                idCheckbox26.val(array[$i].asignatura);
                            } else if ($i == 5) {
                                labelCheckbox6.text(array[$i].asignatura);
                                idCheckbox27.val(array[$i].asignatura);
                            } else if ($i == 6) {
                                labelCheckbox7.text(array[$i].asignatura);
                                idCheckbox28.val(array[$i].asignatura);
                            }
                            divSieteMateriasReprobadas.css("display", "block");
                        }
                    }
                } else {
                    divMateriasNoReprobadas.css("display", "block");
                    divMateriasReprobadas.css("display", "none");
                    idCheckbox1.prop('checked', false);
                    idCheckbox2.prop('checked', false);
                    idCheckbox3.prop('checked', false);
                    idCheckbox4.prop('checked', false);
                    idCheckbox5.prop('checked', false);
                    idCheckbox6.prop('checked', false);
                    idCheckbox7.prop('checked', false);
                    idCheckbox8.prop('checked', false);
                    idCheckbox9.prop('checked', false);
                    idCheckbox10.prop('checked', false);
                    idCheckbox11.prop('checked', false);
                    idCheckbox12.prop('checked', false);
                    idCheckbox13.prop('checked', false);
                    idCheckbox14.prop('checked', false);
                    idCheckbox15.prop('checked', false);
                    idCheckbox16.prop('checked', false);
                    idCheckbox17.prop('checked', false);
                    idCheckbox18.prop('checked', false);
                    idCheckbox19.prop('checked', false);
                    idCheckbox20.prop('checked', false);
                    idCheckbox21.prop('checked', false);
                    idCheckbox22.prop('checked', false);
                    idCheckbox23.prop('checked', false);
                    idCheckbox24.prop('checked', false);
                    idCheckbox25.prop('checked', false);
                    idCheckbox26.prop('checked', false);
                    idCheckbox27.prop('checked', false);
                    idCheckbox28.prop('checked', false); 

                    var scrollDivMateriasNoReprobadas = $('.div_materias_no_reprobadas').offset().top;

                    $('html, body').animate({
                        scrollTop: scrollDivMateriasNoReprobadas
                    }, 'slow');
                }
            });
            botonRegresar.on('click', function (e) {
                e.preventDefault();

                divMateriasSeleccionadas.css("display", "none");
                divLimitePasadoMateriasSeleccionadas.css("display", "none");
                divNingunaMateriaSeleccionada.css("display", "none");
                idCheckbox1.val('');
                idCheckbox2.val('');
                idCheckbox3.val('');
                idCheckbox4.val('');
                idCheckbox5.val('');
                idCheckbox6.val('');
                idCheckbox7.val('');
                idCheckbox8.val('');
                idCheckbox9.val('');
                idCheckbox10.val('');
                idCheckbox11.val('');
                idCheckbox12.val('');
                idCheckbox13.val('');
                idCheckbox14.val('');
                idCheckbox15.val('');
                idCheckbox16.val('');
                idCheckbox17.val('');
                idCheckbox18.val('');
                idCheckbox19.val('');
                idCheckbox20.val('');
                idCheckbox21.val('');
                idCheckbox22.val('');
                idCheckbox23.val('');
                idCheckbox24.val('');
                idCheckbox25.val('');
                idCheckbox26.val('');
                idCheckbox27.val('');
                idCheckbox28.val('');
                idCheckbox1.prop('checked', false);
                idCheckbox2.prop('checked', false);
                idCheckbox3.prop('checked', false);
                idCheckbox4.prop('checked', false);
                idCheckbox5.prop('checked', false);
                idCheckbox6.prop('checked', false);
                idCheckbox7.prop('checked', false);
                idCheckbox8.prop('checked', false);
                idCheckbox9.prop('checked', false);
                idCheckbox10.prop('checked', false);
                idCheckbox11.prop('checked', false);
                idCheckbox12.prop('checked', false);
                idCheckbox13.prop('checked', false);
                idCheckbox14.prop('checked', false);
                idCheckbox15.prop('checked', false);
                idCheckbox16.prop('checked', false);
                idCheckbox17.prop('checked', false);
                idCheckbox18.prop('checked', false);
                idCheckbox19.prop('checked', false);
                idCheckbox20.prop('checked', false);
                idCheckbox21.prop('checked', false);
                idCheckbox22.prop('checked', false);
                idCheckbox23.prop('checked', false);
                idCheckbox24.prop('checked', false);
                idCheckbox25.prop('checked', false);
                idCheckbox26.prop('checked', false);
                idCheckbox27.prop('checked', false);
                idCheckbox28.prop('checked', false);
                divMateriasReprobadas.slideUp('slow');
            });
            /*botonSeguir2.on('click', function (event) {
                event.preventDefault();
                
                    $.ajax({
                        url: 'extraordinario_app/extraordinario_functions_2.php',
                        type: 'POST',
                        dataType: 'json',
                        data: $(this).serialize(),
                        beforeSend: function () {
                            console.log("Estoy dentro del ajax 2");
                        }
                    })
                    .done(function (respuesta) {
                        console.log(respuesta)
                    })
                    .fail(function (resp) {
                        console.log("Tengo algun error2.");
                        console.log(resp.responseText);
                    })
                    .always(function () {
                        console.log("Completado2.");
                     });
                
           });*/
        } else {
            setTimeout(function () {
                error.slideDown('slow');
            }, 500);
            inputNoControl.val('');

            setTimeout(function () {
                error.slideUp('slow');

            }, 3000);
        }
    })
    .fail(function (resp) {
        console.log("Tengo algun error.");
        console.log(resp.responseText);
    })
    .always(function () {
        console.log("Completado.");
    });
});