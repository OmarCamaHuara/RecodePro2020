create database proyeto_node;

create table conteudos(
    id int auto_increment primary key,
    categoria varchar(50),
    conteudo varchar(200)
)

insert into conteudos (categoria, conteudo) 
values ('HTML', 'Curso feito para pessoas principiantes'),
('PHP', 'Avancado e com projeto'),
('JavaScript', 'Intermediario')

SELECT * FROM conteudos