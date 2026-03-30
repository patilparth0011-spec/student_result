CREATE DATABASE student_db;

USE student_db;

CREATE TABLE results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    m1 INT,
    m2 INT,
    m3 INT,
    total INT,
    percentage FLOAT,
    grade VARCHAR(10),
    cgpa FLOAT
);