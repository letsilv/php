<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo da Data e Hora em PHP</title>
</head>
<body>
    <?php
        echo "<h3>DATA E HORA EM PHP</h3>";
        date_default_timezone_set("America/Sao_Paulo");
        // Extraindo o dia, o mês, e o ano
        $dia = date("d"); // Extrai o dia da função date
        $mês = date("m"); // Extrai o mês da função date
        $ano = date("y"); // Extrai o ano da função date

     
        // Extraindo a hora, o minuto, e o segundo
        $hora = date("h");
        $minuto = date("i");
        $segundo = date("s");
       

        echo "<h3>Hoje é . $dia de $mês de . $ano</h3>";
        echo $dia . $mês . $ano;

        echo "<h3>Agora é $hora horas e . $minuto minutos</h3>";
        echo $hora . $minuto . $segundo;
        ?>
</body>
</html>