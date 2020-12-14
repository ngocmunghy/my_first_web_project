<?php
	require_once("../dbhelp.php");
	$id_class =$_GET['id_class'];
	$id_stu = $_GET['id_stu'];

	$sql = "delete from sinhvienlop where masv = '$id_stu' and malop = '$id_class'";
	execute($sql);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	die();
?>