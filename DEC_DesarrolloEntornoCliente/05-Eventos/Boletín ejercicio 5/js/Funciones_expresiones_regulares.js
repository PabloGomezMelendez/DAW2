// Actividad 5c1
function validaCP(cp) {
    const regex = /^\s*\d{5}\s*$/;
    return regex.test(cp);
}

function extraeCPs(frase) {
    const regex = /\b\d{5}\b/g;
    return frase.match(regex) || [];
}

function sustituyeCPs(frase) {
    const regex = /\b\d{5}\b/g;
    return frase.replace(regex, "C.P.");
}

// Actividad 5c2
function terminaVocalAcentuada(palabra) {
    const regex = /[áéíóúÁÉÍÓÚ]$/;
    return regex.test(palabra);
}

// Actividad 5c3
function validaDNI(dni) {
    const regex = /^\d{8}-?[trwagmyfpdxbnjzsqvhlckeTRWAGMYFPDXBNJZSQVHLCKE]$/;
    return regex.test(dni);
}

// Actividad 5c4
function validaNumeroEntero(numero) {
    const regex = /^[+-]?\d+$/;
    return regex.test(numero);
}

// Actividad 5c5
function validaNumeroDecimal(numero) {
    const regex = /^[+-]?\d+(,\d+)?$/;
    return regex.test(numero);
}

// Actividad 5c6
function validaHora(hora) {
    const regex = /^(?:[01]\d|2[0-3]):[0-5]\d:[0-5]\d$/;
    return regex.test(hora);
}

// Actividad 5c7
function extraerPosicionesEmails(texto) {
    const regex = /\w+@([a-zA-Z_]+\.)+[a-zA-Z]{2,6}/g;
    const posiciones = [];
    let match;
    while ((match = regex.exec(texto)) !== null) {
        posiciones.push(match.index);
    }
    return posiciones;
}

// Actividad 5c8
function validaDireccionIP(ip) {
    const regex = /^(\d|[1-9]\d|1\d{2}|2[0-4]\d|25[0-5])(\.(\d|[1-9]\d|1\d{2}|2[0-4]\d|25[0-5])){3}$/;
    return regex.test(ip);
}

// Actividad 5c9
function validaNumerosSeparados(dato) {
    const regex = /^(\d)-\1-\1$|^(\d)\.\2\.\2$/;
    return regex.test(dato);
}

// Actividad 5c10
function extraeExpresionesMatematicas(texto) {
    const regex = /\{([^}]+)\}/g;
    const matches = [];
    let match;
    while ((match = regex.exec(texto)) !== null) {
        matches.push(`{${match[1]}}`);
    }
    return matches;
}
