					<div class="header-main">
						<div class="header-left">
								<div class="logo-name">
										 <a href="../../index.php"> <h1>ตงซ่าง ทราเวล</h1> 
										<!--<img id="logo" src="" alt="Logo"/>--> 
									  </a> 								
								</div>
								<div class="clearfix"> </div>
							 </div>
							 <div class="header-right">
								<div class="profile_details_left"><!--notifications of menu start -->
									<ul class="nofitications-dropdown">
										<li class="dropdown head-dpdn">
											 <a href="../../src/lang/aboutchange.php?lang=TH"><img name="TH" id="TH" src="../../img/dongshang/icon/thailand-icon.png" width="30px" height="30px"></a>
											 <a href="#"><img src="../../img/dongshang/icon/english-icon.png" width="30px" height="37px"></a>
											 <a href="../../src/lang/aboutchange.php?lang=CN"><img name="CN" id="CN" src="../../img/dongshang/icon/china-icon.png" width="30px" height="30px"></a>
										</li>
									</ul>
									<div class="clearfix"> </div>
								</div>
								<!--notification menu end -->

								
								<div class="profile_details">		
									<ul>
										<li class="dropdown profile_details_drop">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<div class="profile_img">	
													<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
													<div class="user-name">
														<p><?php echo $_SESSION['is_fullnameuser']; ?></p>
														<span>
															<?php 
																if(isset($_SESSION['is_ot'])){
																	echo $_SESSION['is_position'];
																}else if(isset($_SESSION['is_of'])){
																	echo $_SESSION['is_position'];
																}else if(isset($_SESSION['is_ad'])){
																	echo $_SESSION['is_position'];
																}else if(isset($_SESSION['is_fd'])){
																	echo $_SESSION['is_position'];
																}else if(isset($_SESSION['is_am'])){
																	echo $_SESSION['is_position'];
																}else if(isset($_SESSION['is_boss'])){
																	echo $_SESSION['is_position'];
																}else if(isset($_SESSION['is_admin'])){
																	echo $_SESSION['is_position'];
																}
															?>
															
														</span>
													</div>
													<i class="fa fa-angle-down lnr"></i>
													<i class="fa fa-angle-up lnr"></i>
													<div class="clearfix"></div>	
												</div>	
											</a>
											<ul class="dropdown-menu drp-mnu">
												<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
												<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
												<li> <a href="../../chk/logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>				
							</div>
					     <div class="clearfix"> </div>	
					</div>