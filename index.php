<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.css">

    <?php
        include("dbh.inc.php");
    ?>

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
        #deletAll{
        }
        #dalleteBroducts{
            position: absolute;
            margin: 20% 40%;
            display: none;
        }
         #searchByTitle:hover,#BtnCreate:hover,#searchByCategory:hover,#deleteAll:hover{
            letter-spacing: 1.3px;
            transition: 0.5s;
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
    <div id="dalleteBroducts" class="bg-secondary rounded py-5 w-25">
        <button id="cancelBTN" class="btn bg-primary mx-2" value="No">Cancel</button>
        <button id="continueBTN" class="btn bg-danger mx-2" value="yes">Continue</button>
    </div>
    <h1>CRUDS PROJECT</h1>
    <pre><h5 >Create  Read  Update  Delete  Search</h5></pre>
    <form action="process_data.php" method="post"  class="container pt-3 pb-1 rounded">

<!-- ------------------------------TITLE--------------------------->
                <div class="row py-2">
                    <div class="col">
                            <input id="inpTitle" class="w-100" type="text" placeholder="Title" name="title" require>
                    </div>
                </div>



                <div class="row  py-2">

                    <div class="col">
                        <input id="inpPrice" class="w-100 px-2" type="number"  placeholder="price" name="price">
                    </div>

                    <div class="col">
                        <input id="inpTaxes" class="w-100 px-2" type="number" placeholder="taxes" name="taxes">
               
                    </div>

                    <div class="col">
                        <input id="inpAds" class="w-100 px-2" type="number" placeholder="ads" name="ads">
                    </div>

                    <div class="col">
                        <input id="inpDiscount" class="w-100 px-2" type="number" placeholder="discount" name="discount">
                    </div>
<!-- ------------------------------ToTAL--------------------------->
                    <div class="col">
                        <div id="total" class="rounded border-0"></div>
                    </div>
                </div>

                <!-- ------------------------------Category--------------------------->
                            <div class="row py-2">
                                    <div class="col">
                                        <input id="inpCategory" type="text" class="w-100 px-2" placeholder="categoty" name="categoty">
                                    </div>
                            </div>
<!-- ------------------------------count--------------------------->
                <div class="row  py-2">
                    <div class="col">
                        <input id="inpCount" type="number " class="w-100 px-2" placeholder="count" name="count">
                    </div>
            </div>
            <!-- ------------------------------Create BTN--------------------------->
            <div class="row  py-2">
                <div class="col">
                    <button type="submit" id="BtnCreate" class="btn-sm w-100 bg-primary text-light  rounded-pill border-0">CREATE</button>
                </div>
            </div>
            
            
            <!-- ------------------------------search--------------------------->
            <div class="row  py-2">
                <div class="col">
                    <input id="inpSearch" type="search " class="w-100 px-2" placeholder="search">
                </div>
            </div>
            
            
            
            <!-- ------------------------------SEARCH BY CATEGORY BTN--------------------------->
            <div class="row py-2">
                <div class="col">
                    <button onclick="searchCategory()" type="button" id="searchByCategory" class="btn-sm w-100 bg-primary text-light  rounded-pill border-0">Search By Category</button>
                </div>
                <!-- ------------------------------SEARCH BY TITLE BTN--------------------------->
                <div class="col">
                    <button type="button" onclick="searchTitle()"  id="searchByTitle" class="btn-sm w-100 bg-primary text-light  rounded-pill border-0">Search By Title</button>
                </div>
              
            </div>
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



</body>
</html>