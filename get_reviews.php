




<?php
    include 'connect.php';

    $output='';
    $query=mysqli_query($conn, "SELECT * from reviews order by rand() limit 12 ");

    while($row=mysqli_fetch_assoc($query)){
        $output.='
        <div class="reviews_card">
                <div class="profile">
                    <div class="profile_cont">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user_star">
                        <div class="username">
                          '.$row['name'].'
                        </div>
                        <div class="star_array">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>

                <div class="review_text">
              '.$row['details'].'
                </div>
            </div>
        ';
    }
















echo $output;
?>