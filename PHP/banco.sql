CREATE DATABASE IF NOT EXISTS crud;

-- Seleciona o banco de dados "crud"
USE crud;

-- Cria a tabela "usuario"
CREATE TABLE IF NOT EXISTS usuario (
    id INT PRIMARY KEY AUTO_INCREMENT, 
    nome VARCHAR(100) NOT NULL, 
    email VARCHAR(100)
);
