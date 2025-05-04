# Résumé du projet : Application de Gestion de Stock

## Objectif de l'application :

Développer une application web permettant de gérer les stocks d'une entreprise, incluant la gestion des produits, des fournisseurs et des commandes, le tout dans un environnement Dockerisé pour une portabilité et une scalabilité optimales.

## Technologies utilisées

- PHP 8.0 avec Apache : pour le développement de l'application web.

- MySQL 8.0 : pour la gestion de la base de données relationnelle.

- PhpMyAdmin : pour l'administration de la base de données via une interface web.

- Docker & Docker Compose : pour la containerisation et l'orchestration des services.

## Architecture du projet :

- `DM-DOCKER-ESTEBAN` : Dossier contenant Dm docker
    - `docker`
        - `mysql` : Base de données
    - `docs` : Compte rendu dm
        - `screens` : Screens application
    - `src` : Architecture application
        - `config` : Lien a la database
        - `controllers` : Les controllers
        - `models` : Les classes
        - `views` : Pages d'acceuil
            - `commandes` : Page a propos des commandes
            - `fournisseurs` : Page a propos des fournisseurs
            - `produits` : Page a propos des produits
    - `docker-compose.yml` : 
    - `Dockerfile` 

##  Fonctionnalités implémentées

- Gestion des produits : Ajout, modification, suppression et affichage des produits en stock.
- Gestion des fournisseurs : Ajout, modification, suppression et affichage des fournisseurs.
- Gestion des commandes : Création et suivi des commandes passées.
- Interface utilisateur : Interface web simple pour interagir avec l'application.
- Administration de la base de données : Accès à PhpMyAdmin pour gérer la base de données.

##  Instructions d'installation et de configuration

Prérequis :
1. Installer Docker et Docker Compose.

2. Faire la commande dans le powershell ```docker-compose up --build -d``` pour allumer les conteners

3. Accéder à l'application :

Application web : http://localhost:8080

PhpMyAdmin : http://localhost:8081

**Configuration de la base de données**

*Hôte* : mysql

*Nom de la base de données* : gestion_stock

*Utilisateur* : user

*Mot de passe* : userpass

## Guide d'utilisation succinct
Accéder à l'application via http://localhost:8080.

Utiliser le menu pour naviguer entre les sections : Produits, Fournisseurs, Commandes.

Ajouter, modifier ou supprimer des entrées selon les besoins.

Pour administrer la base de données, accéder à PhpMyAdmin via http://localhost:8081 en utilisant les identifiants fournis.

## Résultats obtenus

L'application web est pleinement fonctionnelle, permettant la gestion des produits, des fournisseurs et des commandes.

L'environnement Dockerisé assure une portabilité et une isolation optimales des services.

L'interface PhpMyAdmin facilite l'administration de la base de données.




