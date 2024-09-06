
## Description du projet

Ce projet consiste en une application web dynamique développée en HTML5, CSS3, JavaScript (jQuery) et PHP avec une base de données MySQL. Il propose une interface d'authentification complète avec un système d'inscription et de connexion sécurisé, ainsi qu'un design responsive incluant un slider "infinite" et un menu burger pour la navigation sur mobile.

### Fonctionnalités principales

1. **Authentification (Inscription & Connexion)** :
   - Inscription et connexion avec PHP/MySQL.
   - Sécurisation des mots de passe avec `password_hash()` et `password_verify()`.
   - Validation côté client des formulaires avec JavaScript pour l'inscription (vérification des emails, longueur des mots de passe, etc.).
   - Gestion des sessions pour protéger les pages après connexion.

2. **Slider "infinite" responsive** :
   - Un carrousel contenant 5 images défilantes en continu.
   - Le slider est entièrement responsive, s'adaptant à toutes les résolutions d'écran (desktop, tablette, mobile).

3. **Menu Burger fonctionnel** :
   - Un menu de navigation adapté aux écrans mobiles (menu "burger").
   - Fonctionnalité implémentée en JavaScript/jQuery pour l'ouverture et la fermeture du menu.

## Technologies utilisées

- **HTML5** : Structure des pages web.
- **CSS3** : Stylisation et mise en page responsive (utilisation de Flexbox et Media Queries).
- **JavaScript (jQuery)** : Validation des formulaires, gestion du menu burger et du slider.
- **PHP** : Gestion de l'authentification et des sessions côté serveur.
- **MySQL** : Base de données pour stocker les informations d'utilisateur (email, mot de passe, etc.).

## Prérequis

Avant de lancer ce projet, assurez-vous d'avoir installé et configuré :

- Un serveur local (par exemple [XAMPP](https://www.apachefriends.org/index.html) ou [WAMP](http://www.wampserver.com/)).
- PHP version 7.3 ou supérieure.
- MySQL pour la gestion de la base de données.



