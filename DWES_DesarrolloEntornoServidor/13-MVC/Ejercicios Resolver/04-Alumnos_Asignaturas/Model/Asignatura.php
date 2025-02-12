<?php
require_once 'BlogDB.php';
class Asignatura
{
    // Atributos de la clase
    private $id;
    private $nombre;

    // Constructor con parámetros iniciales.
    public function __construct($id = 0, $nombre = "")
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    // Getters y Setters
    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    // Métodos de la clase Asignatura
    // Método para obtener todas las asignaturas.
    public static function getAllAsignaturas()
    {
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT * FROM asignatura";
        $consulta = $conexion->query($seleccion);
        $asignaturas = [];
        while ($registro = $consulta->fetchObject()) {
            $asignaturas[] = new Asignatura($registro->id, $registro->nombre);
        }
        return $asignaturas;
    }

    // Método para obtener una asignatura por su id.
    public static function getAsignaturaById($id)
    {
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT * FROM asignatura WHERE id=\"" . $id . "\"";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $asignatura = new Asignatura($registro->id, $registro->nombre);
        return $asignatura;
    }

    // Métodos para gestionar las asignaturas en la base de datos.
    public  function insert()
    {
        $conexion = BlogDB::connectDB();
        $insercion = "INSERT INTO asignatura (nombre) VALUES (\"". $this->getNombre(). "\")";
        $conexion->exec($insercion);
    }
    // Método para actualizar una asignatura en la base de datos.
    public  function update()
    {
        $conexion = BlogDB::connectDB();
        $actualización = "UPDATE asignatura SET nombre=\"". $this->getNombre(). "\" WHERE id=\"". $this->getId(). "\"";
        $conexion->exec($actualización);
    }

    // Método para eliminar una asignatura en la base de datos.
    public  function delete()
    {
        $conexion = BlogDB::connectDB();
        $borrado = "DELETE FROM asignatura WHERE id=\"". $this->getId(). "\"";
        $conexion->exec($borrado);
    }
}
