CREATE DATABASE packages;

USE packages;

CREATE TABLE package (
    id_package INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE auteur (
    id_auteur INT AUTO_INCREMENT PRIMARY KEY,
    nom_auteur VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE
);
