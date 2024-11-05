/*1. Test Area Piramide.*/

function areaPiramide(lado,altura) {
    return redondearDecimales(lado*(lado+Math.sqrt(4*Math.pow(altura,2)+Math.pow(lado,2))),5);
}
function redondearDecimales(numero,decimales){
    return  Math.round(numero * Math.pow(10,decimales)) / Math.pow(10,decimales);
}