<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>ver se o numero é perfeito</title>
</head>

<body>
    <h1>numero perfeito</h1>
    <form method="post" action="">
        <label for="numero">escreva um numero positivo</label>
        <input type="number" name="numero" id="numero" min="1" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;

        if ($numero <= 0) {
        } else {
            $somaDivisores = 0;
            $divisores = [];

            for ($i = 1; $i <= $numero / 2; $i++) {
                if ($numero % $i == 0) {
                    $somaDivisores += $i;
                    $divisores[] = $i;
                }
            }

            if ($somaDivisores == $numero) {
                echo "<div class='resultado perfeito'>";
                echo "<p><strong>$numero</strong> é perfeito</p>";
                echo "<p>divisores proprios = " . implode(', ', $divisores) . "</p>";
                echo "<p>soma dos divisores: $somaDivisores</p>";
            } else {
                echo "<div class='resultado imperfeito'>";
                echo "<p><strong>$numero</strong> não é perfeito</p>";
                echo "<p>divisores proprios: " . implode(', ', $divisores) . "</p>";
                echo "<p>soma dos divisores: $somaDivisores</p>";
            }
        }
    }
    ?>
</body>

</html>