<?php



        $title = $_POST['title'];
        $id = $_POST['id'];
        $price = $_POST['price'];
        $taxes = $_POST['taxes'];
        $ads = $_POST['ads'];
        $discount = $_POST['discount'];
        $category = $_POST['category'];
        $total = $price + $taxes + $ads - $discount;


    include("dbh.inc.php");
    $query = "UPDATE `items` SET `title`='$title',`price`='$price',`taxes`='$taxes',`ads`='$ads',`discount`='$discount',`category`='$category',`total`='$total' WHERE id='$id'";

   $stmt =  $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
    
    header("location:index.php");




?>