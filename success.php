<?php
    include 'connect.php';
    include 'header.php';

    if(!isset($_SESSION["id"])){
        header("location:login.php");
    }

    if(isset($_GET['successfullypaid'])){
        $user=$_GET['successfullypaid'];
    }
        // echo $user;
      
        
        $total_cost=0;

        $email=$_SESSION["email"];


   
  
     


      $query=mysqli_query($conn, "SELECT * from cart where buyer='$user'");
      $count=mysqli_num_rows($query);
      while($row=mysqli_fetch_assoc($query)){
          $product_id=$row["product_id"];
          $cart_quantity=$row["quantity"];
          $seller=$row["seller"];
         
          $price_query=mysqli_query($conn, "SELECT * from drinks where id='$product_id'");
  
          while($cart_products=mysqli_fetch_assoc($price_query)){
          


            $product_name=$cart_products['name'];

            $productID=$cart_products['id'];

       
                    $total=array($cart_products["price"]);
                     $sum=array_sum($total);
                    $total_cost+=$sum*$row['quantity'];


           $insert_order= mysqli_query($conn, "INSERT into drink_orders (buyer, name, seller, quantity, date) values ( '$user', '$product_name', '$seller', $cart_quantity, NOW())");

                 if($insert_order){
       
          mysqli_query($conn, "DELETE from cart where buyer='$user'");
          header("location: orders.php");
      }
            

        

          }

      
      }

 
  
  
  
  
  


  
    ?>