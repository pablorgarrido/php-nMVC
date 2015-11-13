# php-nMVC (no Model only View Controller)

Simple and beautifull App Skeleton written in PHP with minimal and secure login, elegant bootstrap layout and no-Model View Controller logic.

## Requirements

- PHP 5.3.7+
- MySQL 5 database (please use a modern version of MySQL (5.5, 5.6, 5.7) as very old versions have a exotic bug that
- activated mysqli (last letter is an "i") extension (activated by default on most server setups)

## Installation (quick setup)

Create a database and the table *nmvc_users* via the SQL statements in the `_installation` folder.
Set database host,db,user and password in 'config/db.php'
Set variable in 'config/config.php' 

$dir_base = "/nmvc/"; (location folder of nmvc installation)

$app_nome='WebApp PHP NMVC'; (App name)

Optionally you replace default app icon with your persoal icon (64x64 pixel)

## License

Licensed under GPL 2. You can use this script for free for any
private or commercial projects.

## Contribute

Fork or contribute with new branch containing new features.

