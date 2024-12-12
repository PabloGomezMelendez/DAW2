<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <<?php
        //Ejercicio 1
        function imprimirCaracteres($string)
        {
            for ($i = 0; $i < strlen($string); $i++) {
                echo $string[$i] . "\n";
            }
        }
        imprimirCaracteres("Ejemplo de texto");

        //Ejercicio 2
        function cambiarVocales($frase, $nuevaVocal)
        {
            $fraseModificada = preg_replace('/[aeiou]/i', $nuevaVocal, $frase);
            echo $fraseModificada;
        }
        cambiarVocales("Tengo una hormiguita en la patita, que me esta haciendo cosquillitas y no me puedo aguantar", 'o');

        //Ejercicio 3
        function contarPalabras($frase)
        {
            $frase = trim(preg_replace('/\s+/', ' ', $frase));
            $palabras = explode(" ", $frase);
            echo "Cantidad de palabras: " . count($palabras);
        }
        contarPalabras("   Hola     mundo   ");

        //Ejercicio 4
        function comienzaYTerminaIgual($string)
        {
            $string = trim($string);
            $palabras = explode(" ", $string);
            echo (strcasecmp($palabras[0], end($palabras)) === 0) ? "Sí" : "No";
        }
        comienzaYTerminaIgual("Hola mundo Hola");

        //Ejercicio 5
        function intercambiarString($string)
        {
            $original = $string;
            do {
                $string = substr($string, 1) . $string[0];
                echo $string . "\n";
            } while ($string !== $original);
        }
        intercambiarString("Hola");

        //Ejercicio 6
        function contarPalabrasPorFrase($parrafo)
        {
            $frases = explode(".", $parrafo);
            foreach ($frases as $index => $frase) {
                if (trim($frase) !== '') {
                    $palabras = explode(" ", trim($frase));
                    echo "Frase " . ($index + 1) . ": " . count($palabras) . " palabras\n";
                }
            }
        }
        contarPalabrasPorFrase("Esta es la primera frase. Y aquí está la segunda.");

        //Ejercicio  7
        function buscarPalabra($frase, $palabra)
        {
            echo (stripos($frase, $palabra) !== false) ? "Palabra encontrada" : "Palabra no encontrada";
        }
        buscarPalabra("Esta es una frase de ejemplo.", "ejemplo");

        //Ejercicio 8
        function textoACodigoAscii($string)
        {
            $asciiCodes = [];
            for ($i = 0; $i < strlen($string); $i++) {
                $asciiCodes[] = ord($string[$i]);
            }
            echo "Códigos ASCII: " . implode("", $asciiCodes) . "\n";

            // Convertir ASCII de vuelta a texto
            $textoOriginal = '';
            foreach ($asciiCodes as $codigo) {
                $textoOriginal .= chr($codigo);
            }
            echo "Texto original: " . $textoOriginal;
        }
        textoACodigoAscii("Hola");

        //Ejercicio 9
        function invertirCadena($string)
        {
            echo strrev($string);
        }
        invertirCadena("Hola mundo");

        //Ejercicio 10
        function nombreFormato($nombreCompleto)
        {
            $nombreFormateado = ucwords(strtolower($nombreCompleto));
            $iniciales = '';
            foreach (explode(" ", $nombreCompleto) as $palabra) {
                $iniciales .= strtoupper($palabra[0]) . ".";
            }
            echo "Nombre: $nombreFormateado\n";
            echo "Iniciales: $iniciales\n";
        }
        nombreFormato("Pablo Gómez Meléndez");

        //Ejercicio 11
        function convertirARomano($romano)
        {
            $valores = ['M' => 1000, 'D' => 500, 'C' => 100, 'L' => 50, 'X' => 10, 'V' => 5, 'I' => 1];
            $romano = strtoupper($romano);
            $decimal = 0;
            // Validar que solo contenga caracteres válidos de números romanos
            for ($i = 0; $i < strlen($romano); $i++) {
                if (!isset($valores[$romano[$i]])) {
                    return "Error: Caracter inválido";
                }
                $decimal += $valores[$romano[$i]];
            }
            return "El valor decimal es: " . $decimal;
        }
        echo convertirARomano("MCMXCIV");

        //Ejercicio 12
        function analizarTelegrama($telegrama)
        {
            // a. Contar palabras con más de 10 letras
            $palabras = preg_split('/\s+/', trim($telegrama, "."));
            $palabrasLargas = 0;
            foreach ($palabras as $palabra) {
                if (strlen($palabra) > 10) {
                    $palabrasLargas++;
                }
            }
            // b. Contar la cantidad de veces que aparece cada vocal
            $vocales = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];
            $telegramaMinuscula = strtolower($telegrama);
            foreach (str_split($telegramaMinuscula) as $caracter) {
                if (isset($vocales[$caracter])) {
                    $vocales[$caracter]++;
                }
            }
            // c. Calcular el porcentaje de espacios en blanco
            $longitudTotal = strlen($telegrama);
            $espaciosBlancos = substr_count($telegrama, " ");
            $porcentajeEspacios = ($espaciosBlancos / $longitudTotal) * 100;
            // Mostrar resultados
            echo "a. Cantidad de palabras con más de 10 letras: $palabrasLargas\n";
            echo "b. Cantidad de cada vocal:\n";
            foreach ($vocales as $vocal => $cantidad) {
                echo "   Vocal '$vocal': $cantidad\n";
            }
            echo "c. Porcentaje de espacios en blanco: " . number_format($porcentajeEspacios, 2) . "%\n";
        }
        $telegrama = "Este es un ejemplo de telegrama de prueba para contar palabras largas y calcular las vocales y espacios en blanco.";
        analizarTelegrama($telegrama);

        //Ejercicio 13
        function analizarTexto($texto)
        {
            $texto = trim($texto, " .");
            $palabras = preg_split('/\s+/', $texto);

            // a. Encontrar palabra más larga y su posición
            $palabraLarga = "";
            $posicionLarga = 0;

            foreach ($palabras as $pos => $palabra) {
                if (strlen($palabra) > strlen($palabraLarga)) {
                    $palabraLarga = $palabra;
                    $posicionLarga = $pos;
                }
            }
            echo "Palabra más larga: '$palabraLarga' en la posición $posicionLarga, longitud: " . strlen($palabraLarga) . "\n";

            // b. Contar palabras con 8-16 letras y más de 3 'a'
            $contador = 0;
            foreach ($palabras as $palabra) {
                $cantidadA = substr_count(strtolower($palabra), 'a');
                if (strlen($palabra) >= 8 && strlen($palabra) <= 16 && $cantidadA > 3) {
                    $contador++;
                }
            }
            echo "Palabras con 8-16 caracteres y más de 3 'a': $contador\n";
        }

        analizarTexto("   Este es un ejemplo. Frase para analizar. ");

        ?>
        </body>

</html>