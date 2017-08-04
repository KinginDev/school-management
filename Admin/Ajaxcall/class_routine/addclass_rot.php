<?php
include '../../includes/conn.php';
?>
<div class="forms-inner " style="margin-top: 40px;">
	<div class="set-2">
		<div class="col-md-3"></div>
	<div class="col-md-6 graph-2">
<div class="clearfix"></div>

			<div id="resl">
				
			</div>
			<div class="form-body">
	<form class="form-horizontal" method="post" id="add_data"><div class="form-group">
		  	 	 <label for="inputPassword3" class="col-sm-2 control-label">Class Name</label> 
		  	 	 <div class="col-sm-9"> 
		  	 <select class="form-control1" name="class" id="class">
		  	 	<option placeholder="add a teacher"></option>
		  	 	<?php
		  	 	$result = mysql_query("SELECT * FROM class");
				while($row = mysql_fetch_array($result)){
				$id = $row['class_id'];
				$name = $row['class_code'];
				echo "<option value='".$id.'" id="'.$id."'>$name</option>";
				}
		  	 ?>

		  	 </select>
		  	 	 	</div> 
		  	 	 
		  	 	 </div>
		  	 	 <div class="form-group">
		  	 	 <label for="inputPassword3" class="col-sm-2 control-label">Subject</label> 
		  	 	 <div class="col-sm-9"> 
		  	 <select class="form-control1" name="subject" id="subject">
		  	 	<option></option>
		  	 	<option id="subject"></option>
		  	 	

		  	 </select>
		  	 	 	</div> 
		  	 	 
		  	 	 </div>
		  	 <div class="form-group">
		  	<label for="inputPassword3" class="col-sm-2 control-label">Time Start</label> 
		  	 	 <div class="col-sm-9"> 
		  	<select  name="t_start" id="t_start" class="form-control1">
		  		<option></option>
		  		<option value="8">8.00 AM</option>
		  		<option value="9">9.00 AM</option>
		  		<option value="10">10.00 AM</option>
		  		<option value="11">11.00 AM</option>
		  		<option value="12">12.00 AM</option>
		  		<option value="1">1.00 PM</option>
		  		<option value="2">2.00 PM</option>
		  	</select>
		  	 	 	</div> 
		  	 	 </div>
		  	 	 <div class="form-group">
		  	<label for="inputPassword3" class="col-sm-2 control-label">Time End</label> 
		  	 	 <div class="col-sm-9"> 
		  	<select  name="t_end" id="t_end" class="form-control1">
		  		<option></option>
		  		
		  		<option value="9">9.00 AM</option>
		  		<option value="10">10.00 AM</option>
		  		<option value="11">11.00 AM</option>
		  		<option value="12">12.00 AM</option>
		  		<option value="1">1.00 PM</option>
		  		<option value="2">2.00 PM</option>
		  		<option value="3">3.00 PM</option>
		  	</select>
		  	 	 	</div> 
		  	 	 </div>
		  	 	 	
		  	 	 	<div class="form-group">
		  	<label for="inputPassword3" class="col-sm-2 control-label">Day</label> 
		  	 	 <div class="col-sm-9"> 
		  	<select  name="day" id="day" class="form-control1">
		  		<option></option>
		  		
		  		<option value="monday">Monday</option>
		  		<option value="tuesday">Tuesday</option>
		  		<option value="wednesday">Wednesday</option>
		  		<option value="thursday">Thursday</option>
		  		<option value="friday">Friday</option>
		  		
		  	</select>
		  	 	 	</div> 
		  	 	 </div>
		  	 	 	
		  	 	 	
	<div class="col-sm-offset-2"> 
		<button type="submit" class="btn btn-default" name="submit">Submit</button> </div> </form> 
																							</div>

																					</div>
																			
																				</div>
  </div>

</div>
		</center>
											</div>
											
			</div></div>
	</div>
	</div>
	<div class="clearfix"></div>
	<script>
	//script for populating subjects
	$('#class').change(function(){
		console.log($('#subject').val());
	});
	$('#class').change(function(){
		var class_id = $(this).val();
		console.log(class_id);
		$.ajax({
			url:'Ajaxcall/subject/selsub.php',
			method: 'POST',
			data:{class_id:class_id},
			dataType:'text',
			success:function(data){
				$('#subject').html(data);
			}
		})
	});
		$('#add_data').on('submit',function(e){
	 			var teacher =	$('#teacher').val();
	 			var sclass =	$('#class').val();
	 			var start =	$('#t_start').val();
	 			var end =	$('#t_end').val();
	 			var day = $('#day').val();
	 			var subject = $('#subject').val();
	 			data = {'class_id':sclass, 'start':start, 'end':end,'day':day,'subject':subject};
	 			console.log(data);
	 				e.preventDefault();
	 				$.ajax({
	 					url: 'ajaxcall/class_routine/inscla_rot.php',
	 					method: 'post',
	 					data:$('#add_data').serialize(),
	 					success:function(data){
	 						$('#resl').html(data);
	 						
	 					}
	 				})
	 			})
	</script>