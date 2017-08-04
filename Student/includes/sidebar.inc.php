	
	
	<?php
	$email = $_SESSION['email'];
	if(isset($email)){
		$query = "SELECT * FROM students WHERE email='$email'";
		$query_run = mysql_query($query);
		$query_row= mysql_fetch_array($query_run);
		$firstname= $query_row['firstname'];	
		$lastname = $query_row['lastname'];
	}
	
	
	?>
	
	<!--/sidebar-menu-->
	
								
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
						 
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>SmS</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="index.html"><img src="../student_images/<?php echo $query_row['images'];?>"></a>
									  <a href="index.html"><span class=" name-caret"><?php echo $firstname.' '.$lastname; ?></span></a>
									 <p>Students Profile</p>
									 
									<ul>
									<li><a class="tooltips" href="index.html"><span>Profile</span><i class="fa fa-user"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Settings</span><i class="fa fa-cog"></i></a></li>
										<li><a class="tooltips" href="logout.php"><span>Log out</span><i class="fa fa-sign-out"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
							      <div class="menu">
									<ul id="menu" >
									<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
									 <li><a href="mystudent.php"><i class="	fa fa-users"></i> <span>Quizes</span></a>
										</li>
									  <li><a href="class_routine.php"><i class="glyphicon glyphicon-education"></i> <span>Class Routine</span></a>
									  
									  </li>
									   <li><a href=""><i class="fa fa-"></i> <span>Messages</span><span class="fa fa-angle-right" style="float: right"></span></a>
 									<ul>
										<li><a href="inbox.php"><i class="fa fa-inbox"></i> <span>Inbox</span></a></li>
										<li><a href="compose_mail.php"><i class="fa fa-pencil-square-o"></i> <span>Compose Mail</span></a>
									 </ul>
								</li>
									   <li><a href="study_mat.php"><i class="glyphicon glyphicon-book"></i> <span>Study Materials</span></a>
									  <li><a href="subject.php"><i class="glyphicon glyphicon-pencil"></i> <span>Subjects</span></a>
									 
									  </li>
									<li><a href="mygrades.php"><i class="glyphicon glyphicon-stats"></i> <span>Marksheet</span></a></li>
									
									<li><a href="noticeboard.php"><i class="glyphicon glyphicon-bell"></i> <span>Noticeboard</span></a></li>
									<li><a href="attendance.php"><i class="	glyphicon glyphicon-bookmark"></i> <span>Daily Attendance</span></a></li>
								</div>
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
<!-- Bootstrap Core JavaScript -->
   <script src="../js/bootstrap.min.js"></script>
</body>
</html>