
CREATE DATABASE IF NOT EXISTS if0_37256044_slide_test;


USE if0_37256044_slide_test;


CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);
