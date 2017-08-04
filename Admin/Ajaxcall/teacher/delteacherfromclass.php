<?php
include ".././includes/conn.php";
if(isset($_POST['id'])){
	$id = (int)$_POST['id'];
	$teacher_id = $_POST['teacher_id'];
	$query = "UPDATE class SET teacher_id=' ' WHERE teacher_id='$teacher_id' AND class_id='$id'" ;
	$result = mysql_query($query) or die(mysql_error());
	if($result){
		echo "The subject has been deleted";
	}else{
		echo "An error Occured Please Try Agian Later";
	}
}


