jQuery(document).on('submit', '#formulario_materias_reprobadas', function (event)
{
    var divNingunaMateriaSeleccionada = $('.div_ninguna_materia_seleccionada');
    var divLimitePasadoMateriasSeleccionadas = $('.div_limite_pasado_de_materias_seleccionadas');
    var botonRegresarSeleccionMaterias = $('.boton_regresar_seleccion_materias');
    var botonRegresarSeleccionMaterias2 = $('.boton_regresar_seleccion_materias_2');
    var botonRegresarSeleccionMaterias3 = $('.boton_regresar_seleccion_materias_3');
    var botonSeguir3 = $('.boton_seguir_3');
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
    var divMateriasSeleccionadas = $('.div_materias_seleccionadas');
    var divUnaMateriaSeleccionada = $('.div_una_materia_seleccionada');
    var divDosMateriasSeleccionadas = $('.div_dos_materias_seleccionadas');
    var divTresMateriasSeleccionadas = $('.div_tres_materias_seleccionadas');
    var spanMateriaSeleccionada1 = $('.span_materia_seleccionada_1');
    var spanMateriaSeleccionada2 = $('.span_materia_seleccionada_2'); 
    var spanMateriaSeleccionada3 = $('.span_materia_seleccionada_3');
    var spanMateriaSeleccionada4 = $('.span_materia_seleccionada_4');
    var spanMateriaSeleccionada5 = $('.span_materia_seleccionada_5');
    var spanMateriaSeleccionada6 = $('.span_materia_seleccionada_6');
    var selectMaestros1 = $('.select_maestros_1');
    var selectMaestros2 = $('.select_maestros_2');
    var selectMaestros3 = $('.select_maestros_3');
    var selectMaestros4 = $('.select_maestros_4');
    var selectMaestros5 = $('.select_maestros_5');
    var selectMaestros6 = $('.select_maestros_6');
    var optionMaestros1 = $('.option_maestros_1');
    var optionMaestros2 = $('.option_maestros_2');
    var optionMaestros3 = $('.option_maestros_3');
    var optionMaestros4 = $('.option_maestros_4');
    var optionMaestros5 = $('.option_maestros_5');
    var optionMaestros6 = $('.option_maestros_6');
    var optionMaestros7 = $('.option_maestros_7');
    var optionMaestros8 = $('.option_maestros_8');
    var optionMaestros9 = $('.option_maestros_9');
    var optionMaestros10 = $('.option_maestros_10');
    var optionMaestros11 = $('.option_maestros_11');
    var optionMaestros12 = $('.option_maestros_12');
    var optionMaestros13 = $('.option_maestros_13');
    var optionMaestros14 = $('.option_maestros_14');
    var optionMaestros15 = $('.option_maestros_15');
    var optionMaestros16 = $('.option_maestros_16');
    var optionMaestros17 = $('.option_maestros_17');
    var optionMaestros18 = $('.option_maestros_18');
    var optionMaestros19 = $('.option_maestros_19');
    var optionMaestros20 = $('.option_maestros_20');
    var optionMaestros21 = $('.option_maestros_21');
    var optionMaestros22 = $('.option_maestros_22');
    var optionMaestros23 = $('.option_maestros_23');
    var optionMaestros24 = $('.option_maestros_24');
    var optionMaestros25 = $('.option_maestros_25');
    var optionMaestros26 = $('.option_maestros_26');
    var optionMaestros27 = $('.option_maestros_27');
    var optionMaestros28 = $('.option_maestros_28');
    var optionMaestros29 = $('.option_maestros_29');
    var optionMaestros30 = $('.option_maestros_30');
    var optionMaestros31 = $('.option_maestros_31');
    var optionMaestros32 = $('.option_maestros_32');
    var optionMaestros33 = $('.option_maestros_33');
    var optionMaestros34 = $('.option_maestros_34');
    var optionMaestros35 = $('.option_maestros_35');
    var optionMaestros36 = $('.option_maestros_36');
    var optionMaestros37 = $('.option_maestros_37');
    var optionMaestros38 = $('.option_maestros_38');
    var optionMaestros39 = $('.option_maestros_39');
    var optionMaestros40 = $('.option_maestros_40');
    var optionMaestros41 = $('.option_maestros_41');
    var optionMaestros42 = $('.option_maestros_42');
    var optionMaestros43 = $('.option_maestros_43');
    var optionMaestros44 = $('.option_maestros_44');
    var optionMaestros45 = $('.option_maestros_45');
    var optionMaestros46 = $('.option_maestros_46');
    var optionMaestros47 = $('.option_maestros_47');
    var optionMaestros48 = $('.option_maestros_48');
    var optionMaestros49 = $('.option_maestros_49');
    var optionMaestros50 = $('.option_maestros_50');
    var optionMaestros51 = $('.option_maestros_51');
    var optionMaestros52 = $('.option_maestros_52');
    var optionMaestros53 = $('.option_maestros_53');
    var optionMaestros54 = $('.option_maestros_54');
    var optionMaestros55 = $('.option_maestros_55');
    var optionMaestros56 = $('.option_maestros_56');
    var optionMaestros57 = $('.option_maestros_57');
    var optionMaestros58 = $('.option_maestros_58');
    var optionMaestros59 = $('.option_maestros_59');
    var optionMaestros60 = $('.option_maestros_60');
    var optionMaestros61 = $('.option_maestros_61');
    var optionMaestros62 = $('.option_maestros_62');
    var optionMaestros63 = $('.option_maestros_63');
    var optionMaestros64 = $('.option_maestros_64');
    var optionMaestros65 = $('.option_maestros_65');
    var optionMaestros66 = $('.option_maestros_66');
    var optionMaestros67 = $('.option_maestros_67');
    var optionMaestros68 = $('.option_maestros_68');
    var optionMaestros69 = $('.option_maestros_69');
    var optionMaestros70 = $('.option_maestros_70');
    var optionMaestros71 = $('.option_maestros_71');
    var optionMaestros72 = $('.option_maestros_72');
    var optionMaestros73 = $('.option_maestros_73');
    var optionMaestros74 = $('.option_maestros_74');
    var optionMaestros75 = $('.option_maestros_75');
    var optionMaestros76 = $('.option_maestros_76');
    var optionMaestros77 = $('.option_maestros_77');
    var optionMaestros78 = $('.option_maestros_78');
    var optionMaestros79 = $('.option_maestros_79');
    var optionMaestros80 = $('.option_maestros_80');
    var optionMaestros81 = $('.option_maestros_81');
    var optionMaestros82 = $('.option_maestros_82');
    var optionMaestros83 = $('.option_maestros_83');
    var optionMaestros84 = $('.option_maestros_84');
    var optionMaestros85 = $('.option_maestros_85');
    var optionMaestros86 = $('.option_maestros_86');
    var optionMaestros87 = $('.option_maestros_87');
    var optionMaestros88 = $('.option_maestros_88');
    var optionMaestros89 = $('.option_maestros_89');
    var optionMaestros90 = $('.option_maestros_90');
    var optionMaestros91 = $('.option_maestros_91');
    var optionMaestros92 = $('.option_maestros_92');
    var optionMaestros93 = $('.option_maestros_93');
    var optionMaestros94 = $('.option_maestros_94');
    var optionMaestros95 = $('.option_maestros_95');
    var optionMaestros96 = $('.option_maestros_96');
    var optionMaestros97 = $('.option_maestros_97');
    var optionMaestros98 = $('.option_maestros_98');
    var optionMaestros99 = $('.option_maestros_99');
    var optionMaestros100 = $('.option_maestros_100');
    var optionMaestros101 = $('.option_maestros_101');
    var optionMaestros102 = $('.option_maestros_102');
    var optionMaestros103 = $('.option_maestros_103');
    var optionMaestros104 = $('.option_maestros_104');
    var optionMaestros105 = $('.option_maestros_105');
    var optionMaestros106 = $('.option_maestros_106');
    var optionMaestros107 = $('.option_maestros_107');
    var optionMaestros108 = $('.option_maestros_108');
    var optionMaestros109 = $('.option_maestros_109');
    var optionMaestros110 = $('.option_maestros_110');
    var optionMaestros111 = $('.option_maestros_111');
    var optionMaestros112 = $('.option_maestros_112');
    var optionMaestros113 = $('.option_maestros_113');
    var optionMaestros114 = $('.option_maestros_114');
    var optionMaestros115 = $('.option_maestros_115');
    var optionMaestros116 = $('.option_maestros_116');
    var optionMaestros117 = $('.option_maestros_117');
    var optionMaestros118 = $('.option_maestros_118');
    var optionMaestros119 = $('.option_maestros_119');
    var optionMaestros120 = $('.option_maestros_120');
    var optionMaestros121 = $('.option_maestros_121');
    var optionMaestros122 = $('.option_maestros_122');
    var optionMaestros123 = $('.option_maestros_123');
    var optionMaestros124 = $('.option_maestros_124');
    var optionMaestros125 = $('.option_maestros_125');
    var optionMaestros126 = $('.option_maestros_126');
    var optionMaestros127 = $('.option_maestros_127');
    var optionMaestros128 = $('.option_maestros_128');
    var optionMaestros129 = $('.option_maestros_129');
    var optionMaestros130 = $('.option_maestros_130');
    var optionMaestros131 = $('.option_maestros_131');
    var optionMaestros132 = $('.option_maestros_132');
    var optionMaestros133 = $('.option_maestros_133');
    var optionMaestros134 = $('.option_maestros_134');
    var optionMaestros135 = $('.option_maestros_135');
    var optionMaestros136 = $('.option_maestros_136');
    var optionMaestros137 = $('.option_maestros_137');
    var optionMaestros138 = $('.option_maestros_138');
    var optionMaestros139 = $('.option_maestros_139');
    var optionMaestros140 = $('.option_maestros_140');
    var optionMaestros141 = $('.option_maestros_141');
    var optionMaestros142 = $('.option_maestros_142');
    var optionMaestros143 = $('.option_maestros_143');
    var optionMaestros144 = $('.option_maestros_144');
    var optionMaestros145 = $('.option_maestros_145');
    var optionMaestros146 = $('.option_maestros_146');
    var optionMaestros147 = $('.option_maestros_147');
    var optionMaestros148 = $('.option_maestros_148');
    var optionMaestros149 = $('.option_maestros_149');
    var optionMaestros150 = $('.option_maestros_150');

    optionMaestros1.css("display", "none");
    optionMaestros2.css("display", "none");
    optionMaestros3.css("display", "none");
    optionMaestros4.css("display", "none");
    optionMaestros5.css("display", "none");
    optionMaestros6.css("display", "none");
    optionMaestros7.css("display", "none");
    optionMaestros8.css("display", "none");
    optionMaestros9.css("display", "none");
    optionMaestros10.css("display", "none");
    optionMaestros11.css("display", "none");
    optionMaestros12.css("display", "none");
    optionMaestros13.css("display", "none");
    optionMaestros14.css("display", "none");
    optionMaestros15.css("display", "none");
    optionMaestros16.css("display", "none");
    optionMaestros17.css("display", "none");
    optionMaestros18.css("display", "none");
    optionMaestros19.css("display", "none");
    optionMaestros20.css("display", "none");
    optionMaestros21.css("display", "none");
    optionMaestros22.css("display", "none");
    optionMaestros23.css("display", "none");
    optionMaestros24.css("display", "none");
    optionMaestros25.css("display", "none");
    optionMaestros26.css("display", "none");
    optionMaestros27.css("display", "none");
    optionMaestros28.css("display", "none");
    optionMaestros29.css("display", "none");
    optionMaestros30.css("display", "none");
    optionMaestros31.css("display", "none");
    optionMaestros32.css("display", "none");
    optionMaestros33.css("display", "none");
    optionMaestros34.css("display", "none");
    optionMaestros35.css("display", "none");
    optionMaestros36.css("display", "none");
    optionMaestros37.css("display", "none");
    optionMaestros38.css("display", "none");
    optionMaestros39.css("display", "none");
    optionMaestros40.css("display", "none");
    optionMaestros41.css("display", "none");
    optionMaestros42.css("display", "none");
    optionMaestros43.css("display", "none");
    optionMaestros44.css("display", "none");
    optionMaestros45.css("display", "none");
    optionMaestros46.css("display", "none");
    optionMaestros47.css("display", "none");
    optionMaestros48.css("display", "none");
    optionMaestros49.css("display", "none");
    optionMaestros50.css("display", "none");
    optionMaestros51.css("display", "none");
    optionMaestros52.css("display", "none");
    optionMaestros53.css("display", "none");
    optionMaestros54.css("display", "none");
    optionMaestros55.css("display", "none");
    optionMaestros56.css("display", "none");
    optionMaestros57.css("display", "none");
    optionMaestros58.css("display", "none");
    optionMaestros59.css("display", "none");
    optionMaestros60.css("display", "none");
    optionMaestros61.css("display", "none");
    optionMaestros62.css("display", "none");
    optionMaestros63.css("display", "none");
    optionMaestros64.css("display", "none");
    optionMaestros65.css("display", "none");
    optionMaestros66.css("display", "none");
    optionMaestros67.css("display", "none");
    optionMaestros68.css("display", "none");
    optionMaestros69.css("display", "none");
    optionMaestros70.css("display", "none");
    optionMaestros71.css("display", "none");
    optionMaestros72.css("display", "none");
    optionMaestros73.css("display", "none");
    optionMaestros74.css("display", "none");
    optionMaestros75.css("display", "none");
    optionMaestros76.css("display", "none");
    optionMaestros77.css("display", "none");
    optionMaestros78.css("display", "none");
    optionMaestros79.css("display", "none");
    optionMaestros80.css("display", "none");
    optionMaestros81.css("display", "none");
    optionMaestros82.css("display", "none");
    optionMaestros83.css("display", "none");
    optionMaestros84.css("display", "none");
    optionMaestros85.css("display", "none");
    optionMaestros86.css("display", "none");
    optionMaestros87.css("display", "none");
    optionMaestros88.css("display", "none");
    optionMaestros89.css("display", "none");
    optionMaestros90.css("display", "none");
    optionMaestros91.css("display", "none");
    optionMaestros92.css("display", "none");
    optionMaestros93.css("display", "none");
    optionMaestros94.css("display", "none");
    optionMaestros95.css("display", "none");
    optionMaestros96.css("display", "none");
    optionMaestros97.css("display", "none");
    optionMaestros98.css("display", "none");
    optionMaestros99.css("display", "none");
    optionMaestros100.css("display", "none");
    optionMaestros101.css("display", "none");
    optionMaestros102.css("display", "none");
    optionMaestros103.css("display", "none");
    optionMaestros104.css("display", "none");
    optionMaestros105.css("display", "none");
    optionMaestros106.css("display", "none");
    optionMaestros107.css("display", "none");
    optionMaestros108.css("display", "none");
    optionMaestros109.css("display", "none");
    optionMaestros110.css("display", "none");
    optionMaestros111.css("display", "none");
    optionMaestros112.css("display", "none");
    optionMaestros113.css("display", "none");
    optionMaestros114.css("display", "none");
    optionMaestros115.css("display", "none");
    optionMaestros116.css("display", "none");
    optionMaestros117.css("display", "none");
    optionMaestros118.css("display", "none");
    optionMaestros119.css("display", "none");
    optionMaestros120.css("display", "none");
    optionMaestros121.css("display", "none");
    optionMaestros122.css("display", "none");
    optionMaestros123.css("display", "none");
    optionMaestros124.css("display", "none");
    optionMaestros125.css("display", "none");
    optionMaestros126.css("display", "none");
    optionMaestros127.css("display", "none");
    optionMaestros128.css("display", "none");
    optionMaestros129.css("display", "none");
    optionMaestros130.css("display", "none");
    optionMaestros131.css("display", "none");
    optionMaestros132.css("display", "none");
    optionMaestros133.css("display", "none");
    optionMaestros134.css("display", "none");
    optionMaestros135.css("display", "none");
    optionMaestros136.css("display", "none");
    optionMaestros137.css("display", "none");
    optionMaestros138.css("display", "none");
    optionMaestros139.css("display", "none");
    optionMaestros140.css("display", "none");
    optionMaestros141.css("display", "none");
    optionMaestros142.css("display", "none");
    optionMaestros143.css("display", "none");
    optionMaestros144.css("display", "none");
    optionMaestros145.css("display", "none");
    optionMaestros146.css("display", "none");
    optionMaestros147.css("display", "none");
    optionMaestros148.css("display", "none");
    optionMaestros149.css("display", "none");
    optionMaestros150.css("display", "none");

    event.preventDefault();

    jQuery.ajax({
        url: 'extraordinario_app/extraordinario_functions_2.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function () {
            /*divNingunaMateriaSeleccionada.css("display", "block");
            divLimitePasadoMateriasSeleccionadas.css("display", "none");*/
        }
    })
    .done(function (respuesta) {
        if (respuesta.vacio != true) {
            console.log(respuesta);

            var ultimoRespuesta = respuesta.length - 1;
            var materiasSeleccionadas = respuesta[ultimoRespuesta];
            var ultimoMaterias = materiasSeleccionadas.length;

            for (var i = 0; i < ultimoRespuesta; i++)
            {
                if (i == 0) {
                    optionMaestros1.text(respuesta[i].nombre);
                    optionMaestros1.css("display", "block");
                } else if (i == 1) {
                    optionMaestros2.text(respuesta[i].nombre);
                    optionMaestros2.css("display", "block");
                } else if (i == 2) {
                    optionMaestros3.text(respuesta[i].nombre);
                    optionMaestros3.css("display", "block");
                } else if (i == 3) {
                    optionMaestros4.text(respuesta[i].nombre);
                    optionMaestros4.css("display", "block");
                } else if (i == 4) {
                    optionMaestros5.text(respuesta[i].nombre);
                    optionMaestros5.css("display", "block");
                } else if (i == 5) {
                    optionMaestros6.text(respuesta[i].nombre);
                    optionMaestros6.css("display", "block");
                } else if (i == 6) {
                    optionMaestros7.text(respuesta[i].nombre);
                    optionMaestros7.css("display", "block");
                } else if (i == 7) {
                    optionMaestros8.text(respuesta[i].nombre);
                    optionMaestros8.css("display", "block");
                } else if (i == 8) {
                    optionMaestros9.text(respuesta[i].nombre);
                    optionMaestros9.css("display", "block");
                } else if (i == 9) {
                    optionMaestros10.text(respuesta[i].nombre);
                    optionMaestros10.css("display", "block");
                } else if (i == 10) {
                    optionMaestros11.text(respuesta[i].nombre);
                    optionMaestros11.css("display", "block");
                } else if (i == 11) {
                    optionMaestros12.text(respuesta[i].nombre);
                    optionMaestros12.css("display", "block");
                } else if (i == 12) {
                    optionMaestros13.text(respuesta[i].nombre);
                    optionMaestros13.css("display", "block");
                } else if (i == 13) {
                    optionMaestros14.text(respuesta[i].nombre);
                    optionMaestros14.css("display", "block");
                } else if (i == 14) {
                    optionMaestros15.text(respuesta[i].nombre);
                    optionMaestros15.css("display", "block");
                } else if (i == 15) {
                    optionMaestros16.text(respuesta[i].nombre);
                    optionMaestros16.css("display", "block");
                } else if (i == 16) {
                    optionMaestros17.text(respuesta[i].nombre);
                    optionMaestros17.css("display", "block");
                } else if (i == 17) {
                    optionMaestros18.text(respuesta[i].nombre);
                    optionMaestros18.css("display", "block");
                } else if (i == 18) {
                    optionMaestros19.text(respuesta[i].nombre);
                    optionMaestros19.css("display", "block");
                } else if (i == 19) {
                    optionMaestros20.text(respuesta[i].nombre);
                    optionMaestros20.css("display", "block");
                } else if (i == 20) {
                    optionMaestros21.text(respuesta[i].nombre);
                    optionMaestros21.css("display", "block");
                } else if (i == 21) {
                    optionMaestros22.text(respuesta[i].nombre);
                    optionMaestros22.css("display", "block");
                } else if (i == 22) {
                    optionMaestros23.text(respuesta[i].nombre);
                    optionMaestros23.css("display", "block");
                } else if (i == 23) {
                    optionMaestros24.text(respuesta[i].nombre);
                    optionMaestros24.css("display", "block");
                } else if (i == 24) {
                    optionMaestros25.text(respuesta[i].nombre);
                    optionMaestros25.css("display", "block");
                } else if (i == 25) {
                    optionMaestros26.text(respuesta[i].nombre);
                    optionMaestros26.css("display", "block");
                } else if (i == 26) {
                    optionMaestros27.text(respuesta[i].nombre);
                    optionMaestros27.css("display", "block");
                } else if (i == 27) {
                    optionMaestros28.text(respuesta[i].nombre);
                    optionMaestros28.css("display", "block");
                } else if (i == 28) {
                    optionMaestros29.text(respuesta[i].nombre);
                    optionMaestros29.css("display", "block");
                } else if (i == 29) {
                    optionMaestros30.text(respuesta[i].nombre);
                    optionMaestros30.css("display", "block");
                } else if (i == 30) {
                    optionMaestros31.text(respuesta[i].nombre);
                    optionMaestros31.css("display", "block");
                } else if (i == 31) {
                    optionMaestros32.text(respuesta[i].nombre);
                    optionMaestros32.css("display", "block");
                } else if (i == 32) {
                    optionMaestros33.text(respuesta[i].nombre);
                    optionMaestros33.css("display", "block");
                } else if (i == 33) {
                    optionMaestros34.text(respuesta[i].nombre);
                    optionMaestros34.css("display", "block");
                } else if (i == 34) {
                    optionMaestros35.text(respuesta[i].nombre);
                    optionMaestros35.css("display", "block");
                } else if (i == 35) {
                    optionMaestros36.text(respuesta[i].nombre);
                    optionMaestros36.css("display", "block");
                } else if (i == 36) {
                    optionMaestros37.text(respuesta[i].nombre);
                    optionMaestros37.css("display", "block");
                } else if (i == 37) {
                    optionMaestros38.text(respuesta[i].nombre);
                    optionMaestros38.css("display", "block");
                } else if (i == 38) {
                    optionMaestros39.text(respuesta[i].nombre);
                    optionMaestros39.css("display", "block");
                } else if (i == 39) {
                    optionMaestros40.text(respuesta[i].nombre);
                    optionMaestros40.css("display", "block");
                } else if (i == 40) {
                    optionMaestros41.text(respuesta[i].nombre);
                    optionMaestros41.css("display", "block");
                } else if (i == 41) {
                    optionMaestros42.text(respuesta[i].nombre);
                    optionMaestros42.css("display", "block");
                } else if (i == 42) {
                    optionMaestros43.text(respuesta[i].nombre);
                    optionMaestros43.css("display", "block");
                } else if (i == 43) {
                    optionMaestros44.text(respuesta[i].nombre);
                    optionMaestros44.css("display", "block");
                } else if (i == 44) {
                    optionMaestros45.text(respuesta[i].nombre);
                    optionMaestros45.css("display", "block");
                } else if (i == 45) {
                    optionMaestros46.text(respuesta[i].nombre);
                    optionMaestros46.css("display", "block");
                } else if (i == 46) {
                    optionMaestros47.text(respuesta[i].nombre);
                    optionMaestros47.css("display", "block");
                } else if (i == 47) {
                    optionMaestros48.text(respuesta[i].nombre);
                    optionMaestros48.css("display", "block");
                } else if (i == 48) {
                    optionMaestros49.text(respuesta[i].nombre);
                    optionMaestros49.css("display", "block");
                } else if (i == 49) {
                    optionMaestros50.text(respuesta[i].nombre);
                    optionMaestros50.css("display", "block");
                } else if (i == 50) {
                    optionMaestros51.text(respuesta[i].nombre);
                    optionMaestros51.css("display", "block");
                } else if (i == 51) {
                    optionMaestros52.text(respuesta[i].nombre);
                    optionMaestros52.css("display", "block");
                } else if (i == 52) {
                    optionMaestros53.text(respuesta[i].nombre);
                    optionMaestros53.css("display", "block");
                } else if (i == 53) {
                    optionMaestros54.text(respuesta[i].nombre);
                    optionMaestros54.css("display", "block");
                } else if (i == 54) {
                    optionMaestros55.text(respuesta[i].nombre);
                    optionMaestros55.css("display", "block");
                } else if (i == 55) {
                    optionMaestros56.text(respuesta[i].nombre);
                    optionMaestros56.css("display", "block");
                } else if (i == 56) {
                    optionMaestros57.text(respuesta[i].nombre);
                    optionMaestros57.css("display", "block");
                } else if (i == 57) {
                    optionMaestros58.text(respuesta[i].nombre);
                    optionMaestros58.css("display", "block");
                } else if (i == 58) {
                    optionMaestros59.text(respuesta[i].nombre);
                    optionMaestros59.css("display", "block");
                } else if (i == 59) {
                    optionMaestros60.text(respuesta[i].nombre);
                    optionMaestros60.css("display", "block");
                } else if (i == 60) {
                    optionMaestros61.text(respuesta[i].nombre);
                    optionMaestros61.css("display", "block");
                } else if (i == 61) {
                    optionMaestros62.text(respuesta[i].nombre);
                    optionMaestros62.css("display", "block");
                } else if (i == 62) {
                    optionMaestros63.text(respuesta[i].nombre);
                    optionMaestros63.css("display", "block");
                } else if (i == 63) {
                    optionMaestros64.text(respuesta[i].nombre);
                    optionMaestros64.css("display", "block");
                } else if (i == 64) {
                    optionMaestros65.text(respuesta[i].nombre);
                    optionMaestros65.css("display", "block");
                } else if (i == 65) {
                    optionMaestros66.text(respuesta[i].nombre);
                    optionMaestros66.css("display", "block");
                } else if (i == 66) {
                    optionMaestros67.text(respuesta[i].nombre);
                    optionMaestros67.css("display", "block");
                } else if (i == 67) {
                    optionMaestros68.text(respuesta[i].nombre);
                    optionMaestros68.css("display", "block");
                } else if (i == 68) {
                    optionMaestros69.text(respuesta[i].nombre);
                    optionMaestros69.css("display", "block");
                } else if (i == 69) {
                    optionMaestros70.text(respuesta[i].nombre);
                    optionMaestros70.css("display", "block");
                } else if (i == 70) {
                    optionMaestros71.text(respuesta[i].nombre);
                    optionMaestros71.css("display", "block");
                } else if (i == 71) {
                    optionMaestros72.text(respuesta[i].nombre);
                    optionMaestros72.css("display", "block");
                } else if (i == 72) {
                    optionMaestros73.text(respuesta[i].nombre);
                    optionMaestros73.css("display", "block");
                } else if (i == 73) {
                    optionMaestros74.text(respuesta[i].nombre);
                    optionMaestros74.css("display", "block");
                } else if (i == 74) {
                    optionMaestros75.text(respuesta[i].nombre);
                    optionMaestros75.css("display", "block");
                } else if (i == 75) {
                    optionMaestros76.text(respuesta[i].nombre);
                    optionMaestros76.css("display", "block");
                } else if (i == 76) {
                    optionMaestros77.text(respuesta[i].nombre);
                    optionMaestros77.css("display", "block");
                } else if (i == 77) {
                    optionMaestros78.text(respuesta[i].nombre);
                    optionMaestros78.css("display", "block");
                } else if (i == 78) {
                    optionMaestros79.text(respuesta[i].nombre);
                    optionMaestros79.css("display", "block");
                } else if (i == 79) {
                    optionMaestros80.text(respuesta[i].nombre);
                    optionMaestros80.css("display", "block");
                } else if (i == 80) {
                    optionMaestros81.text(respuesta[i].nombre);
                    optionMaestros81.css("display", "block");
                } else if (i == 81) {
                    optionMaestros82.text(respuesta[i].nombre);
                    optionMaestros82.css("display", "block");
                } else if (i == 82) {
                    optionMaestros83.text(respuesta[i].nombre);
                    optionMaestros83.css("display", "block");
                } else if (i == 83) {
                    optionMaestros84.text(respuesta[i].nombre);
                    optionMaestros84.css("display", "block");
                } else if (i == 84) {
                    optionMaestros85.text(respuesta[i].nombre);
                    optionMaestros85.css("display", "block");
                } else if (i == 85) {
                    optionMaestros86.text(respuesta[i].nombre);
                    optionMaestros86.css("display", "block");
                } else if (i == 86) {
                    optionMaestros87.text(respuesta[i].nombre);
                    optionMaestros87.css("display", "block");
                } else if (i == 87) {
                    optionMaestros88.text(respuesta[i].nombre);
                    optionMaestros88.css("display", "block");
                } else if (i == 88) {
                    optionMaestros89.text(respuesta[i].nombre);
                    optionMaestros89.css("display", "block");
                } else if (i == 89) {
                    optionMaestros90.text(respuesta[i].nombre);
                    optionMaestros90.css("display", "block");
                } else if (i == 90) {
                    optionMaestros91.text(respuesta[i].nombre);
                    optionMaestros91.css("display", "block");
                } else if (i == 91) {
                    optionMaestros92.text(respuesta[i].nombre);
                    optionMaestros92.css("display", "block");
                } else if (i == 92) {
                    optionMaestros93.text(respuesta[i].nombre);
                    optionMaestros93.css("display", "block");
                } else if (i == 93) {
                    optionMaestros94.text(respuesta[i].nombre);
                    optionMaestros94.css("display", "block");
                } else if (i == 94) {
                    optionMaestros95.text(respuesta[i].nombre);
                    optionMaestros95.css("display", "block");
                } else if (i == 95) {
                    optionMaestros96.text(respuesta[i].nombre);
                    optionMaestros96.css("display", "block");
                } else if (i == 96) {
                    optionMaestros97.text(respuesta[i].nombre);
                    optionMaestros97.css("display", "block");
                } else if (i == 97) {
                    optionMaestros98.text(respuesta[i].nombre);
                    optionMaestros98.css("display", "block");
                } else if (i == 98) {
                    optionMaestros99.text(respuesta[i].nombre);
                    optionMaestros99.css("display", "block");
                } else if (i == 99) {
                    optionMaestros100.text(respuesta[i].nombre);
                    optionMaestros100.css("display", "block");
                } else if (i == 100) {
                    optionMaestros101.text(respuesta[i].nombre);
                    optionMaestros101.css("display", "block");
                } else if (i == 101) {
                    optionMaestros102.text(respuesta[i].nombre);
                    optionMaestros102.css("display", "block");
                } else if (i == 102) {
                    optionMaestros103.text(respuesta[i].nombre);
                    optionMaestros103.css("display", "block");
                } else if (i == 103) {
                    optionMaestros104.text(respuesta[i].nombre);
                    optionMaestros104.css("display", "block");
                } else if (i == 104) {
                    optionMaestros105.text(respuesta[i].nombre);
                    optionMaestros105.css("display", "block");
                } else if (i == 105) {
                    optionMaestros106.text(respuesta[i].nombre);
                    optionMaestros106.css("display", "block");
                } else if (i == 106) {
                    optionMaestros107.text(respuesta[i].nombre);
                    optionMaestros107.css("display", "block");
                } else if (i == 107) {
                    optionMaestros108.text(respuesta[i].nombre);
                    optionMaestros108.css("display", "block");
                } else if (i == 108) {
                    optionMaestros109.text(respuesta[i].nombre);
                    optionMaestros109.css("display", "block");
                } else if (i == 109) {
                    optionMaestros110.text(respuesta[i].nombre);
                    optionMaestros110.css("display", "block");
                } else if (i == 110) {
                    optionMaestros111.text(respuesta[i].nombre);
                    optionMaestros111.css("display", "block");
                } else if (i == 111) {
                    optionMaestros112.text(respuesta[i].nombre);
                    optionMaestros112.css("display", "block");
                } else if (i == 112) {
                    optionMaestros113.text(respuesta[i].nombre);
                    optionMaestros113.css("display", "block");
                } else if (i == 113) {
                    optionMaestros114.text(respuesta[i].nombre);
                    optionMaestros114.css("display", "block");
                } else if (i == 114) {
                    optionMaestros115.text(respuesta[i].nombre);
                    optionMaestros115.css("display", "block");
                } else if (i == 115) {
                    optionMaestros116.text(respuesta[i].nombre);
                    optionMaestros116.css("display", "block");
                } else if (i == 116) {
                    optionMaestros117.text(respuesta[i].nombre);
                    optionMaestros117.css("display", "block");
                } else if (i == 117) {
                    optionMaestros118.text(respuesta[i].nombre);
                    optionMaestros118.css("display", "block");
                } else if (i == 118) {
                    optionMaestros119.text(respuesta[i].nombre);
                    optionMaestros119.css("display", "block");
                } else if (i == 119) {
                    optionMaestros120.text(respuesta[i].nombre);
                    optionMaestros120.css("display", "block");
                } else if (i == 120) {
                    optionMaestros121.text(respuesta[i].nombre);
                    optionMaestros121.css("display", "block");
                } else if (i == 121) {
                    optionMaestros122.text(respuesta[i].nombre);
                    optionMaestros122.css("display", "block");
                } else if (i == 122) {
                    optionMaestros123.text(respuesta[i].nombre);
                    optionMaestros123.css("display", "block");
                } else if (i == 123) {
                    optionMaestros124.text(respuesta[i].nombre);
                    optionMaestros124.css("display", "block");
                } else if (i == 124) {
                    optionMaestros125.text(respuesta[i].nombre);
                    optionMaestros125.css("display", "block");
                } else if (i == 125) {
                    optionMaestros126.text(respuesta[i].nombre);
                    optionMaestros126.css("display", "block");
                } else if (i == 126) {
                    optionMaestros127.text(respuesta[i].nombre);
                    optionMaestros127.css("display", "block");
                } else if (i == 127) {
                    optionMaestros128.text(respuesta[i].nombre);
                    optionMaestros128.css("display", "block");
                } else if (i == 128) {
                    optionMaestros129.text(respuesta[i].nombre);
                    optionMaestros129.css("display", "block");
                } else if (i == 129) {
                    optionMaestros130.text(respuesta[i].nombre);
                    optionMaestros130.css("display", "block");
                } else if (i == 130) {
                    optionMaestros131.text(respuesta[i].nombre);
                    optionMaestros131.css("display", "block");
                } else if (i == 131) {
                    optionMaestros132.text(respuesta[i].nombre);
                    optionMaestros132.css("display", "block");
                } else if (i == 132) {
                    optionMaestros133.text(respuesta[i].nombre);
                    optionMaestros133.css("display", "block");
                } else if (i == 133) {
                    optionMaestros134.text(respuesta[i].nombre);
                    optionMaestros134.css("display", "block");
                } else if (i == 134) {
                    optionMaestros135.text(respuesta[i].nombre);
                    optionMaestros135.css("display", "block");
                } else if (i == 135) {
                    optionMaestros136.text(respuesta[i].nombre);
                    optionMaestros136.css("display", "block");
                } else if (i == 136) {
                    optionMaestros137.text(respuesta[i].nombre);
                    optionMaestros137.css("display", "block");
                } else if (i == 137) {
                    optionMaestros138.text(respuesta[i].nombre);
                    optionMaestros138.css("display", "block");
                } else if (i == 138) {
                    optionMaestros139.text(respuesta[i].nombre);
                    optionMaestros139.css("display", "block");
                } else if (i == 139) {
                    optionMaestros140.text(respuesta[i].nombre);
                    optionMaestros140.css("display", "block");
                } else if (i == 140) {
                    optionMaestros141.text(respuesta[i].nombre);
                    optionMaestros141.css("display", "block");
                } else if (i == 141) {
                    optionMaestros142.text(respuesta[i].nombre);
                    optionMaestros142.css("display", "block");
                } else if (i == 142) {
                    optionMaestros143.text(respuesta[i].nombre);
                    optionMaestros143.css("display", "block");
                } else if (i == 143) {
                    optionMaestros144.text(respuesta[i].nombre);
                    optionMaestros144.css("display", "block");
                } else if (i == 144) {
                    optionMaestros145.text(respuesta[i].nombre);
                    optionMaestros145.css("display", "block");
                } else if (i == 145) {
                    optionMaestros146.text(respuesta[i].nombre);
                    optionMaestros146.css("display", "block");
                } else if (i == 146) {
                    optionMaestros147.text(respuesta[i].nombre);
                    optionMaestros147.css("display", "block");
                } else if (i == 147) {
                    optionMaestros148.text(respuesta[i].nombre);
                    optionMaestros148.css("display", "block");
                } else if (i == 148) {
                    optionMaestros149.text(respuesta[i].nombre);
                    optionMaestros149.css("display", "block");
                } else if (i == 149) {
                    optionMaestros150.text(respuesta[i].nombre);
                    optionMaestros150.css("display", "block");
                }
            }
            selectMaestros1.val("");
            selectMaestros2.val("");
            selectMaestros3.val("");
            selectMaestros4.val("");
            selectMaestros5.val("");
            selectMaestros6.val("");

            if (ultimoMaterias <= 3) {
                divNingunaMateriaSeleccionada.css("display", "none");
                divLimitePasadoMateriasSeleccionadas.css("display", "none");
                if (ultimoMaterias == 1) {
                    divDosMateriasSeleccionadas.css("display", "none");
                    divTresMateriasSeleccionadas.css("display", "none");
                    spanMateriaSeleccionada1.text(materiasSeleccionadas[0]);
                    spanMateriaSeleccionada2.text('');
                    spanMateriaSeleccionada3.text('');
                    spanMateriaSeleccionada4.text('');
                    spanMateriaSeleccionada5.text('');
                    spanMateriaSeleccionada6.text('');
                    divUnaMateriaSeleccionada.css("display", "block");
                    divMateriasSeleccionadas.slideDown('slow');
                } else if (ultimoMaterias == 2) {
                    divUnaMateriaSeleccionada.css("display", "none");
                    divTresMateriasSeleccionadas.css("display", "none");
                    spanMateriaSeleccionada1.text('');
                    spanMateriaSeleccionada2.text(materiasSeleccionadas[0]);
                    spanMateriaSeleccionada3.text(materiasSeleccionadas[1]);
                    spanMateriaSeleccionada4.text('');
                    spanMateriaSeleccionada5.text('');
                    spanMateriaSeleccionada6.text('');
                    divDosMateriasSeleccionadas.css("display", "block");
                    divMateriasSeleccionadas.slideDown('slow');
                } else if (ultimoMaterias == 3) {
                    divUnaMateriaSeleccionada.css("display", "none");
                    divDosMateriasSeleccionadas.css("display", "none");
                    spanMateriaSeleccionada1.text('');
                    spanMateriaSeleccionada2.text('');
                    spanMateriaSeleccionada3.text('');
                    spanMateriaSeleccionada4.text(materiasSeleccionadas[0]);
                    spanMateriaSeleccionada5.text(materiasSeleccionadas[1]);
                    spanMateriaSeleccionada6.text(materiasSeleccionadas[2]);
                    divTresMateriasSeleccionadas.css("display", "block");
                    divMateriasSeleccionadas.slideDown('slow');
                }
                var scrollDivMateriasSeleccionadas = $('.div_materias_seleccionadas').offset().top;
                $('html, body').animate({
                    scrollTop: scrollDivMateriasSeleccionadas
                }, 'slow');

                botonRegresarSeleccionMaterias3.click(function (event) {
                    event.preventDefault();
                    spanMateriaSeleccionada1.text('');
                    spanMateriaSeleccionada2.text('');
                    spanMateriaSeleccionada3.text('');
                    spanMateriaSeleccionada4.text('');
                    spanMateriaSeleccionada5.text('');
                    spanMateriaSeleccionada6.text('');
                    selectMaestros1.val("");
                    selectMaestros2.val("");
                    selectMaestros3.val("");
                    selectMaestros4.val("");
                    selectMaestros5.val("");
                    selectMaestros6.val("");
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
                    divMateriasSeleccionadas.slideUp('slow');
                });

                botonSeguir3.click(function (event) {
                    //event.preventDefault();
                });


            } else {
                divMateriasSeleccionadas.css("display", "none");
                divNingunaMateriaSeleccionada.css("display", "none");
                divLimitePasadoMateriasSeleccionadas.slideDown('slow');
                var scrollDivLimitePasadoMateriasSeleccionadas = $('.div_limite_pasado_de_materias_seleccionadas').offset().top;

                $('html, body').animate({
                    scrollTop: scrollDivLimitePasadoMateriasSeleccionadas
                }, 'slow');

                botonRegresarSeleccionMaterias2.click(function () {
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
                    divLimitePasadoMateriasSeleccionadas.slideUp('slow');
                });
            }
        } else {
            console.log("Esta vacio");
            divMateriasSeleccionadas.css("display", "none");
            divLimitePasadoMateriasSeleccionadas.css("display", "none");
            divNingunaMateriaSeleccionada.slideDown('slow');
            var scrollDivNingunaMateriaSeleccionada = $('.div_ninguna_materia_seleccionada').offset().top;

            botonRegresarSeleccionMaterias.click(function () {
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
                divNingunaMateriaSeleccionada.slideUp('slow');
            });

            $('html, body').animate({
                scrollTop: scrollDivNingunaMateriaSeleccionada
            }, 'slow');
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