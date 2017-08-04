<?php	
include '../../includes/conn.php';
include '../../functions/functions.php';

	if(isset($_POST['teachers'])){
		$classname= $_POST['cname'];
		$classcode = $_POST['ccode'];
		$teachers = $_POST['teachers'];
		$errors= array();
		if(empty($classname)){
			$errors[]='The Class name field cannot be empty';
			}
		if(class_exist($classname)){
			echo 'The classname already exist';
		}
		if(class_code_exist($classcode)){
			$errors[] = 'The classcode already exist';
		}
			if(empty($classcode)){
				$errors[] = 'The Class Code field cannot be empty';
				if(strlen($classcode) > 5){
					$errors[] = 'The class code cannot be more than 5 characters';
				}
			}
			if(empty($teachers)){
				$errors[] = 'A teacher must be designated for each class';
			}
			
			if(empty($errors)){
			$classname = mysql_real_escape_string(htmlentities($_POST['cname']));
			$classcode = mysql_real_escape_string(htmlentities($_POST['ccode']));
			$teachers = mysql_real_escape_string(htmlentities($_POST['teachers']));	
			$query = "INSERT INTO class (class_name,class_code,teacher_id) VALUES ('$classname','$classcode','$teachers')";
			mysql_query(($query));
			
			}
			}
		
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
				
		