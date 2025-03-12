<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros del 0 al 100 version 2</title>
</head>
<body>
    <h1>Llista de numeros del 0 al 100 version 2</h1>
    <ul>
        <?php
            for ($i = 0; $i <= 100; $i++) {
                if ($i == 0) {
                    echo "<li><strong><em><u>$i</u></em></strong></li>";
                } elseif ($i % 2 == 0 ) {
                    echo "<li><strong>$i</strong></li>";
                } else {
                    echo "<li><em>$i</em></li>";
                }
            }
        ?>
    </ul>
</body>
</html>