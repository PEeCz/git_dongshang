<?php

	require '../../../static/db.class.php';
	require '../../../static/db.qry.php';

	$conn = connect();

	$re_group_in_date = strtotime($_POST['re_group_in_date']);
	$re_group_in_time = strtotime($_POST['re_group_in_time']);

	$re_group_in_date_formatted = date('Y-m-d', $re_group_in_date);
	$re_group_in_time_formatted = date('H:i:s', $re_group_in_time);

	$re_group_out_date = strtotime($_POST['re_group_out_date']);
	$re_group_out_time = strtotime($_POST['re_group_out_time']);

	$re_group_out_date_formatted = date('Y-m-d', $re_group_out_date);
	$re_group_out_time_formatted = date('H:i:s', $re_group_out_time);

	$nameTable = 'report_group';
	$data = array(
				're_group_code'=>$_POST['re_group_code'],
				're_group_nameguide_th'=>$_POST['re_group_nameguide_th'],
				're_group_nameguide_cn'=>$_POST['re_group_nameguide_cn'],
				're_group_leadertour'=>$_POST['re_group_leadertour'],
				're_group_agent'=>$_POST['re_group_agent'],
				're_group_nameagent'=>$_POST['re_group_nameagent'],
				're_group_program'=>$_POST['re_group_program'],
				're_group_personqty'=>$_POST['re_group_personqty'],
				're_group_in_date'=>$re_group_in_date_formatted,
				're_group_in_time'=>$re_group_in_time_formatted,
				're_group_out_date'=>$re_group_out_date_formatted,
				're_group_out_time'=>$re_group_out_time_formatted,
				're_group_flight_in'=>$_POST['re_group_flight_in'],
				're_group_flight_out'=>$_POST['re_group_flight_out'],
				're_group_hotel1'=>$_POST['re_group_hotel1'],
				're_group_hotel2'=>$_POST['re_group_hotel2'],
				're_group_hotel3'=>$_POST['re_group_hotel3'],
				're_group_hotel4'=>$_POST['re_group_hotel4'],
				're_group_description'=>$_POST['re_group_description'],
				're_group_kb'=>$_POST['re_group_kb'],
				're_group_final'=>$_POST['final'].''.$_POST['no_final'].''.$_POST['edit'],
				're_group_normal_noshop'=>$_POST['normal'].''.$_POST['no_shop'],
				're_group_p_t_c_f_con'=>$_POST['plan'].''.$_POST['transfer'].''.$_POST['call'].''.$_POST['fit'].''.$_POST['confirm']

			);

	$sql = insert_db($nameTable, $data);
	echo $sql;
	$qry = $conn->query($sql);
	if($qry){
		header("Location: ../index.php");
	}else{
		echo "Error : ".mysqli_error($conn);
	}

	mysqli_close($conn);

