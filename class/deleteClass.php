<?php
	require_once("../dbhelp.php");
	$id = $_GET['id'];

	$sql = "delete from lop where malop = '$id'";
	execute($sql);
	header("Location: ./showClasses.php");
	die();  
?>