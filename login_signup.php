
<?php
    include 'connect.php';
?>




<?php
 
    include 'functions.php';

    if(isset($_GET['error'])){
        if($_GET['error']=='emptyfield'){
            echo '  <div class="message" id="message">
            please fill all fields
        </div>';
        }
    }

    if(isset($_GET['error'])){
        if($_GET['error']=='pwd_not_match'){
            echo '  <div class="message" id="message">
            passwords do not match
        </div>';
        }
    }

    if(isset($_GET['error'])){
        if($_GET['error']=='email_in_use'){
            echo '  <div class="message" id="message">
            email already used by another account
        </div>';
        }
    }

    if(isset($_GET['error'])){
        if($_GET['error']=='success'){
            echo '  <div class="message" id="message">
            account created
        </div>';
        }
    }

    if(isset($_GET['error'])){
        if($_GET['error']=='invalidemail'){
            echo '  <div class="message" id="message">
            please enter a valid email
        </div>';
        }
    }

    if(isset($_POST['sign_up'])){
        $email=$_POST['email'];
        $fname=$_POST['fname'];
        $password=$_POST['password'];
        $confirm=$_POST['confirm_password'];
        // $password=$_POST['password'];

     
        

    

        if(emptysignup($email, $fname,  $password, $confirm)!== false){
            
            
            header("location: login_signup.php?error=emptyfield");
            exit();
 
        }

        if(invalid_email($email)!== false){
            header("location: landing_page.php?error=invalidemail");
        //     echo '<div class="message" id="message">
        //     error: INVALID EMAIL
        // </div>';
        exit();
        }

        if(pwd_match($password, $confirm)!== false){
      
            header("location: login_signup.php?error=pwd_not_match");
            exit();
        }

        if(email_exists($conn, $email)!== false){
            header("location: login_signup.php?error=email_in_use");
      
            exit();
        }

        createuser($conn, $fname,  $email, $password);
    
        
    }
?>


<?php

    if(isset($_POST['login'])){
        $email=$_POST['email'];
        $password=$_POST['password'];



        

    if(emptylogin($email, $password)){
        header("location: login_signup.php?error=empty_login");
        exit();
    }

    login($conn, $email, $password);
    }


    if(isset($_GET['error'])){
        if($_GET['error']=='wrongLogin'){
            echo '  <div class="message" id="message">
            username or password incorrect
        </div>';
        }
    }

    if(isset($_GET['error'])){
        if($_GET['error']=='empty_login'){
            echo '  <div class="message" id="message">
            enter username and password
        </div>';
        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/auth.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="hero">

        <div class="img_container">
            <img src="images\7xm.xyz875594.jpg" alt="">
            <div class="overlay">
               <h3>welcome to brevspot <span></span></h3>
             <h2>your spot for beverages</h2>  
            </div>
        </div>
    <h3>login <span></span></h3>
    <div class="form_container signup">
                <form action="" method='post'>
                    <div class="name_email">
                        <input type="text" placeholder='full name' name="fname">
                        <input type="email" placeholder='email' name="email">
                    </div>

                    <div class="name_email">
                        <input type="password" placeholder='password' name="password">
                        <input type="password" placeholder='confirm password' name="confirm_password">
                    </div>

                   
                    <input type="submit" value="submit" name="sign_up">
                    <div class="has_acc">
                      <span> i have an account!</span> 
                    </div>
                </form>
            </div>

            <div class="form_container login">
                <form action="" method='post'>
                    <div class="name_email">
                        <input type="email" placeholder='email' name="email">
                        <input type="password" placeholder='password.' name="password">
                    </div>

                 

                   
                    <input type="submit" value="submit" name="login">
                    <div class="not_has_acc">
                      <span> don't have an account?</span> 
                    </div>
                </form>
            </div>
    </div>
</body>
<script src="js/min.js"></script>
<script src="js/auth.js"></script>

</html>