<?php
include "../../includes/conn.php";

if(isset($_POST['subject_id'])){
	$subject_id = (int)$_POST['subject_id'];
	$teacher_id = $_POST['teacher_id'];
	$query = "UPDATE subject SET teacher_id=' ' WHERE teacher_id='$teacher_id' AND subject_id='$subject_id'" ;
	$result = mysql_query($query) or die(mysql_error());
	if($result == true){
		echo "The Teacher Has been Deleted From The School Record";
	}else{
		echo "An error Occured Please Try Agian Later";
	}
}


