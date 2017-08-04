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
<h3 class="inner-tittle two">Add Prefects</h3>

		<div class="grid-6">
			<div id="resl">
				
			</div>
				<div class="form-body">
	<form class="form-horizontal" action="" method="POST" id="add_data">
		<div class="form-group">
		  	<label for="inputPassword3" class="col-sm-3 control-label" >Class</label> 
		  	 	 <div class="col-sm-9" > 
			<select name="pref" class="form-control1" id="class" >
		  		<option></option>
		  	<?php
		$result = mysql_query("SELECT * FROM class");
		while($row= (mysql_fetch_array($result))){
			$id = $row['clas_id'];
			$name = $row['post_code'];
			echo "<option value='$id'>$name</option>";
		}
		
		?>
		</select>
		</div>
		<div class="form-group">
	
		 <label for="inputEmail3" class="col-sm-3 control-label">Student Name</label>
		  <div class="col-sm-9"> 
		  	<input type="text" name="std_name" class="form-control1" id="std_name" placeholder="Student Name" >
		  	 </div> 
		  	 </div> 
		  	 <div class="form-group">
		  	<label for="inputPassword3" class="col-sm-3 control-label" >Prefect Type</label> 
		  	 	 <div class="col-sm-9" > 
			<select name="pref" class="form-control1" id="pref" >
		  		<option></option>
		  	<?php
		$result = mysql_query("SELECT * FROM prefects");
		while($row= (mysql_fetch_array($result))){
			$id = $row['id'];
			$name = $row['post_title'];
			echo "<option value='$id'>$name</option>";
		}
		
		?>
		</select>
		</div>
		  	 	 
		  	 	 </div>
		  	 	 

		<button type="submit" class="btn btn-default" name="submit" id="submit">Submit</button> </div> </form> 

																					</div>
																			
																				</div>
																				<div class="col-md-3"></div>
  </div>

</div>
		</center>
								</div>
					<div>
	<div>
			
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
		<script>
			$(document).on('submit','#add_data',function(e){
				e.preventDefault();
				$.ajax({
					url: "ajaxcall/prefects/ins_into_pref_std.php",
					method: "POST",
					data: $('#add_data').serialize(),
					success:function(data){
						$('#resl').html(data);
					}
				})
			})
		</script>