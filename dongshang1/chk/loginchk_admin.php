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
	} else { ?>
		<!DOCTYPE html>
		<html lang="en">

		<head>

		    <meta charset="utf-8">
		    <meta name="robots" content="all,follow">
		    <meta name="googlebot" content="index,follow,snippet,archive">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <meta name="description" content="Dong Shang Travel Service Group(Thailand) Co.,Ltd.">
		    <meta name="author" content="Dong Shang | Travel">
		    <meta name="keywords" content="">

		    <title>
		        Dong Shang Travel Service Group(Thailand) Co.,Ltd.
		    </title>

		    <meta name="keywords" content="">

		    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

		    <!-- styles -->
		    <link href="../src/css/font-awesome.css" rel="stylesheet">
		    <link href="../src/css/bootstrap.min.css" rel="stylesheet">
		    <link href="../src/css/animate.min.css" rel="stylesheet">
		    <link href="../src/css/owl.carousel.css" rel="stylesheet">
		    <link href="../src/css/owl.theme.css" rel="stylesheet">

		    <!-- theme stylesheet -->
		    <link href="../src/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

		    <!-- your stylesheet with modifications -->
		    <link href="../src/css/custom.css" rel="stylesheet">

		    <script src="../src/js/respond.min.js"></script>

		    <link rel="shortcut icon" href="../main/favicon.png">

		    <!-- Side Bar Dropdown Menu -->
		    <link rel="stylesheet" href="../src/css/dropdown-sidebar.css">



		</head>

		<body>
	<?php
		echo "<BR><BR><BR><BR>";
		echo "<div class='alert alert-danger text-center' role='alert'>ชื่อหรือรหัสไม่ถูกต้อง กรุณาลองใหม่อีกครั้งค่ะ</div>";
		echo "<BR>";
		echo "<a href='../index.php' class='btn btn-md btn-danger center-block'>กลับหน้าหลัก</a>";
	}
	?>
	    <script src="../src/js/jquery-1.11.0.min.js"></script>
	    <script src="../src/js/bootstrap.min.js"></script>
	    <script src="../src/js/jquery.cookie.js"></script>
	    <script src="../src/js/waypoints.min.js"></script>
	    <script src="../src/js/modernizr.js"></script>
	    <script src="../src/js/bootstrap-hover-dropdown.js"></script>
	    <script src="../src/js/owl.carousel.min.js"></script>
	    <script src="../src/js/front.js"></script>
	    <script src="../src/js/dropdown-sidebar.js"></script>


		</body>

		</html>
