<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular o fatorial de um número</title>
</head>

<body>
    <h1>fatorial</h1>
    <form method="post" action="">
        <label for="numero">escreva um numero</label>
        <input type="number" name="numero" id="numero" min="0" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;

        $fatorial = 1;
        if ($numero < 0) {
        } else {
            for ($i = 1; $i <= $numero; $i++) {
                $fatorial *= $i;
            }
            echo "<p>fatorial de $numero é $fatorial</p>";
        }
    }
    ?>
</body>

</html>