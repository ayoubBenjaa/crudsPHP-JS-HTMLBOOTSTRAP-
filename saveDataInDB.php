<?php

if($count != null){
    for($i=0; $i<$count; $i++){

        $query = "INSERT INTO items ( title, price, taxes, ads, discount, category, total) VALUES (?,?,?,?,?,?,?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$title,$price,$taxes,$ads,$discount,$categoty,$total]);
    }
}
else{

    $query = "INSERT INTO items ( title, price, taxes, ads, discount, category, total) VALUES (?,?,?,?,?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$title,$price,$taxes,$ads,$discount,$categoty,$total]);
}


?>