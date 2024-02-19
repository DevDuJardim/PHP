<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Funcões aritméticas!</h1>
    <main>
        <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "Recebidos $n1 e $n2<br/>";
        $soma = $n1 + $n2;
        $media = ($n1+ $n2) / 2;
        echo "<br/>A soma entre  $n1 e $n2 é $soma!";
        echo "<br/>A soma entre $n1 e $n2 é igual a ".($n1 + $n2)."!".
        "<br/>A multiplicação vale ".($n1 * $n1)."!".
        "<br/>A divisão vale ".($n1 / $n2)."!".
        "<br/>A soma subtração vale ".($n1 - $n2)."!".
        "<br/>O resto da divisão'Modulo' vale ".($n1 % $n2)."!";

        echo "<br/>Media $media!<br/>
        Media ".(($n1 + $n2) / 2)."!";

        ?>
    </main>
</body>
</html>