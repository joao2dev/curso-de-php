<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bloco">
    <h1>Resultado final</h1>
        <?php 
        
            $numero = $_GET["numero"] ?? "undefined";
            echo "o numero escolhido foi $numero ";
            echo '<br>seu antecessor e '. $numero - 1.;
            echo '<br>seu sucessor e '. $numero + 1;
        ?>
    </div>
</body>
</html>