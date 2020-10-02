jQuery(document).on('submit', '#formulario_materias_seleccionadas', function (event)
{
    event.preventDefault();

    var no_control = $('.span_no_control').text();
    var nombre = $('.span_nombre').text() + ' ' + $('.span_paterno').text() + ' ' + $('.span_materno').text();
    var grupo = $('.span_grupo').text();
    var especialidad = $('.span_carrera').text();
    var turno = $('.span_turno').text();
    var materia_1 = $('.span_materia_seleccionada_1').text();
    var materia_2 = $('.span_materia_seleccionada_2').text();
    var materia_3 = $('.span_materia_seleccionada_3').text();
    var materia_4 = $('.span_materia_seleccionada_4').text();
    var materia_5 = $('.span_materia_seleccionada_5').text();
    var materia_6 = $('.span_materia_seleccionada_6').text();
    var select_maestros_1 = $('.select_maestros_1');
    var maestro_1 = select_maestros_1.find('option:selected').text();
    var select_maestros_2 = $('.select_maestros_2');
    var maestro_2 = select_maestros_2.find('option:selected').text();
    var select_maestros_3 = $('.select_maestros_3');
    var maestro_3 = select_maestros_3.find('option:selected').text();
    var select_maestros_4 = $('.select_maestros_4');
    var maestro_4 = select_maestros_4.find('option:selected').text();
    var select_maestros_5 = $('.select_maestros_5');
    var maestro_5 = select_maestros_5.find('option:selected').text();
    var select_maestros_6 = $('.select_maestros_6');
    var maestro_6 = select_maestros_6.find('option:selected').text();

    if (materia_1.length != 0) {
        window.open('http://127.0.0.1/cbtis136/website/main_app/Usuario/Extraordinario/extraordinario_pdf/extraordinario_pdf.php?no_control=' + no_control +
            '&nombre=' + nombre + '&grupo=' + grupo + '&especialidad=' + especialidad + '&turno=' + turno + '&materia_1=' + materia_1 + '&maestro_1=' + maestro_1 +
            '&pdf=1');
    } else if (materia_2.length != 0 && materia_3.length != 0) {
        window.open('http://127.0.0.1/cbtis136/website/main_app/Usuario/Extraordinario/extraordinario_pdf/extraordinario_pdf.php?no_control=' + no_control +
            '&nombre=' + nombre + '&grupo=' + grupo + '&especialidad=' + especialidad + '&turno=' + turno + '&materia_1=' + materia_2 + '&maestro_1=' + maestro_2 +
            '&materia_2=' + materia_3 + '&maestro_2=' + maestro_3 + '&pdf=2');
    } else if (materia_4.length != 0 && materia_5.length != 0 && materia_6.length != 0) {
        window.open('http://127.0.0.1/cbtis136/website/main_app/Usuario/Extraordinario/extraordinario_pdf/extraordinario_pdf.php?no_control=' + no_control +
            '&nombre=' + nombre + '&grupo=' + grupo + '&especialidad=' + especialidad + '&turno=' + turno + '&materia_1=' + materia_4 + '&maestro_1=' + maestro_4 +
            '&materia_2=' + materia_5 + '&maestro_2=' + maestro_5 + '&materia_3=' + materia_6 + '&maestro_3=' + maestro_6 + '&pdf=3');
    }

    /*var maestro_2 = $('.select_maestros_2:selected').text();
    var maestro_3 = $('.select_maestros_3:selected').text();*/

    //window.location.replace('http://127.0.0.1/cbtis136/website/main_app/Usuario/Extraordinario/extraordinario_pdf/extraordinario_pdf.php?no_control='+no_control+'');
});