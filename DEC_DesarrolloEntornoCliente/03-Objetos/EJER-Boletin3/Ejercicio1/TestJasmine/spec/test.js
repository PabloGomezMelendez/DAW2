/*Test Area Piramide*/
describe("Test Area Piramide", function () {

    //Creamos dos array donde almacenamos los lados y las altura de la piramide
    let lado = [6.8, 7.1, 7.4];
    let altura = [9, 9.4, 9.8];

    //Cremos un array con los resultados que se espera del calculo del area
    let resultado = [177.083, 193.092, 209.793];

    //Creamos un funcion para mostrar el lado, altura y resultado de cada piramide
    function areaTest(lado, altura, resultado) {
        it("El lado, " + lado + " y la altura, " + altura + " es de: " + resultado, function () {
            expect(resultado).toBeCloseTo(areaPiramide(lado, altura), 3);
        })
    }

    //Creo un for para recorrer el array y pasar el test con cada area, altura y resultado
    for (let i = 0; i < lado.length; i++) {
        areaTest(lado[i], altura[i], resultado[i]);
    }


});
