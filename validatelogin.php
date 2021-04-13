<?php
session_start();



if(isset($_POST['submit'])) {
	$username    = $_POST['uname'];
	$password    = $_POST['pwd'];

	//	echo "username = $username and password = $password ";

	$usersdet = scandir("forms/");

	$countdet = count($usersdet);

//	echo "countdet = $countdet";

	for($count = 0; $count < $countdet; $count++){
		$totaluser = $usersdet[$count];

		if($totaluser == $username.".json"){
			$user = file_get_contents("forms/".$totaluser);
			$userObj = json_decode($user);

			$fname    = $userObj -> fname;
			$lname    = $userObj -> lname;
			$unames   = $userObj -> unames;
			$gender   = $userObj -> gender;
			$dob      = $userObj -> dob;
			$pwd      = $userObj -> password;

		//	echo "$fname $lname $unames $gender $dob $pwd <br/>";
		//	echo "$username $password <br/>";

			$_SESSION['fname']  = $fname;
			$_SESSION['lname']  = $lname;
			$_SESSION['uname']  = $unames;
			$_SESSION['gender'] = $gender;
			$_SESSION['dob']    = $dob;

		/*	echo '<pre>'; 
			print_r($_SESSION); 
			echo '</pre>';
		*/

			if($unames == $username && $pwd == $password){
				header("Location: /zuri/form/homepage.php");
			}
			elseif ($unames == $username && $pwd != $password ) {
				echo "Wrong Password Entry";
			}
			elseif ($unames != $username) {
				echo "username not found";
			}
			else{
				echo "Invalid entry";
			}
		}


	}

}

?>