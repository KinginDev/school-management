<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
?>
<?php
	include 'functions/functions.php';
	
	?>
	<div class="outter-wp">
		<div class="graph-visual tables-main">
		<div class="graph">
			<?php 
	$email = mysql_real_escape_string($_SESSION['email']);
	include '../includes/conn.php';
	$sql= "SELECT * FROM students WHERE email='$email'";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_array($res);
	$student_id = $row['student_id'];
?>
<div class="modal-header">
       
        <center>
        <h4 class="modal-title"><?php echo $row['firstname']."'s";?> Grades</h4>
        </center>
      </div>
    <div class="modal-body">
    	<table class="table table-responsive table-bordered table-striped">
    		<thead>
    			<th width="20%">Subject</th>
    			<th width="11.4%">Test 1</th>
    			<th width="11.4%">Test 2</th>
    			<th width="11.4%">Test 2</th>
    			<th width="11.4%">Test Average</th>
    			<th width="11.4%">Exam</th>
    			<th width="11.4%">Total Score</th>
    			<th width="11.4%">Grade</th>
    			
    			
    		</thead>
    		</table>
    	<?php 
    	$query  = "SELECT * FROM marks WHERE student_id='$student_id'";
		$result = mysql_query($query);
			while($row = mysql_fetch_array($result)){
				?>
				<table class="table table-responsive table-bordered table-striped">
			<tbody>
				<tr>
				<th width="20%"><strong><em><?php $suid =$row['subject_id']; 
					$query = "SELECT * FROM subject WHERE subject_id='$suid'";
					$res = mysql_query($query);
					$roww = mysql_fetch_array($res);
					echo $roww['subject_name'];?> </em></strong></th>
				<td  width="11.4%"><?php echo $row['test1']; ?></td>
				<td width="11.4%"><?php echo $row['test2']; ?></td>
				<td  width="11.4%"><?php echo $row['test3']; ?></td>
				<td  width="11.4%">
					<?php
					$t1 =$row['test1'];
					$t2 =$row['test2'];
					$t3 =$row['test3'];
					$avg = ($t1+$t2+$t3)/3;
					echo substr(($avg),0,5);
					?>
				</td>
				<td  width="11.4%"></td>
				<td  width="11.4%"></td>
				<td  width="11.4%"></td>
				</tr>
				</tbody>
			</table>
				<?php
			}
			
    	?>
    	    	</div>
    </div>
      
     
    <?php
?> 										
		</div>
												</div>
														
	</div>
	<div>
		<?php
	include 'includes/sidebar.inc.php';
	
	?>
	</div>