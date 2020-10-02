<?php
	require '../../website/main_app/conexion.php';

	set_time_limit(0);

	$calificaciones_semestrales_1 = 'calificaciones_semestrales_1.csv';
	$calificaciones_semestrales_2 = 'calificaciones_semestrales_2.csv';
	$docentes = 'docentes.csv';
	$materias = 'materias.csv';
	$calificaciones_intersemestrales = 'calificaciones_intersemestrales.csv';
	$calificaciones_extraordinario = 'calificaciones_extraordinario.csv';
	
	echo LeerExcelCalificacionesSemestrales($calificaciones_semestrales_1, $calificaciones_semestrales_2, $mysqli);
	echo '<br/>';
	echo LeerExcelDocentes($docentes, $mysqli);
	echo '<br/>';
	echo LeerExcelMaterias($materias, $mysqli);
	echo '<br/>';
	echo LeerExcelCalificacionesIntersemestrales($calificaciones_intersemestrales, $mysqli);
	echo '<br/>';
	echo LeerExcelCalificacionesExtraordinario($calificaciones_extraordinario, $mysqli);
	echo '<br/><br/>Se han leido todos los excels';

	function LeerExcelCalificacionesSemestrales($path_1, $path_2, $conexion)
	{
		$i = 0;
		if(file_exists($path_1))
		{
			$fp = fopen($path_1, 'r');

			while($datos = fgetcsv($fp, 0, ','))
			{
				$i++;
				
				if($datos[0] == null)
				{
					$datos[0] = "NULL";
				}

				if($datos[1] == null)
				{
					$datos[1] = "NULL";
				}

				if($datos[2] == null)
				{
					$datos[2] = "NULL";
				}

				if($datos[3] == null)
				{
					$datos[3] = "NULL";
				}

				if($datos[4] == null)
				{
					$datos[4] = "NULL";
				}

				if($datos[5] == null)
				{
					$datos[5] = "NULL";
				}

				if($datos[6] == null)
				{
					$datos[6] = "NULL";
				}

				if($datos[7] == null)
				{
					$datos[7] = "NULL";
				}

				if($datos[8] == null)
				{
					$datos[8] = "NULL";
				}

				if($datos[9] == null)
				{
					$datos[9] = "NULL";
				}

				if($datos[10] == null)
				{
					$datos[10] = "NULL";
				}

				if($datos[11] == null)
				{
					$datos[11] = "NULL";
				}

				if($datos[12] == null)
				{
					$datos[12] = "NULL";
				}

				if($datos[13] == null)
				{
					$datos[13] = "NULL";
				}

				if($datos[14] == null)
				{
					$datos[14] = "NULL";
				}

				if($datos[15] == null)
				{
					$datos[15] = "NULL";
				}

				if($datos[16] == null)
				{
					$datos[16] = "NULL";
				}

				if($datos[17] == null)
				{
					$datos[17] = "NULL";
				}

				if($datos[18] == null)
				{
					$datos[18] = "NULL";
				}

				if($datos[19] == null)
				{
					$datos[19] = "NULL";
				}

				if($datos[20] == null)
				{
					$datos[20] = "NULL";
				}

				if($datos[21] == null)
				{
					$datos[21] = "NULL";
				}

				if($datos[22] == null)
				{
					$datos[22] = "NULL";
				}

				if($datos[23] == null)
				{
					$datos[13] = "NULL";
				}

				if($datos[24] == null)
				{
					$datos[24] = "NULL";
				}

				$query = "INSERT INTO calificaciones_semestrales VALUES($i, '$datos[0]', '$datos[1]',  '$datos[2]', '$datos[3]',
				 '$datos[4]', $datos[5], '$datos[6]', '$datos[7]', '$datos[8]', '$datos[9]', '$datos[10]', '$datos[11]',
				 '$datos[12]', $datos[13], $datos[14], $datos[15], $datos[16], '$datos[17]', '$datos[18]', $datos[19], 
				  $datos[20], $datos[21], $datos[22], $datos[23], '$datos[24]')";

				$resultado = $conexion->query($query);
				if($resultado)
				{
					echo 'Fila en la tabla calificaciones_semestrales, insertada correctamente. :) <br/>';
				} else {
					echo $conexion -> error.'<br/>';
					echo 'Fila en la tabla calificaciones_semestrales, insertada incorrectamente. :( <br/>';
				}
			}
		} else {
			echo 'No existe '.$path_1;
		}

		if(file_exists($path_2))
		{
			$fp = fopen($path_2, 'r');

			while($datos = fgetcsv($fp, 0, ','))
			{
				$i++;
				
				if($datos[0] == null)
				{
					$datos[0] = "NULL";
				}

				if($datos[1] == null)
				{
					$datos[1] = "NULL";
				}

				if($datos[2] == null)
				{
					$datos[2] = "NULL";
				}

				if($datos[3] == null)
				{
					$datos[3] = "NULL";
				}

				if($datos[4] == null)
				{
					$datos[4] = "NULL";
				}

				if($datos[5] == null)
				{
					$datos[5] = "NULL";
				}

				if($datos[6] == null)
				{
					$datos[6] = "NULL";
				}

				if($datos[7] == null)
				{
					$datos[7] = "NULL";
				}

				if($datos[8] == null)
				{
					$datos[8] = "NULL";
				}

				if($datos[9] == null)
				{
					$datos[9] = "NULL";
				}

				if($datos[10] == null)
				{
					$datos[10] = "NULL";
				}

				if($datos[11] == null)
				{
					$datos[11] = "NULL";
				}

				if($datos[12] == null)
				{
					$datos[12] = "NULL";
				}

				if($datos[13] == null)
				{
					$datos[13] = "NULL";
				}

				if($datos[14] == null)
				{
					$datos[14] = "NULL";
				}

				if($datos[15] == null)
				{
					$datos[15] = "NULL";
				}

				if($datos[16] == null)
				{
					$datos[16] = "NULL";
				}

				if($datos[17] == null)
				{
					$datos[17] = "NULL";
				}

				if($datos[18] == null)
				{
					$datos[18] = "NULL";
				}

				if($datos[19] == null)
				{
					$datos[19] = "NULL";
				}

				if($datos[20] == null)
				{
					$datos[20] = "NULL";
				}

				if($datos[21] == null)
				{
					$datos[21] = "NULL";
				}

				if($datos[22] == null)
				{
					$datos[22] = "NULL";
				}

				if($datos[23] == null)
				{
					$datos[13] = "NULL";
				}

				if($datos[24] == null)
				{
					$datos[24] = "NULL";
				}

				$query = "INSERT INTO calificaciones_semestrales VALUES($i, '$datos[0]', '$datos[1]',  '$datos[2]', '$datos[3]',
				 '$datos[4]', $datos[5], '$datos[6]', '$datos[7]', '$datos[8]', '$datos[9]', '$datos[10]', '$datos[11]',
				 '$datos[12]', $datos[13], $datos[14], $datos[15], $datos[16], '$datos[17]', '$datos[18]', $datos[19], 
				  $datos[20], $datos[21], $datos[22], $datos[23], '$datos[24]')";

				$resultado = $conexion->query($query);
				if($resultado)
				{
					echo 'Fila en la tabla calificaciones_semestrales, insertada correctamente. :) <br/>';
				} else {
					echo $conexion -> error.'<br/>';
					echo 'Fila en la tabla calificaciones_semestrales, insertada incorrectamente. :( <br/>';
				}
			}
		} else {
			echo 'No existe '.$path_2;
		}
	}

	function LeerExcelDocentes($path, $conexion)
	{
		if(file_exists($path))
		{
			$i = 0;
			$fp = fopen($path, 'r');

			while($datos = fgetcsv($fp, 0, ','))
			{
				$i++;
				
				if($datos[0] == null)
				{
					$datos[0] = "NULL";
				}

				if($datos[1] == null)
				{
					$datos[1] = "NULL";
				}

				$query = "INSERT INTO docentes VALUES($i, '$datos[0]', '$datos[1]')";
				$resultado = $conexion->query($query);
				if($resultado)
				{
					echo 'Fila en la tabla docentes, insertada correctamente. :) <br/>';
				} else {
					echo $conexion -> error.'<br/>';
					echo 'Fila en la tabla docentes, insertada incorrectamente. :( <br/>';
				}
			}
		} else {
			echo 'No existe '.$path;
		}
	}

	function LeerExcelMaterias($path, $conexion)
	{
		if(file_exists($path))
		{
			$fp = fopen($path, 'r');

			while($datos = fgetcsv($fp, 0, ','))
			{		
				if($datos[0] == null)
				{
					$datos[0] = "NULL";
				}

				if($datos[1] == null)
				{
					$datos[1] = "NULL";
				}

				if($datos[2] == null)
				{
					$datos[2] = "NULL";
				}

				$query = "INSERT INTO materias VALUES('$datos[0]', '$datos[1]', '$datos[2]')";
				$resultado = $conexion->query($query);
				if($resultado)
				{
					echo 'Fila en la tabla materias, insertada correctamente. :) <br/>';
				} else {
					echo $conexion -> error.'<br/>';
					echo 'Fila en la tabla materias, insertada incorrectamente. :( <br/>';
				}
			}
		} else {
			echo 'No existe '.$path;
		}
	}

	function LeerExcelCalificacionesIntersemestrales($path, $conexion)
	{
		if(file_exists($path))
		{
			$i = 0;

			$fp = fopen($path, 'r');

			while($datos = fgetcsv($fp, 0, ','))
			{
				$i++;
				
				if($datos[0] == null)
				{
					$datos[0] = "NULL";
				}

				if($datos[1] == null)
				{
					$datos[1] = "NULL";
				}

				if($datos[2] == null)
				{
					$datos[2] = "NULL";
				}

				if($datos[3] == null)
				{
					$datos[3] = "NULL";
				}

				if($datos[4] == null)
				{
					$datos[4] = "NULL";
				}

				if($datos[5] == null)
				{
					$datos[5] = "NULL";
				}

				if($datos[6] == null)
				{
					$datos[6] = "NULL";
				}

				if($datos[7] == null)
				{
					$datos[7] = "NULL";
				}

				if($datos[8] == null)
				{
					$datos[8] = "NULL";
				}

				if($datos[9] == null)
				{
					$datos[9] = "NULL";
				}

				if($datos[10] == null)
				{
					$datos[10] = "NULL";
				}

				if($datos[11] == null)
				{
					$datos[11] = "NULL";
				}

				if($datos[12] == null)
				{
					$datos[12] = "NULL";
				}

				if($datos[13] == null)
				{
					$datos[13] = "NULL";
				}

				if($datos[14] == null)
				{
					$datos[14] = "NULL";
				}

				if($datos[15] == null)
				{
					$datos[15] = "NULL";
				}

				if($datos[16] == null)
				{
					$datos[16] = "NULL";
				}

				if($datos[17] == null)
				{
					$datos[17] = "NULL";
				}

				if($datos[18] == null)
				{
					$datos[18] = "NULL";
				}

				if($datos[19] == null)
				{
					$datos[19] = "NULL";
				}

				if($datos[20] == null)
				{
					$datos[20] = "NULL";
				}

				if($datos[21] == null)
				{
					$datos[21] = "NULL";
				}

				if($datos[22] == null)
				{
					$datos[22] = "NULL";
				}

				if($datos[23] == null)
				{
					$datos[13] = "NULL";
				}

				if($datos[24] == null)
				{
					$datos[24] = "NULL";
				}

				$query = "INSERT INTO calificaciones_intersemestrales VALUES($i, '$datos[0]', '$datos[1]',  '$datos[2]', '$datos[3]',
				 '$datos[4]', $datos[5], '$datos[6]', '$datos[7]', '$datos[8]', '$datos[9]', '$datos[10]', '$datos[11]',
				 '$datos[12]', $datos[13], $datos[14], $datos[15], $datos[16], '$datos[17]', '$datos[18]', $datos[19], 
				  $datos[20], $datos[21], $datos[22], $datos[23], '$datos[24]')";

				$resultado = $conexion->query($query);
				if($resultado)
				{
					echo 'Fila en la tabla calificaciones_intersemestrales, insertada correctamente. :) <br/>';
				} else {
					echo $conexion -> error.'<br/>';
					echo 'Fila en la tabla calificaciones_intersemestrales, insertada incorrectamente. :( <br/>';
				}
			}
		} else {
			echo 'No existe '.$path;
		}
	}

	function LeerExcelCalificacionesExtraordinario($path, $conexion)
	{
		if(file_exists($path))
		{
			$i = 0;

			$fp = fopen($path, 'r');

			while($datos = fgetcsv($fp, 0, ','))
			{
				$i++;
				
				if($datos[0] == null)
				{
					$datos[0] = "NULL";
				}

				if($datos[1] == null)
				{
					$datos[1] = "NULL";
				}

				if($datos[2] == null)
				{
					$datos[2] = "NULL";
				}

				if($datos[3] == null)
				{
					$datos[3] = "NULL";
				}

				if($datos[4] == null)
				{
					$datos[4] = "NULL";
				}

				if($datos[5] == null)
				{
					$datos[5] = "NULL";
				}

				if($datos[6] == null)
				{
					$datos[6] = "NULL";
				}

				if($datos[7] == null)
				{
					$datos[7] = "NULL";
				}

				if($datos[8] == null)
				{
					$datos[8] = "NULL";
				}

				if($datos[9] == null)
				{
					$datos[9] = "NULL";
				}

				if($datos[10] == null)
				{
					$datos[10] = "NULL";
				}

				if($datos[11] == null)
				{
					$datos[11] = "NULL";
				}

				if($datos[12] == null)
				{
					$datos[12] = "NULL";
				}

				if($datos[13] == null)
				{
					$datos[13] = "NULL";
				}

				if($datos[14] == null)
				{
					$datos[14] = "NULL";
				}

				if($datos[15] == null)
				{
					$datos[15] = "NULL";
				}

				if($datos[16] == null)
				{
					$datos[16] = "NULL";
				}

				if($datos[17] == null)
				{
					$datos[17] = "NULL";
				}

				if($datos[18] == null)
				{
					$datos[18] = "NULL";
				}

				if($datos[19] == null)
				{
					$datos[19] = "NULL";
				}

				if($datos[20] == null)
				{
					$datos[20] = "NULL";
				}

				if($datos[21] == null)
				{
					$datos[21] = "NULL";
				}

				if($datos[22] == null)
				{
					$datos[22] = "NULL";
				}

				if($datos[23] == null)
				{
					$datos[13] = "NULL";
				}

				if($datos[24] == null)
				{
					$datos[24] = "NULL";
				}

				$query = "INSERT INTO calificaciones_extraordinario VALUES($i, '$datos[0]', '$datos[1]',  '$datos[2]', '$datos[3]',
				 '$datos[4]', $datos[5], '$datos[6]', '$datos[7]', '$datos[8]', '$datos[9]', '$datos[10]', '$datos[11]',
				 '$datos[12]', $datos[13], $datos[14], $datos[15], $datos[16], '$datos[17]', '$datos[18]', $datos[19], 
				  $datos[20], $datos[21], $datos[22], $datos[23], '$datos[24]')";

				$resultado = $conexion->query($query);
				if($resultado)
				{
					echo 'Fila en la tabla calificaciones_extraordinario, insertada correctamente. :) <br/>';
				} else {
					echo $conexion -> error.'<br/>';
					echo 'Fila en la tabla calificaciones_extraordinario, insertada incorrectamente. :( <br/>';
				}
			}
		} else {
			echo 'No existe '.$path;
		}
	}
?>