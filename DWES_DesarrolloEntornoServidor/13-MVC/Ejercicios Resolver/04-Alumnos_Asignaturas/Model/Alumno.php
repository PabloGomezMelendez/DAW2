<?php
require_once 'BlogDB.php';
class Alumno{
    //Atributos de la clase
    private  $matricula;
    private  $nombre;
    private  $apellidos;
    private  $curso;

    // CONSTRUCTORES con parámetros iniciales.
    function __construct($matricula = "", $nombre = "", $apellidos = "", $curso = "")
    {
        $this->matricula = $matricula;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->curso = $curso;
    }


    // GETTERS Y SETTERS
    /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */ 
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */ 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     *
     * @return  self
     */ 
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    // MÉTODOS de la clase
    public static function getAllAlumnos(){
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT * FROM alumno";
        $consulta = $conexion->query($seleccion);

        $alumnos = [];

        while ($registro = $consulta->fetchObject()) {
            $alumnos[] = new Alumno($registro->matricula, $registro->nombre, $registro->apellidos, $registro->curso);
        }

        return $alumnos;
    }
    public static function getAlumnoByMatricula($matricula){
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT * FROM alumno WHERE matricula='$matricula'";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $asignatura = new Asignatura($registro->id, $registro->nombre);
        return $asignatura;
    }
    public function insert()
    {
        $conexion = BlogDB::connectDB();
        $insercion = "INSERT INTO alumno (matricula, nombre, apellidos, curso) VALUES ('$this->matricula', '$this->nombre','$this->apellidos','$this->curso')";
        $conexion->exec($insercion);
        $conexion = null;
    }

    public function delete()
    {
        $conexion = BlogDB::connectDB();
        $borrado = "DELETE FROM alumno WHERE matricula='$this->matricula'";
        $conexion->exec($borrado);
        $conexion = null;
    }
    public function update()
    {
        $conexion = BlogDB::connectDB();
        $actualiza = "UPDATE alumno SET nombre='$this->nombre', apellidos='$this->apellidos',curso='$this->curso' WHERE matricula='$this->matricula'";
        $conexion->exec($actualiza);
        $conexion = null;
    }
}