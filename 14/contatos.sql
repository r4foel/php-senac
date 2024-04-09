CREATE DATABASE IF NOT EXISTS contatos;
-- Criando o banco de dados "contatos"

-- Usando o banco de dados "contatos"
USE contatos;

-- Criando a tabela "contatos_info"
CREATE TABLE IF NOT EXISTS contatos_info (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR (20),
    email VARCHAR(100) NOT NULL
);

-- Criando um usuario para acessar o banco de dados 
CREATE USER 'usuario_contatos'@'localhost' IDENTIFIED BY 'senha123';

-- Concedendo permissões para o usuario no banco "contatos"
GRANT ALL PRIVILEGES ON contatos.* TO 'usuario_contatos'@'localhost';
FLUSH PRIVILEGES; 




