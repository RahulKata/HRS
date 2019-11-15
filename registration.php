<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if($password != $cpassword)
{
    echo 'password doesnt match';
}
else
{
    $s = " select * from usertable where name = '$name'";
    
    $result = mysqli_query($con,$s);
    
    $num = mysqli_num_rows($result);
    
    if($num == 1){
        echo"Username already taken";
    }
    else
    {
        $reg = "insert into usertable(name,email,password) values ('$name','$email','$password')";
    
        mysqli_query($con,$reg);
        header('location:index.php');
    }
}