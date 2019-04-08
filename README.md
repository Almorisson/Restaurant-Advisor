# Groupe de ndiaye_c
<<<<<<< HEAD

Chef de Projet: Mor NDIAYE

Binôme: Ilyes DAKHLAOUI

## Projet choisi : Restaurant Advisor
------------------------------------

# Tables des matières

# [Première Partie du Projet](#première-partie-du-projet)

 - [Mise en place de l'API](#mise-en-place-de-l'API)
	- [Restaurants](#restaurants)
	- [Menus](#menus)
	- [Authentification](#authentification)
	- [Liste des utilisateurs](#liste-des-utilisateurs)
	

# [Seconde Partie du Projet](#seconde-partie-du-projet)

- [Application mobile Android](#application-mobile-android)
	- [Design UI/UX](#design-uiux)
	- [Communication avec l'API](#communication-avec-lapi)

# `Première Partie du Projet`

## `Mise en place de l'API`
=======
## Projet choisi: Restaurant Advisor
------------------------------------

# [Première Partie du Projet](#readme-1st-project-part)

 - [Mise en place de l'API](#api-dev)
	- [Restaurants](#restaurants)
	- [Menus](#menus)
	- [Authentification](#authentification)
	- [List des utilisateurs](#users-list)
	

# [Seconde Partie du Projet](#readme-2st-project-part)

- [Application mobile Android](#mobile-dev-app)
	- [Front end - UI/UX](#restaurants)
	- [Communication avec l'API](#nenus)



## api-setup
>>>>>>> 8e33d984c6b2f3b1ab3e7447e8f4a209a3fd75be

Mise en place de l'API pour les différents services webs destinés à l'application mobile.
Dans cette première partie, nous avons implémenté tous les fonctionnalités de CRUD(créer, lire, mettre à jour et supprimer) au niveau de l'API. En effet, vous pouvez consulter la liste des restaurants ainsi que les menus qui lui sont associés. Supprimer, modifier les données, créer une resource(restaurant et/ou menu).

<<<<<<< HEAD
il y a également un système de rating sur chaque restaurant et les menus qui lui sont associés.
=======
il y aégalement un système de rating sur chaque restaurant et les menus qui lui sont associés.
>>>>>>> 8e33d984c6b2f3b1ab3e7447e8f4a209a3fd75be

Vous pouvez consulter la liste de tous les utilisateurs inscrits à condition d'être authentifé.

Un utilisateur non authentifé ne peut consulter que la liste des restaurants. Il n'aura pas la possibilité de laisser une note.

<<<<<<< HEAD

L'implémentation d'un système de protection des routes permet de garantir que les ressources( Restaurant, Menu et User) ne peuvent être supprimé, modifié ou même être vu
par un utilisateur nonnconnecté.

### `Restaurants`

Cette partie concerne tout ce qui est lié aux restaurants. En effet, l'API implémente toutes les opérations CRUD qu'il est possible de réaliser sur un ressource de type restaurant.

**Voir la liste dec tous les restaurants** avec un GET sur l'endpoint  /api/restaurants

**Voir un restaurant particulier** avec un GET sur l'endpoint /api/restaurants/{restaurant}

**Créer un nouveau restaurant** avec un POST sur l'endpoint /api/restaurants/

**Mettre à jour un restaurant** avec un UPDATE sur l'endpoint /api/restaurants/{restaurant}

**Supprimer un restaurant** avec un DELETE sur l'endpoint /api/restaurants/{restaurant}

### `Menus`

La même implémentation précédemment expliquée sur une resource de type Restaurant reste valable sur une ressource de type menu. C'es-à-dire toutes les opérations CRUD que l'on souhaite faire.

**Voir la liste des menus liés à restaurant donné** avec un GET sur l'endpoint  /api/restaurants/{restaurant}/menus

**Voir un menu particulier** avec un GET sur l'endpoint /api/restaurants/{restaurant}/menus/{menu}

**Créer un nouveau menu** avec un POST sur l'endpoint /api/restaurants/{restaurant}/menus

**Mettre à jour un menu** avec un UPDATE sur l'endpoint /api/restaurants/{restaurant}/menus/{menu}

**Supprimer un menu** avec un DELETE sur l'endpoint /api/restaurants/{restaurant}/menus/{menu}


### `Authentification`

Pour gérer l'authentification en tant utilisateur, nous avons utiliser un gestionnaire d'authentification très célébre et que Laravel implémente évidement, qui s'appelle oAuth.
En effet, oAuth d'assurer une authentification sécurisée sur notre API via un système de token et clé secrète.

Ainsi, nous avons configuré Laravel de telle sorte qu'il prenne en compte oAuth et le package compléméntaire qui s'appelle Passport qui permet de générer les clés secrètes et donc communiquer avec oAuth en tant driver pour assurrer l'authentification.  

### `Liste des utilisateurs`

Il aussi prévue dans notre API, une impléméntation permettant d'obtenir des informations liées aux utilisateurs comme par exemple obtenir les données de l'utilisateur actuellement connecté, la liste de tous les utilisateurs ainsi que les opérations CRUD ou BREAD qui vont avec.

Voici les webservices disponibles pour ce type de ressource:

**Liste des utilisateurs** avec un GET sur l'endpoint /api/users

**Voir les données de l'utilisateur actuellement connecté** avec un GET sur l'endpoint /user. Cet endpoint est celui fournit par défaut par Laravel.

**Créer un utilisateur** avec un POST sur l'endpoint /api/users/{user}

**Mettre à jour un utilisateur** avec un UPDATE sur l'endpoint /api/users/{user}

**Supprimer un utilisateur** avec un DELETE sur l'endpoint /api/users/{user}



# `Seconde Partie du Projet`

## `Application mobile Android`

Pour tester nos webservices et le comportement de API, nous avons mis en place une application mobile android capable de communiquer avec ce dernier via le protocole HTTP.
Pour ce faire, il a était utile d'utiliser un librairie appelée Retrofit2 qui nous permet d'assurer cette communication plus simplement.

### `Design UI/UX`

Cette partie concerne la partie visuelle de l'application mobile. Disons l'interface utilisateur permettant d'interagir avec l'API.
Pour cela, on a dû penser en MVC pour ainsi séparer toute la partie relative au UI au niveau d'un package appelé view. Cela en est de même pour les models et la logique permetant de faire des reqêtes et 
d'afficher les résultats obtenus depuis l'API dans le UI. Cette partie composé de l'interface, de l'instance de Retrofit et des Adapter représente en quelque sorte le Controller.

### `Communication avec l'API`

Comme souligner au début de cette section, la communication de notre application mobile et de notre API est assurer pour Retrofit2. Cela nous permet de faire reqêtes avec
les Verbes **GET**, **POST**, **UPDATE** ou **PUT** et **DELETE** afin de remplir et mettre à jouer notre UI.
=======
### `Restaurants`

### `Menus`

### `Authentification`

### `Users List`
>>>>>>> 8e33d984c6b2f3b1ab3e7447e8f4a209a3fd75be
