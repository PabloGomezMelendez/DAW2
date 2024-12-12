<!-- @Pablo Gómez Meléndez -->
<<?php
    /**
     * Devuelve verdadero si el número que se pasa como parámetro es capicúa y falso en caso contrario.
     * @param $numero Número que comprobamos si es capicua
     * @return true si es capicua y false en caso contrario
     */
    function esCapicua($numero)
    {
        // Manda el número para darle la vuelta
        $invertido = voltea($numero);
        // Compara el número original con el invertido y devuelve el resultado
        $respuesta = $numero == $invertido;

        return $respuesta;
    }

    /**
     * Devuelve el número invertido de un número.
     * @param $numero Número que queremos invertir
     * @return Número invertido
     */
    function voltea($num)
    {
        $invertido = 0;
        while ($num > 0) {
            $digito = $num % 10;
            $invertido = $invertido * 10 + $digito;
            $num = intval($num / 10);
        }
        return $invertido;
    }

    /**
     * Devuelve verdadero si el número que se pasa como parámetro es primo y falso en caso contrario.
     * @param $numero Número que comprobamos si es primo
     * @return true si es primo y false en caso contrario
     */
    function esPrimo($numero)
    {
        if ($numero <= 1) return false;
        for ($i = 2; $i * $i <= $numero; $i++) {
            if ($numero % $i == 0) return false;
        }
        return true;
    }

    /**
     * Devuelve el menor primo que es mayor al número que se pasa como parámetro
     * @return Int $numero es el menor primo siguiente
     */
    function siguientePrimo($numero)
    {
        while (!esPrimo($numero)) {
            $numero++;
        }
        return $numero;
    }

    /**
     * Dada una base y un exponente devuelve la potencia
     * @param $numero Número al que calculamos la potencia
     * @return Int $factorial Resultado del factorial
     */
    function potencia($base, $exponente)
    {
        $resultado = 1;
        for ($i = 0; $i < $exponente; $i++) {
            $resultado *= $base;
        }
        return $resultado;
    }

    /**
     * Cuenta el número de dígitos de un número entero.
     * 
     * @param int $num El número del que se quiere contar los dígitos.
     * @return int El número de dígitos.
     */
    function digitos($num)
    {
        $contador = 0;
        if ($num == 0) return 1; // Caso especial para 0
        while ($num != 0) {
            $num = intval($num / 10);
            $contador++;
        }
        return $contador;
    }

    /**
     * Devuelve el dígito en la posición n de un número.
     * 
     * @param int $num El número del que se extrae el dígito.
     * @param int $n La posición del dígito (comenzando desde 0).
     * @return int El dígito en la posición dada o -1 si no es válida.
     */
    function digitoN($num, $n)
    {
        $longitud = digitos($num);
        if ($n >= $longitud) return -1;

        for ($i = 0; $i < $longitud - $n - 1; $i++) {
            $num = intval($num / 10);
        }

        return $num % 10;
    }

    /**
     * Da la posición de la primera ocurrencia de un dígito en un número.
     * 
     * @param int $num El número donde se busca el dígito.
     * @param int $digito El dígito a buscar.
     * @return int La posición del dígito o -1 si no se encuentra.
     */
    function posicionDeDigito($num, $digito)
    {
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

    /**
     * Le quita n dígitos por detrás a un número.
     * 
     * @param int $num El número del que se quitarán los dígitos.
     * @param int $n El número de dígitos a quitar.
     * @return int El número resultante después de quitar los dígitos.
     */
    function quitaPorDetras($num, $n)
    {
        for ($i = 0; $i < $n; $i++) {
            $num = (int)($num / 10);
        }
        return $num;
    }

    /**
     * Le quita n dígitos por delante a un número hasta tener el numero de digitos indicados.
     * 
     * @param int $numero El número del que se quitarán los dígitos.
     * @param int $n El número de dígitos a quitar.
     * @return int El número resultante después de quitar los dígitos.
     */
    function quitaPorDelante($numero, $n)
    {

        // Obtener el número de dígitos del número
        $numDigitos = digitos($numero);

        // Si n es mayor o igual al número de dígitos, devolver 0
        if ($n >= $numDigitos) {
            return 0;
        }

        // Dividir el número entre 10 elevado a (numDigitos - n)
        $divisor = potencia(10, $numDigitos - $n);

        return $numero % $divisor;
    }

    /**
     * Añade un dígito por detrás.
     * 
     * @param int $num El número original.
     * @param int $digito El dígito que se añadirá al final.
     * @return int El número resultante después de añadir el dígito.
     */
    function pegaPorDetras($num, $digito)
    {
        return $num * 10 + $digito;
    }

    /**
     * Añade un dígito por delante.
     * 
     * @param int $num El número original.
     * @param int $digito El dígito que se añadirá al principio.
     * @return int El número resultante después de añadir el dígito.
     */
    function pegaPorDelante($num, $digito)
    {
        $factor = potencia(10, digitos($num));
        return $digito * $factor + $num;
    }

    /**
     * Devuelve un trozo del número entre las posiciones dadas.
     * 
     * @param int $num El número del que se extrae el trozo.
     * @param int $inicio La posición inicial del trozo.
     * @param int $fin La posición final del trozo.
     * @return int El trozo del número comprendido entre las posiciones dadas.
     */
    function trozoDeNumero($num, $inicio, $fin)
    {
        $longitud = digitos($num);
        $num = quitaPorDelante($num, $inicio);
        $trozo = quitaPorDetras($num, $longitud - $fin - 1);
        return $trozo;
    }

    /**
     * Pega dos números para formar uno.
     * 
     * @param int $num1 El primer número.
     * @param int $num2 El segundo número.
     * @return int El número resultante de pegar ambos números.
     */
    function juntaNumeros($num1, $num2)
    {
        $factor = potencia(10, digitos($num2));
        return $num1 * $factor + $num2;
    }
















    ?>