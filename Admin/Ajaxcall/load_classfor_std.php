<?php 
include '../includes/conn.php';
if(isset($_POST['class_id'])){
	$class = $_POST['class_id'];
  	$query = "SELECT * FROM class WHERE class_id='$class'";
	$result = mysql_query($query);

	while($row = mysql_fetch_array($result)){
		$class_code = $row['class_code'];
		echo $class_code;
	}}
		?>