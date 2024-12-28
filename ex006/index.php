<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>

        .bloco{
            background-color:rgb(21, 12, 81);
            color: white;
            width: 500px;
            height: 180px;
            margin: auto;
            border-radius: 10px;
            text-align: center;
            
            
        }
    </style>
</head>
<body>
    <div class="bloco">
        
    <h1>Trabalhando com numeros aleatorios</h1>
    <?php 
        $numero = rand(1, 100);
        echo "o numero aleatorio gerado foi $numero";
    ?>
    <input type="button" value="gerar novo numero" onclick="location.reload()">
    </div>
</body>
</html>