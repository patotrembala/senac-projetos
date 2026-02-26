<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>calculadora de soma </h1>
    <p>adicione numeros e clique no botão somar para ver os resultados</p>
    <form action="" method="post">
        <input type="number" name="n1" id="">
        <input type="number" name="n2" id="">
        <input type="submit" value="somar!!!">
    </form>
</body>
</html>

<?php

    $num1 = $_POST ["n1"];
    $num2 = $_POST ["n2"];
    $soma = $num1 + $num2;
    echo "<br>A soma é: $soma";




?>