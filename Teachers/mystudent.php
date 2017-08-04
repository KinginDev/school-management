<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
?>
<?php
	include 'functions/functions.php';
	
	?>

  <!--//sub-heard-part--><div class="outter-wp">
									<div class="graph-visual tables-main">
											<h2 class="inner-tittle">Basic Table</h2>
												<div class="graph">
														<div class="tables">
																
																<table class="table">
																	<thead>
																		<tr>
																		  <th>#</th>
																		  <th>Names</th>
																		  <th>Email</th>
																		  <th>Phone</th>
																		  <th>Sex</th>
																		  <th>Image</th>
																		  <th>Action</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<?php
$email = $_SESSION['email'];																		
if(isset($email)){

	$query = "SELECT * FROM teachers WHERE email='$email'";
	$result = mysql_query($query);
	$row1 = mysql_fetch_array($result);
	$teacher_id = $row1['teacher_id'];
	//
	$query2 ="SELECT * FROM class WHERE teacher_id='$teacher_id'";
	$result2 = mysql_query($query2);
	$row2 = mysql_fetch_array($result2);
	$class = $row2['class_id'];
	$sql = "SELECT * FROM students WHERE class_id='$class'";
	$results = mysql_query($sql);
	while($row = mysql_fetch_array($results)){
		$name = $row['firstname'].' '.$row['lastname'];
		$id = $row['student_id'];
		$email = $row['email'];
		$phone = $row['phone'];
		$sex =  $row['sex'];
		
		
		?>
																		  <th scope="row">00<?php echo $id;?></th>
																		  <td><?php echo $name; ?></td>
																		  <td><?php echo $email; ?></td>
																		  <td><?php echo $phone; ?></td>
																		  <td><?php  if($sex = '1'){echo "Male";} elseif ($sex= '2'){
																		  	echo "Female";
																		  } ?>
																			  
																		  </td>
																		  <td></td>
																		  <td><div class="dropdown">
  									<button class="btn btn-default btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
   <li><a href="#"><span><i class="fa fa-mail-forward"></i></span>Message</a></li>
   <li><a href="grades.php?id=<?php echo $id; ?>"><span><i class="fa fa-pencil-square-o"></i></span>Insert Grades</a></li>
   <li data-id="<?php echo $id; ?>" id="<?php echo $class; ?>" class="view-grades"><a href="" data-toggle="modal" data-target="#myModal"><span><i class="fa fa-pencil-square-o"></i></span>View Grades</a></li>
   <li><a href="#"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
</div></td>
																		</tr>
																	<?php  }} ?>
																</table>
															</div>
												
										        </div>
<div>
	</div>
			
			<?php 
				
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
		<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div id="modal-loader" style="display: none; text-align: center; margin:50; ">
                       	   	<img src="../images/ajax-loader.gif">
                       	   </div>
                       	   <div id="dynamic-content">
                             
                        </div> 
      	
</div>
  </div>
</div>
<script>
	$(document).on('click','.view-grades',function(e){
		e.preventDefault();
		var sid = $(this).data('id');
		var cid = $(this).attr('id');
		data={'student_id':sid,'class_id':cid};
		$('#ajax-loader').show();
		$('#dynamic-content').html('');
		$.ajax({
			url: "ajaxcall/view-grades.php",
			method: "POST",
			data:data,
			dataType:'html',
			success:function(data){
				$('#ajax-loader').hide();
				$('#dynamic-content').html(data);
			}
		})
	})
</script>