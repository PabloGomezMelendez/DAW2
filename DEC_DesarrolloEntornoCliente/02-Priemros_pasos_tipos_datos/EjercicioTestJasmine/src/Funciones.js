//@Author @PabloGomezMelendez

// 1-Función comprobar si un número es par
/**
 * Comprobar si es par 
 * @param {num} numero
 * @returns true si es par y false si no lo es
 */
function comprobarEsPar(num) {
    return num % 2 === 0;
}

// 2-Función calificación con nota entera
/**
 * 
 * @param {nota} nota 
 * @returns string: texto correcpondiente a la nota
 */
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
/**
 * 
 * @param {nota} nota 
 * @returns string: texto correcpondiente a la nota
 */
function verCalificacionDecimal(nota) {
    switch (true) {
        case nota >= 0  && nota < 5:
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


//! DESARROLLO DE TESTING
function test_ejer1() {
    console.log(comprobarEsPar(2)); //Debería devolver true
    console.log(comprobarEsPar(3)); //Debería devolver false

    console.log(comprobarEsPar(2.2));
}

function test_ejer2() {

    test_ejer2_fail(); //Debería devolver "VALOR INCORRECTO"

    test_ejer2_pass(); //Debería devolver "CALIFICACIONES"

    function test_ejer2_pass() {
        console.log(verCalificacion(0)); //Debería devolver "INSUFICIENTE"
        console.log(verCalificacion(4)); //Debería devolver "INSUFICIENTE"
        console.log(verCalificacion(5)); //Debería devolver "SUFICIENTE"
        console.log(verCalificacion(6)); //Debería devolver "BIEN"
        console.log(verCalificacion(7)); //Debería devolver "NOTABLE"
        console.log(verCalificacion(8)); //Debería devolver "NOTABLE"
        console.log(verCalificacion(9)); //Debería devolver "SOBRESALIENTE"
        console.log(verCalificacion(10));//Debería devolver "SOBRESALIENTE"
    }

    function test_ejer2_fail() {
        console.log(verCalificacion(-1)); //Debería devolver "VALOR INCORRECTO"
        console.log(verCalificacion(11)); //Debería devolver "VALOR INCORRECTO"
        console.log(verCalificacion(10.00001)); //Debería devolver "VALOR INCORRECTO"
        console.log(verCalificacion(4.5)); //Debería devolver "VALOR INCORRECTO"
    }
}

function test_ejer3() {
    test_ejer3_fail();
    test_ejer3_pass();

    function test_ejer3_pass() {
        for (let i = 0; i < 10; i = i + 0.1) {
            console.log(verCalificacionDecimal(i));
        }
    }

    function test_ejer3_fail() {
        console.log(verCalificacion(-0.001)); //Debería devolver "VALOR INCORRECTO"
        console.log(verCalificacion(11)); //Debería devolver "VALOR INCORRECTO"
        console.log(verCalificacion(10.00001)); //Debería devolver "VALOR INCORRECTO"

    }
}

function test_ejer4() {
    console.log(parametrosCircunferencia(5).perimetro); //Debería devolver 31.41592653589793
    console.log(parametrosCircunferencia(5).area); //Debería devolver 78.53981633974483

    console.log(parametrosCircunferencia(-5)); //Debería devolver "ERROR"
    console.log(parametrosCircunferencia(0)); //Debería devolver "ERROR"
    console.log(parametrosCircunferencia(5.5)); //Debería devolver "ERROR"
}

function test_ejer5() {
    console.log(esBisiesto(2020)); //Debería devolver true
    console.log(esBisiesto(2019)); //Debería devolver false

    console.log(esBisiesto(-2020)); //Debería devolver "ERROR"
    console.log(esBisiesto(2020.5)); //Debería devolver "ERROR"
}

function test_ejer6() {
    console.log(hexa2decimal("FA8")); //Debería devolver 10
    console.log(hexa2decimal("A")); //Debería devolver 10
    console.log(hexa2decimal("B")); //Debería devolver 11
    console.log(hexa2decimal("C")); //Debería devolver 12
    console.log(hexa2decimal("D")); //Debería devolver 13
    console.log(hexa2decimal("E")); //Debería devolver 14
    console.log(hexa2decimal("F")); //Debería devolver 15

    console.log(hexa2decimal("G")); //Debería devolver "ERROR"
    console.log(hexa2decimal("-18")); //Debería devolver "ERROR"
}