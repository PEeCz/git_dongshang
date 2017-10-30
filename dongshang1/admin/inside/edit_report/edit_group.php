<?php
	session_start();
    require '../../../static/db.class.php';
    $conn = connect();

    if(!isset($_SESSION['user_status'])!= '100' && !isset($_SESSION['user_status'])!= '400'){
        header("Location: ../../index.php");
    }

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
	
</head>
<body>	
	<div class="container">
		<div class="well" style="background-color: #cd853f;">
			<div class="row">
				<form method="post" class="form-horizontal" name="frmAddGuide" action="add_report/ins_guidechk.php">
			      	<div class="modal-body">
				      	<div class="form-group">
						    <label for="re_group_code" class="col-sm-2 control-label">กรุ๊ปโค้ด</label>
						    <div class="col-sm-2">
						      	<input type="text" class="form-control" id="re_group_code" name="re_group_code" placeholder="กรุ๊ปโค้ด">
						    </div>
						    <div class="col-sm-2">
						      	<input type="text" class="form-control" id="re_group_agent" name="re_group_agent" placeholder="เอเย่นต์โค้ด">
						    </div>
						    <label for="re_group_personqty" class="col-sm-2 col-sm-pull-1 control-label">จำนวนคน</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<select class="form-control" id="re_group_personqty" name="re_group_personqty">
						      		<?php 
						      			for($i=1; $i<=50; $i++){
						      		?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php } ?>
						      	</select>
						    </div>
						    <div class="col-sm-2 col-sm-pull-1">
						    	<label class="control-label"> คน</label>
						    </div>
						</div>

						<div class="form-group">
						    <label for="re_group_leadertour" class="col-sm-2 control-label">ชื่อหัวหน้าทัวร์</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_leadertour" name="re_group_leadertour" placeholder="ชื่อหัวหน้าทัวร์">
						    </div>
						    <div class="col-sm-3">
						      	<div class="radio">
								  <label>
								    <input type="checkbox" name="final" id="final" value="10">
								    Final
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="checkbox" name="no_final" id="no_final" value="20">
								    No Final
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="checkbox" name="edit" id="edit" value="30">
								    มีการแก้ไข
								  </label>
								</div>
						    </div>
						    <div class="col-sm-3">
								<div class="radio">
								  <label>
								    <input type="checkbox" name="normal" id="normal" value="10">
								    Normal
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="checkbox" name="no_shop" id="no_shop" value="20">
								    No Shop
								  </label>
								</div>
						    </div>
						</div>

						<div class="form-group">
						    <label for="re_group_nameagent" class="col-sm-2 control-label">ชื่อเอเย่นต์</label>
						    <div class="col-sm-2">
						      	<input type="text" class="form-control" id="re_group_nameagent" name="re_group_nameagent" placeholder="ชื่อเอเย่นต์">
						    </div>
						    <label for="re_group_in" class="col-sm-2 col-sm-pull-1 control-label">รับ</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<input type="date" class="form-control" id="re_group_in_date" name="re_group_in_date">
						      	<input type="time" class="form-control" id="re_group_in_time" name="re_group_in_time">
						    </div>
						    <label for="re_group_flight_in" class="col-sm-2 col-sm-pull-1 control-label">Flight-In</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<input type="text" class="form-control" id="re_group_flight_in" name="re_group_flight_in" placeholder="Email">
						    </div>
						</div>

						<div class="form-group">
						    <label for="re_group_program" class="col-sm-2 control-label">ชื่อรายการ</label>
						    <div class="col-sm-2">
						      	<input type="text" class="form-control" id="re_group_program" name="re_group_program" placeholder="ชื่อรายการ">
						    </div>
						    <label for="re_group_out" class="col-sm-2 col-sm-pull-1 control-label">ส่ง</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<input type="date" class="form-control" id="re_group_out_date" name="re_group_out_date">
						      	<input type="time" class="form-control" id="re_group_out_time" name="re_group_out_time">
						    </div>
						    <label for="re_group_flight_out" class="col-sm-2 col-sm-pull-1 control-label">Flight-Out</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<input type="text" class="form-control" id="re_group_flight_out" name="re_group_flight_out" placeholder="Email">
						    </div>
						</div>
						<div class="form-group">
						    <label for="re_group_description" class="col-sm-2 control-label">รายละเอียด</label>
						    <div class="col-sm-10">
						      	<textarea class="form-control" rows="5" id="re_group_description" name="re_group_description" placeholder="รายละเอียดต่างๆ"></textarea>
						    </div>
						</div>
						<HR style="border-width: 5px;">
						<div class="form-group">
						    <label for="re_group_nameguide_th" class="col-sm-2 control-label">ชื่อไกด์ (ไทย)</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_nameguide_th" name="re_group_nameguide_th" placeholder="ชื่อไกด์ (ไทย)">
						    </div>
						    <label for="re_group_nameguide_cn" class="col-sm-2 control-label">ชื่อไกด์ (จีน)</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_nameguide_cn" name="re_group_nameguide_cn" placeholder="ชื่อไกด์ (จีน)">
						    </div>
						</div>
						<div class="form-group">
						    <div class="col-sm-3 col-sm-offset-2">
						      	<div class="radio">
								  <label for="plan">
								    <input type="checkbox" name="plan" id="plan" value="10">
								    Plan
								  </label>
								</div>
								<div class="radio">
								  <label for="call">
								    <input type="checkbox" name="call" id="call" value="30">
								    Call
								  </label>
								</div>
								<div class="radio">
								  <label for="confirm">
								    <input type="checkbox" name="confirm" id="confirm" value="50">
								    Confirm
								  </label>
								</div>
						    </div>
						    <div class="col-sm-3">
								<div class="radio">
								  <label>
								    <input type="checkbox" name="fit" id="fit" value="40">
								    Fit
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="checkbox" name="transfer" id="transfer" value="20">
								    Transfer
								  </label>
								</div>
						    </div>
						</div>
						<div class="form-group">
						    <label for="re_group_kb" class="col-sm-2 control-label">KB ไม่ปกติ</label>
						    <div class="col-sm-10">
						      	<textarea class="form-control" rows="5" id="re_group_kb" name="re_group_kb" placeholder="ข้อมูลที่มีการเพิ่มเข้ามา"></textarea>
						    </div>
						</div>
						<div class="form-group">
						    <label for="re_group_hotel1" class="col-sm-2 control-label">โรงแรมที่ 1</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_hotel1" name="re_group_hotel1" placeholder="Ex. Avana Hotel">
						    </div>
						    <label for="re_group_hotel2" class="col-sm-2 control-label">โรงแรมที่ 2</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_hotel2" name="re_group_hotel2" placeholder="Ex. Avana Hotel">
						    </div>
						</div>
						<div class="form-group">
						    <label for="re_group_hotel3" class="col-sm-2 control-label">โรงแรมที่ 3</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_hotel3" name="re_group_hotel3" placeholder="Ex. Avana Hotel">
						    </div>
						    <label for="re_group_hotel4" class="col-sm-2 control-label">โรงแรมที่ 4</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="re_group_hotel4" name="re_group_hotel4" placeholder="Ex. Avana Hotel">
						    </div>
						</div>
					</div>
			      	<div class="form-group">
			      		<div class="col-sm-12 text-center">
				        	<input type="submit" name="save" class=" btn btn-lg btn-success" value="แก้ไข">
				        	<a href="../index.php" class="btn btn-lg btn-danger" data-dismiss="modal">กลับหน้าหลัก</a>
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
</body>
</html>