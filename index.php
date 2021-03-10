<?php 
session_start();
	//5
	include ("connection.php");
	include ("function.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login & Username</title>
</head>
<body>

	<style type="text/css">

		body {
 				 background-image: url("cloudy.jpg");
 				 border: 5px solid gold;
			}
	</style>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>
	
	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>