<?php
function escribirTresNumeros($archivo, $numeros)
{
    // Abrir el archivo en modo de agregar (append)
    $manejador = fopen($archivo, "a");
    if ($manejador === false) {
        die("No se pudo abrir o crear el archivo.");
    }

    // Escribir cada número en una nueva línea
    foreach ($numeros as $numero) {
        fwrite($manejador, (int)($numero) . PHP_EOL);
    }

    // Cerrar el archivo
    fclose($manejador);

    echo "Los números se han añadido correctamente al archivo <strong>$archivo</strong>.<br>";
}
function obtenerSuma($archivo)
{
    $suma=0;
    // Verificar si el archivo existe
    if (file_exists($archivo)) {
        echo "<h3>Contenido del archivo <strong>$archivo</strong>:</h3>";
        $fp = fopen($archivo, "r");
        while (!feof($fp)) {
            $linea = fgets($fp);
            $suma += (int)($linea);
        }
        fclose($fp);
        echo "La suma d los digitos del fichero es ".$suma;
    } else {
        echo "El archivo <strong>$archivo</strong> no existe.";
    }
}

function obtenerArrNum($archivo)
{
    $arrNum = [];
    // Verificar si el archivo existe
    if (file_exists($archivo)) {
        echo "<h3>Contenido del archivo <strong>$archivo</strong>:</h3>";
        $fp = fopen($archivo, "r");
        while (!feof($fp)) {
            $aux = fgets($fp);
            $arrNum[] = (int)($aux);
        }
        fclose($fp);
        foreach ($arrNum as $num) {
            echo "<li>$num</li>";
        }
    } else {
        echo "El archivo <strong>$archivo</strong> no existe.";
    }
}
