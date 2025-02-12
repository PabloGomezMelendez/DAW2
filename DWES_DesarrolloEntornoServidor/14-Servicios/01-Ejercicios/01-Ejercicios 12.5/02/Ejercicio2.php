<?php
$url = "http://thesimpsonsquoteapi.glitch.me/quotes";
$url2="https://thesimpsonsquoteapi.glitch.me/quotes?count=4";


$options = [
    "http" => [
        "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)\r\n"
    ]
];
$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
if ($response !== false) {
    // echo $response;
    $datosPersonajes = json_decode($response, true);
} else {
    echo "Error al obtener los datos.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El tiempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h1>Frases de Los Simpsons</h1>
        <?php if (isset($datosPersonajes)): ?>
            <?php foreach ($datosPersonajes as $personaje): ?>
                <div class="character"> <?php echo $personaje['character']; ?> </div>
                <img src="<?php echo $personaje['image']; ?>" alt="<?php echo $personaje['character']; ?>">
                <div class="quote"> "<?php echo $personaje['quote']; ?>" </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</body>
</html>