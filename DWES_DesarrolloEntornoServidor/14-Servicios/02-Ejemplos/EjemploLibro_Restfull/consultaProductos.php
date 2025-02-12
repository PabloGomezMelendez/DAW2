<?php
require_once 'Producto.php';
$codEstado=200;
$metodo = $_SERVER['REQUEST_METHOD'];
if ($metodo == 'GET') {
  if (isset($_REQUEST['min']) && isset($_REQUEST['max'])) {
    $productos = Producto::getProductosFiltroPrecio($_REQUEST['min'], $_REQUEST['max']);
  } else if (isset($_REQUEST['nombre'])) {
    $productos = Producto::getProductosFiltroNombre($_REQUEST['nombre']);
  }
  if (count($productos) == 0) {
    $mensaje = "PRODUCTO NO ENCONTRADO";
    $codEstado = 404;
  } else {
    foreach ($productos as $producto) {
      $devolver['productos'][] = ['nombre' => $producto->getNombre(), 'precio' => $producto->getPrecio(), 'stock' => $producto->getStock()];
    }
    $mensaje = "PRODUCTO ENCONTRADO";
    $codEstado = 200;
  }
} else if ($metodo == 'POST') {
    $producto = Producto::getProductoByNombre($_REQUEST['nombre']);
    if ($producto) {
      $mensaje = "CONFLICTO, PRODUCTO CON MISMO NOMBRE";
      $codEstado = 409;
    }else{
      $producto = new Producto(null, $_REQUEST['nombre'], $_REQUEST['precio'], null, $_REQUEST['stock']);
      $producto->insert();
      $mensaje = "PRODUCTO INSERTADO CORRECTAMENTE";
      $codEstado = 200;
    }
}else if ($metodo == 'DELETE') {
  //Para los métodos GET y POST existe $_REQUEST, pero para PUT y DELETE no, así que tenemos que parsear el php://input
    parse_str(file_get_contents("php://input"),$parametros);
    $producto = Producto::getProductoByNombre($parametros['nombre']);
    if ($producto) {
      $producto->delete();
      $mensaje = "PRODUCTO BORRADO CORRECTAMENTE";
      $codEstado=200;
    }else {
      $mensaje = "PRODUCTO NO ENCONTRADO";
      $codEstado=404;
    }
}else if ($metodo == 'PUT') {
  //Para los métodos GET y POST existe $_REQUEST, pero para PUT y DELETE no, así que tenemos que parsear el php://input
    parse_str(file_get_contents("php://input"),$parametros);
    $producto = Producto::getProductoByNombre($parametros['nombre']);
    if ($producto) {
      $producto->añade($parametros['cantidad']);
      $mensaje = "STOCK AÑADIDO CORRECTAMENTE";
      $codEstado=200;
    }else {
      $mensaje = "PRODUCTO NO ENCONTRADO";
      $codEstado=404;
    }
  }
  $devolver['mensaje'] = $mensaje;
  $devolver['codEstado'] = $codEstado;
  //setCabecera($codEstado,$mensaje); 
  echo json_encode($devolver);
  
function setCabecera($codEstado, $mensaje) {  
  //Si usamos la funcion setCabecera y establecemos en header un codigo distinto de 200 (status OK) provocará un error en el cliente, 
  //por eso es mejor tratar el error en la respuesta devuelta en el array $devolver y el cliente pueda analizar el mensaje
  header("HTTP/1.1 $codEstado $mensaje");  
  header("Content-Type: application/json;charset=utf-8");  
}  