<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php

        $nome = 'Jayson';
        $cor_preferida = 'Verde';
        $idade = 31;

        //Operador . para concatenar:  . $variavel . 
        echo 'Olá ' . $nome .', vi que sua cor preferida é ' . $cor_preferida . ', possui ' . $idade . ' anos e gosta de video game.';

        echo '<br/>';
        //Aspas duplas, sem operador .
        echo "Olá $nome, vi que sua cor preferida é $cor_preferida, possui $idade anos e gosta de video game.";
    ?>

</body>
</html>