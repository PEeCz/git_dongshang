    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                    <img src="img/logo/dongshang.png" alt="" width="70px;" height="50px;">
                    <!--<img src="img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">DongShang - go to homepage</span>-->
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="index.php" data-hover="dropdown">หน้าหลัก</a>
                    </li>
                    <li>
                        <a href="about.php" data-hover="dropdown">เกี่ยวกับเรา</a>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200"> บริการ <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>โรงแรม</h5>
                                            <ul>
                                                <li><a href="main/hotel/hotel.php?hotelid=bangkok">กรุงเทพฯ</a>
                                                </li>
                                                <li><a href="main/hotel/hotel.php?hotelid=pattaya">พัทยา</a>
                                                </li>
                                                <li><a href="main/hotel/hotel.php?hotelid=rayong">ระยอง</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>รถเช่า</h5>
                                            <ul>
                                                <li><a href="main/rentcar/rentcar.php?rentid=bangkok">กรุงเทพฯ</a>
                                                </li>
                                                <li><a href="main/rentcar/rentcar.php?rentid=bangkok">พัทยา</a>
                                                </li>
                                                <li><a href="main/rentcar/rentcar.php?rentid=bangkok">ระยอง</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>สนามกอล์ฟ</h5>
                                            <ul>
                                                <li><a href="main/golf/golf.php?golfid=bangkok">กรุงเทพฯ / สมุทรปราการ</a>
                                                </li>
                                                <li><a href="main/golf/golf.php?golfid=pathumthani">ปทุมธานี</a>
                                                </li>
                                                <li><a href="main/golf/golf.php?golfid=nakornpathom">นครปฐม</a>
                                                </li>
                                                <li><a href="main/golf/golf.php?golfid=nakornnayok">นครนายก / ฉะเชิงเทรา</a>
                                                </li>
                                                <li><a href="main/golf/golf.php?golfid=chonburi">ชลบุรี / พัทยา</a>
                                                </li>
                                                <li><a href="main/golf/golf.php?golfid=petchburi">หัวหิน / เพชรบุรี / ประจวบคีรีขันธ์</a>
                                                </li>
                                            </ul>
                                            <h5>บริการ 4</h5>
                                            <ul>
                                                <li><a href="#">#</a>
                                                </li>
                                                <li><a href="#">#</a>
                                                </li>
                                                <li><a href="#">#</a>
                                                </li>
                                                <li><a href="#">#</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="banner">
                                                <a href="#">
                                                    <img class="center-block" src="img/logo/dongshang.png" width="200" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="banner">
                                                <a href="#">
                                                    <img class="center-block" src="img/dongshang/label1.png" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="board/index.php" data-hover="dropdown">เว็บบอร์ด </a>
                    </li>
                    <li><a href="contact.php" data-hover="dropdown">ติดต่อเรา</a>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <!--<div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
                </div>-->
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->