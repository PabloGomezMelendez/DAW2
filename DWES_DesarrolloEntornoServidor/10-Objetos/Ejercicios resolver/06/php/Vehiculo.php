<?php
class Vehiculo {
    private static $vehiculosCreados = 0; // Contador de vehículos creados
    private static $kmTotales = 0;       // Kilómetros totales recorridos por todos los vehículos
    private $kmRecorridos = 0;           // Kilómetros recorridos por este vehículo

    public function __construct() {
        self::$vehiculosCreados++;
    }

    public function anda($km) {
        $this->kmRecorridos += $km;
        self::$kmTotales += $km;
        return "Has recorrido $km kilómetros.";
    }

    public function getKmRecorridos() {
        return $this->kmRecorridos;
    }

    public static function getKmTotales() {
        return self::$kmTotales;
    }

    public static function getVehiculosCreados() {
        return self::$vehiculosCreados;
    }
}

class Bicicleta extends Vehiculo {
    public function hazCaballito() {
        return "¡Estás haciendo el caballito con la bicicleta!";
    }
}

class Coche extends Vehiculo {
    public function quemaRueda() {
        return "¡Estás quemando rueda con el coche!";
    }
}
?>
