<?php
    
    $detailid = $_GET['detailid'];
    if($detailid == 'avana'){

    require 'header.php';

    require 'topbar.php';

    require 'navbar.php';
?>

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                     <ul class="breadcrumb">
                        <li><a href="index.php">หน้าหลัก</a>
                        </li>
                        <li>บริการ</li>
                        <li>กรุงเทพมหานคร</li>
                        <li>4 ดาว</li>
                        <li>Avana Hotel</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <div id='cssmenu'>
                        <ul>
                           <li><a href='service.php'><span>บริการ (Service Page)</span></a></li>
                           <li class='has-sub active'><a href='#'><span>กรุงเทพมหานคร</span></a>
                              <ul>
                                 <li><a href='#'>
                                    <span> 4 ดาว 
                                        (<i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>)
                                    </span></a></li>
                                 <li><a href='#'>
                                    <span> 5 ดาว 
                                        (<i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>)
                                    </span></a></li>
                              </ul>
                           </li>
                           <li class='has-sub'><a href='#'><span>พัทยา</span></a>
                              <ul>
                                 <li><a href='#'>
                                    <span> 4 ดาว 
                                        (<i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>)
                                    </span></a></li>
                                 <li><a href='#'>
                                    <span> 5 ดาว 
                                        (<i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>)
                                    </span></a></li>
                              </ul>
                           </li>
                           <li class='has-sub'><a href='#'><span>ระยอง</span></a>
                              <ul>
                                 <li><a href='#'>
                                    <span> 4 ดาว 
                                        (<i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>)
                                    </span></a></li>
                                 <li><a href='#'>
                                    <span> 5 ดาว 
                                        (<i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>
                                        <i class="fa fa-star" style="color: orange;"></i>)
                                    </span></a></li>
                              </ul>
                           </li>
                        </ul>
                    </div>

                    <div class="banner">
                        <a href="#">
                            <img class="center-block" src="img/dongshang/label1.png" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="img/dongshang/hotel/bangkok/4star/avana/detailfullimg-avana1.jpg" alt="" class="img-responsive">
                            </div>

                            <div class="ribbon sale">
                                <div class="theribbon">HOT !</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center">Avana Hotel</h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to"><span class="text-danger">คลิกเพื่อเลื่อนดูรายละเอียดด้านล่าง</span></a>
                                </p>

                                <p class="text-center buttons">
                                    <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> จอง</a> 
                                    <a href="basket.html" class="btn btn-info"><i class="fa fa-heart"></i> เพิ่มเข้ารายการ</a>
                                </p>


                            </div>

                            <div class="row" id="thumbs">
                                <div class="col-xs-4">
                                    <a href="img/dongshang/hotel/bangkok/4star/avana/detailfullimg-avana1.jpg" class="thumb">
                                        <img src="img/dongshang/hotel/bangkok/4star/avana/avana1.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="img/dongshang/hotel/bangkok/4star/avana/detailfullimg-avana3.jpg" class="thumb">
                                        <img src="img/dongshang/hotel/bangkok/4star/avana/avana3.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="img/dongshang/hotel/bangkok/4star/avana/detailfullimg-avana2.jpg" class="thumb">
                                        <img src="img/dongshang/hotel/bangkok/4star/avana/avana2.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="box" id="details">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#detail" aria-controls="detail" role="tab" data-toggle="tab">รายละเอียด</a>
                            </li>
                            <li role="presentation">
                                <a href="#room" aria-controls="room" role="tab" data-toggle="tab">ห้องพัก</a>
                            </li>
                            <li role="presentation">
                                <a href="#facilities" aria-controls="facilities" role="tab" data-toggle="tab">สิ่งอำนวยความสะดวก</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="detail">
                                <div class="box">
                                    <blockquote>
                                        <p class="intro">โรงแรม : <span class="text-info">Avana Hotel</span></p>
                                        <p class="intro">เมือง : <span class="text-info">กรุงเทพมหานคร</span></p>
                                        <p class="intro">ประเทศ : <span class="text-info">ไทยแลนด์</span></p>
                                        <p class="intro">ระดับดาว : <span class="text-info">4</span></p>
                                        <p class="intro">ข้อมูล : <span class="text-info">
                                            โรงแรมระดับ 4 ดาวแห่งนี้ให้บริการห้องพัก 633 ห้อง พร้อมความสะดวกสบายและความผ่อนคลายเหมือนอยู่กับบ้าน แต่ละห้อง ประกอบไปด้วย เครื่องปรับอากาศ, เสื้อคลุมอาบน้ำ, โต๊ะเขียนหนังสือ, เครื่องเป่าผม, ตู้เซฟในห้องพัก, โทรทัศน์, โทรทัศน์จอแอลซีดี/จอพลาสม่า, อ่างอาบน้ำ นอกจากนี้ โรงแรมแห่งนี้ใน กรุงเทพ ยังมี รูมเซอร์วิส 24 ชั่วโมง, ร้านค้า, ลิฟท์, คอฟฟี่ช็อป, บริการซักรีด/ซักแห้ง, ห้องประชุม พร้อมด้วยกิจกรรมเพื่อการพักผ่อนหย่อนใจและนันทนาการ เช่น บริการนวด, สระว่ายน้ำ (สำหรับเด็ก), ห้องฟิตเนส, ซาวน่า, ห้องอบไอน้ำ ที่ชั้นล่าง โรงแรมแห่งนี้ให้ความสำคัญกับความรู้สึกของลูกค้าเป็นหลัก คุณจึงมั่นใจได้ถึงความสะดวกสบายและความผ่อนคลาย</span>
                                        </p>
                                        <p class="intro">เช็คอิน : <span class="text-info">14:00:00 น.</span></p>
                                        <p class="intro">เช็คเอาต์ : <span class="text-info">12:00:00 น.</span></p>
                                        <p class="intro">แผนกต้อนรับ : <span class="text-info">24 ชั่วโมง</span></p>
                                        <p class="intro">สัตว์เลี้ยง : <span class="text-danger">ไม่อนุญาติ</span></p>
                                        <p class="intro">รายละเอียดที่พัก : <span class="text-info">4</span></p>
                                    </blockquote>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="room">
                                <div class="box">
                                    <blockquote>
                                        <p class="intro"> Economy :</p>
                                        <p class="intro"> Trendy :</p>
                                        <p class="intro"> Deluxe :</p>
                                        <p class="intro"> Modern :</p>
                                        <p class="intro"> Extra Bed :</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="facilities">
                                <div class="box">
                                    <blockquote>
                                        <p class="intro"> xzcvrgey5e</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings">
                                <div class="box">
                                    <blockquote>
                                        <p class="intro"> fyrugsx</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


<?php
    require 'footer.php';

    } ?>