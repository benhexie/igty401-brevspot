<?php


  include 'connect.php';

  if(isset($_GET['id'])){
    $id=$_GET['id'];
 

    $query2=mysqli_query($conn, "DELETE  from drinks where id=$id");
  

 
   
    

   

    if($query2){
      header("location: sell.php#myproducts");
    }
  }

?>