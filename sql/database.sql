CREATE DATABASE packages;

USE packages;

CREATE TABLE package (
    id_package INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);
