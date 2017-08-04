

<!DOCTYPE html>
      <head>
   <script type="text/javascript">
         function load(thediv , thefile){
         if(window.XMLHttpRequest)  {
             xmlhttp = new XMLHttpRequest();
             
         }else{
            xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
             
         }
             
        xmlhttp.onreadystatechange = function() {
            
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById(thediv).innerHTML = xmlhttp.responseText;
            }
        }
          
        xmlhttp.open('GET', thefile ,true);
             xmlhttp.send();
             
         }     
   </script>  
   </head>
<?php
include 'includes/conn.php';

 $email = $_SESSION['email'];
 echo $email;
?>

<?php
//paginition
	//This is first query is just to get the total count of rows
	$sql = "SELECT COUNT(id) FROM tasks";
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

$sql = "SELECT * FROM tasks ORDER BY 1 DESC $limit WHERE email='$email' ";

$query_sql = mysql_query($sql);

//This shows the users the user what type of page they are on, an the total number of pages
$textline1 = "Tasks (<b>$row</b>)";
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







    

    <div class="container tasks-area">
    	
      <h2 class="page-header">Event Schedule</h2>

      <table class="table table-striped table-responsive">
        <tr>
          <th>Title</th>
          <th>Priority</th>
          <th>Date</th>
          <th>Time</th>
          <th>Description</th>
          <th>Delete</th>
          <th>Edit</th>
        </tr>
        <tr>
        	<?php
	
	
	while($query_row = mysql_fetch_array($query_sql)){
		$id = $query_row['id'];
		$tasks = $query_row['task_title'];
		$priority = $query_row['task_priority'];
		$date = $query_row['task_date'];
		$time = $query_row['task_time'];
		$desc = $query_row['task_desc'];
		?>
		
        	<td><?php echo $tasks; ?></td>
        	<td><?php  
          if($priority == 0){
          	echo "Low";
          }elseif($priority == 1) {
          	echo "Medium";
		  }
elseif($priority == 1){
          	echo "High";
		  }
          ?></td>
        	<td><?php echo $date ?></td>
        	<td><?php echo $time; ?></td>
        	<td width="300px;"><?php echo $desc; ?></td>
        	<td><button class="btn btn-default"><a href="delete.php?del=<?php echo $id; ?>">Del</a></button></td>
        	<td><button class="btn btn-default"><a href="tasks/edit.php?edit=<?php echo $id; ?>">Edit</a></button></td>
        
        </tr>
        	<?php }?>
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

      <a onclick="load('adiv','../tasks/addtasks.php');"  class="btn btn-primary">Add A Tasks</a>
       

 <a href="del_all.php?del=del" class="btn btn-primary">Clear All Tasks</a>


    </div><!-- /.container -->

<?php
	if(isset($_GET['add'])){
            include 'edit.php';
        }
	
	
?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
