addEventListener('load', inicializarEventos, false);

function inicializarEventos() {
    let ob = document.getElementById('boton1');
    ob.addEventListener('click', presionBoton, false);
}

let conexion1;
function presionBoton(e) {

    const TITULO = document.getElementById('titulo').value;
    const TIPO = document.getElementById('tipo').value;
    const URL = "http://www.omdbapi.com/?apikey=6104f82a&s=" + TITULO + "&type=" + TIPO;

    conexion1 = new XMLHttpRequest();
    conexion1.open('GET', URL, true);
    conexion1.timeout = 3000; // Tiempo máximo de espera del API 3sg
    conexion1.addEventListener('readystatechange', procesarDatos);  // Añadimos el callback
    conexion1.addEventListener('timeout', tiempoVencido); // El evento ontimeout se dispara cuando se ha superado el tiempo de espera
    conexion1.send();
}

function tiempoVencido() {
    document.getElementById("resultados").innerHTML = "Tiempo de espera vencido";
}

function procesarDatos() {
    if (conexion1.readyState == 4) {
        if (conexion1.status == 200) {
            let resultados = document.getElementById("resultados");
            try {
                let datos = JSON.parse(conexion1.responseText);
                let peliculas = datos.Search;

                if (!peliculas) {
                    resultados.innerHTML = "No se encontraron resultados";
                    return;
                }

                let salida = `<table>
                    <tr>
                        <th>Título</th>
                        <th>Año</th>
                        <th>Código IMDB</th>
                        <th>Tipo</th>
                        <th>Imagen</th>
                    </tr>`;

                for (let f = 0; f < peliculas.length; f++) {
                    salida += `<tr>
                        <td>${peliculas[f].Title}</td>
                        <td>${peliculas[f].Year}</td>
                        <td>${peliculas[f].imdbID}</td>
                        <td>${peliculas[f].Type}</td>
                        <td><img src="${peliculas[f].Poster}" alt="${peliculas[f].Title}" width="50"></td>
                    </tr>`;
                }

                salida += "</table>";
                resultados.innerHTML = salida;
            } catch (ex) {
                resultados.innerHTML = "Error al parsear el JSON: " + ex.message;
            }
        } else {
            resultados.innerHTML = "Error al cargar los datos";
        }
    } else {
        resultados.innerHTML = "Cargando...";
    }
}