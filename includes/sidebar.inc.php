	<!--/sidebar-menu-->
				<div class="sidebar-menu">
					
					<header class="logo">
						 
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>SmS</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="index.html"><img src="../images/admin.jpg"></a>
									  <a href="index.html"><span class=" name-caret">Jasmin Leo</span></a>
									 <p>Students profile</p>
									<ul>
									<li><a class="tooltips" href="index.html"><span>Profile</span><i class="fa fa-user"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Settings</span><i class="fa fa-cog"></i></a></li>
										<li><a class="tooltips" href="index.html"><span>Log out</span><i class="fa fa-sign-out"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
							   <div class="menu">
									<ul id="menu" >
									<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
									<li><a href="index.html"><i class="fa fa-users"></i> <span>Teacher</span></a></li>
									<li><a href="index.html"><i class="fa fa-"></i> <span>Subject</span></a></li>
									<li><a href="index.html"><i class="fa fa-tablet"></i> <span>Class Routine</span></a></li>
									<li><a href="index.html"><i class="fa fa-board"></i> <span>Notice Board</span></a></li>
									<li><a href="index.html"><i class="fa fa-mail"></i> <span>Message</span></a>
 <ul>
										<li><a href="inbox.html"><i class="fa fa-inbox"></i> Inbox</a></li>
										<li><a href="compose.html"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
										
									
									  </ul>
									</li>
									<li><a href="typography.html"><i class="fa fa-score"></i> <span>Exam marks</span></a></li>
									<li><a href="#"><i class="fa fa-book"></i> <span>Study Material</span> </li>
										<li><a href="#"><i class="fa fa-user-md"></i> <span>Accounts</span> </li>
									
										
								  </ul>
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
<script src="/js/jquery.nicescroll.js"></script>
<script src="/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="/js/bootstrap.min.js"></script>
</body>
</html>