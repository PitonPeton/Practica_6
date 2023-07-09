<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        #caja {
            height: 100vh;
        }

        #cajita {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="..\..\..\index.php">Practica 6</a>
    </nav>
    <div id="caja">
        <div id="cajita">
            <?php
            date_default_timezone_set("Europe/London");
            $animales = [
                ["Ballena", "ballena.svg", "https://es.wikipedia.org/wiki/Balaenidae"],
                ["Caballito de mar", "caballito-mar.svg", "https://es.wikipedia.org/wiki/Hippocampus"],
                ["Camello", "camello.svg", "https://es.wikipedia.org/wiki/Camelus"],
                ["Cebra", "cebra.svg", "https://es.wikipedia.org/wiki/Cebra"],
                ["Elefante", "elefante.svg", "https://es.wikipedia.org/wiki/Elephantidae"],
                ["Hipopótamo", "hipopotamo.svg", "https://es.wikipedia.org/wiki/Hippopotamidae"],
                ["Jirafa", "jirafa.svg", "https://es.wikipedia.org/wiki/Giraffa_camelopardalis"],
                ["León", "leon.svg", "https://es.wikipedia.org/wiki/Panthera_leo"],
                ["Leopardo", "leopardo.svg", "https://es.wikipedia.org/wiki/Panthera_pardus"],
                ["Medusa", "medusa.svg", "https://es.wikipedia.org/wiki/Medusozoa"],
                ["Mono", "mono.svg", "https://es.wikipedia.org/wiki/Mono"],
                ["Oso", "oso.svg", "https://es.wikipedia.org/wiki/Ursidae"],
                ["Oso blanco", "oso-blanco.svg", "https://es.wikipedia.org/wiki/Ursus_maritimus"],
                ["Pájaro", "pajaro.svg", "https://es.wikipedia.org/wiki/Aves"],
                ["Pingüino", "pinguino.svg", "https://es.wikipedia.org/wiki/Spheniscidae"],
                ["Rinoceronte", "rinoceronte.svg", "https://es.wikipedia.org/wiki/Rhinocerotidae"],
                ["Serpiente", "serpiente.svg", "https://es.wikipedia.org/wiki/Serpentes"],
                ["Tigre", "tigre.svg", "https://es.wikipedia.org/wiki/Panthera_tigris"],
                ["Tortuga marina", "tortuga-marina.svg", "https://es.wikipedia.org/wiki/Chelonioidea"],
                ["Tortuga", "tortuga.svg", "https://es.wikipedia.org/wiki/Testudines"],
            ];

            $animal = rand(0, count($animales) - 1);

            print "<h2>{$animales[$animal][0]}</h2>\n";
            print "\n";
            print "<p><img src=\"img/animales/{$animales[$animal][1]}\" alt=\"{$animales[$animal][0]}\" height=\"250\"></p>\n";

            print "\n";
            print "<p?>Mas <a href=\"{$animales[$animal][2]}\">informacion sobre este animal</a> en la wikipedia</p>\n"
                ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>