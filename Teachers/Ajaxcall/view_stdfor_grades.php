<?php
include '../includes/conn.php';
if(isset($_POST['class_id'])){
			$class = $_POST['class_id'];
			$query = "SELECT * FROM class WHERE class_id='$class'";
			$resl =mysql_query($query);
			$rows = mysql_fetch_array($resl);
			?>
			<center>
			<h3 style="padding:10px;">You Are Viewing Students From: <strong><?php echo $rows['class_name'];?> (<?php echo $rows['class_code'];?>)</strong></h3>
			</center>
<form method="POST" id="add_data">
	<div id="msg">
	
	</div>
	<div class="col-sm-4"></div>	
	<div class="col-sm-4"><div class="form-group">
		<label>Select Subject</label>
		<select id="subject" name="subject_name" class="form-control1">
			<?php 
			$class = $_POST['class_id'];
			$query = "SELECT * FROM subject WHERE class_id='$class'";
			$resl =mysql_query($query);
			while($rows = mysql_fetch_array($resl)){
				
			?>
			<option value="<?php echo $rows['subject_id'];?>"><?php echo $rows['subject_code']; ?></option>
			<?php
}
			?>
		</select>
	</div>
</div>
<div class="col-sm-4"></div>
<div class="clearfix"></div>
	<table class="table table-bordered">
			<thead> 
				<tr>
					<th>Id </th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Test 1</th>
					<th>Test 2</th>
					<th>Test 3</th>
				</tr>
			</thead>
		<?php
			$class = $_POST['class_id'];
			$query = "SELECT * FROM students WHERE class_id LIKE '%$class%'";

			$result = mysql_query($query)or die(mysql_error());
			
			while($row = mysql_fetch_array($result)){
				 $firstname= $row['firstname'];
				$lastname = $row['lastname'];
				?>
				
					<tbody>
						<tr>
							<td id="student_id"><?php echo $row['student_id']; ?></td>
							<td class="col-md-4"><?php echo $firstname; ?></td>
							<td class="col-md-4"><?php echo $lastname ?></td>
						<td style="width:100px;"><input type="text" id="t1" name="t1" class="form-control1"/></td>
						<td style="width:100px;"><input type="text" id="t2" name="t2" class="form-control1"/></td>
						<td style="width:100px;"><input type="text"  id="t3" name="t3" class="form-control1"/></td>
						<input type="hidden" name="class_id" id="class_id" value="<?php echo $_POST['class_id'];?>">
							
						</tr>
					</tbody>
			<?php
			
			} ?>
			<div class="form-group">
<button type="submit" class="btn btn-primary" id="submit_btn">
	<div id="loader" style="display: none; text-align: center;">
                       	   	<img src="../images/ajax-loader.gif">
                       	   </div>
		<span id="submit_text">Submit</span>
</button>
	

	
</div>
									
</table>
</form>	

<script>
		$('#add_data').on('submit',function(e){
		e.preventDefault();
		var class_id = [$('#class_id').val()]
		var subject = $('#subject').val();
		var t1 = [$('#t1').val()]
		var t3 = [$('#t3').val()]
		var t2 = [$('#t2').val()]
		data={'class_id':class_id,'subject':subject,'t1':t1,'t2':t2,'t3':t3}
  	 console.log(data);
  	 $('#loader').show();
  	 $('#submit_text').hide();
	$.ajax({
		url:"ajaxcall/ins_grade.php",
		method : "POST",
		data:$('#add_data').serialize(),
		dataType:'html',
		success:function(data){
			$('#msg').fadeIn('slow');
			$('#msg').html(data);
			$('#submit_btn').html('Submit');
		}
		
	})
	

	});
</script>
<?php } ?>