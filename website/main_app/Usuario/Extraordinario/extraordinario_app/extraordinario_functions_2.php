<?php 
	/*$json[] = var_dump($_POST);
	echo json_encode($json);*/

	require '../../../conexion.php';

	$docentes = $mysqli->query("SELECT nombre FROM docentes");
	$datos = $docentes->fetch_assoc();

	$ultimo_docente = $docentes->num_rows;

	if (isset($_POST['materia']))
	{
		for ($i = 0; $i < $ultimo_docente; $i++)
		{
			$docentes->data_seek($i);
			$datos = $docentes->fetch_assoc();

			$array = array('vacio' => false, 'nombre' => $datos['nombre']);

			$json[] = $array;
		}
		$materias = $_POST['materia'];
		$json[] = $materias;
		echo json_encode($json);
	} else {
		echo json_encode(array('vacio' => true));
	}

	$mysqli->close();
?>