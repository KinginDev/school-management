<?php include '../../includes/conn.php'; 
include '../../functions/functions.php';
?>
<?php
$errors = array();
 if(!empty($_FILES['student_csv']['name'])){
 	$allowed_ext = array("csv");
	$exetension = end(explode(".",$_FILES['student_csv']['name']));
	if(in_array($exetension, $allowed_ext)){
		$file_data = fopen($_FILES['student_csv']['tmp_name'],"r");
		fgetcsv($file_data);
		while($row =  fgetcsv($file_data)){
				$firstname = mysql_real_escape_string($row[0]);
				$lastname = mysql_real_escape_string($row[1]);
				$username = mysql_real_escape_string($row[2]);
				$password = mysql_real_escape_string($firstname);
				$sex = mysql_real_escape_string($row[4]);
				$blood_grp = mysql_real_escape_string($row[5]);
				$phone = mysql_real_escape_string($row[6]);
				$email = mysql_real_escape_string($row[7]);
				$mothers = mysql_real_escape_string($row[8]);
				$fathers = mysql_real_escape_string($row[9]);
				$class = mysql_real_escape_string($row[10]);
				$religion = mysql_real_escape_string($row[11]);
				$address = mysql_real_escape_string($row[12]);
				$birthday = mysql_real_escape_string($row[13]);
				$date_of_addmission = mysql_real_escape_string($row[14]);
				$level = mysql_real_escape_string(3);
				$houses = array('Blue','Red','Yellow','Green');
 				$house =mysql_real_escape_string(random_house($houses));
				if (empty($email)) {
	$errors[] = 'The email field canot be empty';
	}
if(email_exist($email)){
	$errors[] = 'Email already exist';
}
if(username_exist($username)){
	$errors[] = "The user name given already exist";
}

if (empty($sex)) {
	$errors[] = 'The sex filed cannot be empty';
	
}
if (empty($fathers) && empty($mothers)) {
	$errors[] = 'The Parents field must be filled up completly';
}		
if (empty($date_of_addmission)) {
	$errors[] = 'The date of admission field must be filled';
}
if (empty($birthday)) {
	$errors[] = 'Birthday field must be filled';
	
}	
if (empty($religion)) {
	$errors[] = 'You must add a religion';
}
if(empty($class)) {
	$errors[] = "The class field cannot be empty";
}
	
if (empty($blood_grp)) {
	$errors[] = 'The blood group cannot be empty';
}

//email verification ends

if(empty($errors)){
				add_student($firstname, $lastname, $username, $email, $password, $sex, $religion, $class, $mothers, $fathers, $birthday, $blood_grp, $phone, $date_of_addmission, $address, @$image, $house);
				
		}
		}
	}else{
		$errors[] = "Error 1";
	}
 }else{
 	$errors[] = 'Error2';
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