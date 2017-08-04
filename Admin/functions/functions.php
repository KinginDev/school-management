<?php
@include '../../includes/conn.php';
@include '../includes/conn.php';

//checks if email exists in database.
function email_exist($email){
	$email = mysql_real_escape_string($email);
	
	$sql = mysql_query("SELECT COUNT(student_id) FROM students WHERE email='{$email}'");
	return(mysql_result($sql, 0) == '1') ? true : false;
}

function username_exist($username){
	$username = mysql_real_escape_string($username);
	
	$sql = mysql_query("SELECT COUNT(student_id) FROM students WHERE username='{$username}'");
	return(mysql_result($sql, 0) == '1') ? true : false;
}
//Teachers verification functions
function phone_exist_teachers($phone){
	$phone = mysql_real_escape_string($phone);
	
	$sql = mysql_query("SELECT COUNT(teacher_id) FROM teachers WHERE phone='{$phone}'");
	return(mysql_result($sql, 0) == '1') ? true : false;
}

function email_exist_teachers($email){
	$email = mysql_real_escape_string($email);
	
	$sql = mysql_query("SELECT COUNT(teacher_id) FROM teachers WHERE email='{$email}'");
	return(mysql_result($sql, 0) == '1') ? true : false;
	
}
function random_house($arr , $num = 1){
	shuffle($arr);
	$r = array();
	
	for($i = 0 ; $i < $num; $i++){
		$r[] = $arr[$i];
	}
	return $num == 1 ? $r[0]: $r;
	
}
//adds a student to the database
function add_student($firstname, $lastname,$username, $email, $password,$sex,$religion,$class,$mothers,$fathers,$birthday,$blood_grp,$phone,$date_of_addmission,$address,$image,$house,$message_id){
	$firstname = mysql_real_escape_string(htmlentities($firstname));
	$lastname = mysql_real_escape_string(htmlentities($lastname));
	$email = mysql_real_escape_string(htmlentities($email));
	$username = mysql_real_escape_string(htmlentities($username));
	$address = mysql_real_escape_string(htmlentities($address));
	$sex = mysql_real_escape_string(htmlentities($sex));
	$phone = mysql_real_escape_string(htmlentities($phone));
	$religion = mysql_real_escape_string(htmlentities($religion));
	$fathers = mysql_real_escape_string(htmlentities($fathers));
	$mothers = mysql_real_escape_string(htmlentities($mothers));
	$blood_grp = mysql_real_escape_string(htmlentities($blood_grp));
	$class = mysql_real_escape_string(htmlentities($class));
	$house = mysql_real_escape_string(htmlentities($house));
	$date_of_addmission = mysql_real_escape_string(htmlentities($date_of_addmission));
	$image = mysql_real_escape_string(htmlentities($image));
	$birthday = mysql_real_escape_string(htmlentities($birthday));
	$password = sha1($password);
	$message_id = mysql_real_escape_string($message_id);
	$level = 1;
	$query = "INSERT INTO students
			 (firstname,
			 lastname,
			 username,
			 password,
			 images,
			 sex,
			 blood_grp,
			 phone,
			 email,
			 mothers_name,
			 fathers_name,
			 class_id,
			 religion,
			 address,
			 birthday,
			 date_of_admission,
			 level,
			 house,
			 message_id) 
	 VALUES
	  ('$firstname',
	  '$lastname',
	  '$username','$password',
	  '$image',
	  '$sex',
	  '$blood_grp',
	  '$phone','$email',
	  '$mothers',
	  '$fathers',
	  '$class',
	  '$religion',
	  '$address',
	  '$birthday',
	  '$date_of_addmission',
	  '$level',
	  '$house',
	  '$message_id')";

$query_run = mysql_query($query) or die(mysql_error());

	}

//insert Teachers into database
function addTeacher($firstname,$lastname,$email,$password ,$phone,$dob,$employment,$religion,$blood_grp,$address,$sex,$image,$message_id,$level){
		$firstname = mysql_real_escape_string(htmlentities($_POST['fname']));
		$lastname = mysql_real_escape_string(htmlentities($_POST['lname']));
		$email = mysql_real_escape_string(htmlentities($_POST['email']));
		$password = sha1($password);
		$phone= mysql_real_escape_string(htmlentities($_POST['phone']));
		$dob = mysql_real_escape_string(htmlentities($_POST['dob']));
		$message_id = mysql_real_escape_string($message_id);
		$employment = mysql_real_escape_string(htmlentities($_POST['employment']));
		$religion = mysql_real_escape_string(htmlentities($_POST['religion']));
		$blood_grp = mysql_real_escape_string(htmlentities($_POST['bldgrp']));
		$address = mysql_real_escape_string(htmlentities($_POST['address']));
		$sex = mysql_real_escape_string(htmlentities($_POST['sex']));
	$image = mysql_real_escape_string(htmlentities($image));
	$level = (int)$level;
		$query = "INSERT INTO teachers 
		(firstname,lastname,email,password,phone,date_of_employment,address,sex,religion,birthday,blood_grp,images,level,message_id)
		VALUES 
		('{$firstname}','{$lastname}','{$email}','{$password}','{$phone}','{$employment}','{$address}','{$sex}','{$religion}','{$dob}','{$blood_grp}','{$image}','{$level}','{$message_id}')";
mysql_query($query);
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

function countStudents(){
	$sql = "SELECT COUNT(student_id) FROM students";
	$query_sql = mysql_query($sql);
	$row = mysql_fetch_row($query_sql);
	
	//Here we have the total row counts
	$row = $row[0];
	echo $row;
}

//subject code exists
function sub_code($sub_code){
	$sub_code = mysql_real_escape_string($sub_code);
	
	$sql = mysql_query("SELECT COUNT(subject_id) FROM subject WHERE subject_code='{$sub_code}'");
	return(mysql_result($sql, 0) == '1') ? true : false;
}
//class name exists
function class_exist($classname){
	$classname = mysql_real_escape_string($classname);
	$sql = mysql_query("SELECT COUNT(class_id) FROM class WHERE class_name='{$classname}'");
	return(mysql_result($sql, 0) == '1') ? true : false;
}
//class code exists
function class_code_exist($classcode){
	$classcode = mysql_real_escape_string($classcode);
	
	$sql = mysql_query("SELECT COUNT(class_id) FROM class WHERE class_code='{$classcode}'");

	return(mysql_result($sql, 0) == '1') ? true : false;
}
//class routine exits
function class_rout_exist($class,$subject,$start,$end,$day){
	$class = mysql_real_escape_string($class);
	$subject = mysql_real_escape_string($subject);
	$end = mysql_real_escape_string($end);
	$start = mysql_real_escape_string($start);
	$day = mysql_real_escape_string($day);
	
	$sql = mysql_query("SELECT COUNT(routine_id) FROM class_routine WHERE class_id='{$class}' AND subject_id='{$subject}' AND time_start='{$start}' AND time_stop='{$end}' AND day='{$day}'") or(die(mysql_error()));

	return(mysql_result($sql, 0) == '1') ? true : false;
}
function session_exist($session,$term){
	$session = mysql_real_escape_string($session);
	$term = mysql_real_escape_string($term);
	
	$sql = mysql_query("SELECT COUNT(term_id) FROM term WHERE term='{$term}'AND session='$session'") or die(mysql_error());

	return(mysql_result($sql, 0) == '1') ? true : false;
}

function message_id($length){
	$charset = array_merge(range('a','z'), range(0,9));
	shuffle($charset);
	$message_id = array_slice($charset,8,$length);
	return implode('',$message_id);
}
function message_validation($user_names){
	foreach($user_names as &$name){
		$name = mysql_real_escape_string($name);
	}
		
		$sql = "SELECT username,message_id FROM students WHERE username IN ('".implode("','",$user_names)."')
		UNION
				SELECT username,message_id FROM admin WHERE username IN ('".implode("','",$user_names)."')";
	$result = mysql_query($sql);
	$names = array();
	while(($row = mysql_fetch_assoc($result)) !== false){
		$names[$row['username']] = $row['message_id'];
	}
	return $names;
}
function fetch_message_ids($user_names){
	foreach($user_names as &$name){
		$name = mysql_real_escape_string($name);
	}
		
		$sql = "SELECT username,message_id FROM students WHERE username IN ('".implode("','",$user_names)."')
		UNION
				SELECT username,message_id FROM admin WHERE username IN ('".implode("','",$user_names)."')";
	$result = mysql_query($sql);
	$names = array();
	while(($row = mysql_fetch_assoc($result)) !== false){
		$message_id = $row['message_id'];
	}
	return @$message_id;
}

	
	
?>