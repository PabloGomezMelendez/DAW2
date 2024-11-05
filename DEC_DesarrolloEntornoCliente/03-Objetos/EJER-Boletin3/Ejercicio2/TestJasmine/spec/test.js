/*Test Filtro de numeros primos*/
describe("Test Area Piramide", function () {

    //Creamos un array con los datos de entrada y salida esperados
    let datos = [
        { entrada: [6, 11, 18, 43, 8, 5, 45, 53, 9, 7, 24, 23], salida: [23, 43, 53] },
        { entrada: [6, 5, 24, 47, 8, 11, 18, 41, 9, 2, 35, 19], salida: [19, 41, 47] },
        { entrada: [4, 5, 45, 47, 6, 7, 27, 43, 10, 11, 35, 23], salida: [23, 43, 47] },
        { entrada: [9, 11, 20, 23, 6, 3, 24, 17, 8, 5, 14, 47], salida: [17, 23, 47] },
        { entrada: [9, 2, 45, 29, 8, 7, 18, 19, 6, 5, 12, 13], salida: [13, 19, 29] }
    ];

    //Creamos un funcion para mostrar los datos de entrada y salida
    function filtroPrimos(entrada,salida) {
        it("Los numeros de entrada son: " + entrada + " los numeros de salida son: " + salida, function(){
            expect(filtrarPrimosMayoresOnce(entrada)).toEqual(salida);
        })
        
    }

    //Creo un for para recorrer el array y pasar el test con cada numero de entrada y salida
    for (let i = 0; i < datos.length; i++) {
        filtroPrimos(datos[i]["entrada"], datos[i]["salida"]);
    }


});
