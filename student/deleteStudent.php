<?php
	require_once("../dbhelp.php");
	$id = $_GET['id'];

	$sql = "delete from sinhvien where masv = '$id'";
	execute($sql);
	header("Location: ../layout.php");
	die();  
?>