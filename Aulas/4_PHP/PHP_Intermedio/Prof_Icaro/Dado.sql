CREATE DATABASE dado;

CREATE TABLE bancos(
    id_codigo int(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(15) NOT NULL
);

CREATE TABLE pessoas(
    id_CPF BIGINT(15) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(25) NOT NULL
);

DROP TABLE pessoas;

CREATE TABLE contas_correntes(
    id_nro int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_bancos INT NOT NULL,
    id_pessoas BIGINT NOT NULL,
    FOREIGN KEY (id_bancos) REFERENCES bancos(id_codigo),
    FOREIGN KEY (id_pessoas) REFERENCES pessoas(id_CPF)
);

DROP TABLE contas_correntes;

INSERT INTO bancos(id_codigo, nome) 
VALUES (001, "Banco do Brasil"),
(033, "Santader"),
(237, "Bradesco"),
(341, 'Itau'); 

SELECT * 
FROM bancos;

INSERT INTO pessoas(id_CPF, nome)
VALUES (86277635697, "Jose da Silva"),
(77277699998, "Manuel da Silva"),
(66277635699, "Maria dos Santos");

INSERT INTO pessoas(id_CPF, nome)
VALUES (21545212123, "Omar Cama");

SELECT * 
FROM pessoas;


INSERT INTO contas_correntes(id_nro, id_bancos, id_pessoas)
VALUES(98876788, 001,  86277635697);

INSERT contas_correntes(id_nro, id_bancos, id_pessoas)
VALUES (5455122, 033, 66277635699),
(5451212, 341, 77277699998),
(4545333, 001, 77277699998);

SELECT * 
FROM contas_correntes;

422 Banco Safra
1 - Consultar todas as pessoas que tem conta no Santander (inner join);
2 – Consultar todos os bancos que possuem pessoas ou não (left outer join);
3 – Consultar pessoas que não possuem conta em nenhum banco (right outer join);

SELECT p.nome
FROM contas_correntes AS cc
JOIN pessoas AS p
ON cc.id_pessoas = p.id_CPF
JOIN bancos AS b
ON cc.id_bancos = b.id_codigo 
WHERE b.id_codigo = 033


SELECT b.nome
FROM contas_correntes AS cc
    LEFT JOIN pessoas AS p
    ON cc.id_pessoas = p.id_CPF
    LEFT JOIN bancos AS b
    ON cc.id_bancos = b.id_codigo

