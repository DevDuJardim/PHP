<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor Sucessor</title>
</head>
<body>
    <h1>resposta</h1>
    <?php
        $num = $_GET["num"];

        $ant = $num - 1;
        $suc = $num + 1;
        $ale = mt_rand(0,500000000000000);
        $url = '{"@odata.context":"https://was-p.bcnet.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata$metadata#_CotacaoDolarPeriodo(cotacaoCompra,dataHoraCotacao)","value":[{"cotacaoCompra":4.97110,"dataHoraCotacao":"2024-02-09 17:00:17.365"}]}r';
        echo "O antecessor de $num é o $ant!";
        echo "O sucessor de $num é o $suc!<br/>";
        echo "Um numero alêatorio $ale!" 
    ?>
</body>
</html>