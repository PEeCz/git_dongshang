
    <div id="top">
        <div class="container">
            <div class="col-md-3 offer" data-animate="fadeInDown">
                <a href="../index.php">
                    <img src="../img/logo/dongshang.png" alt="" width="70px;" height="50px;">
                    <span style="color:#3da892; font-size: 15px;">ตงซ่าง</span><span style="color:#3399CC; font-size: 15px;">เว็บบอร์ด</span>
                </a>
            </div>
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <ul class="menu">
                    <?php
                        if(!isset($_SESSION['is_admintype']) && !isset($_SESSION['is_usertype'])){
                    ?>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#login-modal">ล็อคอิน</a>
                    </li>
                    <li>
                        <a href="register.php" data-toggle="modal" data-target="#register-modal">สมัครสมาชิก</a>
                    </li>
                    <?php } 
                        if(isset($_SESSION['is_admintype'])){
                        $admin_id = $_SESSION['is_adminid'];
                    ?>
                    <li><a href="index.php">หน้าหลัก</a></li>
                    <li class="dropdown">
                        <button class="dropdown-toggle btn btn-xs btn-primary" style="color: red;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        สวัสดีคุณ : <?php echo $_SESSION['is_nameadmin']; ?>
                        <span class="caret"></span>
                        </button>
                      <ul class="dropdown-menu bg-primary" aria-labelledby="dropdownMenu1">
                        <li><a href="#">แก้ไขข้อมูลส่วนตัว</a></li>
                        <li><a href="change_pass.php?id=<?php echo str_pad($admin_id, 7, '0', STR_PAD_LEFT); ?>">เปลี่ยนรหัสผ่าน</a></li>
                        <li><a href="#">#</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="bg-danger"><a href="function/logout.php"><span class="text-warning">ออกจากระบบ</span></a></li>
                      </ul>
                    </li>
                    <?php }else{
                        if(isset($_SESSION['is_usertype'])){
                        $user_id = $_SESSION['is_userid'];
                    ?>
                    <li><a href="index.php">หน้าหลัก</a></li>
                    <li class="dropdown">
                        <button class="dropdown-toggle btn btn-xs btn-primary" style="color: red;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        สวัสดีคุณ : <?php echo $_SESSION['is_nameuser']; ?>
                        <span class="caret"></span>
                        </button>
                      <ul class="dropdown-menu bg-primary" aria-labelledby="dropdownMenu1">
                        <li><a href="#">แก้ไขข้อมูลส่วนตัว</a></li>
                        <li><a href="change_pass.php?id=<?php echo str_pad($user_id, 7, '0', STR_PAD_LEFT); ?>">เปลี่ยนรหัสผ่าน</a></li>
                        <li><a href="#">#</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="bg-danger"><a href="function/logout.php"><span class="text-warning">ออกจากระบบ</span></a></li>
                      </ul>
                    </li>
                    <?php }
                        }
                    ?>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">เข้าสู่ระบบ</h4>
                    </div>
                    <div class="modal-body">
                        <form action="function/login_chk.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="user_login" placeholder="ชื่อผู้ใช้">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pass_login" placeholder="รหัสผ่าน">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> เข้าสู่ระบบ</button>
                            </p>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="Register" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Register">สมัครสมาชิก</h4>
                    </div>
                    <div class="modal-body">
                        <form data-toggle="validator" role="form" id="myForm" method="post" action="function/regisboard_chk.php">
                            <div class="form-group">
                              <div class="form-group">
                                <label for="inputName" class="control-label">Username</label>
                                <input type="text" class="form-control" id="username" name="mem_user" placeholder="Username" required>
                                <BR>
                                <input type="button" class="btn btn-md btn-warning" name="login" id="login" value="ตรวจสอบชื่อผู้ใช้" onclick="chkUser();" />
                              </div>
                              <div class="form-group">
                                <label for="inputPassword" class="control-label">Password</label>
                                <input type="password" data-minlength="6" class="form-control" name="mem_pass" id="inputPassword" placeholder="Password" required>
                                <div class="help-block" style="font-size: 10px; color: red;">*** Minimum of 6 characters ***</div>
                              </div>
                            </div>

                            <div class="form-group">
                                <label for="inputName" class="control-label">Name</label>
                                <input type="text" class="form-control" id="inputName" name="mem_name" placeholder="Name" required>
                            </div>

                            <div class="form-group">
                              <label for="inputEmail" class="control-label">Email</label>
                              <input type="email" class="form-control" id="inputEmail" name="mem_email" placeholder="Email Address" data-error="@ , that email address is invalid" required>
                              <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group">
                                <label for="inputName" class="control-label">Address</label>
                                <textarea type="text" class="form-control" name="mem_address" id="inputName" rows="5" placeholder="544/31" required></textarea>
                            </div>

                            <div class="form-group">
                              <input type="submit" class="btn btn-success btn-block" value="ลงทะเบียน">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>