<?php
// 1. esCapicua: Devuelve verdadero si el número es capicúa.
function esCapicua($num) {
    $original = $num;
    $invertido = 0;
    
    while ($num > 0) {
        $digito = $num % 10;
        $invertido = $invertido * 10 + $digito;
        $num = intval($num / 10);
    }
    
    return $original == $invertido;
}

// 2. esPrimo: Devuelve verdadero si el número es primo.
function esPrimo($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

// 3. siguientePrimo: Devuelve el menor primo mayor al número dado.
function siguientePrimo($num) {
    $num++;
    while (!esPrimo($num)) {
        $num++;
    }
    return $num;
}

// 4. potencia: Calcula la potencia de una base con un exponente.
function potencia($base, $exponente) {
    $resultado = 1;
    for ($i = 0; $i < $exponente; $i++) {
        $resultado *= $base;
    }
    return $resultado;
}

// 5. digitos: Cuenta el número de dígitos de un número entero.
function digitos($num) {
    $contador = 0;
    if ($num == 0) return 1; // Caso especial para 0
    while ($num != 0) {
        $num = intval($num / 10);
        $contador++;
    }
    return $contador;
}

// 6. voltea: Le da la vuelta a un número.
function voltea($num) {
    $invertido = 0;
    while ($num > 0) {
        $digito = $num % 10;
        $invertido = $invertido * 10 + $digito;
        $num = intval($num / 10);
    }
    return $invertido;
}

// 7. digitoN: Devuelve el dígito en la posición n de un número.
function digitoN($num, $n) {
    $longitud = digitos($num);
    if ($n >= $longitud) return -1;
    
    for ($i = 0; $i < $longitud - $n - 1; $i++) {
        $num = intval($num / 10);
    }
    
    return $num % 10;
}

// 8. posicionDeDigito: Da la posición de la primera ocurrencia de un dígito en un número.
function posicionDeDigito($num, $digito) {
    $posicion = 0;
    while ($num > 0) {
        if ($num % 10 == $digito) {
            return $posicion;
        }
        $num = intval($num / 10);
        $posicion++;
    }
    return -1;
}

// 9. quitaPorDetras: Le quita n dígitos por detrás a un número.
function quitaPorDetras($num, $n) {
    for ($i = 0; $i < $n; $i++) {
        $num = intval($num / 10);
    }
    return $num;
}

// 10. quitaPorDelante: Le quita n dígitos por delante a un número.
function quitaPorDelante($num, $n) {
    $longitud = digitos($num);
    for ($i = 0; $i < $longitud - $n; $i++) {
        $num = $num % potencia(10, $longitud - $i - 1);
    }
    return $num;
}

// 11. pegaPorDetras: Añade un dígito por detrás.
function pegaPorDetras($num, $digito) {
    return $num * 10 + $digito;
}

// 12. pegaPorDelante: Añade un dígito por delante.
function pegaPorDelante($num, $digito) {
    $factor = potencia(10, digitos($num));
    return $digito * $factor + $num;
}

// 13. trozoDeNumero: Devuelve un trozo del número entre las posiciones dadas.
function trozoDeNumero($num, $inicio, $fin) {
    $longitud = digitos($num);
    $num = quitaPorDelante($num, $inicio);
    $trozo = quitaPorDetras($num, $longitud - $fin - 1);
    return $trozo;
}

// 14. juntaNumeros: Pega dos números para formar uno.
function juntaNumeros($num1, $num2) {
    $factor = potencia(10, digitos($num2));
    return $num1 * $factor + $num2;
}

// Ejemplos de uso:
echo "¿Es 121 capicúa? " . (esCapicua(121) ? "Sí" : "No") . "\n";
echo "¿Es 7 primo? " . (esPrimo(7) ? "Sí" : "No") . "\n";
echo "El siguiente primo después de 10 es " . siguientePrimo(10) . "\n";
echo "2 elevado a 3 es " . potencia(2, 3) . "\n";
echo "El número 12345 tiene " . digitos(12345) . " dígitos\n";
echo "El número volteado de 12345 es " . voltea(12345) . "\n";
echo "El dígito en la posición 2 de 12345 es " . digitoN(12345, 2) . "\n";
echo "La posición del dígito 4 en 12345 es " . posicionDeDigito(12345, 4) . "\n";
echo "Quitar 2 dígitos por detrás a 12345 es " . quitaPorDetras(12345, 2) . "\n";
echo "Quitar 2 dígitos por delante a 12345 es " . quitaPorDelante(12345, 2) . "\n";
echo "Pegar 6 por detrás a 1234 es " . pegaPorDetras(1234, 6) . "\n";
echo "Pegar 6 por delante a 1234 es " . pegaPorDelante(1234, 6) . "\n";
echo "El trozo del número 123456 entre posiciones 2 y 4 es " . trozoDeNumero(123456, 2, 4) . "\n";
echo "Juntar los números 123 y 456 es " . juntaNumeros(123, 456) . "\n";
?>
