<?php

/**
 * Devuelve una matriz con los valores de la tarjeta de coordenadas del perfil.
 * 
 * @param string $perfil El perfil de usuario ('admin' o 'estandar').
 * @return array La matriz de coordenadas de la tarjeta del perfil.
 */
function dameTarjeta($perfil) {
    if ($perfil === 'admin') {
        return [
            [12, 35, 54, 23, 61],
            [44, 53, 22, 13, 43],
            [31, 64, 41, 15, 27],
            [54, 19, 38, 47, 10],
            [11, 24, 36, 57, 48],
        ];
    } elseif ($perfil === 'estandar') {
        return [
            [15, 28, 37, 49, 10],
            [62, 73, 19, 14, 25],
            [33, 12, 47, 52, 18],
            [41, 16, 20, 30, 59],
            [53, 32, 44, 67, 21],
        ];
    } else {
        return [];
    }
}

/**
 * Comprueba si el valor dado corresponde con la coordenada de la tarjeta.
 * 
 * @param array $tarjeta La matriz de coordenadas de la tarjeta.
 * @param int $fila La fila de la coordenada.
 * @param string $columna La columna de la coordenada ('A' - 'E').
 * @param int $valor El valor que debe comprobarse.
 * @return bool Verdadero si el valor es correcto, falso en caso contrario.
 */
function compruebaClave($tarjeta, $fila, $columna, $valor) {
    // Convertimos la columna a índice numérico
    $columnaIndice = ord(strtoupper($columna)) - ord('A');

    // Convertimos la fila a índice
    $filaIndice = $fila - 1;

    // Validar el valor de la tarjeta en la coordenada
    return $tarjeta[$filaIndice][$columnaIndice] == $valor;
}

/**
 * Imprime la tarjeta en formato HTML.
 * 
 * @param array $tarjeta La matriz de coordenadas de la tarjeta.
 * @return string El HTML de la tarjeta en una tabla.
 */
function imprimeTarjeta($tarjeta) {
    $html = '<table border="1" cellpadding="5"><tr><th></th><th>A</th><th>B</th><th>C</th><th>D</th><th>E</th></tr>';

    foreach ($tarjeta as $fila => $filaValores) {
        $html .= "<tr><th>" . ($fila + 1) . "</th>";
        foreach ($filaValores as $valor) {
            $html .= "<td>{$valor}</td>";
        }
        $html .= "</tr>";
    }

    $html .= '</table>';
    return $html;
}

?>
