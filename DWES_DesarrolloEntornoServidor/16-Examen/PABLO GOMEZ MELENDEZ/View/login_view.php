<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Introduce el usuario para entar a la aplicación:</p>
    <form action="../Controller/login.php" method="post">
        <label for="user">USUARIO</label>
        <input type="text" name="user" placeholder="Nombre del usuario"></input>
        <input id="btn_insert" type="submit" value="entar" name="entar">
    </form>
</body>
</html>