<?php
	session_start();

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

	$id_user = $_GET['id_user'];
	$group_id = $_GET['group_id'];

	$ed_group_in_date = strtotime($_POST['ed_group_in_date']);
	$ed_group_in_time = strtotime($_POST['ed_group_in_time']);

	$ed_group_in_date_formatted = date('Y-m-d', $ed_group_in_date);
	$ed_group_in_time_formatted = date('H:i:s', $ed_group_in_time);

	$ed_group_out_date = strtotime($_POST['ed_group_out_date']);
	$ed_group_out_time = strtotime($_POST['ed_group_out_time']);

	$ed_group_out_date_formatted = date('Y-m-d', $ed_group_out_date);
	$ed_group_out_time_formatted = date('H:i:s', $ed_group_out_time);

	foreach($_POST['final'] as $row1=>$art1){
 
		$final = $_POST['final'][$row1];
	}

	
	foreach($_POST['p_t_c_f_con'] as $row2=>$art2){
		$p_t_c_f_con = $_POST['p_t_c_f_con'][$row2];
	}

	if(isset($_POST['cancel'])){
		foreach($_POST['cancel'] as $row3=>$art3){
			$cancel = $_POST['cancel'][$row3];
		}
	}else{
		$cancel = '0';
	}


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
	$edit_by_iduser = $id_user;
	
	$editSql = "UPDATE report_group SET 
								re_group_id='$group_id',
								re_group_code='$ed_group_code',
								re_group_nameguide_th='$ed_group_nameguide_th',
								re_group_nameguide_cn='$ed_group_nameguide_cn',
								re_group_leadertour='$ed_group_leadertour',
								re_group_agent='$ed_group_agent',
								re_group_nameagent='$ed_group_nameagent',
								re_group_program='$ed_group_program',
								re_group_personqty='$ed_group_personqty',
								re_group_in_date='$ed_group_in_date_formatted',
								re_group_in_time='$ed_group_in_time_formatted',
								re_group_out_date='$ed_group_out_date_formatted',
								re_group_out_time='$ed_group_out_time_formatted',
								re_group_flight_in='$ed_group_flight_in',
								re_group_flight_out='$ed_group_flight_out',
								re_group_hotel1='$ed_group_hotel1',
								re_group_hotel2='$ed_group_hotel2',
								re_group_hotel3='$ed_group_hotel3',
								re_group_hotel4='$ed_group_hotel4',
								re_group_description='$ed_group_description',
								re_group_kb='$ed_group_kb',
								re_group_final='$final',
								re_group_p_t_c_f_con='$p_t_c_f_con',
								re_group_edit_cancel_group='$cancel',
								edit_by_iduser='$edit_by_iduser'

					WHERE re_group_id='$group_id'";
		$editQry = mysqli_query($conn, $editSql);
		if($editQry){
			$editSql1 = "UPDATE edit_group SET 
								ed_group_id='$group_id',
								ed_group_code='$ed_group_code',
								ed_group_nameguide_th='$ed_group_nameguide_th',
								ed_group_nameguide_cn='$ed_group_nameguide_cn',
								ed_group_leadertour='$ed_group_leadertour',
								ed_group_agent='$ed_group_agent',
								ed_group_nameagent='$ed_group_nameagent',
								ed_group_program='$ed_group_program',
								ed_group_personqty='$ed_group_personqty',
								ed_group_in_date='$ed_group_in_date_formatted',
								ed_group_in_time='$ed_group_in_time_formatted',
								ed_group_out_date='$ed_group_out_date_formatted',
								ed_group_out_time='$ed_group_out_time_formatted',
								ed_group_flight_in='$ed_group_flight_in',
								ed_group_flight_out='$ed_group_flight_out',
								ed_group_hotel1='$ed_group_hotel1',
								ed_group_hotel2='$ed_group_hotel2',
								ed_group_hotel3='$ed_group_hotel3',
								ed_group_hotel4='$ed_group_hotel4',
								ed_group_description='$ed_group_description',
								ed_group_kb='$ed_group_kb',
								ed_group_final='$final',
								ed_group_p_t_c_f_con='$p_t_c_f_con',
								ed_group_cancel_group='$cancel',
								edit_by_id='$edit_by_iduser',
								edit_by_date=NOW()

					WHERE ed_group_id='$group_id'";
				$editQry1 = mysqli_query($conn, $editSql1);
				if($editQry1){
					header("Location: ../index.php");
				}else{
					echo "Error : ไม่สามารถอัพเดทข้อมูลลงตาราง edit_group ได้เนื่องจากเกิดข้อผิดพลาด ->".mysqli_error($conn);
				}
			header("Location: ../index.php");
		}else{
			echo "Error : ไม่สามารถอัพเดทข้อมูลลง report_group ได้เนื่องจากเกิดข้อผิดพลาด ->".mysqli_error($conn);
		}