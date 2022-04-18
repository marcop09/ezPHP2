# ezPHP
Kickstart your projects and skip to the fun

## Getting Started
To get started, clone this repository or download it as a .zip file. You will need to have PHP installed (preferibly the newest version) and a working server. You can use XAMPP if you want. Look up a tutorial if you don't know how to work with XAMPP.

## Database
To configure your database, create a MySQL database and head into **conf/dbh.php** and replace "framework" with your own database name.

## Authentication
One of the most important features on any website is authentication. Let your users register accounts and log into them by locating your root folder and renaming the two authentication files:
```bash
rename c:\xampp\htdocs\mywebsite\login-example.php login.php
```
```bash
rename c:\xampp\htdocs\mywebsite\register-example.php register.php
```
After renaming these files, head into **conf/conf.php** and change $authapp from false to true.
```php
<?php
  require 'dbh.php';

  $authapp = true; // Change this
?>
```
