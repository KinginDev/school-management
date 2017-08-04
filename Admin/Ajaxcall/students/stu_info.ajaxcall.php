
<?php
	include '../../includes/conn.php';
	if (isset($_POST['id'])){
	$id  =(int)$_POST['id'];
	$query = "SELECT * FROM students WHERE student_id='$id'";
	$result = mysql_query($query) or die(mysql_error());
	$data = array();
	$row = mysql_fetch_array($result);
	?>
	
	<div class="row"> 
                                <div class="col-md-12"> 
                            	
                            	<div class="table-responsive">
                            	
                                <table class="table table-striped table-bordered">
                                	
                           		<tr>
                           			<center>
                                	
                                	<img src="../student_images/<?php echo $row['images']; ?>" class="img-thumbnail" width="100px" height="100px">
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
                                  <th>Class</th>
                                <td id="txt_office"><?php 
                             
                                
                                if(isset($row['class_id'])){
                                	$class= $row['class_id'];
                                	$query = "SELECT class_name FROM class WHERE class_id='$class'";
									$result = mysql_query($query) or die(mysql_error());
									$rowz = mysql_fetch_array($result);
									echo $rowz 	['class_name'];
                                } 
                               ?></td>
                                
                                </tr>       		
                                <tr>
                                <th>Date of Birth</th>
                                <td id="txt_position"><?php echo $row['birthday']; ?></td>
                                </tr>
                                       		
                                <tr>
                                <th>Blood Group</th>
                                <td id="txt_office"><?php echo $row['blood_grp']; ?></td>
                                </tr>
                                 <tr>
                                <th>Phone No</th>
                                <td id="txt_office"><?php echo $row['phone']; ?></td>
                                </tr>
                                <tr>
                                <th>SEX</th>
                                <td id="txt_office"><?php if($row['sex']===1){
                                	echo "MALE";
								} 
								else{
									echo "FEMALE";
								}?></td>
                                </tr>     		
                                 <tr>
                                 <th>Mother's Name</th>
                                <td id="txt_office"><?php echo $row['mothers_name']; ?></td>
                                </tr>  
                                <th>Father's Name</th>
                                <td id="txt_office"><?php echo $row['fathers_name']; ?></td>
                                </tr>    
                                 <tr>
                                <th>Blood Group</th>
                                <td id="txt_office"><?php echo $row['blood_grp']; ?></td>
                                </tr>    
                                <th>Religion</th>
                                <td id="txt_office"><?php echo $row['religion']; ?></td>
                                </tr>  
                                <style>
                                	.house-red{
                                		border: 1px solid  red;
                                		background-color: red;
                                		width: 20px; height:20px;
                                		float:right;
                                		margin-right:30px
                                	}
                                	.house-green{
                                		border: 1px solid  green;
                                		background-color: green;
                                		width: 20px; height:20px;
                                		float:right;
                                		margin-right:30px
                                	}
                                	.house-yellow{
                                		border: 1px solid  yellow;
                                		background-color: yellow;
                                		width: 20px; height:20px;
                                		float:right;
                                		margin-right:30px
                                	}
                                	
                                </style>
                                <th>House</th>
                                <td  id="txt_office"><?php echo $row['house'];?> <div width="10px" height="10px"  <?php if(strtolower($row['house'])==='red'){echo "class='house-red'";}elseif(strtolower($row['house'])==='green'){echo "class='house-green'";}elseif(strtolower($row['house'])==='blue'){echo "class='house-blue'";}elseif(strtolower($row['house'])==='yellow'){echo "class='house-yellow'";}?>></div></td>
                                </tr>   
                                </table> 
                                </div>      
                             
                   <?php
	}