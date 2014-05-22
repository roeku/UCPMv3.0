<?php 
	$curdate = time();
	$curday = date('d', $curdate);
	$curmonth = date('m', $curdate);
	$curyear = date('Y', $curdate);

	$bufferdays = 7;
	$bufferday = $curday + $bufferdays;

	checkForProfessionalAppointments($curday, $curmonth, $curyear, $bufferday, $curmonth, $curyear, $userID);

?>