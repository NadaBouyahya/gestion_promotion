DROP DATABASE IF EXISTS projet1;

CREATE DATABASE projet1;
USE projet1;

CREATE TABLE promotion(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(25)
);
INSERT INTO promotion(nom) VALUES("promo1"),("promo2"),("promo3"),("promo4");
