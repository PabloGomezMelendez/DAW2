<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo</h1>
    <?php
    echo "Hola mundo desde PHP!<br>";
    echo "SEPARADOR: Trabajo con entero ------------------------------------------------ <br>";
    $a=5;
    $b="4";
    //$b="4 ovejitas";//!WARNING: Esta línea generará un error de tipo de dato diferente, pero realizará la operación correctamente.
    echo "La suma de $a y $b es: ".($a+$b)."<br>";
    $res=5*++$a;
    echo "El resultado es: ".$res."<br>";
    $a=1;$b=2;
    $res=$a+$b++;
    echo "El resultado es: ".$res." el valor de a es: ".$a." y el valor de b es: ".$b."<br>";
    $a=1;$b=2;
    $res=$a+++$b;
    echo "El resultado es: ".$res." el valor de a es: ".$a." y el valor de b es: ".$b."<br>";
    echo "SEPARADOR: Trabajo con Boolean ------------------------------------------------ <br>";
    $true=true;
    $false=false;
    echo "<br>".$true." es verdadero.<br>".$false." es falso.<br>";
    $a=(bool) 1;//? Si el número es 1, se convierte en true, caso contrario, en false.
    $a=(bool) 0; //? Si el número es 0, se convierte en false, caso contrario, en true.
    echo $a." es false.<br>";
    echo "SEPARADOR: Trabajando con el print y distinas funciones------------------------------------------------ <br>";
    print_r(get_defined_vars());//? Esta función muestra todas las variables definidas en el script actual.
    echo"<br>";
    var_dump(get_defined_vars()); //? Esta función muestra información detallada sobre las variables definidas en el script actual.
    echo"<br>";
    echo "SEPARADOR: ------------------------------------------------ <br>";
    
    ?>

</body>
</html>