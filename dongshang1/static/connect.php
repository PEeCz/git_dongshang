<?php



	$conn = mysqli_connect('localhost', 'root', '', 'dongshang');
		if(mysqli_error($conn)){
			echo "Database not connected".mysqli_error($conn);
		}

		mysqli_set_charset($conn, 'utf8');
		
