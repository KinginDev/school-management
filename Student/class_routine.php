<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
?>
<?php
	include 'functions/functions.php';
	
	?>

<?php
include '../includes/conn.php';
$query = "SELECT class_id FROM students WHERE email='".$_SESSION['email']."'";
$result = mysql_query($query);
$row= mysql_fetch_array($result);
$class = $row['class_id'];
?>

<div class="graph-visual tables-main">
											
												<div class="graph">
														<div class="tables">

       <center><h2 class="inner-tittle">   <?php

$quer = "SELECT class_code FROM class WHERE class_id='$class'";
$resul = mysql_query($quer);
$ro = mysql_fetch_array($resul);
 echo $classc = $ro['class_code'];
?></h2></center>
     

    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
      	<table class="table table-bordered"> 
		<thead>
			 <tr>
			 	<th>#</th>
		 	
				 <th><center><b>8  -   9</b></center></th>
				 <th><center><b>9  -   10</b></center></th> 
				 <th><center><b>10  -   11</b></center></th> 
				 <th><center><b>11  -   12</b></center></th>
				 <th><center><b>12  -   1</b></center></th>
				 <th><center><b>1  -   2</b></center></th>
				 <th><center><b>2  -   3</b></center></th>
		 	</tr> 
		 	
		 	
		 </thead> 
		 <tbody>
		 	 <tr width="50px;">
		 	 	
		 		<th style="padding: 0;" scope="row"><b>Monday</b></th>
		<td> <?php 
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='$class'";
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 8 || $row['time_stop'] == 9){
 				$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 
		 		<td> <?php 
		 	
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 9 || $row['time_stop'] == 10){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 
		 	 	
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 10 || $row['time_stop'] == 11){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 
		 	 	
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 11 || $row['time_stop'] == 12){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> Break</td>
		 		<td> <?php 
		 	 	
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 1 || $row['time_stop'] == 2){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 
		 	 	
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 2 || $row['time_stop'] == 3){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		
		 		
		 	</tr>
		 	<tr>	
		 		<th width="50px"><b>Tuesday</b></th>
		 		<td> <?php 
		 	 	$query = "SELECT * FROM class_routine WHERE day='tuesday' AND class_id='$class'";
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 8 || $row['time_stop'] == 9){
 				$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 
		 		<td> <?php 
		 	 	
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 9 || $row['time_stop'] == 10){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 

				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 10 || $row['time_stop'] == 11){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 
		 	 
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 11 || $row['time_stop'] == 12){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> Break</td>
		 		<td> <?php 
		 	 	
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 1 || $row['time_stop'] == 2){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
				<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 
		 	 
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 2 || $row['time_stop'] == 3){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
				<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		
		 		
		 	</tr>
		 	<tr>	
		 		<th width="50px"><b>Wednesday</b></th>
		 		<td> <?php 
		 	 	$query = "SELECT * FROM class_routine WHERE day='wednesday' AND class_id='$class'";
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 8 || $row['time_stop'] == 9){
 				$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 
		 		<td> <?php 
		 	 	
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 9 || $row['time_stop'] == 10){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 

				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 10 || $row['time_stop'] == 11){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 
		 	 
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 11 || $row['time_stop'] == 12){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> Break</td>
		 		<td> <?php 
		 	 	
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 1 || $row['time_stop'] == 2){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
				<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 
		 	 
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 2 || $row['time_stop'] == 3){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
				<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?>
		 	</tr>
		 	<tr>	
		 		<th width="50px"><b>Thursday</b></th>
		 		<td> <?php 
		 	 	$query = "SELECT * FROM class_routine WHERE day='thursday' AND class_id='$class'";
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 8 || $row['time_stop'] == 9){
 				$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 
		 		<td> <?php 
		 	 	
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 9 || $row['time_stop'] == 10){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 

				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 10 || $row['time_stop'] == 11){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 
		 	 
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 11 || $row['time_stop'] == 12){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> Break</td>
		 		<td> <?php 
		 	 	
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 1 || $row['time_stop'] == 2){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
				<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 
		 	 
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 2 || $row['time_stop'] == 3){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
				<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?>
		 	</tr>
		 	<tr>	
		 		<th width="50px"><b>Friday</b></th>
		 		<td> <?php 
		 	 	$query = "SELECT * FROM class_routine WHERE day='friday' AND class_id='$class'";
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 8 || $row['time_stop'] == 9 ){
 				$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 
		 		<td> <?php 
		 	 	
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 9 || $row['time_stop'] == 10){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 

				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 10 || $row['time_stop'] == 11){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 
		 	 
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 11 || $row['time_stop'] == 12){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?></td>
		 		<td> Break</td>
		 		<td> <?php 
		 	 	
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 1 || $row['time_stop'] == 2){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
				<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
				<?php
				}
 				}		 
				}?></td>
		 		<td> <?php 
		 	 
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 2 || $row['time_stop'] == 3){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
				<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
  </button></span>
  <ul class="dropdown-menu">
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
  </div>
		
				<?php
				}
 				}		 
				}?>
		 	</tr>	
		 	</tbody>
		 	
		 	</table>
      </div>
   </div>
			
			<?php 
				
			include 'includes/sidebar.inc.php';
			 ?>
		</div>