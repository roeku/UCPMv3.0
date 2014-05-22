<?php

?>

<section class="index">
	<?php 
deleteEvent($curday, $curmonth, $curyear, $curtime, $snoozetime, 1);
	/*if(deleteEvent($curday, $curmonth, $curyear, $curtime, $snoozetime, 1) == true) {
			echo '<p class="succes">Your appointments for the upcoming <b>2</b> hours have been removed.</p>';
	}	else {
			echo '<p class="succes">You had no appointments to remove.</p>';
		}
	*/ ?>
	
</section>