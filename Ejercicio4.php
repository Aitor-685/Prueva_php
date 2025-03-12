<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web que muestra los números del 1 al 10</title>
</head>
<body>
    <h1>Web que muestra los números del 1 al 10</h1>
    <ul>
        <?php
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                echo "<li><a href='https://es.wikipedia.org/wiki/$i' target='_blank'>$i</a></li>";
            }
            echo "</ul>";
        ?>
    </ul>
</body>
</html>