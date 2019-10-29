<?php
	if (isset($_POST['Submit'])) {
		echo "hi";
	}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form action="test.php" method="post">

First Name : <input type="text" name="fname"><br><br>

Last Name : <input type="text" name="lname"><br><br>		


Age : <input type="text" name="age1"><br><br>

Mobile No : <input type="text" name="mobile"><br><br>

Gender :
<input type="radio" name="gender1" value="male">Male
<input type="radio" name="gender2" value="female">Female
<input type="radio" name="gender3" value="other">Other
<br><br>

<input type="submit" value="Submit">


</form>
	
</body>
</html>