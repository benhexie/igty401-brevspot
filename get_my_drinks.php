




<?php
    include 'connect.php';

    session_start();
    include 'connect.php';
  
  
    if(!isset($_SESSION['email'])){
      header("location: login_signup.php");
    }
  
  
    if(isset($_SESSION["id"])){
      $email=$_SESSION['email'];
    }
    $output='';


   
    $query=mysqli_query($conn, "SELECT * from drinks where email='$email' order by rand() ");

    if(mysqli_num_rows($query)<1){
        $output='
            <h3> you have no products!</h3>
        ';
    }

    while($row=mysqli_fetch_assoc($query)){
        $output.='
        <div class="product_card">
        <div class="product_img">
            <img src="./database_images/'.$row['image'].'" alt="">
        </div>

        <div class="product_name">
           '.$row['name'].'
        </div>

        <div class="star_array">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-regular fa-star"></i>
        <i class="fa-regular fa-star"></i>
        </div>

        <div class="product_price">
        ₦'.$row['price'].'
        </div>

       <a href="remove_drink.php?id='.$row['id'].'"> <div class="submit">
            remove
        </div></a>

    </div>
        ';
    }
















echo $output;
?>