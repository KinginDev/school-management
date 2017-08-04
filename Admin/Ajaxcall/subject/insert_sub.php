	<?php
	include '../../includes/conn.php';
include '../../functions/functions.php';
	
	if(isset($_POST['class_id'])){
		
		$sub_name = $_POST['sub_name'];
		$sub_code = $_POST['sub_code'];
		$sub_code = strtoupper($sub_code);
		$teacher = $_POST['teacher'];
		$class = @$_POST['class_id'];
		$errors= array();
	if(empty($sub_name)){
		$errors[] = 'The Subject Name field cannot be empty';
		
	}
	
	if(empty($sub_code)){
		$errors[] = 'The Subject Code field cannot be empty';
	}
	if(sub_code($sub_code)){
		$errors[] = "The subject name already exists, ou have to pick another subject code for this course";
	}
	if(empty($class)){
		$errors[] = 'The class field must be filled';
	}
	if(empty($teacher)){
		$errors[] = 'The teacher field must be filled';
	}
	if(empty($errors)){
	$query = "INSERT INTO subject (subject_name,subject_code,class_id,teacher_id) VALUES ('{$sub_name}','{$sub_code}','{$class}','{$teacher}')";
		mysql_query($query);
		
	
		
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