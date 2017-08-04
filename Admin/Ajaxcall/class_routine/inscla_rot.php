<?php
	include '../../includes/conn.php';
	include '../../functions/functions.php';
	if(isset($_POST['class'])){
		$class = $_POST['class'];
		$start = $_POST['t_start'];
		$end = $_POST['t_end'];
		$day = $_POST['day'];
		$subject = $_POST['subject'];
		$errors= array();
		if(empty($class)){
				$errors[] ='The Class name field cannot be empty';
			}
		
		
		if(empty($start)){
				$errors[] = 'The Time Start name field cannot be empty';
			}
		if(empty($end)){
				$errors[] = 'The Time End name field cannot be empty';
			}
		if(empty($day)){
				$errors[] = 'The Day field cannot be empty';
			}
		if(class_rout_exist($class, $subject, $start, $end, $day)){
			$errors[] = 'The Routine Already Exists';
		}
			if(empty($errors)){
		$class = (int)$_POST['class'];
		$start = (int)$_POST['t_start'];
		$end = (int)$_POST['t_end'];
		$day = mysql_real_escape_string(htmlentities($_POST['day']));
		$subject = (int)$_POST['subject'];
		$sql="INSERT INTO class_routine (class_id,subject_id,time_start,time_stop,day) VALUES('{$class}','{$subject}','{$start}','{$end}','{$day}')";
			mysql_query($sql) or die(mysql_error());
			}	
	}
?>

<?php
				if(isset($errors)){
					if(empty($errors)){
						?>
						<div class="alert alert-info" id="suc">
							<span id="close" class="glyphicon glyphicon-remove" style="float:right; cursor: pointer; margin-left:10px;"></span>
						<?php
						echo "The operation was successful";
						?>
						</div>
						<?php
					}else{
						?>
						<div class="alert alert-danger"  id="suc">
							<span id="close" class="glyphicon glyphicon-remove" style="float:right; cursor: pointer; margin-left:10px;"></span>
							<?php
						foreach ($errors as $error) {
							
							echo "<p>".$error."</p>";
							
						}
						?>
							</div>
							<?php
					}
				}
				?>
				</div>
				<script>
					$('#close').click(function(){
					$('#suc').fadeOut('slow');
						
					});
				</script>