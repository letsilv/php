<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

</head>
<body>

    <h5>Preencha o formulario<h5>

<style type="text/css">
        h3 {
            color:blue;
            border-bottom:1px solid blue;
            width:36%;
        }
        label, input {
            color:DarkKhaki;
            font-weight:bold;
            margin-left:5px;
        }
        body {
        background-color: Beige; /*define a cor do fundo*/
        font-family: Arial;
        font-size:20px;
        padding:1.3%;
}
.botao {
    width: 120px; /* Largura do botao */
    height: 50px; /* altura do botao */
    background-color: DarkKhaki;
    color: azure;
    cursor: pointer; /* altera o ponteiro do mouse */
    border-radius: 5px;
    font-size: 1.1em;
    mergin-top: 10px;
}
        </style>
    <form name="rpg" method="post" action>
        <p>
            <label for="nome">Nome:</label> <br>
            <input type="text" name="nome" maxLenght="40" required>
        </p>
        <p>
            <label for="rpgop">Estado </label><br>
                <input type="radio" name="rpgop">Solteira/o
                <input type="radio" name="rpgop">Casado/a
                <input type="radio" name="rpgop">Separado/a
                <input type="radio" name="rpgop">Divorciado/a    
                <input type="radio" name="rpgop">Viúva/o
        </p>
        <p>
            <label for="nome">Endereço de E-mail</label> <br>
            <input type="text" name="email" maxLenght="60" required>
        </p>
        <p>
            <label for="nome">Idade</label> <br>
            <input type="number" name="idade"required>
        </p>
        <p>
            <input class="botao"type="submit" name="executar" value="executar">
        </p>
    </form>
    <?php
        if(isset($_POST["executar"]))
            {
                echo "<h1> Resultado </h1>";
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $idade = $_POST["idade"];
                echo "<h5> Nome: $nome </h5>";
                echo "<h5> E-Mail: $email </h5>";
                echo "<h5> Idade: $idade</h5>";

                include "rodape.php";
            }
    ?>

    
</body>
</html>