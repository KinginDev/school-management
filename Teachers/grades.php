
<?php
include_once 'includes/header.inc.php';
include 'includes/conn.php';
include 'functions/functions.php';

?>
<div class="outter-wp">
		
											<ul class="nav nav-tabs">
												<div></div>
  <li class="active"><a data-toggle="tab" href=>Manage Marks</a></li>

 
</ul>

<div class="tab-content">
	<!-- tab 1-->
  <div id="home" class="tab-pane fade in active">
    <div class="graph">
	<div class="tables">
											
	<table class="table table-bordered"> 
		<?php
		if(isset($_GET['id'])){
?>

					<div id="msge"></div>
			<form method="post" id="add_grades">
		
		<input type="hidden" name="id" id="id" value="<?php echo $_GET['id'];?>">
				<div class="form-group col-sm-5">
					<label> <h3><strong>Input Subject</strong></h3></label>
					<select class="form-control1" name="subject" id="subject">
						<option></option>
						<?php
			
				$id = $_GET['id'];
					$query = "SELECT class_id FROM students WHERE student_id='$id'";
					$result = mysql_query($query) or die(mysql_error());
					$row = mysql_fetch_array($result);
					$class_id = $row['class_id'];
					//the class id to get the subject the student should be taking
					
					if(isset($class_id)){
						$sql = "SELECT subject_code,subject_id FROM subject WHERE class_id='$class_id'";
						$results = mysql_query($sql) or die(mysql_error());
						$num = mysql_num_rows($results);
						if($num >= 1){
						while($rows = mysql_fetch_array($results)){
							$subject_id = $rows['subject_id'];
							$subject_code= $rows['subject_code'];
					echo "<option value='$subject_id'>$subject_code</option>";
						}
						}else{
							echo "<option>The Students Class Currently Has No Subject </option>";
				
					}
					}
					?>
					
					</select>
				
				</div>
				<div class="form-group col-sm-5">
					<label> <h3><strong>Input Term</strong></h3></label>
					<select class="form-control">
						<option></option>
					</select>
				</div>
				<div class="clearfix>"></div>
				
		
			
			<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Test 1</th>
				<th>Test 2</th>
				<th>Test 3</th>
				</tr>
			</thead>
			
	
			<?php
			$student_id= $_GET['id'];
			$query= "SELECT *FROM students WHERE student_id='$student_id'";
			$result = mysql_query($query) or die(mysql_error());
			while($row = mysql_fetch_array($result)){
				?>
				<tbody> 
					<tr>
						<td><?php echo $row['firstname'];?></td>
						<td><?php echo $row['lastname'];?></td>
						
						<td style="width:100px;"><input type="text" name="test1" class="form-control1"/></td>
						<td style="width:100px;"><input type="text" name="test2" class="form-control1"/></td>
						<td style="width:100px;"><input type="text" name="test3" class="form-control1"/></td>
							<input type="hidden" name="class_id" id="class_id" value="<?php echo $class_id;?>">
					</tr>
					
					</tbody>
					
					<div class="form-group col-sm-2">
					<div class="clearfix"></div>
						<input type="submit" class="btn btn-primary" value="Post Grades" name="submit" />
					</div>
					</form>
				<?php
			}
			?>
			<script>
		$('#add_grades').on('submit',function(e){
		e.preventDefault();
		var class_id = [$('#class_id').val()]
		var id = [$('#id').val()]
		var subject = $('#subject').val();
		var t1 = [$('#t1').val()]
		var t3 = [$('#t3').val()]
		var t2 = [$('#t2').val()]
		data={'class_id':class_id,'subject':subject,'t1':t1,'t2':t2,'t3':t3,'id':id}
  	 console.log(data);
  	 $('#loader').show();
  	 $('#submit_text').hide();
	$.ajax({
		url:"ajaxcall/ins_stdfor_grades_get.php",
		method : "POST",
		data:$('#add_grades').serialize(),
		dataType:'html',
		success:function(data){
			$('#msge').fadeIn('slow');
			$('#msge').html(data);
			$('#submit_btn').html('Submit');
		}
		
	})
	

	});
</script>
			<?php
		}
		?>
		<?php
		
		//This is the other part of the page
		if(!isset($_GET['id'])) {
		
		?>
		<form class="table table-bordered" method="POST">
			<tr>
			<td class="col-sm-4">			</td>
			<label><strong>Select Class</strong></label>
				<select  class="form-control1" name='class' id="class_grades">
					<option></option>
			on>
					<?php
		  	 	$result = mysql_query("SELECT * FROM class");
				while($row = mysql_fetch_array($result)){
				$id = $row['class_id'];
				$name = $row['class_code'];
				echo "<option value='$id'>$name</option>";
				}
		  	 ?>
					</select>
					
			</div>
</td>
			<td class="col-sm-4">
				
			</td>
			</tr>
			
		</form>
		</table>
		 <div id="modal-loader" style="display: none; text-align: center;">
                       	   	<img src="../images/preloader.gif">
                       	   </div>
		<div id="grades">
			
		</div>
		<?php } ?>
</div>
</div>

<div>		
<?php 
include 'includes/sidebar.inc.php';
?> </div>
<script>
	$('#class_grades').change(function(){
		var class_value = $(this).val();
		console.log(class_value);
		$('#grades').html('');
		$('#modal-loader').show();
		$.ajax({
			url: "ajaxcall/view_stdfor_grades.php",
			data: 'class_id='+class_value,
			method:'POST',
			success:function(data){
				$('#modal-loader').hide();
				$('#grades').html(data);
	
			}
		})
		
	})
</script>