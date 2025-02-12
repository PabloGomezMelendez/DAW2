<?php

require_once 'BlogDB.php';

class Producto
{
    // ARTIBUTOS
    private $id;
    private $nombre;
    private $precio;
    private $stock;
    private $img;

    // CONSTRUCTORES
    function __construct($id = 0, $nombre = "", $precio = 0.0, $stock = 0, $img = "")
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->img = $img;
    }

    // GETTERS Y SETTERS

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of stock
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the value of stock
     *
     * @return  self
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get the value of img
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    // Metodos de producto
    public function insert()
    {
        $conexion = BlogDB::connectDB();
        $insercion = "INSERT INTO articulo (nombre, precio, stock) VALUES ('$this->nombre', '$this->precio','$this->stock')";
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
        $actualiza = "UPDATE articulo SET nombre='$this->nombre', precio='$this->precio',
        stock='$this->stock'
        WHERE id='$this->id'";
        $conexion->exec($actualiza);
        $conexion = null;
    }

    public static function getArticulos()
    {
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT id, nombre, precio, stock FROM articulo";
        $consulta = $conexion->query($seleccion);

        $articulos = [];

        while ($registro = $consulta->fetchObject()) {
            $articulos[] = new Articulo($registro->id, $registro->nombre, $registro->precio, $registro->stock);
        }

        return $articulos;
    }

    public static function getArticuloById($id)
    {
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT id, nombre, precio, stock FROM articulo WHERE id=$id";
        $consulta = $conexion->query($seleccion);
        if ($consulta->rowCount() > 0) {
            $registro = $consulta->fetchObject();
            $articulo = new Articulo($registro->id, $registro->nombre, $registro->precio, $registro->stock);
            return $articulo;
        } else {
            return false;
        }
    }
}
