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

CREATE TABLE version (
    id_version INT AUTO_INCREMENT PRIMARY KEY,
    id_package INT NOT NULL,
    numero_version VARCHAR(50) NOT NULL,
    FOREIGN KEY (id_package) REFERENCES package(id_package) ON DELETE CASCADE 
);

ALTER TABLE package
ADD COLUMN id_auteur INT;

ALTER TABLE package
ADD CONSTRAINT fk_auteur
FOREIGN KEY (id_auteur) REFERENCES auteur(id_auteur) ON DELETE SET NULL;

select * from package;
