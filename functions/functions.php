<?php
session_start();
include 'includes/conn.php';

function valid_cred_std($email,$password){
	$email = mysql_real_escape_string($email);
	$password = sha1($password);
	$total = mysql_query("SELECT COUNT(student_id) FROM students WHERE email='$email' AND password='$password'");
		return(mysql_result($total, 0) === '0') ? true : false;
		
}
function valid_cred_tea($email,$password){
	$email = mysql_real_escape_string($email);
	$password = sha1($password);
	$total = mysql_query("SELECT COUNT(teacher_id) FROM teachers WHERE email='$email' AND password='$password'");

		return(mysql_result($total, 0) == '1') ? true : false;	
}
function valid_cred_admin($email,$password){
	$email = mysql_real_escape_string($email);
	$password = sha1($password);
	$total = mysql_query("SELECT COUNT(admin_id) FROM admin WHERE email='$email' AND password='$password'");

	
		
}
?>