<?php
	include "../../includes/conn.php";

	if(isset($_POST['student_id'])) {
		$student_id = $_POST['student_id'];
		$query = "SELECT * FROM student WHERE student_id='$student_id'";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		echo json_encode($row);
	}
	

		if(isset($_GET['autosuggest'])){
			
			$value = $_GET['autosuggest'];
			if(empty($value)){
				exit();
			}
		$value = mysql_real_escape_string($value);
		$sql = "SELECT student_id,firstname,lastname,images FROM students WHERE firstname LIKE '%$value%'
		OR lastname LIKE '%$value%' ";
		
		$result = mysql_query($sql) or die(mysql_error());
		$totalRows = mysql_num_rows($result);
		if($totalRows > 0){
	$display = '<ul class="autosuggest">';
		while($row = mysql_fetch_assoc($result)){
			$student_id = $row['student_id'];
			$display .= "<li><a href='search_results.php?id=$student_id'>".$row['firstname'].' '.$row['lastname']."<img src='../student_images/".$row['images']."'></li>";
		
		}
	
		}
		else {
			echo '
			<ul class="autosuggest">
			<li>NO results Found</li>
			</ul>';
		}
	@$display .= '</ul>';
		
		echo $display;
		}
	
function fetch_data(){	

mysql_connect('localhost','root','');
mysql_select_db('school_m');
$query = "SELECT student_id,firstname,lastname FROM students";
echo  "<table><tr><th>ID</th><th<NAME</th><th>Lastname</th>";
if($result = mysql_query($query) or die(mysql_error())){
	while($row = mysql_fetch_array($result)){
	echo "<tr><th>$row[student_id]</th><th>$row[firstname]</th><th>$row[lastname]</th>]";
}


}	
}
?>