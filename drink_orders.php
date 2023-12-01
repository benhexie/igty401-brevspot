
<h3>orders</h3>

<div class="orders">
                <div class="orders_container">
                <table class="styled-table">
    <thead>
        <tr>
 
            <th> item </th>
            <th>quantity</th>
            <th>customer</th>
            <th>date</th>
        </tr>
    </thead>
    <tbody>
   
            <?php
            $query=mysqli_query($conn, "SELECT * from drink_orders where seller='$email'");

            if(mysqli_num_rows($query)<1){
                echo '<h3>no orders yet!</h3>';
              }
              else{
                while($row=mysqli_fetch_assoc($query)){
                    $item=$row['name'];
                    $quantity=$row['quantity'];
                    $buyer=$row['buyer'];
                    $date=$row['date'];
    
                    echo '
                    <tr>
         
                    <td>'.$item.' </td>
                    <td> '.$quantity.' </td>
                    <td> '.$buyer.' </td>
                    <td>'.$date.'</td>
                </tr>
                    ';
                }
              }
        
            ?>
  
   

 

      
    
    
    </tbody>
</table>