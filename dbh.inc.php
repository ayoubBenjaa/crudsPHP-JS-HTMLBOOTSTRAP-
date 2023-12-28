<?php


$dsn = "mysql:host=localhost;dbname=crudsproject";
$user = 'root';
$password = "";

try{
    $pdo = new PDO($dsn,$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(PDOException $e){
    echo("Failed to connect ".$e->getMessage());
}










?>