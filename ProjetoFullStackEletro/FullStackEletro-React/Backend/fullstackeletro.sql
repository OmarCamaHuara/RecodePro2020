-- Criando a DATA BASE
create database fullstckeletro;

-- Criando TABLA produto 
create table produtos(
	idproduct int auto_increment primary key,
    categoria varchar(50),
    imagen varchar(100),
    descripcao varchar (255),
    preco float(8,2),
    precoFinal float(8,2)
);

-- add Productos
insert into produtos (categoria, imagen, descripcao, preco, precoFinal)
value 
("geladeria", "./img/Geladera1.png",  "Geladeira Frost Free Brastemp Side Inverse  600 Litros",10389.00, 7019.00 ),
("geladeira", "./img/Geladera2.png", "Geladeira Frost Free Brastemp Side Inverse  300 Litros", 4389.00, 2019.00 ),
("geladeira", "./img/Geladera3.png", "Geladeira Frost Free Brastemp Side Inverse  600 Litros", 10389.00, 7019.00),
("fogao", "./img/Fogon3.png", "Fogon de 4 bocas con mesa de madera mais um horno", 4389.00, 2019.00),
("fogao", "./img/Fogon2.png", "Fogao 4 bocas con mesa de vidrio Samsung", 8389.00, 7019.00),
("microondas", "./img/microondas.jpg", "Microondas Frost Free Brastemp Side Inverse  50 Litros", 2389.00, 1019.00),
("microondas", "./img/microndas2.png", "Microondas Frost Free Brastemp Side Inverse  40Litros", 3389.00, 2019.00),
("microondas", "./img/microndas3.png", "Microondas Frost Free Brastemp Side Inverse  30 Litros", 1389.00, 1019.00),
("lavaRoupa", "./img/Labadora.png", "Lavadora Frost Free Brastemp Side Inverse  150 Litros", 2389.00, 1019.00 ),
("lavaRoupa", "./img/Labadora2.png", "Labadora Frost Free Brastemp Side Inverse  50Litros", 1389.00, 900.00),
("lavaLouca", "./img/lava.png", "Lava Louça Frost Free Brastemp Side Inverse  540Litros", 8389.00, 3019.00),
("lavaLouca", "./img/dishwasher.jpg", "Lava Louça Frost Free Brastemp Side Inverse  540Litros", 8390.00, 3019.00 );

-- Olhando o que aconteceu
select * from produtos;

-- Criando TABLE usuario
CREATE TABLE usuarios (
	idUsuarios INT PRIMARY KEY AUTO_INCREMENT,
    idProdutos INT NOT NULL,
    nome VARCHAR(25) NOT NULL,
    sobrenome VARCHAR(25) NOT NULL,
    cpf VARCHAR(25) NOT NULL,
    cep BIGINT(50) NOT NULL,
    telefone INT(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    FOREIGN KEY (idProdutos) REFERENCES produtos(idproduct)
);



-- ADD Usuarios
insert into usuarios (idProdutos, nome, sobrenome, cpf, cep, telefone, email)
value(10, "Victoria", "Vih", "242.265.585-58", 02470030, 11980808286, "victoria.js2023@gmail.com");


-- Olhando o que aconteceu
select * from usuarios;

CREATE TABLE comentarios (
    comentarios_id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    msg VARCHAR(150) NOT NULL
);

DROP TABLE comentarios;




SELECT p.categoria AS Categoria, p.imagen AS Imagen, p.precoFinal AS TOTAL, u.nome AS Nome, u.sobrenome AS Sobrenome, u.email AS Email
FROM produtos as p
        JOIN usuarios AS u
        ON p.idproduct = u.idProdutos;