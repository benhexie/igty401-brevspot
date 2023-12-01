<?php
    include 'header.php';
?>




<?php

    include 'connect.php';


    




    if(isset($_POST["submit"])){
        $name= htmlentities($_POST["name"]);
        $company_name=htmlentities($_POST["company_name"]) ;
        $id_no=htmlentities($_POST["id_no"]) ;
        $product_type=htmlentities($_POST["product_type"]) ;
    
       

    
        $image=$_FILES["image"]['name'];
        $temp_img=$_FILES['image']['tmp_name'];
      
        $id_image=$_FILES["id_image"]['name'];
        $id_temp_img=$_FILES['id_image']['tmp_name'];
        $nafdac_no=mt_rand();
        // $status=($quantity>0) ? "in stock" : "sold out";
 


        if($name==""){
            echo '  <div class="message" id="message">
            error: fill all fields
        </div>';
        }

        else{

            move_uploaded_file($temp_img, "./database_images/$image");
            move_uploaded_file($id_temp_img, "./database_images/$id_image");

            $result=mysqli_query($conn, "INSERT INTO nafdac (name, company_name, id_no, product_type, product_image, id_image, user, nafdac_no, date) VALUES
             ('$name', '$company_name', '$id_no', '$product_type', '$image', '$id_image','$email', $nafdac_no, NOW()  )");
            
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
    <link rel="stylesheet" href="css/nafdac.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="hero">
        <div class="img_container">
            <img src="images\7xm.xyz715046.jpg" alt="">
            <div class="overlay">
                <h3>NAFDAC <span></span></h3>
            </div>
        </div>

        <h3>register your product <span></span></h3>
    <div class="form_container">
                <form action="" method='post' enctype="multipart/form-data">
                    <div class="name_email">
                        <input type="text" placeholder='product name' name="name">
                        <input type="text" placeholder='company name' name="company_name">
                    </div>

                    <div class="subject">
                        <input type="text" placeholder='identification number' name="id_no">
                    </div>

                    <div class="name_email">

                    <!-- <label for="" id="myBtn">
                        product type
                    </label> -->

                    <label for="insert_image" class="insert_image">
                    uplod product
                    <input type="file" hidden accept="images/*" name="image" id="insert_image">
                    </label>

                    <label for="insert_id" class="insert_image">
                    upload id
                    <input type="file" hidden accept="images/*" name="id_image" id="insert_id">
                    </label>


                    <label for="" id="brand_btn">
                        product type
                    </label>

                     
                    </div>
                   
                    <input type="submit" value="submit" name="submit">


                    <div id="myModal" class="modal">
  <div class="modal-content">
    <div class="modal_header">
    categories
    </div>

    <div id="dummy" class="checkbox">
    <input type="checkbox" id="category1" name="categories[]" value="" checked>
    <label for="category1">category 1</label>
    </div>

    <?php
       $query= mysqli_query($conn, "select * from product_type");

       if(mysqli_num_rows($query)==0){
           echo 'no categories here';
       }
   
       else{
           while($row=mysqli_fetch_assoc($query)){
               echo '   <div class="checkbox">
               <input type="checkbox" id="'.$row['name'].'" name="categories[]" value="'.$row['name'].'">
               <label for="'.$row["name"].'">'.$row["name"].'</label>
               </div>';
           }
       }
    ?>

    
       
    
  </div>

  <div class="close">
            done
        </div>
</div>


<div id="brandModal" class="brand_modal">
  <div class="modal-content">
  <div class="modal_header">
    brands
    </div>

    <div id="dummy" class="radio">
    <input type="radio" id="brand1" name="product_type" value="generic" checked>
    <label for="brand1">brand 1</label>
    </div> 

    <?php
       $query= mysqli_query($conn, "select * from product_type");

       if(mysqli_num_rows($query)==0){
           echo 'no brands here';
       }
   
       else{
           while($row2=mysqli_fetch_assoc($query)){
               echo '   <div class="checkbox">
               <input type="radio" id="'.$row2['name'].'" name="product_type" value="'.$row2['name'].'">
               <label for="'.$row2["name"].'">'.$row2["name"].'</label>
               </div>';
           }
       }
    ?>

  </div>
  <div class="brand_close">
            done
        </div>
</div>
                </form>
            </div>

            <div class="container registered">
            <h3>nafdac registered products</h3>

<div class="orders">
                <div class="orders_container">
                <table class="styled-table">
    <thead>
        <tr>
 
            <th> product </th>
            <th>product image</th>
            <th>nafdac reg no</th>
            <th>date</th>
        </tr>
    </thead>
    <tbody>
   
            <?php
            $query=mysqli_query($conn, "SELECT * from nafdac where user='$email'");

            if(mysqli_num_rows($query)<1){
                echo '<h3>no products registered!</h3>';
              }
              else{
                while($row=mysqli_fetch_assoc($query)){
                    $product=$row['name'];
                    $product_image=$row['product_image'];
                    $nafdac=$row['nafdac_no'];
                    $date=$row['date'];
    
                    echo '
                    <tr>
         
                    <td>'.$product.' </td>
                    <td>  <div class="product_img"><img src="./database_images/'.$product_image.' " alt=""> </div>  </td>
                    <td> '.$nafdac.' </td>
                    <td>'.$date.'</td>
                </tr>
                    ';
                }
              }
        
            ?>

   

 

      
    
    
    </tbody>
</table>
    </div>
            </div>
    </div>
</body>
<script src="js/min.js"></script>
<script src="js/nafdac.js"></script>
</html>