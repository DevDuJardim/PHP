<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média.</title>
</head>
<body>
    <?php
        echo "<h1>Resultado.</h1>";
        $num01 = $_GET["num01"];
        $num02 = $_GET["num02"];
        $media = ($num01 = $num02) / 2;
        echo "A média é $media.";

    ?>
</body>
</html> 