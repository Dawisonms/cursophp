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
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "<p>O número digitado foi $numero</p>";
            echo "<p> Seu antecessor é $antecessor</p>";
            echo "<p>Seu sucessor é $sucessor</p>";
        ?>
        <p class="voltar" ><a  href="javaScript:history.go(-1)">Voltar para pagina anterior.</a></p>
    </section>
</body>
</html>
