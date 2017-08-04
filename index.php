<!DOCTYPE html>
<html>
<head>
	<title>Sign In And Sign Up Forms a Flat Responsive Widget Template :: w3layouts</title>
	<link rel="stylesheet" href="css/style_index.css">
	<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="../css/font-awesome.css" rel="stylesheet"> 
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Sign In And Sign Up Forms  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script><script src="js/jquery.min.js"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>

	<style>
		.alert {
  padding: 15px;
  margin-bottom: 17px;
  border: 1px solid transparent;
  border-radius: 4px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable {
  padding-right: 35px;
}
.alert-dismissable .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #3c763d;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #31708f;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  background-color: #fcf8e3;
  border-color: #faebcc;
  color: #8a6d3b;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  background-color: #f2dede;
  border-color: #ebccd1;
  color: #a94442;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
	</style>	
</head>
<body>
	<h1>Sign In And Sign Up Forms</h1>
	<div class="w3layouts">
		<div class="signin-agile">
			<div class="container">
			<div id="msg"></div>
			</div>
			<form action="#" method="post" id="login_form">
				<input type="text" name="name" class="name" id="email" placeholder="Username" required="">
				<input type="password" name="password" class="password"id="password" placeholder="Password" required="">
				<ul>
					<li>
						<input type="checkbox" id="brand1" value="">
						<label for="brand1"><span></span>Remember me</label>
					</li>
				</ul>
				<a href="#">Forgot Password?</a><br>
				<div class="clear"></div>
				<button type="submit" value="Login" id="submit">Login</button>
			</form>
		</div>
		
		<div class="signup-agileinfo">
			<center>
			<div style="display: block; margin-top:-20px; ">
				<img src="images/admin.jpg" width="150px" height="150px" style=" border-radius: 90px !important;" >
			</div>

			<h3>School Name</h3>
			<p>Little information about school i.e location address, email, .</p>
			</center>			
		</div>
		<div class="clear"></div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> &copy; 2016 Sign In And Sign Up Forms . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>

<body>
</html>
    <script>
    	$(document).on('submit','#login_form',function(e){
    		e.preventDefault();
    		var email = $('#email').val();
    		var password = $('#password').val();
    		$('#submit').html("Logging in.......");
    		$.ajax({
    			url: 'login.ajax.php',
    			method: 'POST',
    			data:{email:email,password:password},
    			success:function(data){
    				if(data == 'admin[]'){
    					window.location='admin';
    				}
    				if(data == 'teacher[]'){
    					window.location='teachers';
    				}
    				if(data == 'student[]'){
    					window.location='student';
    				}
    				
    				if(data == 'error3[]'){
    				$('#msg').html("<div class='alert alert-danger'>username/password incorrect <span><i class='fa fa-close'></i><span></div>");
    				$("#msg").fadeTo("slow", 1.4);
    					$('#submit').html('Login');
    				}
    			}
    		})
    		
    	});
    	
    </script>