/*3. Test numero de días entre de dos fechas.*/

function numeroDiasFechas(fechaDesde, fechaHasta){
    //Creamos el array de cada fecha que almacena dichas fechas
    let fecha1 = fechaDesde.split("/");
    let fecha2 = fechaHasta.split("/");

    //Creamos el array donde damos formato a las fechas YYYY/MM/DD
    fecha1 = fecha1.reverse();
    fecha2 = fecha2.reverse();

    //Creamos el array donde se formatea el valor para que tenga formato YYYY/MM/DD valido para la clase Date
    fechaDesde = fecha1.join("/");
    fechaHasta = fecha2.join("/");

    //Creamos las fechas tipo Date
    let fechaD= new Date(fechaDesde);
    let fechaH= new Date(fechaHasta);

    let milisegundos = fechaH.getTime()-fechaD.getTime();
    
    let dias = milisegundos/(1000*60*60*24);

    return dias;
}