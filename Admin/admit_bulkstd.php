<?php
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
														<div class="tables ">
															<div class="col-sm-3"></div>
															
															<div class="col-sm-6">
															
																<div class="graph-2">
																	
																	<form id="upload_csv" method="post" enctype="multipart/form-data">
																		<div class="form-group" >
																			<label>Input Csv File</label>
																			<input type="file" name="student_csv" id="csv_file" width="100%" class="form-control1"/>
																				</div>
																			<div class="form-group">
																			<input type="submit" class="btn btn-primary" />
																			
																		</div>
																		
																	</form>
																</div>
															</div>
															<div class="col-sm-3"></div>
															<div class="clearfix"></div>
															</div>
															</div>
															</div>
															</div>
<?php
include 'includes/sidebar.inc.php';
?>
<script>
	$('#upload_csv').on('submit',function(e){
	e.preventDefault();
	$.ajax({
		url: "ajaxcall/students/student_csv.php",
		method: "POST",
		data :new FormData(this),
		contentType:false,
		cache:false,
		processData:false,
		success: function(data){
			$('#errors').html(data);
		}
	});	
	});
</script>