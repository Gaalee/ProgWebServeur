# Guide d'installation

Commencer par cloner le dépôt  
`git clone https://github.com/Gaalee/ProgWebServeur`

Aller dans le dossier du dépôt cloné  
`cd ProgWebServeur`

Installer les dépendances composer et npm  
`composer install`  
`npm install`

Générer la clé de l'application  
`php artisan key:generate`

Créer un fichier database.sqlite dans le dossier database de l’application  
Créer le fichier .env à partir du .env.example, puis le modifier pour spécifier l’utilisation de SQLite et le chemine d’accès au fichier: (pensez à remplacer /chemin/vers l-application par le chemin du fichier de votre machine)  
```
DB_CONNECTION=sqlite
DB_DATABASE=/chemin/vers/l-application/database/database.sqlite
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=larablog
# DB_USERNAME=root
# DB_PASSWORD=ic2a
```
Lancer les migrations et les seeds pour remplir la base de données  
`php artisan migrate:fresh --seed`

Lancer le serveur  
`php artisan serve`

Aller à l'URL suivante  
`http://localhost:8000`

À ce moment vous devez être en mesure de voir la page d'authentification de l'application. Si ce n'est pas le cas veuillez me contacter.


# Fonctionnalitées
### 1. TP2 fonctionnalitées
#### Home  
Comme l'énoncé l'a demandé dans le TP2, la page d'accueil comporte la liste des trois premiers articles avec un lien d'accès unique pour chacun d'eux.
#### Articles
La page des articles comporte tous les articles avec du style pour les représenter comme tels.
#### Contact  
La page de contact comporte un formulaire d'envoi de demande de contact ainsi qu'un tableau regroupant toutes les demandes de contact.
> **Note:** Toutes ces fonctionnalitées sont utilisables via le menu en haut à gauche une fois l'authentification effectuée.  
### 1. Authentification
Lors de la première visite sur l'application on arrive sur la page d'authentification. À partir de là vous pouvez soit, créer un compte (pour plus de facilité il est possible de créer un utilisateur ou un administrateur), soit vous connecter avec l'un des deux utilisateurs créés de base.  
Leurs iddentifiants sont : 
```
email : admin@admin
mdp : admin

email : user@user
mdp : user
```
Une fois connecté vous arriverez sur la page d'accueil du TP2. Utilisez le menu horizontale pour tester toutes les fonctionnalitées de l'application.
### 1. CRUD
Le CRUD est présent pour les articles via les deux menus "Articles View By Admin" et "Add Articles". Ces deux fonctionnalitées ne sont utilisablent qu'en administrateur. Veillez bien a vous connecter sur un compte de ce privilège pour les explorer. Pour une facilité de correction, ces systèmes ne sont pas cachés de l'utilisateur classique mais,si celui-ci essai de les utiliser, alors un message d'erreur s'affichera.  
En tant qu'administrateur vous pourrez alors tester les boutons d'édition et de suppression se trouvant sur la page "Articles View By Admin".
### 1. Media pour articles
La dernière fonctionnalitée rajoutée est la gestion d'ajout d'image attachée aux articles. Celle-ci est gérée via le CRUD également, cela permet de changer ou de supprimer une image d'un article.