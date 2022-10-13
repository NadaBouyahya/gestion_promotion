DROP DATABASE IF EXISTS promoTEST;

CREATE DATABASE promoTEST;
USE promoTEST;

CREATE TABLE promotion(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(25)
);
-- INSERT INTO promotion(name) VALUES("promo1"),("promo2"),("promo3"),("promo4");