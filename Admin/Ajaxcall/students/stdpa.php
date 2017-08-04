<?php
if(isset($_SESSION['email'])){
	$email = $_SESSION['email'];
}
?>
<?php
	include '../../includes/conn.php';
	include '../../functions/functions.php';
	
	$record_per_page=5;
	$page = '';
	$output = ' ';
	if(isset($_POST['page'])){
		@$page = $_POST['page'];
	}else{
		$page = 1;
	}
	$start_from = ($page - 1) * $record_per_page;
	$query = "SELECT * FROM students ORDER BY student_id DESC LIMIT $start_from,$record_per_page";
	$result = mysql_query($query);
	
	?>
	
							<!--//outer-wp-->
									<div class="outter-wp">
									<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.html">Home</a></li>
															<li class="active">Calender</li>
														</ol>
														
															<div class="tables">
																<table class="table table-bordered">
																	 <thead> <tr> 
																	 	<th>#</th>
																	 	<th>First Name</th> 
																	 	<th>Last Name</th>
																	 	<th>email</th> 
																	 	<th>images</th>
																	 	<th>Class</th>
																	 	<th>Option</th>
																	 	</thead> <tbody> <tr> 
																	 		
	
	<?php																 	
	while($query_row = mysql_fetch_array($result)){
		$student_id = $query_row['student_id'];
		$firstname = $query_row['firstname'];
		$lastname = $query_row['lastname'];
		$email = $query_row['email'];
		$images = $query_row['images'];
		$class = $query_row['class_id'];
		?>
																	 		<th scope="row"><?php echo $student_id; ?></th>
																	 		<td><?php echo $firstname; ?></td> 
																	 		<td><?php echo $lastname; ?></td> 
																	 		<td><?php echo $email; ?></td> 
																	 		<td><img width="80px" class="img-rounded" src="../student_images/<?php echo $images; ?>"</td>
		<td><?php if(isset($class)){
  	$query = "SELECT * FROM class WHERE class_id='$class'";
	$result = mysql_query($query);

	while($row = mysql_fetch_array($result)){
		$class_code = $row['class_code'];
		echo $class_code;
	}}
		?></td>
																	 		<td>
																 			<div class="dropdown">
  									<button class="btn btn-default btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a class="edit-data" href="#edit" name="edit" data-toggle="modal" id="<?php echo $student_id; ?>" ><span><i class="fa fa-pencil-square-o"></i></span>Edit</a></li>
 
    <li><a class="view-data" href="#myModal" name="view" data-toggle="modal" id="<?php echo $student_id; ?>"  ><span><i class="glyphicon glyphicon-eye-open"></i></span>View More</a></li>
    <li><a href="#myModal" id=""><span><i class="fa fa-mail-forward"></i></span>Messages</a></li>
    <li><a href="#delTeacher" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  </ul>
</div></td>
																	 		 </tr> 
																	 	<?php } 
$page_query = "SELECT * FROM students ORDER BY student_id DESC";
$total_records = mysql_num_rows($page_result);
$total_pages = ceil($total_records/$record_per_page)	;
for($i; $i<= $total_pages; $i++){
	$paginitioncrtls = "<li class='paginition_link'><a ><span aria-hidden='true' id='".$i.">$i>&laquo;</span><span class='sr-only'>Next</span></a></li> &nbsp; &nbsp;";
}															 	?>
																	 		 </table>
																	 		  <div class="pagination_area">
       	<h3><?php echo $textline1;?></h3>
        <p><?php echo $textline2; ?></p>  
         
      <nav>
            <ul class="pagination">
             <?php echo $paginitioncrtls; ?>
            </ul>
          </nav>
        </div>

        <div class="clearfix"></div>
				 <!-- Modal -->

</div>											</div>
												
											</div>	
										</div>
										</div>
<div class="clearfix"></div>											
						<!--/sub-heard-part-->	
			
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
      
                       	   <div id="modal-loader" style="display: none; text-align: center;">
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
