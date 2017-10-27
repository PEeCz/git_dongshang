<?php

    require 'includes/headermain.php';
    
    require 'includes/topbarmain.php';

    require 'includes/navbarmain.php';
?>

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>New account / Sign in</li>
                    </ul>

                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>New account</h1>

                        <p class="lead">Not our registered customer yet?</p>
                        <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <form action="chk/register_chk.php" method="post">
                            <div class="form-group">
                                <label for="fullname">Firstname - Surname</label>
                                <input type="text" class="form-control" id="name" name="fullname">
                            </div>
                            <div class="form-group">
                                <label for="user">Username</label>
                                <input type="text" class="form-control" id="user" name="user">
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" class="form-control" id="pass" name="pass">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea type="text" class="form-control" id="address" name="address" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tel">Mobile Number</label>
                                <input type="text" class="form-control" id="tel" name="tel">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>

                        <p class="lead">Already our customer?</p>
                        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                            mi vitae est. Mauris placerat eleifend leo.</p>

                        <hr>

                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <label for="user">Username</label>
                                <input type="text" class="form-control" id="user" name="user">
                            </div>
                            <div class="form-group">
                                <label for="pass">Password</label>
                                <input type="password" class="form-control" id="pass" name="pass">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


<?php
    require 'includes/footermain.php';
