<?php
	session_start();
	date_default_timezone_set('Asia/Bangkok');
	require '../../../static/db.class.php';
	require '../../../static/db.qry.php';

	$conn = connect();

	$re_group_id = $_GET['id'];

	$selReGroup = "SELECT re_group_personqty FROM report_group WHERE re_group_id='$re_group_id'";
	$qryReGroup = $conn->query($selReGroup);
	$rsReGroup = $qryReGroup->fetch_assoc();

	$create_by = date('Y/m/d H:i:s');
	$edit_by = date('Y/m/d H:i:s');

	foreach($_POST['jewel_color'] as $row1=>$art1){
 
		$re_shopping_jewelry_color = $_POST['jewel_color'][$row1];
	}
	foreach($_POST['leather_color'] as $row2=>$art2){
 
		$re_shopping_leather_color = $_POST['leather_color'][$row2];
	}
	foreach($_POST['snake_color'] as $row3=>$art3){
 
		$re_shopping_snake_park_color = $_POST['snake_color'][$row3];
	}
	foreach($_POST['rubber_color'] as $row4=>$art4){
 
		$re_shopping_rubber_color = $_POST['rubber_color'][$row4];
	}
	foreach($_POST['red88_color'] as $row5=>$art5){
 
		$re_shopping_red88_color = $_POST['red88_color'][$row5];
	}
	foreach($_POST['gm_color'] as $row6=>$art6){
 
		$re_shopping_gm_color = $_POST['gm_color'][$row6];
	}
	foreach($_POST['silk_color'] as $row7=>$art7){
 
		$re_shopping_silk_color = $_POST['silk_color'][$row7];
	}
	foreach($_POST['watprachum_color'] as $row8=>$art8){
 
		$re_shopping_watprachum_color = $_POST['watprachum_color'][$row8];
	}
	foreach($_POST['watnongket_color'] as $row9=>$art9){
 
		$re_shopping_watnongket_color = $_POST['watnongket_color'][$row9];
	}

	$jewelry = $_POST['jewelry'];
  	$leather = $_POST['leather'];
  	$snakepark = $_POST['snake_park'];
  	$rubber = $_POST['rubber'];
  	$red88 = $_POST['red88'];
  	$silk = $_POST['silk'];
  	$watprachum = $_POST['watprachum'];
  	$watnongket = $_POST['watnongket'];
  	$personqty = $_POST['re_shopping_personqty'];
 	$allperson = $rsReGroup['re_group_personqty'];

 	$overall1 = $jewelry+$leather+$snakepark+$rubber+$red88;
 	$overall2 = $jewelry+$leather+$snakepark+$rubber+$red88+$watprachum+$watnongket;

 	$calc1 = $jewelry+$leather+$snakepark+$rubber+$red88;
    $calc2 = $calc1/$personqty;

    $overall3 = $calc2;

    $calc3 = $jewelry+$leather+$snakepark+$rubber+$red88+$silk+$watprachum+$watnongket;
    $calc4 = $calc3/$allperson;

    $overall4 = $calc4;


	$nameTable = 'report_shopping';
	$data = array(
				're_shopping_personqty'=>$_POST['re_shopping_personqty'],
				're_shopping_personqty_color'=>$_POST['re_shopping_personqty_color'],
				're_shopping_charter'=>$_POST['re_shopping_charter'],
				're_shopping_complete'=>$_POST['re_shopping_complete'],
				're_shopping_jewelry_color'=>$re_shopping_jewelry_color,
				're_shopping_jewelry'=>$_POST['jewelry'],
				're_shopping_leather_color'=>$re_shopping_leather_color,
				're_shopping_leather'=>$_POST['leather'],
				're_shopping_snake_park_color'=>$re_shopping_snake_park_color,
				're_shopping_snake_park'=>$_POST['snake_park'],
				're_shopping_rubber_color'=>$re_shopping_rubber_color,
				're_shopping_rubber'=>$_POST['rubber'],
				're_shopping_red88_color'=>$re_shopping_red88_color,
				're_shopping_red88'=>$_POST['red88'],
				're_shopping_gm_color'=>$re_shopping_gm_color,
				're_shopping_gm'=>$_POST['gm'],
				're_shopping_silk_color'=>$re_shopping_silk_color,
				're_shopping_silk'=>$_POST['silk'],
				're_shopping_watprachum_color'=>$re_shopping_watprachum_color,
				're_shopping_watprachum'=>$_POST['watprachum'],
				're_shopping_watnongket_color'=>$re_shopping_watnongket_color,
				're_shopping_watnongket'=>$_POST['watnongket'],
				're_shopping_option_percent'=>$_POST['option_percent'],
				're_shopping_option_money'=>$_POST['option'],
				're_shopping_comment'=>$_POST['comment'],
				're_shopping_overall_1'=>$overall1,
				're_shopping_overall_2'=>$overall2,
				're_shopping_overall_3'=>$overall3,
				're_shopping_overall_4'=>$overall4,
				're_group_id'=>$re_group_id,
				'create_by'=>$create_by

			);


	$sql = insert_db($nameTable, $data);

	$qry = $conn->query($sql);
	if($qry){
		$nameTable = 'edit_shopping';
		$data = array(
					're_shopping_personqty'=>$_POST['re_shopping_personqty'],
					're_shopping_personqty_color'=>$_POST['re_shopping_personqty_color'],
					're_shopping_charter'=>$_POST['re_shopping_charter'],
					're_shopping_complete'=>$_POST['re_shopping_complete'],
					're_shopping_jewelry_color'=>$re_shopping_jewelry_color,
					're_shopping_jewelry'=>$_POST['jewelry'],
					're_shopping_leather_color'=>$re_shopping_leather_color,
					're_shopping_leather'=>$_POST['leather'],
					're_shopping_snake_park_color'=>$re_shopping_snake_park_color,
					're_shopping_snake_park'=>$_POST['snake_park'],
					're_shopping_rubber_color'=>$re_shopping_rubber_color,
					're_shopping_rubber'=>$_POST['rubber'],
					're_shopping_red88_color'=>$re_shopping_red88_color,
					're_shopping_red88'=>$_POST['red88'],
					're_shopping_gm_color'=>$re_shopping_gm_color,
					're_shopping_gm'=>$_POST['gm'],
					're_shopping_silk_color'=>$re_shopping_silk_color,
					're_shopping_silk'=>$_POST['silk'],
					're_shopping_watprachum_color'=>$re_shopping_watprachum_color,
					're_shopping_watprachum'=>$_POST['watprachum'],
					're_shopping_watnongket_color'=>$re_shopping_watnongket_color,
					're_shopping_watnongket'=>$_POST['watnongket'],
					're_shopping_option_percent'=>$_POST['option_percent'],
					're_shopping_option_money'=>$_POST['option'],
					're_shopping_comment'=>$_POST['comment'],
					're_shopping_overall_1'=>$overall1,
					're_shopping_overall_2'=>$overall2,
					're_shopping_overall_3'=>$overall3,
					're_shopping_overall_4'=>$overall4,
					're_group_id'=>$re_group_id,
					'edit_by_date'=>$edit_by

				);

		$sql = insert_db($nameTable, $data);
		$qry = $conn->query($sql);
		if($qry){
			header("Location: ../index.php");
		}else{
			echo "Error : ไม่สามารถเพิ่มข้อมูลได้เนื่องจาก".mysqli_error($conn);
		}
	}else{
		echo "Error : ไม่สามารถเพิ่มข้อมูลได้เนื่องจาก".mysqli_error($conn);
	}