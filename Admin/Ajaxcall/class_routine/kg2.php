
<?php
include '../includes/conn.php';
?> <tbody>
		 	 <tr width="50px;">
		 	 	
		 		<th style="padding: 0;" scope="row"><b>Monday</b></th>
		<td> <?php 
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='1'";
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 8){
 				$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 9){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 10){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 11){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='monday' AND class_id='1'";
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 2){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='wednesday' AND class_id='1'";
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 8){
 				$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 9){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 10){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 11){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 2){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
				<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
		 	 	$query = "SELECT * FROM class_routine WHERE day='tuesday' AND class_id='1'";
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result))
				{
			if($row['time_start'] == 8){
 				$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 9){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 10){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 11){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 2){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
				<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
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
			if($row['time_start'] == 8){
 				$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 9){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 10){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 11){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 2){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
				<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
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
			if($row['time_start'] == 8){
 				$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 9){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 10){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 11){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
					<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
  <span class="caret"></span>
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
			if($row['time_start'] == 2){
 			$subject_id = $row['subject_id'];
				$sql= "SELECT * FROM subject WHERE subject_id='$subject_id'";
				$res = mysql_query($sql);
				$rows = mysql_fetch_array($res);
				$num_row = mysql_num_rows($res);
				if($num_row >=1){
				?>
				<div class="dropdown">
	<span data-toggle="dropdown"><button class="btn btn-default btn-custom dropdown-toggle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $rows['subject_name'];?>" type="button" data-toggle="dropdown"><?php echo $rows['subject_code'];?>
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
		 	