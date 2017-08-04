<!DOCTYPE HTML>
<html>
<head>
	<?php
	
	include 'includes/conn.php';
	include 'fetch.php';
	session_start();
	$email = $_SESSION['email'];
	$query = "SELECT * FROM teachers WHERE email='$email'";
	$result = mysql_query($query);
	$message_id = $_SESSION['message_id'];	
	$row  = mysql_fetch_array($result);	
	$firstname= $row['firstname'];	
	$lastname = $row['lastname'];
	$images = $row['images'];
	if(!isset($_SESSION['email'])){
		echo "<meta http-equiv=\"refresh\" content=\"0; url=http:/localhost/school management\">";
	}elseif($_SESSION['level'] != $row['level']){
		echo "<meta http-equiv=\"refresh\" content=\"0; url=http:/school management\">";
	}
	?>
<title>School Management System for Schools | ::Kinginsoft</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style2.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="../css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="../js/jquery-1.12.4.min.js"></script>

<!-- favicon -->
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<link rel="icon" href="../favicon.ico" type="image/x-icon">
<!--Calender-->
<link rel="stylesheet" href="../css/clndr.css" type="text/css" />
<script src="../js/underscore-min.js" type="text/javascript"></script>
<script src= "../js/moment-2.2.1.js" type="text/javascript"></script>
<script src="../js/clndr.js" type="text/javascript"></script>
<script src="../js/site.js" type="text/javascript"></script>
<script src="../js/chart.js" type="text/javascript"></script>
  <script type="text/javascript">
            
            function findmatch(){
                if (window.XMLHttpRequest) {
                  xmlhttp = new XMLHttpRequest();  
                }else{
                   xmlhttp = new ActiveXObject ('Microsoft.XMLHTTP');
                }
                
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('autosuggestcontainer').innerHTML = xmlhttp.responseText;
                    }
                }
xmlhttp.open('GET','fetch.php?autosuggest='+document.search.autosuggest.value, true);
                xmlhttp.send();
                
            }
        
        </script>
          <script>
     
						
        </script>
<!--End Calender-->
<!--clock init-->

</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form id="search" name="search" > 
											   <input type="text" onkeyup="findmatch();"  value="Search" name="autosuggest" id="autosuggest" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
																				<div id="autosuggestcontainer" >
																					<div class="autosuggest"></div>
																					
																				</div>
											</form>
									<div class="close"><img src="../images/cross.png" /></div>
								</div>
								
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
	
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
											  
																		<script type="text/javascript">
			
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>
										
										</li>
									
										<li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

												
													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3> 
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="../images/1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet</p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="../images/in.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>	
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="../images/in1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div> 
														</li>
													</ul>
										</li>
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="glyphicon glyphicon-bell"></i> <span class="badge count"></span></a>
									<ul class="dropdown-menu two" id="notif">
										 
									
									</ul>
							</li>	
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="glyphicon glyphicon-user"></i></a>
										
										<ul class="dropdown-menu two">
											<center>
										<li>
											<div style="display: inline-block;">
											 <a href="index.html"><img class="img-rounded img-responsive" src="../teacher_images/<?php echo $images; ?>" width="80px" height="80px"></a>
									  <a href="index.html"><span class=" name-caret"><?php echo $firstname.' '.$lastname;?></span></a>
									 <p>Teachers Profile</p>
									 
										</div>
										</center>
										</li>
										
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
				</div>
				<script>
		
function load_unseen_notification(view = ''){
	
				$.ajax({
					url: "ajaxcall/view_notif_header.php",
					method: "POST",
					data:{view:view},
					dataType :"json",
					success:function(data){
						$('#notif').html(data.notification);
						if(data.unseen_notification > 0){
							$('.count').html(data.unseen_notification);
						}
						
					}
				})
			}
load_unseen_notification();
$(document).on('click', '.notif' ,function(){
	$('.count').html('');
	load_unseen_notification('yes');

setInterval(function(){
	load_unseen_notification();
}, 5000);
});
 
		</script>