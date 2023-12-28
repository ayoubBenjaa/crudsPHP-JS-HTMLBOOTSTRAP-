<?php
$query = "SELECT * FROM items";
$stmt = $pdo->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();

echo '<script>';
echo 'let result = ' . json_encode($result).';' ;
echo '</script>';

if($result){
    echo '<form action="deleteAllData.php">';

    echo "<button  type='submit' name='deleteAll' id='deleteAll' class='container my-1 rounded  btn-sm w-100 bg-danger text-light  rounded-pill border-0'>DELETE ALL</button>";

    echo "</form>";

    $i = 1;
    foreach($result as $item){
        ?>
            <tr>
                <th><?= $i ?></th>
                <th><?= $item["title"]?></th>
                <th><?= $item["price"]?></th>
                <th><?= $item["ads"]?></th>
                <th><?= $item["taxes"]?></th>
                <th><?= $item["discount"]?></th>
                <th><?= $item["total"]?></th>
                <th><?= $item["category"]?></th>
                <th ><button class="btn bg-success  " ><a class="text-white" href="updateItem.php?id=<?= $item["id"]?>">UPDATE</a></button></th>
                <th ><button class="btn bg-warning"><a class="text-white" href="deleteItem.php?id=<?= $item["id"]?>">DELETE</a></button></th>
            </tr>
            
        <?php
        $i++;
    }

}

else{
    ?>

    <td class="text-warning" colspan="12">No Data Selected!</td>


<?php
}


?>

<script>
    let searchByCategory = document.getElementById("searchByCategory");
    let searchByTitle = document.getElementById("searchByTitle");
    let search = document.getElementById("inpSearch");
    let tbody = document.getElementById("tbody");
    let token = "searchByTitle";



    function searchCategory(){
        token = "searchByCategory";
        search.value = "";
       
    }
    function searchTitle(){
        token = "searchByTitle";
        search.value = "";
    }
    search.onkeyup = ()=>{
        if(token == "searchByCategory"){

            tbody.innerHTML = "";
            var i=1
            result.map((e)=>{
                if( e[6].toLowerCase().includes(search.value.toLowerCase())){
                   
                    tbody.innerHTML +=`
                    <tr>
                        <td>${i}</td>
                        <td>${e[1]}</td>
                        <td>${e[2]}</td>
                        <td>${e[3]}</td>
                        <td>${e[4]}</td>
                        <td>${e[5]}</td>
                        <td>${e[7]}</td>
                        <td>${e[6]}</td>
                        <td ><button class="btn bg-success  " ><a class="text-white" href="updateItem.php?id=<?= $item["id"]?>">UPDATE</a></button></td>
                        <td ><button class="btn bg-warning"><a class="text-white" href="deleteItem.php?id=<?= $item["id"]?>">DELETE</a></button></td>
                </tr>
                `
                }
                i++;
                
            })
        }
       else{

            tbody.innerHTML = "";
            var i=1
            result.map((e)=>{
                if( e[1].toLowerCase().includes(search.value.toLowerCase())){
                   
                    tbody.innerHTML +=`
                    <tr>
                        <td>${i}</td>
                        <td>${e[1]}</td>
                        <td>${e[2]}</td>
                        <td>${e[3]}</td>
                        <td>${e[4]}</td>
                        <td>${e[5]}</td>
                        <td>${e[7]}</td>
                        <td>${e[6]}</td>
                        <td ><button class="btn bg-success  " ><a class="text-white" href="updateItem.php?id=<?= $item["id"]?>">UPDATE</a></button></td>
                        <td ><button class="btn bg-warning"><a class="text-white" href="deleteItem.php?id=<?= $item["id"]?>">DELETE</a></button></td>
                </tr>
                `
                }
                i++;
                
            })
        }
       
    };
</script>