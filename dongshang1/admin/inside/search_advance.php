<?php
	session_start();
    require '../../static/db.class.php';
    $conn = connect();

    require '../include/header.php';
?>
<body>
<?php
	require '../include/navbar.php';
?>
	<div class="container">
		<div class="row">
			<h1>ค้นหาจาก Group Code</h1>
			<input type="text" name="" class="form-control" id="search">
			<div id="result"></div>
		</div>
	</div>



<?php
	require '../include/footer_inside.php';
?>
</body>
</html>  