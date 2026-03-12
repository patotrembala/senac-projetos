<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #c41919;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #a7a2a2f1;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgb(207, 216, 213);
            text-align: center;
        }
        input[type="number"] {
            width: 60px;
            padding: 5px;
            margin-right: 10px;
        }
        input[type="submit"] {
            padding: 5px 15px;
        }
        .tabuada {
            margin-top: 20px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tabuada</h1>
        <form method="get" action="">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" required>
            <input type="submit" value="Gerar">
        </form>

        <?php
        if (isset($_GET['numero'])) {
            $n = (int) $_GET['numero'];
            echo '<div class="tabuada">';
            for ($i = 1; $i <= 10; $i++) {
                $prod = $n * $i;
                echo "{$n} × {$i} = {$prod}<br>";
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>