<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
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
            $dado1 = rand(1, 6);
            $dado2 = rand(1, 6);

            print "<p?>\n";
            print " <img src=\"img/$dado1.svg\" alt=\"$dado1\" width=\"140\" height=\"140\">\n";
            print " <img src=\"img/$dado2.svg\" alt=\"$dado2\" width=\"140\" height=\"140\">\n";
            print " </p>\n";
            print "\n";
            print "<p>Total: </p>";
            print $dado1 + $dado2;
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>