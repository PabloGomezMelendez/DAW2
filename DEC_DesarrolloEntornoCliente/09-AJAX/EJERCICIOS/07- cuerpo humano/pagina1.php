<?php
header('Content-Type: text/html; charset=utf-8');
$nombre = $_REQUEST['cod'];
$conexion;
try {
    $dbname = "cuerpohumano";
    $conexion = new PDO("mysql:host=localhost;dbname=" . $dbname . ";charset=utf8", "root", "");
    // echo "Se ha establecido una conexión con el servidor de bases de datos.";
    $conexion;
} catch (PDOException $e) {
    echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
    die("Error: " . $e->getMessage());
}
$consulta = $conexion->query("SELECT * FROM cliente WHERE nombre = '$nombre';");
$resultado_api = $consulta->fetchObject();

$conexion = null;

echo $resultado_api["descripcion"];
