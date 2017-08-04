<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
?>
<?php
	include 'functions/functions.php';
	
	?>
	<div class="outter-wp">
		<div class="graph-visual tables-main">
		<div class="graph">
			<div id="resl"></div>
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
			<table class="table table-responsive table-striped">
				<thead>
					<tr>
						<th>Subject Name</th>
						<th>Subject Code</th>
						<th>Teacher In Charge</th>
					</tr>
				</thead>
			<?php
			$email = $_SESSION['email'];
			$query = "SELECT class_id FROM students WHERE email='$email'";
			$result = mysql_query($query);
			$row = mysql_fetch_array($result);
			$class = $row['class_id'];
			if(isset($class)){
			$query = "SELECT * FROM subject WHERE class_id='$class'";
			$result = mysql_query($query);
			while($row = mysql_fetch_array($result)){
			?>
			<tbody>
				<tr>
					<td width="33.3%"><?php echo $row['subject_name']; ?></td>
					<td width="33.3%"><?php echo $row['subject_code']; ?></td>
					<td width="33.3%"><?php if(!empty($row['teacher_id'])){
						$query = "SELECT firstname,lastname FROM teachers WHERE teacher_id='".$row['teacher_id']."'";
						$result = mysql_query($query);
						$row = mysql_fetch_array($result);
						echo $row['firstname'].' '. $row['lastname'];
					}else{ 
						echo "<div id='waring'></div>"; } ?></td>
				</tr>
			</tbody>
		
			<?php
			}
			}
			?>
				</table>
				</div>
				<div class="col-sm-3"></div>
				<div class="clearfix"></div>
		</div>
		</div>
		</div>
		<div>
		<?php
	include 'includes/sidebar.inc.php';
	
	?>
	</div>
	<script>
	view_t_e();
		function view_t_e(){
			if($('#waring').html =''){
				$('#resl').html("<h6 class='alert alert-warning'>No teacher assigned to this subject yet, You can file a complaint to your scholl authority through class head<h6>");
			}
		}
	</script>