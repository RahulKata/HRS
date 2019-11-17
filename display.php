<?php
    include("connection.php");

    $query = "SELECT * FROM FEEDBACK";

    $data = mysqli_query($con,$query);
    $total = mysqli_num_rows($data);
    echo $total;
?>