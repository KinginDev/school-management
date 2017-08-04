<?php
	session_start();
	include '../includes/conn.php';		
	include '../functions/functions.php';
	$errors= array();
  $subject = @$_POST['subject_name'];
 $email = $_SESSION['email'];
$class_id =  @$_POST['class_id'];
	//The teacher trying to  input the grades must be a registered teacher for the subject
	//gettting the teachers id
	
		if(empty($class_id)){
			$errors[] = 'An Error Ocured Please Try Again !!!';
		}
		
		
	if(!empty($subject)){
$email = $_SESSION['email'];
	if(!empty($email)){
	$query= "SELECT teacher_id FROM teachers WHERE email='$email'";
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result);
	$teacher_id = $row['teacher_id'];
	}
	//getting the teachers class
	if(isset($teacher_id)){
		$sql = "SELECT subject_id FROM subject WHERE teacher_id='$teacher_id'";
		$res = mysql_query($sql) or die(mysql_error());
		$data = array();
		$teacher_id = (int)$teacher_id;
		$sql = "SELECT subject_id FROM subject WHERE teacher_id='$teacher_id'";
		$res = mysql_query($sql) or die(mysql_error());
		$data = array();
		while($rows = mysql_fetch_assoc($res)){
		$data[] = $rows;
	
		}
		
	}
	$s = array ('subject_id' =>@$_POST['subject_name']);

		//instantiate the form processing
		if(in_array($s, $data) == true){
		$class_id = $_POST['class_id'];
		}else{
			$errors[] = "You are not registered as a teacher of this subject";
		}
		}
				$q = "SELECT * FROM students WHERE class_id='$class_id'";
				$r = mysql_query($q) or die(mysql_error());
				
				while($rowz =  mysql_fetch_array($r)){
				$student_id  = $rowz['student_id'];
			$t1 = $_POST['t1'];
		$t2 = $_POST['t2'];
		$t3 = $_POST['t3'];
	
		$student_id  = $rowz['student_id'];
		
		
		if(empty($t1)){
			$errors[] = 'Test 1 Cannot be empty';
		}
		if(empty($t2)){
			$errors[] = 'Test 2 Cannot be empty';
		}
		if(empty($t3)){
			$errors[] = 'Test 3 Cannot be empty';
		}
		if($t3 >= '100' && $t1 >= '100' && $t3 >= '100'){
		$errors[] = 'The Marks Cannot be More than 100';
		}
		if(empty($errors)){
			
			//user inputs
			$class_id =  $_POST['class_id'];
			$subject = @$_POST['subject_name'];
			$student_id = $rowz['student_id'];
			$class_id = mysql_real_escape_string(htmlentities($class_id));
			$subject_id = mysql_real_escape_string(htmlentities(@$_POST['subject_name']));
			$student_id = mysql_real_escape_string(htmlentities($student_id));
			$t1 = mysql_real_escape_string(htmlentities($_POST['t1']));
			$t2 = mysql_real_escape_string(htmlentities($_POST['t2']));
			$t3 = mysql_real_escape_string(htmlentities($_POST['t3']));
			if(grades($class_id, $student_id, $subject_id) == true){
				$errors[] = "The marks have already been inputed";
			}else{
			$query = "INSERT INTO marks (subject_id,class_id,test1,test2,test3,student_id) VALUES ('{$subject_id}','{$class_id}','{$t1}','{$t2}','{$t3}','{$student_id}')";
			$result = mysql_query($query) or die(mysql_error());
			
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