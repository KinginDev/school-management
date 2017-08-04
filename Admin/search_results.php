<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
include 'functions/functions.php';
	?>
	<div class="outter-wp">
		<?php
	if(isset($_GET['id']) && !empty($_GET['id'])){
		$student_id = $_GET['id'];
		$query = "SELECT * FROM students WHERE student_id='$student_id'";
		$result = mysql_query($query) or die(mysql_error());
		
		while($row  = mysql_fetch_array($result)){
		
	
	
	
	?>
	 
		<div class="graph">
		<div class="tables">
		<table class="table table-bordered">
		<ul class="nav nav-tabs">										
  		<li class="active"><a data-toggle="tab" href="#home"><strong><?php echo $row['firstname'].''; ?>'s Information</strong></a></li>
		</ul>
		<div class="tab-content">
	<!-- tab 1-->
  <div id="home" class="tab-pane fade in active">
  	<form>
  		<center>
  		<div class="img	"><img class="img-thumbnail" src="../student_images/<?php echo $row['images']; ?>" width="100px" height="120px"></div>
  		
  		</center>
  		<div class="dropdown">
  	<button class="btn btn-default btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#"><span><i class="fa fa-pencil-square-o"></i></span>Message</a></li>
   <?php
    if(isset($_GET['id'])){
    	$id = $_GET['id'];
    	$query1 = "SELECT class_id FROM students WHERE student_id='$id'";
		$result1 = mysql_query($query1) or die(mysql_error());
		$row1 = mysql_fetch_array($result1);
		$students_class = $row1['class_id'];
		//query 2
		$teacher_email = $_SESSION['email'];
		if(isset($teacher_email)){
		$query2 = "SELECT teacher_id FROM teachers WHERE email='$teacher_email'";
			$result2 = mysql_query($query2) or die(mysql_error());
			$row2 = mysql_fetch_array($result2);
			$teacher_id = $row2['teacher_id'];
			
			//query 3
			$query3 = "SELECT class_id FROM class WHERE teacher_id='$teacher_id'";
			$result3 = mysql_query($query3);
			$row3 = mysql_fetch_assoc($result3);
			
			$teacher_class = $row3['class_id'];
			
		}
	
	
		if($teacher_class == $students_class){
			echo " <li><a href='grades.php?id=$student_id'><span><i class='fa fa-pencil-square-o'></i></span>Insert Grades</a></li>";
		}
		
    }
	?>
  
  </ul>
</div>
  		<div class="form-group col-sm-6 col-sm-12 col-md-6 col-lg-6">
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
  				$class = $row['class_id'];
  				$sql = "SELECT class_code,class_name FROM class WHERE class_id='$class' ";
				$result = mysql_query($sql);
			
				$row1 = mysql_fetch_array($result);
				 echo $row1['class_code'];
  			} ?>"  />
  			</div>
  			<div class="form-group col-sm-4">
  			<label for="class">Blood Group</label>
  			<input type="text" class="form-control1" disabled="" id='class' value="<?php echo $row['blood_grp']; ?>"/>
  				  		</div>
  				 <div class="clearfix"></div><!--end of form line-->
  				 	<div class="clearfix"></div><!--end of form line-->
  				 <div class="form-group col-sm-4">
  			<label for="mother">Mother's Name</label>
  			<input type="text" class="form-control1" disabled="" id="mother" value="<?php echo $row['mothers_name']; ?>"/>
  		</div>
  		<div class="form-group col-sm-4">
  			<label for="father">Father's Name</label>
  			<input type="text" class="form-control1" disabled="" id='father' value="<?php echo $row['fathers_name']; ?>"/>
  			</div>
  			  <div class="form-group col-sm-4">
  			<label for="doa">Date of Addmission</label>
  			<input type="text" class="form-control1" disabled="" id="doa" value="<?php echo $row['date_of_admission']; ?>"/>
  			
  		</div>
  				 <div class="clearfix"></div><!--end of form line-->
  				 	<div class="clearfix"></div><!--end of form line-->
  				
  		<div class="form-group col-sm-4">
  			<label for="rel">Religion</label>
  			<input type="text" class="form-control1" disabled="" id='rel' value="<?php echo $row['religion']; ?>"/>
  			</div>
  			
  				 
  				 	<div class="form-group1 col-sm-4">
  				 		
  				 	</div>
  				 	<div class="clearfix"></div><!--end of form line-->
  				 	<div class="clearfix"></div><!--end of form line-->
  	</form>


  </div>
</div>
	</table>
	<?php
	
		}
	}
?>
	</div>
	</div>
	<div>
<?php 
			include 'includes/sidebar.inc.php';
		 ?>
		 </div>	