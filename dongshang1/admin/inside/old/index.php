<?php
    session_start();
    error_reporting(error_reporting() & ~E_NOTICE);

    require 'static/db.class.php';
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

    // Start Pagination And SELECT .. ORDER BY .. And LIMIT ..... , ..... -------------------
    $limit = 20;  
    if (isset($_GET["page"])) { 
        $page  = $_GET["page"]; 
    } else {
        $page=1; 
    };  

    $start_from = ($page-1) * $limit;

    $sqlPagination = "SELECT no_key,no_group,name_thai,leader_giude
                            ,agent_tour,group_type,tourist,datein,dateout
                            ,no_flight_in,no_flight_out,hotel_1,hotel_2,hotel_3,hotel_4
                        FROM report_shopping 
                        WHERE no_group
                        BETWEEN 'DS 170101 A' AND 'DS 171030 A'
                        ORDER BY no_group ASC 
                        LIMIT $start_from, $limit
                     ";  
    $qryPagination  = $conn->query($sqlPagination);


    require 'include/header.php';
?>

<body>  
    <div class="page-container">    
       <div class="left-content">
           <div class="mother-grid-inner">
                <!--header start here-->
                    <?php
                        require 'include/navbar.php';
                    ?>
                <!--heder end here-->

                

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
                        <!--<th><input type="text" class="form-control" placeholder="ค้นหาจาก ID ของแถว" disabled></th>-->
                        <th><input type="text" class="form-control" placeholder="ค้นหาจาก กรุ๊ปโค้ด" disabled></th>
                        <th><input type="text" class="form-control" placeholder="ค้นหาจาก ชื่อไกด์" disabled></th>
                        <th><input type="text" class="form-control" placeholder="ค้นหาจาก ชื่อหัวหน้าทัวร์" disabled></th>
                    </tr>
                </thead>
            </table>
            <table class="table table-bordered" id="data_op">
                <thead class="bgthead">
                    <tr class="text-center" style="font-size: 12px;">
                        <th>No.</th>
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
                    <tr>
                    <?php /*
                        <td class="text-center">
                            <div>
                                <?php echo (int)$rs['re_group_id']; ?>
                            </div>
                        </td>*/
                        echo '<td class="text-center"><div>'. ($start_from+$j) .'</div></td>';
                    ?>
                        <td class="text-center"><?php echo $rs['no_group']; ?></td>
                        <td class="text-center"><?php echo $rs['name_thai']; ?></td>
                        <td class="text-center"><?php echo $rs['leader_giude']; ?></td>
                        <td class="text-center"><?php echo $rs['agent_tour']; ?></td>
                        <td class="text-center"><?php echo $rs['group_type']; ?></td>
                        <td class="text-center"><?php echo $rs['tourist']; ?></td>
                        <td class="text-center"><?php echo $rs['datein'].' <BR> '.$rs['no_flight_in']; ?></td>
                        <td class="text-center"><?php echo $rs['dateout'].' <BR> '.$rs['no_flight_out']; ?></td>
                        <td class="text-center"><?php echo $rs['hotel_1']; ?></td>
                        <td class="text-center"><?php echo $rs['hotel_2']; ?></td>
                        <td class="text-center"><?php echo $rs['hotel_4']; ?></td>
                        <td class="text-center"><?php echo $rs['hotel_3']; ?></td>
                        <td class="text-center"><a id="<?php echo $rs['no_group']; ?>" class="btn btn-sm btn-primary btn_description">คลิก</a></td>
                    </tr>
                    <?php
                        $j++;
                        } 
                    ?>
                </tbody>
            </table>
            
        </div>
        <?php  
                $sql = "SELECT COUNT(no_group) FROM report_shopping WHERE no_group
                        BETWEEN 'DS 170101 A' AND 'DS 171030 A'";
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
            require 'include/sidemenu_inside.php';
        ?>
        <div class="clearfix"> </div>
    </div>
    <?php
        require 'include/footer_inside.php';
    ?>
</body>
</html>                     
         