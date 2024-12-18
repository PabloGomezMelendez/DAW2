// @Autor @PabloGomezMelende
 class Cuenta {
    //Constructor
    constructor(titular, saldo) {
        this._titular = titular;
        this._saldo = saldo;
    }

    get saldo() {
        return this._saldo;
    }

    set saldo(saldo) {
        this._saldo = saldo;
    }

    get titular() {
        return this._titular;
    }

    set titular(titular) {
        this._titular = titular;
    }

    toString() {
        return 'Titular: ' + this._titular + ', Saldo: ' + this._saldo;
    }

    // Método para ingresar dinero
    ingresar(cantidad) {
        this.saldo += cantidad;
    }

    // Método para extraer dinero
    extraer(cantidad) {
        if (cantidad <= this.saldo) {
            this.saldo -= cantidad;
        } else {
            console.log("Saldo insuficiente");
        }
    }
    // Método para transferir dinero a otra cuenta
    transferir(cuenta, cantidad) {
        if (cantidad <= this.saldo) {
            this.saldo -= cantidad;
            cuenta.ingresar(cantidad);
        } else {
            console.log("Fondos insuficientes para transferir");
        }
    }

}

//Ejercicio 1
const cuenta1= new Cuenta("Javier", 3000);
const cuenta2= new Cuenta("Rocio", 5000);

cuenta1.transferir(cuenta2,500);

console.log(cuenta1.toString());
console.log(cuenta2.toString());