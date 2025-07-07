<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ver se o numerp é perfeito</title>
</head>
<body>
    <h1>Verificar Número Perfeito</h1>
    <form method="post" action="">
        <label for="numero">ecreva um numreo inteiro positivo</label>
        <input type="number" name="numero" id="numero" min="1" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;

        if ($numero <= 0) {
            echo "<p class='resultado imperfeito'>Por favor, digite um número inteiro positivo.</p>";
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
                echo "<p>O número <strong>$numero</strong> é perfeito!</p>";
                echo "<p>Divisores próprios: " . implode(', ', $divisores) . "</p>";
                echo "<p>Soma dos divisores: $somaDivisores</p>";
                echo "</div>";
            } else {
                echo "<div class='resultado imperfeito'>";
                echo "<p>O número <strong>$numero</strong> não é perfeito.</p>";
                echo "<p>Divisores próprios: " . implode(', ', $divisores) . "</p>";
                echo "<p>Soma dos divisores: $somaDivisores</p>";
                echo "</div>";
            }
        }
    }
    ?>
</body>
</html>