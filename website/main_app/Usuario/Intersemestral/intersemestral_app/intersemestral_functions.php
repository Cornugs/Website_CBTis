<?php
	require '../../../conexion.php';

	$no_control = $_POST['no_control'];

	$alumnos = $mysqli->query("SELECT * FROM calificaciones_semestrales WHERE no_control = '".$no_control."'");

	if ($alumnos->num_rows >= 1):

		/*$alumnos_calificaciones_semestrales = $mysqli->query("SELECT * FROM alumnos, calificaciones_semestrales, materias 
		WHERE alumnos.no_control = '".$no_control."' AND alumnos.no_control = calificaciones_semestrales.no_control 
		AND calificaciones_semestrales.tipo_acreditacion = 'NA' AND calificaciones_semestrales.nombre_asignatura = 
		materias.nombre_asignatura AND materias.tipo = 'TC'");*/

		$alumnos_calificaciones_semestrales = $mysqli->query("SELECT * FROM calificaciones_semestrales, materias 
		WHERE no_control = '".$no_control."' AND calificaciones_semestrales.tipo_acreditacion = 'NA' AND 
		calificaciones_semestrales.nombre_asignatura = materias.nombre_asignatura AND materias.tipo = 'ESP'");

		$ultima_fila_alumnos_calificaciones_semestrales = $alumnos_calificaciones_semestrales->num_rows;
		$datos_1 = $alumnos->fetch_assoc();

		if ($alumnos_calificaciones_semestrales->num_rows > 0):
			for ($i = 0; $i < $ultima_fila_alumnos_calificaciones_semestrales; $i++)
			{
				$alumnos_calificaciones_semestrales->data_seek($i);
				$datos_2 = $alumnos_calificaciones_semestrales->fetch_assoc();

				$array = array('error' => false, 'reprobar' => true, 'no_control' => $datos_1['no_control'], 'carrera' => $datos_1['carrera'], 
				'turno' => $datos_1['turno'], 'grupo' => $datos_1['grupo'], 'nombre' => $datos_1['nombre'], 
				'apellido_paterno' => $datos_1['apellido_paterno'], 'apellido_materno' => $datos_1['apellido_materno'],
				'asignatura' => $datos_2['nombre_asignatura'],'acreditacion' => $datos_2['tipo_acreditacion']);

				$json[] = $array;
			}

			echo json_encode($json);
		else:
			$array = array('error' => false, 'reprobar' => false,'no_control' => $datos_1['no_control'], 'carrera' => $datos_1['carrera'], 
			'turno' => $datos_1['turno'], 'grupo' => $datos_1['grupo'], 'nombre' => $datos_1['nombre'], 
			'apellido_paterno' => $datos_1['apellido_paterno'], 'apellido_materno' => $datos_1['apellido_materno']);
			$json[] = $array;

			echo json_encode($json);
		endif;
	else:
		$array = array('error' => true);
		$json[] = $array;
		echo json_encode($json);
	endif;

	$mysqli->close();
?>