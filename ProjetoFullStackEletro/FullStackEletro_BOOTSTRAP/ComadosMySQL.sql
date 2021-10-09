/*
    CONTEUDO
    - Grupos de comandos
        -DDL (Data Definition Language)
            - CREATE DATABASE
            - CREATE TABLE
            - ALTER TABLE
            - DROP TABLE
        - DML (Data Manipulation Language)
            - SELECT            
            - INSERT 
            - UPDATE
            - DELETE
        - DCL (Data Control Language)

*/
SELECT *
FROM produtos;

SELECT *
FROM usuario;

DESC produtos;

SELECT *
FROM produtos
WHERE categoria = 'geladeira';

SELECT *
FROM produtos
WHERE categoria = 'microondas';

UPDATE produtos
SET categoria = 'geladeira'
WHERE idproduct = 1
LIMIT 1;

SELECT *
FROM produtos
WHERE preco < 2000;

/*Usar Delete asi es mas seguro*/

SELECT * -- DELETE
FROM produtos
WHERE idproduct = 10;

CREATE USER user3 @ localhost 
IDENTIFIELD WITH mysql_native_password
BY pass123

/* ------------- Integracao ------------*/

SELECT *
FROM produtos;

CREATE TABLE comentarios(
    comentario_id int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100),
    msg varchar(300),
    data datetime default now()
);

SELECT *
FROM comentarios;