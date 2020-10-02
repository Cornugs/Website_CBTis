<?php
	require '../../conexion.php';

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
        <link rel="stylesheet" href="../../../css/bootstrap.css">
        <link rel="stylesheet" href="../../../css/styles.css">
        <link rel="icon" href="../../../img/icono_cbtis136.ico">
    </head>

    <body>
		<div class="error">
            <span>El número de control que ingreso no existe, por favor vuelve a intentarlo.</span>
        </div>
		
        <div class="container-fluid">
            <header class="row justify-content-center">
                <div class="div_sdpprdc">
                    <h1 align="center" class="h1_sdpprdc">Solicitud de pago para recursamiento de contraturno</h1>
                </div>
            </header>

            <section class="row justify-content-center">
                <div class="div_bpndc">
					<div>
						<form class="row justify-content-center" id="formulario_bpndc" action="">
							<div class="col-9 offset-1">
								<label class="label_bpndc">Buscar por número de control: </label>
								<input type="text" name="no_control" class="input_no_control" required/>
							</div>

							<div class="col-2 div_boton_buscar">
								<button type="submit" class="boton_buscar"><img src="../../../img/logo_buscar_blanco.png" class="logo_buscar" /></button>
							</div>
						</form>
					</div>

					<div class="div_datos_alumno">
						<div class="div_no_control" align="center">
							<label class="label_no_control">Número de control: </label><span class="span_no_control"></span>
						</div>
		
						<div class="row">
							<div class="col-5">
								<div>
									<label class="label_nombre">Nombre: </label><span class="span_nombre"></span>
								</div>

								<div>
									<label class="label_paterno">Paterno: </label><span class="span_paterno"></span>
								</div>

								<div>
									<label class="label_materno">Materno: </label><span class="span_materno"></span>
								</div>
							</div>

							<div class="col-5">
								<div>
									<label class="label_grupo">Grupo: </label><span class="span_grupo"></span>
								</div>

								<div>
									<label class="label_turno">Turno: </label><span class="span_turno"></span>
								</div>

								<div>
									<label class="label_carrera">Carrera: </label><span class="span_carrera"></span>
								</div>
							</div>

							<div class="col-2">
								<img src="../../../img/logo_cbtis136_2.png" class="logo_cbtis136_3" />
							</div>
						</div>

						<div class="row" align="center">
							<div class="col">
								<button class="boton_limpiar">Limpiar</button>
								<button class="boton_seguir" id="boton_seguir">Seguir</button>
							</div>
						</div>
					</div>
                </div>
            </section>

			<section class="row justify-content-center">
				<div class="div_materias_no_reprobadas" align="center">
					<div class="col justify-content-center text-center div_materias_no_resprobadas_2">
						<h1 class="ntnmr">No tienes ninguna materia con NP.</h1>
						<h1 class="felicidades">¡FELICIDADES!</h1>
						<img src="../../../img/emoji_feliz.png" class="emoji_feliz" />
					</div>
				</div>

				<div class="div_materias_reprobadas" align="center">
					<div class="col justify-content-center text-center div_materias_resprobadas_2">
						<div class="div_una_materia_reprobada">
							<h1 class="elmrqqpceee">Elige la materia reprobada que quieras pasar con el examen extraordinario.</h1>
							<form id="formulario_materias_reprobadas">
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_1" value=""/> <label for="id_checkbox_1" class="label_checkbox_1 label_checkbox"></label></div>
								<div class="row" align="center">
									<div class="col">
										<button class="boton_regresar">Regresar</button>
										<button type="submit" class="boton_seguir_2" id="boton_seguir_2">Seguir</button>
									</div>
								</div>
							</form>
						</div>

						<div class="div_dos_materias_reprobadas">
							<h1 class="elmrqqpceee">Elige las materias reprobadas que quieras pasar con el examen extraordinario.</h1>
							<form id="formulario_materias_reprobadas">
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_2" value="" /> <label for="id_checkbox_2" class="label_checkbox_1 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_3" value="" /> <label for="id_checkbox_3" class="label_checkbox_2 label_checkbox"></label></div>
								<div class="row" align="center">
									<div class="col">
										<button class="boton_regresar">Regresar</button>
										<button type="submit" class="boton_seguir_2" id="boton_seguir_2">Seguir</button>
									</div>
								</div>
							</form>
						</div>

						<div class="div_tres_materias_reprobadas">
							<h1 class="elmrqqpceee">Elige las materias reprobadas que quieras pasar con el examen extraordinario.</h1>
							<form id="formulario_materias_reprobadas">
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_4" value="" /> <label for="id_checkbox_4" class="label_checkbox_1 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_5" value="" /> <label for="id_checkbox_5" class="label_checkbox_2 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_6" value="" /> <label for="id_checkbox_6" class="label_checkbox_3 label_checkbox"></label></div>
								<div class="row" align="center">
									<div class="col">
										<button class="boton_regresar">Regresar</button>
										<button type="submit" class="boton_seguir_2" id="boton_seguir_2">Seguir</button>
									</div>
								</div>
							</form>
						</div>

						<div class="div_cuatro_materias_reprobadas">
							<h1 class="elmrqqpceee">Elige las materias reprobadas que quieras pasar con el examen extraordinario.</h1>
							<h1 class="mspe3mr"><span class="nota">Nota: </span>Maximo se puede elegir 3 materias reprobadas.</h1>
							<form id="formulario_materias_reprobadas">
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_7" value="" /> <label for="id_checkbox_7" class="label_checkbox_1 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_8" value="" /> <label for="id_checkbox_8" class="label_checkbox_2 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_9" value="" /> <label for="id_checkbox_9" class="label_checkbox_3 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_10" value="" /> <label for="id_checkbox_10" class="label_checkbox_4 label_checkbox"></label></div>
								<div class="row" align="center">
									<div class="col">
										<button class="boton_regresar">Regresar</button>
										<button type="submit" class="boton_seguir_2" id="boton_seguir_2">Seguir</button>
									</div>
								</div>
							</form>
						</div>

						<div class="div_cinco_materias_reprobadas">
							<h1 class="elmrqqpceee">Elige las materias reprobadas que quieras pasar con el examen extraordinario.</h1>
							<h1 class="mspe3mr"><span class="nota">Nota: </span>Maximo se puede elegir 3 materias reprobadas.</h1>
							<form id="formulario_materias_reprobadas">
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_11" value="" /> <label for="id_checkbox_11" class="label_checkbox_1 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_12" value="" /> <label for="id_checkbox_12" class="label_checkbox_2 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_13" value="" /> <label for="id_checkbox_13" class="label_checkbox_3 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_14" value="" /> <label for="id_checkbox_14" class="label_checkbox_4 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_15" value="" /> <label for="id_checkbox_15" class="label_checkbox_5 label_checkbox"></label></div>
								<div class="row" align="center">
									<div class="col">
										<button class="boton_regresar">Regresar</button>
										<button type="submit" class="boton_seguir_2" id="boton_seguir_2">Seguir</button>
									</div>
								</div>
							</form>
						</div>

						<div class="div_seis_materias_reprobadas">
							<h1 class="elmrqqpceee">Elige las materias reprobadas que quieras pasar con el examen extraordinario.</h1>
							<h1 class="mspe3mr"><span class="nota">Nota: </span>Maximo se puede elegir 3 materias reprobadas.</h1>
							<form id="formulario_materias_reprobadas">
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_16" value="" /> <label for="id_checkbox_16" class="label_checkbox_1 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_17" value="" /> <label for="id_checkbox_17" class="label_checkbox_2 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_18" value="" /> <label for="id_checkbox_18" class="label_checkbox_3 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_19" value="" /> <label for="id_checkbox_19" class="label_checkbox_4 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_20" value="" /> <label for="id_checkbox_20" class="label_checkbox_5 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_21" value="" /> <label for="id_checkbox_21" class="label_checkbox_6 label_checkbox"></label></div>
								<div class="row" align="center">
									<div class="col">
										<button class="boton_regresar">Regresar</button>
										<button type="submit" class="boton_seguir_2" id="boton_seguir_2">Seguir</button>
									</div>
								</div>
							</form>
						</div>

						<div class="div_siete_materias_reprobadas">
							<h1 class="elmrqqpceee">Elige las materias reprobadas que quieras pasar con el examen extraordinario.</h1>
							<h1 class="mspe3mr"><span class="nota">Nota: </span>Maximo se puede elegir 3 materias reprobadas.</h1>
							<form id="formulario_materias_reprobadas">
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_22" value="" /> <label for="id_checkbox_22" class="label_checkbox_1 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_23" value="" /> <label for="id_checkbox_23" class="label_checkbox_2 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_24" value="" /> <label for="id_checkbox_24" class="label_checkbox_3 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_25" value="" /> <label for="id_checkbox_25" class="label_checkbox_4 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_26" value="" /> <label for="id_checkbox_26" class="label_checkbox_5 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_27" value="" /> <label for="id_checkbox_27" class="label_checkbox_6 label_checkbox"></label></div>
								<div><input name="materia[]" type="checkbox" class="input_checkbox" id="id_checkbox_28" value="" /> <label for="id_checkbox_28" class="label_checkbox_7 label_checkbox"></label></div>
								<div class="row" align="center">
									<div class="col">
										<button class="boton_regresar">Regresar</button>
										<button type="submit" class="boton_seguir_2" id="boton_seguir_2">Seguir</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="div_ninguna_materia_seleccionada" align="center">
					<div class="col justify-content-center text-center div_ninguna_materia_seleccionada_2">
						<h1 class="nsnm">No seleccionaste ninguna materia.</h1>
						<img src="../../../img/emoji_decepcionado.png" class="emoji_decepcionado" />
						<h1 class="qvai">¿Quieres volver a intentarlo?</h1>
						<div class="row" align="center">
							<div class="col">
								<button class="boton_regresar_seleccion_materias">Regresar a la selección de materias</button>
							</div>
						</div>
					</div>
				</div>

				<div class="div_limite_pasado_de_materias_seleccionadas" align="center">
					<div class="col justify-content-center text-center div_limite_pasado_de_materias_seleccionadas_2">
						<h1 class="smd3m">Seleccionaste más de 3 materias.</h1>
						<img src="../../../img/emoji_sorprendido.png" class="emoji_sorprendido" />
						<h1 class="qvai">¿Quieres volver a intentarlo?</h1>
						<div class="row" align="center">
							<div class="col">
								<button class="boton_regresar_seleccion_materias_2">Regresar a la selección de materias</button>
							</div>
						</div>
					</div>
				</div>

				<div class="div_materias_seleccionadas" align="center">
					<div class="col justify-content-center text-center div_materias_seleccionadas_2">
						<h1 class="eamqqqtilmas">Elige al maestro/a que quieras que te imparta la materia anteriormente seleccionada.</h1>
						<div class="div_una_materia_seleccionada">
							<form id="formulario_materias_seleccionadas">
								<div class="div_materia_seleccionada" align="center">
									<span class="span_materia_seleccionada_1"></span>
									<img src="../../../img/flecha_derecha_roja.png" class="flecha_derecha_roja" />
									<select class="select_maestros_1" required>
										<option value="" class="option_maestros" selected disabled>ELIGE A TU MAESTRO O MAESTRA...</option>
										<option value="1" class="option_maestros option_maestros_1"></option>
										<option value="2" class="option_maestros option_maestros_2"></option>
										<option value="3" class="option_maestros option_maestros_3"></option>
										<option value="4" class="option_maestros option_maestros_4"></option>
										<option value="5" class="option_maestros option_maestros_5"></option>
										<option value="6" class="option_maestros option_maestros_6"></option>
										<option value="7" class="option_maestros option_maestros_7"></option>
										<option value="8" class="option_maestros option_maestros_8"></option>
										<option value="9" class="option_maestros option_maestros_9"></option>
										<option value="10" class="option_maestros option_maestros_10"></option>
										<option value="11" class="option_maestros option_maestros_11"></option>
										<option value="12" class="option_maestros option_maestros_12"></option>
										<option value="13" class="option_maestros option_maestros_13"></option>
										<option value="14" class="option_maestros option_maestros_14"></option>
										<option value="15" class="option_maestros option_maestros_15"></option>
										<option value="16" class="option_maestros option_maestros_16"></option>
										<option value="17" class="option_maestros option_maestros_17"></option>
										<option value="18" class="option_maestros option_maestros_18"></option>
										<option value="19" class="option_maestros option_maestros_19"></option>
										<option value="20" class="option_maestros option_maestros_20"></option>
										<option value="21" class="option_maestros option_maestros_21"></option>
										<option value="22" class="option_maestros option_maestros_22"></option>
										<option value="23" class="option_maestros option_maestros_23"></option>
										<option value="24" class="option_maestros option_maestros_24"></option>
										<option value="25" class="option_maestros option_maestros_25"></option>
										<option value="26" class="option_maestros option_maestros_26"></option>
										<option value="27" class="option_maestros option_maestros_27"></option>
										<option value="28" class="option_maestros option_maestros_28"></option>
										<option value="29" class="option_maestros option_maestros_29"></option>
										<option value="30" class="option_maestros option_maestros_30"></option>
										<option value="31" class="option_maestros option_maestros_31"></option>
										<option value="32" class="option_maestros option_maestros_32"></option>
										<option value="33" class="option_maestros option_maestros_33"></option>
										<option value="34" class="option_maestros option_maestros_34"></option>
										<option value="35" class="option_maestros option_maestros_35"></option>
										<option value="36" class="option_maestros option_maestros_36"></option>
										<option value="37" class="option_maestros option_maestros_37"></option>
										<option value="38" class="option_maestros option_maestros_38"></option>
										<option value="39" class="option_maestros option_maestros_39"></option>
										<option value="40" class="option_maestros option_maestros_40"></option>
										<option value="41" class="option_maestros option_maestros_41"></option>
										<option value="42" class="option_maestros option_maestros_42"></option>
										<option value="43" class="option_maestros option_maestros_43"></option>
										<option value="44" class="option_maestros option_maestros_44"></option>
										<option value="45" class="option_maestros option_maestros_45"></option>
										<option value="46" class="option_maestros option_maestros_46"></option>
										<option value="47" class="option_maestros option_maestros_47"></option>
										<option value="48" class="option_maestros option_maestros_48"></option>
										<option value="49" class="option_maestros option_maestros_49"></option>
										<option value="50" class="option_maestros option_maestros_50"></option>
										<option value="51" class="option_maestros option_maestros_51"></option>
										<option value="52" class="option_maestros option_maestros_52"></option>
										<option value="53" class="option_maestros option_maestros_53"></option>
										<option value="54" class="option_maestros option_maestros_54"></option>
										<option value="55" class="option_maestros option_maestros_55"></option>
										<option value="56" class="option_maestros option_maestros_56"></option>
										<option value="57" class="option_maestros option_maestros_57"></option>
										<option value="58" class="option_maestros option_maestros_58"></option>
										<option value="59" class="option_maestros option_maestros_59"></option>
										<option value="60" class="option_maestros option_maestros_60"></option>
										<option value="61" class="option_maestros option_maestros_61"></option>
										<option value="62" class="option_maestros option_maestros_62"></option>
										<option value="63" class="option_maestros option_maestros_63"></option>
										<option value="64" class="option_maestros option_maestros_64"></option>
										<option value="65" class="option_maestros option_maestros_65"></option>
										<option value="66" class="option_maestros option_maestros_66"></option>
										<option value="67" class="option_maestros option_maestros_67"></option>
										<option value="68" class="option_maestros option_maestros_68"></option>
										<option value="69" class="option_maestros option_maestros_69"></option>
										<option value="70" class="option_maestros option_maestros_70"></option>
										<option value="71" class="option_maestros option_maestros_71"></option>
										<option value="72" class="option_maestros option_maestros_72"></option>
										<option value="73" class="option_maestros option_maestros_73"></option>
										<option value="74" class="option_maestros option_maestros_74"></option>
										<option value="75" class="option_maestros option_maestros_75"></option>
										<option value="76" class="option_maestros option_maestros_76"></option>
										<option value="77" class="option_maestros option_maestros_77"></option>
										<option value="78" class="option_maestros option_maestros_78"></option>
										<option value="79" class="option_maestros option_maestros_79"></option>
										<option value="80" class="option_maestros option_maestros_80"></option>
										<option value="81" class="option_maestros option_maestros_81"></option>
										<option value="82" class="option_maestros option_maestros_82"></option>
										<option value="83" class="option_maestros option_maestros_83"></option>
										<option value="84" class="option_maestros option_maestros_84"></option>
										<option value="85" class="option_maestros option_maestros_85"></option>
										<option value="86" class="option_maestros option_maestros_86"></option>
										<option value="87" class="option_maestros option_maestros_87"></option>
										<option value="88" class="option_maestros option_maestros_88"></option>
										<option value="89" class="option_maestros option_maestros_89"></option>
										<option value="90" class="option_maestros option_maestros_90"></option>
										<option value="91" class="option_maestros option_maestros_91"></option>
										<option value="92" class="option_maestros option_maestros_92"></option>
										<option value="93" class="option_maestros option_maestros_93"></option>
										<option value="94" class="option_maestros option_maestros_94"></option>
										<option value="95" class="option_maestros option_maestros_95"></option>
										<option value="96" class="option_maestros option_maestros_96"></option>
										<option value="97" class="option_maestros option_maestros_97"></option>
										<option value="98" class="option_maestros option_maestros_98"></option>
										<option value="99" class="option_maestros option_maestros_99"></option>
										<option value="100" class="option_maestros option_maestros_100"></option>
										<option value="101" class="option_maestros option_maestros_101"></option>
										<option value="102" class="option_maestros option_maestros_102"></option>
										<option value="103" class="option_maestros option_maestros_103"></option>
										<option value="104" class="option_maestros option_maestros_104"></option>
										<option value="105" class="option_maestros option_maestros_105"></option>
										<option value="106" class="option_maestros option_maestros_106"></option>
										<option value="107" class="option_maestros option_maestros_107"></option>
										<option value="108" class="option_maestros option_maestros_108"></option>
										<option value="109" class="option_maestros option_maestros_109"></option>
										<option value="110" class="option_maestros option_maestros_110"></option>
										<option value="111" class="option_maestros option_maestros_111"></option>
										<option value="112" class="option_maestros option_maestros_112"></option>
										<option value="113" class="option_maestros option_maestros_113"></option>
										<option value="114" class="option_maestros option_maestros_114"></option>
										<option value="115" class="option_maestros option_maestros_115"></option>
										<option value="116" class="option_maestros option_maestros_116"></option>
										<option value="117" class="option_maestros option_maestros_117"></option>
										<option value="118" class="option_maestros option_maestros_118"></option>
										<option value="119" class="option_maestros option_maestros_119"></option>
										<option value="120" class="option_maestros option_maestros_120"></option>
										<option value="121" class="option_maestros option_maestros_121"></option>
										<option value="122" class="option_maestros option_maestros_122"></option>
										<option value="123" class="option_maestros option_maestros_123"></option>
										<option value="124" class="option_maestros option_maestros_124"></option>
										<option value="125" class="option_maestros option_maestros_125"></option>
										<option value="126" class="option_maestros option_maestros_126"></option>
										<option value="127" class="option_maestros option_maestros_127"></option>
										<option value="128" class="option_maestros option_maestros_128"></option>
										<option value="129" class="option_maestros option_maestros_129"></option>
										<option value="130" class="option_maestros option_maestros_130"></option>
										<option value="131" class="option_maestros option_maestros_131"></option>
										<option value="132" class="option_maestros option_maestros_132"></option>
										<option value="133" class="option_maestros option_maestros_133"></option>
										<option value="134" class="option_maestros option_maestros_134"></option>
										<option value="135" class="option_maestros option_maestros_135"></option>
										<option value="136" class="option_maestros option_maestros_136"></option>
										<option value="137" class="option_maestros option_maestros_137"></option>
										<option value="138" class="option_maestros option_maestros_138"></option>
										<option value="139" class="option_maestros option_maestros_139"></option>
										<option value="140" class="option_maestros option_maestros_140"></option>
										<option value="141" class="option_maestros option_maestros_141"></option>
										<option value="142" class="option_maestros option_maestros_142"></option>
										<option value="143" class="option_maestros option_maestros_143"></option>
										<option value="144" class="option_maestros option_maestros_144"></option>
										<option value="145" class="option_maestros option_maestros_145"></option>
										<option value="146" class="option_maestros option_maestros_146"></option>
										<option value="147" class="option_maestros option_maestros_147"></option>
										<option value="148" class="option_maestros option_maestros_148"></option>
										<option value="149" class="option_maestros option_maestros_149"></option>
										<option value="150" class="option_maestros option_maestros_150"></option>
										
									</select>
								</div>
								<div class="row" align="center">
									<div class="col">
										<button class="boton_regresar_seleccion_materias_3">Regresar </button>
										<button type="submit" class="boton_seguir_3" id="boton_seguir_3">Seguir</button>
									</div>
								</div>
							</form>
						</div>
						<div class="div_dos_materias_seleccionadas">
							<form id="formulario_materias_seleccionadas">
								<div class="div_materia_seleccionada" align="center">
									<span class="span_materia_seleccionada_2"></span>
									<img src="../../../img/flecha_derecha_roja.png" class="flecha_derecha_roja" />
									<select class="select_maestros_2" required>
										<option value="" class="option_maestros" selected disabled>ELIGE A TU MAESTRO O MAESTRA...</option>
										<option value="1" class="option_maestros option_maestros_1"></option>
										<option value="2" class="option_maestros option_maestros_2"></option>
										<option value="3" class="option_maestros option_maestros_3"></option>
										<option value="4" class="option_maestros option_maestros_4"></option>
										<option value="5" class="option_maestros option_maestros_5"></option>
										<option value="6" class="option_maestros option_maestros_6"></option>
										<option value="7" class="option_maestros option_maestros_7"></option>
										<option value="8" class="option_maestros option_maestros_8"></option>
										<option value="9" class="option_maestros option_maestros_9"></option>
										<option value="10" class="option_maestros option_maestros_10"></option>
										<option value="11" class="option_maestros option_maestros_11"></option>
										<option value="12" class="option_maestros option_maestros_12"></option>
										<option value="13" class="option_maestros option_maestros_13"></option>
										<option value="14" class="option_maestros option_maestros_14"></option>
										<option value="15" class="option_maestros option_maestros_15"></option>
										<option value="16" class="option_maestros option_maestros_16"></option>
										<option value="17" class="option_maestros option_maestros_17"></option>
										<option value="18" class="option_maestros option_maestros_18"></option>
										<option value="19" class="option_maestros option_maestros_19"></option>
										<option value="20" class="option_maestros option_maestros_20"></option>
										<option value="21" class="option_maestros option_maestros_21"></option>
										<option value="22" class="option_maestros option_maestros_22"></option>
										<option value="23" class="option_maestros option_maestros_23"></option>
										<option value="24" class="option_maestros option_maestros_24"></option>
										<option value="25" class="option_maestros option_maestros_25"></option>
										<option value="26" class="option_maestros option_maestros_26"></option>
										<option value="27" class="option_maestros option_maestros_27"></option>
										<option value="28" class="option_maestros option_maestros_28"></option>
										<option value="29" class="option_maestros option_maestros_29"></option>
										<option value="30" class="option_maestros option_maestros_30"></option>
										<option value="31" class="option_maestros option_maestros_31"></option>
										<option value="32" class="option_maestros option_maestros_32"></option>
										<option value="33" class="option_maestros option_maestros_33"></option>
										<option value="34" class="option_maestros option_maestros_34"></option>
										<option value="35" class="option_maestros option_maestros_35"></option>
										<option value="36" class="option_maestros option_maestros_36"></option>
										<option value="37" class="option_maestros option_maestros_37"></option>
										<option value="38" class="option_maestros option_maestros_38"></option>
										<option value="39" class="option_maestros option_maestros_39"></option>
										<option value="40" class="option_maestros option_maestros_40"></option>
										<option value="41" class="option_maestros option_maestros_41"></option>
										<option value="42" class="option_maestros option_maestros_42"></option>
										<option value="43" class="option_maestros option_maestros_43"></option>
										<option value="44" class="option_maestros option_maestros_44"></option>
										<option value="45" class="option_maestros option_maestros_45"></option>
										<option value="46" class="option_maestros option_maestros_46"></option>
										<option value="47" class="option_maestros option_maestros_47"></option>
										<option value="48" class="option_maestros option_maestros_48"></option>
										<option value="49" class="option_maestros option_maestros_49"></option>
										<option value="50" class="option_maestros option_maestros_50"></option>
										<option value="51" class="option_maestros option_maestros_51"></option>
										<option value="52" class="option_maestros option_maestros_52"></option>
										<option value="53" class="option_maestros option_maestros_53"></option>
										<option value="54" class="option_maestros option_maestros_54"></option>
										<option value="55" class="option_maestros option_maestros_55"></option>
										<option value="56" class="option_maestros option_maestros_56"></option>
										<option value="57" class="option_maestros option_maestros_57"></option>
										<option value="58" class="option_maestros option_maestros_58"></option>
										<option value="59" class="option_maestros option_maestros_59"></option>
										<option value="60" class="option_maestros option_maestros_60"></option>
										<option value="61" class="option_maestros option_maestros_61"></option>
										<option value="62" class="option_maestros option_maestros_62"></option>
										<option value="63" class="option_maestros option_maestros_63"></option>
										<option value="64" class="option_maestros option_maestros_64"></option>
										<option value="65" class="option_maestros option_maestros_65"></option>
										<option value="66" class="option_maestros option_maestros_66"></option>
										<option value="67" class="option_maestros option_maestros_67"></option>
										<option value="68" class="option_maestros option_maestros_68"></option>
										<option value="69" class="option_maestros option_maestros_69"></option>
										<option value="70" class="option_maestros option_maestros_70"></option>
										<option value="71" class="option_maestros option_maestros_71"></option>
										<option value="72" class="option_maestros option_maestros_72"></option>
										<option value="73" class="option_maestros option_maestros_73"></option>
										<option value="74" class="option_maestros option_maestros_74"></option>
										<option value="75" class="option_maestros option_maestros_75"></option>
										<option value="76" class="option_maestros option_maestros_76"></option>
										<option value="77" class="option_maestros option_maestros_77"></option>
										<option value="78" class="option_maestros option_maestros_78"></option>
										<option value="79" class="option_maestros option_maestros_79"></option>
										<option value="80" class="option_maestros option_maestros_80"></option>
										<option value="81" class="option_maestros option_maestros_81"></option>
										<option value="82" class="option_maestros option_maestros_82"></option>
										<option value="83" class="option_maestros option_maestros_83"></option>
										<option value="84" class="option_maestros option_maestros_84"></option>
										<option value="85" class="option_maestros option_maestros_85"></option>
										<option value="86" class="option_maestros option_maestros_86"></option>
										<option value="87" class="option_maestros option_maestros_87"></option>
										<option value="88" class="option_maestros option_maestros_88"></option>
										<option value="89" class="option_maestros option_maestros_89"></option>
										<option value="90" class="option_maestros option_maestros_90"></option>
										<option value="91" class="option_maestros option_maestros_91"></option>
										<option value="92" class="option_maestros option_maestros_92"></option>
										<option value="93" class="option_maestros option_maestros_93"></option>
										<option value="94" class="option_maestros option_maestros_94"></option>
										<option value="95" class="option_maestros option_maestros_95"></option>
										<option value="96" class="option_maestros option_maestros_96"></option>
										<option value="97" class="option_maestros option_maestros_97"></option>
										<option value="98" class="option_maestros option_maestros_98"></option>
										<option value="99" class="option_maestros option_maestros_99"></option>
										<option value="100" class="option_maestros option_maestros_100"></option>
										<option value="101" class="option_maestros option_maestros_101"></option>
										<option value="102" class="option_maestros option_maestros_102"></option>
										<option value="103" class="option_maestros option_maestros_103"></option>
										<option value="104" class="option_maestros option_maestros_104"></option>
										<option value="105" class="option_maestros option_maestros_105"></option>
										<option value="106" class="option_maestros option_maestros_106"></option>
										<option value="107" class="option_maestros option_maestros_107"></option>
										<option value="108" class="option_maestros option_maestros_108"></option>
										<option value="109" class="option_maestros option_maestros_109"></option>
										<option value="110" class="option_maestros option_maestros_110"></option>
										<option value="111" class="option_maestros option_maestros_111"></option>
										<option value="112" class="option_maestros option_maestros_112"></option>
										<option value="113" class="option_maestros option_maestros_113"></option>
										<option value="114" class="option_maestros option_maestros_114"></option>
										<option value="115" class="option_maestros option_maestros_115"></option>
										<option value="116" class="option_maestros option_maestros_116"></option>
										<option value="117" class="option_maestros option_maestros_117"></option>
										<option value="118" class="option_maestros option_maestros_118"></option>
										<option value="119" class="option_maestros option_maestros_119"></option>
										<option value="120" class="option_maestros option_maestros_120"></option>
										<option value="121" class="option_maestros option_maestros_121"></option>
										<option value="122" class="option_maestros option_maestros_122"></option>
										<option value="123" class="option_maestros option_maestros_123"></option>
										<option value="124" class="option_maestros option_maestros_124"></option>
										<option value="125" class="option_maestros option_maestros_125"></option>
										<option value="126" class="option_maestros option_maestros_126"></option>
										<option value="127" class="option_maestros option_maestros_127"></option>
										<option value="128" class="option_maestros option_maestros_128"></option>
										<option value="129" class="option_maestros option_maestros_129"></option>
										<option value="130" class="option_maestros option_maestros_130"></option>
										<option value="131" class="option_maestros option_maestros_131"></option>
										<option value="132" class="option_maestros option_maestros_132"></option>
										<option value="133" class="option_maestros option_maestros_133"></option>
										<option value="134" class="option_maestros option_maestros_134"></option>
										<option value="135" class="option_maestros option_maestros_135"></option>
										<option value="136" class="option_maestros option_maestros_136"></option>
										<option value="137" class="option_maestros option_maestros_137"></option>
										<option value="138" class="option_maestros option_maestros_138"></option>
										<option value="139" class="option_maestros option_maestros_139"></option>
										<option value="140" class="option_maestros option_maestros_140"></option>
										<option value="141" class="option_maestros option_maestros_141"></option>
										<option value="142" class="option_maestros option_maestros_142"></option>
										<option value="143" class="option_maestros option_maestros_143"></option>
										<option value="144" class="option_maestros option_maestros_144"></option>
										<option value="145" class="option_maestros option_maestros_145"></option>
										<option value="146" class="option_maestros option_maestros_146"></option>
										<option value="147" class="option_maestros option_maestros_147"></option>
										<option value="148" class="option_maestros option_maestros_148"></option>
										<option value="149" class="option_maestros option_maestros_149"></option>
										<option value="150" class="option_maestros option_maestros_150"></option>
									</select>
								</div>
								<div class="div_materia_seleccionada" align="center">
									<span class="span_materia_seleccionada_3"></span>
									<img src="../../../img/flecha_derecha_roja.png" class="flecha_derecha_roja" />
									<select class="select_maestros_3" required>
										<option value="" class="option_maestros" selected disabled>ELIGE A TU MAESTRO O MAESTRA...</option>
										<option value="1" class="option_maestros option_maestros_1"></option>
										<option value="2" class="option_maestros option_maestros_2"></option>
										<option value="3" class="option_maestros option_maestros_3"></option>
										<option value="4" class="option_maestros option_maestros_4"></option>
										<option value="5" class="option_maestros option_maestros_5"></option>
										<option value="6" class="option_maestros option_maestros_6"></option>
										<option value="7" class="option_maestros option_maestros_7"></option>
										<option value="8" class="option_maestros option_maestros_8"></option>
										<option value="9" class="option_maestros option_maestros_9"></option>
										<option value="10" class="option_maestros option_maestros_10"></option>
										<option value="11" class="option_maestros option_maestros_11"></option>
										<option value="12" class="option_maestros option_maestros_12"></option>
										<option value="13" class="option_maestros option_maestros_13"></option>
										<option value="14" class="option_maestros option_maestros_14"></option>
										<option value="15" class="option_maestros option_maestros_15"></option>
										<option value="16" class="option_maestros option_maestros_16"></option>
										<option value="17" class="option_maestros option_maestros_17"></option>
										<option value="18" class="option_maestros option_maestros_18"></option>
										<option value="19" class="option_maestros option_maestros_19"></option>
										<option value="20" class="option_maestros option_maestros_20"></option>
										<option value="21" class="option_maestros option_maestros_21"></option>
										<option value="22" class="option_maestros option_maestros_22"></option>
										<option value="23" class="option_maestros option_maestros_23"></option>
										<option value="24" class="option_maestros option_maestros_24"></option>
										<option value="25" class="option_maestros option_maestros_25"></option>
										<option value="26" class="option_maestros option_maestros_26"></option>
										<option value="27" class="option_maestros option_maestros_27"></option>
										<option value="28" class="option_maestros option_maestros_28"></option>
										<option value="29" class="option_maestros option_maestros_29"></option>
										<option value="30" class="option_maestros option_maestros_30"></option>
										<option value="31" class="option_maestros option_maestros_31"></option>
										<option value="32" class="option_maestros option_maestros_32"></option>
										<option value="33" class="option_maestros option_maestros_33"></option>
										<option value="34" class="option_maestros option_maestros_34"></option>
										<option value="35" class="option_maestros option_maestros_35"></option>
										<option value="36" class="option_maestros option_maestros_36"></option>
										<option value="37" class="option_maestros option_maestros_37"></option>
										<option value="38" class="option_maestros option_maestros_38"></option>
										<option value="39" class="option_maestros option_maestros_39"></option>
										<option value="40" class="option_maestros option_maestros_40"></option>
										<option value="41" class="option_maestros option_maestros_41"></option>
										<option value="42" class="option_maestros option_maestros_42"></option>
										<option value="43" class="option_maestros option_maestros_43"></option>
										<option value="44" class="option_maestros option_maestros_44"></option>
										<option value="45" class="option_maestros option_maestros_45"></option>
										<option value="46" class="option_maestros option_maestros_46"></option>
										<option value="47" class="option_maestros option_maestros_47"></option>
										<option value="48" class="option_maestros option_maestros_48"></option>
										<option value="49" class="option_maestros option_maestros_49"></option>
										<option value="50" class="option_maestros option_maestros_50"></option>
										<option value="51" class="option_maestros option_maestros_51"></option>
										<option value="52" class="option_maestros option_maestros_52"></option>
										<option value="53" class="option_maestros option_maestros_53"></option>
										<option value="54" class="option_maestros option_maestros_54"></option>
										<option value="55" class="option_maestros option_maestros_55"></option>
										<option value="56" class="option_maestros option_maestros_56"></option>
										<option value="57" class="option_maestros option_maestros_57"></option>
										<option value="58" class="option_maestros option_maestros_58"></option>
										<option value="59" class="option_maestros option_maestros_59"></option>
										<option value="60" class="option_maestros option_maestros_60"></option>
										<option value="61" class="option_maestros option_maestros_61"></option>
										<option value="62" class="option_maestros option_maestros_62"></option>
										<option value="63" class="option_maestros option_maestros_63"></option>
										<option value="64" class="option_maestros option_maestros_64"></option>
										<option value="65" class="option_maestros option_maestros_65"></option>
										<option value="66" class="option_maestros option_maestros_66"></option>
										<option value="67" class="option_maestros option_maestros_67"></option>
										<option value="68" class="option_maestros option_maestros_68"></option>
										<option value="69" class="option_maestros option_maestros_69"></option>
										<option value="70" class="option_maestros option_maestros_70"></option>
										<option value="71" class="option_maestros option_maestros_71"></option>
										<option value="72" class="option_maestros option_maestros_72"></option>
										<option value="73" class="option_maestros option_maestros_73"></option>
										<option value="74" class="option_maestros option_maestros_74"></option>
										<option value="75" class="option_maestros option_maestros_75"></option>
										<option value="76" class="option_maestros option_maestros_76"></option>
										<option value="77" class="option_maestros option_maestros_77"></option>
										<option value="78" class="option_maestros option_maestros_78"></option>
										<option value="79" class="option_maestros option_maestros_79"></option>
										<option value="80" class="option_maestros option_maestros_80"></option>
										<option value="81" class="option_maestros option_maestros_81"></option>
										<option value="82" class="option_maestros option_maestros_82"></option>
										<option value="83" class="option_maestros option_maestros_83"></option>
										<option value="84" class="option_maestros option_maestros_84"></option>
										<option value="85" class="option_maestros option_maestros_85"></option>
										<option value="86" class="option_maestros option_maestros_86"></option>
										<option value="87" class="option_maestros option_maestros_87"></option>
										<option value="88" class="option_maestros option_maestros_88"></option>
										<option value="89" class="option_maestros option_maestros_89"></option>
										<option value="90" class="option_maestros option_maestros_90"></option>
										<option value="91" class="option_maestros option_maestros_91"></option>
										<option value="92" class="option_maestros option_maestros_92"></option>
										<option value="93" class="option_maestros option_maestros_93"></option>
										<option value="94" class="option_maestros option_maestros_94"></option>
										<option value="95" class="option_maestros option_maestros_95"></option>
										<option value="96" class="option_maestros option_maestros_96"></option>
										<option value="97" class="option_maestros option_maestros_97"></option>
										<option value="98" class="option_maestros option_maestros_98"></option>
										<option value="99" class="option_maestros option_maestros_99"></option>
										<option value="100" class="option_maestros option_maestros_100"></option>
										<option value="101" class="option_maestros option_maestros_101"></option>
										<option value="102" class="option_maestros option_maestros_102"></option>
										<option value="103" class="option_maestros option_maestros_103"></option>
										<option value="104" class="option_maestros option_maestros_104"></option>
										<option value="105" class="option_maestros option_maestros_105"></option>
										<option value="106" class="option_maestros option_maestros_106"></option>
										<option value="107" class="option_maestros option_maestros_107"></option>
										<option value="108" class="option_maestros option_maestros_108"></option>
										<option value="109" class="option_maestros option_maestros_109"></option>
										<option value="110" class="option_maestros option_maestros_110"></option>
										<option value="111" class="option_maestros option_maestros_111"></option>
										<option value="112" class="option_maestros option_maestros_112"></option>
										<option value="113" class="option_maestros option_maestros_113"></option>
										<option value="114" class="option_maestros option_maestros_114"></option>
										<option value="115" class="option_maestros option_maestros_115"></option>
										<option value="116" class="option_maestros option_maestros_116"></option>
										<option value="117" class="option_maestros option_maestros_117"></option>
										<option value="118" class="option_maestros option_maestros_118"></option>
										<option value="119" class="option_maestros option_maestros_119"></option>
										<option value="120" class="option_maestros option_maestros_120"></option>
										<option value="121" class="option_maestros option_maestros_121"></option>
										<option value="122" class="option_maestros option_maestros_122"></option>
										<option value="123" class="option_maestros option_maestros_123"></option>
										<option value="124" class="option_maestros option_maestros_124"></option>
										<option value="125" class="option_maestros option_maestros_125"></option>
										<option value="126" class="option_maestros option_maestros_126"></option>
										<option value="127" class="option_maestros option_maestros_127"></option>
										<option value="128" class="option_maestros option_maestros_128"></option>
										<option value="129" class="option_maestros option_maestros_129"></option>
										<option value="130" class="option_maestros option_maestros_130"></option>
										<option value="131" class="option_maestros option_maestros_131"></option>
										<option value="132" class="option_maestros option_maestros_132"></option>
										<option value="133" class="option_maestros option_maestros_133"></option>
										<option value="134" class="option_maestros option_maestros_134"></option>
										<option value="135" class="option_maestros option_maestros_135"></option>
										<option value="136" class="option_maestros option_maestros_136"></option>
										<option value="137" class="option_maestros option_maestros_137"></option>
										<option value="138" class="option_maestros option_maestros_138"></option>
										<option value="139" class="option_maestros option_maestros_139"></option>
										<option value="140" class="option_maestros option_maestros_140"></option>
										<option value="141" class="option_maestros option_maestros_141"></option>
										<option value="142" class="option_maestros option_maestros_142"></option>
										<option value="143" class="option_maestros option_maestros_143"></option>
										<option value="144" class="option_maestros option_maestros_144"></option>
										<option value="145" class="option_maestros option_maestros_145"></option>
										<option value="146" class="option_maestros option_maestros_146"></option>
										<option value="147" class="option_maestros option_maestros_147"></option>
										<option value="148" class="option_maestros option_maestros_148"></option>
										<option value="149" class="option_maestros option_maestros_149"></option>
										<option value="150" class="option_maestros option_maestros_150"></option>
									</select>
								</div>
								<div class="row" align="center">
									<div class="col">
										<button class="boton_regresar_seleccion_materias_3">Regresar </button>
										<button type="submit" class="boton_seguir_3" id="boton_seguir_3">Seguir</button>
									</div>
								</div>
							</form>
						</div>
						<div class="div_tres_materias_seleccionadas">
							<form id="formulario_materias_seleccionadas">
								<div class="div_materia_seleccionada" align="center">
									<span class="span_materia_seleccionada_4"></span>
									<img src="../../../img/flecha_derecha_roja.png" class="flecha_derecha_roja" />
									<select class="select_maestros_4" required>
										<option value="" class="option_maestros" selected disabled>ELIGE A TU MAESTRO O MAESTRA...</option>
										<option value="1" class="option_maestros option_maestros_1"></option>
										<option value="2" class="option_maestros option_maestros_2"></option>
										<option value="3" class="option_maestros option_maestros_3"></option>
										<option value="4" class="option_maestros option_maestros_4"></option>
										<option value="5" class="option_maestros option_maestros_5"></option>
										<option value="6" class="option_maestros option_maestros_6"></option>
										<option value="7" class="option_maestros option_maestros_7"></option>
										<option value="8" class="option_maestros option_maestros_8"></option>
										<option value="9" class="option_maestros option_maestros_9"></option>
										<option value="10" class="option_maestros option_maestros_10"></option>
										<option value="11" class="option_maestros option_maestros_11"></option>
										<option value="12" class="option_maestros option_maestros_12"></option>
										<option value="13" class="option_maestros option_maestros_13"></option>
										<option value="14" class="option_maestros option_maestros_14"></option>
										<option value="15" class="option_maestros option_maestros_15"></option>
										<option value="16" class="option_maestros option_maestros_16"></option>
										<option value="17" class="option_maestros option_maestros_17"></option>
										<option value="18" class="option_maestros option_maestros_18"></option>
										<option value="19" class="option_maestros option_maestros_19"></option>
										<option value="20" class="option_maestros option_maestros_20"></option>
										<option value="21" class="option_maestros option_maestros_21"></option>
										<option value="22" class="option_maestros option_maestros_22"></option>
										<option value="23" class="option_maestros option_maestros_23"></option>
										<option value="24" class="option_maestros option_maestros_24"></option>
										<option value="25" class="option_maestros option_maestros_25"></option>
										<option value="26" class="option_maestros option_maestros_26"></option>
										<option value="27" class="option_maestros option_maestros_27"></option>
										<option value="28" class="option_maestros option_maestros_28"></option>
										<option value="29" class="option_maestros option_maestros_29"></option>
										<option value="30" class="option_maestros option_maestros_30"></option>
										<option value="31" class="option_maestros option_maestros_31"></option>
										<option value="32" class="option_maestros option_maestros_32"></option>
										<option value="33" class="option_maestros option_maestros_33"></option>
										<option value="34" class="option_maestros option_maestros_34"></option>
										<option value="35" class="option_maestros option_maestros_35"></option>
										<option value="36" class="option_maestros option_maestros_36"></option>
										<option value="37" class="option_maestros option_maestros_37"></option>
										<option value="38" class="option_maestros option_maestros_38"></option>
										<option value="39" class="option_maestros option_maestros_39"></option>
										<option value="40" class="option_maestros option_maestros_40"></option>
										<option value="41" class="option_maestros option_maestros_41"></option>
										<option value="42" class="option_maestros option_maestros_42"></option>
										<option value="43" class="option_maestros option_maestros_43"></option>
										<option value="44" class="option_maestros option_maestros_44"></option>
										<option value="45" class="option_maestros option_maestros_45"></option>
										<option value="46" class="option_maestros option_maestros_46"></option>
										<option value="47" class="option_maestros option_maestros_47"></option>
										<option value="48" class="option_maestros option_maestros_48"></option>
										<option value="49" class="option_maestros option_maestros_49"></option>
										<option value="50" class="option_maestros option_maestros_50"></option>
										<option value="51" class="option_maestros option_maestros_51"></option>
										<option value="52" class="option_maestros option_maestros_52"></option>
										<option value="53" class="option_maestros option_maestros_53"></option>
										<option value="54" class="option_maestros option_maestros_54"></option>
										<option value="55" class="option_maestros option_maestros_55"></option>
										<option value="56" class="option_maestros option_maestros_56"></option>
										<option value="57" class="option_maestros option_maestros_57"></option>
										<option value="58" class="option_maestros option_maestros_58"></option>
										<option value="59" class="option_maestros option_maestros_59"></option>
										<option value="60" class="option_maestros option_maestros_60"></option>
										<option value="61" class="option_maestros option_maestros_61"></option>
										<option value="62" class="option_maestros option_maestros_62"></option>
										<option value="63" class="option_maestros option_maestros_63"></option>
										<option value="64" class="option_maestros option_maestros_64"></option>
										<option value="65" class="option_maestros option_maestros_65"></option>
										<option value="66" class="option_maestros option_maestros_66"></option>
										<option value="67" class="option_maestros option_maestros_67"></option>
										<option value="68" class="option_maestros option_maestros_68"></option>
										<option value="69" class="option_maestros option_maestros_69"></option>
										<option value="70" class="option_maestros option_maestros_70"></option>
										<option value="71" class="option_maestros option_maestros_71"></option>
										<option value="72" class="option_maestros option_maestros_72"></option>
										<option value="73" class="option_maestros option_maestros_73"></option>
										<option value="74" class="option_maestros option_maestros_74"></option>
										<option value="75" class="option_maestros option_maestros_75"></option>
										<option value="76" class="option_maestros option_maestros_76"></option>
										<option value="77" class="option_maestros option_maestros_77"></option>
										<option value="78" class="option_maestros option_maestros_78"></option>
										<option value="79" class="option_maestros option_maestros_79"></option>
										<option value="80" class="option_maestros option_maestros_80"></option>
										<option value="81" class="option_maestros option_maestros_81"></option>
										<option value="82" class="option_maestros option_maestros_82"></option>
										<option value="83" class="option_maestros option_maestros_83"></option>
										<option value="84" class="option_maestros option_maestros_84"></option>
										<option value="85" class="option_maestros option_maestros_85"></option>
										<option value="86" class="option_maestros option_maestros_86"></option>
										<option value="87" class="option_maestros option_maestros_87"></option>
										<option value="88" class="option_maestros option_maestros_88"></option>
										<option value="89" class="option_maestros option_maestros_89"></option>
										<option value="90" class="option_maestros option_maestros_90"></option>
										<option value="91" class="option_maestros option_maestros_91"></option>
										<option value="92" class="option_maestros option_maestros_92"></option>
										<option value="93" class="option_maestros option_maestros_93"></option>
										<option value="94" class="option_maestros option_maestros_94"></option>
										<option value="95" class="option_maestros option_maestros_95"></option>
										<option value="96" class="option_maestros option_maestros_96"></option>
										<option value="97" class="option_maestros option_maestros_97"></option>
										<option value="98" class="option_maestros option_maestros_98"></option>
										<option value="99" class="option_maestros option_maestros_99"></option>
										<option value="100" class="option_maestros option_maestros_100"></option>
										<option value="101" class="option_maestros option_maestros_101"></option>
										<option value="102" class="option_maestros option_maestros_102"></option>
										<option value="103" class="option_maestros option_maestros_103"></option>
										<option value="104" class="option_maestros option_maestros_104"></option>
										<option value="105" class="option_maestros option_maestros_105"></option>
										<option value="106" class="option_maestros option_maestros_106"></option>
										<option value="107" class="option_maestros option_maestros_107"></option>
										<option value="108" class="option_maestros option_maestros_108"></option>
										<option value="109" class="option_maestros option_maestros_109"></option>
										<option value="110" class="option_maestros option_maestros_110"></option>
										<option value="111" class="option_maestros option_maestros_111"></option>
										<option value="112" class="option_maestros option_maestros_112"></option>
										<option value="113" class="option_maestros option_maestros_113"></option>
										<option value="114" class="option_maestros option_maestros_114"></option>
										<option value="115" class="option_maestros option_maestros_115"></option>
										<option value="116" class="option_maestros option_maestros_116"></option>
										<option value="117" class="option_maestros option_maestros_117"></option>
										<option value="118" class="option_maestros option_maestros_118"></option>
										<option value="119" class="option_maestros option_maestros_119"></option>
										<option value="120" class="option_maestros option_maestros_120"></option>
										<option value="121" class="option_maestros option_maestros_121"></option>
										<option value="122" class="option_maestros option_maestros_122"></option>
										<option value="123" class="option_maestros option_maestros_123"></option>
										<option value="124" class="option_maestros option_maestros_124"></option>
										<option value="125" class="option_maestros option_maestros_125"></option>
										<option value="126" class="option_maestros option_maestros_126"></option>
										<option value="127" class="option_maestros option_maestros_127"></option>
										<option value="128" class="option_maestros option_maestros_128"></option>
										<option value="129" class="option_maestros option_maestros_129"></option>
										<option value="130" class="option_maestros option_maestros_130"></option>
										<option value="131" class="option_maestros option_maestros_131"></option>
										<option value="132" class="option_maestros option_maestros_132"></option>
										<option value="133" class="option_maestros option_maestros_133"></option>
										<option value="134" class="option_maestros option_maestros_134"></option>
										<option value="135" class="option_maestros option_maestros_135"></option>
										<option value="136" class="option_maestros option_maestros_136"></option>
										<option value="137" class="option_maestros option_maestros_137"></option>
										<option value="138" class="option_maestros option_maestros_138"></option>
										<option value="139" class="option_maestros option_maestros_139"></option>
										<option value="140" class="option_maestros option_maestros_140"></option>
										<option value="141" class="option_maestros option_maestros_141"></option>
										<option value="142" class="option_maestros option_maestros_142"></option>
										<option value="143" class="option_maestros option_maestros_143"></option>
										<option value="144" class="option_maestros option_maestros_144"></option>
										<option value="145" class="option_maestros option_maestros_145"></option>
										<option value="146" class="option_maestros option_maestros_146"></option>
										<option value="147" class="option_maestros option_maestros_147"></option>
										<option value="148" class="option_maestros option_maestros_148"></option>
										<option value="149" class="option_maestros option_maestros_149"></option>
										<option value="150" class="option_maestros option_maestros_150"></option>
									</select>
								</div>
								<div class="div_materia_seleccionada" align="center">
									<span class="span_materia_seleccionada_5"></span>
									<img src="../../../img/flecha_derecha_roja.png" class="flecha_derecha_roja" />
									<select class="select_maestros_5" required>
										<option value="" class="option_maestros" selected disabled>ELIGE A TU MAESTRO O MAESTRA...</option>
										<option value="1" class="option_maestros option_maestros_1"></option>
										<option value="2" class="option_maestros option_maestros_2"></option>
										<option value="3" class="option_maestros option_maestros_3"></option>
										<option value="4" class="option_maestros option_maestros_4"></option>
										<option value="5" class="option_maestros option_maestros_5"></option>
										<option value="6" class="option_maestros option_maestros_6"></option>
										<option value="7" class="option_maestros option_maestros_7"></option>
										<option value="8" class="option_maestros option_maestros_8"></option>
										<option value="9" class="option_maestros option_maestros_9"></option>
										<option value="10" class="option_maestros option_maestros_10"></option>
										<option value="11" class="option_maestros option_maestros_11"></option>
										<option value="12" class="option_maestros option_maestros_12"></option>
										<option value="13" class="option_maestros option_maestros_13"></option>
										<option value="14" class="option_maestros option_maestros_14"></option>
										<option value="15" class="option_maestros option_maestros_15"></option>
										<option value="16" class="option_maestros option_maestros_16"></option>
										<option value="17" class="option_maestros option_maestros_17"></option>
										<option value="18" class="option_maestros option_maestros_18"></option>
										<option value="19" class="option_maestros option_maestros_19"></option>
										<option value="20" class="option_maestros option_maestros_20"></option>
										<option value="21" class="option_maestros option_maestros_21"></option>
										<option value="22" class="option_maestros option_maestros_22"></option>
										<option value="23" class="option_maestros option_maestros_23"></option>
										<option value="24" class="option_maestros option_maestros_24"></option>
										<option value="25" class="option_maestros option_maestros_25"></option>
										<option value="26" class="option_maestros option_maestros_26"></option>
										<option value="27" class="option_maestros option_maestros_27"></option>
										<option value="28" class="option_maestros option_maestros_28"></option>
										<option value="29" class="option_maestros option_maestros_29"></option>
										<option value="30" class="option_maestros option_maestros_30"></option>
										<option value="31" class="option_maestros option_maestros_31"></option>
										<option value="32" class="option_maestros option_maestros_32"></option>
										<option value="33" class="option_maestros option_maestros_33"></option>
										<option value="34" class="option_maestros option_maestros_34"></option>
										<option value="35" class="option_maestros option_maestros_35"></option>
										<option value="36" class="option_maestros option_maestros_36"></option>
										<option value="37" class="option_maestros option_maestros_37"></option>
										<option value="38" class="option_maestros option_maestros_38"></option>
										<option value="39" class="option_maestros option_maestros_39"></option>
										<option value="40" class="option_maestros option_maestros_40"></option>
										<option value="41" class="option_maestros option_maestros_41"></option>
										<option value="42" class="option_maestros option_maestros_42"></option>
										<option value="43" class="option_maestros option_maestros_43"></option>
										<option value="44" class="option_maestros option_maestros_44"></option>
										<option value="45" class="option_maestros option_maestros_45"></option>
										<option value="46" class="option_maestros option_maestros_46"></option>
										<option value="47" class="option_maestros option_maestros_47"></option>
										<option value="48" class="option_maestros option_maestros_48"></option>
										<option value="49" class="option_maestros option_maestros_49"></option>
										<option value="50" class="option_maestros option_maestros_50"></option>
										<option value="51" class="option_maestros option_maestros_51"></option>
										<option value="52" class="option_maestros option_maestros_52"></option>
										<option value="53" class="option_maestros option_maestros_53"></option>
										<option value="54" class="option_maestros option_maestros_54"></option>
										<option value="55" class="option_maestros option_maestros_55"></option>
										<option value="56" class="option_maestros option_maestros_56"></option>
										<option value="57" class="option_maestros option_maestros_57"></option>
										<option value="58" class="option_maestros option_maestros_58"></option>
										<option value="59" class="option_maestros option_maestros_59"></option>
										<option value="60" class="option_maestros option_maestros_60"></option>
										<option value="61" class="option_maestros option_maestros_61"></option>
										<option value="62" class="option_maestros option_maestros_62"></option>
										<option value="63" class="option_maestros option_maestros_63"></option>
										<option value="64" class="option_maestros option_maestros_64"></option>
										<option value="65" class="option_maestros option_maestros_65"></option>
										<option value="66" class="option_maestros option_maestros_66"></option>
										<option value="67" class="option_maestros option_maestros_67"></option>
										<option value="68" class="option_maestros option_maestros_68"></option>
										<option value="69" class="option_maestros option_maestros_69"></option>
										<option value="70" class="option_maestros option_maestros_70"></option>
										<option value="71" class="option_maestros option_maestros_71"></option>
										<option value="72" class="option_maestros option_maestros_72"></option>
										<option value="73" class="option_maestros option_maestros_73"></option>
										<option value="74" class="option_maestros option_maestros_74"></option>
										<option value="75" class="option_maestros option_maestros_75"></option>
										<option value="76" class="option_maestros option_maestros_76"></option>
										<option value="77" class="option_maestros option_maestros_77"></option>
										<option value="78" class="option_maestros option_maestros_78"></option>
										<option value="79" class="option_maestros option_maestros_79"></option>
										<option value="80" class="option_maestros option_maestros_80"></option>
										<option value="81" class="option_maestros option_maestros_81"></option>
										<option value="82" class="option_maestros option_maestros_82"></option>
										<option value="83" class="option_maestros option_maestros_83"></option>
										<option value="84" class="option_maestros option_maestros_84"></option>
										<option value="85" class="option_maestros option_maestros_85"></option>
										<option value="86" class="option_maestros option_maestros_86"></option>
										<option value="87" class="option_maestros option_maestros_87"></option>
										<option value="88" class="option_maestros option_maestros_88"></option>
										<option value="89" class="option_maestros option_maestros_89"></option>
										<option value="90" class="option_maestros option_maestros_90"></option>
										<option value="91" class="option_maestros option_maestros_91"></option>
										<option value="92" class="option_maestros option_maestros_92"></option>
										<option value="93" class="option_maestros option_maestros_93"></option>
										<option value="94" class="option_maestros option_maestros_94"></option>
										<option value="95" class="option_maestros option_maestros_95"></option>
										<option value="96" class="option_maestros option_maestros_96"></option>
										<option value="97" class="option_maestros option_maestros_97"></option>
										<option value="98" class="option_maestros option_maestros_98"></option>
										<option value="99" class="option_maestros option_maestros_99"></option>
										<option value="100" class="option_maestros option_maestros_100"></option>
										<option value="101" class="option_maestros option_maestros_101"></option>
										<option value="102" class="option_maestros option_maestros_102"></option>
										<option value="103" class="option_maestros option_maestros_103"></option>
										<option value="104" class="option_maestros option_maestros_104"></option>
										<option value="105" class="option_maestros option_maestros_105"></option>
										<option value="106" class="option_maestros option_maestros_106"></option>
										<option value="107" class="option_maestros option_maestros_107"></option>
										<option value="108" class="option_maestros option_maestros_108"></option>
										<option value="109" class="option_maestros option_maestros_109"></option>
										<option value="110" class="option_maestros option_maestros_110"></option>
										<option value="111" class="option_maestros option_maestros_111"></option>
										<option value="112" class="option_maestros option_maestros_112"></option>
										<option value="113" class="option_maestros option_maestros_113"></option>
										<option value="114" class="option_maestros option_maestros_114"></option>
										<option value="115" class="option_maestros option_maestros_115"></option>
										<option value="116" class="option_maestros option_maestros_116"></option>
										<option value="117" class="option_maestros option_maestros_117"></option>
										<option value="118" class="option_maestros option_maestros_118"></option>
										<option value="119" class="option_maestros option_maestros_119"></option>
										<option value="120" class="option_maestros option_maestros_120"></option>
										<option value="121" class="option_maestros option_maestros_121"></option>
										<option value="122" class="option_maestros option_maestros_122"></option>
										<option value="123" class="option_maestros option_maestros_123"></option>
										<option value="124" class="option_maestros option_maestros_124"></option>
										<option value="125" class="option_maestros option_maestros_125"></option>
										<option value="126" class="option_maestros option_maestros_126"></option>
										<option value="127" class="option_maestros option_maestros_127"></option>
										<option value="128" class="option_maestros option_maestros_128"></option>
										<option value="129" class="option_maestros option_maestros_129"></option>
										<option value="130" class="option_maestros option_maestros_130"></option>
										<option value="131" class="option_maestros option_maestros_131"></option>
										<option value="132" class="option_maestros option_maestros_132"></option>
										<option value="133" class="option_maestros option_maestros_133"></option>
										<option value="134" class="option_maestros option_maestros_134"></option>
										<option value="135" class="option_maestros option_maestros_135"></option>
										<option value="136" class="option_maestros option_maestros_136"></option>
										<option value="137" class="option_maestros option_maestros_137"></option>
										<option value="138" class="option_maestros option_maestros_138"></option>
										<option value="139" class="option_maestros option_maestros_139"></option>
										<option value="140" class="option_maestros option_maestros_140"></option>
										<option value="141" class="option_maestros option_maestros_141"></option>
										<option value="142" class="option_maestros option_maestros_142"></option>
										<option value="143" class="option_maestros option_maestros_143"></option>
										<option value="144" class="option_maestros option_maestros_144"></option>
										<option value="145" class="option_maestros option_maestros_145"></option>
										<option value="146" class="option_maestros option_maestros_146"></option>
										<option value="147" class="option_maestros option_maestros_147"></option>
										<option value="148" class="option_maestros option_maestros_148"></option>
										<option value="149" class="option_maestros option_maestros_149"></option>
										<option value="150" class="option_maestros option_maestros_150"></option>
									</select>
								</div>
								<div class="div_materia_seleccionada" align="center">
									<span class="span_materia_seleccionada_6"></span>
									<img src="../../../img/flecha_derecha_roja.png" class="flecha_derecha_roja" />
									<select class="select_maestros_6" required>
										<option value="" class="option_maestros" selected disabled>ELIGE A TU MAESTRO O MAESTRA...</option>
										<option value="1" class="option_maestros option_maestros_1"></option>
										<option value="2" class="option_maestros option_maestros_2"></option>
										<option value="3" class="option_maestros option_maestros_3"></option>
										<option value="4" class="option_maestros option_maestros_4"></option>
										<option value="5" class="option_maestros option_maestros_5"></option>
										<option value="6" class="option_maestros option_maestros_6"></option>
										<option value="7" class="option_maestros option_maestros_7"></option>
										<option value="8" class="option_maestros option_maestros_8"></option>
										<option value="9" class="option_maestros option_maestros_9"></option>
										<option value="10" class="option_maestros option_maestros_10"></option>
										<option value="11" class="option_maestros option_maestros_11"></option>
										<option value="12" class="option_maestros option_maestros_12"></option>
										<option value="13" class="option_maestros option_maestros_13"></option>
										<option value="14" class="option_maestros option_maestros_14"></option>
										<option value="15" class="option_maestros option_maestros_15"></option>
										<option value="16" class="option_maestros option_maestros_16"></option>
										<option value="17" class="option_maestros option_maestros_17"></option>
										<option value="18" class="option_maestros option_maestros_18"></option>
										<option value="19" class="option_maestros option_maestros_19"></option>
										<option value="20" class="option_maestros option_maestros_20"></option>
										<option value="21" class="option_maestros option_maestros_21"></option>
										<option value="22" class="option_maestros option_maestros_22"></option>
										<option value="23" class="option_maestros option_maestros_23"></option>
										<option value="24" class="option_maestros option_maestros_24"></option>
										<option value="25" class="option_maestros option_maestros_25"></option>
										<option value="26" class="option_maestros option_maestros_26"></option>
										<option value="27" class="option_maestros option_maestros_27"></option>
										<option value="28" class="option_maestros option_maestros_28"></option>
										<option value="29" class="option_maestros option_maestros_29"></option>
										<option value="30" class="option_maestros option_maestros_30"></option>
										<option value="31" class="option_maestros option_maestros_31"></option>
										<option value="32" class="option_maestros option_maestros_32"></option>
										<option value="33" class="option_maestros option_maestros_33"></option>
										<option value="34" class="option_maestros option_maestros_34"></option>
										<option value="35" class="option_maestros option_maestros_35"></option>
										<option value="36" class="option_maestros option_maestros_36"></option>
										<option value="37" class="option_maestros option_maestros_37"></option>
										<option value="38" class="option_maestros option_maestros_38"></option>
										<option value="39" class="option_maestros option_maestros_39"></option>
										<option value="40" class="option_maestros option_maestros_40"></option>
										<option value="41" class="option_maestros option_maestros_41"></option>
										<option value="42" class="option_maestros option_maestros_42"></option>
										<option value="43" class="option_maestros option_maestros_43"></option>
										<option value="44" class="option_maestros option_maestros_44"></option>
										<option value="45" class="option_maestros option_maestros_45"></option>
										<option value="46" class="option_maestros option_maestros_46"></option>
										<option value="47" class="option_maestros option_maestros_47"></option>
										<option value="48" class="option_maestros option_maestros_48"></option>
										<option value="49" class="option_maestros option_maestros_49"></option>
										<option value="50" class="option_maestros option_maestros_50"></option>
										<option value="51" class="option_maestros option_maestros_51"></option>
										<option value="52" class="option_maestros option_maestros_52"></option>
										<option value="53" class="option_maestros option_maestros_53"></option>
										<option value="54" class="option_maestros option_maestros_54"></option>
										<option value="55" class="option_maestros option_maestros_55"></option>
										<option value="56" class="option_maestros option_maestros_56"></option>
										<option value="57" class="option_maestros option_maestros_57"></option>
										<option value="58" class="option_maestros option_maestros_58"></option>
										<option value="59" class="option_maestros option_maestros_59"></option>
										<option value="60" class="option_maestros option_maestros_60"></option>
										<option value="61" class="option_maestros option_maestros_61"></option>
										<option value="62" class="option_maestros option_maestros_62"></option>
										<option value="63" class="option_maestros option_maestros_63"></option>
										<option value="64" class="option_maestros option_maestros_64"></option>
										<option value="65" class="option_maestros option_maestros_65"></option>
										<option value="66" class="option_maestros option_maestros_66"></option>
										<option value="67" class="option_maestros option_maestros_67"></option>
										<option value="68" class="option_maestros option_maestros_68"></option>
										<option value="69" class="option_maestros option_maestros_69"></option>
										<option value="70" class="option_maestros option_maestros_70"></option>
										<option value="71" class="option_maestros option_maestros_71"></option>
										<option value="72" class="option_maestros option_maestros_72"></option>
										<option value="73" class="option_maestros option_maestros_73"></option>
										<option value="74" class="option_maestros option_maestros_74"></option>
										<option value="75" class="option_maestros option_maestros_75"></option>
										<option value="76" class="option_maestros option_maestros_76"></option>
										<option value="77" class="option_maestros option_maestros_77"></option>
										<option value="78" class="option_maestros option_maestros_78"></option>
										<option value="79" class="option_maestros option_maestros_79"></option>
										<option value="80" class="option_maestros option_maestros_80"></option>
										<option value="81" class="option_maestros option_maestros_81"></option>
										<option value="82" class="option_maestros option_maestros_82"></option>
										<option value="83" class="option_maestros option_maestros_83"></option>
										<option value="84" class="option_maestros option_maestros_84"></option>
										<option value="85" class="option_maestros option_maestros_85"></option>
										<option value="86" class="option_maestros option_maestros_86"></option>
										<option value="87" class="option_maestros option_maestros_87"></option>
										<option value="88" class="option_maestros option_maestros_88"></option>
										<option value="89" class="option_maestros option_maestros_89"></option>
										<option value="90" class="option_maestros option_maestros_90"></option>
										<option value="91" class="option_maestros option_maestros_91"></option>
										<option value="92" class="option_maestros option_maestros_92"></option>
										<option value="93" class="option_maestros option_maestros_93"></option>
										<option value="94" class="option_maestros option_maestros_94"></option>
										<option value="95" class="option_maestros option_maestros_95"></option>
										<option value="96" class="option_maestros option_maestros_96"></option>
										<option value="97" class="option_maestros option_maestros_97"></option>
										<option value="98" class="option_maestros option_maestros_98"></option>
										<option value="99" class="option_maestros option_maestros_99"></option>
										<option value="100" class="option_maestros option_maestros_100"></option>
										<option value="101" class="option_maestros option_maestros_101"></option>
										<option value="102" class="option_maestros option_maestros_102"></option>
										<option value="103" class="option_maestros option_maestros_103"></option>
										<option value="104" class="option_maestros option_maestros_104"></option>
										<option value="105" class="option_maestros option_maestros_105"></option>
										<option value="106" class="option_maestros option_maestros_106"></option>
										<option value="107" class="option_maestros option_maestros_107"></option>
										<option value="108" class="option_maestros option_maestros_108"></option>
										<option value="109" class="option_maestros option_maestros_109"></option>
										<option value="110" class="option_maestros option_maestros_110"></option>
										<option value="111" class="option_maestros option_maestros_111"></option>
										<option value="112" class="option_maestros option_maestros_112"></option>
										<option value="113" class="option_maestros option_maestros_113"></option>
										<option value="114" class="option_maestros option_maestros_114"></option>
										<option value="115" class="option_maestros option_maestros_115"></option>
										<option value="116" class="option_maestros option_maestros_116"></option>
										<option value="117" class="option_maestros option_maestros_117"></option>
										<option value="118" class="option_maestros option_maestros_118"></option>
										<option value="119" class="option_maestros option_maestros_119"></option>
										<option value="120" class="option_maestros option_maestros_120"></option>
										<option value="121" class="option_maestros option_maestros_121"></option>
										<option value="122" class="option_maestros option_maestros_122"></option>
										<option value="123" class="option_maestros option_maestros_123"></option>
										<option value="124" class="option_maestros option_maestros_124"></option>
										<option value="125" class="option_maestros option_maestros_125"></option>
										<option value="126" class="option_maestros option_maestros_126"></option>
										<option value="127" class="option_maestros option_maestros_127"></option>
										<option value="128" class="option_maestros option_maestros_128"></option>
										<option value="129" class="option_maestros option_maestros_129"></option>
										<option value="130" class="option_maestros option_maestros_130"></option>
										<option value="131" class="option_maestros option_maestros_131"></option>
										<option value="132" class="option_maestros option_maestros_132"></option>
										<option value="133" class="option_maestros option_maestros_133"></option>
										<option value="134" class="option_maestros option_maestros_134"></option>
										<option value="135" class="option_maestros option_maestros_135"></option>
										<option value="136" class="option_maestros option_maestros_136"></option>
										<option value="137" class="option_maestros option_maestros_137"></option>
										<option value="138" class="option_maestros option_maestros_138"></option>
										<option value="139" class="option_maestros option_maestros_139"></option>
										<option value="140" class="option_maestros option_maestros_140"></option>
										<option value="141" class="option_maestros option_maestros_141"></option>
										<option value="142" class="option_maestros option_maestros_142"></option>
										<option value="143" class="option_maestros option_maestros_143"></option>
										<option value="144" class="option_maestros option_maestros_144"></option>
										<option value="145" class="option_maestros option_maestros_145"></option>
										<option value="146" class="option_maestros option_maestros_146"></option>
										<option value="147" class="option_maestros option_maestros_147"></option>
										<option value="148" class="option_maestros option_maestros_148"></option>
										<option value="149" class="option_maestros option_maestros_149"></option>
										<option value="150" class="option_maestros option_maestros_150"></option>
									</select>
								</div>
								<div class="row" align="center">
									<div class="col">
										<button class="boton_regresar_seleccion_materias_3">Regresar </button>
										<button type="submit" class="boton_seguir_3" id="boton_seguir_3">Seguir</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
        </div>

        <!--Scripts-->
        <script src="../../../js/jquery.min.js"></script>
        <script src="../../../js/bootstrap.js"></script>
        <script src="../../../js/contraturno.js"></script>
		<script src="../../../js/contraturno_2.js"></script>
		<script src="../../../js/contraturno_3.js"></script>
    </body>
</html>