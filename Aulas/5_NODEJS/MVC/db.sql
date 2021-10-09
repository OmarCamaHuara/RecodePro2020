CREATE DATABASE blog;


CREATE TABLE postagens (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(80),
    descricao TEXT
)

SELECT * FROM postagens;

INSERT INTO postagens VALUES ('default', 'PHP', 'Un liguagem unico');