<?php
 include '../includes/conn.php';
if(isset($_POST['present'])){
	$id = $_POST['present'];
	$class_id = $_POST['class_id'];
	$date = date('y/m/d');
	function exists(){
	$id = $_POST['present'];
	$class_id = $_POST['class_id'];
	$date = date('y/m/d');
	$sql = mysql_query("SELECT COUNT(attendance_id) FROM std_attendance WHERE status='{1}' AND student_id='$id' AND class_id='{$class_id}' AND date='{$date}'") or die(mysql_error());
	return(mysql_result($sql, 0) == '1') ? true : false;
	}
	if(exists() == false){
		$sql = "INSERT INTO std_attendance (status, student_id,date,class_id) VALUES ('1','$id','$date','$class_id')";
	 mysql_query($sql);
	}
	else {
		echo "<script>alert('You already marked this student');</script>";
	}
}
elseif(isset($_POST['absent'])){
	$id = $_POST['absent'];
	$class_id = $_POST['class_id'];
	$date = date('y/m/d');
	$sql = "INSERT INTO std_attendance (status, student_id,date,class_id) VALUES ('0','$id','$date','$class_id')";
	 mysql_query($sql);
}
$class_id = $_POST['class_id'];
$date = date('y/m/d');
$query = "SELECT * FROM std_attendance WHERE class_id='$class_id' AND status='1' AND date='$date'";
$res = mysql_query($query) or die(mysql_error());
$num = mysql_num_rows($res);
?>
<h3>Total Number of Present student <?php echo $num; ?></h3>