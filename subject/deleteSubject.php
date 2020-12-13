<?php
	require_once("../dbhelp.php");
	$id = $_GET['id'];

	$sql = "delete from monhoc where mamh = '$id'";
	execute($sql);
	header("Location: ./showSubjects.php");
	die();  
?>