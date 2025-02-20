<?php
require_once '../Model/Incidencia.php';
require_once '../Model/Usuarios.php';

$codEstado = 200;
$metodo = $_SERVER['REQUEST_METHOD'];



if ($metodo == 'GET') {
    $incidencias = Incidencia::getIncidenciaByEstado("RESUELTAS");
    if (count($incidencias) == 0) {
        $mensaje = "NO EXISTEN INCIDENCIAS RESUELTAS";
        $codEstado = 404;
    } else {
        if (!isset($_REQUEST['descripcion'])) {
            foreach ($incidencias as $incidencia) {
                $reparador = Usuario::getUsuarioById($incidencia->getAdmin());

                $devolver['incidencias'][] = ['descipcion' => $incidencia->getDescripcion(), 'reparador' => $reparador, 'fecha' => $incidencia->getFecha()];
            }
            $mensaje = "OK: TODAS LAS INCIDENCIAS RESULTAS";
            $codEstado = 200;
        } else {
            foreach ($productos as $producto) {
                // Contine la caden ane la descripcion
                if (in_array($_REQUEST['descripcion'], $incidencia->getDescripcion())) {
                    $reparador = Usuario::getUsuarioById($incidencia->getAdmin());
                    $devolver['incidencias'][] = ['descipcion' => $incidencia->getDescripcion(), 'reparador' => $reparador, 'fecha' => $incidencia->getFecha()];
                }
            }
            $mensaje = "OK: TODAS LAS INCIDENCIAS RESULTAS QUE CONTENGA EL PARAMETRO PASADO EN LA DESCRIPCIÓN";
            $codEstado = 200;
        }
    }
} else if ($metodo == 'PUT') {
    //Para los métodos GET y POST existe $_REQUEST, pero para PUT y DELETE no, así que tenemos que parsear el php://input
    parse_str(file_get_contents("php://input"), $parametros);
    $resultado = Incidencia::cambioAdminIncidencia($parametros['propietario'],$parametros['destinatario']);
    if ($resultado) {
        $mensaje = "OK";
        $codEstado = 200;
    } else {
        $mensaje = "ALGUNO DE LOS USUARIOS NO ES ADMINISTRADOR";
        $codEstado = 404;
    }
}

// $devolver['mensaje'] = $mensaje;
// $devolver['codEstado'] = $codEstado;
setCabecera($codEstado, $mensaje);
echo json_encode($devolver);

function setCabecera($codEstado, $mensaje)
{
    //Si usamos la funcion setCabecera y establecemos en header un codigo distinto de 200 (status OK) provocará un error en el cliente, 
    //por eso es mejor tratar el error en la respuesta devuelta en el array $devolver y el cliente pueda analizar el mensaje
    header("HTTP/1.1 $codEstado $mensaje");
    header("Content-Type: application/json;charset=utf-8");
}
