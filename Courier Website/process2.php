<!DOCTYPE html>
<html>
<head>
	<title>Process</title>
	<style>
		.header{
			font-family: Century Gothic;
			font-size: 40px;
			text-align: center;
			background-image: url(ruby.jpg);
			background-size: cover;
	        background-position: center;
			width: 100%;
			height: 100vh;
			padding: 20px;
	        
		}
	</style>
</head>
<body>
	
<div class="header">
<?php 

$username = $_POST['username'];
$password = $_POST['password'];
$education = $_POST['education'];
$designation = $_POST['designation'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

if (!empty($username) || !empty($password) || !empty($education) || !empty($designation) || !empty($address) || !empty($phone) || !empty($email)) {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "courier";

	//*Create Connection 
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
	 die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
	} else {
	$SELECT = "SELECT email From employee Where email = ? Limit 1";
	$INSERT = "INSERT Into employee (username, password, education, designation, address, phone, email) values (?, ?, ?, ?, ?, ?, ?)";
		//Prepare Statement 
		$stmt  = $conn->prepare($SELECT);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		if ($rnum==0) {
		 $stmt->close();
         $stmt = $conn->prepare($INSERT);
		 $stmt->bind_param("sssssis", $username, $password, $education, $designation, $address, $phone, $email);
		 $stmt->execute();
		 echo "<strong style='color:black;'>Employee Registration is Successful !</strong>";
		}
		 else {
		 echo "<strong style='color:darkblue;'>Someone Already Registered Using This Email!</strong>";
		}
		 $stmt->close();
		 $conn->close();
	}

} else {
	echo "All Fields are required";
	die();
}

?>
</div>

</body>
</html>


