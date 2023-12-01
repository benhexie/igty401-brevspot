<?php
    include 'connect.php';


    session_start();
    if(isset($_SESSION["id"])){
        $email=$_SESSION['email'];
      }


    //   $total_cost=0;

 


    // $query4=mysqli_query($conn, "SELECT * from cart where buyer='$email'");
    // while($row=mysqli_fetch_assoc($query4)){
    //     $product_id=$row["product_id"];
       
    //     $price_query=mysqli_query($conn, "SELECT * from products where id='$product_id'");

    //     while($cart_products=mysqli_fetch_assoc($price_query)){

    //         $total=array($cart_products["price"]);
    //        $sum=array_sum($total);
    //       $total_cost+=$sum*$row['quantity'];
    //     }
    // }

    $output='';

    $query=mysqli_query($conn, "SELECT * from cart where buyer='$email'");


    if(mysqli_num_rows($query)<1){
      $output='<h3>add items to cart!</h3>';
    }

    
        while($row=mysqli_fetch_assoc($query)){
            $name=$row['product_name'];
            $id=$row['product_id'];
            $price=$row['price'];
            $image=$row['image'];
            $quantity=$row['quantity'];
            // $seller_email=$row['seller_email'];
            // $seller_name=$row['seller_name'];

          
            
        
                $output.= '
                <div class="product">
                <div class="img">
                    <img src="./database_images/'.$image.'" alt="">
                </div>

                <div class="cart_product_name">
                '.$name.'
                </div>
               <form method="post"> 
              <input type="text" hidden  name="id" value="'.$id.'">
                <div class="quantity_container">
                <button name="minus">  <div class="minus">
                  <i class="fa-solid fa-minus"></i>
                  </div>
                  </button>

                  <div class="quantity">
                  '.$quantity.'
                  </div>

                <button name="add">  <div class="plus">
                  <i class="fa-solid fa-plus"></i>
                  </div>
                  </button>
                </div>
                </form> 


                <div class="cart_product_price">
                ₦'.$price.'
                </div>
              
                 <form method="post"> 
                  <input type="text" hidden  name="id2" value="'.$id.'">
                   <button name="remove">    <div class="trash">
                  <i class="fa-solid fa-trash"></i> <span>REMOVE</span>
                  </div>
                  </button>
                 </form> 
               
               
            </div>
                ';
            








     
        }
    




    echo $output;
?>

       