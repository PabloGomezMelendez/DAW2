<?php
class Periferico { 

public int $codigo;
public string $descripcion;
public float $precio;


function __construct($codigo, $descripcion, $precio)
{
	$this->codigo = $codigo;	
	$this->descripcion = $descripcion;
	$this->precio = $precio;
}
	
public function getCodigo()
{
    return $this->codigo;
}
	
public function getDescripcion()
{
	return $this->descripcion;
}
		
public function getPrecio()
{
	return $this->precio;
}

}

