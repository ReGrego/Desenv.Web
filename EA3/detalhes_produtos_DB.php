<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 
    $stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$produto) {
        echo "Produto não encontrado.";
        exit;
    }
} else {
    echo "ID do produto não especificado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Detalhes do Produto</title>
</head>
<body>
    <h1><?php echo htmlspecialchars($produto['nome']); ?></h1>
    <p><strong>Descrição:</strong> <?php echo htmlspecialchars($produto['descricao']); ?></p>
    <p><strong>Preço:</strong> R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>

    <a href="produtos_DB.php" class="voltar-button">Voltar para Lista de Produtos</a>
</body>
</html>
