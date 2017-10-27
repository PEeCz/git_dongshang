<?php
    require 'header.php';

    require 'topbar.php';

    require 'navbar.php';
?>

    <div id="all">

        <div id="content">

        	<div class="box text-center" data-animate="fadeInUp">
                <div class="container">
                    <div class="col-md-12">
                        <h2 class="text-uppercase text-primary superspacebold"><?php echo $abouttitle1; ?></h2>

                        <p class="lead text-left superspace">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $aboutp1; ?>
                        </p>
                        <p class="lead text-left superspace" style="font-family: superspace_light;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $aboutp2; ?>  
                        </p>
                        <p class="lead text-left superspace" style="font-family: superspace_light;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $aboutp3; ?> 
                        </p>
                        <p class="lead text-left superspace" style="font-family: superspace_light;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $aboutp4; ?> 
                        </p>
                    </div>
                </div>
            </div>

            <div class="box text-center" data-animate="fadeInUp">
                <div class="container">
                    <div class="col-md-12">
                        <h2 class="text-uppercase text-primary superspacebold"><?php echo $abouttitle2; ?></h2>

                        <p class="lead text-left superspace">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo $aboutp5; ?>
                        </p>
                        <p class="lead text-center superspace">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <i class="fa fa-quote-left text-danger"></i><strong class="text-info"> <?php echo $aboutp6; ?> </strong><i class="fa fa-quote-right text-danger"></i>
                        </p>
                    </div>
                </div>
            </div>

            <div class="box text-center" data-animate="fadeInUp">
                <div class="container">
                    <div class="col-md-12">
                    	<h2 class="text-uppercase text-primary superspacebold"><?php echo $abouttitle3; ?></h2>
                    	<div class="col-sm-6">

	                        <p class="lead text-left text-danger superspace">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                        <i class="fa fa-check-square-o" aria-hidden="true"></i> <?php echo $aboutp7; ?>
	                        </p>
	                        <p class="lead text-left text-danger superspace">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                        <i class="fa fa-check-square-o" aria-hidden="true"></i> <?php echo $aboutp8; ?>
	                        </p>
	                        <p class="lead text-left text-danger superspace">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                        <i class="fa fa-check-square-o" aria-hidden="true"></i> <?php echo $aboutp9; ?>
	                        </p>
	                        <p class="lead text-left text-danger superspace">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                        <i class="fa fa-check-square-o" aria-hidden="true"></i> <?php echo $aboutp10; ?>
	                        </p>

                    	</div>
	                    <div class="col-sm-6">
	                    	<img class="img-responsive" src="img/about/oakbuilding1.png">
	                    </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /#content -->

<?php
    require 'footer.php';