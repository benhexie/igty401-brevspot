<?php
        include 'connect.php';

?>

<div class="shop">
            <div class="left">
                <div class="categories_cont">
                    <h3>categories <span></span></h3>
                    <ul class="categories">
                        <a href=""><li>
                            cocktails
                        </li></a>

                        <a href=""><li>
                            apple drinks
                            </li></a>

                            <a href=""><li>
                            grape drinks
                            </li></a>

                            <a href=""><li>
                            strawberry drinks
                            </li></a>
                            <a href=""><li>
                            beer
                            </li></a>
                            <a href=""><li>
                            wine
                            </li></a>
                            <a href=""><li>
                            banana
                            </li></a>
                    </ul>
                </div>
            </div>

            <div class="center drinks">
            <?php
    if(!isset($_GET['category'])){
   
        if(!isset($_GET['brand'])){

        

   
    
    
       
        $query=mysqli_query($conn, "SELECT * from drinks order by rand() ");
    
        while($row=mysqli_fetch_assoc($query)){
            echo'
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

        }
    }





    if(isset($_GET['category'])){
        $category=$_GET['category'];


        include 'connect.php';
      
    
    
       
        $query=mysqli_query($conn, "SELECT * from drinks where category like '%$category%' order by rand() ");
        if(mysqli_num_rows($query)<1){
            echo '<h3>no products under this category <span></span></h3>';
        }
    
        while($row=mysqli_fetch_assoc($query)){
            echo'
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


    }


    if(isset($_GET['brand'])){
        $brand=$_GET['brand'];


       
      
    
    
       
        $query=mysqli_query($conn, "SELECT * from drinks where brand like '%$brand%' order by rand() ");

        if(mysqli_num_rows($query)<1){
            echo '<h3>no products under this brand <span></span></h3>';
        }
    
        while($row=mysqli_fetch_assoc($query)){
            echo'
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


    }
 
    
?>
         
            </div>

            <div class="right">
                <div class="brands_cont">
                    <h3>brands <span></span></h3>
                    <ul class="brands">
                        <a href=""><li>
                            coca-cola
                        </li></a>

                        <a href=""><li>
                            fanta
                            </li></a>

                            <a href=""><li>
                            planet
                            </li></a>

                            <a href=""><li>
                            smoove
                            </li></a>
                            <a href=""><li>
                            fayrouz
                            </li></a>
                            <a href=""><li>
                            pepsi
                            </li></a>
                            <a href=""><li>
                            bigi
                            </li></a>
                    </ul>
                </div>
            </div>


        </div>