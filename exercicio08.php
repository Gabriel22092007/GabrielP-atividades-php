<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar quantos números pares existem entre 1 e o número informado</title>
</head>
<body>
    <h1>numeros pares</h1>
    <form method="post" action="">
        <label for="numero">escreva um numero</label>
        <input type="number" name="numero" id="numero" min="1" required>
        <button type="submit">Enviar</button>
    </form>
    
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;
    
    $contapar = 0;
    
    if ($numero > 0) {
        for ($i = 1; $i <= $numero; $i++) {
            if ($i % 2 == 0) {
                $contapar++;
            }
        }
        
        echo "tem $contapar numeros pares entre 1 e $numero";
    } else {
    }
} else {
}
?>
</body>
</html>