<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $nome = $_GET["nome"] ?? "undefined";
        $sobrenome = $_GET["sobrenome"] ?? "undefined"; 
        echo "<h1 style='color: white;'>ola $nome $sobrenome seja bem vindo</h1>";   
    ?>
    <p style="color: white;"><a href="javascript:history.go(-1)">voltar a pagina anterior</a></p>
</body>
</html>