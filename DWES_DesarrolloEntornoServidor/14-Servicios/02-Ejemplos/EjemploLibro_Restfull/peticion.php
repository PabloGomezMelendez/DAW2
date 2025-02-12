<?php
if (isset($_POST['filtraPrecio'])) {
    $parametros = '?min=' . $_POST['min'] . '&max=' . $_POST['max'];
    $data = file_get_contents("http://localhost/Curso%20Actual/Ejercicios%20Adicionales/Tema12/EjemploLibro_RESTFUL/consultaProductos.php" . $parametros);
    mostrarDatos(json_decode($data));
} else if (isset($_POST['filtraNombre'])) {
    $parametros = "?nombre=" . $_POST['nombre'];
    $data = file_get_contents("http://localhost/Curso%20Actual/Ejercicios%20Adicionales/Tema12/EjemploLibro_RESTFUL/consultaProductos.php" . $parametros);
    mostrarDatos(json_decode($data));        
} else if (isset($_POST['insertar'])) {
    $url = "http://localhost/Curso%20Actual/Ejercicios%20Adicionales/Tema12/EjemploLibro_RESTFUL/consultaProductos.php";
    $datos = ["nombre" =>  $_REQUEST['nombre'], "precio" =>  $_REQUEST['precio'], "stock" =>  $_REQUEST['stock']];
    $opciones = [
        "http" => [
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "POST",
            "content" => http_build_query($datos) # Agregar el contenido del formulario definido anteriormente en $datos
        ],
    ];
    $contexto = stream_context_create($opciones);
    $data = file_get_contents($url, false, $contexto);
    mostrarEstado(json_decode($data));
} else if (isset($_POST['borrar'])) {
    $url = "http://localhost/Curso%20Actual/Ejercicios%20Adicionales/Tema12/EjemploLibro_RESTFUL/consultaProductos.php";
    $datos = ["nombre" =>  $_REQUEST['nombre']];
    $opciones = [
        "http" => [
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "DELETE",
            "content" => http_build_query($datos), # Agregar el contenido del formulario definido anteriormente en $datos
        ],
    ];
    $contexto = stream_context_create($opciones);
    $data = file_get_contents($url, false, $contexto);
    mostrarEstado(json_decode($data));
} else if (isset($_POST['stock'])) {
    $url = "http://localhost/Curso%20Actual/Ejercicios%20Adicionales/Tema12/EjemploLibro_RESTFUL/consultaProductos.php";
    $datos = ["nombre" =>  $_REQUEST['nombre'], "cantidad" =>  $_REQUEST['cantidad']];
    $opciones = [
        "http" => [
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "PUT",
            "content" => http_build_query($datos), # Agregar el contenido del formulario definido anteriormente en $datos
        ],
    ];
    $contexto = stream_context_create($opciones);
    $data = file_get_contents($url, false, $contexto);
    mostrarEstado(json_decode($data));
}
function mostrarEstado($productos){
    echo "STATUS: ".$productos->codEstado;
    echo "<br>".$productos->mensaje;
}
function mostrarDatos($productos){
    if ($productos->codEstado==200) {
        echo "<table border='1'><tr><th>Nombre</th><th>Precio</th><th>stock</th></tr>";
        foreach ($productos->productos as $producto) {
            echo "<tr><td>".$producto->nombre."</td>";
            echo "<td>".$producto->precio."</td>";
            echo "<td>".$producto->stock."</td></tr>";
        }
        echo "</table>";
    }else {
        mostrarEstado($productos);
    }
    ?>
     <a href="index.php"><h3>VOLVER A LA PÁGINA DE CONSULTAS</h3></a> 
    <?php
}