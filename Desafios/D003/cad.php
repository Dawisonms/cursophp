<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    
    <section>
        <?php 
            $numero = $_GET["numero"];
            $taxa = 5.089;
            $conversao = round( $numero / $taxa, 2);
            
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY );

            echo "O valor digitado foi" . number_format_currency($padrão, $numero, "BRL") . ", utilizando a taxa de" . number_format_currency($padrão, $taxa, "BRL") . ", a conversão é igual a" . number_format_currency($padrão, $conversao, "USD" ) ."dolares."
        ?>
        <p class="voltar"><a  href="javaScript:history.go(-1)">Voltar para pagina anterior.</a></p>
    </section>
</body>
</html>
