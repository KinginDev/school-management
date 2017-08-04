	<?php
	include '../../includes/conn.php';
	if(isset($_POST['title']) && isset($_POST['content'])){
		
		$title = $_POST['title'];
		$content = $_POST['content'];
		$date = date('d/m/y');
		$posted_by = "The School Authority";
		$errors = array();
	if(empty($title)){
		$errors[] = 'The Title field cannot be empty';
		
	}
	if(empty($content)){
		$errors[] = 'The Content field cannot be empty';
	}
	if(strlen($title) > 50){
		$errors[] = "The Title cannot be more than 50 characters, it should be an highlight of the content";
	}
	
	if(empty($errors)){
	$query = "INSERT INTO noticeboard (title,subject,date,posted_by,notice_status) VALUES ('{$title}','{$content}','{$date}','{$posted_by}','0')";
		mysql_query($query);
		
	
		
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