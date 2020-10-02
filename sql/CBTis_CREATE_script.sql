CREATE DATABASE cbtis;

USE cbtis;

CREATE TABLE alumnos (
    no_control CHAR (14) PRIMARY KEY,
    carrera VARCHAR (50),
    generacion VARCHAR(15),
    turno VARCHAR (15),
    semestre INT,
    grupo VARCHAR(8),
    nombre VARCHAR (70),
    apellido_paterno VARCHAR (50),
    apellido_materno VARCHAR (50),
    curp CHAR (25)
);

CREATE TABLE calificaciones_semestrales (
	clave_calificacion INT PRIMARY KEY,
	clave_centro VARCHAR (10),
	plantel VARCHAR (13),
	carrera VARCHAR (50),
	generacion VARCHAR (15),
	turno VARCHAR (15),
	semestre INT,
	grupo VARCHAR (8),
	no_control CHAR (14),
	nombre VARCHAR (70),
	apellido_paterno VARCHAR (50),
	apellido_materno VARCHAR (50),
	curp CHAR (25),
	nombre_asignatura VARCHAR (200),
	calificacion_p1 INT,
	calificacion_p2 INT,
	calificacion_p3 INT,
	calificacion_final INT,
	periodo VARCHAR (30),
	firmado VARCHAR (15),
	firma INT,
	asistencias_1 INT,
	asistencias_2 INT,
	asistencias_3 INT,
	total_asistencias INT,
	tipo_acreditacion VARCHAR (7)
);

CREATE TABLE calificaciones_intersemestrales (
	clave_calificacion INT PRIMARY KEY,
	clave_centro VARCHAR (10),
	plantel VARCHAR (13),
	carrera VARCHAR (50),
	generacion VARCHAR (15),
	turno VARCHAR (15),
	semestre INT,
	grupo VARCHAR (8),
	no_control CHAR (14),
	nombre VARCHAR (70),
	apellido_paterno VARCHAR (50),
	apellido_materno VARCHAR (50),
	curp CHAR (25),
	nombre_asignatura VARCHAR (200),
	calificacion_p1 INT,
	calificacion_p2 INT,
	calificacion_p3 INT,
	calificacion_final INT,
	periodo VARCHAR (30),
	firmado VARCHAR (15),
	firma INT,
	asistencias_1 INT,
	asistencias_2 INT,
	asistencias_3 INT,
	total_asistencias INT,
	tipo_acreditacion VARCHAR (7)
);

CREATE TABLE calificaciones_extraordinario (
	clave_calificacion INT PRIMARY KEY,
	clave_centro VARCHAR (10),
	plantel VARCHAR (13),
	carrera VARCHAR (50),
	generacion VARCHAR (15),
	turno VARCHAR (15),
	semestre INT,
	grupo VARCHAR (8),
	no_control CHAR (14),
	nombre VARCHAR (70),
	apellido_paterno VARCHAR (50),
	apellido_materno VARCHAR (50),
	curp CHAR (25),
	nombre_asignatura VARCHAR (200),
	calificacion_p1 INT,
	calificacion_p2 INT,
	calificacion_p3 INT,
	calificacion_final INT,
	periodo VARCHAR (30),
	firmado VARCHAR (15),
	firma INT,
	asistencias_1 INT,
	asistencias_2 INT,
	asistencias_3 INT,
	total_asistencias INT,
	tipo_acreditacion VARCHAR (7)
);

CREATE TABLE materias (
    clave_materia VARCHAR(30) PRIMARY KEY,
    nombre_asignatura VARCHAR (200),
    tipo VARCHAR (12)
);

CREATE TABLE docentes (
    clave_docente INT PRIMARY KEY,
    trato VARCHAR (15),
    nombre VARCHAR (100)
);

CREATE TABLE usuarios (
    id_usuario INT PRIMARY KEY,
    usuario VARCHAR (30),
    password VARCHAR (30),
    tipo_usuario CHAR (15)
);

CREATE TABLE pdfs_extraordinario (
	folio INT (4) ZEROFILL PRIMARY KEY AUTO_INCREMENT,
	fecha VARCHAR (8),
	periodo CHAR (6),
	no_control CHAR (14),
	nombre_alumno VARCHAR (100),
	grupo VARCHAR (8),
	especialidad VARCHAR (50),
	turno VARCHAR (15),
	materia_1 VARCHAR (200),
	materia_2 VARCHAR (200),
	materia_3 VARCHAR (200),
	maestro_1 VARCHAR (100),
	maestro_2 VARCHAR (100),
	maestro_3 VARCHAR (100),
	pdf INT
);

CREATE TABLE pdfs_intersemestral (
	folio INT (4) ZEROFILL PRIMARY KEY AUTO_INCREMENT,
	fecha VARCHAR (8),
	periodo CHAR (6),
	no_control CHAR (14),
	nombre_alumno VARCHAR (100),
	grupo VARCHAR (8),
	especialidad VARCHAR (50),
	turno VARCHAR (15),
	materia_1 VARCHAR (200),
	materia_2 VARCHAR (200),
	materia_3 VARCHAR (200),
	maestro_1 VARCHAR (100),
	maestro_2 VARCHAR (100),
	maestro_3 VARCHAR (100),
	pdf INT
);

CREATE TABLE pdfs_contraturno (
	folio INT (4) ZEROFILL PRIMARY KEY AUTO_INCREMENT,
	fecha VARCHAR (8),
	periodo CHAR (6),
	no_control CHAR (14),
	nombre_alumno VARCHAR (100),
	grupo VARCHAR (8),
	especialidad VARCHAR (50),
	turno VARCHAR (15),
	materia_1 VARCHAR (200),
	materia_2 VARCHAR (200),
	materia_3 VARCHAR (200),
	maestro_1 VARCHAR (100),
	maestro_2 VARCHAR (100),
	maestro_3 VARCHAR (100),
	pdf INT
);


/*Resetear el conteo del folio a 1*/
SET  @num := 0;

UPDATE pdfs_extraordinario SET folio = @num := (@num+1);

ALTER TABLE pdfs_extraordinario AUTO_INCREMENT = 1;

UPDATE pdfs_intersemestral SET folio = @num := (@num+1);

ALTER TABLE pdfs_intersemestral AUTO_INCREMENT = 1;

UPDATE pdfs_contraturno SET folio = @num := (@num+1);

ALTER TABLE pdfs_contraturno AUTO_INCREMENT = 1;