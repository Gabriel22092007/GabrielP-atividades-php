<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Verificar se o número é par ou ímpar.</title>
</head>

<body>

     <?php

     if ($valor % 2 == 0) {
          echo "par";
     } else {
          echo "impar";
     }

     echo !($valor % 2) ? "par" : "impar";
     ?>

</body>

</html>