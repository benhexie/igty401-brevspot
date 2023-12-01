<?php
    include 'connect.php';


    
    function createuser($conn, $fname, $email, $password){
  
        $insert= "INSERT INTO users (full_name,  email, password) VALUES (?,?,?)";

        $stmt2=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt2, $insert)){
            header("location: login_signup.php?error=stmtfailed");
            exit();
        }
    
        
        $hashed_pwd=password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt2, 'sss', $fname,  $email, $hashed_pwd);
        mysqli_stmt_execute($stmt2);
        mysqli_stmt_close($stmt2);
        
        header("location: login_signup.php?error=success");
        exit();
    }



    function emptysignup($email, $fname,  $password, $confirm){
        $result;
        if($email=="" or $fname=="" or $password=="" or $confirm==""){
            $result= true;
        }
        else {
            $result=false;
        } 

        return $result;
    }

    function emptylogin($email, $password){
        $result;
        if($email=="" or $password==""){
            $result= true;
        }
        else {
            $result=false;
        } 

        return $result;
    }


    function invalid_email($email){
        $result;
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result= true;
        }

        else{
            $result= false;
        }

        return $result;
    
    }


    function pwd_match($password, $confirm){
        $result;
        if($password !== $confirm){
            $result= true;
        }
        
        else{
            $result=false;
        }
        return $result;
    }

    function email_exists($conn, $email){
        $result;
    
        $query="SELECT * FROM users WHERE email=?";
    
        $stmt=mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $query)){
            header("location: signup.php?error=stmtfailed");
            exit();
        }
    
        
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result= mysqli_stmt_get_result($stmt);
    
        if($row=mysqli_fetch_assoc($result)){
            return $row;
        }

        else{
            $result= false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function login($conn, $email, $password){
        $uidexist= email_exists($conn, $email);

        if($uidexist===false){
            header("location: login_signup.php?error=wrongLogin");
            exit();
        }

        $pwdHashed=$uidexist["password"];
        $checkedpwd=password_verify($password, $pwdHashed);

        if($checkedpwd===false){
            header("location: login_signup.php?error=wrongLogin");
            exit();
        }

        else if($checkedpwd===true){
            session_start();

            $_SESSION["id"]=$uidexist["id"];
            $_SESSION['email']=$uidexist['email'];
            $_SESSION['full_name']=$uidexist['full_name'];

            header("location: main.php");
            exit();
        }
    }
?>