<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>

	<?php

	$fname  = $_SESSION['fname'];
	$lname  = $_SESSION['lname'];
	$uname  = $_SESSION['uname'];
	$dob    = $_SESSION['dob'];
	$gender = $_SESSION['gender'];

/*	echo '<pre>'; 
	print_r($_SESSION); 
	echo '</pre>';
*/
	?>

	<!--Display User Form Details-->
	
	<h2>It's Nice having you here</h2>

	<h4>Personal Information</h4>

	<p>First Name: <?php echo "$fname" ?> </p>
	<p>Last Name:  <?php echo "$lname" ?> </p>
	<p>Username:   <?php echo "$uname" ?> </p>
	<p>Date of Birth: <?php echo "$dob" ?> </p>
	<p>Sex:			 <?php echo "$gender" ?> </p>

<form action="login.php" method="post">
  <input type="submit" name='submit' value="Logout">
</form>

</body>
</html>