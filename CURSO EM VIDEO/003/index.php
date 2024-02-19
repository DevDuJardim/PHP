<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Estudos PHP!</h1>
    <main>
        <?php
            $valor1 = $_GET["x"];
            $valor2 = $_GET["y"];
            echo "Os valores recebidos foram $valor1 e $valor2!";
            echo "<br/>O valor absoluto ".abs($valor2).
            "<br/>O valor $valor1 <sup>$valor2</sup> é ".pow($valor1,$valor2);
            echo "<br/>A raiz quadrada de $valor1 é ".sqrt($valor1).
            "<br/>O valor $valor1 matematicamente arredondado é ".round($valor1).
            "<br/>Arredondado para cima é ".ceil($valor1).
            "<br/>Arredondado para baixo é ".floor($valor1).
            "<br/>A parte inteira de $valor1 é ".intval($valor1).
            "<br/>O valor de $valor1 em moeda é R$". number_format($valor1,2,",",".");
        ?>  
    </main>
</body>
</html>