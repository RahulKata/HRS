 <?php
    
    $con = mysqli_connect('localhost','root','','userregistration');  
    
    $email = $_POST['email'];

    $reg = "insert into mail(mail) values ('$email')";
    mysqli_query($con,$reg);
    header('location:index.php');
?>