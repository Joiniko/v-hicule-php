CREATE DATABASE IF NOT EXISTS esgi;
USE esgi;

CREATE TABLE IF NOT EXISTS vehicles (
                                        id INT AUTO_INCREMENT PRIMARY KEY,
                                        marque VARCHAR(30) NOT NULL,
    modele VARCHAR(30) NOT NULL,
    annee INT NOT NULL CHECK (annee >= 2000 AND annee <= YEAR(CURDATE()) + 1),
    motorisation ENUM('Diesel', 'Essence', 'Électrique') NOT NULL,
    photo VARCHAR(255) NOT NULL,
    collection BOOLEAN NOT NULL
    );
