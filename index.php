<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark light">
    <title>conectando una api</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.red.min.css">
    <style>
        :root {
            color-scheme: light dark;
        }
        body {
            display: grid;
            place-content: center;
        }
    </style>
</head>
<body>
    <?php
    // Ingresar a la API por la URL
    $url = 'https://whenisthenextmcufilm.com/api';

    // Realizar la solicitud GET
    $response = file_get_contents($url);

    // Decodificar la respuesta JSON
    $datos = json_decode($response, true);
    ?>

    <main>
    <h2>Disponibles</h2>

        <ul>
        <p><a href="instituto.php">instituto</a></p>
        <p><a href="#">algo</a></p>
        </ul>
        <!-- <section>
            <article style="width:90%">
                <img src="<?php echo $datos['poster_url']; ?>" alt="Poster de la película">
                <h1><?php echo $datos['title']; ?></h1>
                <p style="color:tomato; text-align:center;"><?php echo $datos['release_date']; ?></p>
            </article>
        </section> -->
        
    </main>
</body>
</html>
