




<?php
    include 'connect.php';

    $output='';
    $query=mysqli_query($conn, "SELECT * from categories ");

    while($row=mysqli_fetch_assoc($query)){
        $output.='
        <a href="buy.php?category='.$row['name'].'"><li>
                           '.$row['name'].'
                        </li></a>
        ';
    }
















echo $output;
?>