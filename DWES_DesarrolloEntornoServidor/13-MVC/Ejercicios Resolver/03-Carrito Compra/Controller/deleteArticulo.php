<?php
require_once '../Model/Articulo.php';

// Crea un obj articulo con el id que se pasa
$articuloDelete = new Articulo($_REQUEST['idArticuloDelete']);

// Borra el Articulo por el id indicado
$articuloDelete->delete();

// Carga la vista de listado
header("location: index.php");
