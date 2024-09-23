<?php
include 'conexao.php'; 

// Passo 3 - EA3
if (isset($_GET['remover_id'])) {
    $remover_id = $_GET['remover_id'];

    
    $stmt = $pdo->prepare("DELETE FROM produtos WHERE id = :id");
    $stmt->bindParam(':id', $remover_id);
    $stmt->execute();

    
    header("Location: produtos_DB.php");
    exit();
}

// Passo 2 - EA3
$stmt = $pdo->query("SELECT * FROM produtos");
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css"> 
    <title>Lista de Produtos (Banco de Dados)</title>
</head>
<body>
    <h1>Lista de Produtos (Banco de Dados)</h1>
    
    <div class="produtos">
        <?php if ($produtos): ?>
            <?php foreach ($produtos as $produto): ?>
                <div class="produto">
                    <h2><?php echo htmlspecialchars($produto['nome']); ?></h2>
                    <p><?php echo htmlspecialchars($produto['descricao']); ?></p>
                    <p><strong>Preço:</strong> R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>
                    <a href="detalhes_produtos.php?id=<?php echo $produto['id']; ?>">Ver detalhes</a> 
                    <hr>
                    <a href="?remover_id=<?php echo $produto['id']; ?>" class="remover-button">Remover</a> 
                    <a href="alterar.php?id=<?php echo $produto['id']; ?>" class="alterar-button">Alterar</a>

                    <hr>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhum produto encontrado.</p>
        <?php endif; ?>
    </div>

    <a href="cadastro.php" class="voltar-button">Voltar para Cadastro</a>

</body>
</html>
