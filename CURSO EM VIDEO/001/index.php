<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Estudos PHP</h1>
    <main>
        <?php
            echo "Hello Wolrd!";
            $nome = "Diego Souza";
            $idade = 35;
            echo "<br/>Meu nome é ".$nome. " e eu tenho ".$idade ." anos de idade!";
            echo "<br/>I'm $nome and i have $idade years old!"
        ?>
    </main>
</body>
</html>