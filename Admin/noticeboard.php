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
											
											<ul class="nav nav-tabs">
												
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>

  <li><a data-toggle="tab" href="#add"><span><i class="fa fa-plus-circle" style="padding-right: 4px;"></i></span>Add to the Noticeboard</a></li>
  
</ul>

<div class="tab-content">
	<!-- tab 1-->
  <div id="home" class="tab-pane fade in active">
    <div class="graph">
	<div class="tables">
															
	<div id="result">
		
	</div>
        <div class="clearfix"></div>
			</div>
												
		</div>
  </div>
  
  <div id="add" class="tab-pane fade">
    <!--/forms-inner-->
    <center>
	<div class="forms-inner">
												  <!--/set-1-->
	<div class="set-1">
		<div class="col-md-3"></div>
	<div class="col-md-6 graph-2  ">
<h3 class="inner-tittle two">Add to the Notice board</h3>

		<div class="grid-6">
			<div id="errmsg">
				
			</div>

				<div class="form-body">
	<form class="form-horizontal" action="" method="post" id="add_data"> <div class="form-group">
		 <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
		  <div class="col-sm-9"> 
		  	<input type="text" name="title" class="form-control" id="title" placeholder="Title">
		  	 </div> 
		  	 </div> 
		  	 <div class="form-group">
		  	<label for="inputPassword3" class="col-sm-2 control-label">Notice</label> 
		  	 	 <div class="col-sm-9"> 
		  	 <textarea name="content" class="form-control" id="content" placeholder="Password"> </textarea>
		  	 	 	</div> 
		  	 	 	</div> 
		  	 	 	
	<div class="col-sm-offset-2"> 
		<button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button> </div> </form> 
																							</div>

																					</div>
																			
																				</div>
																				<div class="col-md-3"></div>
  </div>

</div>
		</center>
											</div>
					<div>
			
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
		<script>
load_page();
	function load_page(page){
		$('#loader').show();
		$('#result').html(' ');
		$.ajax({
			url: "ajaxcall/noticeboard/view_not.php",
			method: "POST",
			data: {page:page},
			success:function(data){
				$('#loader').hide();
				$('#result').html(data);
			}
		})
		
	}
	$(document).on('click','.pagination_link', function(){ 
		var page =$(this).attr('id');
		load_page(page);
	});
	$(document).on('submit','#add_data',function(e){
		e.preventDefault();	
		var content = $('#content').val();
		
		$('#submit').html('Loading...');
		
		$.ajax({
			url: "ajaxcall/noticeboard/add_not.php",
			method: "POST",
			data: $('#add_data').serialize(),
			success:function(data){
				$('#errmsg').show();
				$('#errmsg').html(data);
				$('#submit').html('Submit');
				$('#add_data')[0].reset();
				load_page();
				load_unseen_notification();
			}
		})
		
	});
		</script>