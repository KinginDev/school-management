<?php

include 'includes/conn.php';

function countTasks(){
	$sql = "SELECT COUNT(id) FROM tasks";
	$query_sql = mysql_query($sql);
	$row = mysql_fetch_row($query_sql);
	
	//Here we have the total row counts
	$row = $row[0];
	echo $row;
}

?>