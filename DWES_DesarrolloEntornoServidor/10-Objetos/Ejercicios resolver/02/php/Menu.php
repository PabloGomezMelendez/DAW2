<?php
class Menu
{
    // Atributos
    private $titulo = array();
    private $enlace = array();


    // Constructor
    function __construct($t, $e)
    {
        $this->titulo[] = $t;
        $this->enlace[] = $e;
    }

    // GGETTERS Y SETTERS
    public function setTitulo($t)
    {
        $this->titulo = $t;
    }
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setEnlace($e)
    {
        $this->enlace = $e;
    }
    public function getEnlace()
    {
        return $this->titulo;
    }

    // Métodos
    //**añade a las listas
    // Añadir un nuevo menú al array de títulos y enlaces
    public function addMenu($titulo, $enlace)
    {
        $this->titulo[] = $titulo;
        $this->enlace[] = $enlace;
    }

    // ** imprime en el menu en vertical
    public function imprimirMenuVertical()
    {
        $aux = "";
        for ($i = 0; $i < count($this->titulo); $i++) {
            $aux .= "<a href='" . $this->enlace[$i] . "'>" . $this->titulo[$i] . "</a><br>";
        }
        return $aux;
    }

    // ** imprime en el menu en horizontal
    public function imprimirMenuHorrizontal()
    {
        $aux = "";
        for ($i = 0; $i < count($this->titulo); $i++) {
            $aux .= "<a href='" . $this->enlace[$i] . "'>" . $this->titulo[$i] . "</a>, ";
        }
        return $aux;
    }
}

?>
