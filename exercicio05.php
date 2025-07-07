<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ver numeros amigos</title>
</head>
<body>
    <h1>ver numeros amigos</h1>
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

        function somaDivisores($n) {
            $soma = 0;
            for ($i = 1; $i <= $n / 2; $i++) {
                if ($n % $i == 0) {
                    $soma += $i;
                }
            }
            return $soma;
        }

        $somaDivNum1 = somaDivisores($num1);
        $somaDivNum2 = somaDivisores($num2);

        if ($somaDivNum1 == $num2 && $somaDivNum2 == $num1) {
            echo "<p>$num1 e $num2 <strong>são números amigos!</strong></p>";
        } else {
            echo "<p>$num1 e $num2 <strong>não são números amigos.</strong></p>";
        }
    }
    ?>
</body>
</html>
</body>
</html>