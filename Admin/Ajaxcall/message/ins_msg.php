<?php
include '.././functions/functions.php';
$user_names = explode(',',$_POST['to']);
		foreach($user_names as &$name){
			$name = trim($name);
		}
echo $message_id = fetch_message_ids($user_names);
?>