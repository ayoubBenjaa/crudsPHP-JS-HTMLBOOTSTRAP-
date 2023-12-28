<?php


require("dbh.inc.php");

$query = "DELETE FROM items";
$stmt = $pdo->prepare($query);
$stmt->execute();


header("location:index.php");
?>