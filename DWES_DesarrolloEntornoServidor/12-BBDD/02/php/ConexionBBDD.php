<!-- @Author Pablo Gómez Meléndez -->

<?php
function conectaLocalHostBBDD( $dbname)
{
    
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=".$dbname.";charset=utf8", "root", "");
        // echo "Se ha establecido una conexión con el servidor de bases de datos.";
        return $conexion;
    } catch (PDOException $e) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die("Error: " . $e->getMessage());
    }
}
function conectaLocalBBDD( $dbname, $user, $pass)
{

    try {
        $conexion = new PDO("mysql:host=localhost;dbname=${dbname};charset=utf8", "${$user}", "${$pass}");
        // echo "Se ha establecido una conexión con el servidor de bases de datos.";
        return $conexion;
    } catch (PDOException $e) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die("Error: " . $e->getMessage());
    }
}
function conectaBBDD($host, $dbname, $user, $pass)
{
    try {
        $conexion = new PDO("mysql:host=${$host};dbname=${dbname};charset=utf8", "${$user}", "${$pass}");
        // echo "Se ha establecido una conexión con el servidor de bases de datos.";
        return $conexion;
    } catch (PDOException $e) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die("Error: " . $e->getMessage());
    }
}
