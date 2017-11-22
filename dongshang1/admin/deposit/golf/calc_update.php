<?php
	require('../function/db.class.php');
	require('../function/db.qry.php');
	$conn = connect();
			$id = $_GET['id'];

			$room_balance = $_POST['txtSum'];

			$nameTable = 'golf_book';
			$data = array(
						'room_balance'=>$room_balance
					);
			$sql = update_db($nameTable, array('id='=>$_GET['id']),$data);


			$insQry = $conn->query($sql);
				if($insQry){

					// UPDATE use_room (ห้องที่ใช้ไป))
					$sqlSel = "SELECT * FROM golf_book WHERE id='$id'";
					$sqlQry = $conn->query($sqlSel);
					if($sqlQry){
						$rs = $sqlQry->fetch_assoc();

						$nameTable = 'golf_book';
						
						// คำนวณหาค่า ห้องพักที่ใช้ไป
						$room = $rs['room'];
						$room_balance = $rs['room_balance'];
						$use_room = $room-$room_balance;
						$data = array(
									'use_room' => $use_room
								);

						$sql = update_db($nameTable, array('id='=>$_GET['id']),$data);
						$qry = $conn->query($sql);
					}

							// UPDATE room (ห้องเดิม)
								$sqlSel = "SELECT * FROM golf_book WHERE id='$id'";
								$sqlQry = $conn->query($sqlSel);
								if($sqlQry){
									$rs = $sqlQry->fetch_assoc();

									$nameTable = 'golf_book';

									// คำนวณหาค่า room ให้ลดตามจำนวนห้องที่ใช้ไป
									$use_room = $rs['use_room'];
									$room_balance = $rs['room_balance'];
									$room = $rs['room'];

										
										$all = $room_balance+$use_room;
										$overall = $all-$use_room;

										$data = array(
													'room' => $overall
												);
										$sql = update_db($nameTable, array('id='=>$_GET['id']),$data);
										echo $sql;
										$qry = $conn->query($sql);
								}

					header("Location: ../deposit-report.php");
				}else{
					echo "Error : ".mysqli_error($conn);
				}

