<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Operadores de atribução</h1>
    <main>
        <?php
        $preco = $_GET["p"];
        $ano = $_GET["aa"];
        echo "O preço é R$".number_format($preco,2).".<br/>";

        $preco = $preco + ($preco*10/100);
        echo "<br/>O novo preço com 10% de aumento fica R$".number_format($preco,2);

        $preco -= ($preco*10/100);
        echo "<br/>O novo preço com 10% de desconto fica R$".number_format($preco,2)."<br/>";

        echo "<br/>O ano atual é $ano!<br/>
        O ano anterior foi ". --$ano."<br/>
        E o ano que vem será ".($ano+=2)."!";
        //comentariocomentariocomentario

        /*comentariocomentario comentariocomentario comentariocomentaricomentariocomentario comentario  comentariocomentario comentario comentarioo */


        ?>
    </main>
</body>
</html>