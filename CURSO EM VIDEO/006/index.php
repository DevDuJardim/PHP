<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudando PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Operadores relacionais</h1>
    <main>
        <?php
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $tipo = $_GET["op"];

            echo "Os valores são $n1 e $n2!<br/>";
            $res = $tipo == "s"? $n1 + $n2:$n1 * $n2;
            echo $res."<br/>";

            $_3 = 3;
            $_tres = "3";
            $r = $_3 == $_tres?"SIM!":"NÃO!";
            echo "As variaveis são iguais?: $r.<br/>";
            $r2 = $_3 === $_tres?"SIM!":"NÃO!";
            echo "As variaveis são identicas?: $r2"


        ?>
    </main>
</body>
</html>