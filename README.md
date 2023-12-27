# Manuel d'utilisation de GestionExams

## Prérequis

Avant d'utiliser GestionExams, assurez-vous de remplir les prérequis suivants :

- Avoir une distribution Apache installée. Je recommande l'utilisation de XAMPP, que vous pouvez télécharger [ici](https://www.apachefriends.org/fr/download.html).
- Avoir PHP installé sur votre système.
- Avoir Symfony installé sur votre système, que vous pouvez télécharger [ici](https://symfony.com/download).
  

## Installation

1. Clonez le dépôt de l'application depuis GitHub en utilisant la commande suivante dans le terminal :

   ```bash
   git clone https://github.com/ClemLy/GestionExams.git

2. Si vous utilisez XAMPP, déplacez le dossier obtenu dans le répertoire `XAMPP/htdocs`.

3. Ouvrez un serveur Symfony à l'aide de la commande :
   ```bash
    symfony server:start -d
   
4. Accédez au serveur fournit par la commande.

   

## Fonctionnalités

### Connexion à l'application

Lorsque vous accédez au site, vous pouvez directement vous y connecter en utilisant les codes de l'utilisateur administrateur :
Email : admin@root.com
Mot de passe : root

### Gestion de la base de données

Vous avez la possibilité de créer, modifier ou supprimer des filières, des semestres, des enseignants, des modules, des étudiants, des notes, et enfin l'utilisateur.

**Note : Il n'est pas recommandé de modifier l'utilisateur pour le moment.**

### Barre de recherche

Une barre de recherche est présente afin de retrouver facilement un élément de la base de données précis. Exemple : La filière "121".

### Tri par ordre croissant/décroissant

Il est possible de trier les éléments de la base de données en cliquant sur le titre de la colonne que vous voulez trier. Ce tri se fait par ordre croissant ou alphabétique. Vous pouvez faire le tri inverse en recliquant sur la colonne.

### Changement de langue

GestionExams est une application multilingue ! Il est possible de traduire l'application en français, en anglais, en allemand, et enfin en espagnol.

### Sélection des éléments

Il est possible de sélectionner un ou plusieurs éléments de la base de données en cliquant sur leur case à gauche. Ceci permet de supprimer plusieurs éléments à la fois.

### Déconnexion

Il est possible de se déconnecter en appuyant sur le bouton on/off en haut de droite de la page principale.


## Fonctionnalités en cours de développement

### Connexion à l'application

Il est possible de changer la couleur de l'application, passant de sombre à clair, et inversement. Il suffit d'appuyer sur le bouton "switch" présent dans la page d'accueil et la page de login. Le changement de thème fonctionne mais comporte encore quelques limites : Le thème ne se sauvegarde pas, et impossible de changer de thème dans une nouvelle page si on ne la raffraîchit pas.


## Limites de l'application

### Une base de données locale

Le défaut de cette application est qu'elle fonctionne dans une base de données qui est locale à moi-même. Impossible de se connecter avec un login si je ne démarre pas ma base de données. Il est pour le moment possible de régler ce défaut si vous implémentez vous-même votre base de données.

---

Profitez de la gestion d'une base de données avec GestionExams !
