<?php
include 'conexao.php'; 

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $pdo->prepare("DELETE FROM produtos WHERE id = :id");
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        
        header("Location: produtos_DB.php");
        exit();
    } else {
        echo "Erro ao remover o produto.";
    }
} else {
    echo "ID do produto não especificado.";
}
?>
