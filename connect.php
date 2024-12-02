<?php
$servername = "localhost"; 
$username = "root"; 
$password = "Hfse@2024"; 
$dbname = "cafedouro"; 

// Cria a conexão com o banco de dados
$conexao = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão com o banco foi bem sucedida
if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>
