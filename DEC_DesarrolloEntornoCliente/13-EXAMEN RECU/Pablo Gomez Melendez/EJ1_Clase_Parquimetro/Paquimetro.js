class Parquimetro {
    //Constructor
    constructor(usuario, fechaEstacionamiento, horaLlegada, horaSalida) {
        this._usuario = usuario;
        this._fechaEstacionamiento = fechaEstacionamiento;
        this._horaLlegada = horaLlegada;
        this._horaSalida = horaSalida;
    }

    toString() {
        return 'usuario: ' + this._usuario + '\nfecha estacionamiento: ' + this._fechaEstacionamiento +
            '\nhora de llegada: ' + this._horaLlegada + '\nhora de salida: ' + this._horaSalida;
    }

    //* Extraer el nombre de la cadena de usuario
    //Return String
    get nombre() {
        let nombre;
        // TODO: codigo para la extarcion del nombre de la cadena
        nombre = this._usuario.trim();
        nombre = nombre.slice(0, -9);
        return nombre.trim();
    }

    //* Extraer la matricula de la cadena de usuario
    //Return String
    get matricula() {
        let matricula;
        // TODO: codigo para la extarcion de la matricula de la cadena
        matricula = this._usuario.trim();
        matricula = matricula.slice(-9);
        return matricula.trim();
    }

    //* Método: minutosEstacionamiento -->Return Number, se calculan los minutos que el vehiculo ha estado estacionado restando la hora de salida y  la hora de llegada
    minutosEstacionamiento() {
        let llegada = this._horaLlegada;
        llegada = llegada.split(":");
        let salida = this._horaSalida;
        salida = salida.split(":");
        //Calculamos los minutos transcurridos entre las dos horas
        let minutosEstacionado = (salida[0] - llegada[0]) * 60 + (salida[1] - llegada[1]);

        return minutosEstacionado;

    }

    //* Método: esFinde -->Return Boolean, Se encarga de ver si el dia estacionado es finde semana SABADO o DOMINGO
    //Si es finde TRUE, Si no es finde FALSE
    esFinde() {
        let esFinde = false;
        let fecha = this._fechaEstacionamiento.split("/");
        let fecha_date = fecha[2] + "-" + fecha[1] + "-" + fecha[0];
        fecha_date = new Date(fecha_date);
        if (fecha_date.getDay() == 0 || fecha_date.getDay() == 6) {
            esFinde = true;
        }

        return esFinde;
    }

    //* Método: costeEstacionamiento -->Return Number, Se encarga de calcular el coste, en tren semana 0,03€ y en findes 0,02€ por minuto estacionado
    //Se redondea a 2 decimales
    costeEstacionamiento() {
        const COSTE_DIARIO = 0.03;
        const COSTE_FINDE = 0.02;
        let coste = 0;
        if (this.esFinde()) {
            coste = this.minutosEstacionamiento() * COSTE_FINDE;
        } else {
            coste = this.minutosEstacionamiento() * COSTE_DIARIO;
        }
        return this.redondearDecimales(coste, 2);
    }
    // Funcion para redondear a un nuemro de decimales
    redondearDecimales(numero, decimales) {
        return Math.round(numero * Math.pow(10, decimales)) / Math.pow(10, decimales);
    }

}
function redondearDecimales(numero,decimales){

    return  Math.round(numero * Math.pow(10,decimales)) / Math.pow(10,decimales);

}

//*TEST CHECK:
const parquimetro = new Parquimetro("Podro Santos (8020LHK) ", "24/05/2022", "19:30", "21:40");
const parquimetro1 = new Parquimetro("Pablo Gómez Melendez (8020LHK) ", "15/02/2025", "18:30", "21:40");
console.log(parquimetro.toString());
console.log(parquimetro1.toString());
console.log('\n');


// TEST 1: NOMBRE Y MATRICULA
console.log(parquimetro.matricula);
console.log(parquimetro.nombre);

console.log(parquimetro1.matricula);
console.log(parquimetro1.nombre);

console.log('\n');

// TEST 2: MINUTOS_ESTACIONADOS
if (130 == parquimetro.minutosEstacionamiento()) {// 130 es el dato facilitado en la prueba
    console.log("CORRECTO: Se ha estacionado un total de " + parquimetro.minutosEstacionamiento());
} else {
    console.log("INCORRECTO: No se ha estacionado un total de " + parquimetro.minutosEstacionamiento());
}
// Formula con la que se calcula los minutos transcurrido entre dos horas:
// (HORA_SALIDA - HORA_LLEGADA)*60 + (MINUTOS_SALIDA - MINUTOS_LLEGADA)= MINUTOS_ENTRE_LLEGADA_Y_SALIDA
let test_minutos = (21 - 18) * 60 + (40 - 30);
if (test_minutos == parquimetro1.minutosEstacionamiento()) {
    console.log("CORRECTO: Se ha estacionado un total de " + parquimetro1.minutosEstacionamiento());
} else {
    console.log("INCORRECTO: No se ha estacionado un total de " + parquimetro1.minutosEstacionamiento());
}

console.log('\n');

// TEST 3: ES_FINDE
console.log(parquimetro.esFinde());// El 24/05/2022 es un dia entre semana
console.log(parquimetro1.esFinde());// El 15/02/2025 es un dia de finde semana

// TEST 4: COSTE_ESTACIONAMIENTO
let costeParquimetro = 130 * 0.03;           // Calculo del coste dia entre semana es: MINUTOS_ESTACIONADO * 0.03
let costeParquimetro1 = redondearDecimales(test_minutos * 0.02,2); // Calculo del coste dia finde semana es: MINUTOS_ESTACIONADO * 0.02
if (costeParquimetro == parquimetro.costeEstacionamiento()) {
    console.log("CORRECTO: coste del estacionamiento "+parquimetro.costeEstacionamiento()+"€");
} else {
    console.log("INCORRECTO: coste del estacionamiento "+parquimetro.costeEstacionamiento()+"€");
}

if (costeParquimetro1 == parquimetro1.costeEstacionamiento()) {
    console.log("CORRECTO: coste del estacionamiento "+parquimetro1.costeEstacionamiento()+"€");
} else {
    console.log("INCORRECTO: coste del estacionamiento "+parquimetro1.costeEstacionamiento()+"€");
}







