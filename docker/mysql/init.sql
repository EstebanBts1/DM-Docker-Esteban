-- Création de la base
CREATE DATABASE IF NOT EXISTS gestion_stock;
USE gestion_stock;

-- Table des fournisseurs
CREATE TABLE fournisseurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    contact VARCHAR(100)
);

-- Table des produits
CREATE TABLE produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    description TEXT,
    quantite INT DEFAULT 0,
    prix_unitaire DECIMAL(10,2),
    id_fournisseur INT,
    FOREIGN KEY (id_fournisseur) REFERENCES fournisseurs(id) ON DELETE SET NULL
);

-- Table des commandes
CREATE TABLE commandes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_produit INT,
    quantite_commandee INT,
    date_commande DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_produit) REFERENCES produits(id) ON DELETE CASCADE
);

-- Ajout de fournisseurs (données de test)
INSERT INTO fournisseurs (nom, contact) VALUES
('Fournisseur Alpha', 'alpha@example.com'),
('Fournisseur Beta', 'beta@example.com');

-- Ajout de produits (données de test)
INSERT INTO produits (nom, description, quantite, prix_unitaire, id_fournisseur) VALUES
('Produit A', 'Description du produit A', 50, 10.99, 1),
('Produit B', 'Description du produit B', 30, 5.49, 2);

-- Ajout de commandes (données de test)
INSERT INTO commandes (id_produit, quantite_commandee) VALUES
(1, 5),
(2, 2);