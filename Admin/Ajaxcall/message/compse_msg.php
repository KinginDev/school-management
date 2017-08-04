<?php
include '../../functions/functions.php';
if(isset($_POST["to"])){
	$errors= array();
	if(empty($_POST['to'])){
		$errors[]= "You must enter a name";
	}else if(preg_match('#^[a-z,1-9, ]+$#i', $_POST['to']) === 0){
		$errors[] = 'The name does not look valid';
	}else{
		$user_names = explode(',',$_POST['to']);
		foreach($user_names as &$name){
			$name = trim($name);
		}
		$user_ids = message_validation($user_names);
		
		if(count($user_ids) !== count($user_names)){
			$errors[] = 'the following users cannot be found: '. implode(',',array_diff($user_names, array_keys($user_ids)));
		}
	}
	if(empty($_POST['subject'])){
		$errors[]= "The Subject cannot be empty";
	}
	if(empty($_POST['body'])){
		$errors[]= "The body cannot be empty";
	}
	$checkuserid = $_POST['senid'];
	$prevent_dp = mysql_query("SELECT id FROM messages WHERE from_message_id='$checkuserid' AND time_sent between subtime(now(),'0:0:20') and now()") or die(mysql_error());
	$nr = mysql_num_rows($prevent_dp) ;
	if($nr > 0){
		$errors = "You Must wait between 20 seconds to send mesages";
	exit();
	}
	if(empty($errors)){
		$senid = mysql_real_escape_string(htmlentities($_POST['senid']));
		$recid = mysql_real_escape_string(htmlentities($_POST['recid']));
		$subject = mysql_real_escape_string(htmlspecialchars($_POST['subject']));
		$body = mysql_real_escape_string(htmlspecialchars($_POST['body']));
		$sqql = "INSERT INTO messages (from_message_id,to_message_id,time_sent,message_text,subject) VALUES('$senid','$recid',now(),'$body','$subject')";
		mysql_query($sqql) or(die(mysql_error()));
	}
}

?>
<?php
	if(isset($errors)){
					if(empty($errors)){
						?>
						<div class="alert alert-info" id="suc">
							<span id="close" class="glyphicon glyphicon-remove" style="float:right; cursor: pointer; margin-left:10px;"></span>
						<?php
						echo "The operation was successful";
						?>
						</div>
						<?php
					}else{
						?>
						<div class="alert alert-danger"  id="suc">
							<span id="close" class="glyphicon glyphicon-remove" style="float:right; cursor: pointer; margin-left:10px;"></span>
							<?php
						foreach ($errors as $error) {
							
							echo "<p>".$error."</p>";
							
						}
						?>
							</div>
							<?php
					}
				}
				?>
				</div>
				<script>
					$('#close').click(function(){
					$('#suc').fadeOut('slow');
						
					});
				</script>