<?php
	require '../../static/connect.php';

	$golf_province1 = $_POST['golf_province1'];
	$golf_province2 = $_POST['golf_province2'];
	$golf_province3 = $_POST['golf_province3'];
	$golf_name = $_POST['golf_name'];
	$golf_weekday = $_POST['golf_weekday'];
	$golf_weekend = $_POST['golf_weekend'];
	$golf_caddy = $_POST['golf_caddy'];
	$golf_cart = $_POST['golf_cart'];
	$golf_night_weekday = $_POST['golf_night_weekday'];
	$golf_night_weekend = $_POST['golf_night_weekend'];
	$golf_contact_start = $_POST['golf_contact_start'];
	$golf_contact_end = $_POST['golf_contact_end'];



	$insSql = "INSERT INTO golf_court(golf_province1,golf_province2,golf_province3,golf_name,golf_weekday,golf_weekend,
										golf_caddy,golf_cart,golf_night_weekday,golf_night_weekend,golf_contact_start,golf_contact_end)
				VALUES('$golf_province1','$golf_province2','$golf_province3','$golf_name','$golf_weekday','$golf_weekend',
						'$golf_caddy','$golf_cart','$golf_night_weekday','$golf_night_weekend','$golf_contact_start','$golf_contact_end')";

	$insQry = mysqli_query($conn, $insSql);
	if($insQry){
		header("Location: insert_golfdb.php");
	}else{
		echo "ไม่สามารถบันทึกข้อมูลได้".mysqli_error($conn);
	}
?>
