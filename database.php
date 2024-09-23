<?php
$host = 'localhost'; 
$user = 'root'; 
$pass = ''; 

// Criar conexão
$conn = new mysqli($host, $user, $pass);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Conexão bem-sucedida!<br>";

// Criar banco de dados
$sql = "CREATE DATABASE saborela_2024";
if ($conn->query($sql) === TRUE) {
    echo "Banco de dados criado com sucesso!";
} else {
    echo "Erro ao criar banco de dados: " . $conn->error;
}

// Fechar a conexão
$conn->close();
?>
