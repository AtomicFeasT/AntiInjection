create database antiinjection;

use antiinjection;

create table tbl_usuario(
id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(300) NOT NULL,
email VARCHAR(300) NOT NULL,
senha VARCHAR(50) NOT NULL,
data TIMESTAMP NOT NULL,
PRIMARY KEY (id));

INSERT INTO tbl_usuario (nome,email,senha,data)VALUES('João Almeida Gonçalves','jalmeidag@gmail.com','jgomes2001',now());
INSERT INTO tbl_usuario (nome,email,senha,data)VALUES('Maria Antonieta da Silva','mariacansada@gmail.com','meugatinho12',now());
INSERT INTO tbl_usuario (nome,email,senha,data)VALUES('Matheus Fernandes Moura','mateusfmoura@terra.com.br','159753g',now());
INSERT INTO tbl_usuario (nome,email,senha,data)VALUES('Lucia Constantine','lconstantine@outlook.com','lc1988',now());