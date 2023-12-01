<?php
    include 'header.php';

    if(isset($_GET['in_cart'])){
        echo '  <div class="message" id="message">
        already in cart
    </div>';
    }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/buy.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="hero">

    <!-- <div class="buy_nav">
    <ul>
      <a href="buy.php">  <li>
            beverages
        </li></a>
       <a href="buy.php?crops"> <li>
            crops
        </li></a>
  
    </ul>
    </div> -->
    <div class="slider">
    <div class="on_display fade">
        <div class="display_image">
            <img src="images\7xm.xyz682260.jpg" alt="">
        </div>

      
    </div>
    <div class="on_display fade">
        <div class="display_image"> 
            <img src="images\7xm.xyz720224.jpg" alt="">
        </div>

   
    </div>

    <div class="on_display fade">
        <div class="display_image" >
            <img src="images\7xm.xyz547855.jpg" alt="">
        </div>

   
    </div>
    </div>

    <div class="search_cont">
        <form action="">
            <input type="text" placeholder="search">
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </div>



    <div class="shop_section">
        <h3>featured <span></span></h3>

        <?php
            if(!isset($_GET['crops'])){
                include 'drink_shop.php';
            }

            else{
                include 'crop_shop.php';
            }
        ?>
    
    </div>
    </div>

</body>
<script src="js/main.js"></script>
<script src="js/min.js"></script>
<script src="js/shop.js"></script>

</html>