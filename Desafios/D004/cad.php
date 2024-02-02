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
            $inicio = date('d-m-Y', strtotime("-7 days"));
            $fim = date('d-m-Y');
            
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'11-03-2023\'&@dataFinalCotacao=\'11-10-2023\'&$top=1&$orderby=cotacaoCompra%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $resposta = json_decode($pegaResposta);
            
            $taxa = $resposta["bid"];
            
            echo "$taxa";
            



            
            
        
        ?>
        <p class="voltar"><a  href="javaScript:history.go(-1)">Voltar para pagina anterior.</a></p>
    </section>
</body>
</html>
