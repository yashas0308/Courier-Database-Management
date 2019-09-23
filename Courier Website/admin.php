<?php
		if(isset($_POST['login'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
		   if ($username=="admin" && $password=="password"){
		   		header("location:sales.php");
		        echo "<strong style='color:#fff;font-size:23px;padding:20px;'>Welcome ADMIN !</strong>";
		   }
		   else{
		       echo "inavalid user";
		   }
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8 ">
	<title>Admin Login</title>
	<link rel="stylesheet" href="CSS/admin.css">
</head>
<body>
<form method="post" action="admin.php" id="Login">
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

<input class="btn" type="submit" name="login" value="Sign in"> 
</form>
</div>
</body>
</html>
