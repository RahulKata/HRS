<?php
	session_start();

    $username = "";
    $username1 = '';
	$email = "";
	$errors = array();
	$db = mysqli_connect('localhost','root','','project');

	if(isset($_POST['connect'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$GLOBALS['username'] = $username;
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$cpassword = mysqli_real_escape_string($db,$_POST['cpassword']);

		$sql_u="SELECT * FROM users WHERE username='$username'";
		$sql_e="SELECT * FROM users WHERE email='$email'";
		$res_u=mysqli_query($db,$sql_u) or die(mysqli_error($db));
	    $res_e=mysqli_query($db,$sql_e) or die(mysqli_error($db));

	    if (mysqli_num_rows($res_u)>0) {
	    	array_push($errors,"Username already taken.");
	    }
	    if (mysqli_num_rows($res_e)>0) {
	    	array_push($errors,"Email already exists.");
	    }
		
		if ($password!=$cpassword) {
			array_push($errors,"Passwords don't match.");
		}

		if(count($errors)==0){
			$password = md5($cpassword);
			$sql = "INSERT INTO users (username,email,password) VALUES('$username','$email','$password')";
			mysqli_query($db,$sql);
			$_SESSION['username'] = $username;
			$_SESSION['login'] = true;
			header("location: index.php");
		}
	}

	if(isset($_POST['login'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $query);
		if(mysqli_num_rows($result) == 1){
			$_SESSION['username'] = $username;
			$_SESSION['login'] = "You are now logged in";
			header('location:index.php');
		}
		else{
			array_push($errors, "Wrong username/password.");
		}
	}