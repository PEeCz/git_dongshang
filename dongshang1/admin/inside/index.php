<?php
	session_start();
    require '../../static/db.class.php';
    $conn = connect();

    if(!isset($_SESSION['user_status'])!= '100' && !isset($_SESSION['user_status'])!= '500'){
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
							<form class="navbar-form" role="search">
			                    <div class="input-group">
			                        <input type="text" class="form-control" placeholder="Search">
			                        <span class="input-group-btn">
										<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
								    </span>
			                    </div>
			                </form>
				           <div class="work-progres">
				                <div class="chit-chat-heading">
				                	<a id="<?php echo $rs['user_id']; ?>" class="btn btn-xs btn-success btn_addGuide">เพิ่มข้อมูลไกด์</a>
				                	รายงานข้อมูลไกด์
				                </div>
				                <div class="table-responsive">
				                    <table class="table table-bordered table-striped table-hover">
				                        <thead>
				                            <tr>
				                              	<th>No.</th>
												<th>No. Group</th>
												<th>ชื่อไกด์</th>
												<th>ชื่อหัวหน้าทัวร์</th>
												<th>ชื่อเอเยนต์</th>
												<th>ชื่อรายการ</th>
												<th>จำนวนคน</th>
												<th>รับ</th>
												<th>ส่ง</th>
												<th>โรงแรม 1</th>
												<th>โรงแรม 2</th>
												<th>โรงแรม 3</th>
												<th>โรงแรม 4</th>
												<th>รายละเอียด</th>
				                          	</tr>
				                       	</thead>
				                        <tbody>
				                            <tr>
				                              	<td>1</td>
				                              	<td>Face book</td>
				                              	<td>Malorum</td>                        
				                              	<td><span class="label label-danger">in progress</span></td>
				                              	<td><span class="badge badge-info">50%</span></td>
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
				                      	</tbody>
				                  	</table>
				            	</div>
				        	</div>
						</div>
					    <div class="clearfix"> </div>
					</div>
					<!--main page chit chating end here-->
				</div>
				<!--inner block end here-->

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
	<!--static chart-->
	<script src="../assets/js/Chart.min.js"></script>
	<!--//charts-->
	<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="../assets/js/chartinator.js" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
	<!--geo chart-->

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
         