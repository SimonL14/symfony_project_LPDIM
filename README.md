<br/>
<p align="center">
  <h3 align="center">Touitter</h3>

  <p align="center">
    Projet avec le Framework Symfony dans le but de créer un clone de Twitter
    <br/>
    <br/>
  </p>
</p>

## Sommaire

* [A propos du projet](#a-propos-du-projet)
* [Pour Commencer](#pour-commencer)
  * [Prérequis](#prérequis)
  * [Installation](#installation)
* [Bug](#bug)
* [Auteurs](#auteurs)

## A propos du projet

https://user-images.githubusercontent.com/115985120/222192070-215c48eb-718d-48b8-8965-914a6ed8f3de.mp4


Avec cette application, vous pouvez créer un compte et poster des Touit pour le partagez sur le réseau social !

Fonctionnalités : 
- Login, Signup, Logout
- Voir les Twittos;
- Publier, modifier ou supprimer un Twittos ( à condition d'être connecté);

## Pour Commencer


### Prérequis
Pour cette application, vous avez besoin de :

* composer
* symfony
* migration
* boostrap

### Installation

1. Récupérer le repository :

```sh
git clone https://github.com/SimonL14/symfony_project_LPDIM.git ( Attention de prendre la branch Main et non la master )
```

2. Se positionner dans le dossier réaliser:

```sh
cd symfony_project_LPDIM/
```

3. Installer les dépendances :

```sh
composer install
npm install
npm build
```
4. Base de donnée :
N'oubliez pas de modifier le ".env" pour l'adapter à votre base de donnée.

```sh
# DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
DATABASE_URL="mysql://User:Password@127.0.0.1:3306/twitter?serverVersion=5.7"
```

Vous devez créer une base de donnée en local avec le nom : ' twitter '
Ensuite exécuter : 
```sh
symfony console make:migration
php bin/console doctrine:migrations:migrate
```

5. Lancer le projet : 

```sh
symfony server:start
```

6. Lancer le projet : 

```url
http://127.0.0.1:8000/twitter/twitter
```

## Bug
Petit bug au niveau du login et de la création d'un tweet (Le code est réaliser pour ces deux choses à regarder !)

* Login qui ne se connecte pas 
* Création de tweet et edit ( erreur : Object of class App\Entity\User could not be converted to string )


## Auteurs

* **Brocvielle Vivien** - *LP DIM STUDENT* - [HoverFo](https://github.com/HoverFo)
* **Lamirand Simon** - *LP DIM STUDENT* - [SimonL14](https://github.com/SimonL14) 


