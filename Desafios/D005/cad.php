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
            $numero = round($_GET["numero"],3);
            $inteiro = round($numero, 0);
            $fracao = explode(".", $numero);
            $decimal = $fracao[1];

            echo"O numero $numero está dividido em: <p>$inteiro inteiros e; </p>$decimal facionário."
            


            
            
            ?>
        <p class="voltar"><a  href="javaScript:history.go(-1)">Voltar para pagina anterior.</a></p>
    </section>
</body>
</html>
