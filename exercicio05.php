<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Verificar se o número é perfeito (soma dos divisores = número)</title>
</head>

<body>
    <h1>numeros amigos</h1>
    <form method="post" action="">
        <label for="numero1">primeiro numero</label>
        <input type="number" name="numero1" id="numero1" min="1" required><br><br>

        <label for="numero2">segundo numero</label>
        <input type="number" name="numero2" id="numero2" min="1" required><br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = isset($_POST['numero1']) ? (int)$_POST['numero1'] : 0;
        $num2 = isset($_POST['numero2']) ? (int)$_POST['numero2'] : 0;

        function divisortotal($n)
        {
            $total = 0;
            for ($i = 1; $i <= $n / 2; $i++) {
                if ($n % $i == 0) {
                    $total += $i;
                }
            }
            return $total;
        }

        $totaldiv1 = divisortotal($num1);
        $totaldiv2 = divisortotal($num2);

        if ($totaldiv1 == $num2 && $totaldiv2 == $num1) {
            echo "<p>$num1 e $num2 <strong>é amigos</strong></p>";
        } else {
            echo "<p>$num1 e $num2 <strong>não é amigos</strong></p>";
        }
    }
    ?>
</body>

</html>