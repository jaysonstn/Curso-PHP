<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    
   <?php
        
        //string
        $nome = 'Jayson Stein';

        //int
        $idade = 31;

        //float
        $peso = 82.5;

        //boolean
        $fumante = true; //(true = 1, false = vazio)

   ?>


    <h1>Ficha Cadastral</h1>
    <br/>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante ?></p>
</body>
</html>