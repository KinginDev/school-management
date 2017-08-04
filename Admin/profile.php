<?php
include_once 'includes/header.inc.php';

include 'includes/conn.php';
include 'functions/functions.php';
	?>
	<div class="outter-wp">
	<div class="graph">
		
	<!-- tab 1-->
  <div id="home" class="tab-pane fade in active">
  	
  	<ul class="nav nav-tabs">										
  		<li class="active"><a data-toggle="tab" href="#home"><strong><span><i class="fa fa-lock" class="pull-right" style="padding-right: 10px;"></i></span>Change Password</strong></a></li>
		</ul>
		<div class="tab-content">
			<div class="form">
				<form method="post">
					<div class="col-md-2"></div>
					<div style="margin:50px;"></div>
					<div class="form-group1 col-md-8">
						<label>Existing Password</label>
						<input type="password" name="" class="form-control1"/>
					</div>
					<div class="col-md-2"></div>
					<div class="clearfix"></div>
					<div class="col-md-2"></div>
					<div class="form-group col-md-8">
						<label>New Password</label>
						<input type="password" name="" class="form-control1"/>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-2"></div>
					<div class="form-group col-md-8">
						<label>Confirm new Password</label>
						<input type="password" name=""/ class="form-control1">
					</div>
					<div class="clearfix"></div>
					<div class="col-md-2"></div>
					<div class="clearfix"></div>
					<input type="submit" class="btn btn-default pull-right" value="Change Password"/>
				</form>
			</div>
		</div>
  	</table>
  	</div>
  </div></div>
  	<div>		
<?php 
include 'includes/sidebar.inc.php';
?>
</div>