<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informar se um número é positivo, negativo ou zero</title>
</head>

<body>
    <h1>verificar o numero</h1>

    <form method="post">
        <label for="numero">escreva um numero:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        if ($numero > 0) {
            $resultado = "O número <strong>$numero</strong> é <strong>POSITIVO</strong>.";
        } elseif ($numero < 0) {
            $resultado = "O número <strong>$numero</strong> é <strong>NEGATIVO</strong>.";
        } else {
            $resultado = "O número é <strong>ZERO</strong>.";
        }

        echo "<p>$resultado</p>";
    }
    ?>
</body>

</html>