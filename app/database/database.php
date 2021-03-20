<?php

$servname = "localhost";
$dbname = "swancy-app";
$user = "root"; 
$pass = "root"; 

$pdo = new PDO("mysql:host=$servname;dbname=$dbname;charset=utf8", $user, $pass);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

