// NO SE PUEDE CAMBIAR LA ESTRUCTURA DE LOS DATOS SUMINISTRADOS
let articulos = [
    { id: 1, nombre: "Monitor", caracteristicas: { precio: 151.23, descuento: 10 } },
    { id: 2, nombre: "Ratón", caracteristicas: { precio: 5.45, descuento: 5 } },
    { id: 3, nombre: "Cascos", caracteristicas: { precio: 15.59, descuento: 15 } },
    { id: 4, nombre: "Escáner", caracteristicas: { precio: 95.12, descuento: 20 } },
]


// Escribe aquí tu código
// @PabloGomezMelendez
const TABLAS = document.getElementsByTagName("tbody");       //Posicion de la tabla izquierda
const TABLA_IZ_BODY = TABLAS[0];                             //La tabla izquierda
const TABLA_DE_BODY = TABLAS[1];                             //La tabla derecha

//TODO: DENERACION DINAMICA DE LAS TABLAS IZQUIERDA CON TOODS LOS ELEMENTOS Y LOS BOTONES DE ACCION
function iniarTabla() {
    let contenidoInicial = '';
    for (let i = 0; i < articulos.length; ++i) {
        contenidoInicial += `<tr id="${articulos[i].id}">
            <td>${articulos[i].nombre}</td>
            <td>${articulos[i].caracteristicas.precio}</td>
            <td>
                <button type="button" id="btnIz" class="${articulos[i].id}" >\<</button>
                <button type="button" id="btnDe" class="${articulos[i].id}" >\></button>
                <button type="button" id="btnDto"class="${articulos[i].id}" >Dto.</button
            </td>
        </tr>`;
    }
    return contenidoInicial;
}

TABLA_IZ_BODY.insertAdjacentHTML("beforeend", iniarTabla()); //Iniciar tabla izquierda con todos los articulos

//TODO: ADD FUCIONALIDAD A LOS BOTONES DE LAS FLECHAS:
//* Si el elemento se encuantra la tabla izquierda:
//      Boton '>': debe mover el elemnto a la derecha y eliminar 
//      Boton '<': debe mostrar un alert indicando que ya esta a la izquierda
function izquierda(id) {


}

//* Si el elemento se encuantra la tabla derecha:
//      Boton '<': debe mover el elemnto a la izquierda y eliminar 
//      Boton '>': debe mostrar un alert indicando que ya esta a la izquierda
function derecha(id) {

    if (TABLA_DE_BODY.includes(id)) {
        alert("no se puede mover a la derecha");
    } else {
        moverDerecha(id);
    }


}
function moverDerecha(id) {
    let elemento = articulos.find(item => { item.id == id });
    TABLA_DE_BODY.insertAdjacentHTML("beforeend", iniarTabla()); //Iniciar tabla izquierda con todos los articulos
   TABLA_DE_BODY.getElementById(id).remove();
      
}

//TODO: ADD EVENTO AL BOTON DESCUENTO
function descuento(id) {
    articulos.forEach(element => {
        if (element.id == id) {
            alert(element.caracteristicas.descuento);
        }
    });

}
function eventAlertDescuento() {
    const botonDescuento = document.getElementById("btnDto");
    let id = botonDescuento.getAttribute("class");
    botonDescuento.addEventListener("click", descuento(id));
}
//TODO: ADD EVENTO AL hover a las filas de las tablas

function pintar(evt, color) {
    const col = evt.target;
    col.style.backgroundColor = color;
}
function eventColorFila() {
    const filas = document.querySelectorAll("tr");
    for (let fila of filas) {
        fila.addEventListener('mouseover', () => {
            pintar(event, '#ffff00');
        });
        fila.addEventListener('mouseout', () => {
            pintar(event, '#ffffff');
        });
    }

}


function inicar() {
    eventColorFila();

    eventAlertDescuento();

    eventDerecha();

    eventoIzquierda();


}

addEventListener('load', inicar)