<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-BR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Mensalidade</title>
</head>
<body bgcolor="pink">
<?php
        echo "<h2>CÁLCULO DA MENSALIDADE</h2><hr>";
       echo "<dr>";

        $nome = "Leticia Pereira";
        $valor = "R$2.100,50";
        $ano = "2023";
        $parcelas = "6";
        $mensalidade = "R$350,08";

        echo "<dir>Nome do aluno......$nome</dir>";
        echo "<dir>Valor do curso..........$valor</dir>";
        echo "<dir>Ano..........$ano</dir>";
        echo "<dir>Quantidade de Parecelas.........$parcelas</dir>";
        echo "<dir>Valor da Mensalidade..........$mensalidade</dir>";
        
        echo "<h2>TIPO DE VARIÁVEIS UTILIZADAS</h2>";

        echo var_dump ($nome) . "<br>";
        echo var_dump ($valor) . "<br>";
        echo var_dump ($ano) . "<br>";
    ?>
</body>
</html>