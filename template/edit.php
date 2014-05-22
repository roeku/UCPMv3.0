<?php
$appID = $_GET['id'];
?>

<section class="index">
	<form id="edit" action="edit_post.php" method="post">
	<p>Title</p>
	<input type="text" name="title" value="<?php echo getEvent($appID, 'title'); ?>">
	<p>Location</p>
	<input type="text" name="location" value="<?php echo getEvent($appID, 'location'); ?>">
	
	
	<p>Start</p>
	<select name="start_day">
	<?php
		for ($i=1; $i<=31; $i++) {
			if ($i==date('d',strtotime(getEvent($appID, 'starttime')))){
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
			if ($i==date('m',strtotime(getEvent($appID, 'starttime')))){
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
			if ($i==date('Y',strtotime(getEvent($appID, 'starttime')))){
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
			if ($i==date('H',strtotime(getEvent($appID, 'starttime')))){
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
			if ($i==date('i',strtotime(getEvent($appID, 'starttime')))){
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
			if ($i==date('d',strtotime(getEvent($appID, 'endtime')))){
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
			if ($i==date('m',strtotime(getEvent($appID, 'endtime')))){
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
			if ($i==date('Y',strtotime(getEvent($appID, 'endtime')))){
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
			if ($i==date('H',strtotime(getEvent($appID, 'endtime')))){
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
			if ($i==date('i',strtotime(getEvent($appID, 'endtime')))){
				echo '<option value="'.sprintf("%02s", $i).'" selected="selected">'.sprintf("%02s", $i).'</option>';
			} else {
				echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
			}
		}
	?>
	</select>
		
	<p>Label</p>
	<select name="label">
	<?php
	if (getEvent($appID, 'label')=='professional'){
		echo '<option value="professional" selected="selected">Professional</option>
		<option value="private">Private</option>
		<option value="holiday">Holiday</option>';
	} else if (getEvent($appID, 'label')=='private') {
		echo '<option value="professional">Professional</option>
		<option value="private" selected="selected">Private</option>
		<option value="holiday">Holiday</option>';
	} else if (getEvent($appID, 'label')=='holiday') {
		echo '<option value="professional">Professional</option>
		<option value="private">Private</option>
		<option value="holiday" selected="selected">Holiday</option>';
	}
	
	?>
	</select> 
	<p>Secret</p>
	<select name="secret">
	<?php
	
	if (getEvent($appID, 'secret')==0){
		echo '<option value="0" selected="selected">Public</option>
		<option value="1">Hide from others</option>';
	} else if (getEvent($appID, 'secret')==1) {
		echo '<option value="0">Make public</option>
		<option value="1" selected="selected">Hide from others</option>';
	}?>
	</select> 
	<input type="text" class="hidden" name="appID" value="<?php echo $appID; ?>">

	</form>

</section>

