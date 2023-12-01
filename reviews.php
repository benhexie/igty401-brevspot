<?php
    include 'header.php';
?>


<?php

    include 'connect.php';


    




    if(isset($_POST["submit"])){
        $feedback= htmlentities($_POST["feedback"]);
      
       

    
     
      
        // $status=($quantity>0) ? "in stock" : "sold out";
 


        if($feedback==""){
            echo '  <div class="message" id="message">
            error: please enter feedback
        </div>';
        }

        else{

            $query=mysqli_query($conn, "SELECT * from users where email = '$email'");
            $row=mysqli_fetch_assoc($query);
            $user=$row['full_name'];

         

            $result=mysqli_query($conn, "INSERT INTO reviews (name, details) VALUES ('$user', '$feedback' )");
            
            if($result){
                echo '  <div class="message" id="message">
                success
            </div>';
            }
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/reviews.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="hero">
        <div class="img_container">
            <img src="images\7xm.xyz636989.jpg" alt="">
            <div class="overlay">
                <h3>reviews <span></span></h3>
            </div>
        </div>

        <h3>what our customers say <span></span></h3>
        <div class="container reviews">
            <div class="reviews_card">
                <div class="profile">
                    <div class="profile_cont">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user_star">
                        <div class="username">
                            michael kennedy
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
                Indulging in BrevSpot's Berry Blush was a revelation! The authentic strawberry flavor captivated my taste buds, offering a remarkably smooth and refreshing experience. Its natural sweetness was perfect for sunny days or as a quick energizer. This drink is an absolute must-try for anyone seeking a delightful, fruit-infused beverage that's both invigorating and satisfying—a true testament to BrevSpot's commitment to quality and flavor authenticity.
                </div>
            </div>
            <div class="reviews_card">
                <div class="profile">
                    <div class="profile_cont">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user_star">
                        <div class="username">
                            michael kennedy
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
                Indulging in BrevSpot's Berry Blush was a revelation! The authentic strawberry flavor captivated my taste buds, offering a remarkably smooth and refreshing experience. Its natural sweetness was perfect for sunny days or as a quick energizer. This drink is an absolute must-try for anyone seeking a delightful, fruit-infused beverage that's both invigorating and satisfying—a true testament to BrevSpot's commitment to quality and flavor authenticity.
                </div>
            </div>
            <div class="reviews_card">
                <div class="profile">
                    <div class="profile_cont">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user_star">
                        <div class="username">
                            michael kennedy
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
                Indulging in BrevSpot's Berry Blush was a revelation! The authentic strawberry flavor captivated my taste buds, offering a remarkably smooth and refreshing experience. Its natural sweetness was perfect for sunny days or as a quick energizer. This drink is an absolute must-try for anyone seeking a delightful, fruit-infused beverage that's both invigorating and satisfying—a true testament to BrevSpot's commitment to quality and flavor authenticity.
                </div>
            </div>
            <div class="reviews_card">
                <div class="profile">
                    <div class="profile_cont">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user_star">
                        <div class="username">
                            michael kennedy
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
                Indulging in BrevSpot's Berry Blush was a revelation! The authentic strawberry flavor captivated my taste buds, offering a remarkably smooth and refreshing experience. Its natural sweetness was perfect for sunny days or as a quick energizer. This drink is an absolute must-try for anyone seeking a delightful, fruit-infused beverage that's both invigorating and satisfying—a true testament to BrevSpot's commitment to quality and flavor authenticity.
                </div>
            </div>
            <div class="reviews_card">
                <div class="profile">
                    <div class="profile_cont">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user_star">
                        <div class="username">
                            michael kennedy
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
                Indulging in BrevSpot's Berry Blush was a revelation! The authentic strawberry flavor captivated my taste buds, offering a remarkably smooth and refreshing experience. Its natural sweetness was perfect for sunny days or as a quick energizer. This drink is an absolute must-try for anyone seeking a delightful, fruit-infused beverage that's both invigorating and satisfying—a true testament to BrevSpot's commitment to quality and flavor authenticity.
                </div>
            </div>
            <div class="reviews_card">
                <div class="profile">
                    <div class="profile_cont">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user_star">
                        <div class="username">
                            michael kennedy
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
                Indulging in BrevSpot's Berry Blush was a revelation! The authentic strawberry flavor captivated my taste buds, offering a remarkably smooth and refreshing experience. Its natural sweetness was perfect for sunny days or as a quick energizer. This drink is an absolute must-try for anyone seeking a delightful, fruit-infused beverage that's both invigorating and satisfying—a true testament to BrevSpot's commitment to quality and flavor authenticity.
                </div>
            </div>
            <div class="reviews_card">
                <div class="profile">
                    <div class="profile_cont">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user_star">
                        <div class="username">
                            michael kennedy
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
                Indulging in BrevSpot's Berry Blush was a revelation! The authentic strawberry flavor captivated my taste buds, offering a remarkably smooth and refreshing experience. Its natural sweetness was perfect for sunny days or as a quick energizer. This drink is an absolute must-try for anyone seeking a delightful, fruit-infused beverage that's both invigorating and satisfying—a true testament to BrevSpot's commitment to quality and flavor authenticity.
                </div>
            </div>
            <div class="reviews_card">
                <div class="profile">
                    <div class="profile_cont">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user_star">
                        <div class="username">
                            michael kennedy
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
                Indulging in BrevSpot's Berry Blush was a revelation! The authentic strawberry flavor captivated my taste buds, offering a remarkably smooth and refreshing experience. Its natural sweetness was perfect for sunny days or as a quick energizer. This drink is an absolute must-try for anyone seeking a delightful, fruit-infused beverage that's both invigorating and satisfying—a true testament to BrevSpot's commitment to quality and flavor authenticity.
                </div>
            </div>
            <div class="reviews_card">
                <div class="profile">
                    <div class="profile_cont">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user_star">
                        <div class="username">
                            michael kennedy
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
                Indulging in BrevSpot's Berry Blush was a revelation! The authentic strawberry flavor captivated my taste buds, offering a remarkably smooth and refreshing experience. Its natural sweetness was perfect for sunny days or as a quick energizer. This drink is an absolute must-try for anyone seeking a delightful, fruit-infused beverage that's both invigorating and satisfying—a true testament to BrevSpot's commitment to quality and flavor authenticity.
                </div>
            </div>
            <div class="reviews_card">
                <div class="profile">
                    <div class="profile_cont">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user_star">
                        <div class="username">
                            michael kennedy
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
                Indulging in BrevSpot's Berry Blush was a revelation! The authentic strawberry flavor captivated my taste buds, offering a remarkably smooth and refreshing experience. Its natural sweetness was perfect for sunny days or as a quick energizer. This drink is an absolute must-try for anyone seeking a delightful, fruit-infused beverage that's both invigorating and satisfying—a true testament to BrevSpot's commitment to quality and flavor authenticity.
                </div>
            </div>
            <div class="reviews_card">
                <div class="profile">
                    <div class="profile_cont">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user_star">
                        <div class="username">
                            michael kennedy
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
                Indulging in BrevSpot's Berry Blush was a revelation! The authentic strawberry flavor captivated my taste buds, offering a remarkably smooth and refreshing experience. Its natural sweetness was perfect for sunny days or as a quick energizer. This drink is an absolute must-try for anyone seeking a delightful, fruit-infused beverage that's both invigorating and satisfying—a true testament to BrevSpot's commitment to quality and flavor authenticity.
                </div>
            </div>
            <div class="reviews_card">
                <div class="profile">
                    <div class="profile_cont">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <div class="user_star">
                        <div class="username">
                            michael kennedy
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
                Indulging in BrevSpot's Berry Blush was a revelation! The authentic strawberry flavor captivated my taste buds, offering a remarkably smooth and refreshing experience. Its natural sweetness was perfect for sunny days or as a quick energizer. This drink is an absolute must-try for anyone seeking a delightful, fruit-infused beverage that's both invigorating and satisfying—a true testament to BrevSpot's commitment to quality and flavor authenticity.
                </div>
            </div>
        </div>

        <div class="form_container">
                <form action="" method='post'>
                 
                    <div class="textarea">

                    <textarea  name="feedback" id="" cols="30" rows="10" placeholder="leave feedback" ></textarea>
                    </div>
                    <input type="submit" value="submit" name="submit">
                </form>
            </div>
    </div>
</body>
<script src="js/min.js"></script>
<script src="js/review.js"></script>
</html>