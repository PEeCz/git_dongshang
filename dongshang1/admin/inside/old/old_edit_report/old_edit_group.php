<?php
	session_start();
    require '../static/db.class.php';
    $conn = connect();

    if(!isset($_SESSION['is_ot'])
    	&& 
    	!isset($_SESSION['is_of'])
    	&&
    	!isset($_SESSION['is_ad'])
    	&&
    	!isset($_SESSION['is_fd']) 
    	&&
    	!isset($_SESSION['is_am'])
    	&&
    	!isset($_SESSION['is_boss'])
    	&& 
    	!isset($_SESSION['is_admin'])){

    	header("Location: ../index.php");
    }

    $id = $_GET['id'];

    $sqlReport = "SELECT * FROM report_shopping WHERE no_group='$id'";
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
<link href="../../../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="../../../assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../../../assets/css/table-snipp.css" rel="stylesheet" type="text/css" media="all"/>
 
<!--icons-css-->
<link href="../../../assets/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

<!-- Admin Page CSS -->
<link href="../../../assets/css/admin_page.css" rel="stylesheet" type="text/css">
	
</head>
<body>	
	<div class="container-fluid">
		<div class="well edit_bgpage">
			<div class="row">
				<?php /*<form method="post" class="form-horizontal" name="frmAddGuide" action="update_edit_group.php?id_user=<?php echo $_SESSION['user_id']; ?>&group_id=<?php echo $id; ?>">
			      	<div class="modal-body">
						<div class="form-group">
							<div class="col-sm-12">
							<label class="col-sm-1 control-label" for="">團號 :</label>
								<div class="col-sm-2">
									<input type="text" class="form-control" name="no_group" value="">
								</div>
								<div class="col-sm-1" style="font-size: 25px;font-weight: bolder;">/</div>
								<div class="col-sm-2">	
									<input type="text" class="form-control" name="no_community" value="">
								</div>
								<div class="col-sm-2" style="padding-top: 3px;">	
									<span class="well-sm" style="background-color:#FFF">
										<input type="radio" name="tourist_status[]" value="0">
									</span>
									<span class="well-sm" style="background-color:#FFCC66">
										<input type="radio" name="tourist_status[]" value="1">
									</span>
									<span class="well-sm" style="background-color:#F0F">
										<input type="radio" name="tourist_status[]" value="2">
									</span>
								</div>
								<label class="col-sm-1 col-sm-pull-1 control-label" for="">人 :</label>
								<div class="col-sm-3 col-sm-pull-1">
									<input type="text" class="form-control" name="no_group" value="">
								</div>
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
		      	*/ ?>

				<form method="post" class="form-horizontal" name="frmAddGuide" action="update_old_edit_group.php?no_group=<?php echo $id; ?>">
					<table id="a" border="0" cellspacing="1" cellpadding="0">  
						<tbody>
							<tr>
							  	<td width="100px" align="right" title="No.Group">團號 :</td>
							    <td></td>
							    <td width="225px" align="right" title="團號 - No.Group"><input type="text" name="no_group" id="no_group" class="textbox form-control" value="<?php echo $rs['no_group']; ?>"> </td>
							    <td width="50px;" align="center" style="font-size: 25px;font-weight: bold">/</td>
							    <td width="225px" align="center" title="组团社团号 - No. community"><input type="text" name="no_community" id="no_community" class="textbox form-control" value="<?php echo $rs['no_community']; ?>"></td>
							    <td width="50px;"></td>
							    <td width="225px">
							     	<table style="border:#666 ridge 1px" align="center">
							     		<tbody>
							     			<tr>
										        <td style="background-color:#FFF;width: 30px;" align="center"><input type="radio" id="tourist_status0" name="tourist_status[]" value="0" checked="checked"></td>
										        <td style="background-color:#FFCC66;width: 30px;" align="center"><input type="radio" id="tourist_status1" name="tourist_status[]" value="1"></td> 
										        <td style="background-color:#F0F;width: 30px;" align="center"><input type="radio" id="tourist_status2" name="tourist_status[]" value="2"></td>
							        		</tr>
							        	</tbody>
							        </table>
							    </td>
							    <td width="100px" align="right" title="tourist ลูกทัวร์">人 :</td>
							    <td width="225px" align="left" title="人 - tourist ลูกทัวร์"><input type="text" name="tourist" id="tourist" class="textbox form-control" style="text-align:center" value="<?php echo $rs['tourist']; ?>"></td>
							</tr>
						</tbody>
					</table>
					<br>
					<table>
					  	<tbody>
						  	<tr>
							    <td width="100px" align="right" title="Leader Guide">領隊 :</td>
							    <td></td>
							    <td width="225px" align="right" title="領隊 - Leader Guide"><input type="text" name="leader_giude" id="leader_giude" class="textbox form-control" value="<?php echo $rs['leader_giude']; ?>"></td>
							    <td width="125px;"></td>
							    <td width="125px;"></td>
							    <td width="150px;" align="center" style="background: linear-gradient(to bottom, #996633 0%, #996600 100%); border-radius: 10px; margin:-10px 0 0 10px; height:25px"><input type="radio" id="giude_status9" name="giude_status[]" value="9" checked="checked">
							      :  Cancel</td>
							    <td></td>
							    <td width="150px;" align="left" style="background: linear-gradient(to bottom, #ffcc66 0%, #ffcc99 100%); border: double 1px #00F; border-radius: 10px; margin:-10px 0 0 10px; height:25px" width="75">
							    &nbsp;<input type="radio" id="charter0" name="charter[]" value="0" checked="checked"> :  Normal<br>
							    &nbsp;<input type="radio" id="charter3" name="charter[]" value="3"> :  No Shop
							    </td>
						  	</tr>
						  	<tr><td>&nbsp;</td></tr>
						  	<tr>
							    <td width="100px" align="right" title="Agent">組團社 :</td>
							    <td></td>
							    <td width="225px" align="right" title="組團社 - Agent"><input type="text" name="agent_tour" id="agent_tour" class="textbox form-control" value="<?php echo $rs['agent_tour']; ?>"></td>
							    <td width="100px" align="right"> IN :</td>
							    <td width="225px" align="right"><input type="text" name="datein" id="datein" value="<?php echo $rs['datein']; ?>" class="hasDatepicker form-control"></td>
							    <td width="100px" align="right">Flight In :</td>
							    <td width="225px"><input type="text" name="no_flight_in" id="no_flight_in" class="textbox form-control" value="<?php echo $rs['no_flight_in']; ?>"></td>
						  	</tr>
						  	<tr><td>&nbsp;</td></tr>
						  	<tr>
							    <td width="100px" align="right" title="Type Group">组团社 :</td>
							    <td></td>
							    <td width="225px" align="right" title="组团社 - Type Group"><input type="text" name="group_type" id="group_type" class="textbox form-control" value="<?php echo $rs['group_type']; ?>"></td>
							    <td width="100px" align="right">OUT :</td>
							    <td width="225px" align="right"><input type="text" name="dateout" id="dateout" value="<?php echo $rs['dateout']; ?>" class="hasDatepicker form-control"></td>
							    <td width="100px" align="right">Flight Out :</td>
							    <td width="225px"><input type="text" name="no_flight_out" id="no_flight_out" class="textbox form-control" value="<?php echo $rs['no_flight_out']; ?>"></td>
						  	</tr>
						  	<tr><td>&nbsp;</td></tr>
						  	<tr>
							    <td align="right">Comment :</td>
							    <td colspan="7">
							    	<textarea class="form-control" name="append" id="append" rows="5" style="background: #9CF"><?php echo $rs['append']; ?></textarea>
							    </td>
						  	</tr>
						</tbody>
					</table>
					<hr>

					<table id="a" border="0" cellspacing="1" cellpadding="0">
						<tbody>
							<tr>
							    <td width="100px" align="right" title="Name Giude">導遊姓名 :</td> 
							    <td></td>
							    <td width="350px" align="left" title="導遊姓名 - Name Giude (Thai)">
							    	<input type="text" name="name_thai" id="name_thai" class="textbox form-control" value="<?php echo $rs['name_thai']; ?>">
							    </td>
							    <td width="50px;" align="center"> 泰文名</td>
							    <td width="350px" align="left" title="導遊姓名 - Name Giude (Chinese )">
							    	<input type="text" name="name_china" id="name_china" class="textbox form-control" value="<?php echo $rs['name_china']; ?>">
							    </td>
							    <td width="50px;" align="center"> 中文名</td> 
							    <td width="100px;"></td>
								<td width="225px;" colspan="2" width="181" align="center" style="background: linear-gradient(to bottom, #996633 0%, #996600 100%); border-radius: 10px; margin:-10px 0 0 10px; height:45px">
									<table>
								    	<tbody>
								    		<tr>
											    <td width="75"><input type="radio" id="giude_status0" name="giude_status[]" value="0"> :  Plan</td>
											    <td width="99"><input type="radio" id="giude_status4" name="giude_status[]" value="4"> :  Transfer</td>
							    			</tr>
							    			<tr>
											    <td><input type="radio" id="giude_status1" name="giude_status[]" value="1"> :  Call</td>
											    <td><input type="radio" id="giude_status2" name="giude_status[]" value="2"> :  Confirm</td>
										    </tr>
										    <tr>
										    	<td><input type="radio" id="giude_status3" name="giude_status[]" value="3"> :  Fit</td>
										    </tr>
										   	<tr>
										   		<td> เฉพาะ GROUP</td>
										   	</tr>
										   	<tr>
											    <td><input type="radio" id="hotel_status1" name="hotel_status[]" value="1"> :  Wait</td>
											    <td><input type="radio" id="hotel_status2" name="hotel_status[]" value="2"> :  Final</td>
										   	</tr>
							    		   	<tr>
							    				<td><input type="radio" id="hotel_status3" name="hotel_status[]" value="3" checked="checked"> :  Cancel</td>
							    		    </tr>
							    		</tbody>
							    	</table>
							    </td>
							</tr>
							<tr>
								<td align="right">KB ไม่ปกติ :</td>
						    	<td></td>
								<td colspan="4">
									<textarea class="form-control" name="kbcomment" id="kbcomment" rows="5" style="width:500px; background: #CCCCFF"><?php echo $rs['kbcomment']; ?></textarea>
								</td>
							</tr>
						</tbody>
					</table>

					<hr>

					<div>
						<table align="left" style=" border-right: #999 ridge 2px; height:300px">
							<tbody>
								<tr>
									<td width="10">&nbsp;</td>
									<td width="220" style="size:3; color:#00F" title="Hotel"><b>酒店 </b></td>
									<td width="10">&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>Hotel 1</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td width="500px;"><input type="text" class="form-control" name="hotel_1" id="hotel_1" value="<?php echo $rs['hotel_1']; ?>"></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>Hotel 2</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td width="500px;"><input type="text" class="form-control" name="hotel_2" id="hotel_2" value="<?php echo $rs['hotel_2']; ?>"></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>Hotel 3</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td width="500px;"><input type="text" class="form-control" name="hotel_4" id="hotel_4" value="<?php echo $rs['hotel_4']; ?>"></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>Hotel 4</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td width="500px;"><input type="text" class="form-control" name="hotel_3" id="hotel_3" value="<?php echo $rs['hotel_3']; ?>"></td>
								</tr>
							</tbody>
						</table>
					<br>
					<br>
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
	<script src="../../../assets/js/jquery-2.1.1.min.js"></script>
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
	<script src="../../../assets/js/jquery.nicescroll.js"></script>
	<script src="../../../assets/js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="../../../assets/js/bootstrap.js"> </script>
	<!-- mother grid end here-->
	
    <!-- Table Snipp -->
    <script src="../../../assets/js/table-snipp.js"></script>

	<!--skycons-icons-->
	<script src="../../../assets/js/skycons.js"></script>
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