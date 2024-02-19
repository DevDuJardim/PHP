<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Média</h1>
    <main>
        <?php 
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $media = ($nota1 + $nota2) / 2;
            $situacao = $media > 7?"APROVADO!":"REPROVADO!";
            echo "O aluno está $situacao."

            ?>
    </main>
</body>
</html>