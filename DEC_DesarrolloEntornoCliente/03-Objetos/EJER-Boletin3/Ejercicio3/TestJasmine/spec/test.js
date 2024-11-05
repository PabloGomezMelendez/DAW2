/*Test numero de días entre de dos fechas*/
describe("Test numero de días entre de dos fechas", function () {

    //Creamos tres array donde se guardara las fechas y los dias transcurridos
    let fechasDesde = ["9/11/2021", "28/02/2020", "28/02/2021", "17/04/1973"];
    let fechasHasta = ["9/11/2021", "1/3/2020", "1/3/2021", "14/11/1979"];
    let dias = [0, 2, 1, 2402];

    //Creo la funcion que recorre las fechas y las va comprobando
    function testDias(fecha1, fecha2, diasPasados) {
        it("Para las fechas, " + fecha2 + " y " + fecha1 + " los dias transcurridos son: " + diasPasados + " dias", function () {
            expect(numeroDiasFechas(fecha1, fecha2)).toEqual(diasPasados);
        })
    }

    //Creo un for donde se comprueban los 3 arrays para que haga el test
    for (let i = 0; i < fechasDesde.length; i++) {
        testDias(fechasDesde[i], fechasHasta[i], dias[i]);
    }
});
