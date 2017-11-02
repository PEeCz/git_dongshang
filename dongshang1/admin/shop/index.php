<?php
	session_start();
    require '../../static/db.class.php';
    $conn = connect();

    if(!isset($_SESSION['is_ad'])
    	&& !isset($_SESSION['is_fd'])
    	&& !isset($_SESSION['is_am'])
    	&& !isset($_SESSION['is_boss'])
    	&& !isset($_SESSION['is_admin'])){

    	header("Location: ../inside/index.php");

    }

    $sql = "SELECT * FROM user 
		    		WHERE user_status='300' 
		    		AND user_status='350'
		    		AND user_status='400'
		    		AND user_status='450'
		    		AND user_status='500'
    		";
    $qry = $conn->query($sql);
    $rs = $qry->fetch_assoc();

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
                <thead style="background-color: #333333;color: #FFFFFF;">
                    <tr style="font-size: 12px; table-layout: auto;">
						<th>No.</th>
						<th>No. Group <HR> ชื่อไกด์</th>
						<th>ชื่อเอเยนต์ <HR> รายการทัวร์</th>
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
                      	<td class="text-center">
                      		<?php echo (int)$rs['re_group_id'].' <HR> '; ?>
                      		<a id="<?php echo $rs['re_group_id']; ?>" class="btn btn-xs btn-success btn_editShop">Edit</a>
                      	</td>
                      	<td style="background: 
									<?php
										if($rs['re_group_kb']!=''){
											echo "linear-gradient(to bottom, #ff9999 0%, #ff3300 100%);";
										}
									?>
                      	">
                      		<?php echo $rs['re_group_code'].' <HR> '.$rs['re_group_nameguide_th']; ?>
                      	</td>
                      	<td>
                      		<?php echo '<span style="color: #F00;">'.''.$rs['re_group_nameagent'].''.'</span>'.' <HR> '.'<span style="color: #2B63C1;">'.''.$rs['re_group_program'].''.'</span>'; ?>
                      		
                      	</td>
                      	<td style="background-color: 
                      				<?php
										if($rs['re_group_final']=='10'){
											echo "#FFFFFF;";
										}elseif($rs['re_group_final']=='20'){
											echo "#FF9933;";
										}elseif($rs['re_group_final']=='30'){
											echo "#F0F;";
										}
									?>
                      	">
                      		<?php echo $rs['re_group_personqty']; ?>
                      			
                      	</td>
                      	<td><?php echo $rs['re_group_in_date'].' <HR> '.$rs['re_group_in_time']; ?></td>
                      	<td><?php echo $rs['re_group_out_date'].' <HR> '.$rs['re_group_out_time']; ?></td>
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
	    <?php
	    	require '../include/sidemenu_shop.php';
	    ?>
		<div class="clearfix"> </div>
	</div>
	<?php
		require '../include/footer_shop.php';
	?>
</body>
</html>                     
         