<?php
session_start();
require 'script/connectboard.php';
?>
<html>
    <head>
        <?php require 'head.php'; ?>
        <title>เว็บบอร์ด</title>
    </head>
    <body>
        <?php require 'menu.php'; ?>
        <div class="container">
            <?php require 'header.php'; ?>
            <div class="row ws-content">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">ชื่อกระทู้</th>
                            <th class="text-center">ผู้โพสต์</th>
                            <th class="hidden-xs text-center">ตอบ</th>
                            <th class="hidden-xs text-center">อ่าน</th>
                            <th class="text-center">ตอบล่าสุด</th>
                        </tr>
                    </thead>
                    <tbody>
                                <tr>
                                    <td></td>
                                    <td style="width:50%"></td>
                                    <td style="width:200px;"></td>
                                    <td style="width:100px;" class="hidden-xs"></td>
                                    <td style="width:100px;"></td>
                                    <td style="width:200px;" class="hidden-xs"></td>
                                </tr>
                    </tbody>
                </table>
            </div>
            <?php require 'footer.php'; ?>
        </div>    

    <script type="text/javascript">
      function chkUser(){
        var user = $("#username").val();
        if(user == ""){
              showNotification({
                   message:"กรอก username ผู้ใช้ที่ต้องการตรวจสอบ",
                   type:"error", 
                   autoClose:true, 
                   duration:3 
              }); 
              return;       
        }else{
            var url = "function/datachk_user.php?username=" + user;
            $.get(url, function(data){
                   if(data==2){
                          showNotification({
                               message: "username นี้ ใช้งานได้",
                               type: "success",
                               autoClose: false,
                               duration: 5
                          });                 
                    }else{
                          showNotification({
                               message:"username นี้มีผู้ใช้ไปก่อนแล้ว",
                               type:"error", 
                               autoClose:true, 
                               duration:5 
                          });               
                    }
               });    
         }
      }
    </script>  
    </body>
</html>