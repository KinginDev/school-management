<?php
include '../../includes/conn.php';
?>
<?php
	include '../../functions/functions.php';
		
	if(isset($_POST)){
		$errors = array();
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$email = $_POST['email'];
		$username = $_POST['uname'];
		$phone = $_POST['phone'];
		$password = $firstname;
		
		$sex = $_POST['sex'];
		$fathers = $_POST['fathers'];
		$mothers = $_POST['mothers'];
		$address = $_POST['address'];
		$class = $_POST['class'];
		$date_of_addmission = $_POST['date'];
		$birthday = $_POST['birthday'];
		$blood_grp = $_POST['bld_grp'];
		$religion  = $_POST['rel'];
	$houses = array('Blue','Red','Yellow','Green');
 	$house =random_house($houses);
	$message_id = message_id(10);
	
		
		//getting the image field
		if(isset($_FILES["img"])){
		$image = $_FILES["img"]["name"];
		$image_tmp =$_FILES["img"]["tmp_name"];
		$image_type = $_FILES["img"]["type"];
      	$image_size = $_FILES["img"]["size"];
			if(empty($_FILES["img"])){
	$errors = "Image must be filled";
	}
			if(($_FILES["img"]["type"] == "image/jpg") || ($_FILES["img"]["type"] == "image/jpeg" )|| ($_FILES["img"]["type"] == "image/gif" )|| ($_FILES["img"]["type"] == "image/png")) {
		if($image_size >= 10000){
			 move_uploaded_file($image_tmp,"../../../student_images/$image");
		}else{
		$errors[] = 'image size too large';
		}
	}else{
		$errors[] = 'image type invalid';
		}
			
		
		}
		// imgae field ends
		
		if(empty($firstname)){
			$errors[] = 'The firstname field must be filled';
		}
		elseif(empty($lastname)){
			$errors[] = 'The lastname field must be filled';
		}
if(empty($username)){
			$errors[] = 'The username field must be filled';
		}

//email verification
if (empty($email)) {
	$errors[] = 'The email field canot be empty';
	}
if(email_exist($_POST['email'])){
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
	add_student($firstname, $lastname, $username, $email, $password, $sex, $religion, $class, $mothers, $fathers, $birthday, $blood_grp, $phone, $date_of_addmission, $address, $image,$house,$message_id);
}
	}
	  
	?>
							<!--//outer-wp-->
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