CREATE DATABASE cursophp;

CREATE TABLE jobs(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(32), 
    description VARCHAR(150),
    visible TINYINT(1),
    months INT(11)
)