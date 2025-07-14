<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber um número e exibir a sequência de Fibonacci até esse número</title>
</head>

<body>
    <h1>sequencia de fibonacci</h1>
    <form method="post" action="">
        <label for="numero">escreva um numero</label>
        <input type="number" name="numero" id="numero" min="1" required>
        <button type="submit">Enviar</button>
    </form>

    <?php
    function fibonacci($i)
    {
        if ($i < 2)
            return $i;
        else
            return fibonacci($i - 1) + fibonacci($i - 2);
    }

    for ($i = 0; $i <= 10; $i++) {
        echo fibonacci($i) . " ";
    }
    ?>
</body>

</html>