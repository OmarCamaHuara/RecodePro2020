CREATE DATABASE carro;

CREATE TABLE carros (
    id_carro INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    marca VARCHAR(30) NOT NULL,
    modelo VARCHAR(30) NOT NULL,
    ano VARCHAR(30) NOT NULL
);

INSERT INTO carros (id_carro, marca, modelo, ano) 
VALUES (1, 'Fiat', 'Uno', '2002'),
(2, 'Chevrolet', 'Camaro', '2016'),
(3, 'Ford', 'Fiesta', '2014'),
(4, 'Ford', 'Ka', '2001'),
(5, 'Chevrolet', 'Monza', '2001');

SELECT *
FROM carros;
