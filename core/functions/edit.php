<?php

function updateEvent($appID, $user, $title, $location, $start, $end, $label, $secret){	
	$q = "UPDATE `UCPM_appointments` SET `title`='$title',`location`='$location',`starttime`='$start',`endtime`='$end',`label`='$label',`secret`='$secret' WHERE `appID` = '$appID'";
	$result = mysql_query($q) or die(mysql_error());
	//echo $q;

}
?>