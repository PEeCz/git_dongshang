<?php
	require('../function/db.class.php');
	require('../function/db.qry.php');
	$conn = connect();

	$idDescrip = $_GET['idDescrip'];

    $use_room_description = $_POST['use_room_description'];


    $nameTable = 'hotel_book';

    $data = array(
              'use_room_description'=>$use_room_description
            );

    $sql = update_db($nameTable, array('id='=>$_GET['idDescrip']),$data);
    $qry = $conn->query($sql);
    	if($qry){
    		header("Location: ../deposit-report.php");
    	}else{
    		echo "Error : ".mysqli_error($conn);
    	}
  ?>