<?php
// Passo 3 - Detalhes
$produtos = [
    1 => [
        'nome' => 'Snack Saudável',
        'descricao' => 'Snack feito com frutas desidratadas',
        'preco' => 15.90,
        'detalhe' => 'Snack com alto valor nutricional com apenas 100kcal, ideal para lanches rápidos e saudáveis.'
    ],
    2 => [
        'nome' => 'Refeição Congelada Fitness',
        'descricao' => 'Refeição balanceada, rica em proteínas',
        'preco' => 25.99,
        'detalhe' => 'Refeição prática e saudável, rica em proteínas e baixa em carboidratos. Ideal para quem busca manter a forma.'
    ],
    3 => [
        'nome' => 'Suco Natural Detox',
        'descricao' => 'Suco natural a base de frutas e vegetais',
        'preco' => 8.75,
        'detalhe' => 'Suco detox sem açúcar feito com ingredientes frescos e naturais, auxilia na desintoxicação do organismo.'
    ]
];

// URL
if (isset($_GET['id'])) {
    $id = (int) $_GET['id']; 

    
    if (isset($produtos[$id])) {
        $produto = $produtos[$id];
    } else {
        echo "Produto não encontrado!";
        exit;
    }
} else {
    echo "ID de produto não fornecido!";
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
    <h1>Detalhes do Produto</h1>

    <h2><?php echo $produto['nome']; ?></h2>
    <p><strong>Descrição:</strong> <?php echo $produto['descricao']; ?></p>
    <p><strong>Detalhes:</strong> <?php echo $produto['detalhe']; ?></p>
    <p><strong>Preço:</strong> R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>

    <a href="produtos.php">Voltar para a lista de produtos</a>
</body>
</html>



