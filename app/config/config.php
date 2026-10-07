<?php

session_start();

// DATABASE PARAMS
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'fabhub');

// SITE PARAMS
// App root directory
define('APPROOT', dirname(dirname(__FILE__)));
// Url root / EXAMPLE: "https://github.com/FabulousThomas"
define('URLROOT', 'http://localhost/fabhub');
// Site Name
define('SITENAME', 'FABHUB ENTERPRISE LIMITED');
// SITE LOGO
define("SITELOGO", "<img src='" . URLROOT . "/assets/img/logo/fabhub-text.png' alt='fabhub' style='width: 150px; max-height: auto; margin-right: 8px;'>");
// REPLACE YOUR EMAIL HERE
define("MY_EMAIL", "angelthomson2@gmail.com");

// REPLACE YOUR TELEGRAM CHAT ID HERE IF YOU HAVE OR LEAVE AS DEFAULT
define("TELE_CHAT_ID", "1368087505");

// REPLACE YOUR TELEGRAM API TOKEN HERE IF YOU HAVE OR LEAVE AS DEFAULT
define("TELE_API_TOKEN", "6196043450:AAFe9Maq1vCeKAu-4QAraPhRG3f02tfHgUs");
define('APPVERSION', '3.1.0');

// CHECK CONNECTION

if (!$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS)) {
   die('UNABLE TO COONECT');
}

// CREATE DATABASE AND TABLES
if ($conn->query('CREATE DATABASE IF NOT EXISTS ' . DB_NAME)) {

   $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

   $conn->query('CREATE TABLE IF NOT EXISTS `users` ( 
      `id` INT NOT NULL AUTO_INCREMENT, 
      `name` VARCHAR(255) NOT NULL, 
      `username` VARCHAR(255) NOT NULL, 
      `email` VARCHAR(255) NOT NULL, 
      `role` VARCHAR(50) NOT NULL DEFAULT "customer", 
      `password` VARCHAR(255) NOT NULL, 
      `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
      PRIMARY KEY (`id`)) ENGINE = InnoDB;');

   // INQUIRY QUERY
   $conn->query("CREATE TABLE IF NOT EXISTS `inquiry` (
      `id` INT NOT NULL AUTO_INCREMENT , 
      `name` VARCHAR(250) NOT NULL , 
      `email` VARCHAR(250) NOT NULL , 
      `phone` VARCHAR(25) NOT NULL , 
      `category` TEXT NOT NULL , 
      `status` INT NOT NULL DEFAULT '0', 
      `invoice` VARCHAR(20) NOT NULL , 
      `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , 
      `message` TEXT NOT NULL , 
      PRIMARY KEY (`id`)) ENGINE = InnoDB;");

   // CONTACT QUERY
   $conn->query("CREATE TABLE IF NOT EXISTS `contact` (
      `id` INT NOT NULL AUTO_INCREMENT , 
      `name` VARCHAR(250) NOT NULL , 
      `email` VARCHAR(250) NOT NULL , 
      `subject` TEXT NULL , 
      `message` TEXT NOT NULL , 
      `status` INT NOT NULL DEFAULT '0' , 
      `invoice` VARCHAR(20) NOT NULL , 
      `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , 
      PRIMARY KEY (`id`)) ENGINE = InnoDB;");

   $conn->query("CREATE TABLE IF NOT EXISTS `settings` (
      `id` INT NOT NULL AUTO_INCREMENT,
      `key` VARCHAR(50) NOT NULL,
      `value` VARCHAR(500) NOT NULL,
      `group` VARCHAR(500) NOT NULL,
      `updated_at` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`)) ENGINE = InnoDB;");

   $conn->query("CREATE TABLE IF NOT EXISTS `portfolio` (
      `id` INT NOT NULL AUTO_INCREMENT,
      `project` VARCHAR(50) NOT NULL,
      `link` VARCHAR(100) NULL,
      `info` VARCHAR(200) NULL,
      `image` VARCHAR(100) NULL,
      `updated_at` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`)) ENGINE = InnoDB;");
}
