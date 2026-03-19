<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <form method="get" action="">
</body>
 
    <input type="number" name="num1" id="">
    <input type="number" name="num2" id="">
    <input type="submit" value="somar">
    input type=""
</html>

<?php

    $num1 = $_GET ["num1"];
    $num2 = $_GET ["num2"];
    $soma = $num1 + $num2;
    echo "<br>A soma é: $soma";

?>