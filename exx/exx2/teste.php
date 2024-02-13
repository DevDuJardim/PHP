<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <h1>TESTE</h1>
    <?php
       $num = $_REQUEST["numero"];

       $ant = $num - 1;
       $suc = $num + 1;

       echo "O antecessor de $num é $ant";
       echo "O sucessor de $num é $suc";
    ?>
</body>
</html>