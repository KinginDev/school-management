<?php

include '../includes/conn.php';

function grades($class_id,$student_id,$subject_id){
	$class_id = mysql_real_escape_string($class_id);
	$student_id = mysql_real_escape_string($student_id);
	$subject_id = mysql_real_escape_string($subject_id);
	$total = mysql_query("SELECT COUNT('mark_id') FROM marks WHERE class_id='$class_id' AND student_id='$student_id' AND subject_id='$subject_id'") or die(mysql_error());
	
	return(mysql_result($total, 0) == '1')? true : false;
	
}


//count the number of tasks in the database
function countTasks(){
	$sql = "SELECT COUNT(id) FROM tasks";
	$query_sql = mysql_query($sql);
	$row = mysql_fetch_row($query_sql);
	
	//Here we have the total row counts
	$row = $row[0];
	echo $row;
}
//count the number of teahers in the database
function countTeachesr(){
	$sql = "SELECT COUNT(teacher_id) FROM teachers";
	$query_sql = mysql_query($sql);

	$row = mysql_fetch_row($query_sql);
	
	//Here we have the total row counts
	$row = $row[0];
	echo $row;
}
///Private Messaging System


    //checks to see if the given user is a member of the given conversation
    function validate_conversation_id($conversation_id){
    	$conversation_id = (int)$conversation_id;
		$sql = "SELECT COUNT(1)
				FROM `conversation_members`
				WHERE `conversation_id` = {$conversation_id}
				AND `user_id` = '{$_SESSION['user_id']}'
				AND `conversation_deleted` = 0";
				$result = mysql_query($sql) or die(mysql_error());
				return (mysql_result($result, 0)==1);
				
    }
    
  
?>