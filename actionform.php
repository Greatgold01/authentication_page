<?php

if(isset($_POST['submit'])) {
	$firstname = $_POST['fname'];
	$lastname  = $_POST['lname'];
	$unames    = $_POST['unames'];
	$gender    = $_POST['gender'];
	$dob       = $_POST['dob'];
	$password  = $_POST['pwds'];

	//Array to get all the inputted values

	$array_info = [
		'fname'  => $firstname,
		'lname'  => $lastname,
		'unames' => $unames,
		'gender' => $gender,
		'dob'    => $dob,
		'password' => $password
	];

	//Saving records into a file using file system

	file_put_contents('forms/'.$array_info['unames'].".json", json_encode($array_info));

	echo "Registration Successful"; 

	?>

	<p>
	<a href="login.php">Click here to login</a>
	</p>

	<?php

//	echo "$firstname $lastname $unames $gender $dob $password";
	//echo file_put_contents("test.txt","Hello World. Testing!");

}

?>