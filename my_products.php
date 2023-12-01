<h3>add product <span></span></h3>
    <div class="form_container">
                <form action="" method='post' enctype="multipart/form-data">
                    <div class="name_email">
                        <input type="text" placeholder='product name' name="name">
                        <input type="number" placeholder='product price' name="price">
                    </div>

                    <div class="subject">
                        <input type="text" placeholder='keywords' name="keywords">
                    </div>

                    <div class="name_email">

                    <label for="" id="myBtn">
                        select categories
                    </label>

                    <label for="insert_image" class="insert_image">
                    insert image
                    <input type="file" hidden accept="images/*" name="image" id="insert_image">
                    </label>


                    <label for="" id="brand_btn">
                        select brand
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
       $query= mysqli_query($conn, "select * from categories");

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
    <input type="radio" id="brand1" name="brands" value="generic" checked>
    <label for="brand1">brand 1</label>
    </div> 

    <?php
       $query= mysqli_query($conn, "select * from brands");

       if(mysqli_num_rows($query)==0){
           echo 'no brands here';
       }
   
       else{
           while($row2=mysqli_fetch_assoc($query)){
               echo '   <div class="checkbox">
               <input type="radio" id="'.$row2['name'].'" name="brands" value="'.$row2['name'].'">
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


            <h3>my products <span></span></h3>

        <div id="myproducts">.</div>
            <div class="container products">
            <div class="product_card">
                    <div class="product_img">
                        <img src="images\7xm.xyz200379.jpg" alt="">
                    </div>

                    <div class="product_name">
                        grape cocktail
                    </div>

                    <div class="star_array">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    </div>

                    <div class="product_price">
                    ₦8000
                    </div>

                   <a href=""> <div class="submit">
                        remove
                    </div></a>

                </div>
            </div>