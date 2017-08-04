<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
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
										
														<div class="clearfix"> </div>	
													
												<!--/forms-->
													<div class="forms-main">
														
															<div class="graph-form">
																	<div class="validation-form">
																				<!---->
																		<div id="resl"></div>		
																					
<form action="" method="post" enctype="multipart/form-data" id="add_data">
<div class="col-md-6">
	<h2 class="inner-tittle">Personal Information</h2>
<div class=" form-group1">
																						  <label class="control-label">Firstname</label>
																						  <input type="text" name="fname" placeholder="Firstname" id="f_name">
																						  <span id="fne" style="color: red; padding:10px;"></span>
																						</div>
																						<div class="form-group1 form-last">
																						  <label class="control-label">Lastname</label>
																						  <input type="text" name="lname" placeholder="Lastname" value="" id="l_name" >
																						  <span id="lne" style="color: red; padding:10px;"></span>

																						</div>
																						<div class="clearfix"> </div>
																						
																						
																						<div class="form-group1 group-mail">
																						  <label class="control-label">Email</label>
																						  <input type="text" name="email" placeholder="Email" value="" id="email" >
																						</div>
																						 
																						
																						<div class="form-group1 form-last">
																						  <label class="control-label">Phone Number</label>
																						  <input type="text" name="phone" placeholder="Phone Number" value=""  id="phone">
																						</div>
																						
																						<div class="clearfix"> </div>
																						
																						<div class=" form-group form-last">
																						<label class="control-label">Image</label>
																						  <input type="file"  class="form-control1" placeholder="Images" value=" " id="image" name="img">
																						 <div id="image_preview">
																					<img src="" class="" width="100px" height="100px">
																						</div>
																						</div>
																					
																						<div class="clearfix"></div>	
																				<div class="form-group form-last">
																						  <label class="control-label ">Date of Birth</label>
																						  <input type="date" name="dob" value="" id="dob" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" >
																						</div>
																						
																						
																					  <div class="form-group1 form-last">
																						  <label class="control-label">Address</label>
																						  <input type="text" name="address" placeholder="Address" value=""  id="address">
																						</div> 
																						<div class="clearfix"></div>	
																					<div class="form-group">
																						  <label class="control-label">Gender</label>
																						  <select name="sex" class="form-control2" id="sex">
																						 
																						  	<option value="male">Male</option>
																						  	<option value="female">Female</option>
																						  	
																						  </select>
																						</div>
																						
																						
																					<div class="clearfix"></div>	
																					
																						</div>
																						<div class="col-md-6">
																							<h2 class="inner-tittle">Registration Information</h2>
																							<div class="form-group">
																						  <label class="control-label">Degree</label>
																						  <select  class="form-control2" >
																						  	<option value="male">HND</option>
																						  	<option value="female">OND</option>
																						  	<option value="female">Bachelor's Degree</option>
																						  	<option value="female">PHD</option></select>
																						</div>
																						<div class=" form-group form-last">
																						  <label class="control-label ">Date of Employment</label>
																						  <input type="date" id="doe" name="employment" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" value="">
																						</div> 
																						<div class=" form-group form-last">
																						<label class="control-label">Upload Cv</label>
																						  <input type="file"  class="form-control1" placeholder="Images" value=" " i >
																						 <div id="image_preview">
																					<img src="" class="" width="100px" height="100px">
																						</div>
																						</div>
																					
																						<div class="form-group form-last">
																							
																							
																							<label class="control-label">Blood Group</label>
																						  <input type="text" name="bldgrp" class="form-control1"  placeholder="Blood Group" id="blood_grp" value="">
																						 
																						  	
																						</div>
																						<div class="form-group form-last ">
																							<label class="control-label">Religion</label>
																						  <input type="text" id="rel" name="religion" class="form-control1" placeholder="Religion" value=" ">
																						 
																						  	
																						</div>
																						</div>
																						
																						<div class="col-md-12 form-group button-2">
																							<center>
																								 <button type="submit" name="submit" class="btn btn-primary">Submit</button>
																						  <button type="reset" class="btn btn-default">Reset</button>
																						</div>
																							</center>
																						 
																					  <div class="clearfix"> </div>
																					</form>
																				
																				<!---->
																			 
																			 </div>
 <div class="clearfix"> </div>
																		</div>
																</div> 
														<!--//forms-->
									</div><!--outter-wp-->
												
									
			
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
<script>
	$('#add_data').on('submit',function(e){
	 			var f_name =	$('#f_name').val();
	 			var l_name =	$('#l_name').val();
	 			var email =		$('#email').val();
	 			var sex =		$('#sex').val();
	 			var phone =		$('#phone').val();
	 			var address =		$('#address').val();
	 			var blood_grp =		$('#blood_grp').val();
	 			var rel =		$('#rel').val();
	 			var dob =		$('#dob').val();
	 			var doe =		$('#doe').val();
	 			var image = $('#image').val();
	 			
	 			
	 			data = {'f_name':f_name, 'l_name':l_name, 'email':email,'sex':sex,'phone':phone,'address':address,'blood_grp':blood_grp,'rel':rel,'dob':dob,'doe':doe, 'image':image};
	 			console.log(data);
	 				e.preventDefault();
	 				$.ajax({
	 					url: 'ajaxcall/teacher/ins_teacher.php',
	 					method: 'post',
	 					data:new FormData(this),
	 					contentType:false,
	 					processData:false,
	 					success:function(data){
	 						$('#resl').html(data);
	 						}
	 						
	 				})
	 			});
	 		
	</script>