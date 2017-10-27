<?php
session_start();
require 'script/connectboard.php';
$show_topic_view = '';
$rs_board = '';

$boardDetail = $_POST['board_detail'];

if (isset($_POST['board_detail'])) {//มีการคลิกที่ปุ่ม แสดงความคิดเห็น
    if (!isset($_SESSION['is_iduser']) || !isset($_SESSION['is_idadmin'])) {//ถ้าไม่ใช่สมาชิก
        header('Location:index.php'); //ให้กลับไปหน้าหลัก
        exit(); //หยุดทำงานถึงบรรทัดตรงนี้
    }
 
    
    if(isset($_SESSION['is_iduser'])){
        $user_id = $_SESSION['is_iduser'];
        if (isset($boardDetail)) {
            mysqli_query($conn_board, "INSERT INTO tbl_board(board_parent_id,mem_id,board_detail,board_time_add)
                                    VALUES('$id','$user_id','$boardDetail',NOW()");

            mysqli_query($conn_board, "UPDATE tbl_board INNER JOIN tbl_category ON tbl_board.cg_id=tbl_category.cg_id
                                    SET tbl_board.board_replies=tbl_board.board_replies+1,tbl_category.cg_replie_totals=tbl_category.cg_replie_totals+1,tbl_board.board_time_update=NOW()
                                    WHERE tbl_board.board_id=". $id); //Update จำนวนความคิดเห็นในกระทู้นั้นๆ
        }
    }else{
        $admin_id = $_SESSION['is_idadin'];
        if (isset($boardDetail)) {  
            mysqli_query($conn_board, "INSERT INTO tbl_board(board_parent_id,mem_id,board_detail,board_time_add)
                                    VALUES('$id','$admin_id','$boardDetail',NOW()");

            mysqli_query($conn_board, "UPDATE tbl_board INNER JOIN tbl_category ON tbl_board.cg_id=tbl_category.cg_id
                                    SET tbl_board.board_replies=tbl_board.board_replies+1,tbl_category.cg_replie_totals=tbl_category.cg_replie_totals+1,tbl_board.board_time_update=NOW()
                                    WHERE tbl_board.board_id=". $id); //Update จำนวนความคิดเห็นในกระทู้นั้นๆ
        }
    }
    header("Location:viewboard.php?id=". $id);
    exit();
}
