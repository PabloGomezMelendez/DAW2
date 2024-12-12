<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="default.css" rel="stylesheet" type="text/css" />
</head>

<body>

    <div id="content">
        <?php
        // $hora = $_POST['hora'];

        // if (($hora >= 6) && ($hora <= 12)) {
        //     echo "Buenos días";
        // }

        // if (($hora >= 13) && ($hora <= 20)) {
        //     echo "Buenas tardes";
        // }

        // if ((($hora >= 21) && ($hora < 24)) || (($hora <= 5) && ($hora >= 0))) {
        //     echo "Buenas noches";
        // }

        // if (($hora >= 24) || ($hora < 0)) {
        //     echo "La hora introducida no es correcta.";
        // }
        if (isset($_REQUEST['hora'])) {
            $hora = $_POST['hora'];
            switch (true) {
                case ($hora >= 6) && ($hora <= 12):
                    echo "<h1>Buenos días</h1>";
                    break;
                case ($hora >= 13) && ($hora <= 20):
                    echo "<h1>Buenos tardes</h1>";
                    break;
                case $hora >= 21 || $hora <= 5:
                    echo "<h1>Buenas noches</h1>";
                    break;

                default:
                    echo "<h1>La hora introducida no es correcta.</h1>";
                    break;
            }
        } else {
        ?>
            <div id="content">
                Por favor, introduzca una hora del día (0 - 23):
                <form action="" method="post">
                    <input type="text" name="hora" autofocus><br>
                    <input type="submit" value="Aceptar">
                </form>
            </div>
        <?php
        }
        ?>


        <br><br>
        <a href="02-index.php">>> Volver</a>
    </div>

</body>

</html>