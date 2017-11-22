<?php

	require('../function/db.class.php');
	require('../function/db.qry.php');
	$conn = connect();

	$id = $_GET['id'];

	$date = strtotime($_POST['date']);
		$time = strtotime($_POST['time']);

	    $date_formated = date('Y-m-d', $date);
	    $time_formated = date('H:i:s', $time);

		// INSERT INTO แบบ Array
		$nameTable = 'golf_book';
		$data = array(
				'start_date'=>$date_formated,
		        'start_time'=>$time_formated,
		        'group_code'=>$_POST['group_code'],
		       	'golf_name'=>$_POST['golf_name'],
		        'room'=>$_POST['room'],
		        'room_type'=>$_POST['room_type'],
		        'other'=>$_POST['other']
				);

		$sql = update_db($nameTable, array('id='=>$_GET['id']),$data);
		$qry = $conn->query($sql);
		if($qry){
			header("Location: ../deposit-report.php");
		}