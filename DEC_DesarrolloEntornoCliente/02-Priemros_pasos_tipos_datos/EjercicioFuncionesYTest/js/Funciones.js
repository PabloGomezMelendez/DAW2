//@Author @PabloGomezMelendez

// 1-Función comprobar si un número es par
function comprobarEsPar(num) {
    return num % 2 === 0;
}

// 2-Función calificación con nota entera
function verCalificacion(nota) {
    switch (nota) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            return "INSUFICIENTE";
            break;

        case 5:
            return "SUFICIENTE";
            break;

        case 6:
            return "BIEN";
            break;

        case 7:
        case 8:
            return "NOTABLE";
            break;

        case 9:
        case 10:
            return "SOBRESALIENTE";
            break;

        default:
            return "VALOR INCORRECTO";
            break;
    }
}

// 3-Función calificación con nota decimal
function verCalificacionDecimal(nota) {
    switch (true) {
        case nota < 5:
            return "INSUFICIENTE";
            break;

        case nota >= 5 && nota < 6:
            return "SUFICIENTE";
            break;

        case nota >= 6 && nota < 7:
            return "BIEN";
            break;

        case nota >= 7 && nota < 9:
            return "NOTABLE";
            break;

        case nota >= 9 && nota < 10:
            return "SOBRESALIENTE";
            break;

        default:
            return "VALOR INCORRECTO";
            break;
    }
}

// 4-Calcular perímetro y área de una circunferencia
/**
 * calcula el area y pelo de una circunferencia
 * @param {radio} radio 
 * @returns Object circunferenica, aributos: radio, perímetro y area
 */
function parametrosCircunferencia(radio) {
    return {
        radio: radio,
        perimetro: 2 * Math.PI * radio,
        area: Math.PI * Math.pow(radio, 2)
    }
}

// 5-Función comprobar si un año es bisiesto
/** 
 * Comprueba si un año es bisiesto
 * @param {anio} año a comprobar 
 * @returns true es bisiesto, false no es bisiesto
 */
function esBisiesto(anio) {
    return (anio % 4 === 0 && anio % 100 !== 0) || anio % 400 === 0;
}

// 6-Conversor de hexadecimal a decimal
/**
 * digito a hexadecimal a decimal
 *
 * @param {hexadecimal} digito hexadecimal
 * @returns digito decimal
 */
function hexa2decimal(hexadecimal) {

    let numeroHexadecimal = Array.from(hexadecimal);
    let decimal = 0;

    numeroHexadecimal = numeroHexadecimal.reverse();

    for (let i = 0; i < numeroHexadecimal.length; i++) {
        let digitoDecimal = digitoHexa2Dec(numeroHexadecimal[i]);
        decimal += digitoDecimal * Math.pow(16, i);
    }

    return decimal;
}
/**
 * digito a hexadecimal a decimal
 *
 * @param {digitoHex} digito hexadecimal
 * @returns digito decimal
 */
function digitoHexa2Dec(digitoHex) {
    let aux = digitoHex.toUpperCase();
    switch (aux) {
        case "0":
            return 0
            break;
        case "1":
            return 1
            break;
        case "2":
            return 2
            break;
        case "3":
            return 3
            break;
        case "4":
            return 4
            break;
        case "5":
            return 5
            break;
        case "6":
            return 6
            break;
        case "7":
            return 7
            break;
        case "8":
            return 8
            break;
        case "9":
            return 9
            break;
        case "A":
            return 10
            break;
        case "B":
            return 11
            break;
        case "C":
            return 12
            break;
        case "D":
            return 13
            break;
        case "E":
            return 14
            break;
        case "F":
            return 15
            break;

        default:
            break;
    }
}
