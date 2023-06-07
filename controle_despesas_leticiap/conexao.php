<?php
$host = "localhost"; // Servidor local 
$user = "root"; // Usuário do servidor
$pass = "usbw"; //Senha do banco de dados 
$banco = "bddespesas_b"; // Nome do banco 

//Faz a conexão com o banco de dados, caso não conseguir será apresentada mensagem de erro pelo comando msqli_error
$conexao    =   mysqli_connect($host, $user, $pass) or die (mysqli_error($conexao)); 

mysqli_select_db($conexao, $banco); // Seleciona através da conexão o banco
?>