  <?php
    if (isset($_POST['color'])) {
      $color = $_POST['color'];
      setcookie("color", $color, strtotime("+3 days"));
    } else {
      if (isset($_COOKIE['color'])) {
        $color=$_COOKIE['color'];
      }else {
      $color = "white";
      }
    }
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="padding: 60px;background-color:<?=$color?>;">
  
      <p>Elige el color de fondo de la página.</p>
      <form action="" method="post">
        <input type="color" name="color" value="<?=$color?>"><br><br>
        <input type="submit" value="Aceptar">
      </form>
</body>
</html>