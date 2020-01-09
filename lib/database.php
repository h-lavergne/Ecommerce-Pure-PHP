<?php

function pdo(){

    static $pdo;
    if ($pdo){
        return $pdo;
    }

    $pdo = new PDO("mysql:host=localhost;dbname=coton", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    return $pdo;
}
