<?php
	$email = $_SESSION['email'];
	if(isset($email)){
		$query = "SELECT * FROM teachers WHERE email='$email'";
		$query_run = mysql_query($query);
		$query_row= mysql_fetch_array($query_run);
		$firstname= $query_row['firstname'];	
		$lastname = $query_row['lastname'];
		 $images = $query_row['images'];
	}
	
	
	?>
		

	
								
																 <div class="clearfix"> </div>
														</div>
											
											  <!--//tabs-inner-->
									
										<!--//tabs-->
									</div>
								<!--//outer-wp-->
									 <!--footer section start-->
										
										  
									<!--footer section end-->
								</div>

				<div class="sidebar-menu">
					
					<header class="logo">
						 
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>SmS</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
						
								
							 <div class="down">	
									
									<ul>
									<li><a class="tooltips" href="profile.php"><span>Profile</span><i class="fa fa-user"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Settings</span><i class="fa fa-cog"></i></a></li>
										<li><a class="tooltips" href="logout.php"><span>Log out</span><i class="fa fa-sign-out"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
							   <div class="menu">
									<ul id="menu" >
									<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
									 <li><a href="mystudent.php"><i class="	fa fa-users"></i> <span>My Students</span></a>
										</li>
									  <li><a href="teacher.php"><i class="glyphicon glyphicon-education"></i> <span>Teachers</span></a>
									  
									  </li>
									   <li><a href="study_mat.php"><i class="glyphicon glyphicon-book"></i> <span>Study Materials</span></a>
									  <li><a href="subject.php"><i class="glyphicon glyphicon-pencil"></i> <span>Subject</span></a>
									 
									  </li>
									 
									
									<li><a href="grades.php"><i class="glyphicon glyphicon-stats"></i> <span>Grades</span></a></li>
									
									<li><a href="noticeboard.php"><i class="glyphicon glyphicon-bell"></i> <span>Noticeboard</span></a></li>
									<li><a href="attendance.php"><i class="	glyphicon glyphicon-bookmark"></i> <span>Daily Attendance</span></a></li>
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
								$("#menu span").css({"position":"s"});
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
<!-- Bootstrap Core JavaScript -->
   <script src="../js/bootstrap.min.js"></script>
</body>
</html>