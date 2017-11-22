<?php

	require('../function/db.class.php');
	require('../function/db.qry.php');

	$conn = connect();




		$date = strtotime($_POST['date']);
		$time = strtotime($_POST['time']);

	    $date_formated = date('Y-m-d', $date);
	    $time_formated = date('H:i:s', $time);

		// INSERT INTO แบบ Array
		$nameTable = 'hotel_book';
		$data = array(
				'start_date'=>$date_formated,
		        'start_time'=>$time_formated,
		        'group_code'=>$_POST['group_code'],
		       	'hotel_name'=>$_POST['hotel_name'],
		        'room'=>$_POST['room'],
		        'room_type'=>$_POST['room_type'],
		        'other'=>$_POST['other']
				);
		$sql = insert_db($nameTable, $data);
		echo $sql;
		$qry = $conn->query($sql);
		if($qry){
			header("Location: ../deposit-report.php");
		}else{
			echo "Error : ".mysqli_error($conn);
		}

		mysqli_close($conn);
