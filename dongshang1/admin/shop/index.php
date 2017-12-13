<?php
	session_start();
  error_reporting(error_reporting() & ~E_NOTICE);
  
    require '../../static/db.class.php';
    $conn = connect();

    if(!isset($_SESSION['is_ad'])
    	&& !isset($_SESSION['is_fd'])
    	&& !isset($_SESSION['is_am'])
    	&& !isset($_SESSION['is_boss'])
    	&& !isset($_SESSION['is_admin'])
    ){

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
                <thead class="bgthead">
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
          						<th>รังนก<HR>ผ้าไหม</th>
          						<th>วัดประชุม<HR>วัดหนองเกตุ</th>
          						<th>Option<BR>(ไม่คืน)</th>
          						<th>Option<BR>(10%)</th>
          						<th>Option<BR>(50%)</th>
          						<th>เฉลี่ย</th>
          						<th>เฉลี่ย<BR>ไม่รวมผ้าไหม</th>
          						<th>เฉลี่ย<BR>รวมผ้าไหม</th>
                    </tr>
                </thead>
                <?php
                  // Start Pagination And SELECT .. ORDER BY .. And LIMIT ..... , ..... -------------------
                  $limit = 100;  
                  if (isset($_GET["page"])) { 
                    $page  = $_GET["page"]; 
                  } else {
                    $page=1; 
                  };  

                  $start_from = ($page-1) * $limit;

            		  $selReport = "SELECT 
                                    rg.re_group_id,rg.re_group_code,rg.re_group_nameagent
                                    ,rg.re_group_personqty,rg.re_group_in_date
                                    ,rg.re_group_in_time,rg.re_group_out_date
                                    ,rg.re_group_out_time,rg.re_group_edit_cancel_group
                                    ,rg.re_group_nameguide_th,rg.re_group_program
                                    ,rg.re_group_final,rg.re_group_kb
                                    ,rg.re_group_p_t_c_f_con
                                    ,rs.re_shopping_id,rs.re_shopping_option_money
                                    ,rs.re_shopping_complete,rs.re_shopping_option_percent
                                    ,rs.re_shopping_personqty,rs.re_shopping_personqty_color
                                    ,rs.re_shopping_jewelry,rs.re_shopping_jewelry_color
                                    ,rs.re_shopping_leather,rs.re_shopping_leather_color
                                    ,rs.re_shopping_snake_park,rs.re_shopping_snake_park_color
                                    ,rs.re_shopping_rubber,rs.re_shopping_rubber_color
                                    ,rs.re_shopping_gm,rs.re_shopping_gm_color
                                    ,rs.re_shopping_red88,rs.re_shopping_red88_color
                                    ,rs.re_shopping_silk,rs.re_shopping_silk_color
                                    ,rs.re_shopping_watprachum,rs.re_shopping_watprachum_color
                                    ,rs.re_shopping_watnongket,rs.re_shopping_watnongket_color
                                    ,rs.re_shopping_overall_1,rs.re_shopping_overall_2
                                    ,rs.re_shopping_overall_3,rs.re_shopping_overall_4
                                    
                                FROM report_group rg
                                    LEFT OUTER JOIN
                                        report_shopping rs
                                ON rg.re_group_id = rs.re_group_id
                                WHERE rg.re_group_id ORDER BY rg.re_group_code DESC LIMIT $start_from, $limit";
                  $qryReport = $conn->query($selReport);
            	 ?>
                <tbody>
                	<?php
                    $j=1;
                		while($rs = $qryReport->fetch_assoc()){
                	?>
                    <tr
                        <?php
                          if($rs['re_group_edit_cancel_group']=='10'){
                            
                          }else{

                        ?>
                    >
                      	<td class="text-center" style="font-size: 12px;">
                      		<?php /*echo (int)$rs['re_group_id'].' <HR> ';*/
                            echo ($start_from+$j).'<HR>';
                          ?>
                      		<a id="<?php echo $rs['re_group_id']; ?>" class="btn btn-xs btn-success btn_addShop">Add</a>
                          <a href="edit_shopping/edit_shopping.php?id=<?php echo $rs['re_group_id']; ?>" class="btn btn-xs btn-warning">Edit</a>
                      	</td>
                      	<td style="font-size:12px; background: 
        									<?php
        										if($rs['re_group_kb']!=''){
        											echo "linear-gradient(to bottom, #ff9999 0%, #ff3300 100%);";
        										}
        									?>
                      	">
                      		<?php echo $rs['re_group_code'].' <HR> '.$rs['re_group_nameguide_th']; ?>
                      	</td>
                      	<td style="font-size:12px;">
                      		<?php echo '<span style="color: #F00;">'.''.$rs['re_group_nameagent'].''.'</span>'.' <HR> '.'<span style="color: #2B63C1;">'.''.$rs['re_group_program'].''.'</span>'; ?>
                      		
                      	</td>
                      	<td style="font-size:12px; background-color: 
                      				<?php
                                  if($rs['re_group_final']=='10'){
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
                      	<td style="font-size:12px;"><?php echo $rs['re_group_in_date'].' <HR> '.$rs['re_group_in_time']; ?></td>
                      	<td style="font-size:12px;"><?php echo $rs['re_group_out_date'].' <HR> '.$rs['re_group_out_time']; ?></td>
                      	<td class="text-center" style="font-size:12px; background-color: 
                              <?php
                                  if($rs['re_shopping_personqty']=='' && $rs['re_shopping_personqty_color']=='0'){
                                    echo "#FFFFFF";
                                  }else if($rs['re_shopping_personqty_color']=='10'){
                                    echo "#FFFFFF";
                                  }else if($rs['re_shopping_personqty_color']=='20'){
                                    echo "#9f79ef";
                                  }
                              ?>
                        ">
                          <?php echo $rs['re_shopping_personqty']; ?>
                        </td>
                      	<td class="text-center" style="font-size:12px; background-color: 
                              <?php
                                  if($rs['re_group_p_t_c_f_con']=='40'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_jewelry']=='' && $rs['re_group_p_t_c_f_con']!='40'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_jewelry_color']=='10'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_jewelry_color']=='20'){
                                    echo "#FFFFFF";
                                  }else if($rs['re_shopping_jewelry_color']=='30'){
                                    echo "#9f79ef";
                                  }else if($rs['re_shopping_jewelry_color']=='40'){
                                    echo "#999966";
                                  }
                              ?>
                        ">
                          <?php echo number_format(round($rs['re_shopping_jewelry'])); ?>
                        </td>
                      	<td class="text-center" style="font-size:12px; background-color: 
                              <?php
                                  if($rs['re_group_p_t_c_f_con']=='40'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_leather']=='' && $rs['re_group_p_t_c_f_con']!='40'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_leather_color']=='10'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_leather_color']=='20'){
                                    echo "#FFFFFF";
                                  }else if($rs['re_shopping_leather_color']=='30'){
                                    echo "#9f79ef";
                                  }else if($rs['re_shopping_leather_color']=='40'){
                                    echo "#999966";
                                  }
                              ?>
                        ">
                          <?php echo number_format(round($rs['re_shopping_leather'])); ?>
                        </td>
                      	<td class="text-center" style="font-size:12px; background-color: 
                              <?php
                                  if($rs['re_group_p_t_c_f_con']=='40'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_snake_park']=='' && $rs['re_group_p_t_c_f_con']!='40'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_snake_park_color']=='10'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_snake_park_color']=='20'){
                                    echo "#FFFFFF";
                                  }else if($rs['re_shopping_snake_park_color']=='30'){
                                    echo "#9f79ef";
                                  }else if($rs['re_shopping_snake_park_color']=='40'){
                                    echo "#999966";
                                  }
                              ?>
                        ">
                          <?php echo number_format(round($rs['re_shopping_snake_park'])); ?>
                        </td>
                      	<td class="text-center" style="font-size:12px; background-color: 
                              <?php
                                  if($rs['re_group_p_t_c_f_con']=='40'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_rubber']=='' && $rs['re_group_p_t_c_f_con']!='40'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_rubber_color']=='10'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_rubber_color']=='20'){
                                    echo "#FFFFFF";
                                  }else if($rs['re_shopping_rubber_color']=='30'){
                                    echo "#9f79ef";
                                  }else if($rs['re_shopping_rubber_color']=='40'){
                                    echo "#999966";
                                  }
                              ?>
                        ">
                          <?php echo number_format(round($rs['re_shopping_rubber'])); ?>
                        </td>
                      	<td class="text-center" style="font-size:12px; background-color: 
                              <?php
                                  if($rs['re_group_p_t_c_f_con']=='40'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_gm']=='' && $rs['re_group_p_t_c_f_con']!='40'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_gm_color']=='10'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_gm_color']=='20'){
                                    echo "#FFFFFF";
                                  }else if($rs['re_shopping_gm_color']=='30'){
                                    echo "#9f79ef";
                                  }else if($rs['re_shopping_gm_color']=='40'){
                                    echo "#999966";
                                  }
                              ?>
                        ">
                          <?php echo number_format(round($rs['re_shopping_gm'])); ?>
                        </td>
                      	<td class="text-center" style="font-size:12px; background-color: 
                              <?php
                                  if($rs['re_group_p_t_c_f_con']=='40'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_red88']=='' && $rs['re_shopping_silk']==''){
                                    echo "#FFCC66";
                                  } 
                              ?>
                        ">
                          <div class="panel-heading" style="font-size:12px; background-color:
                                <?php
                                    if(!empty($rs['re_shopping_red88']!='') && !empty($rs['re_shopping_red88_color']=='10')){
                                        echo "#FFCC66";
                                    }else if(!empty($rs['re_shopping_red88']!='') && !empty($rs['re_shopping_red88_color']=='20')){
                                        echo "#FFFFFF";
                                    }else if(!empty($rs['re_shopping_red88']!='') && !empty($rs['re_shopping_red88_color']=='30')){
                                        echo "#9f79ef";
                                    }else if(!empty($rs['re_shopping_red88']!='') && !empty($rs['re_shopping_red88_color']=='40')){
                                        echo "#999966";
                                    }
                                ?>
                          ">
                            <?php echo number_format(round($rs['re_shopping_red88'])); ?>
                          </div>
                          <div class="panel-heading" style="font-size:12px; background-color:
                                <?php
                                    if(!empty($rs['re_shopping_silk']!='') && !empty($rs['re_shopping_silk_color']=='10')){
                                        echo "#FFCC66";
                                    }else if(!empty($rs['re_shopping_silk']!='') && !empty($rs['re_shopping_silk_color']=='20')){
                                        echo "#FFFFFF";
                                    }else if(!empty($rs['re_shopping_silk']!='') && !empty($rs['re_shopping_silk_color']=='30')){
                                        echo "#9f79ef";
                                    }else if(!empty($rs['re_shopping_silk']!='') && !empty($rs['re_shopping_silk_color']=='40')){
                                        echo "#999966";
                                    }
                                ?>
                          ">
                            <?php echo number_format(round($rs['re_shopping_silk'])); ?>
                          </div>
                        </td>
                      	<td class="text-center" style="font-size:12px; background-color: 
                              <?php
                                  if($rs['re_group_p_t_c_f_con']=='40'){
                                    echo "#FFCC66";
                                  }else if($rs['re_shopping_watprachum']=='' && $rs['re_shopping_watnongket']==''){
                                    echo "#FFCC66";
                                  } 
                              ?>
                        ">
                           <div class="panel-heading" style="font-size:12px; background-color:
                                <?php
                                    if(!empty($rs['re_shopping_watprachum']!='') && !empty($rs['re_shopping_watprachum_color']=='10')){
                                        echo "#FFCC66";
                                    }else if(!empty($rs['re_shopping_watprachum']!='') && !empty($rs['re_shopping_watprachum_color']=='20')){
                                        echo "#FFFFFF";
                                    }else if(!empty($rs['re_shopping_watprachum']!='') && !empty($rs['re_shopping_watprachum_color']=='30')){
                                        echo "#9f79ef";
                                    }else if(!empty($rs['re_shopping_watprachum']!='') && !empty($rs['re_shopping_watprachum_color']=='40')){
                                        echo "#999966";
                                    }
                                ?>
                          ">
                            <?php echo number_format(round($rs['re_shopping_watprachum'])); ?>
                          </div>
                           <div class="panel-heading" style="font-size:12px; background-color:
                                <?php
                                    if(!empty($rs['re_shopping_watnongket']!='') && !empty($rs['re_shopping_watnongket_color']=='10')){
                                        echo "#FFCC66";
                                    }else if(!empty($rs['re_shopping_watnongket']!='') && !empty($rs['re_shopping_watnongket_color']=='20')){
                                        echo "#FFFFFF";
                                    }else if(!empty($rs['re_shopping_watnongket']!='') && !empty($rs['re_shopping_watnongket_color']=='30')){
                                        echo "#9f79ef";
                                    }else if(!empty($rs['re_shopping_watnongket']!='') && !empty($rs['re_shopping_watnongket_color']=='40')){
                                        echo "#999966";
                                    }
                                ?>
                          ">
                            <?php echo number_format(round($rs['re_shopping_watnongket'])); ?>
                          </div>
                        </td>
                      	<td class="text-center" style="font-size:12px; background-color: #CCCCCC;
                                <?php
                                    if(!empty($rs['re_shopping_option_percent']=='0') && !empty($rs['re_shopping_complete']=='0')){
                                        echo "#CCCCCC";
                                    }
                                ?>
                        ">
                          <div class="panel-heading box_percent" style="font-size:12px; background-color:
                                <?php
                                    if(!empty($rs['re_shopping_complete']=='0')){
                                        echo "#CCCCCC";
                                    }else if(!empty($rs['re_shopping_option_percent']=='5') && !empty($rs['re_shopping_complete']=='30')){
                                        echo "#66FF99";
                                    }else if(!empty($rs['re_shopping_option_money']!='')){
                                        echo "#66FF99";
                                    }else if($rs['re_shopping_option_money']=='' && !empty($rs['re_shopping_complete']=='30')){
                                        echo "#66FF99";
                                    }
                                ?>
                          ">
                            <?php 
                              if(!empty($rs['re_shopping_option_percent']=='5')){
                                  echo number_format(round($rs['re_shopping_option_money'])); 
                              }else{
                                  echo "-";
                              }
                            ?>
                          </div>
                          <div class="panel-heading box_percent" style="font-size:12px; background-color:
                                <?php
                                    if(!empty($rs['re_shopping_complete']=='0')){
                                        echo "#CCCCCC";
                                    }else if(!empty($rs['re_shopping_option_percent']=='5') && !empty($rs['re_shopping_complete']=='30')){
                                        echo "#66FF99";
                                    }else if(!empty($rs['re_shopping_option_money']!='')){
                                        echo "#66FF99";
                                    }else if($rs['re_shopping_option_money']=='' && !empty($rs['re_shopping_complete']=='30')){
                                        echo "#66FF99";
                                    }
                                ?>
                          ">
                            <?php 
                              if(!empty($rs['re_shopping_option_percent']=='5')){

                                $percent5 = $rs['re_shopping_option_money'];
                                $re_group_personqty = $rs['re_group_personqty'];
                                $calc_percent5 = $percent5/$re_group_personqty;

                                  echo number_format(round($calc_percent5)); 
                              }else{
                                  echo "-";
                              }
                            ?>
                          </div>
                        </td>
                      	<td class="text-center" style="font-size:12px; background-color: #CCCCCC;
                                <?php
                                    if(!empty($rs['re_shopping_option_percent']=='10') && !empty($rs['re_shopping_complete']=='10')){
                                        echo "#CCCCCC";
                                    }
                                ?>
                        ">
                          <div class="panel-heading box_percent" style="font-size:12px; background-color:
                                <?php
                                    if(!empty($rs['re_shopping_complete']=='0')){
                                        echo "#CCCCCC";
                                    }else if(!empty($rs['re_shopping_option_percent']=='10') && !empty($rs['re_shopping_complete']=='30')){
                                        echo "#FF33CC";
                                    }else if(!empty($rs['re_shopping_option_money']!='')){
                                        echo "#FF33CC";
                                    }else if($rs['re_shopping_option_money']=='' && !empty($rs['re_shopping_complete']=='30')){
                                        echo "#FF33CC";
                                    }
                                ?>
                          ">
                            <?php 
                              if(!empty($rs['re_shopping_option_percent']=='10')){
                                  echo number_format(round($rs['re_shopping_option_money'])); 
                              }else{
                                  echo "-";
                              }
                            ?>
                          </div>
                          <div class="panel-heading box_percent" style="font-size:12px; background-color:
                                <?php
                                    if(!empty($rs['re_shopping_complete']=='0')){
                                        echo "#CCCCCC";
                                    }else if(!empty($rs['re_shopping_option_percent']=='10') && !empty($rs['re_shopping_complete']=='30')){
                                        echo "#FF33CC";
                                    }else if(!empty($rs['re_shopping_option_money']!='')){
                                        echo "#FF33CC";
                                    }else if($rs['re_shopping_option_money']=='' && !empty($rs['re_shopping_complete']=='30')){
                                        echo "#FF33CC";
                                    }
                                ?>
                          ">
                            <?php 
                              if(!empty($rs['re_shopping_option_percent']=='10')){

                                  $percent10 = $rs['re_shopping_option_money'];
                                  $re_group_personqty = $rs['re_group_personqty'];
                                  $calc_percent10 = $percent10/$re_group_personqty;

                                    echo number_format(round($calc_percent10)); 
                              }else{
                                  echo "-";
                              }
                            ?>
                          </div>
                        </td>
                      	<td class="text-center" style="font-size:12px; background-color: #CCCCCC;
                                <?php
                                    if(!empty($rs['re_shopping_option_percent']=='50') && !empty($rs['re_shopping_complete']=='10')){
                                        echo "#CCCCCC";
                                    }
                                ?>
                        ">
                          <div class="panel-heading box_percent" style="font-size:12px; background-color:
                                <?php
                                    if(!empty($rs['re_shopping_complete']=='0')){
                                        echo "#CCCCCC";
                                    }else if(!empty($rs['re_shopping_option_percent']=='50') && !empty($rs['re_shopping_complete']=='30')){
                                        echo "#FF99FF";
                                    }else if(!empty($rs['re_shopping_option_money']!='')){
                                        echo "#FF99FF";
                                    }else if($rs['re_shopping_option_money']=='' && !empty($rs['re_shopping_complete']=='30')){
                                        echo "#FF99FF";
                                    }
                                ?>
                          ">
                            <?php 
                              if(!empty($rs['re_shopping_option_percent']=='50')){
                                  echo number_format(round($rs['re_shopping_option_money'])); 
                              }else{
                                  echo "-";
                              }
                            ?> 
                          </div>
                          <div class="panel-heading box_percent" style="font-size:12px; background-color:
                                <?php
                                    if(!empty($rs['re_shopping_complete']=='0')){
                                        echo "#CCCCCC";
                                    }else if(!empty($rs['re_shopping_option_percent']=='50') && !empty($rs['re_shopping_complete']=='30')){
                                        echo "#FF99FF";
                                    }else if(!empty($rs['re_shopping_option_money']!='')){
                                        echo "#FF99FF";
                                    }else if($rs['re_shopping_option_money']=='' && !empty($rs['re_shopping_complete']=='30')){
                                        echo "#FF99FF";
                                    }
                                ?>
                          ">
                            <?php
                              if(!empty($rs['re_shopping_option_percent']=='50')){

                                  $percent50 = $rs['re_shopping_option_money'];
                                  $re_group_personqty = $rs['re_group_personqty'];
                                  $calc_percent50 = $percent50/$re_group_personqty;

                                    echo number_format(round($calc_percent50)); 
                              }else{
                                  echo "-";
                              }
                            ?>
                          </div>
                        </td>
                      	<td class="text-center" style="font-size:12px;">
                          <div class="panel-heading" style="font-size:12px; background-color: #FCF;border-bottom: solid 1px; color: #90C;">
                            <?php 
                              $jewelry = $rs['re_shopping_jewelry'];
                              $leather = $rs['re_shopping_leather'];
                              $snakepark = $rs['re_shopping_snake_park'];
                              $rubber = $rs['re_shopping_rubber'];
                              $red88 = $rs['re_shopping_red88'];
                              $silk = $rs['re_shopping_silk'];
                              $watprachum = $rs['re_shopping_watprachum'];
                              $watnongket = $rs['re_shopping_watnongket'];
                              $personqty = $rs['re_shopping_personqty'];
                              $allperson = $rs['re_group_personqty'];

                              echo number_format(round($rs['re_shopping_overall_1']));
                            ?> 
                          </div>
                          <div class="panel-heading" style="font-size:12px;">
                            <?php 
                              echo number_format(round($rs['re_shopping_overall_2']));
                            ?>
                          </div>
                        </td>
                      	<td class="text-center" style="font-size:12px; color: 
                                    <?php
                                      if($rs['re_shopping_overall_3']<=18000){
                                        echo "#1703af;";
                                      }else{
                                        echo "#FFFFFF;";
                                      }
                                    ?>
                        background-color: 
                                    <?php
                                      if($rs['re_shopping_overall_3']<=18000){
                                        echo "#33CC66;";
                                      }else{
                                        echo "#039;";
                                      }
                                    ?>
                        ">
                            <?php
                              if($jewelry!=0 || $leather!=0 || $snakepark!=0 || $rubber!=0 || $red88!=0 || $personqty!=0){
                                echo number_format(round($rs['re_shopping_overall_3']));
                              }else{
                                echo "0";
                              }
                            ?> 
                        </td>
                      	<td class="text-center" style="font-size:12px; color: #FFFFFF; background-color: 
                                    <?php
                                      if($rs['re_shopping_overall_4']<=18000){
                                        echo "#FF0000;";
                                      }else{
                                        echo "#039;";
                                      }
                                    ?>
                        ">
                            <?php
                              if($jewelry!=0 || $leather!=0 || $snakepark!=0 || $rubber!=0 || $red88!=0 || $silk!=0 || $watprachum!=0 || $watnongket!=0 || $allperson!=0){
                                echo number_format(round($rs['re_shopping_overall_4']));
                              }else{
                                echo "0";
                              }
                            ?> 
                        </td>
                  	</tr> <?php } ?>
                  	<?php $j++; } ?>
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
	    	require '../include/sidemenu_shop.php';
	    ?>
		<div class="clearfix"> </div>
	</div>
	<?php
		require '../include/footer_shop.php';
	?>
</body>
</html>                     
         