# php-nMVC (no Model but View Controller)

A simple, but secure PHP login script. Uses the ultra-modern & future-proof PHP 5.5 BLOWFISH hashing/salting functions (includes the official PHP 5.3 & PHP 5.4 compatibility pack, which makes those functions available in these versions too). 

## Why does this script exist ?

In the PHP world every beginner tries to build login systems from scratch, doing all the typical mistakes, usually going from saving plain text passwords to using (horribly wrong) MD5 hashing. This script tries to give beginners a usable code base with a fully implemented user authentication ("login") system, preventing less-experienced developers at least from the worst security issues.

This script was originally part of the "php-login project", a collection of 4 different login scripts made in the 2012-2013 PHP era to give especially beginners and security-inexperienced users a set of basic auth functions that fitted the most modern password hashing standards possible. You know, this was the time when even major companies like SONY and LinkedIn used horrible outdated MD5-hashing for their passwords (or even saved everything in plain text) and when the big PHP frameworks didn't have proper user auth solution out-of-the-box.

[![Support the project](_support/banner-host1plus.png)](https://affiliates.host1plus.com/ref/devmetal/36f4d828.html)

Find the other versions here:

**One-file version** (not maintained anymore)
Full login script in one file. Uses a one-file SQLite database (no MySQL needed) and PDO: Register, login, logout.
https://github.com/panique/php-login-one-file

**Minimal version** (not maintained anymore)
All the basic functions in a clean file structure, uses MySQL and mysqli. Register, login, logout.
https://github.com/panique/php-login-minimal

**Advanced version** (not maintained anymore)
Similar to the minimal version, but full of features. Uses PDO, Captchas, mail sending via SMTP and much more.
https://github.com/panique/php-login-advanced

**HUGE (professional version)** 
Quite professional MVC framework structure, useful for real applications. Additional features like: URL rewriting, mail sending via PHPMailer (SMTP or PHP's mail() function/linux sendmail), user profile pages, public user profiles, gravatars and local avatars, account upgrade/downgrade etc., OAuth2, Composer integration, etc.
https://github.com/panique/huge

## Requirements

- PHP 5.3.7+
- MySQL 5 database (please use a modern version of MySQL (5.5, 5.6, 5.7) as very old versions have a exotic bug that
[makes PDO injections possible](http://stackoverflow.com/q/134099/1114320).
- activated mysqli (last letter is an "i") extension (activated by default on most server setups)

## Installation (quick setup)

Create a database *login* and the table *users* via the SQL statements in the `_install` folder.
Change mySQL database user and password in `config/db.php` (*DB_USER* and *DB_PASS*).



## License

Licensed under GPL 2. You can use this script for free for any
private or commercial projects.

## Contribute

Fork or contribute with new branch containing new features.

