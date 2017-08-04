  <?php
session_start();
 	if(isset($_POST['add'])){
 	
 $tasks = $_POST['tasks'];
 $priority = @$_POST['priority'];
 echo $email = $_SESSION['email'];
 $date = $_POST['date'];
 $time = $_POST['time'];
 $desc = $_POST['desc'];
 
       
 $errors = array();
 if(empty($tasks) && empty($priority) && empty($date) && empty($time) && empty($desc)){
 	$errors[] = "Please fill in all field";
 }
 
 if(strlen($tasks) > 20){
 	$errors[] = 'Tasks must not be longer than 20 characters';
 }
 if(strlen($date) > 10){
 	$errors[] = 'Tasks must not be longer than 10 characters';
 }
 if(strlen($time) > 6){
 	$errors[] = 'Tasks must not be longer than 6 characters';
 }
 if(strlen($desc) > 255){
 	$errors[] = 'Tasks must not be longer than 255 characters';
 }
 if(empty($error)) {
 	$query = "INSERT INTO tasks ('email',task_title,task_priority,task_date,task_time,task_desc) VALUES ('$email','$tasks','$priority','$date','$time','$desc')";
	 
	 $query_run = mysql_query($query);
	 
 }
 
 
 
 }
?>

 
  
  
  
  
  <div class="container">
      <h2 class="page-header">Add Task</h2>
<?php
 if(isset($errors)){
 	if(empty($empty)){
 		echo 'Your tasks has been added';
		
		
 	}else{
 		foreach($errors as $errors){
 			echo "<p>". $errors ."</p>";
 		}
 	}
 }

?>
<?php
 $email = $_SESSION['email'];
?>
      <form id="add-task-form" role="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="form-group">
          <label>Task</label>
          <input type="text" class="form-control" id="task" placeholder="Enter task" name="tasks">
        </div>
        <div class="form-group">
          <label>Priority</label>
          <select class="form-control" id="priority" name="priority">
            <option value="0">Low</option>
            <option value="1" selected>Normal</option>
            <option value="2">High</option>
          </select>
        </div>
        <div class="form-group">
          <label>Date</label>
          <input type="date" id="date" class="form-control" name="date">
        </div>

        <div class="form-group">
          <label>Time</label>
          <input type="time" id="time" class="form-control" name="time">
        </div>
        
        <div class="form-group">
          <label>Decsription</label>
          <textarea name="desc" class="form-control"></textarea>
        </div>
        <button type="button" class="btn btn-default" name="add">Submit</button>
      </form>

    </div><!-- /.container -->
    
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  