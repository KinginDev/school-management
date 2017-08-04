  	<?php
  	include "../../includes/conn.php";
if(isset($_POST['id'])){
	$id =(int)$_POST['teacher_id'];
	$teacher_id =$_POST['id'];
 
	$query = "UPDATE class SET teacher_id='$teacher_id' WHERE class_id='$id'";
	$result = mysql_query($query) or die(mysql_error());
	if($result== true){
		echo "<span class='fa fa-thumbs-o-up'>Succesfully Updated</span>";
	}else{
			echo "<div class='container'>Something Went Wrong</div>";
	}

}?>