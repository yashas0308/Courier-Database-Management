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

   
   // update records
   if (isset($_POST['update'])) {
   	   $name =$_POST['name'];
   	   $address = $_POST['address'];
         $phone = $_POST['phone'];
         $toname = $_POST['toname'];
         $toaddress = $_POST['toaddress'];
         $tophone = $_POST['tophone'];
         $weight = $_POST['weight'];
   	   $id = $_POST['id'];
         $sql =  "UPDATE orders SET "."name='".$name."',address='".$address."', phone='".$phone."',toname='".$toname."',toaddress='".$toaddress."',tophone='".$tophone."',weight='".$weight."' WHERE id =".$id."";
         
   	   mysqli_query($db,$sql);
         
   	   $_SESSION['msg'] = "Customer Data Updated Successfully !";
         
   	   header('location: editbooking.php'); 
   }

   //delete record
   if (isset($_GET['del'])) {
   	   $id = $_GET['del'];
   	   mysqli_query($db, "DELETE FROM orders WHERE id=$id");
   	   $_SESSION['msg'] = "Customer Data Deleted Successfully !";
   	   header('location: editbooking.php'); 
   }

   // retrive  records
   $results = mysqli_query($db, "SELECT * FROM orders"); 



?>