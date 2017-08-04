<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
?>
<!--//outer-wp-->
									<div class="outter-wp">
									<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.html">Home</a></li>
															<li class="active">Calender</li>
														</ol>
													<button type="button" class="show_c" class="btn btn-primary" style="display: none;">View Class Options</button>
															<div class="tables">
																<div class="graph">
																
																		<form method="post">
																			<div class="class">
																			<table class="table table-bordered">
			<tr>
			<td class="col-sm-4">
			</td>
			<td class="col-sm-4">
				<div class="form-group">
				<label><strong>Select Class</strong></label>
				<select  class="form-control1" name='class' id="class">
					<option></option>
			on>
					<?php
		  	 	$result = mysql_query("SELECT * FROM class");
				while($row = mysql_fetch_array($result)){
				$id = $row['class_id'];
				$name = $row['class_code'];
				echo "<option value='$id'>$name</option>";
				}
		  	 ?>
					</select>
					</div>
			</td>
			<td class="col-sm-4">
				<div class="form-group">
					
				</div>
			</td>
			</tr>
			
		
		</table>
		</div>
		</form>
		<div id="modal-loader" style="display: none; text-align: center;">
                       	   	<img src="../images/ajax-loader.gif">
                       	   </div>
		<div id="search_result">
			
		</div>
																	
</div>
</div>
</div>
<div>
	<?php
	include 'includes/sidebar.inc.php';
	?>
</div>												</div>
<script>
	//script for populating subjects
	$('#class').change(function(){
		var class_id = $(this).val();
		console.log(class_id);
		$('#search_result').html('');
		$('#modal-loader').show();
		$.ajax({
			url:'Ajaxcall/view_attd.php',
			method: 'POST',
			data:'id='+class_id,
			dataType:'text',
			success:function(data){
				$('#modal-loader').hide();
				$('#search_result').html(data);
				$('.class').hide();
				$('.show_c').show();
			}
		})
	});
	$('.show_c').click(function(){
		$('.class').show();
	})
</script>