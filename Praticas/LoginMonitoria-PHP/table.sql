create database sistema;

create table usuarios(
     id int not null primary key AUTO_INCREMENT,
     nome varchar(80) not null,
     imagem varchar(150),
     email varchar(80) not null UNIQUE,
     senha char(32) not null
)
drop table from id = '1';
select * from usuarios;

CREATE TABLE postagens (
     id_postagens INT PRIMARY KEY AUTO_INCREMENT,
     conteudo VARCHAR(400) NOT NULL,
     /*Llave foranea*/
     fk_usuario INT NOT NULL,
     FOREIGN KEY(fk_usuario) REFERENCES usuarios(id) ON DELETE CASCADE
);

SELECT * FROM postagens;