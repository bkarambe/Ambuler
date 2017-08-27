<?php 

session_start();
$db= mysqli_connect("localhost", "root", "", "authentication_a");
if(isset($_POST['register_btn']))
{
	session_start();


	$fn=($_POST['fn']);
	$mn=($_POST['mn']);
	$ln=($_POST['ln']);
	$mb=($_POST['mb']);
	$ps=($_POST['ps']);
	$cps=($_POST['cps']);
	/*$email=($_POST['email']);
	$password=($_POST['password']);
	$password2=($_POST['password2']);
*/
	if($ps == $cps)
	{
		$sql= "INSERT INTO `users` (`fn`, `mn`, `ln`, `mb`, `ps`) VALUES ('$fn', '$mn', '$ln', '$mb', '$ps')";
		mysqli_query($db, $sql);
		$_SESSION['message']="Welcome. You are logged in...";
		$_SESSION['fn']=$fn;
		header("location: google_maps.html");
	}

	else
	{
		$_SESSION['message']="The two passwords are different";
	}
}
?>

<!--

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="POST" action="Registration.php">
		Username:
		<input type="text" name="username"><br>

		Email:
		<input type="text" name="email"><br>

		Password:
		<input type="Password" name="password"><br>

		Confirm Password:
		<input type="Password" name="password2"><br>

		<input type="Submit" name="register_btn" value="Register"><br>
	</form>	
</body>
</html>-->