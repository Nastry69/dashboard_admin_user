# Projet PHP - Interface Admin & Utilisateur

Ce projet est une mini-application web développée en PHP avec gestion des utilisateurs et interface d’administration. Il a été réalisé dans le cadre de mon apprentissage du développement web et a pour objectif de démontrer mes compétences en programmation back-end, en base de données et en création d’interface utilisateur.

##  Objectifs du projet

- Créer un système de connexion/déconnexion sécurisé
- Différencier les vues utilisateur et administrateur
- Afficher des pages dédiées selon les droits de l’utilisateur connecté
- Utiliser une base de données MySQL pour gérer les comptes
- Ajouter un peu d’interactivité avec du JavaScript léger (ex : gestion d'affichage de formulaires, effets de transition, etc.)

##  Technologies utilisées

- **PHP** (programmation serveur)
- **MySQL** (base de données relationnelle)
- **HTML/CSS** (interfaces front-end simples et responsives)
- **JavaScript** (léger, pour quelques interactions dynamiques)
- **XAMPP/WAMP** (pour l’environnement local)
- **Git & GitHub** (versioning et publication du projet)

##  Fonctionnalités

-  Connexion utilisateur avec vérification des identifiants
-  Différenciation des rôles (`admin` vs `utilisateur`)
-  Page dédiée pour chaque rôle
-  Message d’erreur en cas de mauvaise connexion
-  Affichage dynamique de certaines sections via JavaScript
-  Design responsive simple avec `Poppins` (Google Fonts)

##  Structure du projet
/index.php -> Page d’accueil avec formulaire de connexion
/admin.php -> Interface réservée aux administrateurs
/user.php -> Interface utilisateur
/config.php -> Connexion à la base de données 
/style.css -> Fichier de style
/script.js -> Fichier JavaScript léger 
/base.sql -> Fichier pour recréer la base de données 

##  Base de données

Un fichier `base.sql` est fourni pour créer automatiquement la base de données utilisée par l’application.

###  Détails :
- Base de données : `users_db`
- Table : `users`
- Champs :
  - `id` : identifiant unique (auto-incrémenté)
  - `name` : nom complet
  - `email` : adresse e-mail (unique)
  - `password` : mot de passe (hashé)
  - `role` : rôle de l'utilisateur (`user` ou `admin`)

###  Importer la base de données

1. Ouvrir **phpMyAdmin**
2. Créer une nouvelle base appelée **`users_db`** *(ou modifier `config.php` si vous changez le nom ainsi que vos identifiants)*
3. Aller dans l'onglet **"Importer"**
4. Sélectionner le fichier `base.sql` fourni dans le projet
5. Lancer l’import

 Des utilisateurs de test sont déjà présents dans la table (pensez à adapter les mots de passe dans la base ou via le formulaire de création si besoin).
