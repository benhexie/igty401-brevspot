




<?php
    include 'connect.php';
    $output='';


   
    $query=mysqli_query($conn, "SELECT * from drinks order by rand() ");

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

       <a href="cart.php?id='.$row['id'].'"> <div class="submit">
            buy
        </div></a>

    </div>
        ';
    }
















echo $output;
?>