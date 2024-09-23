<?php
// Passo 1 - Array
$produtos = [
    1 => [
        'nome' => 'Snack Saudável',
        'descricao' => 'Snack feito com frutas desidratadas',
        'preco' => 15.90
    ],
    2 => [
        'nome' => 'Refeição Congelada Fitness',
        'descricao' => 'Refeição balanceada, rica em proteínas',
        'preco' => 25.99
    ],
    3 => [
        'nome' => 'Suco Natural Detox',
        'descricao' => 'Suco natural a base de frutas e vegetais',
        'preco' => 8.75
    ]
    ];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css"> 
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    
    <div class="produtos">
        <?php
        // Passo 2 - Iterar 
        foreach ($produtos as $id => $produto) {
            echo '<div class="produto">';
            echo '<h2>' . $produto['nome'] . '</h2>';
            echo '<p>' . $produto['descricao'] . '</p>';
            echo '<p><strong>Preço:</strong> R$ ' . number_format($produto['preco'], 2, ',', '.') . '</p>';
            echo '<a href="detalhes_produtos.php?id=' . $id . '">Ver detalhes</a>'; 
            echo '</div>';
            echo '<hr>';
        }
        ?>
    </div>
    <a href="cadastro.php" class="voltar-button">Voltar para Cadastro</a>

</body>
</html>
