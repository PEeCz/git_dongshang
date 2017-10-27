<?php



	$conn_board = mysqli_connect('localhost', 'root', '', 'dongshang_board');
		if(mysqli_error($conn_board)){
			echo "Database not connected".mysqli_error($conn_board);
		}

		mysqli_set_charset($conn_board, 'utf8');
		
