create database phpunit;

use phpunit;

CREATE TABLE produtos(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR (255) NOT NULL,
    preco FLOAT NOT NULL,
    quantidade INT NOT NULL,
    total FLOAT NOT NULL
);