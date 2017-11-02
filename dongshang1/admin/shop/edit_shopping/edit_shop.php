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
	
</head>
<body>	
	<div class="container-fluid">
		<div class="row" style="padding-top: 10px;">
			<div class="col-sm-4" style="background-color: #a5b5d0;">
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
					      	<input type="text" class="form-control" id="re_group_leadertour" name="re_group_leadertour" value=
					      	<?php 
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
					      	<input type="text" class="form-control" id="re_group_leadertour" name="re_group_leadertour" value=
					      	<?php 
					      		if($rs['re_group_normal_noshop']=='10'){
					      			echo 'Normal';
					      		}else if($rs['re_group_normal_noshop']=='20'){
					      			echo 'No&nbsp;Shop';
					      		}
					      	?> disabled>
					    </div>
		      		</div>
		      		<div class="form-group">
					    <div class="col-sm-6">
					    	ชื่อรายการ
		      				<input type="text" class="form-control" id="re_group_program" name="re_group_program" value="<?php echo $rs['re_group_program']; ?>" disabled>
		      			</div>
		      			<div class="col-sm-6">
		      				ชื่อไกด์
					      	<input type="text" class="form-control" id="re_group_nameguide_th" name="re_group_nameguide_th" value="<?php echo $rs['re_group_nameguide_th']; ?>" disabled>
					    </div>
		      		</div>
		      		<div class="form-group">
					    <div class="col-sm-12">
					    	รายละเอียด
					    	<textarea class="form-control" rows="6" id="re_group_description" name="re_group_description" disabled>
					    		<?php echo $rs['re_group_description']; ?>
					    	</textarea>
					    </div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-12">
		      				KB ไม่ปกติ
		      				<textarea class="form-control" rows="6" id="re_group_kb" name="re_group_kb" disabled>
		      					<?php echo $rs['re_group_kb']; ?>
		      				</textarea>
		      			</div>
		      		</div>
			    </form>
		    </div>

		    <div class="col-sm-8" style="background-color: #51c7d8;">
				<form class="form-horizontal" name="frmShowReport" action="#">
		      		<div class="form-group">
					    <div class="col-sm-12">
					    	กรุ๊ปโค้ด
					      	<input type="text" class="form-control" id="re_group_code" name="re_group_code" value="<?php echo $rs['re_group_code']; ?>" disabled>
					    </div>
		      		</div>
		      		<div class="form-group">
					    <div class="col-sm-12">
					    	จำนวนคน
					      	<input type="text" class="form-control" id="re_group_code" name="re_group_code" value="<?php echo $rs['re_group_personqty']; ?> คน" disabled>
					    </div>
		      		</div>
		      		<div class="form-group">
					    <div class="col-sm-12">
					      	<input type="text" class="form-control" id="re_group_leadertour" name="re_group_leadertour" value=
					      	<?php 
					      		if($rs['re_group_normal_noshop']=='10'){
					      			echo 'Normal';
					      		}else if($rs['re_group_normal_noshop']=='20'){
					      			echo 'No&nbsp;Shop';
					      		}
					      	?> disabled>
					    </div>
		      		</div>
		      		<div class="form-group">
					    <div class="col-sm-12">
					    	ชื่อรายการ
		      				<input type="text" class="form-control" id="re_group_program" name="re_group_program" value="<?php echo $rs['re_group_program']; ?>" disabled>
		      			</div>
		      		</div>
		      		<div class="form-group">
					    <div class="col-sm-12">
					    	รายละเอียด
					    	<textarea class="form-control" rows="3" id="re_group_description" name="re_group_description" disabled>
					    		<?php echo $rs['re_group_description']; ?>
					    	</textarea>
					    </div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-12">
		      				KB ไม่ปกติ
		      				<textarea class="form-control" rows="3" id="re_group_kb" name="re_group_kb" disabled>
		      					<?php echo $rs['re_group_kb']; ?>
		      				</textarea>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-12">
		      				โรงแรมที่ 1
		      				<input type="text" class="form-control" id="re_group_hotel1" name="re_group_hotel1" value="<?php echo $rs['re_group_hotel1']; ?>" disabled>
		      			</div>
		      		</div>
		      		<div class="form-group">
		      			<div class="col-sm-12">
		      				โรงแรมที่ 3
		      				<input type="text" class="form-control" id="re_group_hotel3" name="re_group_hotel3" value="<?php echo $rs['re_group_hotel3']; ?>" disabled>
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