# Gestion Banque - Projet PHP (MVC)

## 📚 Description
Ce projet est une application web de gestion bancaire développée en PHP en respectant l'architecture **MVC (Modèle-Vue-Contrôleur)** et utilisant un **DAO (Data Access Object)** pour la gestion des connexions et requêtes SQL.  

L'application permet de gérer les clients et les comptes bancaires avec les fonctionnalités suivantes :  
- Ajouter, modifier, supprimer des clients (avec conditions).
- Ajouter, modifier, supprimer des comptes (avec confirmation).
- Visualiser les listes de clients et comptes.

---

## 🧩 Qu'est-ce que l'architecture MVC ?
L’architecture **MVC** (Modèle - Vue - Contrôleur) est une méthode d’organisation du code qui permet de séparer :
- **Modèle (Model)** : contient la logique métier et la communication avec la base de données.
- **Vue (View)** : représente l’interface utilisateur (affichage des données).
- **Contrôleur (Controller)** : fait le lien entre la vue et le modèle, gère les actions de l’utilisateur et les envoie au modèle.

Cette architecture permet un code mieux organisé, plus facile à maintenir et à faire évoluer.

---

## 🔎 Qu’est-ce que le DAO (Data Access Object) ?
Le **DAO** est un design pattern qui encapsule l’accès à la base de données dans un objet dédié.  
Cela permet de centraliser toutes les opérations SQL dans des classes spécifiques et évite de mélanger la logique métier et les requêtes SQL.  
Ici, le fichier `connexion.php` dans le dossier `dao/` sert à établir et gérer la connexion PDO à la base de données.

---

## 🏗 Structure du projet

### ➡ `controllers/`
Contient les contrôleurs qui font le lien entre les vues et les modèles.  
- **auth-controller.php** : Gère la connexion et déconnexion des administrateurs.
- **clients-controller.php** : Gère les actions relatives aux clients (création, suppression, modification).
- **comptes-controller.php** : Gère les actions relatives aux comptes (création, suppression, modification).

---

### ➡ `dao/`
Contient les classes d’accès aux données.  
- **connexion.php** : Fichier qui gère la connexion PDO à la base de données.
- **adminDao.php** : (optionnel) Peut contenir des requêtes spécifiques à l'administration.

---

### ➡ `model/`
Contient la logique métier et les requêtes SQL.  
- **admin.php** : Modèle pour les données administrateurs.
- **clients.php** : Modèle pour la gestion des clients (ajout, suppression, mise à jour).
- **comptes.php** : Modèle pour la gestion des comptes bancaires (ajout, suppression, mise à jour, vérifications).

---

### ➡ `views/`
Contient toutes les interfaces utilisateurs (HTML + PHP).  
#### ➡ `templates/`
- **header.php** : En-tête commun pour toutes les pages.
- **liste-clients.php** : Liste des clients.
- **liste-comptes.php** : Liste des comptes avec actions.
- **new-client.php** : Formulaire pour ajouter un client.
- **new-comptes.php** : Formulaire pour ajouter un compte.
- **login.php** : Page de connexion administrateur.
- **edit-compte.php** (à ajouter) : Formulaire de modification de compte.
- **edit-client.php** (à ajouter) : Formulaire de modification de client.

---

### ➡ `index.php`
Point d’entrée principal.  
C’est le routeur qui lit les paramètres `action` ou `page` dans l’URL et appelle les bons contrôleurs.

---

### ➡ `script.js`
Contient des scripts JavaScript pour confirmer les suppressions avant d’exécuter les requêtes.

---

### ➡ `style.css`
Fichier CSS pour la mise en page et le design général du projet.

---

### ➡ `script.sql`
Script SQL permettant de créer la base de données, les tables `clients` et `comptes` ainsi que les clés étrangères.

---

## ⚙️ Fonctionnement général

1. L’utilisateur accède à l’application via `index.php`.
2. Le fichier `index.php` lit les actions envoyées via `GET` ou `POST`.
3. En fonction de l’action, il appelle le contrôleur correspondant.
4. Le contrôleur interagit avec les modèles pour effectuer des opérations SQL.
5. Les résultats sont envoyés vers une vue pour affichage à l’utilisateur.

---

## 🚨 Points importants
- Suppression de compte avec confirmation. 
- Un client ne peut être supprimé que s'il ne possède aucun compte associé.
- Vérification de l'existence d’un client avant la création d’un compte.
- Modification possible uniquement du type de compte et du solde pour les comptes.
- Modification possible de toutes les informations d’un client sauf son numéro client.

---



## 🚀 Installation rapide
1.  Télécharger le projet.
2. Intégrer le `script.sql` dans phpMyAdmin pour créer la base de données.
3. Modifier les paramètres de connexion dans `dao/connexion.php`.
4. Lancer le projet via `http://localhost/gestionBanque`.

---

## Shema de la Structure des fichiers
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

