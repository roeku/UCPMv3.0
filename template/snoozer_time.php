<?php

// Huidige tijd
	$curdate = time (); 
	$curday = date('d', $curdate); 
	$curmonth = date('m', $curdate); 
	$curyear = date('Y', $curdate);
	$curhour = date('H', $curdate);
	$curhour = $curhour + 1;
	$curhour= sprintf("%02s", $curhour);
	$snoozehour = date('H', $curdate);
	$snoozehour = $snoozehour + 2 + $_POST['hour'];
	$snoozehour= sprintf("%02s", $snoozehour);
	$curminute = date('i', $curdate);
	$cursecond = date('s', $curdate);
	$curtime = $curhour.':'.$curminute.':'.$cursecond;
	$snoozetime = $snoozehour.':'.$curminute.':'.$cursecond; 
?>
  <section class="index">
    <div class="thisday">
        <ul class="line-through">
	<?php 
    seeBeforeDeleted($curday, $curmonth, $curyear, $curtime, $snoozetime, $userID); ?>
        </ul><ul><li>
      <?php
    deleteEvent($curday, $curmonth, $curyear, $curtime, $snoozetime, $userID);
?></li></ul>
</div>