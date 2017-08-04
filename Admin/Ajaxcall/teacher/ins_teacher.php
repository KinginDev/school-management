<?php

?>
<?php
	include '../../functions/functions.php';
	if(isset($_POST['fname'])){
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $firstname;
		$phone= $_POST['phone'];
		$dob = $_POST['dob'];
		$message_id = message_id(10);
		$employment = $_POST['employment'];
		$religion = $_POST['religion'];
		$blood_grp = $_POST['bldgrp'];
		$address = $_POST['address'];
		$sex = $_POST['sex'];
		$level = 2;
		$errors = array();
		if(isset($_FILES["img"])){
		$image = $_FILES["img"]["name"];
		$image_tmp =$_FILES["img"]["tmp_name"];
		$image_type = $_FILES["img"]["type"];
      	$image_size = $_FILES["img"]["size"];
		if(empty($_FILES["img"]['name'])){
		$errors[] = "Image must be filled";
		}else{
			$extension = end(explode(".",$_FILES['img']['name']));
			$allowed_type = array('jpg','jpeg','gif','png',);
			if(in_array($extension, $allowed_type)){
				$new_name = $_FILES["img"]["name"];
				$path = "../../teacher_images/". $new_name;
			
				move_uploaded_file($image_tmp, $path);
					
					
			if($image_size <= 5000)
			{
				$errors[] = 'image size too large, The image is';			}
		}
		
			
		
		}
		
			
		
		}
		if(empty($firstname)){
			$errors[] = "The Firstname field cannot be empty";
		}
		if(empty($lastname)){
			$errors[] = 'The Lastname field cannot be empty';
		}
		if(empty($email)){
			$errors[] = "The email field cannot be empty";
			
		}
		if(email_exist_teachers($email)){
				$errors[] = "The email you given already exists";
			}
		
		if(empty($phone)){
			$errors[] = "The Phone number cannot be empty";
			
		}
		if(phone_exist_teachers($phone)){
				$errors[] = "The Phone number given already exists";
			}
		if(empty($dob)){
			$errors[] = "The date of birth field cannot be empty";
		}
		
		if(empty($employment)){
			$errors[] = "The employment date must be filled";
		}
		if(empty($religion)){
			$errors[] = "The must input a religion";
		}
		if(empty($sex)){
			$errors[] = "Male or Female ?";
		}
		if(empty($address)){
			$errors[] = "Where do you live";
		}
		
		if(empty($blood_grp)){
			$errors[] = 'What is your blood group?';
		}
if(empty($errors)){
	addTeacher($firstname, $lastname, $email, $password, $phone, $dob, $employment, $religion, $blood_grp, $address, $sex,$image,$level,$message_id);
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