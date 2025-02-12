<?php

require_once 'BlogDB.php';

class Articulo
{
    // ARTICULOS
    private $id;
    private $titulo;
    private $fecha;
    private $contenido;

    // CONSTRUCTORES
    function __construct($id = 0, $titulo = "", $fecha = "", $contenido = "")
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->fecha = $fecha;
        $this->contenido = $contenido;
    }

    // GETTERS Y SETTERS
    public function getId()
    {
        return $this->id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function getcontenido()
    {
        return $this->contenido;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }


    public function setFecha($fecha)
    {
        
            $this->fecha = $fecha;
        
    }


    public function setContenido($contenido)
    {
        $this->contenido = $contenido;
    }

    public function insert()
    {
        $conexion = BlogDB::connectDB();
        $insercion = "INSERT INTO articulo (titulo, fecha, contenido) VALUES ('$this->titulo', '$this->fecha','$this->contenido')";
        $conexion->exec($insercion);
        $conexion = null;
    }

    public function delete()
    {
        $conexion = BlogDB::connectDB();
        $borrado = "DELETE FROM articulo WHERE id='$this->id'";
        $conexion->exec($borrado);
        $conexion = null;
    }
    public function update()
    {
        $conexion = BlogDB::connectDB();
        $actualiza = "UPDATE articulo SET titulo='$this->titulo', fecha='$this->fecha',
        contenido='$this->contenido'
        WHERE id='$this->id'";
        $conexion->exec($actualiza);
        $conexion = null;
    }

    public static function getArticulos()
    {
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT id, titulo, fecha, contenido FROM articulo";
        $consulta = $conexion->query($seleccion);

        $articulos = [];

        while ($registro = $consulta->fetchObject()) {
            $articulos[] = new Articulo($registro->id, $registro->titulo, $registro->fecha, $registro->contenido);
        }

        return $articulos;
    }

    public static function getArticuloById($id)
    {
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT id, titulo, fecha, contenido FROM articulo WHERE id=$id";
        $consulta = $conexion->query($seleccion);
        if ($consulta->rowCount() > 0) {
            $registro = $consulta->fetchObject();
            $articulo = new Articulo($registro->id, $registro->titulo, $registro->fecha, $registro->contenido);
            return $articulo;
        } else {
            return false;
        }
    }
}
