
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">

  </head>

  <body>
<?php
include 'includes/conn.php';
include '../index.php';

  
	$edit_id = $_GET['edit'];
   	
	$query_edit = "SELECT * FROM tasks WHERE id='$edit_id'";
	   $query_run_edit = mysql_query($query_edit);
	   
	   while( $row_edit = mysql_fetch_array($query_run_edit)){
	   		$id = $row_edit['id'];
		$tasks = $row_edit['task_title'];
		$priority = $row_edit['task_priority'];
		$date = $row_edit['task_date'];
		$time = $row_edit['task_time'];
		$desc = $row_edit['task_desc'];
	
 ?>  
   
    <div class="container">
      <h2 class="page-header">Edit Task</h2>

      <form id="edit-task-form" role="form" action="" method="post">
        <div class="form-group">
          <label>Task</label>
          <input type="text" class="form-control" id="task" placeholder="Enter task" value="<?php echo $tasks; ?>" name="tasks">
        </div>
        <div class="form-group">
          <label>Priority</label>
          <select class="form-control" id="priority" name="priority" value="<?php  
          if($priority == 0){
          	echo "Low";
          }elseif($priority == 1) {
          	echo "Medium";
		  }
		  else{
          	echo "High";
		  }
          ?>">
            <option value="low">Low</option>
            <option value="normal" selected>Normal</option>
            <option value="high">High</option>
          </select>
        </div>
        <div class="form-group">
          <label>Date</label>
          <input type="text" id="date" class="form-control" name="date" value="<?php echo $date; ?>">
        </div>

        <div class="form-group">
          <label>Time</label>
          <input type="time" id="time" class="form-control" name="time" value="<?php echo $time; ?>">
        </div>
<div class="form-group">
        <textarea name="desc" class="form-control"><?php  echo $desc;?></textarea>
</div>
        <button type="submit" class="btn btn-default" name="edit">Submit</button>
      </form>

    </div><!-- /.container -->
    <?php  }
?>
</body>

<?php  
  if(isset($_POST['edit'])){
	$tasks = $_POST['tasks'];
	$priority = $_POST['priority'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$desc = $_POST['desc'];
	
	$errors = array();
 if(empty($tasks) && empty($priority) && empty($date) && empty($time) && empty($desc)){
 	$errors[] = "Please fill in all field";
 }
 
 if(strlen($tasks) > 20){
 	$errors = 'Tasks must not be longer than 20 characters';
 }
 if(strlen($date) > 10){
 	$errors = 'Tasks must not be longer than 10 characters';
 }
 if(strlen($time) > 6){
 	$errors = 'Tasks must not be longer than 6 characters';
 }
 if(strlen($desc) > 255){
 	$errors = 'Tasks must not be longer than 255 characters';
 }
  if(empty($error)) {
	$query = "UPDATE tasks SET email='',task_title='$tasks',task_priority='$priority',task_date='$date',task_time='$time',task_desc='$desc'";
	
	$query_run= mysql_query($query);
	
  }
}

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

