<?php  
include '../../includes/conn.php';
if (isset($_POST['class_id'])){
	$id = $_POST['class_id'];
$sql = "SELECT * FROM subject WHERE class_id='$id'";
$result = mysql_query($sql);
$num = mysql_num_rows($result);
if($num >= 1){
while ($row = mysql_fetch_array($result)){
	?>
	<option value="<?php echo $row['subject_id']; ?>" id="<?php echo $row['class_id']; ?>"><?php echo $row['subject_code']; ?></option>
	<?php
}
}
else{
	echo "<option>No Subject for This Class</option>";
}
}