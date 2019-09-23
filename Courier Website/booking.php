<?php include('bookingorder.php');

    // fetch the record to be updated
    if (isset($_GET['edit'] )) {
        $id = $_GET['edit']; 
        $edit_state = true;
        $rec = mysqli_query($db, "SELECT * FROM orders WHERE id=$id;");
        $record = mysqli_fetch_array($rec); 
        $name = $record['name'];
        $address = $record['address'];
        $phone = $record['phone'];
        $toname = $record['toname'];
        $toaddress = $record['toaddress'];
        $tophone = $record['tophone'];
        $weight = $record['weight'];
        $id = $record['id'];
    }

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Booking Page</title>
	<link rel="stylesheet" type="text/css" href="CSS/book.css">
</head>
<body>
      <?php if (isset($_SESSION['msg'])):  ?>     
      <div class="msg">
      	<?php
             echo $_SESSION['msg'];
             unset($_SESSION['msg']);
      	?>
      </div>
    <?php endif ?>
    <h1 style="text-align: center; color: white; background-color: teal; padding: 30px;">PLACE YOUR ORDER HERE !</h1>
<section>
	<div style="border:5px solid teal; width: 250px; height: 630px; margin: 1px; font-size: 20px; color: white; background-color: teal;">
		<h5 style="font-size: 20px;"> NOTE TO CUSTOMERS :~ <br>The Price is Fixed and We Accept Only Cash On Delivery ! also We deliver your courier within 2 to 3 working days for minimum distance of 10km!<br> minimum distance is 10km <br> for the Courier weight below: </h5>
	<ol>
		<li>Range: 1KG - 3KG <br> Price: 50Rs</li>
		<li>Range: 3KG - 6KG <br> Price: 80Rs</li>
		<li>Range: 6KG - 10KG <br> Price: 120Rs</li>
		<li>Range: 10KG - 15KG <br> Price: 150Rs</li>
		<li>Range: 15KG - 20KG <br> Price: 180Rs</li>
		<li>Range: 20KG - 25KG <br> Price: 200Rs</li>
		<li>Range: 25KG - 30KG <br> Price: 250Rs</li>
	</ol>
	</div>
</section>
<form method="post" action="bookingorder.php">

<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="input-group">
		<label>Your Full Name:</label>
		<input type="text" name="name" value="<?php echo $name; ?>">
	</div>
	<div class="input-group">
		<label>Your Complete Address:</label>
		<input type="text" name="address" value="<?php echo $address; ?>">
	</div>
	<div class="input-group">
		<label>Your Contact Number:</label>
		<input type="text" name="phone" value="<?php echo $phone; ?>">
	</div>
	<div class="input-group">
		<label>To Full Name:</label>
		<input type="text" name="toname" value="<?php echo $toname; ?>">
	</div>
	<div class="input-group">
		<label>To Complete Address:</label>
		<input type="text" name="toaddress" value="<?php echo $toaddress; ?>">
	</div>
	<div class="input-group">
		<label>To Contact Number:</label>
		<input type="text" name="tophone" value="<?php echo $tophone; ?>">
	</div>
	<div class="input-group">
		<label>Package Weight</label>
		<input type="text" name="weight" value="<?php echo $weight; ?>">
	</div>
	<div class="input-group">
		<?php if ($edit_state == false): ?>
              <button type="submit" name="save" class="btn">Place Order !</button>
		<?php else: ?>
              <button type="submit" name="update" class="btn">Update</button>
		<?php endif ?>
		

       
	</div>   
</form>
</body>
</html>