<?php include '../../includes/conn.php'; 
include '../../functions/functions.php';
?>
<?php
$record_per_page = 5;
@$page = '';
if(isset($_POST['page'])){
	$page = $_POST['page'];
}else{
	$page = 1;
}
$start_from = ($page - 1) * $record_per_page;
$sql = "SELECT * FROM teachers ORDER BY teacher_id ASC LIMIT $start_from,$record_per_page";
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
													
												
												<!--//custom-widgets-->
									
												<div class="graph-visual tables-main">
										
												<h3 class="inner-tittle two">Teacher </h3>
												
											
													<div class="graph">
														<div class="tables ">
																<table class="table table-bordered "> 
																
<thead>
	 <tr> 
<th>#</th>
 <th>Teacher</th> 
 <th>Images</th>
<th>Subjects</th>
<th>email</th>

<th>Class</th>

<th>Action</th>
 </tr> </thead> 
 <tbody> <tr>
 		
																	<?php
																$query_sql = mysql_query($sql) or die(mysql_error());
																$row = mysql_num_rows($query_sql);
																while ($row = mysql_fetch_array($query_sql)) {
																	$teacher_id = $row['teacher_id'];
																	$firstname = $row['firstname'];
																	$lastname = $row['lastname'];
																	$teacher_email = $row['email'];
																	$images = $row['images'];
														?>
  <th scope="row"><?php echo $teacher_id; ?></th> 
  <td><?php  echo $firstname. ' '. $lastname; ?></td> 
  <td><img class="img-responsive" width="80px" src="../teacher_images/<?php echo $images; ?>"</td>
  <td><?php  if(isset($teacher_id)){
  	$query = "SELECT * FROM subject WHERE teacher_id='$teacher_id'";
	$result = mysql_query($query);

	while($row = mysql_fetch_array($result)){
		$subject_code = $row['subject_code'];
		$subject_id = $row['subject_id'];

		?>
		<div class="dropdown">
  	<button class="btn btn-default btn-custom dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $subject_code; ?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">

    
    <li><a href="" id="<?php echo $subject_id; ?>" data-id="<?php echo $teacher_id; ?>" class="delsub ><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
</div>

		<?php
		
	}
  } ?></td> 
  <td><?php  echo $teacher_email; ?></td> 
  <td><?php if(isset($teacher_id)){
  	$query = "SELECT * FROM class WHERE teacher_id='$teacher_id'";
	$result = mysql_query($query);

	while($row = mysql_fetch_array($result)){
		$class_code = $row['class_code'];
		$class_id = $row['class_id'];

		?>
		<div class="dropdown">
  	<button class="btn btn-default btn-custom dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $class_code; ?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a id="<?php echo $class_id; ?>" data-id="<?php echo $teacher_id; ?>" class="delclass"  data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
</div><?php
		
	}
  } ?>
  </td> 
  <td><div class="dropdown">
  <button class="btn btn-primary btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a class="view-data" href="#myModal" name="view" data-toggle="modal" id="<?php echo $teacher_id; ?>"  ><span><i class="glyphicon glyphicon-eye-open"></i></span>View More</a></li>
    <li><a href="#myModal" id=""><span><i class="fa fa-mail-forward"></i></span>Messages</a></li>
    <li id="delTeacher" data-id="<?php echo $teacher_id;?>"><a  data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  </ul>
</div>
</td>
<!-- this modal is for this class-->

  </tr>
  	<?php  

  	}
  	?>
 </table>
 <div class='clearfix'>
 	<?php
$page_query = "SELECT * FROM teachers ORDER BY teacher_id ASC";
$page_result = mysql_query($page_query);
$total_records = mysql_num_rows($page_result);
$total_pages = ceil($total_records/$record_per_page);
@$pn =$_POST['page'];
if($total_pages < 0){
	
}elseif($pn > @$last){
	$pn = @$last;
}
for($i=1; $i<=$total_pages; $i++){
	
	?>
	
	<nav>
		<ul class="pagination"  style="display: block; margin-left:40%;">
	<li><span class="pagination_link" style="cursor: pointer; padding:10px; border:1px solid #eee; border-radius: 3px;"  id="<?php echo $i; ?>"><?php echo $i; ?></span></li>
	</ul>
	</nav>

	<?php
}
		  ?> 											
				
 </div>
	</div>		
			</div>
						
		
<!-- Modal to view teacher informaion -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center>
        <h4 class="modal-title">View Student Info</h4>
        </center>
      </div>
      
                       	   <div id="modal-loader" style="display: none; text-align: center; margin:50; ">
                       	   	<img src="../images/ajax-loader.gif">
                       	   </div>
                       	   <div id="dynamic-content">
                                        
                          
                                       		
                             
                             
                        </div> 
      	
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>


  </div>
</div>


  </div>
</div>

