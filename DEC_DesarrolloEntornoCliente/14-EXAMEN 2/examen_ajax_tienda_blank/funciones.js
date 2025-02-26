// @AUTHOR 
// Escribe aquí tu código

addEventListener('load', inicializarEventos, false);


function inicializarEventos() {
    getDataFromApiXML();
    var button = document.getElementsByClassName('btn');
    for (let i = 0; i < button.length; i++) {
        button[i].addEventListener('click', btnAccion, false);
    }
    getMonitoresApiJSON();


}

// CONSULTA A LA API XML
let conexionXML;
function getDataFromApiXML() {
    conexionXML = new XMLHttpRequest();
    conexionXML.open('GET', 'api/cargar_categorias_xml.php', true);
    conexionXML.timeout = 3000; // Tiempo máximo de espera del API 3sg
    conexionXML.addEventListener('readystatechange', procesarDatosXML); // Añadimos el callback
    conexionXML.addEventListener('timeout', tiempoVencido('XML')); // El evento ontimeout se dispara cuando se ha superado el tiempo de espera
    conexionXML.send();
}

// CONSULTA A LA API Json
let conexionJSON;
function getMonitoresApiJSON(id_categoria) {
    conexionJSON = new XMLHttpRequest();
    let url = 'http://localhost//DEC_PABLO_GOMEZ_MELENDEZ/examen_ajax_tienda_blank/api/cargar_productos_json.php';
    if (!id_categoria == '') {
        url += '?id_categoria=' + id_categoria;
    }

    conexionJSON.open('GET', url, true);
    conexionJSON.timeout = 3000; // Tiempo máximo de espera del API 3sg
    conexionJSON.addEventListener('readystatechange', procesarDatosJSON);  // Añadimos el callback
    conexionJSON.addEventListener('timeout', tiempoVencido('JSON')); // El evento ontimeout se dispara cuando se ha superado el tiempo de espera
    conexionJSON.send();
}

function procesarDatosXML() {
    if (conexionXML.readyState == 4) {
        if (conexionXML.status == 200) {
            let resultados = document.getElementById("inputCategorias");
            try {
                let xmlDoc = conexionXML.responseXML; // En la propiedad responseXML se almacena el XML (tiene una estructura similar al DOM)
                let salida = '';

                // Obtener todos los elementos <categoria> dentro del XML
                let categoria = xmlDoc.getElementsByTagName("categoria");

                for (let f = 0; f < categoria.length; f++) {
                    // Acceder a los datos de cada elemento <categoria>
                    let id = categoria[f].getElementsByTagName("id")[0].textContent;
                    let nombre = categoria[f].getElementsByTagName("nombre")[0].textContent;

                    salida += '<div class="col"><button class="btn btn-info" id="' + id + '" ">' + nombre + '</button></div>';
                }
                resultados.innerHTML = salida;
            } catch (ex) {
                document.getElementById("inputCategorias").innerHTML = "Error al cargar extraer del XML: " + ex.message;
            }

        } else {
            // Se ha recibido un código status distinto de 200
            document.getElementById("inputCategorias").innerHTML = "Error al cargar los datos";
        }
    } else {
        document.getElementById("inputCategorias").innerHTML = "Cargando...";
    }
}

function tiempoVencido(type) {
    if (type == 'XML') {
        document.getElementById("inputProductos").innerHTML = "Tiempo de espera vencido";
    }
    if (type == 'JSON') {
        document.getElementById("inputProductos").innerHTML = "Tiempo de espera vencido";
    }
}

function procesarDatosJSON() {
    if (conexionJSON.readyState == 4) {
        if (conexionJSON.status == 200) {
            let resultados = document.getElementById("inputProductos");
            try {
                let salida = '<div class="card col m-2" style="width: 18rem;">';
                // Con JSON.parse se convierte el texto JSON en un objeto JavaScript
                let datos = JSON.parse(conexionJSON.responseText); // Los datos JSON se recuperan al igual que el texto plano

                for (let f = 0; f < datos.length; f++) {
                    salida += '<img src="images/' + datos[f].imagen + '" class="card-img-top" alt="">';
                    salida += '<div class="card-body">';

                    salida += '<h3 class="card-title">' + datos[f].nombre + '</h3>';
                    salida += '<h4 class="card-text">' + datos[f].precio + '</h4>';
                    salida += '<a onclick="cargarDetalles(' + datos[f].id + ')" class="btn btn-primary">Detalles</a>';

                    salida += '</div></div>';
                }
                resultados.innerHTML = salida;
            } catch (ex) {
                document.getElementById("inputProductos").innerHTML = "Error al cargar parsear el JSON: " + ex.message;
            }

        } else {
            // Se ha recibido un código status distinto de 200
            document.getElementById("inputProductos").innerHTML = "Error al cargar los datos";
        }
    } else {
        document.getElementById("inputProductos").innerHTML = "Cargando...";
    }


}



// EVENTOS DE BOTONES
function btnAccion(e) {
    // alert("Hola");
    e.preventDefault();
    var url = e.target.getAttribute('href');
    console.log(e.target.getAttribute('id'));
}
