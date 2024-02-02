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
            
            number_format($numero,2,".","");
            number_format($conversao, 2, ".", ",");

            echo "O valor de $numero convertido a uma taxa de $taxa foi de $conversao";
           
        ?>
        <p class="voltar"><a  href="javaScript:history.go(-1)">Voltar para pagina anterior.</a></p>
    </section>
</body>
</html>
