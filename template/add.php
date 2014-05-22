<?php
	$curmin = round((date('i')+5/2)/5)*5;
?>

<section class="index">
	<form id="add" action="add_post.php" method="post">
	<p>Title</p>
	<input type="text" name="title">
	<p>Location</p>
	<input type="text" name="location">
	
	
	<p>Start</p>
	<select name="start_day">
	<?php
		for ($i=1; $i<=31; $i++) {
			if ($i==$_GET['day']){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.sprintf("%02s", $i).'</option>';
			} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
			}
		}
	?>
	</select>
	
	<select name="start_month">
	<?php
		for ($i=1; $i<=12; $i++) {
			if ($i==$_GET['month']){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.date('F', mktime(0, 0, 0, $i, 1)).'</option>';
			} else {
			echo '<option value="'.sprintf("%02s", $i).'">'.date('F', mktime(0, 0, 0, $i, 1)).'</option>';
			}
		}
	?>
	</select>
	
	<select name="start_year">
	<?php
		for ($i=2014; $i<=2050; $i++) {
			if ($i==$_GET['year']){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.sprintf("%02s", $i).'</option>';
		} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
		}
		}
	?>
	</select><br/>
	<select name="start_hour">
	<?php
		for ($i=0; $i<24; $i++) {
			if ($i==date('H')+2){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.sprintf("%02s", $i).'</option>';
			} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
			}
		}
	?>
	</select>
	
	<select name="start_min">
	<?php
		for ($i=0; $i<60; $i=$i+5) {
			if ($i==date('i')){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.sprintf("%02s", $i).'</option>';
			} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
			}
		}
	?>
	</select>
	
	<p>End</p>
	<select name="end_day">
	<?php
		for ($i=1; $i<=31; $i++) {
			if ($i==$_GET['day']){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.sprintf("%02s", $i).'</option>';
			} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
			}
		}
	?>
	</select>
	
	<select name="end_month">
	<?php
		for ($i=1; $i<=12; $i++) {
			if ($i==$_GET['month']){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.date('F', mktime(0, 0, 0, $i, 1)).'</option>';
			} else {
			echo '<option value="'.sprintf("%02s", $i).'">'.date('F', mktime(0, 0, 0, $i, 1)).'</option>';
			}
		}
	?>
	</select>
	
	<select name="end_year">
	<?php
		for ($i=2014; $i<=2050; $i++) {
			if ($i==$_GET['year']){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.sprintf("%02s", $i).'</option>';
		} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
		}
		}
	?>
	</select><br/>
	<select name="end_hour">
	<?php
		for ($i=0; $i<24; $i++) {
			if ($i==date('H')+3){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.sprintf("%02s", $i).'</option>';
			} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
			}
		}
	?>
	</select>
	<select name="end_min">
	<?php
		for ($i=0; $i<60; $i=$i+5) {
			if ($i==date('i')){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.sprintf("%02s", $i).'</option>';
			} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
			}
		}
	?>
	</select>
	
	<p>Invitees</p>
	<select name="invitee">
		<option value="0">None</option>	
		<?php listEmployees($userID);?>
	</select>
	
	<p>Label</p>
	<select name="label">
		<option value="professional" selected="selected">Professional</option>
		<option value="private">Private</option>
		<option value="private">Holiday</option>
	</select> 
	<p>Secret</p>
	<select name="secret">
		<option value="0" selected="selected">Make public</option>
		<option value="1">Hide from others</option>
	</select> 

	
	
	<br/>

	</form>
</section>

