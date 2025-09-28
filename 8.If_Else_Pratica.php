<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    
<?php
    $possuiCartao = true;
    $valorCompra = 450;
    $valorFrete = 50;
    $recDescFrete = true;

    if($possuiCartao == true && $valorCompra >= 400) {
        $valorFrete = 0;
        
    } else if($possuiCartao == true && $valorCompra >= 300) {
        $valorFrete = 10;
        
    } else if($possuiCartao == true && $valorCompra >= 100) {
        $valorFrete = 25;
        
    } else {
        $recDescFrete = false;
    }
?>

<h1>Detalhes do Pedido</h1>

<p> Possui cartão da loja?
    <?php
        if($possuiCartao == true) {
            echo 'SIM';
        } else {
            echo 'NÂO';
        }
    ?>
</p>

<p>Valor da compra: <?= $valorCompra ?></p>

<p> Recebeu desconto no frete?
    <?php
        if($recDescFrete == true) {
            echo 'SIM';
        } else {
            echo 'NÂO';
        }
    ?>
</p>

<p>Valor do frete: <?= $valorFrete ?></p>

</body>
</html>