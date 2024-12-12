<?php

class Empleado 
{
    private $sueldo; 
    private $nombre;
    
    public function __construct($sueldo=0,$nombre="pepe el de los palotes")
    {
        $this->sueldo = $sueldo;
        $this->nombre = $nombre;

    }
    public function getSueldo()
    {
        return $this->sueldo;
    }
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function asigna($nombre,$sueldo){
        if($nombre == $this->nombre){
            $this->sueldo = $sueldo;
        }
    }
    public function pagarImpuestos(){
        return $this->sueldo >= 3000?"Debe pagar impuestos":"No debe pagar impuestos";
    }
}
