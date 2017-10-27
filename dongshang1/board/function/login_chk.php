<?php
require '../script/connectboard.php';

$login_user = mysqli_real_escape_string ( $conn_board, $_POST ['user_login'] );
$login_pass = mysqli_real_escape_string ( $conn_board, $_POST ['pass_login'] );

$salt = "DSANDC{<XAW2311scxzcmkzlqweo32i49DSADMASDasdozcxSDEDWO9238u4";
$hash_pass_login = hash_hmac ( 'sha256', $login_pass, $salt );

$sql_select = "SELECT * FROM member WHERE mem_user=? AND mem_pass=?";
$stmt = mysqli_prepare ( $conn_board, $sql_select );
mysqli_stmt_bind_param ( $stmt, 'ss', $login_user, $hash_pass_login );
mysqli_execute ( $stmt );
$res_user = mysqli_stmt_get_result ( $stmt );
if ($res_user->num_rows >= 1) {
	session_start ();
	$row_user = mysqli_fetch_array ( $res_user, MYSQLI_ASSOC );

	
	if ($row_user ['mem_type'] == 100) {
		$_SESSION ['is_userid'] = $row_user ['mem_id'];
		$_SESSION ['is_nameuser'] = $row_user ['mem_name'];
		$_SESSION ['is_usertype'] = $row_user['mem_type']==100;
		
		
		header ( "Location: ../index.php" );
	} else if ($row_user ['mem_type'] == 500) {
		$_SESSION ['is_adminid'] = $row_user ['mem_id'];
		$_SESSION ['is_nameadmin'] = $row_user ['mem_name'];
		$_SESSION ['is_admintype'] = $row_user['mem_type']==500;

		
		header ( "Location: ../index.php" );
	}
} else {
	echo "ชื่อหรือรหัสไม่ถูกต้อง กรุณาลองใหม่อีกครั้งค่ะ" . mysqli_error ( $conn_board );
?>
	<a class="btn btn-md btn-danger" href="../index.php">กลับไปหน้าเข้าสู่ระบบ</a>
<?php } ?>