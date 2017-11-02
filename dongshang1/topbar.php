    <!-- *** TOPBAR *** -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-info btn-sm" data-animate-hover="shake">
                    <strong>
                        <span class="text-center" style="font-family: srisurywongse_bold; font-size: 18px;">
                            บริษัท ตงซ่าง ทราเวล เซอร์วิส กรุ๊ป(ประเทศไทย) จำกัด
                        </span>
                    </strong>
                </a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">ล็อคอิน</a>
                    </li>
                    <li><a href="main/register.php">สมัครสมาชิก</a>
                    </li>
                    <li><a href="contact.php">ติดต่อเรา</a>
                    </li>
                    <li>
                        <a href="src/lang/aboutchange.php?lang=TH"><img name="TH" id="TH" src="img/dongshang/icon/thailand-icon.png" width="30px" height="30px"></a>
                        <a href="#"><img src="img/dongshang/icon/english-icon.png" width="30px" height="37px"></a>
                        <a href="src/lang/aboutchange.php?lang=CN"><img name="CN" id="CN" src="img/dongshang/icon/china-icon.png" width="30px" height="30px"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Login Admin</h4>
                    </div>
                    <div class="modal-body">
                        <form action="chk/loginchk_admin.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="admin_user" name="admin_user" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="admin_pass" name="admin_pass" placeholder="Password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> ล็อคอิน</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->
