<?php

include "../../includes/conn.php";
if(isset($_POST['id'])){
	$id = $_POST['id'];
	?>
	<?php
	$query = "SELECT teacher_id FROM class WHERE class_id='$id'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$teacher_ids = $row['teacher_id'];
	if(isset($teacher_ids)){
	$query = "SELECT * FROM teachers WHERE teacher_id='$teacher_ids'";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$num = mysql_num_rows($result);
		if($num <! 0){
	?>
	<div>The Class Has no Teacher</div>
	<?php
		}else{
			?>
			
			<div class="form-group">
		<label> Current teacher</label>
		<input type="text" value="<?php echo $row['firstname']." ".$row['lastname']; ?> " class='form-control1' />
	</div>
			<?php
		}
	}
	?>
		
  	<center>
  		<div class="form-group">
  			<label>Update to </label>
  			<select class="form-control1" name='teacher_id' id="teacher">
  				<?php
	$query = "SELECT * FROM teachers";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result)){
		?>
  			<option value="<?php echo $row['teacher_id']; ?>"><?php  echo $row['firstname']." ".$row['lastname']; ?></option>
  					<?php
	}
	?>
  			</select>
  		</div>
  	

<?php
}?>
  <input type="submit" value="Update" class="btn btn-primary" data-id="<?php echo $id;?>" id="update" name="update" />
  </form>
	<script>


		</script>
