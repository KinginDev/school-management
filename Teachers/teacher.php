<?php

include_once 'includes/header.inc.php';

include 'includes/conn.php';
?>
<?php
	include 'functions/functions.php';
	
	?>
		<?php
//paginition
	//This is first query is just to get the total count of rows
	$sql = "SELECT COUNT(teacher_id) FROM teachers";
	$query_sql = mysql_query($sql);
	$row = mysql_fetch_row($query_sql);
	
	//Here we have the total row counts
	$row = $row[0];
	
//This is the number of results we want displayed per page
$page_rows = 5;
	
	//This tells us the page number of our last page
	$last = ceil($row/$page_rows);
	// This amkes sure last canot be less thn one
	
	if($last < 1){
		$last=1;
	}
	// Establish the pagenum var
	$pagenum = 1;
	
	//Get the page num from the url var if it is present, else it is = 1
	if(isset($_GET['pn'])){
		$pagenum= preg_replace('#[^0-9]#', '', $_GET['pn']);
		
	}
	// This makes sure the page number isn,t below 1, or more than our $last page
	
	if($pagenum < 1) {
		$pagenum = 1;
	}else if ($pagenum > $last){
		$pagenum = $last;
	}
	//This sets the range of row to query for the chosen $pagenum
	
	$limit ='LIMIT ' .($pagenum - 1) * $page_rows.',' .$page_rows;
	
	
	//This is your query, agina it is for grabbing just one page worth of rows by applying $limit

$sql = "SELECT * FROM teachers ORDER BY 1 ASC $limit";
$query_sql = mysql_query($sql);


//This shows the users the user what type of page they are on, an the total number of pages
$textline1 = "Notices (<b>$row</b>)";
$textline2 = "page <b>$pagenum</b> of <b>$last</b>";

//Establish the paginaition ctrls var
$paginitioncrtls = '';
//if there is more than one page worth of resuts
if ($last != 1) {
	/* First we check if we are one page one. 
	 * If we are then we don't neeed a 
 	 * link to he prev page or the first page
	 * so we do nothing. if we are'nt then we 
	 * generate links to the first and the prev 
	 * pages respectively*/
	
	if($pagenum > 1){
		$prev = $pagenum - 1;
$paginitioncrtls .= '<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$prev.'"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li> &nbsp; &nbsp;';
//Render click able number links that should apper on the left of the target page
		
		for ($i = $pagenum-4; $i < $pagenum; $i++){
			if ($i > 0){
			$paginitioncrtls .= '<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a></li> &nbsp; &nbsp;';
		}
		}
	}
	//Render the target page number, but without it beign a link
	$paginitioncrtls .=  '<li  class="disabled active"><a href="">'.$pagenum.'</a></li> &nbsp;';
	//Render clickable num links that appear on the right
	
	for($i = $pagenum + 1; $i <= $last; $i++) {
		$paginitioncrtls .= '<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a></li> &nbsp;';
	  if($i >= $pagenum + 4) {
	  	break;
	  	}	
	}
	//This does the same as asbove , only checking if we are on the last page and then generating the "Next"
	if($pagenum != $last) {
		$next = $pagenum + 1;
		
		$paginitioncrtls .= '<li><a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'"><span aria-hidden="true">&laquo;</span><span class="sr-only">Next</span></a></li> &nbsp; &nbsp;';
		
	}
}

?>
							<!--//outer-wp-->
									<div class="outter-wp">
									<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.html">Home</a></li>
															<li class="active">Calender</li>
														</ol>
											</div>	
											<!--/sub-heard-part-->	
										
														<div class="clearfix"> </div>	
													
												
												<!--//custom-widgets-->
									
												<div class="graph-visual tables-main">
										
												<h3 class="inner-tittle two">Teacher </h3>
												
											
													<div class="graph">
														<div class="tables">
																<table class="table table-bordered"> 
																
<thead>
	 <tr> 
<th>#</th>
 <th>Teacher</th> 
 <th>Images</th>
<th>Subjects</th>
<th>email</th>

<th>Class</th>

<th>Action</th>
 </tr> </thead> 
 <tbody> <tr>
 		
																	<?php
																
																	
															
																$_SESSION['email'];		
																$query_run = mysql_query($sql);
																	
																while ($row = mysql_fetch_array($query_run)) {
																	$teacher_id = $row['teacher_id'];
																	$firstname = $row['firstname'];
																	$lastname = $row['lastname'];
																	$teacher_email = $row['email'];
																	$images = $row['images'];
														?>
  <th scope="row"><?php echo $teacher_id; ?></th> 
  <td><?php  echo $firstname. ' '. $lastname; ?></td> 
  <td><img class="img-rounded" width="80px" src="../teacher_images/<?php echo $images; ?>"</td>
  <td><?php  if(isset($teacher_id)){
  	$query = "SELECT * FROM subject WHERE teacher_id='$teacher_id'";
	$result = mysql_query($query);

	while($row = mysql_fetch_array($result)){
		$subject_code = $row['subject_code'];

		?>
			
  	<button class="btn btn-default btn-custom dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $subject_code; ?>
 </button>
  
		<?php
		
	}
  } ?></td> 
  <td><?php  echo $teacher_email; ?></td> 
  <td><?php if(isset($teacher_id)){
  	$query = "SELECT * FROM class WHERE teacher_id='$teacher_id'";
	$result = mysql_query($query);

	while($row = mysql_fetch_array($result)){
		$class_code = $row['class_code'];

		?>
		
  	<button class="btn btn-default btn-custom dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $class_code; ?>
 </button>
  

		<?php
		
	}
  } ?>
  </td>
 
  <td><div class="dropdown">
  <button class="btn btn-primary btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Message</button>
  </td>
  </tr>
  	<?php  
  		}
  	?>
 </table>
	</div>		
			</div>
			 																	 		  <div class="pagination_area">
       	<h3><?php echo $textline1;?></h3>
        <p><?php echo $textline2; ?></p>  
         
      <nav>
            <ul class="pagination">
             <?php echo $paginitioncrtls; ?>
            </ul>
          </nav>
        </div>
        <div class="clearfix"></div>
			</div>
												
		</div>
													
											</div>

											
										
		<div>
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
