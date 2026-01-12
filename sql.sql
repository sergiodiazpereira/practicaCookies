CREATE DATABASE cookies;



USE cookies;



CREATE TABLE minijuegos(
    idMinijuego tinyint PRIMARY KEY AUTO_INCREMENT,
    nombreMinijuego varchar(50) NOT NULL UNIQUE
);



INSERT INTO minijuegos(nombreMinijuego)
VALUES ('Adivina el número'), ('Piedra Papel Tijera'), ('Memoria rápida'), ('Clicker infinito'), ('Trivia exprés');