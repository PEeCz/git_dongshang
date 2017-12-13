<?php
session_start();
	//require 'function/connectdb_hotel.php';
	require('function/db.class.php');
	$conn = connect();

	ini_set('display_errors', 1);
	error_reporting(error_reporting() & ~E_NOTICE);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}

	// Start Pagination And SELECT .. ORDER BY .. And LIMIT ..... , ..... -------------------
	$limit = 20;  
	if (isset($_GET["page"])) { 
		$page  = $_GET["page"]; 
	} else {
	 	$page=1; 
	};  

	$start_from = ($page-1) * $limit;  

	$sql = "SELECT * FROM hotel_book WHERE hotel_name LIKE '%".$strKeyword."%' ORDER BY id ASC LIMIT $start_from, $limit";  
	$qry = $conn->query($sql);  
	?>




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>

        <link rel="shortcut icon" href="../../main/favicon.png">

	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/bootstrapValidator.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/ie10-viewport-bug-workaround.css">
	<link rel="stylesheet" href="assets/css/dashboard.css">
	<link rel="stylesheet" href="assets/css/Pagination.css" />

	<style>
		.tb_width1{ 
			width: 30px;
			font-size: 13px;
		  	font-weight: bolder;
		  	font-family: -webkit-pictograph;
		}
		.tb_width2{ 
			width: 80px;
			width: 30px;
			font-size: 13px;
		  	font-weight: bolder;
		  	font-family: -webkit-pictograph;
		}
		.tb_width3{ 
			width: 120px;
			width: 30px;
			font-size: 13px;
		  	font-weight: bolder;
		  	font-family: -webkit-pictograph;
		}
		.tb_width4{ 
			width: 190px;
			width: 30px;
			font-size: 13px;
		  	font-weight: bolder;
		  	font-family: -webkit-pictograph;
		}
		.tb_width5{
			width: 50px;
			width: 30px;
			font-size: 13px;
		  	font-weight: bolder;
		  	font-family: -webkit-pictograph;
		}
	</style>
</head>
<body>
	
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">บริษัท ตงซ่าง ทราเวลเซอร์วิสกรุ๊ป(ประเทศไทย) จำกัด</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../inside/index.php">หน้าหลัก</a></li>
            <li><a><?php echo $_SESSION['is_fullnameuser']; ?></a></li>
            <li><a href="../../chk/logout.php">ล็อคเอ้าท์</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a class="text-center text-success" style="font-weight: bolder;" href="../inside/index.php">หน้าหลัก</a></li>
            <li class="active">
            	<a class="text-center text-success" style="font-weight: bolder;" href="">ดูข้อมูล <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	<!--<ul class="nav nav-tabs" role="tablist">
			    <li role="presentation"><a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">โรงแรม</a></li>
			    <li role="presentation"><a href="#golfcourt" aria-controls="golfcourt" role="tab" data-toggle="tab">สนามกอล์ฟ</a></li>
			</ul>-->

			<ul class="nav nav-tabs" role="tablist" id="myTab">
		        <li role="presentation" class="active"><a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">โรงแรม</a></li>
		        <li role="presentation"><a href="#golfcourt" aria-controls="golfcourt" role="tab" data-toggle="tab">สนามกอล์ฟ</a></li>

		    </ul>
			
			<!-- Tab panes -->
			<div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="hotel">

			    	<!-- Start Tab HOTEL -->
			    	<h3>โรงแรม</h3>

				    <form class="navbar-form navbar-right" name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
			            <div class="input-group">
			                <input type="text" class="form-control" placeholder="Search" name="txtKeyword" id="txtKeyword" value="<?php echo $strKeyword; ?>">
			                <span class="input-group-btn">
				            <button class="btn btn-md btn-primary"><i class="fa fa-search"></i></button>
			                </span>
			            </div>
			        </form>
					
					<div class="table-responsive">
			            <table class="table table-striped">
			              <thead>
			                <tr class="bg-primary">
			                  <th class="text-center tb_width1">#</th>
			                  <th class="text-center tb_width3">วันที่ | เวลา</th>
			                  <th class="text-center tb_width1">กรุ๊ป</th>
			                  <th class="text-center tb_width3">ชื่อโรงแรม</th>
			                  <th class="text-center tb_width2">ห้องพัก</th>
			                  <th class="text-center tb_width3">แบบห้องพัก</th>
			                  <th class="text-center tb_width3">รายละเอียด</th>
			                  <th class="text-center tb_width4">ใช้ห้อง | รายละเอียดใช้ห้อง</th>
			                  <th class="text-center tb_width2">แก้ไข | ลบ</th>
			                </tr>
			              </thead>
			              <tbody class="bg-danger">
			              	<?php
			              		while($rs = $qry->fetch_assoc()){
			              	?>
			                <tr>
			                  <td class="text-center tb_width1"><?php echo $rs['id']; ?></td>
			                  <td class="text-center tb_width3"><?php echo $rs['start_date'].' | '.$rs['start_time']; ?></td>
			                  <td class="text-center tb_width1"><?php echo $rs['group_code']; ?></td>
			                  <td class="text-center tb_width3"><?php echo $rs['hotel_name']; ?></td>
			                  <td class="text-center tb_width2"><?php echo $rs['room']; ?></td>
			                  <td class="text-center tb_width3"><?php echo $rs['room_type']; ?></td>
			                  <td class="text-center tb_width3"><?php echo $rs['other']; ?></td>
			                  <td class="text-center tb_width4">
			                    <a class="btn btn-xs btn-info btn_useRoom_Hotel" id="<?php echo $rs['id']; ?>">ใช้ห้อง</a> |
					          	<a class="btn btn-xs btn-info btn_useRoomDescrip_Hotel" id="<?php echo $rs['id']; ?>">รายละเอียดใช้ห้อง</a>
			                  </td>
			                  <td class="text-center tb_width2">
			                  	<a href="hotel/edit_hotel.php?id=<?php echo $rs['id']; ?>" class="btn btn-xs btn-warning">แก้ไข</a>
			                  	<a href="hotel/delete_hotel.php?id=<?php echo $rs['id']; ?>" class="btn btn-xs btn-danger">ลบ</a>
			              	  </td>
			                </tr>
			                <?php
			                	}
			                ?>
			              </tbody>
			            </table>
			            <?php  
							$sql = "SELECT COUNT(id) FROM hotel_book";  
							$rs_result = $conn->query($sql);  
							$row = mysqli_fetch_row($rs_result);  
							$total_records = $row[0];  
							$total_pages = ceil($total_records / $limit);  
							$pagLink = "<nav><ul class='pagination'>";  
							for ($i=1; $i<=$total_pages; $i++) {  
							             $pagLink .= "<li><a href='deposit-report.php?page=".$i."'>".$i."</a></li>";  
							};  
							echo $pagLink . "</ul></nav>";  
						?>
			            <a class="btn btn-sm btn-success" href="hotel/ins_hotel.php">เพิ่มข้อมูลโรงแรม</a>
			        </div>

			        <!-- End Tab HOTEL -->

			    </div>


<?php
	$sql = "SELECT * FROM golf_book WHERE golf_name LIKE '%".$strKeyword."%' ORDER BY id ASC LIMIT $start_from, $limit";
	$qry = $conn->query($sql);
?>


			    <div role="tabpanel" class="tab-pane" id="golfcourt">
				
					<!-- Start Tab GOLF -->
					<h3>กอล์ฟ</h3>
					<form class="navbar-form navbar-right" name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
			            <div class="input-group">
			                <input type="text" class="form-control" placeholder="Search" name="txtKeyword" id="txtKeyword" value="<?php echo $strKeyword; ?>">
			                <span class="input-group-btn">
				            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
			                </span>
			            </div>
			        </form>
				    
					<div class="table-responsive">
			            <table class="table table-striped">
			              <thead>
			                <tr class="bg-primary">
			                  <th class="text-center tb_width1">#</th>
			                  <th class="text-center tb_width3">วันที่ | เวลา</th>
			                  <th class="text-center tb_width1">กรุ๊ป</th>
			                  <th class="text-center tb_width3">ชื่อโรงแรม</th>
			                  <th class="text-center tb_width2">ห้องพัก</th>
			                  <th class="text-center tb_width3">แบบห้องพัก</th>
			                  <th class="text-center tb_width3">รายละเอียด</th>
			                  <th class="text-center tb_width4">ใช้ห้อง | รายละเอียดใช้ห้อง</th>
			                  <th class="text-center tb_width2">แก้ไข | ลบ</th>
			                </tr>
			              </thead>
			              <tbody class="bg-danger">
			              	<?php
			              		while($rs = $qry->fetch_assoc()){
			              	?>
			                <tr class="text-center">
			                  <td class="text-center tb_width1"><?php echo $rs['id']; ?></td>
			                  <td class="text-center tb_width3"><?php echo $rs['start_date'].' | '.$rs['start_time']; ?></td>
			                  <td class="text-center tb_width1"><?php echo $rs['group_code']; ?></td>
			                  <td class="text-center tb_width3"><?php echo $rs['golf_name']; ?></td>
			                  <td class="text-center tb_width2"><?php echo $rs['room']; ?></td>
			                  <td class="text-center tb_width3"><?php echo $rs['room_type']; ?></td>
			                  <td class="text-center tb_width3"><?php echo $rs['other']; ?></td>
			                  <td class="text-center tb_width4">
			                    <a class="btn btn-xs btn-info btn_useRoom_Golf" id="<?php echo $rs['id']; ?>">ใช้ห้อง</a> |
					          	<a class="btn btn-xs btn-info btn_useRoomDescrip_Golf" id="<?php echo $rs['id']; ?>">รายละเอียดใช้ห้อง</a>
			                  </td>
			                  <td class="text-center tb_width2">
			                  	<a href="golf/edit_golf.php?id=<?php echo $rs['id']; ?>" class="btn btn-xs btn-warning">แก้ไข</a>
			                  	<a href="golf/delete_golf.php?id=<?php echo $rs['id']; ?>" class="btn btn-xs btn-danger">ลบ</a>
			              	  </td>
			                </tr>
			                <?php
			                	}
			                ?>
			              </tbody>
			            </table>
			            <?php  
							$sql = "SELECT COUNT(id) FROM golf_book";  
							$rs_result = $conn->query($sql);  
							$row = mysqli_fetch_row($rs_result);  
							$total_records = $row[0];  
							$total_pages = ceil($total_records / $limit);  
							$pagLink = "<nav><ul class='pagination'>";  
							for ($i=1; $i<=$total_pages; $i++) {  
							             $pagLink .= "<li><a href='deposit-report.php?page=".$i."'>".$i."</a></li>";  
							};  
							echo $pagLink . "</ul></nav>";  
						?>
			            <a class="btn btn-sm btn-success" href="golf/ins_golf.php">เพิ่มข้อมูลกอล์ฟ</a>
			        </div>

					<!-- End Tab GOLF -->
					
				</div>
			</div>
          
        </div>
      </div>
    </div>

	<script src="assets/js/jquery-1.11.0.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrapValidator.min.js"></script>
	<script src="assets/js/holder.min.js"></script>
	<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	<script src="assets/js/ie-emulation-modes-warning.js"></script>
	<script src="assets/js/jquery.Pagination.js"></script>

	<!-- Start jQuery Modal Ajax -->

	<!-- Button 1 ใช้ห้องไป -->
	<script>
		$(function(){
			$(".btn_useRoom_Hotel").on('click',function(){
				$.ajax({
				  url :"hotel/calc.php" , // -> Go to calc.php
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

	<!-- Button 2 รายละเอียดใช้ห้อง -->
	<script>
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
	<!-- End jQuery Modal Ajax -->

	<!-- Button 1 ใช้ห้องไป -->
	<script>
		$(function(){
			$(".btn_useRoom_Golf").on('click',function(){
				$.ajax({ 
				  url :"golf/calc.php" , // -> Go to calc.php
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

	<!-- Button 2 รายละเอียดใช้ห้อง -->
	<script>
		$(function(){
			$(".btn_useRoomDescrip_Golf").on('click',function(){
				$.ajax({
				  url :"golf/use_room_description.php" , // -> Go to use_room_description.php
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
	<!-- End jQuery Modal Ajax -->

	<button type="button" class="btn btn-primary btn-lg  sr-only" id="btn_msg1" data-toggle="modal" data-target="#exampleModal">Launch demo modal</button>
	<div class="modal fade" id="addbookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog" id="addbook_dialog_modal" role="document"></div>
	</div>


	<!-- Pagination jQuery -->
	<script type="text/javascript">
		$(document).ready(function(){
			$('.pagination').pagination({
		        items: <?php echo $total_records;?>,
		        itemsOnPage: <?php echo $limit;?>,
		        cssStyle: 'light-theme',
				currentPage : <?php echo $page;?>,
				hrefTextPrefix : 'deposit-report.php?page='
		    });
		});
	</script>
	<!-- End Pagination jQuery -->


	<!-- Start jQuery Tab Refresh -->
	<script type="text/javascript">
		$(function() {
		    $('a[data-toggle="tab"]').on('click', function(e) {
		        window.localStorage.setItem('activeTab', $(e.target).attr('href'));
		    });
		    var activeTab = window.localStorage.getItem('activeTab');
		    if (activeTab) {
		        $('#myTab a[href="' + activeTab + '"]').tab('show');
		        window.localStorage.removeItem("activeTab");
		    }
		});
	</script>
	<!-- End jQuery Tab Refresh -->
</body>
</html>