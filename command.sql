CREATE TABLE tb_contact(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(60) UNIQUE,
    email VARCHAR(60),
    tel VARCHAR(20),
    address VARCHAR(50)
);