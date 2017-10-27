<?php
    $hotelid = $_GET['hotelid'];
    if($hotelid == 'bangkok'){

    require '../includes/headermain.php';

    require '../includes/topbarmain.php';

    require '../includes/navbarmain.php';
?>


    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="../../index.php">หน้าหลัก</a>
                        </li>
                        <li>บริการ</li>
                        <li>กรุงเทพมหานคร</li>
                        <li>4 ดาว</li>
                    </ul>
                </div>



                <div class="col-md-3">
                    <?php
                        require '../includes/menu_side.php';
                    ?>
                    <div class="banner">
                        <a href="#">
                            <img class="center-block" src="../../img/dongshang/label1.png" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>



                <div class="col-md-9">
                    <div class="box">
                        <h1 class="text-primary">กรุงเทพมหานคร</h1>
                        <i class="fa fa-star" style="color: orange;"></i>
                        <i class="fa fa-star" style="color: orange;"></i>
                        <i class="fa fa-star" style="color: orange;"></i>
                        <i class="fa fa-star" style="color: orange;"></i>
                        <i class="fa fa-star-o"></i>
                        <p>Content</p>
                    </div>
                    <!--
                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>12</strong> of <strong>25</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="row products">

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php?detailid=avana">
                                                <img src="../../img/dongshang/hotel/bangkok/4star/avana/avana1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php?detailid=avana">
                                                <img src="../../img/dongshang/hotel/bangkok/4star/avana/avana3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="../../img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php?detailid=avana">Avana Hotel</a></h3>
                                    <p class="buttons">
                                        <a href="detail.php?detailid=avana" class="btn btn-default">รายละเอียด</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>จอง</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                                <div class="ribbon sale">
                                    <div class="theribbon">HOT !</div>
                                    <div class="ribbon-background"></div>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php?detailid=brighton">
                                                <img src="../../img/dongshang/hotel/bangkok/4star/brighton/brighton1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php?detailid=brighton">
                                                <img src="../../img/dongshang/hotel/bangkok/4star/brighton/brighton2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="../../img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php?detailid=brighton">Brighton Hotel & Residence</a></h3>
                                    <p class="buttons">
                                        <a href="detail.php?detailid=brighton" class="btn btn-default">รายละเอียด</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>จอง</a>
                                    </p>
                                </div>
                                <!-- /.text -->

                                <div class="ribbon sale">
                                    <div class="theribbon">HOT !</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.php?detailid=kuun">
                                                <img src="../../img/dongshang/hotel/bangkok/4star/kunn/kunn1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.php?detailid=kuun">
                                                <img src="../../img/dongshang/hotel/bangkok/4star/kunn/kunn2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="invisible">
                                    <img src="../../img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.php?detailid=kuun">Kunn Hotel</a></h3>
                                    <p class="buttons">
                                        <a href="detail.php?detailid=kuun" class="btn btn-default">รายละเอียด</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>จอง</a>
                                    </p>

                                </div>
                                <!-- /.text -->

                                <div class="ribbon sale">
                                    <div class="theribbon">HOT !</div>
                                    <div class="ribbon-background"></div>
                                </div>
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="../../img/product3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="../../img/product3_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="../../img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.html">Black Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="detail.html" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="../../img/product2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="../../img/product2_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="../../img/product2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.html">White Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="detail.html" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="detail.html">
                                                <img src="../../img/product1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="detail.html">
                                                <img src="../../img/product1_2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="../../img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="detail.html">Fur coat</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="detail.html" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                            </div>
                            <!-- /.product -->
                        </div>
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.products -->

                    <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


<?php
    require '../includes/footermain.php';

    } 
?>

