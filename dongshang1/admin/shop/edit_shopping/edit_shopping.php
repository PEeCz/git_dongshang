<?php
	session_start();
    require '../../../static/db.class.php';
    $conn = connect();

    if(!isset($_SESSION['is_ad'])
    	&& !isset($_SESSION['is_fd'])
    	&& !isset($_SESSION['is_am'])
    	&& !isset($_SESSION['is_boss'])
    	&& !isset($_SESSION['is_admin'])
    ){

    	header("Location: ../inside/index.php");

    }

    $id = $_GET['id'];

    $sqlReport = "SELECT * FROM report_group WHERE re_group_id='$id'";
    $qryReport = $conn->query($sqlReport);
    $rs = $qryReport->fetch_assoc();


    $sqlShop = "SELECT * FROM report_shopping WHERE re_group_id='$id'";
    $qryShop = $conn->query($sqlShop);
    $rsShop = $qryShop->fetch_assoc();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Edit Report Group </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dongshang, ตงซ่าง, ท่องเที่ยว, สถานที่ท่องเที่ยว, สนามกอล์ฟ, โรงแรม, บริษัททัวร์, ทัวร์"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="../../assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../../assets/css/table-snipp.css" rel="stylesheet" type="text/css" media="all"/>
 
<!--icons-css-->
<link href="../../assets/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!-- Admin Page CSS -->
<link href="../../assets/css/admin_page.css" rel="stylesheet" type="text/css">
	
</head>
<body>	
	<div class="container-fluid">
		<div class="row" style="padding-top: 10px;">
		    <div class="col-sm-12" style="background-color: #D2B48C;">
		    	<h1 class="text-center">Accounting</h1>
				<form class="form-horizontal" method="POST" name="frmAccounting" action="edit_shoppingchk.php?id=<?php echo $id; ?>">
		      		<div class="form-group">
					    <div class="col-sm-2">
					    	จำนวนคนเข้าร้าน
					      	<select class="form-control" id="re_shopping_personqty" name="re_shopping_personqty" onkeyup="jewelry_average()">
					      		<option value="<?php echo $rsShop['re_shopping_personqty']; ?>" selected><?php echo $rsShop['re_shopping_personqty']; ?></option>
					      		<?php 
					      			for($i=0; $i<=150; $i++){
					      		?>
								<option value="<?php echo $i; ?>">
									<?php
										if($i != $rsShop['re_shopping_personqty']){
											echo $i;
										}
									?>
								</option>
								<?php } ?>
					      	</select>

					    </div>
					    <div class="col-sm-3">
					    	สีจำนวนคนเข้าร้าน
					      	<select class="form-control" id="re_shopping_personqty_color" name="re_shopping_personqty_color">
					      		<option value="<?php echo $rsShop['re_shopping_personqty_color']; ?>" selected>
					      			<?php 
					      				if($rsShop['re_shopping_personqty_color']=='10'){
					      					echo "สีขาว";
					      				}else if($rsShop['re_shopping_personqty_color']=='20'){
					      					echo "สีม่วง";
					      				}
					      			?>	
					      		</option>
					      		<?php
					      			if($rsShop['re_shopping_personqty_color']=='0'){
					      		?>
								<option value="10" style="background-color: #FFFFFF;">สีขาว</option>
								<option value="20" style="background-color: #9f79ef;">สีม่วง</option>
								<?php }else if($rsShop['re_shopping_personqty_color']=='10'){ ?>
								<option value="0"></option>
								<option value="20" style="background-color: #9f79ef;">สีม่วง</option>
								<?php }else if($rsShop['re_shopping_personqty_color']=='20'){ ?>
								<option value="0"></option>
								<option value="10" style="background-color: #FFFFFF;">สีขาว</option>
								<?php } ?>
					      	</select>
					    </div>
					    <div class="col-sm-3">
					    	Charter/Return
					      	<select class="form-control" id="re_shopping_charter" name="re_shopping_charter">
					      		<option value="<?php echo $rsShop['re_shopping_charter']; ?>" selected>
					      			<?php 
					      				if($rsShop['re_shopping_charter']=='10'){
					      					echo "Charter";
					      				}else if($rsShop['re_shopping_charter']=='20'){
					      					echo "Return Option";
					      				}
					      			?>	
					      		</option>
					      		<?php
					      			if($rsShop['re_shopping_charter']=='0'){
					      		?>
								<option value="10" style="background-color: #F0F;">Charter</option>
								<option value="20" style="background-color: #FFFFFF;">Return Option</option>
								<?php }else if($rsShop['re_shopping_charter']=='10'){ ?>
								<option value="0"></option>
								<option value="20" style="background-color: #FFFFFF;">Return Option</option>
								<?php }else if($rsShop['re_shopping_charter']=='20'){ ?>
								<option value="0"></option>
								<option value="10" style="background-color: #F0F;">Charter</option>
								<?php } ?>
					      	</select>
					    </div>
					    <div class="col-sm-4">
					    	Trip/Wait/Complete
					      	<select class="form-control" id="re_shopping_complete" name="re_shopping_complete">
					      		<option value="<?php echo $rsShop['re_shopping_complete']; ?>" selected>
					      			<?php
					      				if($rsShop['re_shopping_complete']=='10'){
					      					echo "Trip";
					      				}else if($rsShop['re_shopping_complete']=='20'){
					      					echo 'Wait';
					      				}else if($rsShop['re_shopping_complete']=='30'){
					      					echo "Complete";
					      				}
					      			?>	
					      		</option>
					      		<?php
					      			if($rsShop['re_shopping_complete']=='0'){
					      		?>
								<option value="10" style="background-color: #CCCCCC;">Trip</option>
								<option value="20" style="background-color: #FFFFFF;">Wait Option</option>
								<option value="30" style="background-color: #66FF99;">Complete</option>
								<?php }else if($rsShop['re_shopping_complete']=='10'){ ?>
					      		<option value="0"></option>
								<option value="20" style="background-color: #FFFFFF;">Wait Option</option>
								<option value="30" style="background-color: #66FF99;">Complete</option>
								<?php }else if($rsShop['re_shopping_complete']=='20'){ ?>
								<option value="0"></option>
								<option value="10" style="background-color: #CCCCCC;">Trip</option>
								<option value="30" style="background-color: #66FF99;">Complete</option>
								<?php }else if($rsShop['re_shopping_complete']=='30'){ ?>
								<option value="0"></option>
								<option value="10" style="background-color: #CCCCCC;">Trip</option>
								<option value="20" style="background-color: #FFFFFF;">Wait Option</option>
								<?php } ?>
					      	</select>
					    </div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4 col-sm-push-1">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="jewel_color[]" id="jewel_color[]" value="10" <?php if ($rsShop['re_shopping_jewelry_color'] == '10') {echo ' checked ';} ?>>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="jewel_color[]" id="jewel_color[]" value="20" <?php if ($rsShop['re_shopping_jewelry_color'] == '20') {echo ' checked ';} ?>>
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="jewel_color[]" id="jewel_color[]" value="30" <?php if ($rsShop['re_shopping_jewelry_color'] == '30') {echo ' checked ';} ?>>
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="jewel_color[]" id="jewel_color[]" value="40" <?php if ($rsShop['re_shopping_jewelry_color'] == '40') {echo ' checked ';} ?>>
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">จิวเวอรี่ :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_txt text-right" name="jewelry" id="jewelry" onkeyup="plus()" value="<?php echo $rsShop['re_shopping_jewelry']; ?>">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ยจิวเวอรี่ :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage text-right" name="jewelry_average" id="jewelry_average" value="0" onkeyup="averageJewel()" disabled>
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4 col-sm-push-1">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="leather_color[]" id="leather_color[]" value="10" <?php if ($rsShop['re_shopping_leather_color'] == '10') {echo ' checked ';} ?>>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="leather_color[]" id="leather_color[]" value="20" <?php if ($rsShop['re_shopping_leather_color'] == '20') {echo ' checked ';} ?>>
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="leather_color[]" id="leather_color[]" value="30" <?php if ($rsShop['re_shopping_leather_color'] == '30') {echo ' checked ';} ?>>
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="leather_color[]" id="leather_color[]" value="40" <?php if ($rsShop['re_shopping_leather_color'] == '40') {echo ' checked ';} ?>>
								    <i class="fa fa-square green"></i>
								</label>
							</div>
		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">กระเป๋า :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_txt text-right" name="leather" id="leather" onkeyup="plus()" value="<?php echo $rsShop['re_shopping_leather']; ?>">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ยกระเป๋า :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage text-right" name="leather_average" id="leather_average" value="0" disabled>
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4 col-sm-push-1">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="snake_color[]" id="snake_color[]" value="10" <?php if ($rsShop['re_shopping_snake_park_color'] == '10') {echo ' checked ';} ?>>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="snake_color[]" id="snake_color[]" value="20" <?php if ($rsShop['re_shopping_snake_park_color'] == '20') {echo ' checked ';} ?>>
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="snake_color[]" id="snake_color[]" value="30" <?php if ($rsShop['re_shopping_snake_park_color'] == '30') {echo ' checked ';} ?>>
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="snake_color[]" id="snake_color[]" value="40" <?php if ($rsShop['re_shopping_snake_park_color'] == '40') {echo ' checked ';} ?>>
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">สวนงู :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_txt text-right" name="snake_park" id="snake_park" onkeyup="plus()" value="<?php echo $rsShop['re_shopping_snake_park']; ?>">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ยสวนงู :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage text-right" name="snake_average" id="snake_average" value="0" disabled>
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4 col-sm-push-1">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="rubber_color[]" id="rubber_color[]" value="10" <?php if ($rsShop['re_shopping_rubber_color'] == '10') {echo ' checked ';} ?>>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="rubber_color[]" id="rubber_color[]" value="20" <?php if ($rsShop['re_shopping_rubber_color'] == '20') {echo ' checked ';} ?>>
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="rubber_color[]" id="rubber_color[]" value="30" <?php if ($rsShop['re_shopping_rubber_color'] == '30') {echo ' checked ';} ?>>
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="rubber_color[]" id="rubber_color[]" value="40" <?php if ($rsShop['re_shopping_rubber_color'] == '40') {echo ' checked ';} ?>>
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">ยางพารา :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_txt text-right" name="rubber" id="rubber" onkeyup="plus()" value="<?php echo $rsShop['re_shopping_rubber']; ?>">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ยยางพารา :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage text-right" name="rubber_average" id="rubber_average" value="0" disabled>
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4 col-sm-push-1">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="red88_color[]" id="red88_color[]" value="10" <?php if ($rsShop['re_shopping_red88_color'] == '10') {echo ' checked ';} ?>>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="red88_color[]" id="red88_color[]" value="20" <?php if ($rsShop['re_shopping_red88_color'] == '20') {echo ' checked ';} ?>>
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="red88_color[]" id="red88_color[]" value="30" <?php if ($rsShop['re_shopping_red88_color'] == '30') {echo ' checked ';} ?>>
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="red88_color[]" id="red88_color[]" value="40" <?php if ($rsShop['re_shopping_red88_color'] == '40') {echo ' checked ';} ?>>
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">รังนก :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_txt text-right" name="red88" id="red88" onkeyup="plus()" value="<?php echo $rsShop['re_shopping_red88']; ?>">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ยรังนก :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage text-right" name="red88_average" id="red88_average" value="0" disabled>
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4 col-sm-push-1">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="gm_color[]" id="gm_color[]" value="10" <?php if ($rsShop['re_shopping_gm_color'] == '10') {echo ' checked ';} ?>>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="gm_color[]" id="gm_color[]" value="20" <?php if ($rsShop['re_shopping_gm_color'] == '20') {echo ' checked ';} ?>>
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="gm_color[]" id="gm_color[]" value="30" <?php if ($rsShop['re_shopping_gm_color'] == '30') {echo ' checked ';} ?>>
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="gm_color[]" id="gm_color[]" value="40" <?php if ($rsShop['re_shopping_gm_color'] == '40') {echo ' checked ';} ?>>
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">GM :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_txt text-right" name="gm" id="gm" onkeyup="plus()" value="<?php echo $rsShop['re_shopping_gm']; ?>">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ย GM :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage text-right" name="gm_average" id="gm_average" value="0" disabled>
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4 col-sm-push-1">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="silk_color[]" id="silk_color[]" value="10" <?php if ($rsShop['re_shopping_silk_color'] == '10') {echo ' checked ';} ?>>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="silk_color[]" id="silk_color[]" value="20" <?php if ($rsShop['re_shopping_silk_color'] == '20') {echo ' checked ';} ?>>
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="silk_color[]" id="silk_color[]" value="30" <?php if ($rsShop['re_shopping_silk_color'] == '30') {echo ' checked ';} ?>>
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="silk_color[]" id="silk_color[]" value="40" <?php if ($rsShop['re_shopping_silk_color'] == '40') {echo ' checked ';} ?>>
								    <i class="fa fa-square green"></i>
								</label>
							</div>
		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">ผ้าไหม :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_txt text-right" name="silk" id="silk" onkeyup="plus()" value="<?php echo $rsShop['re_shopping_silk']; ?>">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ยผ้าไหม :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage text-right" name="silk_average" id="silk_average" value="0" disabled>
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4">
		      				
		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">รวม :</label>
		      				</div>
		      				<div class="col-sm-3 text-right">
		      					<input type="text" class='form-control input_Overall text-right' name="overall" id="overall" onkeyup="plus()" value="0">
		      					<!--<font id="show" name="overall" color=""></font> บาท-->
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ยรวม :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_OverallAvr text-right" name="overall_average" id="overall_average" value="0" disabled>
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4 col-sm-push-1">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="watprachum_color[]" id="watprachum_color[]" value="10" <?php if ($rsShop['re_shopping_watprachum_color'] == '10') {echo ' checked ';} ?>>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="watprachum_color[]" id="watprachum_color[]" value="20" <?php if ($rsShop['re_shopping_watprachum_color'] == '20') {echo ' checked ';} ?>>
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="watprachum_color[]" id="watprachum_color[]" value="30" <?php if ($rsShop['re_shopping_watprachum_color'] == '30') {echo ' checked ';} ?>>
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="watprachum_color[]" id="watprachum_color[]" value="40" <?php if ($rsShop['re_shopping_watprachum_color'] == '40') {echo ' checked ';} ?>>
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">วัดประชุม :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_txt text-right" name="watprachum" id="watprachum" onkeyup="plus()" value="<?php echo $rsShop['re_shopping_watprachum']; ?>">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ยวัดประชุม :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage text-right" name="watprachum_average" id="watprachum_average" value="0" disabled>
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4 col-sm-push-1">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="watnongket_color[]" id="watnongket_color[]" value="10" <?php if ($rsShop['re_shopping_watnongket_color'] == '10') {echo ' checked ';} ?>>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="watnongket_color[]" id="watnongket_color[]" value="20" <?php if ($rsShop['re_shopping_watnongket_color'] == '20') {echo ' checked ';} ?>>
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="watnongket_color[]" id="watnongket_color[]" value="30" <?php if ($rsShop['re_shopping_watnongket_color'] == '30') {echo ' checked ';} ?>>
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="watnongket_color[]" id="watnongket_color[]" value="40" <?php if ($rsShop['re_shopping_watnongket_color'] == '40') {echo ' checked ';} ?>>
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">วัดหนองเกตุ :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_txt text-right" name="watnongket" id="watnongket" onkeyup="plus()" value="<?php echo $rsShop['re_shopping_watnongket']; ?>">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ยวัดหนองเกตุ :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage text-right" name="watnongket_average" id="watnongket_average" value="0" disabled>
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4">
		      				<select class="form-control" name="option_percent">
		      					<option value="<?php echo $rsShop['re_shopping_option_percent']; ?>">
		      					<?php
		      						if($rsShop['re_shopping_option_percent']=='0'){
		      							echo "ยังไม่มีการเลือก %";
		      						}else if($rsShop['re_shopping_option_percent']=='5'){
		      							echo "ไม่คืนเงินออฟฟิศ";
		      						}else if($rsShop['re_shopping_option_percent']=='10'){
		      							echo "10 %";
		      						}else if($rsShop['re_shopping_option_percent']=='40'){
		      							echo "40 %";
		      						}else if($rsShop['re_shopping_option_percent']=='50'){
		      							echo "50 %";
		      						}else if($rsShop['re_shopping_option_percent']=='60'){
		      							echo "60 %";
		      						}
		      					?>
		      					</option>
		      					<?php
		      						if($rsShop['re_shopping_option_percent']=='0'){
		      					?>
								<option value="5">Option ไม่คืนเงินออฟฟิศ</option>
								<option value="10">Option 10%</option>
								<option value="40">Option 40%</option>
								<option value="50">Option 50%</option>
								<option value="60">Option 60%</option>
								<?php }else if($rsShop['re_shopping_option_percent']=='5'){ ?>
								<option value="10">Option 10%</option>
								<option value="40">Option 40%</option>
								<option value="50">Option 50%</option>
								<option value="60">Option 60%</option>
								<?php }else if($rsShop['re_shopping_option_percent']=='10'){ ?>
								<option value="5">Option ไม่คืนเงินออฟฟิศ</option>
								<option value="40">Option 40%</option>
								<option value="50">Option 50%</option>
								<option value="60">Option 60%</option>
								<?php }else if($rsShop['re_shopping_option_percent']=='40'){ ?>
								<option value="5">Option ไม่คืนเงินออฟฟิศ</option>
								<option value="10">Option 10%</option>
								<option value="50">Option 50%</option>
								<option value="60">Option 60%</option>
								<?php }else if($rsShop['re_shopping_option_percent']=='50'){ ?>
								<option value="5">Option ไม่คืนเงินออฟฟิศ</option>
								<option value="10">Option 10%</option>
								<option value="40">Option 40%</option>
								<option value="60">Option 60%</option>
								<?php }else if($rsShop['re_shopping_option_percent']=='60'){ ?>
								<option value="5">Option ไม่คืนเงินออฟฟิศ</option>
								<option value="10">Option 10%</option>
								<option value="40">Option 40%</option>
								<option value="50">Option 50%</option>
								<?php } ?>
		      				</select>
		      			</div>
		      			<div class="col-sm-2">
		      				<label>เฉลี่ย Option :</label>
		      			</div>
		      			<div class="col-sm-4">
		      				<input type="text" class="form-control input_bgoption" name="option" id="" value="<?php echo $rsShop['re_shopping_option_money']; ?>">
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-12">
		      				<textarea class="form-control" name="comment" id="comment" cols="10" rows="5" placeholder="Comment"><?php echo $rsShop['re_shopping_comment']; ?></textarea>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-12 text-center">
		      				<input type="submit" class="btn btn-lg btn-success" value="แก้ไข">
		      				<button class="btn btn-lg btn-danger" onclick="window.location='../index.php'">ยกเลิก</button>
		      			</div>
		      		</div>
			    </form>
		    </div>
		</div>
	    
	</div>
	<!--js-->
	<script src="../../assets/js/jquery-2.1.1.min.js"></script>
	
	<!--scrolling js-->
	<script src="../../assets/js/jquery.nicescroll.js"></script>
	<script src="../../assets/js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="../../assets/js/bootstrap.js"> </script>
    <!-- Table Snipp -->
    <script src="../../assets/js/table-snipp.js"></script>

	<!--skycons-icons-->
	<script src="../../assets/js/skycons.js"></script>
	<!--//skycons-icons-->

	<!-- Calculate JavaScript -->
	<script src="../../function/func.js"></script>

</body>
</html>