<?php
	$email = $_SESSION['email'];
	if(isset($email)){
		$query = "SELECT * FROM admin WHERE email='$email'";
		$query_run = mysql_query($query);
		$query_row= mysql_fetch_array($query_run);
		$firstname= $query_row['level'];	
		$lastname = $query_row['username'];
	}
	
	
	?>
		

	
								
																 <div class="clearfix"> </div>
														</div>
											
											  <!--//tabs-inner-->
									
										<!--//tabs-->
									</div>
								<!--//outer-wp-->
									 <!--footer section start-->
										<footer>
										   <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="" target="_blank">KInginSoft.</a></p>
										</footer>
									<!--footer section end-->
								</div>

				<div class="sidebar-menu">
					
					<header class="logo">
						 
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href=""> <span id="logo"> <h1>SmS</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
								
							  <a href="index.php"><?php echo $firstname.' '.$lastname; ?><span class=" name-caret"></span></a>
									 <p>Admin</p>
									 
									<ul>
									<li><a class="tooltips" href="index.html"><span>Profile</span><i class="fa fa-user"></i></a></li>
										<li><a class="tooltips" href="settings.php"><span>Settings</span><i class="fa fa-cog"></i></a></li>
										<li><a class="tooltips" href="logout.php"><span>Log out</span><i class="fa fa-sign-out"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
							   <div class="menu">
									<ul id="menu" >
									<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
									 <li><a href="index.html"><i class="glyphicon glyphicon-education"></i> <span>Students</span><span class="fa fa-angle-right" style="float: right"></span></a>
 										<ul>
										<li><a href="admit_bulkstd.php"><i class="	glyphicon glyphicon-file"></i> Admit Bulk students</a></li>
										<li><a href="admit_std.php"><i class="glyphicon glyphicon-registration-mark"></i>Admit student</a></li>
										<li><a href="std_info.php"><i class="fa fa-pencil-square-o"></i>Student infomation</a></li>
											<li><a href="student_admin.php"><i class="fa fa-pencil-square-o"></i>Prefects</a></li>
										</ul>
										</li>
									  <li><a href=""><i class="fa fa-users"></i> <span>Teachers</span><span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
									  	<li><a href="teachers.php"><i class="glyphicon glyphicon-registration-mark"></i> <span>Input New Teacher</span></a></li>
									  	<li><a href="teacher_info.php"><i class="glyphicon glyphicon-exclamation"></i> <span>Teachers Information</span></a></li>
									  </ul>
									  <li><a href="std_posts.php"><i class="glyphicon glyphicon-stats"></i> <span>Student Bodies</span></a></li> 
									  </li>
									    <li><a href=""><i class="fa fa-"></i> <span>Messages</span><span class="fa fa-angle-right" style="float: right"></span></a>
 									<ul>
										<li><a href="inbox.php"><i class="fa fa-inbox"></i> <span>Inbox</span></a></li>
										<li><a href="compose_mail.php"><i class="fa fa-pencil-square-o"></i> <span>Compose Mail</span></a>
									 </ul>
								</li>
									  <li><a href=""><i class="	glyphicon glyphicon-list-alt"></i> <span>Classes</span><span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
									  	
									  	<li><a href="classes.php"><i class="glyphicon glyphicon-blackboard"></i> <span>Manage Classes</span></a></li>
									  	<li><a href="class_routine.php"><i class="glyphicon glyphicon-hourglass"></i> <span>Class Routine</span></a></li>
									  </ul>
									  </li>
									<li><a href="subject.php"><i class="glyphicon glyphicon-stats"></i> <span>Mark Sheet</span></a></li> 
									<li><a href="subject.php"><i class="glyphicon glyphicon-pencil"></i> <span>Subject</span></a></li>
									<li><a href="attendance.php"><i class="glyphicon glyphicon-bookmark"></i> <span>Daily Attendance</span></a></li>
							
									<li><a href="noticeboard.php"><i class="glyphicon glyphicon-bell"></i> <span>Notice Board</span></a></li>
									
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="../js/jquery.nicescroll.js"></script>
<script src="../js/scripts.js"></script>
<script src="../js/script.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="../js/bootstrap.min.js"></script>
</body>
</html>