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
			<div class="col-sm-4" style="background-color: #a5b5d0;">
				<h1 class="text-center">OP</h1>
				<form class="form-horizontal" name="frmShowReport" action="#">
		      		<div class="form-group">
					    <div class="col-sm-6">
					    	กรุ๊ปโค้ด
					      	<input type="text" class="form-control" id="re_group_code" name="re_group_code" value="<?php echo $rs['re_group_code']; ?>" disabled>
					    </div>
					    <div class="col-sm-6">
					    	เอเย่นต์โค้ด
					      	<input type="text" class="form-control" id="re_group_agent" name="re_group_agent" value="<?php echo $rs['re_group_agent']; ?>" disabled>
					    </div>
		      		</div>
		      		<div class="form-group">
					    <div class="col-sm-6">
					    	จำนวนคน
					      	<input type="text" class="form-control" id="re_group_code" name="re_group_code" value="<?php echo $rs['re_group_personqty']; ?> คน" disabled>
					    </div>
					    <div class="col-sm-6">
					    	ชื่อหัวหน้าทัวร์
					      	<input type="text" class="form-control" id="re_group_leadertour" name="re_group_leadertour" value="<?php echo $rs['re_group_leadertour']; ?>" disabled>
					    </div>
		      		</div>
		      		<div class="form-group">
					    <div class="col-sm-6">
					      	<input type="text" class="form-control" id="re_group_leadertour" name="re_group_leadertour" value=<?php 
						      		if($rs['re_group_final']=='10'){
						      			echo 'Final';
						      		}else if($rs['re_group_final']=='20'){
						      			echo 'No&nbsp;Final';
						      		}else if($rs['re_group_final']=='30'){
						      			echo 'มีการแก้ไข';
						      		}
						      	?> disabled>
					    </div>
					    <div class="col-sm-6">
					      	<input type="text" disabled class="form-control" id="re_group_leadertour" name="re_group_leadertour" value=<?php 
						      		if($rs['re_group_normal_noshop']=='10'){
						      			echo 'Normal';
						      		}else if($rs['re_group_normal_noshop']=='20'){
						      			echo 'No&nbsp;Shop';
						      		}else if($rs['re_group_normal_noshop']==''){
						      			echo '';
						      		}
						      	?>>
					    </div>
		      		</div>
		      		<div class="form-group">
					    <div class="col-sm-6">
					    	ชื่อรายการ
		      				<input type="text" class="form-control" id="re_group_program" name="re_group_program" value=<?php echo $rs['re_group_program']; ?> disabled>
		      			</div>
		      			<div class="col-sm-6">
		      				ชื่อไกด์
					      	<input type="text" class="form-control" id="re_group_nameguide_th" name="re_group_nameguide_th" value=<?php echo $rs['re_group_nameguide_th']; ?> disabled>
					    </div>
		      		</div>
		      		<div class="form-group">
					    <div class="col-sm-12">
					    	รายละเอียด
					    	<textarea class="form-control" rows="6" id="re_group_description" name="re_group_description" disabled><?php echo $rs['re_group_description']; ?></textarea>
					    </div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-12">
		      				KB ไม่ปกติ
		      				<textarea class="form-control kb_textcolor" rows="6" id="re_group_kb" name="re_group_kb" disabled><?php echo $rs['re_group_kb']; ?></textarea>
		      			</div>
		      		</div>
			    </form>
		    </div>







		    <div class="col-sm-8" style="background-color: #D2B48C;">
		    	<h1 class="text-center">Accounting</h1>
				<form class="form-horizontal" method="POST" name="frmAccounting" action="insert_shop.php?id=<?php echo $id; ?>">
		      		<div class="form-group">
					    <div class="col-sm-2">
					    	จำนวนคนเข้าร้าน
					      	<select class="form-control" id="re_shopping_personqty" name="re_shopping_personqty">
					      		<?php 
					      			for($i=0; $i<=150; $i++){
					      		?>
								<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
								<?php } ?>
					      	</select>

					    </div>
					    <div class="col-sm-3">
					    	สีจำนวนคนเข้าร้าน
					      	<select class="form-control" id="re_shopping_personqty_color" name="re_shopping_personqty_color">
					      		<option value="0"></option>
								<option value="10" style="background-color: #FFFFFF;">สีขาว</option>
								<option value="20" style="background-color: #9f79ef;">สีม่วง</option>
					      	</select>
					    </div>
					    <div class="col-sm-3">
					    	Charter/Return
					      	<select class="form-control" id="re_shopping_charter" name="re_shopping_charter">
					      		<option value="0"></option>
								<option value="10" style="background-color: #F0F;">Charter</option>
								<option value="20" style="background-color: #FFFFFF;">Return Option</option>
					      	</select>
					    </div>
					    <div class="col-sm-4">
					    	Trip/Wait/Complete
					      	<select class="form-control" id="re_shopping_complete" name="re_shopping_complete">
					      		<option value="0"></option>
								<option value="10" style="background-color: #CCCCCC;">Trip</option>
								<option value="20" style="background-color: #FFFFFF;">Wait Option</option>
								<option value="30" style="background-color: #66FF99;">Complete</option>
					      	</select>
					    </div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="jewel_color[]" id="jewel_color[]" value="10" checked>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="jewel_color[]" id="jewel_color[]" value="20">
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="jewel_color[]" id="jewel_color[]" value="30">
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="jewel_color[]" id="jewel_color[]" value="40">
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">珠寶 :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control text-right" name="jewelry" id="input1" onkeyup="nStr()" value="0">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>珠寶平均 :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage" name="jewelry_average" id="jewelry_average" value="">
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="leather_color[]" id="leather_color[]" value="10" checked>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="leather_color[]" id="leather_color[]" value="20">
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="leather_color[]" id="leather_color[]" value="30">
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="leather_color[]" id="leather_color[]" value="40">
								    <i class="fa fa-square green"></i>
								</label>
							</div>
		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">皮件 :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control text-right" name="leather" id="input2" onkeyup="nStr()" value="0">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>皮件平均 :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage" name="leather_average" id="leather_average" value="">
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="snake_color[]" id="snake_color[]" value="10" checked>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="snake_color[]" id="snake_color[]" value="20">
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="snake_color[]" id="snake_color[]" value="30">
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="snake_color[]" id="snake_color[]" value="40">
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">蛇園 :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control text-right" name="snake_park" id="input3" onkeyup="nStr()" value="0">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>蛇園平均 :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage" name="snake_average" id="snake_average" value="">
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="rubber_color[]" id="rubber_color[]" value="10" checked>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="rubber_color[]" id="rubber_color[]" value="20">
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="rubber_color[]" id="rubber_color[]" value="30">
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="rubber_color[]" id="rubber_color[]" value="40">
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">ยางพารา :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control text-right" name="rubber" id="input4" onkeyup="nStr()" value="0">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ยยางพารา :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage" name="rubber_average" id="rubber_average" value="">
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="red88_color[]" id="red88_color[]" value="10" checked>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="red88_color[]" id="red88_color[]" value="20">
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="red88_color[]" id="red88_color[]" value="30">
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="red88_color[]" id="red88_color[]" value="40">
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">รังนก :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control text-right" name="red88" id="input5" onkeyup="nStr()" value="0">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ยรังนก :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage" name="red88_average" id="red88_average" value="">
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="gm_color[]" id="gm_color[]" value="10" checked>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="gm_color[]" id="gm_color[]" value="20">
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="gm_color[]" id="gm_color[]" value="30">
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="gm_color[]" id="gm_color[]" value="40">
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">GM :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control text-right" name="gm" id="input6" onkeyup="nStr()" value="0">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ย GM :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage" name="gm_average" id="gm_average" value="">
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="silk_color[]" id="silk_color[]" value="10" checked>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="silk_color[]" id="silk_color[]" value="20">
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="silk_color[]" id="silk_color[]" value="30">
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="silk_color[]" id="silk_color[]" value="40">
								    <i class="fa fa-square green"></i>
								</label>
							</div>
		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">ผ้าไหม :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control text-right" name="silk" id="input7" onkeyup="nStr()" value="0">
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4">
		      				
		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">站總和 :</label>
		      				</div>
		      				<div class="col-sm-3 text-right">
		      					<font id="show" name="overall" color=""></font> บาท
		      				</div>
		      				<div class="col-sm-3">
		      					<label>站總和平均 :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bg" name="overall_average" id="overall_average" value="">
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="watprachum_color[]" id="watprachum_color[]" value="10" checked>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="watprachum_color[]" id="watprachum_color[]" value="20">
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="watprachum_color[]" id="watprachum_color[]" value="30">
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="watprachum_color[]" id="watprachum_color[]" value="40">
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">วัดประชุม :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control" name="watprachum" id="watprachum" value="">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ยวัดประชุม :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage" name="watprachum_average" id="watprachum_average" value="">
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4">
		      				<div class="radio">
								<label>
								   	<input type="radio" name="watnongket_color[]" id="watnongket_color[]" value="10" checked>
								    <i class="fa fa-square yellow"></i>
								</label>
								<label>
								   	<input type="radio" name="watnongket_color[]" id="watnongket_color[]" value="20">
								    <i class="fa fa-square white"></i>
								</label>
								<label>
								   	<input type="radio" name="watnongket_color[]" id="watnongket_color[]" value="30">
								    <i class="fa fa-square purple"></i>
								</label>
								<label>
								   	<input type="radio" name="watnongket_color[]" id="watnongket_color[]" value="40">
								    <i class="fa fa-square green"></i>
								</label>
							</div>

		      			</div>
		      			<div class="col-sm-8">
		      				<div class="col-sm-3">
		      					<label class="control-label">วัดหนองเกตุ :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control" name="watnongket" id="watnongket" value="">
		      				</div>
		      				<div class="col-sm-3">
		      					<label>เฉลี่ยวัดหนองเกตุ :</label>
		      				</div>
		      				<div class="col-sm-3">
		      					<input type="text" class="form-control input_bgaverage" name="watnongket_average" id="watnongket_average" value="">
		      				</div>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-4">
		      				<select class="form-control" name="option_percent">
								<option value="0">เลือก Option %</option>
								<option value="5">Option ไม่คืนเงินออฟฟิศ</option>
								<option value="10">Option 10%</option>
								<option value="40">Option 40%</option>
								<option value="50">Option 50%</option>
								<option value="60">Option 60%</option>
		      				</select>
		      			</div>
		      			<div class="col-sm-2">
		      				<label>เฉลี่ย Option :</label>
		      			</div>
		      			<div class="col-sm-4">
		      				<input type="text" class="form-control input_bgoption" name="option" id="" value="">
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-12">
		      				<textarea class="form-control" name="comment" id="comment" cols="10" rows="5" placeholder="Comment"></textarea>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-12 text-center">
		      				<input type="submit" class="btn btn-lg btn-success" value="แก้ไข">
		      				<input type="cancel" class="btn btn-lg btn-danger" value="ยกเลิก">
		      			</div>
		      		</div>
			    </form>
		    </div>
		</div>
	    
	</div>
	<!--js-->
	<script src="../../assets/js/jquery-2.1.1.min.js"></script>
	<!--slide bar menu end here-->
	<script>
		var toggle = true;
		            
		$(".sidebar-icon").click(function() {                
		  if (toggle)
		  {
		    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
		    $("#menu span").css({"position":"absolute"});
		  }
		  else
		  {
		    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
		    setTimeout(function() {
		      $("#menu span").css({"position":"relative"});
		    }, 400);
		  }               
            toggle = !toggle;
        });
	</script>
	<!--scrolling js-->
	<script src="../../assets/js/jquery.nicescroll.js"></script>
	<script src="../../assets/js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="../../assets/js/bootstrap.js"> </script>
	<!-- mother grid end here-->
	
    <!-- Table Snipp -->
    <script src="../../assets/js/table-snipp.js"></script>

	<!--skycons-icons-->
	<script src="../../assets/js/skycons.js"></script>
	<!--//skycons-icons-->
	<!-- script-for sticky-nav -->
		<script>
			$(document).ready(function() {
				 var navoffeset=$(".header-main").offset().top;
				 $(window).scroll(function(){
					var scrollpos=$(window).scrollTop(); 
					if(scrollpos >=navoffeset){
						$(".header-main").addClass("fixed");
					}else{
						$(".header-main").removeClass("fixed");
					}
				 });
				 
			});
		</script>
	<!-- /script-for sticky-nav -->


	<!-- Add Modal JS -->
		<script>
		$(function(){
			$(".btn_addGuide").on('click',function(){
				$.ajax({
				  url :"add_report/ins_guide.php" , // -> Go to calc.php
				  data:"id="+$(this).attr("id"), // -> data json = send id
				  type:"GET", // -> Send Method = "GET"
				  beforeSend: function(){
					  
				  },
				  success : function(result){
					  
					  $("#addbook_dialog_modal").html('');
					  $("#addbook_dialog_modal").html(result);
					  $("#addbookModal").modal('show');
				  },
				  error : function(error){
					  alert(error.responseText);
				  }
				  
				});
			});	
		});
		$(function(){
			$(".btn_description").on('click',function(){
				$.ajax({
				  url :"report_description.php" , // -> Go to use_room_description.php
				  data:"id="+$(this).attr("id"), // -> data json = send id
				  type:"GET", // -> Send Method = "GET"
				  beforeSend: function(){
					  
				  },
				  success : function(result){
					  
					  $("#addbook_dialog_modal").html('');
					  $("#addbook_dialog_modal").html(result);
					  $("#addbookModal").modal('show');
				  },
				  error : function(error){
					  alert(error.responseText);
				  }
				  
				});
			});	
		});

		</script>
		<button type="button" class="btn btn-primary btn-lg  sr-only" id="btn_msg1" data-toggle="modal" data-target="#exampleModal">Launch demo modal</button>
		<div class="modal fade" id="addbookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
			<div class="modal-dialog" id="addbook_dialog_modal" role="document"></div>
		</div>
	<!-- End Add Modal JS -->


	<!-- Calculate -->
	<script type='text/javascript'>
		function nStr(){
		    var int1 =document.getElementById('input1').value;
		    var int2=document.getElementById('input2').value; 
		    var int3=document.getElementById('input3').value; 
		    var int4=document.getElementById('input4').value; 
		    var int5=document.getElementById('input5').value; 
		    var int6=document.getElementById('input6').value;    
		    var int7=document.getElementById('input7').value; 
		    var n1 = parseInt(int1);
		    var n2 = parseInt(int2); 
		    var n3 = parseInt(int3); 
		    var n4 = parseInt(int4); 
		    var n5 = parseInt(int5); 
		    var n6 = parseInt(int6); 
		    var n7 = parseInt(int7);        
		    var show=document.getElementById('show');
		    
		     if (isNaN(n1)){    
		          document.getElementById("show").setAttribute("color","red");       
		          show.innerHTML="ใส่ให้ครบทุกช่อง"
		         if (int2.length>0){
		             if (isNaN(int1)){
		                 document.getElementById("show").setAttribute("color","red");
		                 show.innerHTML="ใส่ให้ครบทุกช่อง"
		             }  
		             else if (isNaN(int2)){
		                 document.getElementById("show").setAttribute("color","red");
		                 show.innerHTML="ใส่ให้ครบทุกช่อง"
		             }          
		             else if (int1.length >0){
		                   document.getElementById("show").setAttribute("color","Blue");    
		                 show.innerHTML=n1+n2+n3+n4+n5+n6+n7;
		             }            
		             else if (int2.length>0){
		                 document.getElementById("show").setAttribute("color","Blue");    
		                 show.innerHTML=n2;
		             }
		          }   
		       }          
		     else if (int1.length > 0) {     
		         if (isNaN(int2)){
		               document.getElementById("show").setAttribute("color","red");
		               show.innerHTML="ใส่ให้ครบทุกช่อง"
		         }    
		         else if (int2.length >0){
		               document.getElementById("show").setAttribute("color","Blue");    
		               show.innerHTML=n1+n2+n3+n4+n5+n6+n7;
		         }                     
		         else if (int1.length > 0){
		               document.getElementById("show").setAttribute("color","Blue");    
		               show.innerHTML=n1;
		       }            
		     }
		   }
		   function addCommas(nStr) //ฟังชั่้นเพิ่ม คอมม่าในการแสดงเลข
		    {
		        nStr += '';
		        x = nStr.split('.');
		        show = x[0];
		        x2 = x.length > 1 ? '.' + x[1] : '';
		        var rgx = /(\d+)(\d{3})/;
		        while (rgx.test(x1)) {
		        show = show.replace(rgx, '$1' + ',' + '$2');
		        }
		        return x1 + x2;
		    }
	</script>
</body>
</html>