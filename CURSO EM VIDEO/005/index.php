<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Operador Unário!</h1>
    <main>
        <?php 
            $a = $_GET["a"];
            $b = $_GET["b"];
            $maior = $a>$b?$a:$b;
            echo "Recebidos $a e $b!<br/>O maior é $maior!<br/>";
            $res = $a > $b ? "A é o maior":"B é o maior";
            echo $res
            ?>
    </main>
</body>
</html>