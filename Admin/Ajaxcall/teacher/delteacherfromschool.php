<?php
include "../../includes/conn.php";
echo $id = (int)$_POST['id'];
if(isset($_POST['id'])){
	$id = (int)$_POST['id'];
	$query = "DELETE FROM teachers WHERE teacher_id='$id'";
	$result = mysql_query($query) or die(mysql_error());
	if($result){
		echo "The Subject Has been Deleted From The Teacher";
	}else{
		echo "An error Occured Please Try Agian Later";
	}
}


