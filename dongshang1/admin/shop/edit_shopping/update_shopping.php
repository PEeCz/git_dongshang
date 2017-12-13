<?php
	session_start();
	date_default_timezone_set('Asia/Bangkok');

    if(!isset($_SESSION['is_ad'])
    	&& !isset($_SESSION['is_fd'])
    	&& !isset($_SESSION['is_am'])
    	&& !isset($_SESSION['is_boss'])
    	&& !isset($_SESSION['is_admin'])
    ){

    	header("Location: ../index.php");

    }

	require '../../../static/db.class.php';
	require '../../../static/db.qry.php';
	
	

	$conn = connect();

	$id = $_GET['id'];

	$selReShopping = "SELECT rg.re_group_personqty,es.re_shopping_personqty 
					  	FROM report_group rg 
					  		INNER JOIN edit_shopping es 
				  				ON rg.re_group_id=es.re_group_id
				  					WHERE es.re_group_id='$id'";

	$qryReShopping = $conn->query($selReShopping);
	$rsReShopping = $qryReShopping->fetch_assoc();

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

	$re_shopping_personqty_color = $_POST['re_shopping_personqty_color'];
	$re_shopping_charter = $_POST['re_shopping_charter'];
	$re_shopping_complete = $_POST['re_shopping_complete']; 
 	$gm = $_POST['gm'];
 	$option_percent = $_POST['option_percent'];
 	$option_money = $_POST['option'];
 	$comment = $_POST['comment'];


	$jewelry = $_POST['jewelry'];
  	$leather = $_POST['leather'];
  	$snakepark = $_POST['snake_park'];
  	$rubber = $_POST['rubber'];
  	$red88 = $_POST['red88'];
  	$silk = $_POST['silk'];
  	$watprachum = $_POST['watprachum'];
  	$watnongket = $_POST['watnongket'];
  	$personqty = $_POST['re_shopping_personqty'];
 	$allperson = $rsReShopping['re_group_personqty'];

 	$overall1 = $jewelry+$leather+$snakepark+$rubber+$red88;
 	$overall2 = $jewelry+$leather+$snakepark+$rubber+$red88+$watprachum+$watnongket;

 	$calc1 = $jewelry+$leather+$snakepark+$rubber+$red88;
    $calc2 = $calc1/$personqty;

    $overall3 = $calc2;

    $calc3 = $jewelry+$leather+$snakepark+$rubber+$red88+$silk+$watprachum+$watnongket;
    $calc4 = $calc3/$allperson;

    $overall4 = $calc4;
	
		$editSql = "UPDATE report_shopping SET 
								re_shopping_personqty='$personqty',
								re_shopping_personqty_color='$re_shopping_personqty_color',
								re_shopping_charter='$re_shopping_charter',
								re_shopping_complete='$re_shopping_complete',
								re_shopping_jewelry_color='$re_shopping_jewelry_color',
								re_shopping_jewelry='$jewelry',
								re_shopping_leather_color='$re_shopping_leather_color',
								re_shopping_leather='$leather',
								re_shopping_snake_park_color='$re_shopping_snake_park_color',
								re_shopping_snake_park='$snakepark',
								re_shopping_rubber_color='$re_shopping_rubber_color',
								re_shopping_rubber='$rubber',
								re_shopping_red88_color='$re_shopping_red88_color',
								re_shopping_red88='$red88',
								re_shopping_gm_color='$re_shopping_gm_color',
								re_shopping_gm='$gm',
								re_shopping_silk_color='$re_shopping_silk_color',
								re_shopping_silk='$silk',
								re_shopping_watprachum_color='$re_shopping_watprachum_color',
								re_shopping_watprachum='$watprachum',
								re_shopping_watnongket_color='$re_shopping_watnongket_color',
								re_shopping_watnongket='$watnongket',
								re_shopping_option_percent='$option_percent',
								re_shopping_option_money='$option_money',
								re_shopping_comment='$comment',
								re_shopping_overall_1='$overall1',
								re_shopping_overall_2='$overall2',
								re_shopping_overall_3='$overall3',
								re_shopping_overall_4='$overall4',
								re_group_id='$id'
								

					WHERE re_group_id='$id'";
		$editQry = mysqli_query($conn, $editSql);
		if($editQry){
			$editSql2 = "UPDATE edit_shopping SET 
								re_shopping_personqty='$personqty',
								re_shopping_personqty_color='$re_shopping_personqty_color',
								re_shopping_charter='$re_shopping_charter',
								re_shopping_complete='$re_shopping_complete',
								re_shopping_jewelry_color='$re_shopping_jewelry_color',
								re_shopping_jewelry='$jewelry',
								re_shopping_leather_color='$re_shopping_leather_color',
								re_shopping_leather='$leather',
								re_shopping_snake_park_color='$re_shopping_snake_park_color',
								re_shopping_snake_park='$snakepark',
								re_shopping_rubber_color='$re_shopping_rubber_color',
								re_shopping_rubber='$rubber',
								re_shopping_red88_color='$re_shopping_red88_color',
								re_shopping_red88='$red88',
								re_shopping_gm_color='$re_shopping_gm_color',
								re_shopping_gm='$gm',
								re_shopping_silk_color='$re_shopping_silk_color',
								re_shopping_silk='$silk',
								re_shopping_watprachum_color='$re_shopping_watprachum_color',
								re_shopping_watprachum='$watprachum',
								re_shopping_watnongket_color='$re_shopping_watnongket_color',
								re_shopping_watnongket='$watnongket',
								re_shopping_option_percent='$option_percent',
								re_shopping_option_money='$option_money',
								re_shopping_comment='$comment',
								re_shopping_overall_1='$overall1',
								re_shopping_overall_2='$overall2',
								re_shopping_overall_3='$overall3',
								re_shopping_overall_4='$overall4',
								re_group_id='$id',
								edit_by_date='$edit_by'

					WHERE re_group_id='$id'";
			$editQry2 = mysqli_query($conn, $editSql2);
			header("Location: ../index.php");
		}else{
			echo "Error : ไม่สามารถอัพเดทข้อมูลลงตาราง edit_shopping ได้เนื่องจากเกิดข้อผิดพลาด ->".mysqli_error($conn);
		}