CREATE DATABASE db_login;

CREATE TABLE tbl_user (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (50) NOT NULL,
    email VARCHAR (50) NOT NULL,
    password VARCHAR (255) NOT NULL
);

configure lib -> database.php if necesary