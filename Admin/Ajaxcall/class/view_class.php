<?php include '../../includes/conn.php'; ?>
<div class="graph">
	<div class="tables">
															
	<table class="table table-hover"> <thead> <tr> <th>#</th>
		 <th>Class Name</th> 
		 <th>Code</th> 
		 <th>Teacher</th>

		 <th>Action</th>
		 </tr> 
		 </thead> 
		 <tbody> 
		 	<?php
		 	$query = "SELECT * FROM class";
			$result = mysql_query($query);
			while($row = mysql_fetch_array($result)){
			$id = $row['class_id'];
			$classname = $row['class_name'];
			$classcode = $row['class_code'];
			$teacher_id = $row['teacher_id'];
			
		
			
		 	?>
		 	<tr> <th scope="row"><b><?php echo $id;?></th> 
		 	<td><b><?php echo $classname; ?></b></td> 
		 	<td><b><?php echo $classcode; ?></b></td>
		 	<td><b><?php
		 		if(isset($teacher_id)){
				$query_t = "SELECT firstname, lastname FROM teachers WHERE teacher_id ='$teacher_id'";
				$result_t = mysql_query($query_t);
				while($row_t = mysql_fetch_array($result_t)){
					$teachers_name = $row_t['firstname'].' '.$row_t['lastname'];
				 echo $teachers_name; 
			 	}	}
		 	 ?></b></td> 
		 
		 	<td><div class="dropdown">
  									<button class="btn btn-default btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a  data-toggle="modal" class="edit-class" data-target="#myModal"  id="<?php echo $id;?>"</a><span><i class="fa fa-pencil-square"></i></span>Edit</li>
    <li><a href="#"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
</div></td>
		  </tr> 
		  <?php  }?>
		 	</table>
			</div>
			</div>
		