<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Operadores logicos</h1>
    <main>
        <?php 
            date_default_timezone_set("America/Sao_Paulo");
            $ano_atual = date("Y");
            $nas = $_GET["nas"];
            $idade = $ano_atual - $nas;

            echo "O ano atual é $ano_atual<br/>
            Você te $idade anos!<br/>";

            $situacao = ($idade >= 18 && $idade < 65)?"VOTO OBRIGATORIO!":"VOTO NÃO OBRIGATORIO!";
            echo "<br/>".$situacao;
            ?>
    </main>
</body>
</html>