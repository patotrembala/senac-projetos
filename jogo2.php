<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jogo de par ou impar </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head> <meta charset="UTF-8">
<body>
    
    <h1>JOGO DE PAR OU IMPAR</h1>
    <p>selecione par ou impar e escolha um numero para cada jogador</p>
    <form action="" method="get">
        <label for="">jogador 1</label>
        <input type="text" name="escolhaj1" id="">
        <Br>
        <label for="">jogador 2</label>
        <input type="text" name="escolhaj2" id="">
        <br>
        <label for="">numero do jogador 1:</label>
        <input type="number" name="nj1" id="">
        <br>
        <label for="">numero do jogador 2:</label>
        <input type="number" name="nj2" id="">
        <br>
       <input class="btn btn-dark" type="submit" name="" value="Jogar">
    
    
    
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    </body>
</html>
<?php
$soma = $_GET['nj1'] + $_GET['nj2'];

if ($soma % 2 > 0 and $_GET['escolhaj1'] == "par") {
    echo "jogador 1 venceu";
} else {
    echo "jogador 2 venceu";
}

?>
