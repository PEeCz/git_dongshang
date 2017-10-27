<?php 
	require '../script/connectboard.php'; 

	$username = trim($_GET['username']);

	$sql = "SELECT * FROM member WHERE mem_user='$username'";
	$query = mysqli_query($conn_board, $sql) or die(mysqli_error($conn_board));
	$chk = mysqli_num_rows($query);
	if($chk > 0)
	   echo "1";
	else
	   echo "2";    
?>