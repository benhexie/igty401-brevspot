




<?php
    include 'connect.php';

    $output='';
    $query=mysqli_query($conn, "SELECT * from land order by rand() limit 6 ");

    while($row=mysqli_fetch_assoc($query)){
        $output.='
        <div class="land_card">
        <div class="land_img">
        <img src="./database_images/'.$row['image'].'" alt="">

        </div>
        <div class="price">
        ₦'.$row['price'].'
        </div>

        <div class="name">
        '.$row['name'].'
        </div>

        <div class="seller">
          seller:  '.$row['user'].'
        </div>

        <div class="info">
            <h3>info: <span></span></h3>
            '.$row['details'].'

            <a href=""><div class="buy">
                acquire
            </div></a>
        </div>
    </div>
        ';
    }
















echo $output;
?>