<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Conta Corrente</title>
    <link rel="stylesheet" href="stilos_cc.css">
</head>
<body style="background-color:white; color:black;font-size:20px;">
    <?php
    echo "<ah3>CONTROLE BANCÁRIO - CADASTRO DE CONTA CERRENTE</hr>";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){ //Verifica se foi efetuado o cadastro dos dados no formulário de conta corrente
        $nome_correntista = $_POST["nome"];
        echo "<strong><br>Nome do correntista.................: </strong>" .$nome_correntista;
        $banco = $_POST["banco"];
        $Nome_Bnaco = "";

        if($banco == "#") // Verificar se o banco foi selecionado
        {
            echo "<h3>Por favor... selecione o banco!";
            echo "<p><a href-'conta_corrente.html'>Cadstro da ContaCorrente</a></p>";
            return;
        }
        if($banco == "caixa")
            $Nome_Banco = "Caixa Econônica Federal";
        else if($banco == "brasil")
            $Nome_Banco = "Banco do Brasil";
        else if($banco == "mercantil")
            $Nome_Banco = "Banco Mercantil";
        else if($banco == "santander") 
            $Nome_Banco ="Banco Santander";
        else
            $Nome_Banco = "Banco Bradesco";

        echo "<br><strong>Nome da Intituição Financeira: </strong>" . "<em>$Nome_Banco</em>";

        $agencia = $_POST["agencia"];
        $conta   = $_POST["conta_corrente"];
        $data_abertura = $_POST["data_abertura"];
        $saldo_inicial = $_POST["saldo_inicial"];
        $deposito = $_POST["deposito"];
        echo "<br><strong>Agência: </strong>" . $agencia;
        echo "<br><strong>Conta Corrente: </strong>" . $conta;
        echo "<br><strong>Data da abertura: " . $data_abertura;
        echo "<br><strong>Saldo Inicial: R$ " . number_format($saldo_inicial,2,",",",");
        echo "<br><strong>Depósito: R$ " . number_format($deposito,2,",",",");
    }
    else
    {
        echo "<h3>Atenção... você tem que cadastrar os dados primeiro!<h3>";
        echo "<a href='conta_corrente.html'>Cadastro de Conta Corrente</a>";
    }
    ?>
</body>
</html>