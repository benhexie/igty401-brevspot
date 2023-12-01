<?php
    include 'connect.php';
    include 'header.php';

    if(!isset($_SESSION["id"])){
        header("location:login_signup.php");
    }

    if(isset($_GET['user'])){
        $user=$_GET['user'];
    }
        // echo $user;
      
        
        $total_cost=0;

        $email=$_SESSION["email"];


   
  
     


      $query=mysqli_query($conn, "SELECT * from cart where buyer='$user'");
      $count=mysqli_num_rows($query);
      while($row=mysqli_fetch_assoc($query)){
          $product_id=$row["product_id"];
          $cart_quantity=$row["quantity"];
         
          $price_query=mysqli_query($conn, "SELECT * from drinks where id='$product_id'");
  
          while($cart_products=mysqli_fetch_assoc($price_query)){
          


            $product_name=$cart_products['name'];

            $productID=$cart_products['id'];

       
                    $total=array($cart_products["price"]);
                     $sum=array_sum($total);
                    $total_cost+=$sum*$row['quantity'];


    //        $insert_order= mysqli_query($conn, "INSERT into orders (buyer, product, product_id, quantity, time) values ( '$user', '$product_name', '$productID', $cart_quantity, NOW())");

    //              if($insert_order){
       
    //       mysqli_query($conn, "DELETE from cart where buyer='$user'");
    //       header("location: customer_shop.php?orders");
    //   }
            

        

          }

      
      }

 
  
  
  
  
  


  
    ?>









<script src="https://js.paystack.co/v2/inline.js">
    import PaystackPop from '@paystack/inline-js';
</script>






    <script>

        function payWithPaystack(){
            const paystack= new PaystackPop();
            paystack.newTransaction({
                key:"pk_test_f24842eaf14e3ed903b0c70e34d6831345b21fa0",
                    email: '<?php echo $email; ?>',
                    amount:'<?php echo $total_cost; ?>00 ',
                    currency:"NGN",
                    ref:''+Math.floor((Math.random() * 1000000) +1),


                    metadata: {
                        custom_fields: [

                            {
                                display_name: "mobile number",
                            variable_name: "mobile number",
                            value: "08109495127",
                            }
                           
                        ]
                    },

                    callback: function (response){
                        window.location.href='success.php?successfullypaid=<?php echo $email; ?>'
                    },

                    onClose: function (){
                        
                    }
            })

                

               
            
        }

        payWithPaystack()

    </script>