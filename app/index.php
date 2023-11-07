<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Practica Sobre Docker Compose</h1>
    <div>
        <?php
            $matricula = getenv("MATRICULA");
            $NAME = getenv("NAME");
            echo "<h1>Hola Maestro, informacion contenida en mi aplicacion:</h1>";
            echo "<p>Matricula: $matricula</p>";
            echo "<p>Nombre: $NAME</p>"
        ?>
    </div>

</body>
</html>