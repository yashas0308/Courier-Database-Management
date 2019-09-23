<?php 
    session_start();
    // initialize variables
      $name = "";
   	$address = "";
      $phone = " ";
      $toname=" ";
      $toaddress=" ";
      $tophone=" ";
      $weight=" ";
   	$id = 0;
   	$edit_state = false;

   //connect to database
   $db = mysqli_connect('localhost','root','','courier');

   //if save button is clicked 
   if(isset($_POST['save'])) {
   	$name = $_POST['name'];
   	$address = $_POST['address'];
      $phone = $_POST['phone'];
      $toname = $_POST['toname'];
      $toaddress = $_POST['toaddress'];
      $tophone = $_POST['tophone'];
      $weight = $_POST['weight'];

   	$query = "INSERT INTO orders (name, address, phone, toname, toaddress, tophone, weight) VALUES ('$name','$address','$phone','$toname','$toaddress','$tophone','$weight')";
   	mysqli_query($db, $query);
   	$_SESSION['msg'] = "ORDER PLACED SUCCESSFULLY !";
   	header('location: booking.php'); // redirect to index page after inserting  


   }

   // retrive  records
   $results = mysqli_query($db, "SELECT * FROM orders"); 



?>