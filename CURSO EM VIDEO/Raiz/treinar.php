<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EstudoS de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Integração</h1>
    <main>
        <?php
            $valor = $_GET["valor"];
            echo "O valor é $valor";
            $raiz = sqrt($valor);
            echo "<br/>A raiz é ".number_format($raiz,1)
            ?>
    </main>
</body>
</html>