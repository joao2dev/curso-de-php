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
    <?php 
    $cotacao = 6.20;
    $valor = $_GET["Valor"];
    $resultado = $valor / $cotacao;
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    echo "<h1>seus ".numfmt_format_currency($padrao, $valor, "BRL")." em dolar fica ".numfmt_format_currency($padrao, $resultado, "USD");


    ?>
  <button onclick="voltarPagina()">Voltar</button>

<script>
    function voltarPagina() {
        history.back();
    }
</script>
    </div>
    
</body>
</html>