<?php
	if(isset($_POST["submit"])){
		if($_POST["username"] == "adminsakura" && $_POST["password"] == "adminsakura") {
			header("location: patientdrsakura.php");
		}
		else if($_POST["username"] == "adminwonwo" && $_POST["password"] == "adminwonwo") {
			header("location: patientdrwonwo.php");
		} else {
			echo '<script> alert("You Enter Wrong Credential"); </script>';
		}
	}
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<body>

<form method="POST" action=""><table align="center" bgcolor="#7FFFD4" cellpadding="5px">
	<tr>
		<th colspan="2" align="center">Login Admin</th>
	</tr>
	<tr>
		<td>
			Username	
		</td>
		<td>
			Password
		</td>
	</tr>
	<tr>
		<td>
			<input type="Username" name="username" required>
		</td>
		<td>
			<input type="password" name="password" required>
		</td>
	</tr>
	<tr>
		<td>
			<button type="submit" name="submit" class="btn btn-info btn-xs" >Login</button>
		</td>
		<td>
			<a href="index.php" class="btn btn-info btn-xs">Back</a>
		</td>
	</tr>
</table></form>
</body>
</html>