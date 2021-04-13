<?php
session_start();



if(isset($_POST['unames']) && isset($_POST['dobs']) && isset($_POST['pwds']) ) {
	$username    = $_POST['unames'];
	$dobs    	 = $_POST['dobs'];
	$pwds    	 = $_POST['pwds'];

	// echo "username = $username and password = $pwds and dob = $dobs ";

	$usersdet = scandir("forms/");

	$countdet = count($usersdet);

//	echo "countdet = $countdet";

	for($count = 0; $count < $countdet; $count++){
		$totaluser = $usersdet[$count];

		if($totaluser == $username.".json"){
			$user = file_get_contents("forms/".$totaluser);
			$userObj = json_decode($user);

		/*	echo '<pre>'; 
			print_r($userObj); 
			echo '</pre>';
		*/

			$fname    = $userObj -> fname;
			$lname    = $userObj -> lname;
			$unames   = $userObj -> unames;
			$gender   = $userObj -> gender;
			$dob      = $userObj -> dob;
			$pwd      = $userObj -> password;

		//	echo "fname = $fname...lname = $lname....unames = $unames...gender = $gender...dob = $dob...pwd = $pwd <br/>";
		//	echo "username = $username...dobs = $dobs...pwds = $pwds <br/>";

			$_SESSION['fname']  = $fname;
			$_SESSION['lname']  = $lname;
			$_SESSION['uname']  = $unames;
			$_SESSION['gender'] = $gender;
			$_SESSION['dob']    = $dob;

		/*	echo '<pre>'; 
			print_r($_SESSION); 
			echo '</pre>';
		*/

			//Validation to check if data exist with regards to username and dob

			if($unames == $username && $dob == $dobs){
				$user = file_get_contents("forms/".$totaluser);
				$userObj = json_decode($user, true);

			//	echo "Old Password: ".$userObj['password'];

				$userObj['password'] = $pwds;

			//	echo "New Password: ".$userObj['password'];

				$change_db = file_put_contents('forms/'.$userObj['unames'].".json", json_encode($userObj));
				echo"Password changed Succesfully";

			}
			else{
				echo "Wrong Username or Date of Birth";
			}
		}


	}

}

?>