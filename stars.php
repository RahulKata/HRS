<?php
    $con = mysqli_connect('localhost','root','','userregistration');  

    if(isset($_POST['submit'])){
        $stars = $_POST['star'];
        $review = $_POST['review'];
        
        $query = "INSERT INTO `stars`(`rating`, `review`) VALUES ('$stars','$review')";
        $query_run = mysqli_query($con,$query);
    
        if($query_run){
            echo'<script type="text/javascript"> alert("Thank You for your response")</script>';
            header('location:index.php');
        }
        else{
            echo'<script type="text/javascript"> alert("FAILED!!")</script>';
        }
    }
?>