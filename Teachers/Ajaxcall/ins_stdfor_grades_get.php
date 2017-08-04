<?php
session_start();
include '../includes/conn.php';
include '../functions/functions.php';

if(isset($_POST['id'])){
	$errors= array();
	$subject = $_POST['subject'];
$test1 = @$_POST['test1'];
$test1 = @$_POST['test2'];
$test1 = @$_POST['test3'];
	//The teacher trying to  input the grades must be a registered teacher for the subject
	//gettting the teachers id
	$email = $_SESSION['email'];
	if(!empty($email)){
	$query= "SELECT teacher_id FROM teachers WHERE email='$email'";
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
	$teacher_id = $row['teacher_id'];
	}
	//getting the teachers class
	if(isset($teacher_id)){
		$teacher_id = (int)$teacher_id;
		$sql = "SELECT subject_id FROM subject WHERE teacher_id='$teacher_id'";
		$res = mysql_query($sql) or die(mysql_error());
		$data = array();
		while($rows = mysql_fetch_assoc($res)){
		$data[] = $rows;
	
		}
		$s = array ('subject_id' => $_POST['subject']);
	
		//instantiate the form processing
		if(in_array($s, $data) == true){
		$test1 = @$_POST['test1'];
			
		$test2 = @$_POST['test2'];
		$test3 = @$_POST['test3'];
		
		if(empty($test1)){
			$errors[] = 'Test 1 Cannot be empty';
		}
		if(empty($test2)){
			$errors[] = 'Test 2 Cannot be empty';
		}
		if(empty($test3)){
			$errors[] = 'Test 3 Cannot be empty';
		}
		if($test3 > 100 && $test2 > 100 && $test3 > 100){
		$errors[] = 'The Marks Cannot be More than 100';
		}
		if(empty($errors)){
			
$id = $_POST['id'];
			$sql = "SELECT class_id FROM students WHERE student_id='$id'";
			$res = mysql_query($sql) or die(mysql_error());
			$row = mysql_fetch_array($res);
			$class_id =  $row['class_id'];
			$subject_id = $_POST['subject'];
			
//geting the class id for the student
			$id = $_POST['id'];
			$sql = "SELECT class_id,student_id FROM students WHERE student_id='$id'";
			$res = mysql_query($sql) or die(mysql_error());
			$row = mysql_fetch_array($res);
			//user inputs
			@$class_id =  $row['class_id'];
			@$subject_id = $_POST['subject'];
			@$student_id = $row['student_id'];			
			$class_id = mysql_real_escape_string(htmlentities($class_id));
			$subject_id = mysql_real_escape_string(htmlentities($subject_id));
			$student_id = mysql_real_escape_string(htmlentities($student_id));
			$test1 = mysql_real_escape_string(htmlentities($_POST['test1']));
			$test2 = mysql_real_escape_string(htmlentities($_POST['test2']));
			$test3 = mysql_real_escape_string(htmlentities($_POST['test3']));
			if(grades($class_id, $student_id, $subject_id)){
				$errors[] = "The Marks Have already been inputed";
			}else{
			$query = "INSERT INTO marks (subject_id,class_id,test1,test2,test3,student_id) VALUES ('{$subject_id}','{$class_id}','{$test1}','{$test2}','{$test3}','{$student_id}')";
			$result = mysql_query($query) or die(mysql_error());
		}
			}
		}else{
			$errors[] = "You are not registered as a teacher of this subject";
		}
	
		
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