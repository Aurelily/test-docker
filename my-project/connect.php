<?php

const DBHOST = 'db';
const DBUSER = 'root';
const DBPASS = 'pass';
const DBNAME = 'demo';

$dsn = 'mysql:host='. DBHOST . ';dbname='. DBNAME;

try {
    $db = new PDO($dsn, DBUSER, DBPASS);
    echo "Connecté !";
} catch (PDOException $exception) {
    echo 'Une erreur est survenue: ' . $exception->getMessage();
    die;
}