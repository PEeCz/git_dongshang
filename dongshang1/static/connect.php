<?php



	$conn = @mysqli_connect('localhost', 'wclcoth', 'a10Vbd79Rt', 'wclcoth_dongshan');
		if(mysqli_error($conn)){
			echo "Database not connected".mysqli_error($conn);
		}

		mysqli_set_charset($conn, 'utf8');
		
