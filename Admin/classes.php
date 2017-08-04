 

<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
?>
<?php
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
												
  <li id="view" class="active"><a data-toggle="tab" href="#home">Home</a></li>

  <li id="add"><a data-toggle="tab" href="#add"><span><i class="fa fa-plus-circle" style="padding-right: 4px;"></i></span>Add Classes</a></li>
  
</ul>

<div class="tab-content">
	<!-- tab 1-->
  <div id="home" class="tab-pane fade in active">
 <div id="modal-loader" style="display: none; text-align: center;">
                       	   	<img src="../images/preloader.gif">
                       	   </div>
	<div id="result_view"></div>
</div>
<div id="add" class="tab-pane fade in active">
	<div id="result_add"></div>
		<div class="clearfix"></div>
											</div>
											
			</div>
											
		<div>
			
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    	<div class="modal-header">
    		<center>
    	<h3 class="text-area"</h3>
    	</center>
    	</div>
    	<div class="modal-body">
    		
                       	   <div id="modal-loader" style="display: none; text-align: center;">
                       	   	<img src="../images/ajax-loader.gif">
                       	   </div>
                       	  <div class="container">
                       	  	<div class="col-sm-6">
    		<div id="msg" style="display: none; text-align: center; font-weight: bold;"></div>
    		</div>
    		</div>
    		<div id="dynamic-content">
    		
    		</div>
    			

  	</center>

     </div>
     </div>
  </div>
  </div>
  <script>
  load_view();
  
  $(document).on('click','#add',function load_view(e){
	$('#modal-loader').show();
	 	$('#result_view').html('');
	 	$.ajax({
	 		url: 'ajaxcall/class/add_class.php',
	 		method: 'POST',
	 		
	 		cache:false,
	 		success:function(data){
	 			$('#modal-loader').hide();
	 			$('#result_view').html(data);
	 		
	 		}
})
});
$(document).on('click','#view',function load_view(e){
	$('#modal-loader').show();
	 	$('#result_view').html('');
	 	$.ajax({
	 		url: 'ajaxcall/class/view_class.php',
	 		method: 'POST',
	 		
	 		cache:false,
	 		success:function(data){
	 			$('#modal-loader').hide();
	 			$('#result_view').html(data);
	 		
	 		}
	 	})
});
		 function load_view(page){
	 	$('#modal-loader').show();
	 	$('#result_view').html('');
	 	$.ajax({
	 		url: 'ajaxcall/class/view_class.php',
	 		method: 'POST',
	 		data: {page:page},
	 		cache:false,
	 		success:function(data){
	 			$('#modal-loader').hide();
	 			$('#result_view').html(data);
	 		
	 		}
	 	})
	 }
	 
	</script>					
<script>
$(document).on('click','.edit-class',function(e){
		e.preventDefault();
	var cid = $(this).attr('id');
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		$('#dynamic-content').show();  //shows dynamic content 
	
		
		$.ajax({
			url: 'ajaxcall/class/updateclasses.php',
			type: 'POST',
			data: 'id='+cid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();	 // hide ajax loader
			$(document).on('click','#update',function(e){
					e.preventDefault();
				var cid = $(this).data('id');
				var tid = $("#teacher").val();
				var data = {'teacher_id' : cid,'id' : tid};
				console.log(data);
			  
				$.ajax({
					url: "ajaxcall/class/updtcl.php",
					method: 'POST',
					data : data,
					dataType:'html',
					success:function(data){
				$('#dynamic-content').hide();//shows dynamic content for msg to show  
						$('.modal-backdrop').hide();  
						$('#myModal').hide();  
						$('#dynamic-content').hide();//shows dynamic content for msg to show    
						swal(
  						data,
  						'You clicked the button!',
  						'success'
						);
						  load_view();
					}
				})
			});
		})
		.fail(function(){
			$('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
			$('#modal-loader').hide();
		});
		
		
	});
	
	

</script>