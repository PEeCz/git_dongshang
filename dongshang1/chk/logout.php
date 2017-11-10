<?php

	session_start();

	if(isset($_SESSION['user_id'])=='0001'){
		session_unset($_SESSION['user_id']);
		header("Location: ../index.php");
	}elseif(isset($_SESSION['user_id'])=='0002'){
		session_unset($_SESSION['user_id']);
		header("Location: ../index.php");
	}elseif(isset($_SESSION['user_id'])=='0003'){
		session_unset($_SESSION['user_id']);
		header("Location: ../index.php");
	}elseif(isset($_SESSION['user_id'])=='0004'){
		session_unset($_SESSION['user_id']);
		header("Location: ../index.php");
	}elseif(isset($_SESSION['user_id'])=='0005'){
		session_unset($_SESSION['user_id']);
		header("Location: ../index.php");
	}elseif(isset($_SESSION['user_id'])=='0006'){
		session_unset($_SESSION['user_id']);
		header("Location: ../index.php");
	}elseif(isset($_SESSION['user_id'])=='0007'){
		session_unset($_SESSION['user_id']);
		header("Location: ../index.php");
	}elseif(isset($_SESSION['user_id'])=='0008'){
		session_unset($_SESSION['user_id']);
		header("Location: ../index.php");
	}
