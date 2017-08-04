<?php
include '../../includes/conn.php';
$record_per_page = 5;
$page = '';
if(isset($_POST['page'])){
	$page = $_POST['page'];
}else{
	$page = 1;
}
$start_from = ($page - 1) * $record_per_page;
$sql = "SELECT * FROM subject ORDER BY subject_id ASC LIMIT $start_from,$record_per_page";
$query_sql = mysql_query($sql) or die(mysql_error());
$row = mysql_num_rows($query_sql);
?>
<div class="graph">
	<div class="tables">
<table class="table table-hover"> 
		<thead> <tr> <th>#</th>
		 <th>Subject Name</th> 
		 <th>Subject Code</th> 
		 <th>Class taken</th>
		 <th>Teacher</th>
		
		 <th>Action</th>
		 </tr> 
		 </thead> 
		 <?php
		 while($query_row = mysql_fetch_array($query_sql)){
		$subject_id = $query_row['subject_id'];
		$subject_name = $query_row['subject_name'];
		$subject_code =$query_row['subject_code'];
		$class = $query_row['class_id'];
		$teacher = $query_row['teacher_id'];
	
		
		?>
		 <tbody> <tr> <th scope="row"><?php echo $subject_id; ?></th> 
		 	
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
		 	<td>
	<div class="dropdown">
  	<button class="btn btn-default btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a  data-toggle="modal" class="edit-class" data-target="#myModal"  id="<?php echo $subject_id;?>"</a><span><i class="fa fa-pencil-square"></i></span>Edit</li>
    <li><a href="#"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
</div></td>
		  </tr>
		   </tbody>
		   
		  <?php
		  }
?>
</table>
</div>
<?php
$page_query = "SELECT * FROM subject ORDER BY subject_id ASC";
$page_result = mysql_query($page_query);
$total_records = mysql_num_rows($page_result);
$total_pages = ceil($total_records/$record_per_page);

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
		 	
		
		 
<div class="clearfix"></div>
</div>
	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    	<div class="modal-header">
    		<center>
    	<h3 class="text-area"</h3>
    	</center>
    	</div>
    	<div class="modal-body">
    		
                       	   <div id="modal-loader" style="display: none; text-align: center;">
                       	   	<img src="../images/ajax-loader.gif">
                       	   </div>
                       	  <div class="container">
                       	  	<div class="col-sm-6">
    		
    		</div>
    		</div>
    		<div id="dynamic-content">
    		
    		</div>
    			

  	</center>

     </div>
     </div>
  </div>
  </div>