<?php
    include 'header.php';
    include 'connect.php';
?>





<?php

  
if(isset($_POST["add"])){
  $id=$_POST["id"];
  $query= mysqli_query($conn, "SELECT *from cart where product_id='$id' and buyer='$email'");

$row=mysqli_fetch_assoc($query);
  $quantity=$row["quantity"];
 

  $quantity+=1;




  
$update_query=mysqli_query($conn, "UPDATE cart SET quantity=$quantity WHERE buyer='$email' AND product_id='$id'");



  echo "<script>window.open('cart.php', '_self')</script>"; 

  }



  if(isset($_POST["minus"])){
      $id=$_POST["id"];
      $query= mysqli_query($conn, "SELECT *from cart where product_id='$id' and buyer='$email'");

    $row=mysqli_fetch_assoc($query);
      $quantity=$row["quantity"];
     
      if($quantity>1){
          $quantity-=1;
      }
    



   
      
    $update_query=mysqli_query($conn, "UPDATE cart SET quantity=$quantity WHERE buyer='$email' AND product_id='$id'");
  


      echo "<script>window.open('cart.php', '_self')</script>"; 
    
      }


      
  if(isset($_POST["remove"])){
      $id=$_POST["id2"];
      $query= mysqli_query($conn, "DELETE from cart where product_id='$id' and buyer='$email'");


  


      echo "<script>window.open('cart.php', '_self')</script>"; 
    
      }
?>




<?php

  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query1=mysqli_query($conn, "SELECT * from drinks where id=$id");
    $row=mysqli_fetch_assoc($query1);

    $name=$row['name'];
    $price=$row['price'];
    $image=$row['image'];
    $seller=$row['email'];

    $query2=mysqli_query($conn, "SELECT * from cart where product_id=$id and buyer='$email'");
    if(mysqli_num_rows($query2)>0){
        header("location: buy.php?in_cart");
    }

    else{
      $query= mysqli_query($conn, "INSERT into cart(buyer, product_name, product_id, image, seller, price, quantity) values('$email', '$name', '$id', '$image', '$seller', $price, 1 )");
    }

   

    if($query){
      header("location: buy.php");
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/cart.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="hero">
        <div class="img_container">
            <img src="images\7xm.xyz656719.jpg" alt="">
            <div class="overlay">
                <h3>what's in your cart <span></span></h3>
            </div>
        </div>

        <h3>cart</h3>
<h3>
  <?php
          $total_cost=0;

 


          $query4=mysqli_query($conn, "SELECT * from cart where buyer='$email'");
          while($row=mysqli_fetch_assoc($query4)){
              $product_id=$row["product_id"];
             
              $price_query=mysqli_query($conn, "SELECT * from drinks where id='$product_id'");
      
              while($cart_products=mysqli_fetch_assoc($price_query)){
      
                  $total=array($cart_products["price"]);
                 $sum=array_sum($total);
                $total_cost+=$sum*$row['quantity'];
              }
          }

          echo "total cost: ".$total_cost."" ;
  ?>
</h3>
<div class="cart">
            <div class="cart_container">
        

            

                  

      
            </div>

            
        </div>

        <div class="checkout">


        <?php
        
        $query=mysqli_query($conn, "SELECT * from cart where buyer='$email'");
        if(mysqli_num_rows($query)<1){
          echo '

          <style>

            .checkout a{
                background: rgb(0, 0, 0, 0.5);
                cursor: default;
            }
          
          </style>
          <a href="" >

       
          CHECKOUT
       

         </a>   
          ';
        }

        else{
          echo '

          <a href="checkout.php?user='.$email.'">

       
          CHECKOUT
       

         </a> 
          ';
        }
        ?>
        
                </div>
    </div>
</body>
<script src="js/min.js"></script>
<script src="js/cart.js"></script>
</html>