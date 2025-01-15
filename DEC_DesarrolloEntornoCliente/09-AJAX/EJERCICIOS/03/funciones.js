addEventListener('load', inicializarEventos, false);

function inicializarEventos() {
    for (var f = 1; f <= 12; f++) {
        var ob = document.getElementById('enlace' + f);
        ob.addEventListener('click', presionEnlace, false);
    }
}

function presionEnlace(e) {
    e.preventDefault();
    var url = e.target.getAttribute('href');
    cargarHoroscopo(url);
}

var conexion1;
function cargarHoroscopo(url) {
    conexion1 = new XMLHttpRequest();
    conexion1.onreadystatechange = procesarEventos;
    const [href,aux] = url.split("?");
    conexion1.open("POST", href, true);
    conexion1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    conexion1.send(aux);
}

function procesarEventos() {
    var detalles = document.getElementById("detalles");
    if (conexion1.readyState == 4 && conexion1.status == 200) {
        detalles.innerHTML = conexion1.responseText;
    }
    else {
        detalles.innerHTML = 'Cargando...';
    }
}