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
            $circulos = rand(1, 10);

            if ($circulos == 1) {
                print "<h2>$circulos círculo</h2>\n";
            } else {
                print "<h2>$circulos círculos</h2>\n";
            }
            print "\n";
            print "<table class=\"conborde\">\n";
            print "<tbody>\n";
            print "<tr>\n";
            for ($i = 0; $i < $circulos; $i++) {
                print "<td>\n";
                print "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"70\" height=\"70\">\n";
                print "<circle cx=\"35\" cy=\"35\" r=\"30\" fill=\"black\" />\n";
                print "</svg>\n";
                print "</td>\n";
            }
            print "</tr>\n";
            print "</tbody>\n";
            print "</table>\n";
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>