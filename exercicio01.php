<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se o número é par ou ímpar</title>
</head>

<body>
    <h1>par ou impar</h1>

    <form method="post">
        <label for="numero">escreva um numero</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        if ($numero % 2 == 0) {
            $resultado = "$numero é par";
        } else {
            $resultado = "$numero é impar";
        }

        echo "<p>$resultado</p>";
    }
    ?>

</body>

</html>