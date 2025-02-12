<?php
require_once '../Model/Articulo.php';
$articuloInser = new Articulo();
if (isset($_REQUEST["insertArticulo"])) {
    // Carga la vista de listado
    $articuloInser->setTitulo($_REQUEST["ArticuloInsert_titulo"]);
    $articuloInser->setContenido($_REQUEST["ArticuloInsert_contenido"]);
    $articuloInser->setFecha(date("Y/m/d h:i:s",time()));

    $articuloInser->insert();
}

// Carga la vista de listado
header("location: index.php");
