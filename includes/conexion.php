<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=mochiladb", 'root', '');
}
catch(PDOException $e){
    exit("Database error.");
}