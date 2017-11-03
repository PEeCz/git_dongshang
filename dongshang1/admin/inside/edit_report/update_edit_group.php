<?php

	require '../../../static/db.class.php';
	require '../../../static/db.qry.php';

	$conn = connect();

	$id_user = $_GET['id_user'];

	$ed_group_in_date = strtotime($_POST['ed_group_in_date']);
	$ed_group_in_time = strtotime($_POST['ed_group_in_time']);

	$ed_group_in_date_formatted = date('Y-m-d', $ed_group_in_date);
	$ed_group_in_time_formatted = date('H:i:s', $ed_group_in_time);

	$ed_group_out_date = strtotime($_POST['ed_group_out_date']);
	$ed_group_out_time = strtotime($_POST['ed_group_out_time']);

	$ed_group_out_date_formatted = date('Y-m-d', $ed_group_out_date);
	$ed_group_out_time_formatted = date('H:i:s', $ed_group_out_time);

	$ed_group_final = $_POST['final'].''.$_POST['no_final'].''.$_POST['edit'];
	$ed_group_normal_noshop = $_POST['normal'].''.$_POST['no_shop'];
	$ed_group_p_t_c_f_con = $_POST['plan'].''.$_POST['transfer'].''.$_POST['call'].''.$_POST['fit'].''.$_POST['confirm'];
	$ed_group_code = $_POST['ed_group_code'];
	$ed_group_nameguide_th = $_POST['ed_group_nameguide_th'];
	$ed_group_nameguide_cn = $_POST['ed_group_nameguide_cn'];
	$ed_group_leadertour = $_POST['ed_group_leadertour'];
	$ed_group_agent = $_POST['ed_group_agent'];
	$ed_group_nameagent = $_POST['ed_group_nameagent'];
	$ed_group_program = $_POST['ed_group_program'];
	$ed_group_personqty = $_POST['ed_group_personqty'];
	$ed_group_flight_in = $_POST['ed_group_flight_in'];
	$ed_group_flight_out = $_POST['ed_group_flight_out'];
	$ed_group_hotel1 = $_POST['ed_group_hotel1'];
	$ed_group_hotel2 = $_POST['ed_group_hotel2'];
	$ed_group_hotel3 = $_POST['ed_group_hotel3'];
	$ed_group_hotel4 = $_POST['ed_group_hotel4'];
	$ed_group_description = $_POST['ed_group_description'];
	$ed_group_kb = $_POST['ed_group_kb'];
	$ed_group_cancel_group = $_POST['cancel_group1'].''.$_POST['cancel_group2'];
	$edit_by_iduser = $id_user;


	/*$nameTable = 'edit_group';
	$data = array(
				'ed_group_code'=>$_POST['ed_group_code'],
				'ed_group_nameguide_th'=>$_POST['ed_group_nameguide_th'],
				'ed_group_nameguide_cn'=>$_POST['ed_group_nameguide_cn'],
				'ed_group_leadertour'=>$_POST['ed_group_leadertour'],
				'ed_group_agent'=>$_POST['ed_group_agent'],
				'ed_group_nameagent'=>$_POST['ed_group_nameagent'],
				'ed_group_program'=>$_POST['ed_group_program'],
				'ed_group_personqty'=>$_POST['ed_group_personqty'],
				'ed_group_in_date'=>$ed_group_in_date_formatted,
				'ed_group_in_time'=>$ed_group_in_time_formatted,
				'ed_group_out_date'=>$ed_group_out_date_formatted,
				'ed_group_out_time'=>$ed_group_out_time_formatted,
				'ed_group_flight_in'=>$_POST['ed_group_flight_in'],
				'ed_group_flight_out'=>$_POST['ed_group_flight_out'],
				'ed_group_hotel1'=>$_POST['ed_group_hotel1'],
				'ed_group_hotel2'=>$_POST['ed_group_hotel2'],
				'ed_group_hotel3'=>$_POST['ed_group_hotel3'],
				'ed_group_hotel4'=>$_POST['ed_group_hotel4'],
				'ed_group_description'=>$_POST['ed_group_description'],
				'ed_group_kb'=>$_POST['ed_group_kb'],
				'ed_group_final'=>$ed_group_final,
				'ed_group_normal_noshop'=>$ed_group_normal_noshop,
				'ed_group_p_t_c_f_con'=>$ed_group_p_t_c_f_con,
				'ed_group_cancel_group'=>$_POST['cancel_group1'].''.$_POST['cancel_group2'],
				'edit_by_date'=>NOW(),
				'edit_by_id'=>$_POST['id']

			);

	$sql = insert_db($nameTable, $data);
	echo $sql;
	$qry = $conn->query($sql);*/

	$insEdit = "INSERT INTO edit_group (
								ed_group_code,
								ed_group_nameguide_th,
								ed_group_nameguide_cn,
								ed_group_leadertour,
								ed_group_agent,
								ed_group_nameagent,
								ed_group_program,
								ed_group_personqty,
								ed_group_in_date,
								ed_group_in_time,
								ed_group_out_date,
								ed_group_out_time,
								ed_group_flight_in,
								ed_group_flight_out,
								ed_group_hotel1,
								ed_group_hotel2,
								ed_group_hotel3,
								ed_group_hotel4,
								ed_group_description,
								ed_group_kb,
								ed_group_final,
								ed_group_normal_noshop,
								ed_group_p_t_c_f_con,
								ed_group_cancel_group,
								edit_by_date,
								edit_by_id
							)

						VALUES (
								'$ed_group_code',
								'$ed_group_nameguide_th',
								'$ed_group_nameguide_cn',
								'$ed_group_leadertour',
								'$ed_group_agent',
								'$ed_group_nameagent',
								'$ed_group_program',
								'$ed_group_personqty',
								'$ed_group_in_date_formatted',
								'$ed_group_in_time_formatted',
								'$ed_group_out_date_formatted',
								'$ed_group_out_time_formatted',
								'$ed_group_flight_in',
								'$ed_group_flight_out',
								'$ed_group_hotel1',
								'$ed_group_hotel2',
								'$ed_group_hotel3',
								'$ed_group_hotel4',
								'$ed_group_description',
								'$ed_group_kb',
								'$ed_group_final',
								'$ed_group_normal_noshop',
								'$ed_group_p_t_c_f_con',
								'$ed_group_cancel_group',
								NOW(),
								'$edit_by_iduser'
							)";
	$qry = mysqli_query($conn, $insEdit);
	if($qry){
		header("Location: ../index.php");
	}else{
		echo "Error : ".mysqli_error($conn);
	}

	mysqli_close($conn);

