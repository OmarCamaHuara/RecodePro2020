SELECT * FROM authors;
SELECT * FROM books;
SELECT * FROM clients;

SELECT name FROM clients; 

SELECT * FROM clients limit 10;

SELECT *
FROM clients
WHERE gender = 'F';

SELECT birthdate
FROM clients;

SELECT year(birthdate)
FROM clients;

SELECT NOW();

SELECT YEAR(NOW());

SELECT YEAR(NOW()) - YEAR(birthdate)
FROM clients;

SELECT name, YEAR(NOW())-YEAR(birthdate) AS IDADE
FROM clients;

SELECT * 
FROM clients
WHERE name LIKE '%aave%';

SELECT name, email, YEAR(NOW()) - YEAR(birthdate) AS Age, gender
FROM clients
WHERE gender = 'F'
AND name LIKE '%op%';

/*Hacer de datos informacion, cruzar datos*/


SELECT count(*)
FROM books;


SELECT count(*)
FROM authors;


SELECT *
FROM authors
WHERE author_id > 0 AND author_id <=5;


SELECT book_id, author_id, title
FROM books
WHERE author_id between 1 AND 5;


SELECT b.book_id, a.name, b.title, a.author_id
FROM books as b 
join authors as a
WHERE a.author_id between 1 AND 5;


SELECT name 
FROM authors
WHERE author_id = 4;

DESC transactions;

SELECT *
FROM transactions;
SELECT * 
FROM clients;
SELECT *
FROM books;


SELECT c.name, b.title, a.name as NomAut, t.type
FROM transactions as t
    join books as b
    on t.book_id = b.book_id
    join clients as c
    on t.client_id = c.client_id
    join authors as a
    on b.author_id = a.author_id
WHERE c.gender = 'F' AND t.type = 'sell';

SELECT c.name, b.title, a.name as NomAut, t.type
FROM transactions as t
    join books as b
    on t.book_id = b.book_id
    join clients as c
    on t.client_id = c.client_id
    join authors as a
    on b.author_id = a.author_id
WHERE c.gender = 'M' AND t.type IN ('sell', 'lend');

SELECT a.name, b.title
FROM authors AS a, books AS b
WHERE a.author_id = b.author_id
limit 10;

SELECT b.title, a.name
FROM books As b
    join authors AS a
    on a.author_id = b.author_id
limit 10;

SELECT a.author_id, a.name, a.nationality, b.title
FROM authors AS a  
    join books AS b
    on b.author_id = a.author_id
WHERE a.author_id between 1 AND 5
ORDER BY a.name; /*para ordenar Padron sin nada y desendente DESC*/

SELECT a.author_id, a.name, a.nationality, b.title
FROM authors AS a  
    left join books AS b
    on b.author_id = a.author_id
WHERE a.author_id between 1 AND 5
ORDER BY a.author_id;

SELECT a.author_id, a.name, a.nationality, COUNT(b.book_id)
FROM authors as a
    left join books as b
    on b.author_id = a.author_id
WHERE a.author_id between 1 AND 5
GROUP BY a.author_id
ORDER BY a.author_id;

/*Que nacionalidades hay??*/

SELECT a.nationality, COUNT(a.author_id)
FROM authors as a
GROUP BY a.nationality;

SELECT DISTINCT nationality
FROM authors
ORDER BY nationality;

/*Cuantos escritores hay de cada nacionalidad*/

SELECT nationality, COUNT(author_id) AS c_authors
FROM authors
WHERE nationality NOT IN('RUS', 'FRA','') /*Quitando el NOT solo traemos a RUS y FRA*/
GROUP BY nationality
ORDER BY c_authors DESC, nationality ASC;

/* Qual es el promedio/desviacion standar del precio de libros? */

SELECT price
FROM books
WHERE price < 10
GROUP BY price;

SELECT nationality, COUNT(book_id) AS libros, AVG(price) AS prom, STDDEV(price) AS std /*Promedio y desviacion estandar*/
FROM books AS b
    JOIN authors AS A
    ON a.author_id = b.author_id
GROUP BY nationality
ORDER BY libros DESC;

SELECT COUNT(b.book_id) AS libros ,MAX(b.price), MIN(b.price), a.nationality
FROM books AS b
    JOIN authors AS a
    ON b.author_id = a.author_id
GROUP BY a.nationality
ORDER BY libros DESC;


SELECT c.name, t.type, b.title, a.name AS authorName,
CONCAT(a.name, '(', a.nationality, ')') AS Autor, /*Contatenando tablas CONCAT*/ 
TO_DAYS(NOW()) - TO_DAYS(t.created_at) AS Ago/*hace cuanto en dias*/
FROM transactions AS t
    LEFT JOIN clients as c
    ON c.client_id = t.client_id
    LEFT JOIN books AS b
    ON b.book_id = t.book_id
    LEFT JOIN authors AS a
    ON a.author_id = b.author_id;

SHOW tables;

SELECT *
FROM authors
ORDER BY rand()
LIMIT 10;

/* Tenemos que ser muy especificos DELETE */

SELECT COUNT(*)
FROM authors;

DELETE FROM authors WHERE author_id = 161 limit 1;

SELECT client_id, name 
FROM clients
WHERE active <> 1;

SELECT client_id, name, active 
FROM clients
ORDER BY rand() limit 10;

UPDATE clients 
SET active = 0
WHERE client_id = 80
LIMIT 1;

SELECT client_id, name, email, active
FROM clients
WHERE client_id 
    IN (80, 65, 1, 61, 7, 19, 97);

UPDATE clients
SET active = 0
WHERE client_id IN (rand(client_id) LIMIT 10);

UPDATE clients
SET email = 'javier@gmail.com'
WHERE client_id = 7 
    OR client_id = 9;

UPDATE clients
SET active = 0
WHERE client_id IN (1, 6, 8, 27, 90)
    OR name LIKE '%Lopez%';

SELECT client_id, name, active
FROM clients
WHERE client_id 
    IN (1, 6, 8, 27, 90)
    OR name LIKE '%Lopez%';

SELECT *
FROM transactions;

TRUNCATE transactions;

SELECT DISTINCT nationality
FROM authors;

UPDATE authors 
SET nationality = 'GBR'
WHERE nationality = 'ENG';

SELECT COUNT(book_id)
FROM books;

SELECT COUNT(book_id), SUM(1)
FROM books;

SELECT SUM(price*copies)
FROM books
WHERE sellable = 1;

SELECT sellable, SUM(price* copies)
FROM books 
GROUP BY sellable;

SELECT COUNT(book_id), SUM(if(year < 1949, 1, 0)) AS 'Menor1949' /* Sum condicional if usada como contador*/
FROM BOOKS

SELECT COUNT(book_id)
FROM books
WHERE year <= 1950;

/* Condicionales */

SELECT COUNT(book_id),
    SUM(if(year <= 1950, 1, 0)) AS 'Menos1950',
    SUM(if(year >= 1950 AND year < 1990, 1, 0)) AS 'Menor1990',
    SUM(if(year >= 1990 AND year < 2000, 1,0 )) AS 'Menor2000',
    SUM(if(year >= 2000, 1, 0)) AS 'MenosHoje'
FROM books;

SELECT nationality, COUNT(book_id), 
    SUM(if(year < 1950, 1, 0)) AS 'menos1950',
    SUM(if(year >= 1950 and year < 1990, 1, 0)) AS 'menor1990',
    SUM(if(year >= 1990 and year < 2000, 1, 0)) AS 'menor2000',
    SUM(if(year >= 2000, 1, 0)) AS 'hoje'
FROM books as b
    JOIN authors as a
    ON a.author_id = b.author_id
WHERE a.nationality is NOT NULL
    GROUP BY nationality;

SHOW pruebaplatzi;

DESC authors;

alter table authors add column birthyear integer default 1930 after name;

ALTER TABLE authors 
MODIFY column birthyear year default 1950;

ALTER TABLE authors 
DROP column birthyear;

SHOW tables LIKE '%i%'; /* El LIKE se puede usar en TABLEs y DATABASEs*/

