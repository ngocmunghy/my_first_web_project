<?php 
	require_once("dbhelp.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/signIn_signUp.css">
	<title>Sign Up</title>
</head>
<body>
	<div class="wrapper fadeInDown">
		<div id="formContent">
			<div class="fadeIn first">
				<img src="./image/hedspi.png" id="icon" alt="User Icon" />
			</div>

			<form action="" method="post">
				<input type="text" id="name" class="fadeIn second" placeholder="Enter name" name="name" required>
				<input type="text" id="name" class="fadeIn second" placeholder="Enter address" name="address" required>
				<input type="text" id="login" class="fadeIn second" placeholder="Enter email" name="email" required>
				<input type="password" id="password" class="fadeIn second" placeholder="Enter password" name="password" required>
				<input type="password" id="repassword" class="fadeIn second" placeholder="Enter password again" name="repassword" required>
				<input type="submit" class="fadeIn fourth" value="Sign Up" name="submit">

			</form>
		</div>
	</div>
	<?php
	session_start();
	if (isset($_POST['submit'])) {
		if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
			echo " Email: Invalid <br>";
			return;
		} 
		if(strcmp($_POST['password'], $_POST['repassword']) == 0) {
			$conn = mysqli_connect('localhost','root','','sms1');
			if(!$conn) {
				die("Connection failed: ". $conn->connect_error);
			}
			$name = addslashes($_POST['name']);			
			$address = addslashes($_POST['address']);
			$email = addslashes($_POST['email']);
			$password = addslashes($_POST['password']);
			$cmd = "insert into login values ('$email','$password','$name','$address')";
			execute($cmd);
			header("Location: index.php");
			die();
			//$result = mysqli_query($conn,$cmd);
			// if(mysqli_query($conn, $cmd)) {
			// 	$sql = "select * from login where email = '$email'";
			// 	$res = mysqli_query($conn,$sql);
			// 	$_SESSION['email'] = $email;
			// 	$_SESSION['name'] = $name;
			// 	header("Location: layout.php");
			// }
			// mysqli_close($conn);
		} else {
			echo "The re-password you've input is not match!";
		}
	}  
	?>
</body>
</html>