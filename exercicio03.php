<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informar se um número é positivo, negativo ou zero</title>
</head>

<body>
    <h1>positivo, negativo ou zero</h1>

    <form method="post">
        <label for="numero">escreva um numero</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        if ($numero > 0) {
            $resultado = "<strong>$numero</strong> é <strong>positivo</strong>";
        } elseif ($numero < 0) {
            $resultado = "<strong>$numero</strong> é <strong>negativo</strong>";
        } else {
            $resultado = "é <strong>zero</strong>";
        }

        echo "<p>$resultado</p>";
    }
    ?>
</body>

</html>