<?php
include_once 'includes/header.inc.php';
?>
								<div class="outter-wp">
									<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.html">Home</a></li>
															<li class="active">Calender</li>
														</ol>
											</div>	
											<!--/sub-heard-part-->	
												<!--/forms-->
													<div class="forms-main">
													
															<div class="graph-form">
																<div id="resl">
																						
																					</div>
																	<div class="col-sm-6">
																			<h2 class="inner-tittle">Personal Information</h2>
																				<!---->
																					
																					
																					<form action="" method="post" enctype="multipart/form-data" id="add_data">
																						<div class="vali-form">
																						<div class="form-group1">
																						  <label class="control-label">Firstname</label>
																						  <input type="text" placeholder="Firstname" name="fname" value="<?php if(isset($_POST['submit'])){ echo $_POST['fname'];} ?>" >
																						<span class="fname">ss</span>
																						</div>
																						<div class="form-group1 form-last">
																						  <label class="control-label">Lastname</label>
																						  <input type="text" placeholder="Lastname" name="lname" value="<?php if(isset($_POST['submit'])){ echo $_POST['lname'];} ?>"  >
																						</div>
																						<div class="clearfix"> </div>
																						</div>
																						
																						<div class="form-group1 group-mail">
																						  <label class="control-label">Email</label>
																						  <input type="text" placeholder="Email" name="email" value="<?php if(isset($_POST['submit'])){ echo $_POST['email'];} ?>"  >
																						</div>
																						 <div class="clearfix"> </div>
																						<div class="form-group1 group-mail">
																						  <label class="control-label">Username</label>
																						  <input type="text" placeholder="Username" name="uname" value="<?php if(isset($_POST['submit'])){ echo $_POST['uname'];} ?>"  >
																						</div>
																						 <div class="clearfix"> </div>
																					<div class="form-group1">
																						  <label class="control-label">Phone Number</label>
																						  <input type="text" placeholder="Phone Number" name="phone" value="<?php if(isset($_POST['submit'])){ echo $_POST['phone'];} ?>" >
																						  <p class=" hint-block check">Numeric values from 0-***</p>
																						</div>
																						<div class="clearfix"> </div>
																						<div class="form-group1">
																						  <label class="control-label">Father's Name</label>
																						  <input type="text" placeholder="Father's Name" name="fathers" value="<?php if(isset($_POST['submit'])){ echo $_POST['fathers'];} ?>"  >
																						</div>
																						
																						<div class="form-group1">
																						  <label class="control-label">Mother's Name</label>
																						  <input type="text" placeholder="Mother's Name" name="mothers" value="<?php if(isset($_POST['submit'])){ echo $_POST['mothers'];} ?>" >
																						</div>
																						<div class="clearfix"> </div>
																						<div class="vali-form vali-form1">
																						
																						<div class="clearfix"></div>
																						</div>
																						 <div class="form-group1">
																						  <label class="control-label">Address</label>
																						  <input type="text" placeholder=" Home Adress" name="address"  value="<?php if(isset($_POST['submit'])){ echo $_POST['address'];} ?>" >
																						  
																						</div>
																						 <div class="clearfix"> </div>
																					   
																						 <div class="form-group">
																						  <label class="control-label ">Religion</label>
																						<input type="text" name="rel" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" value="<?php if(isset($_POST['submit'])){ echo $_POST['rel'];} ?>"  >
																						</div>
																						 
																						<div class="clearfix"></div>
																						
																						<div class="form-group1">
																						  <label class="control-label ">Birthday</label>
																						  <input type="date" class="form-control1 ng-invalid ng-invalid-required" name="birthday" ng-model="model.date" value="<?php if(isset($_POST['submit'])){ echo $_POST['birthday'];} ?>"  >
																						</div>
																						 <div class="clearfix"> </div>
																					  
																						<div class="col-md-12 form-group button-2">
																						  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
																						  <button type="reset" class="btn btn-default">Reset</button>
																						</div>
																					  <div class="clearfix"> </div>
																					
																				 <div class="clearfix"> </div>
																				<!---->
																			 </div>
																				 <div class="col-sm-6">
																				 	<h2 class="inner-tittle">Registration Information</h2>
																				 	<div class="form-group1">
																						  <label class="control-label post-file ">Image</label>
																						  <input type="file" name="img" class="form-control1" size="30" id="img" ng-model="" value="<?php if(isset($_POST['submit'])){ echo $_POST['image'];} ?>"  >
																						 <div class="preview">
																							<img src="" width="120px" height="120px">
																						</div>
																						  <br> <small>Must be Less than 512 Kb and musony contain GIF's JPEG JPG</small>
																						</div>
																						<div class="form-group1">
																						  <label class="control-label ">Date of admission</label>
																						  <input type="date" class="form-control1 ng-invalid ng-invalid-required" name="date" ng-model="model.date" value="<?php if(isset($_POST['submit'])){ echo $_POST['date'];} ?>" >
																						
																						</div>
 	 																					
 	 																					<div class="form-group2">
																						  <label class="control-label ">Class</label>
																						  <select name="class" value="" >
																							<option></option>
																						<?php
																						$query = "SELECT * FROM class";
																						$result = mysql_query($query);
																						while($row = mysql_fetch_array($result)){
																							$id = $row['class_id'];
																							$class_code = $row['class_code'];
																							
																							echo "<option value='$id'>$class_code</option>";
																						}
																						
																						?>
																							
																						</select>
																						</div>
																						 <div class="form-group2">
																							<div class="form-group1">
																						  <label class="control-label ">Blood Group</label>
																						  <input type="text" name="bld_grp" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date"value="<?php if(isset($_POST['sumbmit'])){ echo $_POST['bld_grp'];} ?>"  >
																						</div>
																						</div>
																						 <div class="form-group2 group-mail">
																						  <label class="control-label">Sex</label>
																						<select name="sex" value="<?php if(isset($_POST['submit'])){ echo $_POST['sex'];} ?>" >
																							<option value="1">Male</option>
																							<option value="2">Female</option>
																							
																						</select>
																						</div>
																						
																		</div>
																		<div class="clearfix"></div>
																</div> 
																</form>
														<!--//forms-->								<!--//outer-wp-->
									 <!--footer section start-->
										<div>
											<?php
											
											include 'includes/footer.inc.php';
											?>
										</div>
									<!--footer section end-->/
								</div>
							</div>
				<!--//content-inner-->
		<div>
			
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
<script>
	$('#add_data').on('submit',function(e){
	 				e.preventDefault();
	 				$.ajax({
	 					url: 'ajaxcall/students/ins_std.php',
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