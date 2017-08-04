
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
												<div></div>
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>

  <li><a data-toggle="tab" href="#add"><span><i class="fa fa-plus-circle" style="padding-right: 4px;"></i></span>Add A Subject to the list</a></li>
  
</ul>

<div class="tab-content">
	<!-- tab 1-->
  <div id="home" class="tab-pane fade in active">
    <div class="graph">
    		<div id="loader" style="display: none; text-align: center;">
                       	   	<img src="../images/preloader.gif">
                       	   </div>
<div id="result">
	
</div>
	
  </div>
			
        <div class="clearfix"></div>
			</div>
												
		
 
  <div id="add" class="tab-pane fade">
    <!--/forms-inner-->
    <center>
	<div class="forms-inner">
															
		  <!--/set-1-->
	<div class="set-1">
		<div class="col-md-3"></div>
	<div class="col-md-6 graph-2  ">
<h3 class="inner-tittle two">Add To Subject</h3>

		<div class="grid-6">
			<div id="error">
				
			</div>
				<div class="form-body">
	<form class="form-horizontal" action="" method="POST" id="add_data"> 
		<div class="form-group">
		 <label for="inputEmail3" class="col-sm-3 control-label">Subject Name</label>
		  <div class="col-sm-9"> 
		  	<input type="text" name="sub_name" class="form-control1" id="sub_name" placeholder="Subject Name" >
		  	 </div> 
		  	 </div> 
		  	 <div class="form-group">
		  	<label for="inputPassword3" class="col-sm-3 control-label">Subject Code</label> 
		  	 	 <div class="col-sm-9"> 
		  	 <input name="sub_code" class="form-control1" id="sub_code" placeholder="Subject code" >
		  	 	 	</div> 
		  	 	 	</div> 
		  	 	 	<div class="clearfix"></div>
		  	 	 	<div class="form-group">
		  	 	 		
		  	<label for="inputPassword3" class="col-sm-3 control-label" >Teachers Name</label> 
		  	 	 <div class="col-sm-9" > 
	<select name="teacher" class="form-control1" id="teacher" >
		<option></option>
		<?php
		$result = mysql_query("SELECT * FROM teachers");
		while($row= (mysql_fetch_array($result))){
			$id = $row['teacher_id'];
			$name = $row['firstname'].' '.$row['lastname'];
			echo "<option value='$id'>$name</option>";
		}
		
		?>
	
	</select>
		  	 	 	</div> 
		  	 	 	</div> 
		  	 	 		<div class="clearfix"></div>
		  	 	 	<div class="form-group">
		  	 	 		
		  	<label for="inputPassword3" class="col-sm-3 control-label">Class Name</label> 
		  	 	 <div class="col-sm-9" > 
	<select name="class_id" class="form-control1" id="class" >
		<option></option>
		<?php
		$result = mysql_query("SELECT * FROM class");
		while($row= (mysql_fetch_array($result))){
			$id = $row['class_id'];
			$code = $row['class_code'];
			echo "<option value='$id'>$code</option>";
		}
		
		?>
	</select>
		  	 	 	</div> 
		  	 	 	</div> 
		  	 	 	
	<div class="col-sm-offset-2"> 
		<button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button> </div> </form> 

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
			url: "ajaxcall/subject/view_sub.php",
			method: "POST",
			data: {page:page},
			success:function(data){
				$('#loader').hide();
				$('#result').html(data);
			}
		})
		
	}
	$(document).on('submit','#add_data',function(e){
		e.preventDefault();	
		$('#submit').html('Loading...')
		$.ajax({
			url: "ajaxcall/subject/insert_sub.php",
			method: "POST",
			data: $('#add_data').serialize(),
			success:function(data){
				$('#error').show();
				$('#error').html(data);
				$('#submit').html('Submit');
				$('#add_data')[0].reset();
				load_page();
			}
		})
	});
	$(document).on('click','.pagination_link', function(){ 
		var page =$(this).attr('id');
		load_page(page);
	});
	
$(document).on('click','.edit-class',function(e){
		e.preventDefault();
		
	var sid = $(this).attr('id');
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		$('#dynamic-content').show();  //shows dynamic content 
	$.ajax({
			url: 'ajaxcall/subject/updatesubject.php',
			type: 'POST',
			data: 'id='+sid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();	 // hide ajax loader
			$(document).on('click','#update',function(e){
					e.preventDefault();
				
				var sid = $(this).data('id');
				var tid = $("#teacher").val();
				var data = {'subject_id' : sid,'teacher_id' : tid};
				console.log(data);
			  
				$.ajax({
					url: "ajaxcall/subject/updtsub.php",
					method: 'POST',
					data : data,
					dataType:'html',
					success:function(data){
						console.log(data); 
						$('#dynamic-content').hide();//shows dynamic content for msg to show  
						$('.modal-backdrop').hide();  
						$('#myModal').hide();
						swal(
  						data,
  						'You clicked the button!',
  						'success'
						);

						load_page();
						
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