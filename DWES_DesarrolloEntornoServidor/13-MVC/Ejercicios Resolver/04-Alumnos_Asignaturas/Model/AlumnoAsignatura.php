<?php
require_once 'BlogDB.php';
require_once 'Alumno.php';
require_once 'Asignatura.php';

class AlumnoAsignatura
{
    //Atributos de la clase
    private $id;
    private $matricula;

    // Constructor con parámetros iniciales.
    public function __construct($id, $matricula)
    {
        $this->id = $id;
        $this->matricula = $matricula;
    }

    // Getters y Setters
    public function getId()
    {
        return $this->id;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    // Métodos de la clase AlumnoAsignatura
    //Insertar una nueva relación entre alumno y asignatura
    public function insertarRelacion()
    {
        $conexion = BlogDB::connectDB();
        $sql = "INSERT INTO alumno_asignatura (id, matricula) VALUES ('$this->id', '$this->matricula')";
        $conexion->exec($sql);
    }
    //Borrar una relación entre alumno y asignatura
    public function delete()
    {
        $conexion = BlogDB::connectDB();
        $borrado = "DELETE FROM alumno_asignatura WHERE id='$this->id' AND matricula='$this->matricula'";
        $conexion->exec($borrado);
    }
    //Actualizar una relación entre alumno y asignatura
    public function deleteAlumno()
    {
        $conexion = BlogDB::connectDB();
        $borrado = "DELETE FROM alumno_asignatura WHERE matricula='$this->matricula'";
        $conexion->exec($borrado);
    }
    //Actualizar una relación entre alumno y asignatura
    public function deleteAsignatura()
    {
        $conexion = BlogDB::connectDB();
        $borrado = "DELETE FROM alumno_asignatura WHERE id='$this->id'";
        $conexion->exec($borrado);
    }
    //Obtener todas las asignaturas de un alumno
    public static function alumnosByAsignatura($id)
    {
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT * FROM alumno_asignatura WHERE id=\"" . $id . "\"";
        $consulta = $conexion->query($seleccion);
        $alumnos = [];
        while ($registro = $consulta->fetchObject()) {
            $alumnos[] =  Alumno::getAlumnoByMatricula($registro->matricula);
        }
        return $alumnos;
    }
    //Obtener todos los alumnos de una asignatura
    public static function asignaturasByAlumno($matricula)
    {
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT * FROM alumno_asignatura WHERE matricula=\"" . $matricula . "\"";
        $consulta = $conexion->query($seleccion);
        $asignaturas = [];
        while ($registro = $consulta->fetchObject()) {
            $asignaturas[] =  Asignatura::getAsignaturaById($registro->id);
        }
        return $asignaturas;
    }
    //Obtener todas las asignaturas que no tiene un alumno
    public  function AsignaturasLibre($matricula)
    {
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT * FROM asignatura WHERE id NOT IN (SELECT id FROM alumno_asignatura WHERE matricula=\"" . $matricula . "\")";
        $consulta = $conexion->query($seleccion);
        $asignaturas = [];
        while ($registro = $consulta->fetchObject()) {
            $asignaturas[] =  Asignatura::getAsignaturaById($registro->id);
        }
        return $asignaturas;
    }
}
