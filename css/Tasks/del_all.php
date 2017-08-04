<?php
include 'includes/conn.php';

$delete_id =$_GET['del'];

$delete_query = "DELETE FROM tasks ";

if(mysql_query($delete_query)){
    echo "<script>alert('All tasks has been cleared')</script>";
    echo "<script>window.open('../index.php?view=view','_self')</script>";
    
}

?>