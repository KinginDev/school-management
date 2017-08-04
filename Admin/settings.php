<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
?>
<?php
	include 'functions/functions.php';
	
	?>
	<div>
		<div class="outter-wp">
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#home">System Settings</a></li>
<li><a data-toggle="tab" href="#add"><span><i class="fa fa-plus-circle" style="padding-right: 4px;"></i></span>Setup School Calendar</a></li>
</ul>
<div class="tab-content">
	<!-- tab 1-->
 <div id="home" class="tab-pane fade in active">

																					<form>
																						<div class="vali-form">
																						<div class="col-md-6 form-group1">
																						  <label class="control-label">System Name</label>
																						  <input type="text" placeholder="Firstname" required="">
																						</div>
																						<div class="col-md-6 form-group1 form-last">
																						  <label class="control-label">Address</label>
																						  <input type="text" placeholder="Lastname" required="">
																						</div>
																						<div class="clearfix"> </div>
																						</div>
																						
																						<div class="col-md-12 form-group1 group-mail">
																						  <label class="control-label">Phone</label>
																						  <input type="text" placeholder="Email" required="">
																						</div>
																						 <div class="clearfix"> </div>
																						<div class="col-md-12 form-group1 group-mail">
																						  <label class="control-label">Url</label>
																						  <input type="text" placeholder="Current Website Url" required="">
																						</div>
																						 <div class="clearfix"> </div>
																						  	<div class="col-md-12 form-group1 group-mail">
																						  <label class="control-label">School Email</label>
																						  <input type="text" placeholder="Email" required="">
																						</div>
																						 <div class="clearfix"> </div>
																						  	<div class="col-md-12 form-group group-mail">
																						  <label class="control-label">Upload Logo</label>
																						  <input type="file" placeholder="Email" required="">
																						</div>
																						 <div class="clearfix"> </div>
																						 
																						<div class="col-md-12 form-group button-2">
																						  <button type="submit" class="btn btn-primary">Submit</button>
																						  <button type="reset" class="btn btn-default">Reset</button>
																						</div>
																					  <div class="clearfix"> </div>
																				</form>
														</div> 
			<?php
			if(isset($_POST['session_insert'])){
				$errors = array();
				$year = $_POST["year"];
				$session = $_POST['session'];
				$term = $_POST['term'];
				
				if(empty($year)){
					$errors[] = "You have to input a year";
				}
				elseif(empty($session)){
					$errors[] = " You have to input a session";
				}
				elseif(empty($term)){
					$errors[] = "You Have to input a term ";
				}
				if(empty($errors)){
					//insert into year first
					if(session_exist($session,$term) == false){
				if(isset($year,$session,$term)){
					$result = mysql_query("INSERT INTO year (year) VALUES ('$year')") or die(mysql_error());
					$year = $_POST["year"];
					//insert into session
					$result2 = mysql_query("INSERT INTO session (session,year) VALUES ('$session',$year)") or die(mysql_error());
					$session =  $_POST['session'];
					$result3 = mysql_query("INSERT INTO term (term,session,year) VALUES ('$term','$session','$year')") or die(mysql_error());
				}
				
					
				}else{
					$errors[] = "Session Already Exists";
				}
				}
				
			}
			
			?>											<!-- tab 1-->
  <div id="add" class="tab-pane fade in active">
    <div class="forms-inner">
    	<?php
					if(isset($errors)){
						if(empty($errors)){
							?>
							<center>
							<div class="alert alert-info">
								<?php
								echo "Operation Successful";
								?>
							</div>	
							</center>
							<?php
						}else{
							foreach($errors as $error){
								?>
								
									<?php
									echo'
									<center>
									<div class="alert alert-danger">
									'.$error.'
									</div>
									</center>
									';
									?>
								</div>
								<?php
							}
						}
					}
					
					?>									
    	<form method="post">
    		
		<div class="form-group col-sm-6">
			<label id="year">Current Year</label>
			<select class="form-control1" name="year">
				<option></option>
				<option value="1">2014</option>
				<option value="2">2015</option>
				<option value="3">2016</option>
				<option value="4">2017</option>
				<option value="5">2018</option>
				<option value="6">2019</option>
			</select>
		</div>
		<div class="from-group col-sm-6">
			<label id="session"> School Session</label>
			<select class="form-control1" name="session">
				<center>
					<option></option>
				<option value="1">2014/2015</option>
				<option value="2">2015/2016</option>
				<option value="3">2016/2017</option>
				<option value="4">2017/2018</option>
				<option value="5">2018/2019</option>
				<option value="6">2019/2020</option>
				<option value="7">2021/2022</option>
				</center>
			</select>
		</div>
				<div class="clearfix"></div>	
				<div class="form-group col-sm-6">
					<label id="term">Term</label>
						<select class="form-control1" name="term">
							<option></option>
							<option value="1">1st Term</option>
							<option value="2">2nd Term</option>
							<option value="3">3rd Term</option>
						</select>
					
				</div>
		</div>
														</div>
<div class="clearfix"></div>	
<input type="submit" class="btn btn-primary" name="session_insert" value="Submit" />
												   
												</div>
												</form>
											<!--//outer-wp-->
									 <!--footer section start-->
		</div>
			
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
