<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3>Efetua o cálculo e exibe a soma de 2 números</h3>";
        // Recuperando os valores informados nas caixas num1 e num2
        $numero1 = $_GET["num1"];
        $numero2 = $_GET["num2"];
        $soma = $numero1 + $numero2;
        echo "Número1: " . $numero1;
        echo "<br>Número2: " . $numero2;
        echo "<hr>A soma é " . $soma;
    ?>
</body>
</html>