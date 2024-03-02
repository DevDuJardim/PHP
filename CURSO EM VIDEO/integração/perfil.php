<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Integração</h1>
    <main>
        <?php
            $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
            $ano = $_GET["ano"];
            $sexo = $_GET["sexo"];

            echo "Nome:$nome<br/>
                Ano de nascimento $ano<br/>
                Sexo: $sexo"
        ?>
    </main>
</body>
</html>