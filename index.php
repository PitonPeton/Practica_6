<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

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

        button {
            font-size: 16px;
            cursor: pointer;
            padding: 0px;
            width: 150px;
            height: 50px;
        }

        .navbar-brand {
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary"><a class="navbar-brand"
            href="Practica_6\portafolio\index.php">Practica 6</a></nav>
    <div id="caja">
        <div id="cajita">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">Ejercicios Guiados</a>
                <a href="portafolio\Ejercicios guidados\Ejercicio_1\index.php"
                    class="list-group-item list-group-item-action">Ejercicio 1</a>
                <a href="portafolio\Ejercicios guidados\Ejercicio_2\index.php"
                    class="list-group-item list-group-item-action">Ejercicio 2</a>
                <a href="portafolio\Ejercicios guidados\Ejercicio_3\index.php"
                    class="list-group-item list-group-item-action">Ejercicio 3</a>
                <a href="portafolio\Ejercicios guidados\Ejercicio_4\index.php"
                    class="list-group-item list-group-item-action">Ejercicio 4</a>
                <a href="#" class="list-group-item list-group-item-action active">Ejercicios</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>