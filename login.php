<?php  
	ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="login_style.css">
	<title>Login</title>
</head>
<body>

	<!------ Include the above in your HEAD tag ---------->

	<div class="wrapper fadeInDown">
		<div id="formContent">
			<div class="fadeIn first">
				<img src="hedspi.png" id="icon" alt="User Icon" />
			</div>

			<form action="" method="post">
				<input type="text" id="login" class="fadeIn second" placeholder="Email" name="email" required>
				<input type="password" id="password" class="fadeIn third" placeholder="Password" name="password" required>
				<input type="submit" class="fadeIn fourth" value="Log In" name="login">
			</form>
			<div id="formFooter">
				<a class="underlineHover" href="signUp.php">Create an account</a>
			</div>

		</div>
	</div> 
	<?php

	session_start();
	$email = "";
	$name = "";
	if (isset($_POST['login'])) {
		$conn = mysqli_connect('localhost','root','','sms');
		if(!$conn) {
			die("Connection failed: ". $conn->connect_error);
		}
		$gmail = $_POST['email'];
		$cmd = "select * from login where email = '$gmail'";
		$result = mysqli_query($conn,$cmd);
		while($row = $result->fetch_assoc()) {
			if($row['email'] == $gmail) {
				if($row['password'] == $_POST['password']) {
					$_SESSION['email'] = $row['email'];
					$_SESSION['name'] = $row['name'];
					header("Location: layout.php");
				} else {
					echo "Wrong password";
				}
			} else {
				echo "Wrong email";
			}
		}
	}  
	?>

</body>
</html>