<?php  
	include '../../includes/conn.php';
	if(isset($_POST['view'])){
		if($_POST['view'] != ''){
			$update_sql = "UPDATE noticeboard SET notice_status=1 WHERE notice_status=0";
			 mysql_query($update_sql);
		}
	$query = "SELECT * FROM noticeboard WHERE notice_status=0 ORDER BY notice_id DESC LIMIT 5";
	$result = mysql_query($query);
	$output = '';
	if(mysql_num_rows($result) > 0){
		while($row = mysql_fetch_array($result)){
			$output.='
			<li><a href="#">
			<div class="notification_desc notif active" >
			<p><strong>'.$row["title"].'</strong></p>	
			<p><span>'.$row["date"].'</span></p>
			</div>
			<div class="clearfix"></div>	
			</a></li>
			
			';
		}
		$output .= '
		<li><div class="notification_bottom">
			<a href="#">See all notifications</a>
			</div> 
			</li>';
	}else{
		$output .='
		<li><div class="notification_header">
		<h3>You have no new notification</h3>
		</div></li>
		<li>
		<div class="notification_bottom">
			<a href="#">View Notifications</a>
			</div> 
			</li>
		';
	}
	$sql1 = "SELECT * FROM noticeboard WHERE notice_status=0";
	$res1 = mysql_query($sql1);
	$count = mysql_num_rows($res1);
	$data = array(
		'notification'			 => $output,
		'unseen_notification' 	 => $count
	);
	echo json_encode($data);
	}