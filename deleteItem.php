<?php

require("dbh.inc.php");

if(isset($_GET['id'])){
    $_id = $_GET['id'];
    echo $_id;
   $query =  "DELETE FROM `items` WHERE `id`='$_id'";
   $stmt = $pdo->prepare($query);
    $stmt->execute();
    header("location: index.php");
}




?>
