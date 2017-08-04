<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
?>
<?php
	include 'functions/functions.php';
	
	
	if(isset($_POST['to'],$_POST['subject'],$_POST['body'])){
		$errors = array();
		
		if(empty($_POST['to'])){
			$errors[] = 'You must enter at least one name';
			
		}elseif(preg_match('#^[a-z,]+$#i',$_POST['to']) === 0){
			$errors[] = 'The list of names you gave does not look valid';
		}else{
			$user_names = explode(',',$_POST['to']);
			foreach($user_names as &$name){
				$name = trim($name);
			}
			
			$user_ids = fetch_user_ids($user_names);
			
			if(count($user_ids) !== count($user_names)){
				$errors[] = 'The following user was not found:' . implode(',',array_diff($user_names,array_keys($user_ids)));
			}
		}
		if(empty($_POST['subject'])){
			$errors[] = 'The subject must not be empty';
			
		}
		if(empty($_POST['body'])){
			$errors[] = 'The body must not be empty';
			
		}
		if(empty($errors)){
			
		}
		
	}
	
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
																<label><?php
																countTasks();
																?>
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
													 <div class="inbox-mail">
									<div class="col-md-4 compose">
										<form action="#" method="GET">
												<div class="input-group input-group-in">
													<input type="text" name="search" class="form-control2 input-search" placeholder="Search...">
													<span class="input-group-btn">
														<button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
													</span>
												</div><!-- Input Group -->
											</form>
											<h2>Compose</h2>
														<nav class="nav-sidebar">
														<ul class="nav tabs">
														  <li class="active"><a href="inbox.php" ><i class="fa fa-inbox"></i>Inbox <span>9</span><div class="clearfix"></div></a></li>
														  <li class=""><a href="#tab2" data-toggle="tab"><i class="fa fa-share-square-o"></i> Sent</a></li>
														  <li class=""><a href="#tab3" data-toggle="tab"><i class="fa fa-star-o"></i>Important</a></li> 
														  <li class=""><a href="#tab4" data-toggle="tab"><i class="fa fa-pencil-square-o"></i>Draft <span>6</span><div class="clearfix"></div></a></li>  
														  <li class=""><a href="#tab5" data-toggle="tab"><i class="fa fa-trash-o"></i>Delete</a></li>                              
														</ul>
													</nav>
																<div class="content-box">
																	<ul>
																	<li><span>Folder</span></li>
																	<li><a href="#"><i class="fa fa-folder-o"></i>Tasks</a></li>
																	<li><a href="#"><i class="fa fa-folder-o"></i>Jobs</a></li>
																	<li><a href="#"><i class="fa fa-folder-o"></i>Client</a></li>
																	</ul>
																</div>
															
														</div>
														<!-- tab content -->
														<div class="col-md-8 tab-content tab-content-in">
														  <div class="inbox-right">
																	
															<div class="mailbox-content">
																		<!--Compose New Message -->
																<div class="compose-mail-box">
																		<div class="compose-bg">
																			Compose New Message 
																		</div>
																		<div class="panel-body">
																		<div class="alert alert-info">
																					<?php
															if(isset($errors)){
																	if(empty($errors)){
																		echo "<div>Your message has been sent</div>";
																	}else{
																		foreach($errors as $error){
																			echo '<div>'.$error.'</div>';
																		}
																	}
																}    
															?>															
																				</div>
																				<form class="com-mail" action="" method="POST">
																					<input type="text" class="form-control1 control3" name="to" placeholder="To :">
																					<input type="text" class="form-control1 control3" name="subject" placeholder="Subject :">
																					
																					<textarea rows="6" class="form-control1 control2"  name="body" placeholder="Message :"></textarea>

																					<input type="submit" value="Send Message" name="submit"> 
																				</form>
																		</div>
																	</div>
																<!--//Compose New Message -->
														   </div>
														</div>
													</div>

													<div class="clearfix"> </div>
										   </div>
											
										</div>

		<div>
			
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
