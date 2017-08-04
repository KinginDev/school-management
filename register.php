
<?php
include 'functions/functions.php';

$errors = array();
if (isset($_POST['register'])){
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$type = $_POST['type'];
	$repeat_pass = $_POST['r_pass'];
	if(isset($fistname) && isset($lastname) && isset($email) && isset($password) && isset($repeat_pass)) {
		if(empty($lastname)){
			$errors[] = 'The Lastname Field cannot be empty';
		}
		if(empty($firstname)){
			$errors[] = 'The Firstname Field cannot be empty';
		}
		if(empty($password)){
			$errors[] = 'The Password Field cannot be empty';
		}
		if(empty($repeat_pass)){
			$errors[] = 'The Repeat Password Field cannot be empty';
		}
		if(empty($type)){
			$errors[] = 'The type Field cannot be empty';
		}
		if($password !== $repeat_pass){
			$errors[] = 'Password verification failed';
		}
			if(empty($errors)){
		add_user($firstname, $lastname, $email, $password, $type);
		
		$_SESSION['email']= htmlentities($email);
		
	if(isset($email)){
		login_type($email, $type);
		die();
	}
}
	}
	
	
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												<?php
												
												if(empty($errors) == false){
													?>
													<ul>
													<?php
													
													foreach ($errors as $errors) {
														echo "<li>{$errors}</li>";
													}
													
													?>
													</ul>
													<?php
												}
												
												?>
													<div class="error-top">
													<h2 class="inner-tittle page">Augment</h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Register</h3>
																<form action="" method="post" enctype="multipart/form-data">
																		<input type="text" class="text" placeholder="FirstName" name="fname" >
																		<input type="text" class="text" placeholder="LastName" name="lname"  ><br> <br> 
																		<input type="text"  value="E-mail address" name="email" ><br> 
																		<select  name="type" class="form-control" <br> 
																			<option>Regsiter as</option>
																			<option value="1">Admin</option>
																			<option value="2">Teacher</option>
																			<option value="3">Student</option>
																			<option value="4">parent</option>
																		</select>
																		<input type="password" placeholder="Password" name="pass" >
																		<input type="password" placeholder="Password" name="r_pass" >
																		<div class="sign-up">
																					<input type="reset" value="Reset">
																					<input type="submit" name="register" value="Register">
																			
																		</div>
																		<div class="clearfix"></div>
																		
																		<div class="new">
																			<p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>I agree with the terms</label></p>
																			<p class="sign">Already register ? <a href="login.html">Login</a></p>
																			<div class="clearfix"></div>
																		</div>
																	</form>
														</div>
														
													</div>
													 </div>
												<!--//login-top-->
										  
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
										          <div class="error-btn">
															<a class="read fourth" href="index.html">Return to Home</a>
															</div>
										   <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>