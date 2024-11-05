/*Test Clase Reserva*/
describe("Test Clase Reserva", function () {
    //Creamos la reserva, con los costes
    let reserva1;
    let costes = { dia: 24, sabado: 36, domingo: 43 };

    //Establecemos un beforeEach para ejecutar todo lo que esta dentro antes de que se ejecute el test
    beforeEach(function () {
        reserva1 = new Reserva("García;Ortiz;Juan Antonio", "44958625A", "27/02/2020", "03/03/2020");
    });

    //Comprobamos y mostramos el codigo cliente
    it("El codigo cliente es: JGARCÍA625", function () {
        expect(reserva1.codigoCliente).toEqual("JGARCÍA625");
    });

    //Comprobamos el dia de estancias y lo mostramos
    it("El numero de dias es: 5", function () {
        expect(reserva1.numeroDiasEstancia).toEqual(5);
    });


    //Comprobamos el precio total de las habitaciones
    let costeEsperado = 3 * costes.dia + 1 * costes.sabado + 1 * costes.domingo;
    it("El coste de la estancia es de: " + costeEsperado + " Euros", function () {
        expect(reserva1.estancia()).toEqual(costeEsperado);
    });

    //Comprobamos las fechas de entrada y salida
    it("Las fechas de entrada y de salida son correctas", function () {
        let numDiasAntes, numDiasDespues;
        numeroDiasAntes = reserva1.numeroDiasEstancia;
        reserva1.estancia();
        numDiasDespues = reserva1.numeroDiasEstancia;
        expect(numeroDiasAntes).toEqual(numDiasDespues);
    });

    //Comprbamos que la fecha de salida sea posterior a la de entrada
    it("Fecha de salida debe ser posterior a la de entrada", function () {
        reserva1.modificarFechas(new Date(2020, 1, 28), new Date(2020, 2, 1));
        expect(reserva1.numeroDiasEstancia).toEqual(2);
    });

    //Comprobamos que la fecha de salida es anterior a la de entrada
    it("Es correcto, la fecha de salida es anterior a la entrada", function () {
        expect(function () { reserva1.modificarFechas(new Date(2020, 2, 1), new Date(2020, 1, 28)); }).toThrowError("Fecha de salida debe ser posterior a la de entrada");
    });

    //Comprobamos que la fecha de entrada y salida pasan menos de un dia.
    it("Es correcto, entre la fecha de entrada y salida transcurre menos de un día", function () {
        expect(function () { reserva1.modificarFechas(new Date(2020, 1, 28), new Date(2020, 1, 28, 10, 0, 0)); }).toThrowError("Estancia mínima debe ser de un día");
    });

});
