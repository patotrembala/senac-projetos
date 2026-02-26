<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Impar - Contra Pessoa</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        .resultado { margin-top: 20px; padding: 15px; border: 2px solid #333; }
    </style>
</head>
<body>
    <h1>Par ou Impar - Jogador contra Jogador</h1>

    <?php
    session_start();

    // Passo 1: Jogador 1 escolhe par ou impar
    if (!isset($_SESSION['escolha_j1'])) {
        ?>
        <h2>Jogador 1 - Escolha par ou impar</h2>
        <form method="post">
            <label>
                <input type="radio" name="escolha" value="par" required> Par
            </label>
            <label>
                <input type="radio" name="escolha" value="impar" required> Impar
            </label>
            <button type="submit">Próximo</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['escolha'])) {
            $_SESSION['escolha_j1'] = $_POST['escolha'];
        }
    }
    // Passo 2: jogador 2 escolhe par ou impar
   if (!isset($_SESSION['escolha_j2'])) {
        ?>
        <h2>Jogador 2 - Escolha par ou impar</h2>
        <form method="post">
            <label>
                <input type="radio" name="escolha" value="par" required> Par
            </label>
            <label>
                <input type="radio" name="escolha" value="impar" required> Impar
            </label>
            <button type="submit">Próximo</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['escolha'])) {
            $_SESSION['escolha_j1'] = $_POST['escolha'];
        }
    }
    // Passo 3: Mostrar resultado
    else {
        $numero = $_SESSION['numero_j2'];
        $escolha_j1 = $_SESSION['escolha_j1'];
        $resultado = ($numero % 2 == 0) ? 'par' : 'impar';
        $j1_ganhou = ($resultado == $escolha_j1);

        echo '<div class="resultado">';
        echo '<h2>Resultado:</h2>';
        echo '<p>Número escolhido: <strong>' . $numero . '</strong></p>';
        echo '<p>Número é: <strong>' . ucfirst($resultado) . '</strong></p>';
        echo '<p style="font-size: 18px; font-weight: bold;">';
        echo $j1_ganhou ? '✓ Jogador 1 GANHOU!' : '✓ Jogador 2 GANHOU!';
        echo '</p>';
        echo '</div>';

        // Limpar para novo jogo
        $_SESSION = [];
        echo '<form method="post"><button type="submit">Jogar Novamente</button></form>';
    }
    ?>
</body>
</html>





