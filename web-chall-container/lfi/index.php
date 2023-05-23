<?php

$file = $_GET['file'];

if(isset($_GET['file'])){
    $file = $_GET['file'];
    

    if ($file === "flag.txt") {
        echo "nothing here hehe";
    }
    else{
        echo $file;
        include($file);
        echo 'hai';
    }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


body{
 background-color:#eee;
 font-family: "Poppins", sans-serif;
 font-weight: 300;
}

.height{
 height: 100vh;
}


.search{
position: relative;
box-shadow: 0 0 40px rgba(51, 51, 51, .1);
  
}

.search input{

 height: 60px;
 text-indent: 25px;
 border: 2px solid #d6d4d4;


}


.search input:focus{

 box-shadow: none;
 border: 2px solid blue;


}

.search .fa-search{

 position: absolute;
 top: 20px;
 left: 16px;

}

.search button{

 position: absolute;
 top: 5px;
 right: 5px;
 height: 50px;
 width: 110px;
 background: blue;

}
    </style>
</head>
<body>
<div class="container">

    <div class="row height d-flex justify-content-center align-items-center">

        <div class="col-md-8">

            <div class="search">
                <form action="" method="get">
                    <i class="fa fa-search"></i>
                    <label for="">insert any input</label>
                    <input type="text" name="file" class="form-control"  placeholder="Have a question? Ask Now">
                
                    <button class="btn btn-primary">Search</button>
                </form>
                
                <input type="text" class="form-control" placeholder="Have a question? Ask Now">
                
            </div>

        </div>
    </div>  
</div>


</body>
</html>