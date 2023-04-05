<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Constant em PHP</title>
</head>
<body>
    <?php
        echo "<h3 align+'center'>EXEMPLO DE CONSTANT EM PHP</h3><hr>";
        // Definimdo a constant em PHP
        define("linguagem","PHP");
        // exibindo a constant linguagem
        echo "<strong>Linguagem </strong>" .linguagem;
        define("caracteristica","A caracteristica da linguagem <strong>PHP</strong>, é 
        que ela precisa de um <strong>servidor</strong> para compilar e exibir 
        no navegador");

        //Exibindo a constant caracteristica
        echo "<strong><p>Caracteristicas: </strong>" .
        caracteristica . "</p>";

    ?>
</body>
</html>