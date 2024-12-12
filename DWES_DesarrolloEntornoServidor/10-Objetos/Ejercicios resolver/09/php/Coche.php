<?php
class Coche {
    private $matricula;
    private $modelo;
    private $precio;
    private static $modeloCaro = "";
    private static $precioCaro = 0;

    public function __construct($matricula, $modelo, $precio) {
        $this->matricula = $matricula;
        $this->modelo = $modelo;
        $this->precio = $precio;

        self::actualizarModeloCaro($modelo, $precio);
    }

    public static function actualizarModeloCaro($modelo, $precio) {
        if ($precio > self::$precioCaro) {
            self::$modeloCaro = $modelo;
            self::$precioCaro = $precio;
        }
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public static function masCaro() {
        return "Modelo: " . self::$modeloCaro . ", Precio: " . self::$precioCaro . " €";
    }

    public function toString() {
        return "<tr>
                    <td>{$this->matricula}</td>
                    <td>{$this->modelo}</td>
                    <td>{$this->precio} €</td>
                    <td>No procede</td>
                </tr>";
    }
}
?>
