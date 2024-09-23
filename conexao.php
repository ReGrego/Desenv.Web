<?php
// Passo 1 - EA3
$host = 'localhost';
$db   = 'saborela_2024';
$user = 'root'; 
$pass = ''; 
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    //conexão bem-sucedida
} catch (\PDOException $e) {
    //erro na conexão
    echo "Erro de conexão: " . $e->getMessage();
}
?>
