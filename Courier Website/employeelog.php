<?php
if( isset($_POST['username']) and isset($_POST['password']) ) {
		include('emplogin.php'); //code is given below (used for database connection)
		$username=$_POST['username'];
		$password=$_POST['password'];
 
		$ret=mysqli_query( $conn, "SELECT * FROM employee WHERE username='$username' AND password='$password' ") or die("Could not execute query: " .mysqli_error($conn));
		$row = mysqli_fetch_assoc($ret);
		if(!$row) {
			header("Location: employeelog.php");
		}
		else {
	        session_start();
	        $_SESSION['username']=$username;
			header('location: editbooking.php');
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8 ">
	<title>Employee Login</title>
	<link rel="stylesheet" href="CSS/employeelog.css">
</head>
<body>
<form method="post" action="employeelog.php" id="Login">
<div class="login-box">
<h1>Login</h1>
<div class="textbox">
	<i class="fa fa-user" aria-hidden="true"></i>
	<input type="text" placeholder="Username" name="username" value="">
</div>

<div class="textbox">
	<i class="fa fa-lock" aria-hidden="true"></i>
	<input type="password" placeholder="Password"name="password" value="">
</div>

<input class="btn" type="submit" name="" value="Sign in"> 
</form>
</div>
</body>
</html>