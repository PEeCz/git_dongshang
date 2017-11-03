<?php
	session_start();
    require '../../../static/db.class.php';
    $conn = connect();

    if(!isset($_SESSION['user_status'])!= '100' && !isset($_SESSION['user_status'])!= '400'){
        header("Location: ../../index.php");
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
	<div class="container">
		<div class="well edit_bgpage">
			<div class="row">
				<form method="post" class="form-horizontal" name="frmAddGuide" action="update_edit_group.php?id_user=<?php echo $_SESSION['user_id'] ?>&group_id=<?php echo $id; ?>">
			      	<div class="modal-body">
				      	<div class="form-group">
						    <label for="ed_group_code" class="col-sm-2 control-label">กรุ๊ปโค้ด</label>
						    <div class="col-sm-2">
						      	<input type="text" class="form-control" id="ed_group_code" name="ed_group_code" value="<?php echo $rs['re_group_code']; ?>">
						    </div>
						    <div class="col-sm-2">
						      	<input type="text" class="form-control" id="ed_group_agent" name="ed_group_agent" value="<?php echo $rs['re_group_agent']; ?>">
						    </div>
						    <label for="ed_group_personqty" class="col-sm-2 col-sm-pull-1 control-label">จำนวนคน</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<select class="form-control-static" id="ed_group_personqty" name="ed_group_personqty">
						      		<option value="<?php echo $rs['re_group_personqty']; ?>" selected><?php echo $rs['re_group_personqty']; ?></option>"
						      		<?php
						      			for($i=1; $i<=50; $i++){
						      		?>
						      		<option value="<?php echo $i; ?>">
						      		<?php 
					      				if($i != $rs['re_group_personqty']){
					      					echo $i; 
						      				}
						      		} 
						      		?>
									</option>
						      	</select>
						      	<label class="control-label"> คน</label>
						    </div>
						    <div class="col-sm-2">
							    <div class="radio">
								  	<label id="cancel_text">
								  		<input type="radio" name="cancel[]" value="10">
								  		Cancel Group
								  	</label>
								</div>
								<div class="radio">
								  	<label id="canceled_text">
								  		<input type="radio" name="cancel[]" value="20">
								  		ยกเลิกการ Cancel
								  	</label>
								</div>
							</div>
						</div>

						<div class="form-group">
						    <label for="ed_group_leadertour" class="col-sm-2 control-label">ชื่อหัวหน้าทัวร์</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="ed_group_leadertour" name="ed_group_leadertour" value="<?php echo $rs['re_group_leadertour']; ?>">
						    </div>
						    <div class="col-sm-3">
						      	<div class="radio">
								  <label>
								    <input type="checkbox" name="final[]" id="final[]" value="10" 
										<?php
											if($rs['re_group_final']=='10'){
												echo "checked";
											}
										?>
								    >
								    Final <i class="fa fa-square square_final"></i>
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="checkbox" name="final[]" id="final[]" value="20"
										<?php
											if($rs['re_group_final']=='20'){
												echo "checked";
											}
										?>
								    >
								    No Final <i class="fa fa-square square_nofinal"></i>
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="checkbox" name="final[]" id="final[]" value="30"
										<?php
											if($rs['re_group_final']=='30'){
												echo "checked";
											}
										?>
								    >
								    มีการแก้ไข <i class="fa fa-square square_edit"></i>
								  </label>
								</div>
						    </div>
						    <div class="col-sm-3">
								<div class="radio">
								  <label>
								    <input type="checkbox" name="normal_noshop[]" id="normal_noshop[]" value="10"
										<?php
											if($rs['re_group_normal_noshop']=='10'){
												echo "checked";
											}
										?>
								    >
								    Normal
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="checkbox" name="normal_noshop[]" id="normal_noshop[]" value="20"
										<?php
											if($rs['re_group_normal_noshop']=='20'){
												echo "checked";
											}
										?>
								    >
								    No Shop
								  </label>
								</div>
						    </div>
						</div>

						<div class="form-group">
						    <label for="ed_group_nameagent" class="col-sm-2 control-label">ชื่อเอเย่นต์</label>
						    <div class="col-sm-2">
						      	<input type="text" class="form-control" id="ed_group_nameagent" name="ed_group_nameagent" value="<?php echo $rs['re_group_nameagent']; ?>">
						    </div>
						    <label for="ed_group_in" class="col-sm-2 col-sm-pull-1 control-label">รับ</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<input type="date" class="form-control" id="ed_group_in_date" name="ed_group_in_date" value="<?php echo $rs['re_group_in_date']; ?>">
						      	<input type="time" class="form-control" id="ed_group_in_time" name="ed_group_in_time" value="<?php echo $rs['re_group_in_time']; ?>">
						    </div>
						    <label for="ed_group_flight_in" class="col-sm-2 col-sm-pull-1 control-label">Flight-In</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<input type="text" class="form-control" id="ed_group_flight_in" name="ed_group_flight_in" value="<?php echo $rs['re_group_flight_in']; ?>">
						    </div>
						</div>

						<div class="form-group">
						    <label for="ed_group_program" class="col-sm-2 control-label">ชื่อรายการ</label>
						    <div class="col-sm-2">
						      	<input type="text" class="form-control" id="ed_group_program" name="ed_group_program" value="<?php echo $rs['re_group_program']; ?>">
						    </div>
						    <label for="ed_group_out" class="col-sm-2 col-sm-pull-1 control-label">ส่ง</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<input type="date" class="form-control" id="ed_group_out_date" name="ed_group_out_date" value="<?php echo $rs['re_group_out_date']; ?>">
						      	<input type="time" class="form-control" id="ed_group_out_time" name="ed_group_out_time" value="<?php echo $rs['re_group_out_time']; ?>">
						    </div>
						    <label for="ed_group_flight_out" class="col-sm-2 col-sm-pull-1 control-label">Flight-Out</label>
						    <div class="col-sm-2 col-sm-pull-1">
						      	<input type="text" class="form-control" id="ed_group_flight_out" name="ed_group_flight_out" value="<?php echo $rs['re_group_flight_out']; ?>">
						    </div>
						</div>
						<div class="form-group">
						    <label for="ed_group_description" class="col-sm-2 control-label">รายละเอียด</label>
						    <div class="col-sm-10">
						      	<textarea class="form-control" rows="5" id="ed_group_description" name="ed_group_description"><?php echo $rs['re_group_description']; ?></textarea>
						    </div>
						</div>
						<HR style="border-width: 5px;">
						<div class="form-group">
						    <label for="ed_group_nameguide_th" class="col-sm-2 control-label">ชื่อไกด์ (ไทย)</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="ed_group_nameguide_th" name="ed_group_nameguide_th" value="<?php echo $rs['re_group_nameguide_th']; ?>">
						    </div>
						    <label for="ed_group_nameguide_cn" class="col-sm-2 control-label">ชื่อไกด์ (จีน)</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="ed_group_nameguide_cn" name="ed_group_nameguide_cn" value="<?php echo $rs['re_group_nameguide_cn']; ?>">
						    </div>
						</div>
						<div class="form-group">
						    <div class="col-sm-3 col-sm-offset-2">
						      	<div class="radio">
								  <label for="plan">
								    <input type="checkbox" name="p_t_c_f_con[]" id="p_t_c_f_con[]" value="10"
										<?php
											if($rs['re_group_p_t_c_f_con']=='10'){
												echo "checked";
											}
										?>
								    >
								    Plan <i class="fa fa-square square_plan"></i>
								  </label>
								</div>
								<div class="radio">
								  <label for="call">
								    <input type="checkbox" name="p_t_c_f_con[]" id="p_t_c_f_con[]" value="30"
										<?php
											if($rs['re_group_p_t_c_f_con']=='30'){
												echo "checked";
											}
										?>
								    >
								    Call <i class="fa fa-square square_call"></i>
								  </label>
								</div>
								<div class="radio">
								  <label for="confirm">
								    <input type="checkbox" name="p_t_c_f_con[]" id="p_t_c_f_con[]" value="50"
										<?php
											if($rs['re_group_p_t_c_f_con']=='50'){
												echo "checked";
											}
										?>
								    >
								    Confirm <i class="fa fa-square square_confirm"></i>
								  </label>
								</div>
						    </div>
						    <div class="col-sm-3">
								<div class="radio">
								  <label>
								    <input type="checkbox" name="p_t_c_f_con[]" id="p_t_c_f_con[]" value="40"
										<?php
											if($rs['re_group_p_t_c_f_con']=='40'){
												echo "checked";
											}
										?>
								    >
								    Fit <i class="fa fa-square square_fit"></i>
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="checkbox" name="p_t_c_f_con[]" id="p_t_c_f_con[]" value="20"
										<?php
											if($rs['re_group_p_t_c_f_con']=='20'){
												echo "checked";
											}
										?>
								    >
								    Transfer <i class="fa fa-square square_transfer"></i>
								  </label>
								</div>
						    </div>
						</div>
						<div class="form-group">
						    <label for="ed_group_kb" class="col-sm-2 control-label">KB ไม่ปกติ</label>
						    <div class="col-sm-10">
						      	<textarea class="form-control kb_text" rows="5" id="ed_group_kb" name="ed_group_kb">
						      		<?php echo $rs['re_group_kb']; ?>
						      	</textarea>
						    </div>
						</div>
						<div class="form-group">
						    <label for="ed_group_hotel1" class="col-sm-2 control-label">โรงแรมที่ 1</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="ed_group_hotel1" name="ed_group_hotel1" value="<?php echo $rs['re_group_hotel1']; ?>">
						    </div>
						    <label for="ed_group_hotel2" class="col-sm-2 control-label">โรงแรมที่ 2</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="ed_group_hotel2" name="ed_group_hotel2" value="<?php echo $rs['re_group_hotel2']; ?>">
						    </div>
						</div>
						<div class="form-group">
						    <label for="ed_group_hotel3" class="col-sm-2 control-label">โรงแรมที่ 3</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="ed_group_hotel3" name="ed_group_hotel3" value="<?php echo $rs['re_group_hotel3']; ?>">
						    </div>
						    <label for="ed_group_hotel4" class="col-sm-2 control-label">โรงแรมที่ 4</label>
						    <div class="col-sm-4">
						      	<input type="text" class="form-control" id="ed_group_hotel4" name="ed_group_hotel4" value="<?php echo $rs['re_group_hotel4']; ?>">
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