<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jogo de par ou impar </title>
    <style>
        /* custom head stylesheet */
        body {
            font-family: Arial, sans-serif;
            /* altere a cor abaixo para qualquer valor CSS (nome, hex, rgb, etc.) */
            background-color: #793b3b; /* ex: #f8f9fa, light gray */
            /* também é possível usar gradientes:
               background: linear-gradient(135deg, #4e54c8, #8f94fb);
            */
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            padding-top: 40px;
        }

        p.intro {
            text-align: center;
            font-size: 1.1em;
            margin-bottom: 20px;    
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

input[type="submit"] {
    margin-top: 15px;
    padding: 10px 20px;
    cursor: pointer;
}

input::-moz-range-thumb {
    background-color: #040e1a;
}
    </style>

<body>

    <h1>JOGO DE PAR OU IMPAR</h1>
   
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
       <input type="submit" name="" value="Jogar">
    
    
    
    </form>
    <h1></h1>
</body>
</html>

<?php
$soma = $_GET ['nj1']+ $_GET ['nj2'];
if ($soma % 2 == 0) {
        if   ($_GET ['escolhaj1'] == "par")  {
    # se entrar aqui, vai dar par
        echo " <br> jogador 1 ganhou";
        }   else {
            echo "<br> O jogador 2 ganhou";
            # se entrar aqui é impar
        }
}    else {
            if ($_GET['escolhaj1'] == "impar") {
                echo "<br> jogador 1 ganhou";
            } else {
                echo "<br> O jogador 2 ganhou";
            }
    } 
?>