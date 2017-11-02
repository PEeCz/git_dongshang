<?php
	require '../static/connect.php';

	$admin_user = mysqli_real_escape_string ($conn, $_POST['admin_user']);
	$admin_pass = mysqli_real_escape_string ($conn, $_POST['admin_pass']);

	$salt = "DSANDC{<XAW2311scxzcmkzlqweo32i49DSADMASDasdozcxSDEDWO9238u4";
	$hash_login_pass = hash_hmac ( 'sha256', $admin_pass, $salt );

	$selUser = "SELECT * FROM user WHERE user_name=? AND user_pass=?";
	$stmt = mysqli_prepare ( $conn, $selUser );
	mysqli_stmt_bind_param ( $stmt, 'ss', $admin_user, $hash_login_pass );
	mysqli_execute ( $stmt );
	$res_user = mysqli_stmt_get_result ( $stmt );
	if ($res_user->num_rows >= 1) {
		session_start ();
		$row_user = mysqli_fetch_array ( $res_user, MYSQLI_ASSOC );
		$_SESSION ['user_id'] = $row_user ['user_id'];
		
		if ($row_user ['user_status']==100) {
			$_SESSION ['is_ot'] = $row_user ['user_id'];
			$_SESSION ['is_fullnameuser'] = $row_user ['user_fullname'];
			$_SESSION ['is_username'] = $row_user['user_name'];
			$_SESSION ['is_position'] = "Operation Thailand";
			
			header ( "Location: ../admin/inside/index.php" );
		} else if ($row_user ['user_status']==200) {
			$_SESSION ['is_of'] = $row_user ['user_id'];
			$_SESSION ['is_fullnameuser'] = $row_user ['user_fullname'];
			$_SESSION ['is_username'] = $row_user['user_name'];
			$_SESSION ['is_position'] = "Operation Foreign";
			
			header ( "Location: ../admin/inside/index.php" );
		} else if ($row_user ['user_status']==300) {
			$_SESSION ['is_ad'] = $row_user ['user_id'];
			$_SESSION ['is_fullnameuser'] = $row_user ['user_fullname'];
			$_SESSION ['is_username'] = $row_user['user_name'];
			$_SESSION ['is_position'] = "Accounting Department";
			
			header ( "Location: ../admin/shop/index.php" );
		} else if ($row_user ['user_status']==350) {
			$_SESSION ['is_fd'] = $row_user ['user_id'];
			$_SESSION ['is_fullnameuser'] = $row_user ['user_fullname'];
			$_SESSION ['is_username'] = $row_user['user_name'];
			$_SESSION ['is_position'] = "Financial Department";
			
			header ( "Location: ../admin/shop/index.php" );
		} else if ($row_user ['user_status']==400) {
			$_SESSION ['is_am'] = $row_user ['user_id'];
			$_SESSION ['is_fullnameuser'] = $row_user ['user_fullname'];
			$_SESSION ['is_username'] = $row_user['user_name'];
			$_SESSION ['is_position'] = "Accounting Manager";
			
			header ( "Location: ../admin/shop/index.php" );
		} else if ($row_user ['user_status']==450) {
			$_SESSION ['is_boss'] = $row_user ['user_id'];
			$_SESSION ['is_fullnameuser'] = $row_user ['user_fullname'];
			$_SESSION ['is_username'] = $row_user['user_name'];
			$_SESSION ['is_position'] = "Business Owner";
			
			header ( "Location: ../admin/shop/index.php" );
		} else if ($row_user ['user_status']==500) {
			$_SESSION ['is_admin'] = $row_user ['user_id'];
			$_SESSION ['is_fullnameuser'] = $row_user ['user_fullname'];
			$_SESSION ['is_username'] = $row_user['user_name'];
			$_SESSION ['is_position'] = "Administrator";
			
			header ( "Location: ../admin/inside/index.php" );
		} else if($row_user ['user_status']==0){
			echo "<div class='alert alert-danger text-center' role='alert'>คุณไม่มีสิทธิ์เข้าถึงระบบภายในค่ะ</div>";
			echo "<BR>";
			echo "<a href='../index.php' class='btn btn-md btn-danger center-block'>กลับหน้าหลัก</a>";
		}
	} else {
		echo "<div class='alert alert-danger text-center' role='alert'>ชื่อหรือรหัสไม่ถูกต้อง กรุณาลองใหม่อีกครั้งค่ะ</div>";
		echo "<BR>";
		echo "<a href='../index.php' class='btn btn-md btn-danger center-block'>กลับหน้าหลัก</a>";
}
