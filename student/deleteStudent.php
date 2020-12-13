<?php
	require_once("dbhelp.php");
	$id = $_GET['id'];

	$sql = "delete from sinhvien where id = '$id'";
	execute($sql);
	header("Location: layout.php");
	die();  
?>