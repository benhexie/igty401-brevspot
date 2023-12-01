




<?php
    include 'connect.php';

    $output='';
    $query=mysqli_query($conn, "SELECT * from brands ");

    while($row=mysqli_fetch_assoc($query)){
        $output.='
        <a href="buy.php?brand='.$row['name'].'"><li>
                           '.$row['name'].'
                        </li></a>
        ';
    }
















echo $output;
?>