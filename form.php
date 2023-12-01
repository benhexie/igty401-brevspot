
<?php

    include 'connect.php';


    




    if(isset($_POST["submit"])){
        $name= htmlentities($_POST["name"]);
        $price=htmlentities($_POST["price"]) ;
        $details=htmlentities($_POST["details"]) ;
        $user=htmlentities($_POST["user"]) ;
       

    
        $image=$_FILES["image"]['name'];
        $temp_img=$_FILES['image']['tmp_name'];
      
        // $status=($quantity>0) ? "in stock" : "sold out";
 


        if($name==""){
            echo '  <div class="message" id="message">
            error: fill all fields
        </div>';
        }

        else{

            move_uploaded_file($temp_img, "./database_images/$image");

            $result=mysqli_query($conn, "INSERT INTO product_type (name) VALUES ('$name')");
            
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
    <link rel="stylesheet" href="css/form.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>add a product</h3>
        <div class="product_name">
            <input type="text" placeholder="name" name="name">
        </div>

        <div class="product_name">
            <input type="text" placeholder="price" name="price">
        </div>

        <div class="product_name">
            <input type="text" placeholder="user" name="user">
        </div>

        <div class="product_price">
            <input type="text" placeholder="details" name="details">
        </div>

        <div class="select_species">
        <details class="custom-select">
  <summary class="radios">
    <input type="radio" name="item" id="default" title="fish species" checked>
    <input type="radio" name="item" id="item1" title="tilapia" value="tilapia"> 
    <input type="radio" name="item" id="item2" title="catfish" value="cat fhsh">
    <input type="radio" name="item" id="item3" title="heterotis" value="heterotis">
    <input type="radio" name="item" id="item4" title="butterfly fish" value="butterfly fish">
    <input type="radio" name="item" id="item5" title="carp" value="carp">
    <input type="radio" name="item" id="item6" title="lung fish" value="lung fish">
    <input type="radio" name="item" id="item7" title="mullet" value="mullet">
    <input type="radio" name="item" id="item8" title="mud skipper" value="mud skipper">
    <input type="radio" name="item" id="item9" title="tiger barb" value="tiger barb">
    <input type="radio" name="item" id="item10" title="spiny eel" value="spiny eel">
    <input type="radio" name="item" id="item11" title="leaf fish" value="leaf fish">
  </summary>
  <ul class="list">
    <li>
      <label for="item1">
        tilapia
        <span></span>
      </label>
    </li>
    <li>
      <label for="item2">cat fish</label>
    </li>
    <li>
      <label for="item3">heterotis</label>
    </li>
    <li>
      <label for="item4">
        butterfly fish
        <span></span>
      </label>
    </li>
    <li>
      <label for="item5">carp</label>
    </li>
    <li>
      <label for="item6">lung fish</label>
    </li>
    <li>
      <label for="item7">
        mullet
        <span></span>
      </label>
    </li>
    <li>
      <label for="item8">mud skipper</label>
    </li>
    <li>
      <label for="item9">tiger barb</label>
    </li>
    <li>
      <label for="item10">
        spiny eel
        <span></span>
      </label>
    </li>
    <li>
      <label for="item11">leaf fish</label>
    </li>
  
  
  </ul>
</details>
        </div>


        <label for="insert_image" class="insert_image">
            insert image
        <input type="file" hidden accept="images/*" name="image" id="insert_image">
        </label>

    <div class="submit">

    <input type="submit" value="submit" name="submit">
    </div>
        </form>
        </div>
</body>

</html>