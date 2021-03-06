<?php
	session_start();
	date_default_timezone_set('Asia/Bangkok');

	if(!isset($_SESSION['is_ot'])
    	&& 
    	!isset($_SESSION['is_of'])
    	&&
    	!isset($_SESSION['is_ad'])
    	&&
    	!isset($_SESSION['is_fd']) 
    	&&
    	!isset($_SESSION['is_am'])
    	&&
    	!isset($_SESSION['is_boss'])
    	&& 
    	!isset($_SESSION['is_admin'])){

    	header("Location: ../index.php");
    }

	require '../../../static/db.class.php';
	require '../../../static/db.qry.php';

	$conn = connect();

	$user_id = $_GET['id'];

	$create_by = date('Y/m/d H:i:s');

	$re_group_in_date = strtotime($_POST['re_group_in_date']);
	$re_group_in_time = strtotime($_POST['re_group_in_time']);

	$re_group_in_date_formatted = date('Y-m-d', $re_group_in_date);
	$re_group_in_time_formatted = date('H:i:s', $re_group_in_time);

	$re_group_out_date = strtotime($_POST['re_group_out_date']);
	$re_group_out_time = strtotime($_POST['re_group_out_time']);

	$re_group_out_date_formatted = date('Y-m-d', $re_group_out_date);
	$re_group_out_time_formatted = date('H:i:s', $re_group_out_time);


	foreach($_POST['final'] as $row1=>$art1){
 
		$final = $_POST['final'][$row1];
	}

	foreach($_POST['normal_noshop'] as $row2=>$art2){
		$normal_noshop = $_POST['normal_noshop'][$row2];
	}

	foreach($_POST['p_t_c_f_con'] as $row3=>$art3){
		$p_t_c_f_con = $_POST['p_t_c_f_con'][$row3];
	}

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
				're_group_kb'=>trim($_POST['re_group_kb']),
				're_group_final'=>$final,
				're_group_normal_noshop'=>$normal_noshop,
				're_group_p_t_c_f_con'=>$p_t_c_f_con,
				'create_by_iduser'=>$user_id,
				'create_by_date'=>$create_by

			);

	$sql = insert_db($nameTable, $data);
	$qry = $conn->query($sql);
	if($qry){

		$nameTable = 'edit_group';
		$data = array(
					'ed_group_code'=>$_POST['re_group_code'],
					'ed_group_nameguide_th'=>$_POST['re_group_nameguide_th'],
					'ed_group_nameguide_cn'=>$_POST['re_group_nameguide_cn'],
					'ed_group_leadertour'=>$_POST['re_group_leadertour'],
					'ed_group_agent'=>$_POST['re_group_agent'],
					'ed_group_nameagent'=>$_POST['re_group_nameagent'],
					'ed_group_program'=>$_POST['re_group_program'],
					'ed_group_personqty'=>$_POST['re_group_personqty'],
					'ed_group_in_date'=>$re_group_in_date_formatted,
					'ed_group_in_time'=>$re_group_in_time_formatted,
					'ed_group_out_date'=>$re_group_out_date_formatted,
					'ed_group_out_time'=>$re_group_out_time_formatted,
					'ed_group_flight_in'=>$_POST['re_group_flight_in'],
					'ed_group_flight_out'=>$_POST['re_group_flight_out'],
					'ed_group_hotel1'=>$_POST['re_group_hotel1'],
					'ed_group_hotel2'=>$_POST['re_group_hotel2'],
					'ed_group_hotel3'=>$_POST['re_group_hotel3'],
					'ed_group_hotel4'=>$_POST['re_group_hotel4'],
					'ed_group_description'=>$_POST['re_group_description'],
					'ed_group_kb'=>trim($_POST['re_group_kb']),
					'ed_group_final'=>$final,
					'ed_group_normal_noshop'=>$normal_noshop,
					'ed_group_p_t_c_f_con'=>$p_t_c_f_con

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
		header("Location: ../index.php");
	}else{
		echo "Error : ".mysqli_error($conn);
	}

	mysqli_close($conn);


	
