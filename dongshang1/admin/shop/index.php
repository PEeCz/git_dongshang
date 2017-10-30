<?php
	session_start();
    require '../../static/db.class.php';
    $conn = connect();

    if(!isset($_SESSION['user_status'])!= '200' && !isset($_SESSION['user_status'])!= '400' && !isset($_SESSION['user_status'])!= '500'){
        header("Location: ../../index.php");
    }

    $sql = "SELECT * FROM user WHERE user_status='100' OR user_status='500'";
    $qry = $conn->query($sql);
    $rs = $qry->fetch_assoc();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Dongshang Report Guide</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dongshang, ตงซ่าง, ท่องเที่ยว, สถานที่ท่องเที่ยว, สนามกอล์ฟ, โรงแรม, บริษัททัวร์, ทัวร์"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="../assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="../assets/css/table-snipp.css" rel="stylesheet" type="text/css" media="all"/>
 
<!--icons-css-->
<link href="../assets/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
	
</head>
<body>	
	<div class="page-container">	
	   <div class="left-content">
		   <div class="mother-grid-inner">
	            <!--header start here-->
					<div class="header-main">
						<div class="header-left">
								<div class="logo-name">
										 <a href="index.html"> <h1>ตงซ่าง ทราเวล</h1> 
										<!--<img id="logo" src="" alt="Logo"/>--> 
									  </a> 								
								</div>
								<div class="clearfix"> </div>
							 </div>
							 <div class="header-right">
								<div class="profile_details_left"><!--notifications of menu start -->
									<ul class="nofitications-dropdown">
										<li class="dropdown head-dpdn">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i></a>
										</li>
										<li class="dropdown head-dpdn">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i></a>
										</li>	
										<li class="dropdown head-dpdn">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i></a>
										</li>	
									</ul>
									<div class="clearfix"> </div>
								</div>
								<!--notification menu end -->

								
								<div class="profile_details">		
									<ul>
										<li class="dropdown profile_details_drop">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<div class="profile_img">	
													<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
													<div class="user-name">
														<p><?php echo $rs['user_fullname']; ?></p>
														<span>Administrator</span>
													</div>
													<i class="fa fa-angle-down lnr"></i>
													<i class="fa fa-angle-up lnr"></i>
													<div class="clearfix"></div>	
												</div>	
											</a>
											<ul class="dropdown-menu drp-mnu">
												<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
												<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
												<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>				
							</div>
					     <div class="clearfix"> </div>	
					</div>
					<!--heder end here-->
	
				<!--inner block start here-->
				<div class="inner-block">
					<!--mainpage chit-chating-->
					<div class="chit-chat-layer1">
						<div class="col-md-12 chit-chat-layer1-left">
			                <div class="chit-chat-heading">
			                	<a id="<?php echo $rs['user_id']; ?>" class="btn btn-lg btn-success btn_addGuide">เพิ่มข้อมูลกรุ๊ป</a>
			                </div>
						</div>
					</div>
					<!--main page chit chating end here-->
				</div>
				<!--inner block end here-->

		<div class="panel panel-primary filterable table-responsive" style="min-width: 1500px;">
            <div class="panel-heading">
                <h3 class="panel-title">รายงานข้อมูล Shopping</h3>
                <div class="pull-right">
                    <button class="btn btn-warning btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> ค้นหา</button>
                </div>
            </div>
            <table>
				<thead class="table-bordered">
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ค้นหาจาก ID ของแถว" disabled></th>
                        <th><input type="text" class="form-control" placeholder="ค้นหาจาก กรุ๊ปโค้ด" disabled></th>
                        <th><input type="text" class="form-control" placeholder="ค้นหาจาก ชื่อไกด์" disabled></th>
                    </tr>
                </thead>
            </table>
            <table class="table table-bordered" style="white-space: nowrap;">
                <thead>
                    <tr style="font-size: 12px; table-layout: auto;">
						<th>No.</th>
						<th>No.<BR>Group</th>
						<th>ชื่อ<BR>เอเยนต์</th>
						<th>จำนวน<BR>(คน)</th>
						<th>รับ</th>
						<th>ส่ง</th>
						<th>จำนวนคน<BR>(เข้าร้าน)</th>
						<th>จิวเวอรี่</th>
						<th>กระเป๋า</th>
						<th>สวนงู</th>
						<th>ยางพารา</th>
						<th>GM</th>
						<th>รังนก<BR><HR>ผ้าไหม</th>
						<th>วัดประชุม<BR><HR>วัดหนองเกตุ</th>
						<th>Option<BR>(ไม่คืน)</th>
						<th>Option<BR>(35%)</th>
						<th>Option<BR>(50%)</th>
						<th>เฉลี่ย</th>
						<th>เฉลี่ย<BR>ไม่รวมผ้าไหม</th>
						<th>เฉลี่ย<BR>รวมผ้าไหม</th>
                    </tr>
                </thead>
                <?php
            		$selReport = "SELECT * FROM report_group";
            		$qryReport = $conn->query($selReport);
            	?>
                <tbody>
                	<?php
                		while($rs = $qryReport->fetch_assoc()){
                	?>
                    <tr style="font-size: 14px;">
                      	<td><?php echo (int)$rs['re_group_id']; ?></td>
                      	<td><?php echo $rs['re_group_code']; ?></td>
                      	<td><?php echo $rs['re_group_nameagent']; ?></td>
                      	<td><?php echo $rs['re_group_personqty']; ?></td>
                      	<td><?php echo $rs['re_group_in_date'].' <BR> '.$rs['re_group_in_time']; ?></td>
                      	<td><?php echo $rs['re_group_out_date'].' <BR> '.$rs['re_group_out_time']; ?></td>
                      	<td></td>
                      	<td></td>
                      	<td></td>
                      	<td></td>
                      	<td></td>
                      	<td></td>
                      	<td></td>
                      	<td></td>
                      	<td></td>
                      	<td></td>
                      	<td></td>
                      	<td></td>
                      	<td></td>
                      	<td></td>
                  	</tr>
                  	<?php } ?>
              	</tbody>
            </table>
        </div>

				<!--copy rights start here-->
				<div class="copyrights">
					 <p>© 2017 PEeCz. All Rights Reserved | Design by  <a href="www.dongshangtravel.com" target="_blank">Sorakrit Chinphet</a> </p>
				</div>	
				<!--COPY rights end here-->
			</div>
		</div>
	<!--slider menu-->
	    <div class="sidebar-menu">
			  	<div class="logo"> 
			  		<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
				      <!--<img id="logo" src="" alt="Logo"/>--> 
				  	</a> 
				</div>		  
			    <div class="menu">
			      	<ul id="menu" >
				        <li id="menu-home" >
				        	<a href="index.html">
				        		<i class="fa fa-tachometer"></i><span>หน้าหลัก</span>
				        	</a>
				        </li>
				        <li>
				        	<a href="#">
				        		<i class="fa fa-cogs"></i><span>บอร์ด</span><span class="fa fa-angle-right" style="float: right"></span>
				        	</a>
				        </li>
				        <li id="menu-comunicacao" >
				        	<a href="#">
				        		<i class="fa fa-book nav_icon"></i><span>ยอดชอปปิ้ง</span><span class="fa fa-angle-right" style="float: right"></span>
				        	</a>
				        </li>
				        <li>
				        	<a href="maps.html">
				        		<i class="fa fa-map-marker"></i><span>รายชื่อไกด์</span></a>
				        </li>
				        <li id="menu-academico" >
				        	<a href="#">
				        		<i class="fa fa-file-text"></i><span>โรงแรมและกอล์ฟ</span><span class="fa fa-angle-right" style="float: right"></span>
				        	</a>
				        </li>
			      	</ul>
			    </div>
		 </div>
		<div class="clearfix"> </div>
	</div>
	<!--js-->
	<script src="../assets/js/jquery-2.1.1.min.js"></script>
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
	<script src="../assets/js/jquery.nicescroll.js"></script>
	<script src="../assets/js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="../assets/js/bootstrap.js"> </script>
	<!-- mother grid end here-->
	
    <!-- Table Snipp -->
    <script src="../assets/js/table-snipp.js"></script>

	<!--skycons-icons-->
	<script src="../assets/js/skycons.js"></script>
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
			$(".btn_useRoomDescrip_Hotel").on('click',function(){
				$.ajax({
				  url :"hotel/use_room_description.php" , // -> Go to use_room_description.php
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
         