<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">

    

    <style>
        #tbody{
            cursor: pointer;
        }
        #total{
            background-color: #333;
            padding: 5px;
        }
        #total::before{
            content: 'TOTAL : ';
            
        }
        input{
            border: none;
            border-radius: 3px;
        }
        .container{
            background-color: #222;
        }
        
       
        input:focus{
            background-color: #dcd5d5;
            color: rgb(56, 58, 56);
        }
        .custom-button:hover {
            background-color: #28a745;
            color: #fff;
    }
    </style>
</head>

<body class="text-center mt-3 bg-black text-light">
    <h1>CRUDS PROJECT</h1>
    <pre><h5 >Create  Read  Update  Delete  Search</h5></pre>
    <form action="updateItemInDB.php" method="post"  class="container py-3 rounded">

        <?php
            if(isset($_GET["id"])){
                $_id = $_GET["id"];
                include("dbh.inc.php");
                $query = "SELECT `id`, `title`, `price`, `taxes`, `ads`, `discount`, `category`, `total` FROM `items` WHERE id = '$_id'";
               $stmt =  $pdo->prepare($query);
                $stmt->execute();
                $result = $stmt->fetchAll();
                echo $result[0]["id"];
            }
        ?>


<!-- ------------------------------TITLE--------------------------->
                <div class="row py-2">
                    <div class="col">
                         
                            <input id="inpId" type="hidden" name="id"  value="<?= $result[0]["id"]?>">
                            <input id="inpTitle" class="w-100" type="text" placeholder="Title" name="title"  value="<?= $result[0]["title"]?>">
                    </div>
                </div>



                <div class="row  py-2">

                    <div class="col">
                        <input id="inpPrice" class="w-100 px-2" type="number"  placeholder="price" name="price" value="<?= $result[0]["price"]?>">
                    </div>

                    <div class="col">
                        <input id="inpTaxes" class="w-100 px-2" type="number" placeholder="taxes" name="taxes" value="<?= $result[0]['taxes']?>">
               
                    </div>

                    <div class="col">
                        <input id="inpAds" class="w-100 px-2" type="number" placeholder="ads" name="ads" value="<?= $result[0]["ads"]?>">
                    </div>

                    <div class="col">
                        <input id="inpDiscount" class="w-100 px-2" type="number" placeholder="discount" name="discount" value="<?= $result[0]["discount"]?>">
                    </div>
<!-- ------------------------------ToTAL--------------------------->
                    <div class="col">
                        <div id="total" class="rounded border-0" ><?= $result[0]["total"]?></div>
                    </div>
                </div>

                <!-- ------------------------------Category--------------------------->
                            <div class="row py-2">
                                    <div class="col">
                                        <input id="inpCategory" type="text" class="w-100 px-2" placeholder="categoty" name="category" value="<?= $result[0]["category"]?>">
                                    </div>
                            </div>

            <!-- ------------------------------UPDATE BTN--------------------------->
            <div class="row  py-2">
                <div class="col">
                    <button type="submit" id="BtnCreate" class="btn-sm w-100 bg-success text-light  rounded-pill border-0">UPDATE</button>
                </div>
            </div>
         
            
           
        </form>
        <form action="deleteAllData.php">

       
        </form>
<!-- ------------------------------TABLE OF PRODUCTS--------------------------->
            <table id="tableContent" class="container table text-light w-100">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>PRICE</th>
                        <th>TAXES</th>
                        <th>ADS</th>
                        <th>DISCOUNT</th>
                        <th>TOTAL</th>
                        <th>CATEGORY</th>
                        <th >UPDATE</th>
                        <th >DELETE</th>
                        
                    </tr>
                </thead>
                <tbody id="tbody">

                   <?php
                    require("bringData.php");
                   ?>
                </tbody>
             
                

            </table>
            <script src="./bootstrap/bootstrap.js"></script>
            <script src="./total.js"></script>
            <script src="./searchByTitleAndCategory.js"></script>



</body>
</html>