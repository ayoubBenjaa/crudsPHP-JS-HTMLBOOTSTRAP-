<?php


 $title = $_POST['title'];
 $price = $_POST['price'];
 $taxes = $_POST['taxes'];
 $ads = $_POST['ads'];
 $discount = $_POST['discount'];
 $categoty = $_POST['categoty'];
 $count = $_POST['count'];
 $deleteAll = $_POST['deleteAll'];

 

 if($count != null || $count != 0){

    
    
    if( $_SERVER["REQUEST_METHOD"]  == "POST" ){

        if($price){
            $total = ($price + $taxes + $ads) - $discount;

        }else $total = 0;
        
        try{
            require_once("dbh.inc.php");
            require_once("saveDataInDB.php");
            header("Location: ./index.php");
            $count = null;
            $pdo = null;
            $stmt = null;
            exit();

        }
        catch(PDOException $e){
            echo "error ".$e->getMessage();
        }
    }else{
        header("location: ./index.php");
        }
}


?>