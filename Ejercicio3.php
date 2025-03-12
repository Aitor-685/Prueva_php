<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La taula de multiplicar del 7</title>
</head>
<body>
    <h1>La taula de multiplicar del 7</h1>
    <ul>
        <?php
            for ($i = 0;  $i <= 10; $i++) {
                $resultat = 7 * $i;
                echo "<li>7 × $i = $resultat</li>";
            }
        ?>
    </ul>
</body>
</html>