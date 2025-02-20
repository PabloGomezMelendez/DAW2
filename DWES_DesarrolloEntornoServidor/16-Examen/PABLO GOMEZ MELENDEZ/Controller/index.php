<?php
session_start();

require_once '../Model/Incidencia.php';
require_once '../Model/Usuario.php';

if (isset($_SESSION['isLogin'])) {
    $_SESSION['isLogin'] = true;

    if (! Usuario::getUsuarioByNombre($_SESSION['name'])) {
        echo ('entra en nuevo user');
        $aux = new Usuario(0, $_SESSION['name'], "user");
        $aux->insert();
    } else {
        // echo ('usario ya existe, login');
    }


    // Obtiene todas las incidencias
    $data['incidencias'] = Incidencia::getIncidencias();
    // Obtiene todas las user login
    $data['userios'] = Usuario::getUsuarioByNombre($_SESSION['name']);

    // Carga la vista de listado
    include '../View/index_view.php';
} else {
    // Carga la vista del login
    include '../View/login_view.php';
}
if (isset($_REQUEST['close'])) {
    session_destroy();
    header("Location: index.php");
}
