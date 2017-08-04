<?php

require  'includes/header.inc.php';

include 'includes/conn.php';
if(isset($_SESSION['email'])){
	$email = $_SESSION['email'];
}
?>
<?php
	include 'functions/functions.php';
	
	?>
	<?php
//paginition
	//This is first query is just to get the total count of rows
	$sql = "SELECT COUNT(student_id) FROM students";
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

$sql = "SELECT * FROM students ORDER BY 1 ASC $limit";
$query_sql = mysql_query($sql);


//This shows the users the user what type of page they are on, an the total number of pages
$textline1 = "Students (<b>$row</b>)";
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
														
															<div class="tables">
																<div class="graph">
																<table class="table table-bordered table-responsive" >
																	 <thead> <tr> 
																	 	<th>#</th>
																	 	<th>First Name</th> 
																	 	<th>Last Name</th>
																	 	<th>email</th> 
																	 	<th>images</th>
																	 	<th>Class</th>
																	 	<th>Option</th>
																	 	</thead> <tbody> <tr> 
																	 		
	
	<?php																 	
	while($query_row = mysql_fetch_array($query_sql)){
		$student_id = $query_row['student_id'];
		$firstname = $query_row['firstname'];
		$lastname = $query_row['lastname'];
		$email = $query_row['email'];
		$images = $query_row['images'];
		$class = $query_row['class_id'];
		?>
																	 		<th scope="row"><?php echo $student_id; ?></th>
																	 		<td><?php echo $firstname; ?></td> 
																	 		<td><?php echo $lastname; ?></td> 
																	 		<td style="width:inherit;"><?php echo $email; ?></td> 
<td><img class="img-rounded img-responsive " width="100px" height="50px" src="../student_images/<?php echo $images; ?>"</td>
		<td ><?php if(isset($class)){
  	$query = "SELECT * FROM class WHERE class_id='$class'";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result)){
		$class_code = $row['class_code'];
		$class = $row['class_id'];
		echo $class_code;
	
	}}
		?>
		
		</td>
																	 		<td>
																 			<div class="dropdown">
  									<button class="btn btn-default btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a class="edit-data" href="#edit" name="edit" data-toggle="modal" id="<?php echo $student_id; ?>" ><span><i class="fa fa-pencil-square-o"></i></span>Edit</a></li>
 
    <li><a class="view-data" href="#myModal" name="view" data-toggle="modal" id="<?php echo $student_id; ?>"  ><span><i class="glyphicon glyphicon-eye-open"></i></span>View More</a></li>
    <li><a href="#myModal" id=""><span><i class="fa fa-mail-forward"></i></span>Messages</a></li>
    <li><a href="#delTeacher" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  </ul>
</div></td>
																	 		 </tr> 
																	 		 <?php  }?>
																	 		 </table>
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
				 <!-- Modal -->

</div>											</div>
												
											</div>	
										</div>
										</div>
<div class="clearfix"></div>											
						<!--/sub-heard-part-->	
											
			<?php 
			include 'includes/sidebar.inc.php';
			 ?>
		</div>
		<!-- Modal to view teacher informaion -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center>
        <h4 class="modal-title">View Student Info</h4>
        </center>
      </div>
      
                       	   <div id="modal-loader" style="display: none; text-align: center;">
                       	   	<img src="../images/ajax-loader.gif">
                       	   </div>
                       	   <div id="dynamic-content">
                                        
                          
                                       		
                             
                             
                        </div> 
      	
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>


  </div>
</div>
<script>

//to get Student information
$(document).on('click', '.view-data', function(e){
		
		e.preventDefault();
		
		var uid = $(this).attr('id');   // it will get id of clicked row
		
		$('#dynamic-content').html(''); // leave it blank before ajax call
		$('#modal-loader').show();      // load ajax loader
		
		$.ajax({
			url: 'Ajaxcall/students/stu_info.ajaxcall.php',
			type: 'POST',
			data: 'id='+uid,
			dataType: 'html'
		})
		.done(function(data){
			console.log(data);	
			$('#dynamic-content').html('');    
			$('#dynamic-content').html(data); // load response 
			$('#modal-loader').hide();		  // hide ajax loader	
		})
		.fail(function(){
			$('#dynamic-content').html('<center><i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...</center>');
			$('#modal-loader').hide();
		});
		
	});
</script>