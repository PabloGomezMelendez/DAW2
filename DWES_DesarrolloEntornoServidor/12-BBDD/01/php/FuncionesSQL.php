<!-- @Author Pablo Gómez Meléndez -->

<?php
// FuncionesSQL.php: Contiene funciones para interactuar con la base de datos

function AllClientes($conexion){
    return $conexion->query("SELECT * FROM cliente");
}
function ClienteByID($conexion, $id){
    return $conexion->query("SELECT * FROM cliente WHERE id = $id");
}
function ClientesByDNI($conexion, $dni){
    return $conexion->query("SELECT * FROM cliente WHERE DNI = $dni");
}
function deleteClienteByID($conexion, $id){
    return  $conexion->query("DELETE FROM cliente WHERE id = $id");
}

function updateCliente($conexion, $id, $dni, $nombre,  $direccion, $telefono){
    return $conexion->query("UPDATE cliente SET DNI='$dni', nombre = '$nombre', dirección = '$direccion', telefono = '$telefono' WHERE id = $id");
}
function addCliente($conexion, $dni, $nombre,  $direccion, $telefono)
{
    return $conexion->query("INSERT INTO `cliente`( `DNI`, `nombre`, `dirección`, `telefono`) VALUES ('$dni','$nombre','$direccion','$telefono')");
}

?>