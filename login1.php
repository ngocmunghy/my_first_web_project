<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		<input type="submit" value="Log In" name="login">
	</form>
	<?php
		if(isset($_POST['login'])) {
			header("Location: abc.php");
		}  
	?>
</body>
</html>