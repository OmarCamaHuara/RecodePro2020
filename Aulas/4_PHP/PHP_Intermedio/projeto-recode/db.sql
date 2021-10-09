DROP DATABASE IF EXISTS recode;
CREATE DATABASE IF NOT EXISTS recode;

CREATE TABLE recode.students(
     id INT NULL PRIMARY KEY AUTO_INCREMENT,
     name VARCHAR(80) NOT NULL,
     telphone VARCHAR(30)
);

SELECT * FROM students;

INSERT INTO students (name, telphone) VALUES ('Edik', '999999');
INSERT INTO students (name, telphone) VALUES ('Omar', '11980808286');

SELECT COUNT(*) AS Total_student
FROM students


