  	<?php
  	include "../../includes/conn.php";
if(isset($_POST['subject_id'])){
	$subject_id =(int)$_POST['subject_id'];
	$teacher_id =$_POST['teacher_id'];
 
	$query = "UPDATE subject SET teacher_id='$teacher_id' WHERE subject_id='$subject_id'";
	$result = mysql_query($query) or die(mysql_error());
	if($result == true){
		echo "<div>Succesfully Updated</div>";
	}else{
			echo "<div class='container'>Something Went Wrong</div>";
	}

}?>