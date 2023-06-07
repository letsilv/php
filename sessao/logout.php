<?php
session_start(); // inicia a sessão
session_destroy(); // elimina todas as variáveis da sessão
echo "<a href='index.php'>Voltar</a>";
?>