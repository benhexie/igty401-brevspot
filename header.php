<?php
  session_start();
  include 'connect.php';


  if(!isset($_SESSION['email'])){
    header("location: login_signup.php");
  }


  if(isset($_SESSION["id"])){
    $email=$_SESSION['email'];
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/b782cf5553.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brevspot</title>
</head>
<body>

 
    <div class="nav">
        <ul>
            <li>
             <a href="main.php"> home</a>   
            </li>
          
            <li>
           <a href="about.php">about</a>   
            </li>


            <li>
           <a href="nafdac.php">NAFDAC registration</a>   
            </li>

            <li>
           <a href="blog.php">blog</a>   
            </li>


            <li>
           <a href="sell.php">sell</a>   
            </li>

          

            <li>
           <a href="buy.php">buy</a>   
            </li>


            <li>
           <a href="cart.php">cart</a>   
            </li>

            <li>
           <a href="reviews.php">reviews</a>   
            </li>

            <li>   
           <a href="orders.php">orders</a>   
            </li>

            <li>
           <a href="land_sale.php">land sale</a>   
            </li>

            <li>
           <a href="logout.php">sign out</a>   
            </li>

          
        </ul>
    </div>

   
</body>
</html>