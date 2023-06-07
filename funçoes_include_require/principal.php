<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diferença entre as funções Require e Incluse</title>
</head>
<body>
    <?php
        include "cabeç.php"; //A função include importa bloco de códigos

        require "rodape.php";
    ?>

    <form name="string" method="post" action="">
        <p>
            <label for="nome">Nome:</label>
            <imput type="text" nome="nome" maxlength="50" size="40" require 
            placeholder="Informe seu nome completo">
        </p>
        <p>
            <label for="email">E-mail:</label>
            <imput type="email" nome="email" maxlength="30" size="30" require>
        </p>
        <p>
            <input type="submit" nome="mostrar" value="Mostrar">
        </p> 
    </form>   
<?php
    if(isset($_POST["mostrar"]))
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        echo "<p>Converte pa MAIÚSCULAS</p>";
        echo "<p>Nome: " . strtoupper($nome);

        echo "<p>Converte pa MINÚSCULAS</p>";
        echo "<p>E-mail: " . strtolower($email) ; "</p>";
    }

   require "rodape.php";
?>

    <p><a href="index.php">Voltar</a></p>
</body>
</html>