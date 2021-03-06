<?php
	require '../../../../../libraries/FPDF/fpdf.php';
	require '../../../conexion.php';
	setlocale(LC_ALL, "es_MX.UTF-8");

	/*session_start();

	$usuario = $_SESSION['usuario'];
	$password = $_SESSION['password'];

	$usuarios = $mysqli->query("SELECT * FROM usuarios
    WHERE usuario = '".$usuario."' AND password = '".$password."'
	AND tipo_usuario = 'Usuario'");

	if($usuarios->num_rows == 0):
        header("Location: http://127.0.0.1/cbtis136/website/");
    endif;*/

	$numero_pdf = $_GET['pdf'];

	if ($numero_pdf == 1)
	{
		$fecha = strftime('%d/%m/%y');
		$periodo = 'JUN-19';
		$no_control = $_GET['no_control'];
		$nombre = $_GET['nombre'];
		$grupo = $_GET['grupo'];
		$especialidad = $_GET['especialidad'];
		$turno = $_GET['turno'];
		$materia_1 = $_GET['materia_1'];
		$materia_2 = null;
		$materia_3 = null;
		$maestro_1 = $_GET['maestro_1'];
		$maestro_2 = null;
		$maestro_3 = null;

		$mysqli->query("INSERT INTO pdfs_extraordinario(fecha, periodo, no_control, nombre_alumno, grupo, 
			especialidad, turno, materia_1, materia_2, materia_3, maestro_1, maestro_2, maestro_3, pdf) 
			VALUES ('".$fecha."', '".$periodo."', '".$no_control."', '".$nombre."', '".$grupo."', 
			'".$especialidad."', '".$turno."', '".$materia_1."', '".$materia_2."', '".$materia_3."',
			'".$maestro_1."', '".$maestro_2."', '".$maestro_3."', ".$numero_pdf.")");

		$mysqli->query("SET  @num := 0");
		$mysqli->query("UPDATE pdfs_extraordinario SET folio = @num := (@num+1)");

		$ultimo_pdf = $mysqli->query("SELECT folio FROM pdfs_extraordinario ORDER BY folio DESC LIMIT 1");
		$datos_pdf = $ultimo_pdf->fetch_assoc();
		$folio = $datos_pdf['folio'];

		$pdf = new FPDF();
		$pdf->AddPage();

		$pdf->Image('../../../../img/logo_cbtis136.png', 15, 7, 50);
		$pdf->Image('../../../../img/logo_uemstis.png', 145, 7, 50);
		$pdf->Ln(15);
		$pdf->SetFont('Arial', 'B', 19);
		$pdf->SetTextColor(250, 53, 53);
		$pdf->Cell(185, 10, 'Solicitud de pago para examen extraordinario', 0, 0, 'C');
		$pdf->Ln(12);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(30, 10, 'NO CONTROL: ', 0, 0, 'C');
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(28, 10, $no_control, 0, 0, 'C');
		$pdf->Ln(6);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(21, 10, 'NOMBRE: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(130, 10, utf8_decode($nombre), 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(12, 10, 'FOLIO: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, "JE19".$folio, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(18, 10, 'GRUPO: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(134, 10, $grupo, 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(12, 10, 'FECHA: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, $fecha, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(32, 10, 'ESPECIALIDAD: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(120, 10, utf8_decode($especialidad), 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(15.6, 10, 'PERIODO: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, $periodo, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(17.5, 10, 'TURNO: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(134, 10, $turno, 0, 0, 'L');
		$pdf->Ln(12);
		$pdf->SetDrawColor(67, 133, 241);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(8, 45, 252);
		$pdf->Cell(93, 8, 'MATERIA', 1, 0, 'C');
		$pdf->Cell(93, 8, 'PROFESOR/A', 1, 1, 'C');
		$pdf->SetFont('Arial', 'B', 8.5);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(93, 30, utf8_decode($materia_1), 1, 0, 'C');
		$pdf->Cell(93, 30, utf8_decode($maestro_1), 1, 1, 'C');
		$pdf->SetDrawColor(0, 0, 0);
		$pdf->Line(18, 126, 96, 126);
		$pdf->Line(18, 126, 96, 126);
		$pdf->Line(18, 126, 96, 126);
		$pdf->Line(18, 126, 96, 126);
		$pdf->Line(111, 126, 189, 126);
		$pdf->Line(111, 126, 189, 126);
		$pdf->Line(111, 126, 189, 126);
		$pdf->Line(111, 126, 189, 126);
		$pdf->Ln(15);
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(92, 10, utf8_decode('Autorizó'), 0, 0, 'C');
		$pdf->Cell(95, 10, 'Solicitante', 0, 0, 'C');
		$pdf->SetDash(1, 1);
		$pdf->Line(-10, 140, 220, 140);
		$pdf->Line(-10, 140, 220, 140);
		$pdf->Line(-10, 140, 220, 140);
		$pdf->Line(-10, 140, 220, 140);
		$pdf->SetDash(0, 0);
		$pdf->Image('../../../../img/logo_cbtis136.png', 15, 148, 50);
		$pdf->Image('../../../../img/logo_uemstis.png', 145, 148, 50);
		$pdf->Ln(40);
		$pdf->SetFont('Arial', 'B', 19);
		$pdf->SetTextColor(250, 53, 53);
		$pdf->Cell(185, 10, 'Solicitud de pago para examen extraordinario', 0, 0, 'C');
		$pdf->Ln(12);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(30, 10, 'NO CONTROL: ', 0, 0, 'C');
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(28, 10, $no_control, 0, 0, 'C');
		$pdf->Ln(6);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(21, 10, 'NOMBRE: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(130, 10, utf8_decode($nombre), 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(12, 10, 'FOLIO: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, "JE19".$folio, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(18, 10, 'GRUPO: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(134, 10, $grupo, 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(12, 10, 'FECHA: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, $fecha, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(32, 10, 'ESPECIALIDAD: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(120, 10, utf8_decode($especialidad), 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(15.6, 10, 'PERIODO: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, $periodo, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(17.5, 10, 'TURNO: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(134, 10, $turno, 0, 0, 'L');
		$pdf->Ln(12);
		$pdf->SetDrawColor(67, 133, 241);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(8, 45, 252);
		$pdf->Cell(93, 8, 'MATERIA', 1, 0, 'C');
		$pdf->Cell(93, 8, 'PROFESOR/A', 1, 1, 'C');
		$pdf->SetFont('Arial', 'B', 8.5);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(93, 30, utf8_decode($materia_1), 1, 0, 'C');
		$pdf->Cell(93, 30, utf8_decode($maestro_1), 1, 1, 'C');
		$pdf->SetDrawColor(0, 0, 0);
		$pdf->Line(18, 267, 96, 267);
		$pdf->Line(111, 267, 189, 267);
		$pdf->Ln(14);
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(92, 10, utf8_decode('Autorizó'), 0, 0, 'C');
		$pdf->Cell(95, 10, 'Solicitante', 0, 0, 'C');

		$pdf->Output('', 'Solicitud_Extraordinario_Folio_'.$folio.'.pdf', true);
		
		$mysqli->close();
	} else if($numero_pdf == 2) {
		$fecha = strftime('%d/%m/%y');
		$periodo = 'JUN-19';
		$no_control = $_GET['no_control'];
		$nombre = $_GET['nombre'];
		$grupo = $_GET['grupo'];
		$especialidad = $_GET['especialidad'];
		$turno = $_GET['turno'];
		$materia_1 = $_GET['materia_1'];
		$materia_2 = $_GET['materia_2'];
		$materia_3 = null;
		$maestro_1 = $_GET['maestro_1'];
		$maestro_2 = $_GET['maestro_2'];
		$maestro_3 = null;

		$mysqli->query("INSERT INTO pdfs_extraordinario(fecha, periodo, no_control, nombre_alumno, grupo, 
			especialidad, turno, materia_1, materia_2, materia_3, maestro_1, maestro_2, maestro_3, pdf) 
			VALUES ('".$fecha."', '".$periodo."', '".$no_control."', '".$nombre."', '".$grupo."', 
			'".$especialidad."', '".$turno."', '".$materia_1."', '".$materia_2."', '".$materia_3."',
			'".$maestro_1."', '".$maestro_2."', '".$maestro_3."', ".$numero_pdf.")");

		$mysqli->query("SET  @num := 0");
		$mysqli->query("UPDATE pdfs_extraordinario SET folio = @num := (@num+1)");

		$ultimo_pdf = $mysqli->query("SELECT folio FROM pdfs_extraordinario ORDER BY folio DESC LIMIT 1");
		$datos_pdf = $ultimo_pdf->fetch_assoc();
		$folio = $datos_pdf['folio'];

		$pdf = new FPDF();
		$pdf->AddPage();

		$pdf->Image('../../../../img/logo_cbtis136.png', 15, 7, 50);
		$pdf->Image('../../../../img/logo_uemstis.png', 145, 7, 50);
		$pdf->Ln(15);
		$pdf->SetFont('Arial', 'B', 19);
		$pdf->SetTextColor(250, 53, 53);
		$pdf->Cell(185, 10, 'Solicitud de pago para examen extraordinario', 0, 0, 'C');
		$pdf->Ln(12);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(30, 10, 'NO CONTROL: ', 0, 0, 'C');
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(28, 10, $no_control, 0, 0, 'C');
		$pdf->Ln(6);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(21, 10, 'NOMBRE: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(130, 10, utf8_decode($nombre), 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(12, 10, 'FOLIO: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, "JE19".$folio, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(18, 10, 'GRUPO: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(134, 10, $grupo, 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(12, 10, 'FECHA: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, $fecha, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(32, 10, 'ESPECIALIDAD: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(120, 10, utf8_decode($especialidad), 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(15.6, 10, 'PERIODO: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, $periodo, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(17.5, 10, 'TURNO: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(134, 10, $turno, 0, 0, 'L');
		$pdf->Ln(12);
		$pdf->SetDrawColor(67, 133, 241);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(8, 45, 252);
		$pdf->Cell(93, 8, 'MATERIA', 1, 0, 'C');
		$pdf->Cell(93, 8, 'PROFESOR/A', 1, 1, 'C');
		$pdf->SetFont('Arial', 'B', 8);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(93, 15, utf8_decode($materia_1), 1, 0, 'C');
		$pdf->Cell(93, 15, utf8_decode($maestro_1), 1, 1, 'C');
		$pdf->Cell(93, 15, utf8_decode($materia_2), 1, 0, 'C');
		$pdf->Cell(93, 15, utf8_decode($maestro_2), 1, 1, 'C');
		$pdf->SetDrawColor(0, 0, 0);
		$pdf->Line(18, 126, 96, 126);
		$pdf->Line(18, 126, 96, 126);
		$pdf->Line(18, 126, 96, 126);
		$pdf->Line(18, 126, 96, 126);
		$pdf->Line(111, 126, 189, 126);
		$pdf->Line(111, 126, 189, 126);
		$pdf->Line(111, 126, 189, 126);
		$pdf->Line(111, 126, 189, 126);
		$pdf->Ln(15);
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(92, 10, utf8_decode('Autorizó'), 0, 0, 'C');
		$pdf->Cell(95, 10, 'Solicitante', 0, 0, 'C');
		$pdf->SetDash(1, 1);
		$pdf->Line(-10, 140, 220, 140);
		$pdf->Line(-10, 140, 220, 140);
		$pdf->Line(-10, 140, 220, 140);
		$pdf->Line(-10, 140, 220, 140);
		$pdf->SetDash(0, 0);
		$pdf->Image('../../../../img/logo_cbtis136.png', 15, 148, 50);
		$pdf->Image('../../../../img/logo_uemstis.png', 145, 148, 50);
		$pdf->Ln(40);
		$pdf->SetFont('Arial', 'B', 19);
		$pdf->SetTextColor(250, 53, 53);
		$pdf->Cell(185, 10, 'Solicitud de pago para examen extraordinario', 0, 0, 'C');
		$pdf->Ln(12);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(30, 10, 'NO CONTROL: ', 0, 0, 'C');
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(28, 10, $no_control, 0, 0, 'C');
		$pdf->Ln(6);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(21, 10, 'NOMBRE: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(130, 10, utf8_decode($nombre), 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(12, 10, 'FOLIO: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, "JE19".$folio, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(18, 10, 'GRUPO: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(134, 10, $grupo, 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(12, 10, 'FECHA: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, $fecha, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(32, 10, 'ESPECIALIDAD: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(120, 10, utf8_decode($especialidad), 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(15.6, 10, 'PERIODO: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, $periodo, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(17.5, 10, 'TURNO: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(134, 10, $turno, 0, 0, 'L');
		$pdf->Ln(12);
		$pdf->SetDrawColor(67, 133, 241);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(8, 45, 252);
		$pdf->Cell(93, 8, 'MATERIA', 1, 0, 'C');
		$pdf->Cell(93, 8, 'PROFESOR/A', 1, 1, 'C');
		$pdf->SetFont('Arial', 'B', 8);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(93, 15, utf8_decode($materia_1), 1, 0, 'C');
		$pdf->Cell(93, 15, utf8_decode($maestro_1), 1, 1, 'C');
		$pdf->Cell(93, 15, utf8_decode($materia_2), 1, 0, 'C');
		$pdf->Cell(93, 15, utf8_decode($maestro_2), 1, 1, 'C');
		$pdf->SetDrawColor(0, 0, 0);
		$pdf->Line(18, 267, 96, 267);
		$pdf->Line(111, 267, 189, 267);
		$pdf->Ln(14);
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(92, 10, utf8_decode('Autorizó'), 0, 0, 'C');
		$pdf->Cell(95, 10, 'Solicitante', 0, 0, 'C');

		$pdf->Output('', 'Solicitud_Extraordinario_Folio_'.$folio.'.pdf', true);

		$mysqli->close();
	} else if($numero_pdf == 3) {
		$fecha = strftime('%d/%m/%y');
		$periodo = 'JUN-19';
		$no_control = $_GET['no_control'];
		$nombre = $_GET['nombre'];
		$grupo = $_GET['grupo'];
		$especialidad = $_GET['especialidad'];
		$turno = $_GET['turno'];
		$materia_1 = $_GET['materia_1'];
		$materia_2 = $_GET['materia_2'];
		$materia_3 = $_GET['materia_3'];
		$maestro_1 = $_GET['maestro_1'];
		$maestro_2 = $_GET['maestro_2'];
		$maestro_3 = $_GET['maestro_3'];

		$mysqli->query("INSERT INTO pdfs_extraordinario(fecha, periodo, no_control, nombre_alumno, grupo, 
			especialidad, turno, materia_1, materia_2, materia_3, maestro_1, maestro_2, maestro_3, pdf) 
			VALUES ('".$fecha."', '".$periodo."', '".$no_control."', '".$nombre."', '".$grupo."', 
			'".$especialidad."', '".$turno."', '".$materia_1."', '".$materia_2."', '".$materia_3."',
			'".$maestro_1."', '".$maestro_2."', '".$maestro_3."', ".$numero_pdf.")");

		$mysqli->query("SET  @num := 0");
		$mysqli->query("UPDATE pdfs_extraordinario SET folio = @num := (@num+1)");

		$ultimo_pdf = $mysqli->query("SELECT folio FROM pdfs_extraordinario ORDER BY folio DESC LIMIT 1");
		$datos_pdf = $ultimo_pdf->fetch_assoc();
		$folio = $datos_pdf['folio'];
		
		$pdf = new FPDF();
		$pdf->AddPage();

		$pdf->Image('../../../../img/logo_cbtis136.png', 15, 7, 50);
		$pdf->Image('../../../../img/logo_uemstis.png', 145, 7, 50);
		$pdf->Ln(15);
		$pdf->SetFont('Arial', 'B', 19);
		$pdf->SetTextColor(250, 53, 53);
		$pdf->Cell(185, 10, 'Solicitud de pago para examen extraordinario', 0, 0, 'C');
		$pdf->Ln(12);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(30, 10, 'NO CONTROL: ', 0, 0, 'C');
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(28, 10, $no_control, 0, 0, 'C');
		$pdf->Ln(6);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(21, 10, 'NOMBRE: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(130, 10, utf8_decode($nombre), 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(12, 10, 'FOLIO: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, "JE19".$folio, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(18, 10, 'GRUPO: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(134, 10, $grupo, 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(12, 10, 'FECHA: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, $fecha, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(32, 10, 'ESPECIALIDAD: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(120, 10, utf8_decode($especialidad), 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(15.6, 10, 'PERIODO: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, $periodo, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(17.5, 10, 'TURNO: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(134, 10, $turno, 0, 0, 'L');
		$pdf->Ln(12);
		$pdf->SetDrawColor(67, 133, 241);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(8, 45, 252);
		$pdf->Cell(93, 8, 'MATERIA', 1, 0, 'C');
		$pdf->Cell(93, 8, 'PROFESOR/A', 1, 1, 'C');
		$pdf->SetFont('Arial', 'B', 8);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(93, 10, utf8_decode($materia_1), 1, 0, 'C');
		$pdf->Cell(93, 10, utf8_decode($maestro_1), 1, 1, 'C');
		$pdf->Cell(93, 10, utf8_decode($materia_2), 1, 0, 'C');
		$pdf->Cell(93, 10, utf8_decode($maestro_2), 1, 1, 'C');
		$pdf->Cell(93, 10, utf8_decode($materia_3), 1, 0, 'C');
		$pdf->Cell(93, 10, utf8_decode($maestro_3), 1, 0, 'C');
		$pdf->SetDrawColor(0, 0, 0);
		$pdf->Line(18, 126, 96, 126);
		$pdf->Line(18, 126, 96, 126);
		$pdf->Line(18, 126, 96, 126);
		$pdf->Line(18, 126, 96, 126);
		$pdf->Line(111, 126, 189, 126);
		$pdf->Line(111, 126, 189, 126);
		$pdf->Line(111, 126, 189, 126);
		$pdf->Line(111, 126, 189, 126);
		$pdf->Ln(24);
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(92, 10, utf8_decode('Autorizó'), 0, 0, 'C');
		$pdf->Cell(95, 10, 'Solicitante', 0, 0, 'C');
		$pdf->SetDash(1, 1);
		$pdf->Line(-10, 140, 220, 140);
		$pdf->Line(-10, 140, 220, 140);
		$pdf->Line(-10, 140, 220, 140);
		$pdf->Line(-10, 140, 220, 140);
		$pdf->SetDash(0, 0);
		$pdf->Image('../../../../img/logo_cbtis136.png', 15, 148, 50);
		$pdf->Image('../../../../img/logo_uemstis.png', 145, 148, 50);
		$pdf->Ln(40);
		$pdf->SetFont('Arial', 'B', 19);
		$pdf->SetTextColor(250, 53, 53);
		$pdf->Cell(185, 10, 'Solicitud de pago para examen extraordinario', 0, 0, 'C');
		$pdf->Ln(12);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(30, 10, 'NO CONTROL: ', 0, 0, 'C');
		$pdf->SetFont('Arial', 'B', 11);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(28, 10, $no_control, 0, 0, 'C');
		$pdf->Ln(6);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(21, 10, 'NOMBRE: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(130, 10, utf8_decode($nombre), 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(12, 10, 'FOLIO: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, "JE19".$folio, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(18, 10, 'GRUPO: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(134, 10, $grupo, 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(12, 10, 'FECHA: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, $fecha, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(32, 10, 'ESPECIALIDAD: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(120, 10, utf8_decode($especialidad), 0, 0, 'L');
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(15.6, 10, 'PERIODO: ', 0, 0, 'C');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(15, 10, $periodo, 0, 0, 'L');
		$pdf->Ln(6);
		$pdf->SetTextColor(33, 40, 246);
		$pdf->Cell(17.5, 10, 'TURNO: ', 0, 0, 'R');
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(134, 10, $turno, 0, 0, 'L');
		$pdf->Ln(12);
		$pdf->SetDrawColor(67, 133, 241);
		$pdf->SetFont('Arial', 'B', 10);
		$pdf->SetTextColor(8, 45, 252);
		$pdf->Cell(93, 8, 'MATERIA', 1, 0, 'C');
		$pdf->Cell(93, 8, 'PROFESOR/A', 1, 1, 'C');
		$pdf->SetFont('Arial', 'B', 8);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->Cell(93, 10, utf8_decode($materia_1), 1, 0, 'C');
		$pdf->Cell(93, 10, utf8_decode($maestro_1), 1, 1, 'C');
		$pdf->Cell(93, 10, utf8_decode($materia_2), 1, 0, 'C');
		$pdf->Cell(93, 10, utf8_decode($maestro_2), 1, 1, 'C');
		$pdf->Cell(93, 10, utf8_decode($materia_3), 1, 0, 'C');
		$pdf->Cell(93, 10, utf8_decode($maestro_3), 1, 0, 'C');
		$pdf->SetDrawColor(0, 0, 0);
		$pdf->Line(18, 267, 96, 267);
		$pdf->Line(111, 267, 189, 267);
		$pdf->Ln(25);
		$pdf->SetFont('Arial', 'B', 12);
		$pdf->Cell(92, 10, utf8_decode('Autorizó'), 0, 0, 'C');
		$pdf->Cell(95, 10, 'Solicitante', 0, 0, 'C');

		$pdf->Output('', 'Solicitud_Extraordinario_Folio_'.$folio.'.pdf', true);

		$mysqli->close();
	}
?>