<?php
class DadoPoker {
    private static $tiradasTotales = 0; // Contador de tiradas entre todos los dados
    private $ultimaFigura;             // Figura de la última tirada

    // Array de las caras del dado
    private static $caras = ["As", "K", "Q", "J", "7", "8"];

    // Método para tirar el dado y asignar una figura aleatoria
    public function tira() {
        $indice = rand(0, count(self::$caras) - 1);
        $this->ultimaFigura = self::$caras[$indice];
        self::$tiradasTotales++;
    }

    // Método para obtener la última figura
    public function nombreFigura() {
        return $this->ultimaFigura ?? "No se ha tirado aún";
    }

    // Método estático para obtener el número total de tiradas
    public static function getTiradasTotales() {
        return self::$tiradasTotales;
    }
}
?>
