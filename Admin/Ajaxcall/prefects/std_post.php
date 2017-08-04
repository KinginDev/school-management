<?php 
include '../../includes/conn.php';
	if(isset($_POST['post_name']) && isset($_POST['post_code']) && isset($_POST['class_val'])){
		$errors = array();
		
		$post_name = $_POST['post_name'];
		$post_code = $_POST['post_code'];
		$class_val = $_POST['class_val'];
		if(empty($post_code)){
			$errors[] = "Post code Cannot Be empty";
		}
		if(empty($post_name)){
			$errors[] = "Post name Cannot Be empty";
		}
		if(empty($class_val)){
			$errors[] = "Class Validity Cannot Be empty";
		}
		function check_pref($post_name,$post_code,$class_val){
		$post_name = mysql_real_escape_string(htmlentities($_POST['post_name']));
		$post_code = mysql_real_escape_string(htmlentities($_POST['post_code']));
		$class_val = (int)$_POST['class_val'];
		$sql = mysql_query("SELECT COUNT(id) FROM prefects WHERE post_code='{$post_code}' AND post_title='$post_name'");
		return(mysql_result($sql, 0) == '1') ? true : false;
		}
		if(check_pref($post_name, $post_code, $class_val) == true){
		$errors[] = "This instance already Exists";	
		}
		if(empty($errors)){
		$post_name = mysql_real_escape_string(htmlentities($_POST['post_name']));
		$post_code = mysql_real_escape_string(htmlentities($_POST['post_code']));
		$class_val = (int)$_POST['class_val'];
		$sql= "INSERT INTO prefects (post_title,post_code,class_id) VALUES ('$post_name','$post_code','$class_val')";
		$res = mysql_query($sql);
	}
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
				
		
	<?php
	}else{
?> 




<table class="table table-hover table-bordered"> <thead> <tr> 
		 <th>Preference</th> 
		 <th>Post Title</th> 
		 <th>Post Code</th> 
		 <th>Class Validity</th>
		 </tr> 
		 </thead> 
		 <?php
		 $sql = "SELECT * FROM prefects ORDER BY id ASC";
		 $res = mysql_query($sql);
		 while($row =mysql_fetch_array($res)){
		 ?>
		 <tbody>
		 	<tr>
		 		<td><?php echo $row['id']; ?></td>
		 		<td><?php echo $row['post_title'];?></td>
		 		<td><?php echo $row['post_code'];?></td>
		 		<td><?php $class_id = $row['class_id'];
		 			$ssqqll = "SELECT class_code FROM class WHERE class_id='$class_id'";
		 			$ress = mysql_query($ssqqll);
		 			$row = mysql_fetch_array($ress);
		 			echo $row['class_code'];?></td>
		 	</tr>
		 </tbody>
<?php
}
	}
?>