<?php
const PESO_EURO = 166.386;
const EURO_PESO = 0.006;
const METODO_GET = 'GET';
const METODO_POST = 'POST';

$codigo ;
$mensaje ;
$resultado;

switch ($_SERVER['REQUEST_METHOD']) {
    case METODO_GET:
        $resultado = 'Llamada GET al servidor de cambio de divisas';
        break;
    case METODO_POST:
        if (isset($_GET['moneda']) && isset($_GET['cantidad'])) {
            $moneda = $_GET['moneda'];
            $cantidad = $_GET['cantidad'];
            if ($moneda == 'peseta') {
                $resultado = $cantidad * PESO_EURO;
                echo $cantidad . ' pesetas son ' . $resultado . ' euros';
            } else {
                $resultado = $cantidad * EURO_PESO;
                echo $cantidad . ' euros son ' . $resultado . ' pesetas';
            }
        } else {
            echo 'Error al calcular cambio de divisas';
        }
        break;
    default:
        echo 'Método no permitido';
        break;
}

if ($_SERVER['REQUEST_METHOD'] === METODO_POST) {
    if (isset($_GET['moneda']) && isset($_GET['cantidad'])) {
        $moneda = $_GET['moneda'];
        $cantidad = $_GET['cantidad'];
        if ($moneda == 'peseta') {
            $resultado = $cantidad * PESO_EURO;
            echo $cantidad . ' pesetas son ' . $resultado . ' euros';
        } if ($moneda == 'euro') {
            $resultado = $cantidad * EURO_PESO;
            echo $cantidad . ' euros son ' . $resultado . ' pesetas';
        }
    } else {
        echo 'Error al calcular cambio de divisas';
    }
}

if ($_SERVER['REQUEST_METHOD'] === METODO_GET) {
    echo json_encode('Llamada GET al servidor de cambio de divisas');
}




header('HTTP/1.1 $codigo $mensaje');
header('Content-Type: application/json; charset=utf-8');
echo json_encode($resultado);
