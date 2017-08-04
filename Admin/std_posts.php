<?php
include_once 'includes/header.inc.php';

include 'includes/conn.php';
?>
<?php
	include 'functions/functions.php';
	
	?>	
	<div class="outter-wp">
								
														
											<ul class="nav nav-tabs">
											
  <li class="active"><a data-toggle="tab" href="#home"><span><i class="fa fa-plus-circle" style="padding-right: 4px;"></i></span>Prefects</a></li>

  <li><a data-toggle="tab" href="#add"><span><i class="fa fa-plus-circle" style="padding-right: 4px;"></i></span>Student Associations</a></li>
  
</ul>

<div class="tab-content">
	<!-- tab 1-->
  <div id="home" class="tab-pane fade in active">
  	<div class="pull-right">
	<button type="button" data-toggle="modal" class="edit-class" data-target="#myModal"  class="btn btn-sm btn-primary" ><span><i class="fa fa-plus-circle" style="padding-right: 4px;"></i></span>Add to Prefects List</button>
	</div>
										
												<div class="tables">
													<div class="pref-resl"></div>
												</div>
											</div>
											
									
									<div class="clearfix"></div>
									 <div id="add" class="tab-pane fade in active">
									 	<div class="graph">
									 	dhh
										</div>
										</div>
										</div>
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
    		<form id="add_data" method="post">
    			<div id="pref-resl"></div>
    		<div class="form-group">
    			<label>Post Name</label>
    			<input type="text" class="form-control" name="post_name" id="post_name" placeholder="Post Name">
    		</div>
    		<div class="form-group">
    			<label>Post Code</label>
    			<input type="text" class="form-control" name="post_code" id="post_code" placeholder="Post code">
    		</div>
    		<div class="form-group">
    			<label>Class Validity</label>
    			<select class="form-control" name="class_val" id="class_val">
    				<option></option>
    				<?php
			$result = mysql_query("SELECT * FROM class");
			while($row= (mysql_fetch_array($result))){
			$id = $row['class_id'];
			$name = $row['class_code'];
			echo "<option value='$id'>$name</option>";
		}
		
		?>
    			</select>
    		</div>
    		<div class="form-group">
    			<input type="submit" class="btn btn-sm btn-primary" />
    		</div>
    		</div>
    		</form>
    		</div>
    		</div>
    	</div>
    			
										
		<div>
			
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
		<script>
			load_page();
	function load_page(page){
	$('.pref-resl').html(' ');
		$.ajax({
			url: "ajaxcall/prefects/std_post.php",
			method: "POST",
			data: {page:page},
			success:function(data){
				$('.pref-resl').html(data);
			}
		})
		
	}
	$(document).on('submit','#add_data',function(e){
		e.preventDefault();
		$.ajax({
			url: "ajaxcall/prefects/std_post.php",
			method: "POST",
			data: $('#add_data').serialize(),
			success:function(data){
				$('#pref-resl').html(data);
				load_page();
			}
		})
	})
		</script>