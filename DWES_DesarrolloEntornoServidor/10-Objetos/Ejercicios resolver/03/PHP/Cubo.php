<?php
class Cubo
{
    public $capacidad;
    public $contenido;

    // Constructor
    function __construct($capacidad = 0, $contenido = 0)
    {
        $this->capacidad[] = $capacidad;
        $this->contenido[] = $contenido;
    }
    /**
     * Get the value of contenido
     */
    public function getContenido()
    {
        return $this->contenido;
    }
    /**
     * Set the value of contenido
     *
     * @return  self
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }
    /**
     * Get the value of capacidad
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }
    /**
     * Set the value of capacidad
     *
     * @return  self
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }
    public function esVacia()
    {
        if (count($this->capacidad) == 0) {
            return true;
        } else {
            return false;
        }
    }
    public function esLleno()
    {
        if (count($this->capacidad) == $this->contenido) {
            return true;
        } else {
            return false;
        }
    }

    public function verterEn($otroCubo)
    {
        $espacioDisponible = $otroCubo->getCapacidad() - $otroCubo->getContenido();
        $cantidadAVerter = min($this->contenido, $espacioDisponible);

        // Transferir contenido
        $otroCubo->contenido += $cantidadAVerter;
        $this->contenido -= $cantidadAVerter;
    }
}
