<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
?>
<?php

	
	?>
	
	
	
	
							<!--//outer-wp-->
									<div class="outter-wp">
									<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.html">Home</a></li>
															<li class="active">Calender</li>
														</ol>
											</div>	
											<!--/sub-heard-part-->	
											
												<!--//custom-widgets-->
												<div class="outer-wp">
													 <div class="inbox-mail">
									<div class="col-md-4 compose">
										<form action="#" method="GET">
												<div class="input-group input-group-in">
													<input type="text" name="search" class="form-control2 input-search" placeholder="Search...">
													<span class="input-group-btn">
														<button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
													</span>
												</div><!-- Input Group -->
											</form>
											<?php echo $_SESSION['message_id']; ?>
											<h2>Compose</h2>
														<nav class="nav-sidebar">
														<ul class="nav tabs">
														  <li class="active"><a href="inbox.php" ><i class="fa fa-inbox"></i>Inbox <span>9</span><div class="clearfix"></div></a></li>
														  <li class=""><a href="#tab2" data-toggle="tab"><i class="fa fa-share-square-o"></i> Sent</a></li>
														  <li class=""><a href="#tab3" data-toggle="tab"><i class="fa fa-star-o"></i>Important</a></li> 
														  <li class=""><a href="#tab4" data-toggle="tab"><i class="fa fa-pencil-square-o"></i>Draft <span>6</span><div class="clearfix"></div></a></li>  
														  <li class=""><a href="#tab5" data-toggle="tab"><i class="fa fa-trash-o"></i>Delete</a></li>                              
														</ul>
													</nav>
																<div class="content-box">
																	<ul>
																	<li><span>Folder</span></li>
																	<li><a href="#"><i class="fa fa-folder-o"></i>Tasks</a></li>
																	<li><a href="#"><i class="fa fa-folder-o"></i>Jobs</a></li>
																	<li><a href="#"><i class="fa fa-folder-o"></i>Client</a></li>
																	</ul>
																</div>
															
														</div>
														<!-- tab content -->
														<div class="col-md-8 tab-content tab-content-in">
														  <div class="inbox-right">
																	
															<div class="mailbox-content">
																		<!--Compose New Message -->
																<div class="compose-mail-box">
																		<div class="compose-bg">
																			Compose New Message 
																		</div>
																		<div class="panel-body">
																			<script>
																				
																		function username(){
																			var to = $('#to').val();
																		$.ajax({
																			url: "ajaxcall/ins_msg.php",
																			method: "POST",
																			data: 'to='+to,
																			success:function(data){
																				$('#recid').val(data);
																			}
																		});
																		}
																
																</script>
																			<div id="resl"></div>
																		<form class="com-mail" action="" method="POST" id="add_msg">
																					<input type='hidden' id="recid">
																					<input type='hidden' id="senid" data-id="<?php echo $_SESSION['message_id']; ?>">
																					<input type="text" id="to" onkeyup="username()" onclick="username()" class="form-control1 control3" name="to" placeholder="To :">
																					<input type="text" id="subject" class="form-control1 control3" name="subject" placeholder="Subject :">
																					
																					<textarea rows="6" id="body" class="form-control1 control2"  name="body" placeholder="Message :"></textarea>

																					<input type="submit" value="Send Message" name="submit"> 
																				</form>
																		</div>
																	</div>
																<!--//Compose New Message -->
														   </div>
														</div>
													</div>

													<div class="clearfix"> </div>
										   </div>
											
										</div>

		<div>
			
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
<script>
	
	
	$(document).on('submit','#add_msg',function(e){
		var to = $('#to').val();
		var body = $('#body').val();
		var subject = $('#subject').val();
		var recid = $('#recid').val();
		var senid = $('#senid').data('id');
		data = {'to':to,'body':body,'subject':subject,'recid':recid,'senid':senid};
		console.log(data);
		e.preventDefault();
		$.ajax({
			url: 'ajaxcall/messgage/compse_msg.php',
			method: "POST",
			data:data,
			success:function(data){
				$('#resl').html(data);
			}
		});
	});
	$(document).on('submit','#add_msg',function(e){
			var to = $('#to').val();
$.ajax({
url: "ajaxcall/ins_msg.php",
method: "POST",
data: 'to='+to,
success:function(data){
$('#recid').val(data);
}
});
});
</script>



