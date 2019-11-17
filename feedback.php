<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST['name'];
$check = $_POST['check'];
$designation = $_POST['designation'];
$location = $_POST['location'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$s = " select * from feedback where name = '$name'";
    
$result = mysqli_query($con,$s);
    
$num = mysqli_num_rows($result);

if($num == 1){
      echo"Username already taken";
}else{
        $reg = "INSERT INTO feedback(name,profession,location,email,phone,message,checkbox) VALUES ('$name','$designation','$location','$mail','$phone','$message','$check')";
    
        mysqli_query($con,$reg);
        header('location:testimonials.php');
    }

?>