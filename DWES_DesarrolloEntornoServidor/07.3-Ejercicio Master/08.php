<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link href="css/default.css" rel="stylesheet" type="text/css" />
    <title>Soluciones a los ejercicios - 7. Sesiones y cookies</title>
  </head>
  <body>
    <div id="container">
      <div id="content">
    
      <?php
  // Actualizar las cookies
  if (isset($_POST['accion']) && $_POST['accion'] == "actualizarCookies") {
    setcookie("diccionario", serialize($_SESSION['diccionario']),strtotime("+1 year"));
  }
  
  // Carga las palabras almacenadas en las cookies
  if (isset($_COOKIE['diccionario'])) {
    $_SESSION['diccionario']=unserialize($_COOKIE['diccionario']);
  }
  
  // Borrado de cookies y variables
  if (isset($_POST['accion']) && $_POST['accion'] == "borrarCookies") {
    setcookie("diccionario", NULL, -1);
    unset($_SESSION['diccionario']);
  }
        
  if (!isset($_SESSION['diccionario'])) {
    $_SESSION['diccionario'] = array (
      "ordenador" => "computer",
      "gato" => "cat",      
      "rojo" => "red",
      "árbol" => "tree",
      "pingüino" => "penguin",
      "sol" => "sun",
      "agua" => "water",
      "viento" => "wind",
      "siesta" => "nap",
      "arriba" => "up",
      "ratón" => "mouse",
      "estadio" => "arena",
      "calumnia" => "aspersion",
      "aguacate" => "avocado",
      "cuerpo" => "body",
      "concurso" => "contest",
      "cena" => "dinner",
      "salida" => "exit",
      "lenteja" => "lentil",
      "cacerola" => "pan",
      "pastel" => "pie",
      "membrillo" => "quince"
    );
  }
            
  if (!isset($_POST['espanol'])) {
    echo "Por favor, introduzca la traducción al inglés de las siguientes palabras.<br>";
    
    $espanol = array_rand($_SESSION['diccionario'], 5);
    echo '<form action="" method="post">';
    for ($i=0;$i<5;$i++) {
      echo $espanol[$i]." ";
      echo '<input type="text" name="ingles[]" ><br>';
      echo '<input type="hidden" name="espanol[]" value="'.$espanol[$i].'">';
    }
    echo '<input type="submit" value="Aceptar">';
    echo '</form>';
  }  else {
    $espanol = $_POST['espanol'];
    $ingles = $_POST['ingles'];

    for ($i = 0; $i < 5; $i++) {
      echo $espanol[$i].": ".$ingles[$i];
      if ($_SESSION['diccionario'][$espanol[$i]] == $ingles[$i]) {
        echo " - correcto<br>";
      } else {
        echo " - incorrecto, la respuesta correcta es ".$_SESSION['diccionario'][$espanol[$i]]."<br>";
      }
    }
  }
  ?>
  <hr>
  <form action="" method="post">
    <input type="submit" value="Jugar otra vez">
  </form>
  <hr>
  <form action="08_admin_palabras.php" method="post">
    <input type="submit" value="Administrar los pares de palabras">
  </form>
      </div>

    </div>
  </body>
</html>

