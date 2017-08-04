<?php
include '../../includes/conn.php';
$record_per_page = 5;
$page = '';
if(isset($_POST['page'])){
	$page = $_POST['page'];
}else{
	$page = 1;
}
$start_from = ($page - 1) * $record_per_page;
$sql = "SELECT * FROM noticeboard ORDER BY notice_id DESC LIMIT $start_from,$record_per_page";
$query_sql = mysql_query($sql) or die(mysql_error());
$row = mysql_num_rows($query_sql);
?>

<table class="table table-hover"> <thead> <tr> <th>#</th>
		 <th>Title</th> 
		 <th>Content</th> 
		 <th>Date Posted</th>
		 <th>Posted By</th>
		
		 <th>Action</th>
		 </tr> 
		 </thead> 
		 <?php																 	
	while($query_row = mysql_fetch_array($query_sql)){
		@$id++;
		$content = substr($query_row['subject'],0,25);
		$content_f =$query_row['subject'];
		$title = $query_row['title'];
		$date = $query_row['date'];
		$posted_by = $query_row['posted_by'];
		
		?>
		 <tbody> <tr> <th scope="row"><?php echo $id; ?></th> 
		 	
		 	<td><?php echo $title; ?></td>
		 	<td data-toggle="tooltip" data-placement="bottom" title="<?php echo $content_f; ?>"><?php echo $content; ?>..</td> 
		 	<td><?php echo $date; ?></td>
		 	<td><?php echo $posted_by; ?></td>
		 	<td><div class="dropdown">
  									<button class="btn btn-default btn-custom dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#"><span><i class="fa fa-pencil-square-o"></i></span>Edit</a></li>
    <li><a href="#myModal" name="view" data-toggle="modal"><span><i class="fa fa-trash-o"></i></span>Delete</a></li>
  
  </ul>
</div></td>
		  </tr>
		  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        	<center>
        	<h4>Are you sure You want to Delete ?..</h4>
        	</center>
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-6">
        				<form method="POST">
        	<button type="button" name="yes" id="del" data-id="<?php echo $query_row['notice_id']; ?>" class="btn btn-success pull-left">Yes</button>
        	
        		<button type="button" name="yes" class="btn btn-danger pull-right">No</button>
        		</form>
        	</div>
        	</div>
        </div>
       </div>
        </div>
        </div>
        </div>
		  <?php
		  }?> 
		 	</table>
		 	<?php
$page_query = "SELECT * FROM noticeboard ORDER BY notice_id DESC";
$page_result = mysql_query($page_query);
$total_records = mysql_num_rows($page_result);
$total_pages = ceil($total_records/$record_per_page);

for($i=1; $i<=$total_pages; $i++){
	
	?>
	
	<nav>
		<ul class="pagination"  style="display: block; margin-left:40%;">
	<li><span class="pagination_link" style="cursor: pointer; padding:10px; border:1px solid #eee; border-radius: 3px;"  id="<?php echo $i; ?>"><?php echo $i; ?></span></li>
	</ul>
	</nav>

	<?php
}
		  ?> 
		 	