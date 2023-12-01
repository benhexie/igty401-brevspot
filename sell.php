<?php

    include 'header.php';
?>




<?php

    include 'connect.php';


    




    if(isset($_POST["submit"])){
        $name= htmlentities($_POST["name"]);
        $price=htmlentities($_POST["price"]) ;
        $keywords=htmlentities($_POST["keywords"]) ;
        $categories=implode(", ", $_POST["categories"] ) ;
        $brands=$_POST["brands"];
       
       
    
        $image=$_FILES["image"]['name'];
        $temp_img=$_FILES['image']['tmp_name'];
      
        // $status=($quantity>0) ? "in stock" : "sold out";
 


        if($name=="" or $price==""  or $keywords=="" or $image=="" ){
            echo '  <div class="message" id="message">
            error: fill all fields
        </div>';
        }

        else{

            move_uploaded_file($temp_img, "./database_images/$image");

            $result=mysqli_query($conn, "INSERT INTO drinks (name, price, keywords, email, image, brand, category) VALUES ('$name', $price, '$keywords',  '$email',  '$image', '$brands', '$categories')");
            
            if($result){
                echo '  <div class="message" id="message">
                success
            </div>';
            }
        }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/sell.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="hero">
    <div class="sell_nav">
    <ul>
      <a href="sell.php">  <li>
            my products
        </li></a>
       <a href="sell.php?orders"> <li>
           customer's orders
        </li></a>
  
    </ul>


    </div>


    <?php
            if(!isset($_GET['orders'])){
                include 'my_products.php';
            }

            else{
                include 'drink_orders.php';
            }
        ?>

    </div>
</body>
<script src="js/min.js"></script>
<script src="js/dom.js"></script>
<script src="js/sell.js"></script>
</html>