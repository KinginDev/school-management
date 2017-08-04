<?php
include '../../includes/conn.php';
?>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">

        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        KG 1</a>

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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='1'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='1'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='1'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='1'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='1'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='1'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='tuesday' AND class_id='1'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='wednesday' AND class_id='1'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='thursday' AND class_id='1'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='friday' AND class_id='1'";
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
  </div>
  <div class="panel panel-default" id="kg2">
    <div class="panel-heading"  data-toggle="collapse" data-parent="#accordion" href="#collapse2" >
   
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        KG 2 Class</a>

    </div>
    <div id="collapse2" class="panel-collapse collapse">
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='2'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='2'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='2'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='2'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='2'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='1'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='tuesday' AND class_id='2'";
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
			if($row['time_start'] == 1){
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='wednesday' AND class_id='2'";
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
			if($row['time_start'] == 11 || $row['time_stop'] == 3){
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='thursday' AND class_id='2'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='friday' AND class_id='2'";
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
		 	</tbody>
		 	
		 	</table>
</div>
    </div>
  </div>
   
   <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse10">
  
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
       NUR 1 Class</a>

    </div>
    <div id="collapse10" class="panel-collapse collapse">
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='3'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='3'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='3'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='3'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='3'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='tuesday' AND class_id='3'";
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
			if($row['time_start'] == 9|| $row['time_stop'] == 10 ){
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
			if($row['time_start'] == 2|| $row['time_stop'] == 3){
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='wednesday' AND class_id='3'";
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 8|| $row['time_stop'] == 9){
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
			if($row['time_start'] == 1 || $row['time_stop'] == 2) {
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='thursday' AND class_id='3'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='friday' AND class_id='3'";
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 8  || $row['time_stop'] == 9){
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
			if($row['time_start'] == 1|| $row['time_stop'] == 2){
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
			if($row['time_start'] == 2|| $row['time_stop'] == 3){
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
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
  
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
       NUR 2 Class</a>

    </div>
    <div id="collapse3" class="panel-collapse collapse">
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='4'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='tuesday' AND class_id='4'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='wednesday' AND class_id='4'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='thursday' AND class_id='4'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='friday' AND class_id='4'";
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
			if($row['time_start'] == 9 || $row['time_stop'] == 8){
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
  </div>
   <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
  
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
      PRY 1 Class</a>

    </div>
    <div id="collapse4" class="panel-collapse collapse">
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='6'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='6'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='6'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='6'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='6'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='6'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='tuesday' AND class_id='6'";
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
			if($row['time_start'] == 1){
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='wednesday' AND class_id='6'";
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
			if($row['time_start'] == 11 || $row['time_stop'] == 3){
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='thursday' AND class_id='6'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='friday' AND class_id='6'";
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
		 	</tbody>
		 	</table>
      </div>
    </div>
  </div>
   <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
  
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
       PRY 2 Class</a>

    </div>
    <div id="collapse5" class="panel-collapse collapse">
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='7'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='tuesday' AND class_id='7'";
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
			if($row['time_start'] == 1){
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='wednesday' AND class_id='7'";
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
			if($row['time_start'] == 11 || $row['time_stop'] == 3){
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='thursday' AND class_id='7'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='friday' AND class_id='7'";
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
		 	</tbody>
		 	</table>
      </div>
    </div>
  </div>
   <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
  
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
       PRY 3 Class</a>

    </div>
    <div id="collapse6" class="panel-collapse collapse">
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='8'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='tuesday' AND class_id='8'";
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
			if($row['time_start'] == 1){
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='wednesday' AND class_id='8'";
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
			if($row['time_start'] == 11 || $row['time_stop'] == 3){
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='thursday' AND class_id='8'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='friday' AND class_id='8'";
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
		 	</tbody>
		 	</table>
      </div>
    </div>
  </div>
   <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
  
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
       PRY 4 Class</a>

    </div>
    <div id="collapse7" class="panel-collapse collapse">
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='9'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='tuesday' AND class_id='9'";
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
			if($row['time_start'] == 1){
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='wednesday' AND class_id='9'";
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
			if($row['time_start'] == 11 || $row['time_stop'] == 3){
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='thursday' AND class_id='9'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='friday' AND class_id='9'";
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
		 	</tbody>
		 	</table>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
  
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
       PRY 5 Class</a>

    </div>
    <div id="collapse8" class="panel-collapse collapse">
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='10'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='tuesday' AND class_id='10'";
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
			if($row['time_start'] == 1){
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='wednesday' AND class_id='10'";
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
			if($row['time_start'] == 11 || $row['time_stop'] == 3){
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='thursday' AND class_id='10'";
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='friday' AND class_id='10'";
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
		 	</tbody>
		 	</table>
      </div>
    </div>
  </div> 
  
</div>
<script>
	  $('[data-toggle="tooltip"]').tooltip();
	
</script>