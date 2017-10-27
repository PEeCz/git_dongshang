<?php
session_start();
require 'script/connectboard.php';
$show_topic_view = '';
$rs_board = '';
if (isset($_POST['btSaveRep'])) {//มีการคลิกที่ปุ่ม แสดงความคิดเห็น
    if (empty($_SESSION['is_iduser']) || empty($_SESSION['is_idadmin'])) {//ถ้าไม่ใช่สมาชิก
        header('Location:index.php'); //ให้กลับไปหน้าหลัก
        exit(); //หยุดทำงานถึงบรรทัดตรงนี้
    }
 
    $id = $_GET['id'];
    if(isset($_SESSION['is_iduser'])){
        $mem_id = $_SESSION['is_iduser'];
        if (isset($_POST['board_detail'])) {
            $boardDetail = $_POST['board_detail'];
            mysqli_query($conn_board, "INSERT INTO tbl_board(board_parent_id,mem_id,board_detail,board_time_add)
                                    VALUES('$id','$mem_id','$boardDetail',SYSDATE()");

            mysqli_query($conn_board, "UPDATE tbl_board INNER JOIN tbl_category ON tbl_board.cg_id=tbl_category.cg_id
                                    SET tbl_board.board_replies=tbl_board.board_replies+1,tbl_category.cg_replie_totals=tbl_category.cg_replie_totals+1,tbl_board.board_time_update=SYSDATE()
                                    WHERE tbl_board.board_id=". $id); //Update จำนวนความคิดเห็นในกระทู้นั้นๆ
        }
    }else{
        $mem_id = $_SESSION['is_idadmin'];
        if (isset($_POST['board_detail'])) {   
            $boardDetail = $_POST['board_detail'];
            mysqli_query($conn_board, "INSERT INTO tbl_board(board_parent_id,mem_id,board_detail,board_time_add)
                                    VALUES('$id','$mem_id','$boardDetail',SYSDATE()");

            mysqli_query($conn_board, "UPDATE tbl_board INNER JOIN tbl_category ON tbl_board.cg_id=tbl_category.cg_id
                                    SET tbl_board.board_replies=tbl_board.board_replies+1,tbl_category.cg_replie_totals=tbl_category.cg_replie_totals+1,tbl_board.board_time_update=SYSDATE()
                                    WHERE tbl_board.board_id=". $id); //Update จำนวนความคิดเห็นในกระทู้นั้นๆ
        }
    }
    header("Location:viewboard.php?id=' . $id'");
    exit();
}
if (isset($_GET['id'])) {//พบว่ามีส่งเมธอดชื่อ id เข้ามา
    $rs_topic_view = mysqli_query($conn_board, 'SELECT tbl_board.board_id,tbl_board.board_topic,tbl_board.board_detail,tbl_board.board_time_add,tbl_category.cg_id,tbl_category.cg_name
                                              FROM tbl_board 
                                              INNER JOIN tbl_category ON tbl_board.cg_id=tbl_category.cg_id 
                                              WHERE tbl_board.board_id=' . $_GET['id']);
    $show_topic_view = mysqli_fetch_array($rs_topic_view, MYSQLI_ASSOC);
    if (empty($show_topic_view['board_id'])) {//ฟิลด์ board_id เป็นค่าว่างแสดงว่าไม่มีกระทู้นี้อยู่ในฐานข้อมูล
        header('Location:index.php'); //ให้กลับไปหน้าหลัก
    } else {
        //mysql_query('UPDATE tbl_board SET board_views=board_views+1 WHERE board_id='.$_GET['id']); //Update จำนวนผู้เข้าชมของกระทู้นั้น   
    }
} else {//ไม่พบค่า id ที่ส่งมา
    header('Location:index.php'); //กลับไปหน้าหลัก
}
?>
<html>
    <head>
        <?php require('head.php'); ?>
        <link rel="stylesheet" type="text/css" href="../src/css/bootstrapValidator.min.css"/>
        <script type="text/javascript" src="../src/js/bootstrapValidator.min.js"></script>
        <title><?php echo $show_topic_view['board_topic']; ?></title>
    </head>
    <body>
        <?php require('menu.php'); ?>
        <div class="container">
            <?php require('header.php'); ?>
            <div class="row ws-content">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="showboard.php?id=<?php echo $show_topic_view['cg_id']; ?>"><?php echo $show_topic_view['cg_name']; ?></a></li>
                    <li class="active"><?php echo $show_topic_view['board_topic']; ?></li>
                </ol>
                <div>
                    <h1><?php echo $show_topic_view['board_topic']; ?></h1>
                    <?php
                    $rs_board = mysqli_query($conn_board, 'SELECT b.board_id,b.board_topic,b.board_detail,b.board_time_add,c.cg_id,c.cg_name,m.mem_name,m.mem_image
                                                          FROM tbl_board As b 
                                                          LEFT JOIN tbl_category As c ON b.cg_id=c.cg_id 
                                                          LEFT JOIN tbl_member As m ON b.mem_id=m.mem_id 
                                                          WHERE b.board_id=' . $_GET['id'] . ' OR b.board_parent_id=' . $_GET['id'] . ' ORDER BY b.board_time_add ASC');
                    while ($show_board = mysqli_fetch_array($rs_board, MYSQLI_ASSOC)) {
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div style="display:table-cell;padding-right:5px;" class="hidden-xs">
                                    <?php
                                    $userIcon = 'usericon.jpg';
                                    if (!empty($show_board['mem_image']))
                                        $userIcon = $show_board['mem_image'];
                                    ?>
                                    <img src="images/member/<?php echo $userIcon; ?>" width="50" height="50">
                                </div>
                                <div style="display:table-cell;vertical-align:top;width:100%;"> 
                                    <div style="text-align:right;color:#C8C8C8;border-bottom:1px dashed #C8C8C8;padding-bottom:4px;">
                                        By : <span style="color:#060"><?php echo $show_board['mem_name'] ?></span>
                                        Date : <?php echo $show_board['board_time_add']; ?> </div>
                                    <div style="padding-top:4px;">
                                        <?php echo $show_board['board_detail']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
 
                    <?php if (isset($_SESSION['is_nameuser']) || isset($_SESSION['is_nameadmin'])) { ?>
                        <div class="col-md-7  col-sm-7 col-md-offset-2 col-sm-offset-2">
                            <h4>แสดงความคิดเห็น</h4>    
                            <form  method="post" enctype="multipart/form-data" id="boardReplieForm" name="boardReplieForm" action="">
 
                                <div class="form-group">
                                    <label for="Category Description">รายละเอียด</label>
                                    <textarea class="form-control" id="board_detail"  name="board_detail" placeholder="ใส่ความคิดเห็นตรงนี้" rows="10"></textarea>
                                </div>
                                <?php
                                    if(isset($_SESSION['is_nameuser'])){
                                ?>
                                <div class="form-group">
                                    แสดงความคิดเห็นโดย : <span style="color:#963"><?php echo $_SESSION['is_nameuser']; ?></span>
                                </div>
                                <?php } ?>
                                <?php
                                    if(isset($_SESSION['is_nameadmin'])){
                                ?>
                                <div class="form-group">
                                    แสดงความคิดเห็นโดย : <span style="color:#963"><?php echo $_SESSION['is_nameadmin']; ?></span>
                                </div>
                                <?php } ?>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="btSaveRep" value="แสดงความคิดเห็น" >
                                </div>
                            </form>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php require('footer.php'); ?>
        </div>
        <script>
            $(document).ready(function() {
                $('#boardReplieForm').bootstrapValidator({//ตรวจสอบการกรอกแสดงความคิดเห็น
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        board_detail: {
                            validators: {
                                notEmpty: {
                                    message: 'กรุณากรอกข้อความด้วย'
                                }
                            }
                        }
                    }
                });
            });
        </script> 
    </body>
</html>