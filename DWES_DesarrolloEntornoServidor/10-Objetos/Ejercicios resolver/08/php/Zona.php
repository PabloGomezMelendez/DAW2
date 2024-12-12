<?php
class Zona {
    private $nombre;
    private $precio;
    private $entradasDisponibles;
    private $ingresosTotales = 0;

    public function __construct($nombre, $precio, $entradasDisponibles) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->entradasDisponibles = $entradasDisponibles;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getEntradasDisponibles() {
        return $this->entradasDisponibles;
    }

    public function getIngresosTotales() {
        return $this->ingresosTotales;
    }

    public function venderEntradas($cantidad) {
        if ($cantidad <= $this->entradasDisponibles) {
            $this->entradasDisponibles -= $cantidad;
            $this->ingresosTotales += $cantidad * $this->precio;
            return true;
        } else {
            return false; // No hay suficientes entradas
        }
    }
}
?>
