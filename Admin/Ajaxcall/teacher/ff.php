
<?php
	include '../../includes/conn.php';
	if (isset($_POST['id'])){
	$id  =(int)$_POST['id'];
	$query = "SELECT * FROM teachers WHERE teacher_id='$id'";
	$result = mysql_query($query) or die(mysql_error());
	$data = array();
	$row = mysql_fetch_array($result);
	?>
	<div class="table-responsive">
                            	
                                <table class="table table-striped table-bordered">
                                	
                           		<tr>
                           			<center>
                                	
                                	<img src="../teacher_images/<?php echo $row['images']; ?>" class="img-thumbnail" width="100px" height="100px">
                           		</center>
                            	<th id="fname">First Name</th>
                            	<td id="txt_fname"><?php echo $row['firstname']; ?></td>
                                </tr>
                                     
                                <tr>
                            	<th>Last Name</th>
                            	<td id="txt_lname"><?php echo $row['lastname']; ?></td>
                                </tr>
                                       		
                                <tr>
                                <th>Email ID</th>
                                <td id="txt_email"><?php echo $row['email']; ?></td>
                                </tr>
                                       		
                                <tr>
                                <th>Date of Birth</th>
                                <td id="txt_position"><?php echo $row['birthday']; ?></td>
                                </tr>
                                       		
                                <tr>
                                <th>Date Of Employment</th>
                                <td id="txt_office"><?php echo $row['date_of_employment']; ?></td>
                                </tr>
                                 <tr>
                                <th>Phone No</th>
                                <td id="txt_office"><?php echo $row['phone']; ?></td>
                                </tr>
                                <tr>
                                <th>SEX</th>
                                <td id="txt_office"><?php echo strtoupper($row['sex']); ?></td>
                                </tr>     		
                                 <tr>
                                <th>Address</th>
                                <td id="txt_office"><?php echo $row['address']; ?></td>
                                </tr>    
                                 <tr>
                                <th>Blood Group</th>
                                <td id="txt_office"><?php echo $row['blood_grp']; ?></td>
                                </tr>    
                                </table> 
                                </div>      
                             
                   <?php
	}