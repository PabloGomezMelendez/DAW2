<?php
class Fallecidos
{
    public  $anio;
    public  $fallecidos;

    public function __construct($anio, $fallecidos)
    {
        $this->anio = $anio;
        $this->fallecidos = $fallecidos;
    }

    public function getAnio()
    {
        return $this->anio;
    }

    public function setAnio($anio): void
    {
        $this->anio = $anio;
    }

    public function getFallecidos()
    {
        return $this->fallecidos;
    }

    public function setFallecidos($fallecidos): void
    {
        $this->fallecidos = $fallecidos;
    }
}
