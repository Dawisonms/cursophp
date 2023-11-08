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
            $url = "https://economia.awesomeapi.com.br/json/last/USD-BRL";
            $iniciourl = curl_init($url);
            $pegaResposta = curl_exec($iniciourl);
            $resposta = json_decode($pegaResposta);
            
            $taxa = $resposta["bid"];
            
            echo "$taxa";



            
            
        
        ?>
        <p class="voltar"><a  href="javaScript:history.go(-1)">Voltar para pagina anterior.</a></p>
    </section>
</body>
</html>
