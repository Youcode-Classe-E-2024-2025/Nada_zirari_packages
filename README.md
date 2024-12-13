# Nada_zirari_packages


1.Schéma de la base de données (ERD) : 
https://lucid.app/lucidchart/0d764c4e-04c5-46a9-8991-e1c0857460b7/edit?beaconFlowId=805578B21A69ABE4&invitationId=inv_d4e1dfda-93c3-4e04-9de3-af3b77b766a7&page=0_0#




2.Diagramme UML (Cas d’utilisation) :
 https://lucid.app/lucidchart/919e05d0-8da3-4c8e-a0e9-127a1b07cf04/edit?beaconFlowId=2D5D5B88FABAEC9C&page=.Q4MUjXso07N&invitationId=inv_c89ea3ab-8af8-44b0-9469-eaa8aaef3b45#



 Installation:

Cloner le dépôt
Pour installer et démarrer l'application, commencez par cloner ce dépôt sur votre machine locale :


Installation et Configuration du Projet


Prérequis

Avant de cloner ce projet, assurez-vous d'avoir les outils suivants installés :


Serveur Web : Apache (inclus dans XAMPP, WAMP, ou MAMP).

Base de Données : MySQL.
PHP : Version compatible avec les scripts utilisés (au minimum PHP 7.4 recommandé).

Git : Pour cloner le dépôt.





Installation


Étape 1 : Cloner le projet
git clone https://github.com/Youcode-Classe-E-2024-2025/Nada_zirari_packages


Étape 2 : Configuration de l'environnement

Serveur Apache et MySQL


Utilisez un logiciel comme XAMPP, WAMP, ou MAMP pour démarrer Apache et MySQL.

Placez les fichiers du projet dans le répertoire htdocs (pour XAMPP) ou dans le répertoire équivalent de votre serveur local.




Base de Données


Ouvrez phpMyAdmin (accessible via http://localhost/phpmyadmin).
Créez une base de données avec le nom : packages.
Importez le fichier SQL contenant la structure et les données :
Si votre fichier SQL n'existe pas, créez-le et ajoutez-le au dépôt pour faciliter l'installation.



Fichier de Configuration


Vérifiez le fichier db.php et mettez à jour les paramètres de connexion à la base de données si nécessaire :
$servername = "localhost";
$username = "root"; // Nom d'utilisateur MySQL par défaut
$password = "";     // Mot de passe par défaut (vide pour XAMPP)
$dbname = "packages";


Étape 3 : Exécution du projet


Lancez le serveur Apache et MySQL via votre environnement local (exemple : XAMPP).

Accédez à votre projet en ouvrant un navigateur et en allant à l'adresse suivante :
http://localhost/admin.php


Fonctionnalités

Formulaires dynamiques : Gestion via PHP et JavaScript.

Interaction avec une base de données MySQL : Stockage et récupération des données.

Style et animations : Ajoutés avec CSS et JavaScript.


Outils Utilisés

MySQL : Base de données pour stocker les informations.
PHP : Traitement côté serveur.
HTML, CSS, JavaScript : Frontend du projet.