<?php
require '../static/db.class.php';
connect();

	$login_user = $_POST['user'];
	$login_pass = $_POST['pass'];
	$fullname = $_POST['fullname'];
	$address = $_POST['address'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];

	if (isset ( $login_user ) && isset ( $login_pass )) {
		
		$salt = "DSANDC{<XAW2311scxzcmkzlqweo32i49DSADMASDasdozcxSDEDWO9238u4";
		$hash_login_pass = hash_hmac ( 'sha256', $login_pass, $salt );
		
		$sql_insert = "INSERT INTO user (user_name, user_pass, user_fullname, user_email, user_address, user_mobile) VALUES ('$login_user', '$hash_login_pass', '$fullname', '$email', '$address', '$tel')";
		$res_insert = mysqli_query ( $conn, $sql_insert );
		if ($res_insert) {
			header ( "Location: ../index.php" );
		} else {
			mysqli_error ( $conn );
		}
	} else {
		header ( "Location: ../index.php" );
	}

	mysqli_close ( $conn );