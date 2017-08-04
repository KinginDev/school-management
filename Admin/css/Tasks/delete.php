

<?php 
include 'includes/conn.php';

$delete_id =$_GET['del'];

$delete_query = "DELETE FROM tasks WHERE id='$delete_id'";

if(mysql_query($delete_query)){
    echo "<script>alert('A task has been deleted')</script>";
    echo "<script>window.open('../index.php?view=view','_self')</script>";
    
}
?>