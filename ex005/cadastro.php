<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento.</h1>
    </header>
    <main>
        <?php
              //var_dump($_POST)

              $nome = $_POST["nome"];
              $sobrenome = $_POST["sobrenome"];
              echo "<p>É um prazer te conhecer <strong>$nome $sobrenome</strong>, este é um site.<br/>";
              $teste = base_convert(1254893584, 10, 16);
              echo "A base será convertida <br/>";
              echo "\no resultado é $teste<br/>";
        ?>
        <p>
            <a href="../ex005/index.html">Voltar</a>
        </p>
    </main>
</body>
</html>