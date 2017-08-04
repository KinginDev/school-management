<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
include 'functions/functions.php';
	?>
	<div class="outter-wp">
	<div class="graph">
		<div class="tables">
		<table class="table table-bordered">
		<ul class="nav nav-tabs">										
  		<li class="active"><a data-toggle="tab" href="#home"><strong><span><i class="fa fa-user-md" class="pull-right" style="padding-right: 10px;"></i></span>Manage Account</strong></a></li>
		</ul>
		<div class="tab-content">
	<!-- tab 1-->
  <div id="home" class="tab-pane fade in active">
  	<form method="post" enctype="multipart/form-data">
  		<center>
  		<div class="img	"><img class="img-thumbnail" src="../teacher_images/<?php echo $row['images']; ?>" width="100px" height="120px"></div>
  		<div class="form-group">
  			<label> Choose file</label>
  		<input type="file" name="update_img" id="file" class="inputfile" class="btn btn-file" />
  		</div>
  		</center>
  
  
 
    
  
  </ul>
</div>
  		<div class="form-group col-sm-6">
  			<label for="Firstname">Firstname</label>
  			<input type="text" class="form-control1" disabled="" value="<?php echo $row['firstname']; ?>" id="lastname"/>
  		</div>
  		<div class="form-group col-sm-6">
  			<label for="lastname">Lastname</label>
  			<input type="text" class="form-control1" disabled="" id='lastname' value="<?php echo $row['lastname']; ?>" />
  		</div>
  		<div class="clearfix"></div><!--end of form line-->
  			<div class="clearfix"></div><!--end of form line-->
  		<div class="form-group col-sm-6">
  			<label for="email">Email</label>
  			<input type="text" class="form-control1" disabled="" id="email"   value="<?php echo $row['email']; ?>" />
  		</div>
  		<div class="form-group col-sm-6">
  			<label for="lastname">Phone No.</label>
  			<input type="text" class="form-control1" disabled="" id='lastname'  value="<?php echo $row['phone']; ?>" />
  		</div>
  		<div class="clearfix"></div><!--end of form line-->
  			<div class="clearfix"></div><!--end of form line-->
  		<div class="form-group col-sm-6">
  			<label for="address">Address</label>
  			<input type="text" class="form-control1" disabled="" id="address"  value="<?php echo $row['address']; ?>" />
  		</div>
  		<div class="form-group col-sm-6">
  			<label for="lastname">Gender</label>
  			<input type="text" class="form-control1" disabled="" id='sex'  value="<?php if(isset($row['sex'])){
  				if($row['sex'] == 1){;
  					echo 'Male';
  				}
  				else {
					  echo 'Female';
				  }
  			} ?>" />
  				</div>
  					<div class="clearfix"></div><!--end of form line-->
  						<div class="clearfix"></div><!--end of form line-->
  				<div class="form-group col-sm-4">
  			<label for="birthday">Birthday</label>
  			<input type="text" class="form-control1" disabled="" id="birthday"  value="<?php echo $row['birthday']; ?>" />
  		</div>
  	
  		<div class="form-group col-sm-4">
  			<label for="class">Class</label>
  			<input type="text" class="form-control1" title="<?php echo $row1['class_name']; ?>" disabled="" id='class'  value="<?php if(isset($row['class_id'])){
  				echo $teacher_id = $row['teacher_id'];
  				$sql = "SELECT class_code,class_name FROM class WHERE teacher_id='$teacher_id' ";
				$result = mysql_query($sql) or die(mysql_error());
			
				$row1 = mysql_fetch_array($result);
				 echo $row1['class_code'];
  			} ?>"  />
  			</div>
  			<div class="form-group col-sm-4">
  			<label for="class">Blood Group</label>
  			<input type="text" class="form-control1" disabled="" id='class' value="<?php echo $row['blood_grp']; ?>"/>
  				  		</div>
  				 <div class="clearfix"></div><!--end of form line-->
  				 	
  			  <div class="form-group col-sm-4">
  			<label for="doa">Date of Employment</label>
  			<input type="text" class="form-control1" disabled="" id="doa" value="<?php echo $row['date_of_employment']; ?>"/>
  			
  		</div>
  				
  				
  		<div class="form-group col-sm-4">
  			<label for="rel">Religion</label>
  			<input type="text" class="form-control1" disabled="" id='rel' value="<?php echo $row['religion']; ?>"/>
  			</div>
  			
  				 
  				 	<div class="form-group1 col-sm-4">
  				 		
  				 	</div>
  				 	<input type="submit" class="btn btn-default pull-right" value="Update"/>

  				 	<div class="clearfix"></div><!--end of form line-->
  				 	<div class="clearfix"></div><!--end of form line-->
  				 	
  	</form>
  	</div></div>
  	<ul class="nav nav-tabs">										
  		<li class="active"><a data-toggle="tab" href="#home"><strong><span><i class="fa fa-lock" class="pull-right" style="padding-right: 10px;"></i></span>Change Password</strong></a></li>
		</ul>
		<div class="tab-content">
			<div class="form">
				<form method="post">
					<div class="col-md-2"></div>
					<div class="form-group1 col-md-8">
						<label>Existing Password</label>
						<input type="password" name="" class="form-control1"/>
					</div>
					<div class="col-md-2"></div>
					<div class="clearfix"></div>
					<div class="col-md-2"></div>
					<div class="form-group col-md-8">
						<label>New Password</label>
						<input type="password" name="" class="form-control1"/>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-2"></div>
					<div class="form-group col-md-8">
						<label>Confirm new Password</label>
						<input type="password" name=""/ class="form-control1">
					</div>
					<div class="clearfix"></div>
					<div class="col-md-2"></div>
					<div class="clearfix"></div>
					<input type="submit" class="btn btn-default pull-right" value="Change Password"/>
				</form>
			</div>
		</div>
  	</table>
  	</div>
  </div></div>
  	<div>
			
			
			<?php 
			include 'sidenav.php';
			 ?>
		</div>
