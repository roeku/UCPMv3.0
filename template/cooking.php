<?php
	$curdate = time (); 
	$curhour = date('H', $curdate);
	$curminute = date('i', $curdate);
?>

<section class="index">
<p class="center">Would you like to start cooking right away?</p>

<div class="bigbutton_container">
	<a href="cooking_select.php?start_hour=<?php echo sprintf("%02s", $curhour+2)?>&start_min=<?php echo sprintf("%02s", $curminute)?>" alt="">
		<div class="bigbutton">
			Start right away
		</div>
	</a>
</div>

<p class="center">Or at a specific moment?</p>
<form action="cooking_select.php" method="get" id="cooking" class="center_div">
	
	<div class="timepick">
	<select name="start_hour">
	<?php
		for ($i=$curhour+2; $i<24; $i++) {
			echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
		}
	?>
	</select>
	
	<select name="start_min">
	<?php
		for ($i=round((date('i')+5/2)/5)*5; $i<60; $i=$i+5) {
			echo '<option value="'.sprintf("%02s", $i).'">'.sprintf("%02s", $i).'</option>';
		}
	?>
	</select><br/>
	</div>


<div class="bigbutton_container">
	<input type="submit" value="Specific time" class="bigbutton">
</div>
</form>

</section>