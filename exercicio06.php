<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>escrever divisores de um numero</title>
</head>
<body>
    <h1>escrever divisores de um numero</h1>
    <form method="post" action="">
        <label for="numero">escreva um numero inteiro positivo:</label>
        <input type="number" name="numero" id="numero" min="1" required>
        <button type="submit">ver divisores</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;

        if ($numero <= 0) {
            echo "<p>Por favor, digite um número inteiro positivo.</p>";
        } else {
            echo "<p>Divisores de $numero: ";

            for ($i = 1; $i <= $numero; $i++) {
                if ($numero % $i == 0) {
                    echo $i;
                    if ($i != $numero) {
                        echo ", ";
                    }
                }
            }
            echo "</p>";
        }
    }
    ?>
</body>
</html>