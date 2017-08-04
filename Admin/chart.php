<?php
header('Content-Type: application/json');
include 'includes/conn.php';


$query ="SELECT sex,date_of_admission,student_id,birthday FROM students ";

$result= mysql_query($query);

$data = array();
while ( $row = mysql_fetch_array($result)){
	$data[] = $row;
}
mysql_close();
print json_encode($data);
?>
