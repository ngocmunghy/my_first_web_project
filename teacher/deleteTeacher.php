<?php
	require_once("../dbhelp.php");
	$id = $_GET['id'];

	$sql = "delete from giaovien where magv = '$id'";
	execute($sql);
	header("Location: ./showTeachers.php");
	die();  
?>