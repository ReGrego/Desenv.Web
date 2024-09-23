<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title> Sabor 2024 </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <h1> Sabor 2024 </h1>
    <p> Preencha o formulário abaixo: </p>

    <form method="post" name="form" action="envia.php">
        <fieldset>
            <legend> Cadastro </legend>
            <label>Nome: </label><br>
            <input type="text" name="nome" required="required" placeholder="Digite seu nome completo"><br>
            <label>E-mail: </label><br>
            <input type="text" name="email" required="required" placeholder="Digite seu endereço de e-mail"><br>
            <label>Data de nascimento: </label><br>
            <input type="date" name="nascimento" required="required"><br>
            <label>Residência: </label><br>
            <input type="text" name="residencia" required="required" placeholder="Digite seu endereço"><br>
            <label>Preferências de alimentação: </label><br>
            <input type="text" name="preferencias" required="required" placeholder="Escreva suas preferências alimentares"><br>

            <button class="salvar-button">Salvar</button>
            <button class="reset-button">Limpar</button>
        </fieldset>
    </form>

    <a href="produtos.php" target="_blank" class="produtos-link">Lista de Produtos</a>
</body>
</html>
