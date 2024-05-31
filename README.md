# Demonstration Laravel

## But de ce dépôt
Ce dépôt sert d'example pour les fonctionnalités de base de Laravel : 
 - Modèle / Vue / Controlleur
 - Migration / Seeder
 - Request
 - Gate & Policies

L'objectif étant tout simplement de réaliser un application permettant de gérer une todolist.
## Installation

```bash
# Clonez ce dépot
# Dupliquer le fichier .env
cp .env.example .env
# Configurez le fichier .env
# ...
# Installez les dépendances de composer
composer update && composer install
# Migrez la base de données et chargez de la data fictive
php artisan migrate:fresh --seed

# Compilez le sass
npm i && npm run build

# Lancez le serveur
php artisan serve

# Un compte demo a été généré pour vous
# user : user@example.com
# pass : password
```