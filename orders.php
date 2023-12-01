<?php
    include 'header.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/orders.css?v=<?php echo time();?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="hero">
        <div class="img_container">
            <img src="images\7xm.xyz450715.jpg" alt="">
            <div class="overlay">
                <h3>your orders! <span></span></h3>
            </div>
        </div>

        
<h3>orders</h3>

<div class="orders">
                <div class="orders_container">
                <table class="styled-table">
    <thead>
        <tr>
 
            <th> item </th>
            <th>quantity</th>
            <th>seller</th>
            <th>date</th>
        </tr>
    </thead>
    <tbody>
   
            <?php
            $query=mysqli_query($conn, "SELECT * from drink_orders where buyer='$email'");

            if(mysqli_num_rows($query)<1){
                echo '<h3>you have not ordered yet!</h3>';
              }
              else{
                while($row=mysqli_fetch_assoc($query)){
                    $item=$row['name'];
                    $quantity=$row['quantity'];
                    $seller=$row['seller'];
                    $date=$row['date'];
    
                    echo '
                    <tr>
         
                    <td>'.$item.' </td>
                    <td> '.$quantity.' </td>
                    <td> '.$seller.' </td>
                    <td>'.$date.'</td>
                </tr>
                    ';
                }
              }
        
            ?>
  
   

 

      
    
    
    </tbody>
</table>
    </div>
</body>
</html>