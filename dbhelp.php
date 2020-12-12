<?php
	require_once('config.php');

	// insert, update, delete -> su dung function ->
	function execute($sql) {
		$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

		mysqli_query($conn,$sql);

		mysqli_close($conn);
	}

	// select => tra ve ket qua
	function executeResult($sql) {
		$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);

		$res = mysqli_query($conn,$sql);
		$list = [];
		while($row = mysqli_fetch_array($res, 1)) {
			$list[] = $row;
		}

		mysqli_close($conn);

		return $list; 
	}