/*4. Test Clase Reserva.*/
class Reserva {
    //Creamos un constructor
    constructor(cliente, dni, fechaEnt, fechaSal) {
        this._cliente = cliente;
        this._dni = dni;
        this._fechaEnt = fechaEnt;
        this._fechaSal = fechaSal;


        if (!cliente.includes(";")) { //Comprobamos que el nombre este separado por punto y coma
            throw new Error("El nombre debe ir separado por punto y coma");
        }
        else {
            this.cliente = cliente;
        }

        if (!compruebaDNI(dni)) { //Se comprueba que el dni es valido
            throw new Error("Formato de DNI no válido");
        }
        else {
            this.dni = dni;
        }

        //Validamos el formato de la fecha
        if (!validaFecha(fechaEnt) || !validaFecha(fechaSal)) {
            throw new Error("Formato de fecha no válido");
        }
        else if (fecha(fechaEnt) > fecha(fechaSal)) { //Se comprueba si la fecha de entrada es antes que la de salida
            throw new Error("Fecha de salida debe ser posterior a la de entrada");
        }
        else if (FechaString(fechaEnt, fechaSal) < 1) { //Si es inferior a un dia
            throw new Error("Estancia mínima debe ser de un día");
        }
        else {
            this.fechaEnt = fecha(fechaEnt);
            this.fechaSal = fecha(fechaSal);
        }
    }

    //Creamos los Métodos
    modificarFechas(fecha1, fecha2) {
        //Establecemos un if para mostar los errores si las fechas no son correctas
        if (fecha1 > fecha2) {
            throw new Error("Fecha de salida debe ser posterior a la de entrada");
        }
        else if (fechasDate(fecha1, fecha2) < 1) {
            throw new Error("Estancia mínima debe ser de un día");
        }
        else {
            this.fecha1 = fecha1;
            this.fecha2 = fecha2;
        }
    }

    //Creamos el precio de la estancia
    estancia() {
        let coste = 0;
        let fechaEntrada = this.fechaEnt;
        let fechaSalida = this.fechaSal;

        //Establecemos un for para comprobar los días de entrada y salida con su precio
        for (let i = fechaEntrada.getTime(); i < fechaSalida.getTime(); i = i.setDate(i.getDate() + 1)) {
            i = new Date(i);
            if (i.getDay() >= 1 && i.getDay() <= 5) { //De lunes a viernes
                coste += 24;
            }
            else if (i.getDay() == 6) {//Sabado 
                coste += 36;
            }
            else {
                coste += 43;//Domingo
            }
        }
        return coste;

    }

    //Establecemos los Getters
    get codigoCliente() {
        let codigoC = "";
        let nombre = this.cliente.split(";"); //El nombre y apellidos del cliente se separa con un ; en un array
        let digitos = this.dni.substring(5, this.dni.length - 1); //saco los 3 últimos dígitos del dni sin contar la letra

        codigoC = nombre[2].substring(0, 1) + "" + nombre[0].toUpperCase() + "" + digitos;

        return codigoC;
    }

    get numeroDiasEstancia() {//Calculamos los dias de la estancia
        return (this.fechaSal.getTime() - this.fechaEnt.getTime()) / (1000 * 60 * 60 * 24);
    }

    toString() {//Devolvemos los datos del cliente
        return `Nombre: ${this._cliente}\nDNI: ${this._dni}\nFecha entrada: ${this._fechaEnt}\nFecha salida: ${this._fechaSal}`;
    }
}

//Establecemos la reserva del cliente con sus datos
let reserva1 = new Reserva("Franco;Salvatierra;Luis Fernando", "44958629E", "27/10/2021", "01/11/2021");

reserva1.modificarFechas(new Date(2021, 10, 2), new Date(2021, 10, 7))

//Creamoa la funcion para comprobar el formato del DNI
function compruebaDNI(dni) {
    if (dni.length != 9) {
        return false;
    }
    else {
        //Comparamos si en el DNI el caracter es el deseado y no es otro diferente
        for (let i = 0; i < dni.length; i++) {
            if (i == dni.length - 1) { //Establecemos el if para indicar el ultimo caracter del DNI
                if (dni.charCodeAt(i) < 65 || dni.charCodeAt(i) > 122) { //Comprobamos si la letra es minúscula o mayúscula
                    return false;
                }
            }

            else if (dni.charCodeAt(i) < 48 || dni.charCodeAt(i) > 57) { //Comprobamos que el ultimo caracter del DNI no sea un numero
                return false;
            }
        }
        return true;
    }
}
//Creamos la funcion para comprobar el formato de fecha
function validaFecha(fecha) {
    let arrayFech = fecha.split("/");
    if (arrayFech[0] < 0 || arrayFech[0] > 31) {
        return false;
    }
    if (arrayFech[1] < 0 || arrayFech[1] > 12) {
        return false;
    }
    if (arrayFech[0] < 0) {
        return false;
    }
    if (arrayFech[1] == "2" && arrayFech[0] > 29) {
        return false;
    }
    return true;
}

//Con esta funcion establecemos un formato fecha para la clase Date
function fecha(fecha) {
    //Creamos dos arrays para guardar el día, mes y año de las fechas
    let fechaArr = fecha.split("/");

    //Se cambia el array al formato YYYY/MM/DD
    fechaArr = fechaArr.reverse();

    //Se cambia el formato YYYY/MM/DD a las fechas válido para la clase Date
    fecha = fechaArr.join("/");
    let fechaDate = new Date(fecha);
    return fechaDate;
}

//Función que devuelve el número de días que hay entre 2 fechas tipo String
function FechaString(fechaDesde, fechaHasta) {
    //Creamos dos arrays para guardar el día, mes y año de las fechas
    let fechaArray1 = fechaDesde.split("/");
    let fechaArray2 = fechaHasta.split("/");

    //Se cambia el array al formato YYYY/MM/DD
    fechaArray1 = fechaArray1.reverse();
    fechaArray2 = fechaArray2.reverse();

    //Se cambia el formato YYYY/MM/DD a las fechas válido para la clase Date
    fechaDesde = fechaArray1.join("/");
    fechaHasta = fechaArray2.join("/");

    //Creamos las 2 fecha tipo Date
    let fDesde = new Date(fechaDesde);
    let fHasta = new Date(fechaHasta);

    let diferenciaMilisec = fHasta.getTime() - fDesde.getTime();

    let dias = diferenciaMilisec / (1000 * 60 * 60 * 24);

    return dias;
}

 //Con esta función calculamos el número de días entre las 2 fechas
 function fechasDate(fechaDesde, fechaHasta) {
    return (fechaHasta.getTime() - fechaDesde.getTime()) / (1000 * 60 * 60 * 24);
}