# Gestion Bancaire - Architecture MVC

## Description du projet
Ce projet est une application web de gestion bancaire développée en PHP en utilisant l'architecture MVC. 
Elle permet de gérer les clients, leurs comptes bancaires et les administrateurs du système.

## Architecture du projet
L'application suit une structure organisée en plusieurs dossiers selon l'architecture MVC :

- **Controllers/** : Contient les fichiers qui gèrent la logique métier et la communication entre les modèles et les vues.
- **DAO/** : Contient les classes qui interagissent directement avec la base de données (Data Access Object).
- **Models/** : Définit les structures des données utilisées dans l'application.
- **Views/** : Contient les fichiers HTML/PHP qui affichent les données à l'utilisateur.
- **Index.php** : Point d'entrée de l'application, qui route les requêtes vers les bons contrôleurs.
- **CSS/JS/** : Contient les fichiers de style et les scripts nécessaires à l'affichage et aux interactions.
- **MySQL** : Base de données utilisée pour stocker les informations des clients, comptes et administrateurs.

## Configuration et installation

### 1. Prérequis
exécution du projet,  :
-  serveur local XAMPP,  
- PHP 
- MySQL
- vs code
  
### 2. Installation du projet
1. **creation du dépôt git**
2.  git  https://github.com/
    gestion-bancaire
   ```

4. **Configuration de la base de données**
   -creation de la database gestion-bancaire mysql dans phpAdin.
   -  informations de connexion dans `dao/connexion.php`  :
     ```php
     $host = 'localhost';
     $dbname = 'gestion_bancaire';
     $username = 'root';
     $password = '';
     ```

5. **Démarrer le serveur PHP**
   connexion a : `http://localhostadmin.

## Fonctionnalités
- **Gestion des administrateurs** : Connexion, création et suppression d'administrateurs.
- **Gestion des clients** : Ajout, modification et suppression de clients.
- **Gestion des comptes bancaires** : Création, consultation et suppression de comptes.
- **Authentification** : Sécurisation de l'accès aux données.

## Structure des fichiers
```
/gestion-bancaire
│── controllers/
│   ├── AuthController.php
│   ├── ClientController.php
│   ├── CompteController.php
│── dao/
│   ├── connexion.php
│   ├── AdminDao.php
│   ├── ClientDao.php
│   ├── CompteDao.php
│── models/
│   ├── Admin.php
│   ├── Client.php
│   ├── Compte.php
│── views/
│   ├── login.php
│   ├── clients.php
│   ├── comptes.php
│── css/
│── js/
│── index.php
│── .htaccess
│── README.md
```
## Auteurs
Projet développé par Bahija BOUJNAH dans le cadre de l'apprentissage du développement web en PHP avec l'architecture MVC.

