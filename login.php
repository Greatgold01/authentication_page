<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>

<!--Form Header -->

<h2>Welcome to Greatgold's Page</h2>
<p>Please fill in your Username and Password</p>

<!--Form Detail with inputs -->

<form action="validatelogin.php" method="post">
  <label for="uname">Username:</label><br>
  <input type="text" id="uname" name="uname"><br><br>
  <label for="pwd">Password:</label><br>
  <input type="password" id="pwd" name="pwd"><br><br>
  <input type="submit" name='submit' value="Login">
</form>


<!--Creating a link to Reset Password for old accounts -->

<p> Can't remember your password?
<a href="reset_password.php">Reset Password here</a>
</p>

<!--Creating a link to Signup page for new accounts -->

<p> Don't have an account yet?
<a href="userform.php">Register here</a>
</p>

</body>
</html>