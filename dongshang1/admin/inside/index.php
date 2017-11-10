<?php
	session_start();
    require '../../static/db.class.php';
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

    	header("Location: ../../index.php");
    }

    $sql = "SELECT * FROM user WHERE user_status='100' OR user_status='500'";
    $qry = $conn->query($sql);
    $rsUser = $qry->fetch_assoc();

    // Start Pagination And SELECT .. ORDER BY .. And LIMIT ..... , ..... -------------------
	$limit = 20;  
	if (isset($_GET["page"])) { 
		$page  = $_GET["page"]; 
	} else {
	 	$page=1; 
	};  

	$start_from = ($page-1) * $limit;  

	$sqlPagination = "SELECT * FROM report_group WHERE re_group_id LIMIT $start_from, $limit";  
	$qryPagination  = $conn->query($sqlPagination);


    require '../include/header.php';
?>

<body>	
	<div class="page-container">	
	   <div class="left-content">
		   <div class="mother-grid-inner">
	            <!--header start here-->
					<?php
						require '../include/navbar.php';
					?>
				<!--heder end here-->
	
					<!--mainpage chit-chating-->
					<div class="chit-chat-layer1">
						<div class="col-md-3 chit-chat-layer1-left">
			                <div class="chit-chat-heading">
			                	<a id="<?php echo $rsUser['user_id']; ?>" class="btn btn-lg btn-success btn_addGuide">เพิ่มข้อมูลกรุ๊ป</a>
			                </div>
						</div>
						<div class="col-md-3 chit-chat-layer1-right" id="bgdiv">
			                <div class="chit-chat-heading">
			                	<p id="confirm">สีเขียว = Confirm</p>
			                	<p id="call">สีเหลืองอ่อน = Call</p>
			                </div>
						</div>
						<div class="col-md-3 chit-chat-layer1-right" id="bgdiv">
			                <div class="chit-chat-heading">
			                	<p id="fit">สีชมพูอ่อน = FIT</p>
			                	<p id="plan">สีขาว = Plan / No Final</p>
			                </div>
						</div>
						<div class="col-md-3 chit-chat-layer1-right" id="bgdiv">
			                <div class="chit-chat-heading">
								<p id="edit">สีม่วง = มีการแก้ไข</p>
								<p id="final">สีส้ม = Final</p>
							</div>
						</div>
					</div>
					<BR><BR><BR>
					<!--main page chit chating end here-->
				

		<div class="panel panel-primary filterable table-responsive">
            <div class="panel-heading">
                <h3 class="panel-title">รายงานข้อมูล Group</h3>
                <div class="pull-right">
                	<a href="search_advance.php" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-filter"></span> ค้นหาแบบละเอียด</a>
                    <button class="btn btn-warning btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> ค้นหา</button>
                </div>
            </div>
            <table>
				<thead class="table-bordered">
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ค้นหาจาก ID ของแถว" disabled></th>
                        <th><input type="text" class="form-control" placeholder="ค้นหาจาก กรุ๊ปโค้ด" disabled></th>
                        <th><input type="text" class="form-control" placeholder="ค้นหาจาก ชื่อไกด์" disabled></th>
                        <th><input type="text" class="form-control" placeholder="ค้นหาจาก ชื่อหัวหน้าทัวร์" disabled></th>
                    </tr>
                </thead>
            </table>
            <table class="table table-bordered">
                <thead class="bg-info">
                    <tr style="font-size: 12px;">
						<th style="width: 70px;">No.</th>
						<th style="width: 150px;">No. Group</th>
						<th style="width: 100px;">ชื่อ<BR>ไกด์</th>
						<th style="width: 100px;">ชื่อ<BR>หัวหน้าทัวร์</th>
						<th style="width: 100px;">ชื่อ<BR>เอเยนต์</th>
						<th style="width: 100px;">ชื่อ<BR>รายการ</th>
						<th style="width: 40px;">จำนวน<BR>(คน)</th>
						<th style="width: 200px;">รับ</th>
						<th style="width: 200px;">ส่ง</th>
						<th style="width: 50px;">โรงแรม <BR>1</th>
						<th style="width: 50px;">โรงแรม <BR>2</th>
						<th style="width: 50px;">โรงแรม <BR>3</th>
						<th style="width: 50px;">โรงแรม <BR>4</th>
						<th style="width: 40px;">รายละเอียด</th>
                    </tr>
                </thead>
                <?php

                /*
            		$selReport = "SELECT * FROM report_group";
            		$qryReport = $conn->query($selReport);
            		*/
            	?>
                <tbody>
                	<?php
                		while($rs = $qryPagination->fetch_assoc()){
                		//while($rs = $qryReport->fetch_assoc()){
                	?>
                    <tr style="font-size: 14px; background-color: 
									<?php
										if($rs['re_group_edit_cancel_group']=='10'){
											echo "#8c8a8a;";
										}else if($rs['re_group_p_t_c_f_con']=='40' && $rs['re_group_p_t_c_f_con']!='10'){
											echo "#ffb3e5;";
										}
									?>
                    ">
                      	<td class="text-center">
                      		<?php echo (int)$rs['re_group_id']; ?>
                      	</td>
                      	<td class="text-center" style="background: 
									<?php
										if($rs['re_group_edit_cancel_group']=='10'){
											echo "#8c8a8a;";
										}elseif($rs['re_group_p_t_c_f_con']=='40'){
											echo "#ffb3e5;";
										}elseif(!empty($rs['re_group_kb'])!=''){
											echo "linear-gradient(to bottom, #ff9999 0%, #ff3300 100%)";
										}
									?>
                      	">
                      		<?php echo $rs['re_group_code']; ?>
                      	</td>
                      	<td class="text-center" style="background-color:
									<?php
										if($rs['re_group_edit_cancel_group']=='10'){
											echo "#8c8a8a;";
										}elseif(['re_group_p_t_c_f_con']=='10'){
											echo "#FFFFF;";
										}elseif($rs['re_group_p_t_c_f_con']=='20'){
											echo "";
										}elseif($rs['re_group_p_t_c_f_con']=='30'){
											echo "#f5ca0a;";
										}elseif($rs['re_group_p_t_c_f_con']=='40'){
											echo "#ffb3e5;";
										}elseif($rs['re_group_p_t_c_f_con']=='50'){
											echo "#2dd03f;";
										}
									?>
                      	">
                      		<?php echo $rs['re_group_nameguide_th']; ?>
                      	</td>
                      	<td class="text-center"><?php echo $rs['re_group_leadertour']; ?></td>
                      	<td class="text-center"><?php echo $rs['re_group_nameagent']; ?></td>
                      	<td class="text-center"><?php echo $rs['re_group_program']; ?></td>
                      	<td class="text-center" style="background-color: 
                      				<?php
										if($rs['re_group_edit_cancel_group']=='10'){
											echo "#8c8a8a;";
										}elseif($rs['re_group_final']=='10'){
											echo "#FF9933;";
										}elseif($rs['re_group_final']=='20'){
											echo "#FFFFFF;";
										}elseif($rs['re_group_final']=='30'){
											echo "#9f79ef;";
										}
									?>
                      	">
                      		<?php echo $rs['re_group_personqty']; ?>
                      	</td>
                      	<td class="text-center"><?php echo $rs['re_group_in_date'].' <BR> '.$rs['re_group_in_time']; ?></td>
                      	<td class="text-center"><?php echo $rs['re_group_out_date'].' <BR> '.$rs['re_group_out_time']; ?></td>
                      	<td class="text-center"><?php echo $rs['re_group_hotel1']; ?></td>
                      	<td class="text-center"><?php echo $rs['re_group_hotel2']; ?></td>
                      	<td class="text-center"><?php echo $rs['re_group_hotel3']; ?></td>
                      	<td class="text-center"><?php echo $rs['re_group_hotel4']; ?></td>
                      	<td class="text-center"><a id="<?php echo $rs['re_group_id']; ?>" class="btn btn-sm btn-primary btn_description">คลิก</a></td>
                  	</tr>
                  	<?php } ?>
              	</tbody>
            </table>
            
        </div>
        <?php  
				$sql = "SELECT COUNT(re_group_id) FROM report_group";
				$rs_result = $conn->query($sql);  
				$row = mysqli_fetch_row($rs_result);  
				$total_records = $row[0];  
				$total_pages = ceil($total_records / $limit);  
				$pagLink = "<nav><ul class='pagination'>";  
				for ($i=1; $i<=$total_pages; $i++) {  
				             $pagLink .= "<li><a href='index.php?page=".$i."'>".$i."</a></li>";  
				};  
				echo $pagLink . "</ul></nav>";  
		?>

				<!--copy rights start here-->
				<div class="copyrights">
					 <p>© 2017 PEeCz. All Rights Reserved | Design by  <a href="www.dongshangtravel.com" target="_blank">Sorakrit Chinphet</a> </p>
				</div>	
				<!--COPY rights end here-->
			</div>
		</div>
	<!--slider menu-->
	    <?php
	    	require '../include/sidemenu_inside.php';
	    ?>
		<div class="clearfix"> </div>
	</div>
	<?php
		require '../include/footer_inside.php';
	?>
</body>
</html>                     
         