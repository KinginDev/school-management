<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
?>
<?php
	include 'functions/functions.php';
	
	?>
							<!--//outer-wp-->
									<div class="outter-wp">
									<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.html">Home</a></li>
															<li class="active">Calender</li>
														</ol>
											</div>	
											<!--/sub-heard-part-->	
											<div class="custom-widgets">
												   <div class="row-one">
														<div class="col-md-3 widget">
															<div class="stats-left ">
																<h5>Today</h5>
																<h4> Users</h4>
															</div>
															<div class="stats-right">
																<label>90</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-mdl">
															<div class="stats-left">
																<h5>Today</h5>
																<h4>Visitors</h4>
															</div>
															<div class="stats-right">
																<label> 85</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-thrd">
															<div class="stats-left">
																<h5>Today</h5>
																<h4>Tasks</h4>
															</div>
															<div class="stats-right">
																<label>
																</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="col-md-3 widget states-last">
															<div class="stats-left">
																<h5>Today</h5>
																<h4>Alerts</h4>
															</div>
															<div class="stats-right">
																<label>30</label>
															</div>
															<div class="clearfix"> </div>	
														</div>
														<div class="clearfix"> </div>	
													</div>
												</div>
												<!--//custom-widgets-->
												<div class="outer-wp">
													<div class="cal-main">
													<div class="calender graph-form">
														<h2 class="inner-tittle">Calender</h2>
														<div class="cal1">
															
														</div>
													</div>

											<div>
												<a href="index.php?view=view"><button class="btn btn-primary">View Scheduled</button></a>
											</div>
										
										<!--//calender-->
									</div>

										<!--/calender-->
										<div>	
											<?php
											if (isset($_GET['view'])){
									include '../tasks/tasks.php';
											}
									?>	
									</div>
										<div id="adiv"></div>									
									</div>
									<div>
										
									
								<!--//outer-wp-->
									 <!--footer section start-->
										<div>
											<?php
											
											include 'includes/footer.inc.php';
											?>
										</div>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
		<div>
			
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
