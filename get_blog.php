




<?php
    include 'connect.php';

    $output='';
    $query=mysqli_query($conn, "SELECT * from blog order by rand() limit 12 ");

    while($row=mysqli_fetch_assoc($query)){
        $output.='
        <div class="stories_card">
        <div class="story_img">
            <img src="./database_images/'.$row['image'].'" alt="">
        </div>

        <h3>'.$row['name'].' <span></span></h3>
        <div class="data">
       '.$row['details'].'
        </div>
    </div>
        ';
    }
















echo $output;
?>