<?php
include 'includes/conn.php';
include_once 'functions/functions.php';

if(isset($_POST)){
	$errors = array();
	$email = $_POST["email"];
	@$password = $_POST["password"];
	
	
	if(empty($email)){
	echo "error1";
	}
	if (empty($password)) {
		echo "error2";
}
	
	if(empty($errors)){
	$email = mysqli_real_escape_string($conn,$email);
	$password = sha1($password);
	$query ="SELECT email,level,admin_id,message_id FROM admin WHERE email='$email' AND password='$password'
	UNION
			SELECT email,level,teacher_id,message_id FROM teachers WHERE email='$email' AND password='$password'
	UNION
			SELECT email,level,student_id,message_id FROM students WHERE email='$email' AND password='$password'
	";
	$result =  mysqli_query($conn,$query) or die(mysqli_error($conn));
	$row = mysqli_fetch_assoc($result);
	$level = $row['level'];
	$email = $row['email'];
	$message_id = $row['message_id'];
	 $num = mysqli_num_rows($result);
	if($num >= 1){
	if($level == 1){
		$_SESSION['email']=$email;
		$_SESSION['level']=$level;
		$_SESSION['message_id'] = $message_id;
		echo "admin";
			
		}
elseif ($level == 2) {
		$_SESSION['email']=$email;
		$_SESSION['level']=$level;
		$_SESSION['message_id'] = $message_id;
		echo "teacher";
}
elseif ($level == 3) {
	$_SESSION['email']=$email;
	$_SESSION['level']=$level;
	$_SESSION['message_id'] = $message_id;
	echo 'student';
}
	}else{
		echo "error3";
	}
}
	echo json_encode($errors);
}
?>