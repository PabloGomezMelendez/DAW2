<?php
require_once '../Model/Foto.php';
require_once '../Model/Like.php';
require_once '../Model/Usuario.php';


// Obtiene todas las fotos
$data['fotos'] = Foto::getFotos();
// Obtiene todas las usuarios
$data['usuarios'] = Usuario::getUsuarios();

// // Obtiene los likes de cada foto
// $data['likes'] = Like::get();



// Carga la vista de listado
include '../View/index_view.php';
