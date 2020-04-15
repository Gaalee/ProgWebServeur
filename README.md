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
1. ###TP2 fonctionnalitées
    1. Home
    1. Articles
    1. Contact
1. ###Authentification
1. ###CRUD
1. ###Media pour articles