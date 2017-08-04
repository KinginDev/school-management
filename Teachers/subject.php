
<?php
include_once 'includes/header.inc.php';
include 'includes/conn.php';
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
											
											<ul class="nav nav-tabs">
												<div></div>
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>

  <li><a data-toggle="tab" href="#add"><span><i class="fa fa-plus-circle" style="padding-right: 4px;"></i></span>Add A Subject to the list</a></li>
  
</ul>

<div class="tab-content">
	<!-- tab 1-->
  <div id="home" class="tab-pane fade in active">
    <div class="graph">
	<div class="tables">
															
	<table class="table table-hover"> 
		<thead> <tr> <th>#</th>
		 <th>Subject Name</th> 
		 <th>Subject Code</th> 
		 <th>Class taken</th>
		 <th>Teacher</th>
		
	
		 </tr> 
		 </thead> 
		 <?php	
		 $sql = "SELECT * FROM subject ORDER BY 1 ASC ";
$query_sql = mysql_query($sql);
		 													 	
	while($query_row = mysql_fetch_array($query_sql)){
		@$id++;
		$subject_name = $query_row['subject_name'];
		$subject_code =$query_row['subject_code'];
		$class = $query_row['class_id'];
		$teacher = $query_row['teacher_id'];
	
		
		?>
		 <tbody> <tr> <th scope="row"><?php echo $id; ?></th> 
		 	
		 	<td><?php echo $subject_name; ?></td>
		 	<td><?php echo $subject_code; ?></td> 
		 	<td><?php 
		 	if(isset($class)){
		 		$query = "SELECT * FROM class WHERE class_id='$class'";
		 		$result= mysql_query($query);
		 		
		 		$row = mysql_fetch_array($result);
				$name = $row['class_name'];
				
				echo $name;
		 	}
		 	 ?></td>
		 	<td><?php 
		 	if(isset($teacher)){
		 		$query = "SELECT * FROM teachers WHERE teacher_id='$teacher'";
		 		$result= mysql_query($query);
		
		 		
		 		$row = mysql_fetch_array($result);
				$name = $row['firstname'].' '.$row['lastname'];
				
				echo $name;
		 	}
?></td>
		 	
		  </tr>
		  <?php
		  }?> 
		 	</table>
		
        <div class="clearfix"></div>
			</div>
												
		</div>
  </div>
  <div id="add" class="tab-pane fade">
    <!--/forms-inner-->
    <center>
	<div class="forms-inner">
		<?php
	
	if(isset($_POST['submit'])){
		
		$sub_name = $_POST['sub_name'];
		$sub_code = $_POST['sub_code'];
		$teacher = $_POST['teacher'];
		$class = @$_POST['class_id'];
		$errors= array();
	if(empty($sub_name)){
		$errors[] = 'The Subject Name field cannot be empty';
		
	}
	
	if(empty($sub_code)){
		$errors[] = 'The Subject Code field cannot be empty';
	}
	if(sub_code($sub_code)){
		$errors[] = "The subject name already exists, ou have to pick another subject code for this course";
	}
	if(empty($class)){
		$errors[] = 'The class field must be filled';
	}
	if(empty($teacher)){
		$errors[] = 'The teacher field must be filled';
	}
	if(empty($errors)){
	$query = "INSERT INTO subject (subject_name,subject_code,class_id,teacher_id) VALUES ('{$sub_name}','{$sub_code}','{$class}','{$teacher}')";
		mysql_query($query);
		
	
		
	}


	}

			?>															
		  <!--/set-1-->
	<div class="set-1">
		<div class="col-md-3"></div>
	<div class="col-md-6 graph-2  ">
<h3 class="inner-tittle two">Add To Subject</h3>

		<div class="grid-6">
			<div class="alert alert-info">
				<?php
				if(isset($errors)){
					if(empty($errors)){
					echo "The Subject  has been added";
				}else{
					foreach($errors as $error) {
						echo "<p>".$error."<p>";
						
					}
				}
				}
			
				?>
				<p>For this version of sms the tecaher cannot add a subject</p>
			</div>
				<div class="form-body">
	<form class="form-horizontal" action="" method="POST"> 
		<div class="form-group">
		 <label for="inputEmail3" class="col-sm-3 control-label">Subject Name</label>
		  <div class="col-sm-9"> 
		  	<input type="text" name="sub_name" class="form-control" id="disabledInput" placeholder="Subject Name" disabled="">
		  	 </div> 
		  	 </div> 
		  	 <div class="form-group">
		  	<label for="inputPassword3" class="col-sm-3 control-label">Subject Code</label> 
		  	 	 <div class="col-sm-9"> 
		  	 <input name="sub_code" class="form-control" id="disabledInput" placeholder="Subject code" disabled="">
		  	 	 	</div> 
		  	 	 	</div> 
		  	 	 	<div class="clearfix"></div>
		  	 	 	<div class="form-group">
		  	 	 		
		  	<label for="inputPassword3" class="col-sm-3 control-label" >Teachers Name</label> 
		  	 	 <div class="col-sm-9" > 
	<select name="teacher" class="form-control1" id="disabledInput" disabled="">
		<option></option>
		<?php
		$result = mysql_query("SELECT * FROM teachers");
		while($row= (mysql_fetch_array($result))){
			$id = $row['teacher_id'];
			$name = $row['firstname'].' '.$row['lastname'];
			echo "<option value='$id'>$name</option>";
		}
		
		?>
	
	</select>
		  	 	 	</div> 
		  	 	 	</div> 
		  	 	 		<div class="clearfix"></div>
		  	 	 	<div class="form-group">
		  	 	 		
		  	<label for="inputPassword3" class="col-sm-3 control-label">Class Name</label> 
		  	 	 <div class="col-sm-9" > 
	<select name="class_id" class="form-control1" id="disabledInput" disabled="">
		<option></option>
		<?php
		$result = mysql_query("SELECT * FROM class");
		while($row= (mysql_fetch_array($result))){
			$id = $row['class_id'];
			$code = $row['class_code'];
			echo "<option value='$id'>$code</option>";
		}
		
		?>
	</select>
		  	 	 	</div> 
		  	 	 	</div> 
		  	 	 	
	<div class="col-sm-offset-2"> 
		<button type="submit" class="btn btn-default" name="submit" disabled>Submit</button> </div> </form> 
																							</div>

																					</div>
																			
																				</div>
																				<div class="col-md-3"></div>
  </div>

</div>
		</center>
											</div>
					<div>
			
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
	