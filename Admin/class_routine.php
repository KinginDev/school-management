<?php
ob_start();
include_once 'includes/header.inc.php';
include 'includes/conn.php';
include 'functions/functions.php';
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
														<div class="clearfix"> </div>	
												<!--//custom-widgets-->
									
												<div class="graph-visual tables-main">

												
											
													<div class="graph">
														<div class="tables">
																<ul class="nav nav-tabs">
												
  <li id="view" class="active"><a data-toggle="tab" href="#home"><span style="padding-right: 4px;"><i class="glyphicon glyphicon-eye-open"></i></span>View Routine</a></li>

  <li id="add"><a data-toggle="tab" href="#add"><span><i class="fa fa-plus-circle" style="padding-right: 4px; cursor: pointer;"></i></span>Add Routine</a></li>
  
</ul>
<div class="tab-content">
	<!-- tab 1-->
  <div id="home" class="tab-pane fade in active">
 <div id="modal-loader" style="display: none; text-align: center;">
                       	   	<img src="../images/preloader.gif">
                       	   </div>
	<div id="results"></div>
</div>
<div id="add" class="tab-pane fade in active">
	<div id="results_add"></div>
		<div class="clearfix"></div>
											</div>
											
			</div></div>
	</div>
	</div>
</div>
</div>
<div class="clearfix"></div>

		</div>
		<!---//-->
	</div> 
</div>
</div>
</div>
													
																
<div>
<?php 
	include 'includes/sidebar.inc.php';
?>
</div>
<script>
load_view();
$(document).on('click','#add',function load_view(e){
	$('#modal-loader').show();
	 	$('#results').html('');
	 	$.ajax({
	 		url: 'ajaxcall/class_routine/addclass_rot.php',
	 		method: 'POST',
	 		cache:false,
	 		success:function(data){
	 			$('#modal-loader').hide();
	 			$('#results').html(data);
	 		
	 		}
})
});
$(document).on('click','#view',function load_view(e){
	$('#modal-loader').show();
	 	$('#results').html('');
	 	$.ajax({
	 		url: 'ajaxcall/class_routine/viewclass_rot.php',
	 		method: 'POST',
	 		cache:false,
	 		success:function(data){
	 			$('#modal-loader').hide();
	 			$('#results').html(data);
	 		
	 		}
	 	})
});
	 function load_view(page){
	 	$('#modal-loader').show();
	 	$('#results').html('');
	 	$.ajax({
	 		url: 'ajaxcall/class_routine/viewclass_rot.php',
	 		method: 'POST',
	 		data: {page:page},
	 		cache:false,
	 		success:function(data){
	 			$('#modal-loader').hide();
	 			$('#results').html(data);
	 		
	 		}
	 	})
	 }
	 
	
	 
</script>