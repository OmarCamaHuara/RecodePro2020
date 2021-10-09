create database platzi_operation;

create database if not exists platzi_operation;

show warnings;
SHOW database;
show table;

select database;

CREATE TABLE books(
    book_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT, 
    author_id INTEGER UNSIGNED, /*Es una referencia con author*/
    title VARCHAR(100) NOT NULL,
    `year` INTEGER UNSIGNED NOT NULL DEFAULT 1900, /*Palabras reservadas*/
    language VARCHAR(2) NOT NULL DEFAULT 'es' COMMENT 'ISO 639-1 Language',
    cover_url  VARCHAR(500),
    price DOUBLE(6,2) NOT NULL DEFAULT 10.0, /*dato numerico*/
    sellable TINYINT(1) DEFAULT 1,
    copies INTEGER NOT NULL DEFAULT 1,
    description TEXT
);
/**/
CREATE TABLE IF NOT EXISTS authors(
    author_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    nationality VARCHAR(3)
);
SELECT * FROM author;
SELECT * FROM books;

drop table author; /*Eliminar una table con todo su contenido*/
/*Mostrar todas las tables con sus propiedades */
DESCRIBE authors;
DESC books;
SHOW FULL COLUMNS FROM books;

CREATE TABLE clients (
    client_id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50),
    email VARCHAR(100) NOT NULL UNIQUE, /*Candado*/
    birthdate DATETIME, /*Cumpleanos*/
    gender ENUM('M', 'F', 'ND') NOT NULL,
    active TINYINT(1) NOT NULL DEFAULT 1, /*Para apagar al usuario  no borrarlo 'de alta' */
    create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, /*'yyyy-mm-dd hh:mm:ss', Numero epock, es un numero entero, TOMARA LA HORA DEL COMPUTADOR*/
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE IF NOT EXISTS operations(
    operation_id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    book_id INTEGER UNSIGNED NOT NULL,
    client_id INTEGER UNSIGNED NOT NULL,
    `type` ENUM('V','P','D'),
    create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    finshed TINYINT(1) NOT NULL DEFAULT '0'
);

INSERT INTO authors (author_id, name, nationality)
VALUES ('','Juan Rulfo', 'MEX');

INSERT INTO authors(name,nationality)
VALUES('Gabriel Garcia Marques', 'COL')

INSERT INTO authors
VALUES('','Juan Gabriel Vasquez', 'COL')

SELECT * FROM authors;

INSERT INTO authors(name, nationality)
VALUES ('Julio Cortazar', 'ARG'), 
('Isabel Allende','CHI'),
('Octavio Paz', 'MEX'),
('Juan Carlos Onetti', 'URU');

INSERT INTO authors
VALUES(16,'Pablo Neruda','BOL');

INSERT INTO clients (client_id, name, email, birthdate, gender, active) VALUES
	(1,'Maria Dolores Gomez','Maria Dolores.95983222J@random.names','1971-06-06','F',1),
	(2,'Adrian Fernandez','Adrian.55818851J@random.names','1970-04-09','M',1),
	(3,'Maria Luisa Marin','Maria Luisa.83726282A@random.names','1957-07-30','F',1),
	(4,'Pedro Sanchez','Pedro.78522059J@random.names','1992-01-31','M',1);

SELECT * FROM clients;

INSERT into clients(name, email, birthdate,gender, active)
VALUES('Pedro Sanchez','Pedro.78522059J@random.names','1992-01-31','M',0))
ON DUPLICATE KEY UPDATE active = VALUES(active);
/*No funciono*/

INSERT INTO books(title, author_id)
VALUES ('El Laberinto de la Soledad', 6);

SELECT * FROM books; /*Rara consola books\G*/

INSERT INTO books (title, author_id, `year`)
VALUES('Vuelta al Laberinto de la Soledad',
(
    SELECT author_id
    FROM authors
    WHERE name = 'Octavio Paz'
    LIMIT 1
), 1960
);