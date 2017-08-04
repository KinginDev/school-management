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
											
												<!--//custom-widgets-->
												<div class="outer-wp">
												<div class="graph-visual tables-main">
											<center>
												<h3 class="inner-tittle two">Teachers</h3>
												</center>
													<div class="graph">
														<div class="tables">
																<table class="table table-bordered"> 
																
<thead>
	 <tr> 
<th>#</th>
 <th>Teacher</th> 
<th>Subjects</th>
<th>email</th>

<th>Class</th>
<th>Mail teacher</th>
<th>Action</th>
 </tr> </thead> 
 <tbody> <tr>
 		
																	<?php
																
																	
																	$query = "SELECT * FROM teachers";
																		
																		$query_run = mysql_query($query);
																	
																while ($row = mysql_fetch_array($query_run)) {
																	
																	$firstname = $row['firstname'];
																	$lastname = $row['lastname'];
																	$teacher_email = $row['email'];
																	$class = $row['class_id'];
																	
																		
																		
																	
																	?>
  <th scope="row"></th> 
  <td><?php  echo $firstname. ' '. $lastname; ?></td> 
  <td></td> 
  <td><?php  echo $teacher_email; ?></td> 
  <td><?php echo $class; ?></td>
  <td><a href="" class="btn btn-primary">Message</a></td>
  <td><div class="dropdown">
  									<button class="btn btn-default btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#"><span><i class="fa fa-pencil-square-o"></i></span>Edit</a></li>
    <li><a href="#"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
</div></td>
  </tr> <tr> 
  	<?php  
  		}
  	?>
 </table>
	</div>								</div>
													
													</div>
										</div>
		<div>
			
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
