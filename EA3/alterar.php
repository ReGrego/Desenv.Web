<?php
include 'conexao.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$produto) {
        die("Produto não encontrado.");
    }
}

// Passo 4 -EA3
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $stmt = $pdo->prepare("UPDATE produtos SET nome = :nome, descricao = :descricao, preco = :preco WHERE id = :id");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("Location: produtos_DB.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css"> 
    <title>Alterar Produto</title>
</head>
<body>
    <h1>Alterar Produto</h1>
    
    <form action="" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($produto['nome']); ?>" required>
        
        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required><?php echo htmlspecialchars($produto['descricao']); ?></textarea>
        
        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" value="<?php echo htmlspecialchars($produto['preco']); ?>" step="0.01" required>

        <input type="submit" value="Atualizar Produto">
    </form>

    <a href="produtos_DB.php" class="voltar-button">Voltar para a lista de produtos</a>
</body>
</html>
