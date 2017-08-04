<?php
include '../includes/conn.php';
if(isset($_POST['id'])){
	$id = (int)$_POST['id'];
	$sql = "SELECT * FROM students WHERE class_id='$id'";
	$res = mysql_query($sql) or die(mysql_error());
?>

			<div class="jumbotron custom-jumb">
		
			
					<center>
						<?php $num = mysql_num_rows($res);?>
						<h3>Total Number of Students <?php echo $num?></h2>
						<?php $sql = "SELECT class_name, class_code FROM class WHERE class_id ='$id'"; $ress = mysql_query($sql);
						while($row = mysql_fetch_array($ress)){
							?>
							<h4><?php echo $row['class_name'];?> (<?php echo $row['class_code']; ?>)</h4>
							<?php
						}
						?>
						<div id="res"></div>
						<h5><?php $time = date('d/m/y:h/i,s'); echo $time; ?></h5>
					</center>
			
			</div>
	
<div class="col-sm-3"></div>
<div class="col-sm-6">
	
	<div class="graph">
		
		
		<table class="table table-bordered">
			
			<thead>
				<tr>
				<th>Id</th>
				<th>Names</th>
				<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while($row = mysql_fetch_array($res)){
					
					?>
				<tr>
					
					<td><?php echo $row['student_id']; ?></td>
					<td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
					<input type="hidden" id="class_id" data-id="<?php echo $_POST['id']; ?>" />
					<td><center>
 			<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Status
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="" class="absent"	id=<?php echo $row['student_id']; ?>>Absent</a></li>
    <li><a href="#" class="present" id=<?php echo $row['student_id']; ?>>Present</a></li>
    
  </ul>
</div>
	
						</center>
					</td>
					
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<div class="clearfix"></div>
<div class="col-sm-3"></div>
<?php } ?>
<script>
$(document).on('click','.absent',function(e){
	e.preventDefault();
	var id = $(this).attr('id');
	var id = $(this).attr('id');
	var class_id = $('#class_id').data('id');
	data={'absent':id,'class_id':class_id};
	console.log(data);
	$.ajax({
		url:"ajaxcall/attend_status.php",
		method: "POST",
		data:data,
		success:function(data){
			$('#res').html(data);
		}
	});
})
$(document).on('click','.present',function(e){
	e.preventDefault();
	var id = $(this).attr('id');
	var class_id = $('#class_id').data('id');
	data={'present':id,'class_id':class_id};
	console.log(data);
	$.ajax({
		url:"ajaxcall/attend_status.php",
		method: "POST",
		data:data,
		success:function(data){
			$('#res').html(data);
		}
	});
	
	 
})
</script>