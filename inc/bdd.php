<?php
// Conexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=job-annonce-2', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
// var_dump($pdo);


// Creation de la session. Permet de stocker des infos sur les internautes
session_start();

// Definition de constantes
// POUR WAMP
//define('RACINE_SITE', $_SERVER['DOCUMENT_ROOT'].'/');
//define('URL', '/');

// Pour XAMP ET MAMP
define('RACINE_SITE', $_SERVER['DOCUMENT_ROOT'].'/job-annonce/');
define('URL', 'http://localhost:8888/job-annonce/');

$content = '';
?>