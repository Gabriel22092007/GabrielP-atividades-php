<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se uma palavra é um palíndromo</title>
</head>

<body>
    <h1>palavra palindromo</h1>
    <form method="post" action="">
        <label for="texto">escreva uma palavra</label>
        <input type="text" name="texto" id="texto" min="1" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST['texto'];

        if ($texto > 0) {
            $resultado = "<strong>$texto</strong> é <strong>polindromo</strong>";
        } elseif ($texto < 0) {
            $resultado = "<strong>$texto</strong> não é <strong>polindromo</strong>";
        } else {
        }

        echo "<p>$resultado</p>";
    }
    ?>

</body>

</html>