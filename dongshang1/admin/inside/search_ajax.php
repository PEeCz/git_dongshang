<?php
	session_start();
  	error_reporting(error_reporting() & ~E_NOTICE);

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

    require '../include/header.php';

    $strSearch = $_POST["mySearch"];
    $strPage = $_POST["myPage"];


    $sqlPagination = "SELECT * FROM report_group WHERE re_group_code LIKE '%".$strSearch."%' ";
    $objQuery = $conn->query($sqlPagination);
    $Num_Rows = mysqli_num_rows($objQuery);

    $Per_Page = 8;   // Per Page

    $Page = $strPage;
    if(!$strPage)
    {
        $Page=1;
    }

    $Prev_Page = $Page-1;
    $Next_Page = $Page+1;

    $Page_Start = (($Per_Page*$Page)-$Per_Page);
    if($Num_Rows<=$Per_Page)
    {
        $Num_Pages =1;
    }
    else if(($Num_Rows % $Per_Page)==0)
    {
        $Num_Pages =($Num_Rows/$Per_Page) ;
    }
    else
    {
        $Num_Pages =($Num_Rows/$Per_Page)+1;
        $Num_Pages = (int)$Num_Pages;
    }

    $sqlPagination .= "ORDER BY re_group_code ASC LIMIT $Page_Start , $Per_Page";  
    $qryPagination  = $conn->query($sqlPagination);
?>
<body>
    <div class="panel panel-primary filterable table-responsive">
            <div class="panel-heading">
                <h3 class="panel-title">รายงานข้อมูล Group</h3>
                <div class="pull-right">
                    <a href="search_advance.php" class="btn btn-warning btn-xs"><span class="glyphicon glyphicon-filter"></span> ค้นหาแบบละเอียด</a>
                </div>
            </div>
            <table class="table table-bordered" id="op_data">
                <thead class="bgthead">
                    <tr class="text-center" style="font-size: 12px;">
                        <th style="width: 70px;">No.</th>
                        <th style="width: 150px;">No. Group</th>
                        <th style="width: 100px;">ชื่อ<BR>ไกด์</th>
                        <th style="width: 100px;">ชื่อ<BR>หัวหน้าทัวร์</th>
                        <th style="width: 100px;">ชื่อ<BR>เอเยนต์</th>
                        <th style="width: 100px;">ชื่อ<BR>รายการ</th>
                        <th style="width: 40px;">จำนวน<BR>(คน)</th>
                        <th style="width: 200px;">รับ</th>
                        <th style="width: 200px;">ส่ง</th>
                        <th style="width: 50px;">โรงแรม 1</th>
                        <th style="width: 50px;">โรงแรม 2</th>
                        <th style="width: 50px;">โรงแรม 3</th>
                        <th style="width: 50px;">โรงแรม 4</th>
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
                        $j=1;
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
                            <div>
                                <?php //echo (int)$rs['re_group_id']; 
                                    echo ($Page_Start+$j);
                                ?>
                            </div>
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
                            <div>
                                <?php echo $rs['re_group_code']; ?>
                            </div>
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
                            <div>
                                <?php echo $rs['re_group_nameguide_th']; ?>
                            </div>
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
                    <?php $j++; } ?>
                </tbody>
            </table>
    </div>
        Total <?php echo $Num_Rows; ?> Record : <?php echo $Num_Pages; ?> Page :
            <?php
                if($Prev_Page) 
                {
                    echo " <a href=\"JavaScript:doCallAjax(document.getElementById('txtSearch').value,'$Prev_Page')\"><< Back</a> ";
                }

                for($i=1; $i<=$Num_Pages; $i++){
                    if($i != $Page)
                    {
                        echo "[ <a href=\"JavaScript:doCallAjax(document.getElementById('txtSearch').value,'$i')\">$i</a> ]";
                    }
                    else
                    {
                        echo "<b> $i </b>";
                    }
                }
                if($Page!=$Num_Pages)
                {
                    echo " <a href=\"JavaScript:doCallAjax(document.getElementById('txtSearch').value,'$Next_Page')\">Next >></a> ";
                }
            mysqli_close($conn);
            require '../include/footer_inside.php';

        ?>
        <BR><BR><BR>
    </body>
</html>