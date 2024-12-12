<?php
require_once 'Coche.php';

class CocheLujo extends Coche {
    private $suplemento;

    public function __construct($matricula, $modelo, $precio, $suplemento) {
        parent::__construct($matricula, $modelo, $precio);
        $this->suplemento = $suplemento;

        // Actualizar el modelo más caro considerando solo el precio base
        self::actualizarModeloCaro($modelo, $precio);
    }

    public function getPrecio() {
        return parent::getPrecio() + $this->suplemento;
    }

    public function getSuplemento() {
        return $this->suplemento;
    }

    public function toString() {
        return "<tr>
                    <td>{$this->getMatricula()}</td>
                    <td>{$this->getModelo()}</td>
                    <td>{$this->getPrecio()} €</td>
                    <td>{$this->suplemento} €</td>
                </tr>";
    }
}
?>
