<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
    <style>
        button{
            width: 90%;
            border-radius: 8px;
            padding: 8px;
            background-color: blue;
            color: lightblue;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Número aleatório</h1>
    </header>
    
    <section>
        <?php 
            $aleatorio = mt_rand(0,100);
            echo"<p>O número aleatório entre 0 e 100 é $aleatorio.</p>";
        ?>
    <button onclick="javascript:document.location.reload()">Gerar outro</button>    
    
    </section>
    

    
</body>
</html>
