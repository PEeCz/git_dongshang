<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
			<h1>Search jQuery AJAX</h1>
			<input type="text" name="" class="form-control" id="search">
			<div id="result"></div>
			
		</div>
		<script>
			$(document).ready(function(){
				$("#search").keyup(function(){
					var txtSearch=$(this).val();
					$('#result').html('');
					$.ajax({
						url: "fetch.php",
						method: "POST",
						data: {search:txtSearch},
						success: function(data){
							$('#result').html(data);
						}
					});
				});
			});
		</script>
</body>
</html>