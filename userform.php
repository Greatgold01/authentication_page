<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

<!--Form Detail with inputs -->


<h1>Form Registration</h1>
<form action="actionform.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="unames">Username:</label><br>
  <input type="text" id="unames" name="unames"><br><br>
  <label for="dob">Date of Birth:</label><br>
  <input type="date" id="dob" name="dob"><br><br>
  <label for="sex">Sex:</label>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <label for="pwds">Password:</label><br>
  <input type="password" id="pwds" name="pwds"><br><br>
  <input type="submit" name='submit' value="submit">
</form>


</body>
</html>

