# Tecnologias Usadas
- PHP
- MySQL (MariaDB)
- HTML/CSS
- XAMPP (para desenvolvimento local)

# Criar Banco de Dados
```sql
CREATE DATABASE saborela_2024;
USE saborela_2024;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL

# Inserir produtos no Banco de Dados

INSERT INTO produtos (nome, descricao, preco) VALUES
('Snack Saudável', 'Snack feito com frutas desidratadas', 15.90),
('Refeição Congelada Fitness', 'Refeição balanceada, rica em proteínas', 25.99),
('Suco Natural Detox', 'Suco natural à base de frutas e vegetais', 8.75);
