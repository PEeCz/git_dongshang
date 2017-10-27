<?php
require '../script/connectboard.php';

	$mem_user = mysqli_real_escape_string($conn_board, $_POST['mem_user']);
	$mem_pass = mysqli_real_escape_string($conn_board, $_POST['mem_pass']);
	$mem_name = $_POST['mem_name'];
	$mem_email = $_POST['mem_email'];
	$mem_address = $_POST['mem_address'];

	if (isset ( $mem_user ) && isset ( $mem_pass )) {
		
		$salt = "DSANDC{<XAW2311scxzcmkzlqweo32i49DSADMASDasdozcxSDEDWO9238u4";
		$hash_mem_pass = hash_hmac ( 'sha256', $mem_pass, $salt );
		
		$sql_insert = "INSERT INTO member (mem_user, mem_pass, mem_name, mem_email, mem_address) VALUES ('$mem_user', '$hash_mem_pass', '$mem_name', '$mem_email','$mem_address')";
		$res_insert = mysqli_query ( $conn_board, $sql_insert );
		if ($res_insert) {
			header ( "Location: ../index.php" );
		} else {
			mysqli_error ( $conn_board );
		}
	} else {
		header ( "Location: ../index.php" );
	}

	mysqli_close ( $conn_board );