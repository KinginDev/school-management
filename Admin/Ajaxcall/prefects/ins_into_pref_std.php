<?php 
include '../../includes/conn.php'; 
if(isset($_POST)){
	$pref = $_POST['pref'];
	$student = $_POST['std_name'];
	$sql = "SELECT * FROM prefects WHERE id='$pref'";
	$res = mysql_query($sql) or (die(mysql_error()));
	$row = mysql_fetch_array($res);
	$row['class_code'];
}
?>