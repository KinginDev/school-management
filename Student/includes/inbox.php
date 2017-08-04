<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
	include 'functions/functions.php';
?>
<?php
$errors = array();
if(isset($_GET['delete_conversation'])){
	if(validate_conversation_id($_GET['delete_conversation']) === false){
		$errors[] = 'invalid conversation ID';
	}
	if(empty($errors)){
		delete_conversation($_GET['delete_conversation']);
	}
}

	
	$conversations = fetch_conversation_summary();
	
	
?>				<!--//outer-wp-->
								<div class="outter-wp">
								<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.html">Home</a></li>
															<li class="active">Inbox</li>
														</ol>
											</div>	
										<!--/sub-heard-part-->		
									<!--/inbox-->
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
											<h2>Compose</h2>
														<nav class="nav-sidebar">
														<ul class="nav tabs">
														  <li class="active"><a href="#tab1" data-toggle="tab"><i class="fa fa-inbox"></i>Inbox <span>9</span><div class="clearfix"></div></a></li>
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
														<div class="tab-pane active text-style" id="tab1">
														  <div class="inbox-right">
																	
												<div class="mailbox-content">
												   <div class="mail-toolbar clearfix">
													 <div class="float-left">
													   <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
																	<div class="btn-group">
																		<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
																		<ul class="dropdown-menu dropdown-menu-right" role="menu">
																			<li><a href="#">Social</a></li>
																			<li><a href="#">Forums</a></li>
																			<li><a href="#">Updates</a></li>
																		   
																			<li><a href="#">Spam</a></li>
																			<li><a href="#">Trash</a></li>
																		   
																			<li><a href="#">New</a></li>
																		</ul>
																	</div>
																	<div class="btn-group">
																		<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
																		<ul class="dropdown-menu dropdown-menu-right" role="menu">
																			<li><a href="#">Work</a></li>
																			<li><a href="#">Family</a></li>
																			<li><a href="#">Social</a></li>
																		   
																			<li><a href="#">Primary</a></li>
																			<li><a href="#">Promotions</a></li>
																			<li><a href="#">Forums</a></li>
																		</ul>
																	</div>
																</div>
														
														
													</div>
													<div class="float-right">
									<div class="dropdown">
			            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
			                <i class="fa fa-cog icon_8"></i>
			                <i class="fa fa-chevron-down icon_8"></i>
			            <div class="ripple-wrapper"></div></a>
			            <ul class="dropdown-menu float-right">
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-pencil-square-o icon_9"></i>
			                        Edit
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-calendar icon_9"></i>
			                        Schedule
			                    </a>
			                </li>
			                <li>
			                    <a href="#" title="">
			                        <i class="fa fa-download icon_9"></i>
			                        Download
			                    </a>
			                </li>
			               
			                <li>
			                    <a href="#" class="font-red" title="">
			                        <i class="fa fa-times" icon_9=""></i>
			                        Delete
			                    </a>
			                </li>
			            </ul>
			        </div>
                        
			        
			    </div><style>
			    	.unread{
			    		font-weight:bolder;
			    	}
			    </style>
				
               </div>
                <table class="table">
                    <tbody>
                        <tr class="table-row">
                        	
                            	                            	<?php
                            	                            	
                            	                            	
									foreach($conversations as $conversation){
													
												?>
                            <td class="table-img">
												<div class="<?php if($conversation['unread_messages']) echo "lead";?>">
                               <a href="inbox.php?delete_conversation=<?php echo $conversation['id']; ?>">[x]</a>
                            </td>
                            <td class="table-text">
                            	<h6><?php echo $conversation['subject']; ?></h6>
                                <p></p>
                            </td>
                            <td>
                            	<span class="fam">Family</span>
                            </td>
                            <td class="march">
                              <?php echo date('d/m/y H:I:S', $conversation['last_reply']); ?> 
                            </td>
                          
                             <td >
							 <i class="fa fa-star-half-o icon-state-warning"></i>
                                
                            </td>
                            </div>
                           </tr> 
                      <?php  }?>
                    </tbody>
                </table>
               </div>
            </div>
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
