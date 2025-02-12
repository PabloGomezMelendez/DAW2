<?php
require_once '../Model/Alumno.php';
require_once '../Model/Asignatura.php';
require_once '../Model/AlumnoAsignatura.php';

// Obtiene todas las Alumnos
$data['Alumnos'] = Alumno::getAllAlumnos();
// Obtiene todas las Asignaturas
$data['Asignaturas'] = Asignatura::getAllAsignaturas();


// Carga la vista de listado
include '../View/index_view.php';
