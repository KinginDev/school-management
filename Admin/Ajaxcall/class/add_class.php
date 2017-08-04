<?php 	include '../../includes/conn.php';?>
<div class="forms-inner ">
											 
	 <!--/set-1-->
	<div class="set-2">
		<div class="col-md-3"></div>
	<div class="col-md-6 graph-2">
<h3 class="inner-tittle two">Add Classes</h3>

		<div class="grid-6">
			<div id="resl">
				
			</div>
				<div class="form-body">
	<form class="form-horizontal" action="" method="post" id="add_data"> <div class="form-group">
		 <label for="inputEmail3" class="col-sm-2 control-label">Class name</label>
		  <div class="col-sm-9"> 
		  	<input type="text" name="cname" class="form-control" id="class" placeholder="Class Name">
		  	 </div> 
		  	 </div> 
		  	 <div class="form-group">
		  	<label for="inputPassword3" class="col-sm-2 control-label">Code</label> 
		  	 	 <div class="col-sm-9"> 
		  	 <input type="text" name="ccode" class="form-control" id="code" placeholder="Code">
		  	 	 	</div> 
		  	 	 </div>
		  	 	 	<div class="form-group">
		  	 	 <label for="inputPassword3" class="col-sm-2 control-label">Teacher's Name</label> 
		  	 	 <div class="col-sm-9"> 
		  	 <select class="form-control1" name="teachers" id="teacher">
		  	 	<option placeholder="add a teacher"></option>
		  	 	<?php
		  	 	$result = mysql_query("SELECT * FROM teachers");
				while($row = mysql_fetch_array($result)){
				$id = $row['teacher_id'];
				$name = $row['firstname'].' '.$row['lastname'];
				echo "<option value='$id'>$name</option>";
				}
		  	 ?>
		  	 	
		  	 	
		  	 </select>
		  	 	 	</div> 
		  	 	 	<div class="col-md-3"></div>
		  	 	 	</div> 
		  	 	 	
	<div class="col-sm-offset-2"> 
		<button type="submit" class="btn btn-default" name="submit">Submit</button> </div> </form> 
																							</div>

																					</div>
																			
																				</div>
  </div>
<script>
	$('#add_data').on('submit',function(e){
	 			var teacher =	$('#teacher').val();
	 			var sclass =	$('#class').val();
	 			var code =	$('#code').val();
	 			
	 			data = {'class_id':sclass, 'teacher':teacher, 'code':code};
	 			console.log(data);
	 				e.preventDefault();
	 				$.ajax({
	 					url: 'ajaxcall/class/ins_class.php',
	 					method: 'post',
	 					data:$('#add_data').serialize(),
	 					success:function(data){
	 					swal(
  						data,
  						'You clicked the button!',
  						'success'
						);
	 						
	 					}
	 				})
	 			})
	</script>