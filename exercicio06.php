<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exibir todos os divisores de um número</title>
</head>

<body>
    <h1>divisor de numero</h1>
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
            echo "<p>divisor de $numero: ";

            for ($i = 1; $i <= $numero; $i++) {
                if ($numero % $i == 0) {
                    echo $i;
                    if ($i != $numero) {
                        echo ", ";
                    }
                }
            }
        }
    }
    ?>
</body>

</html>