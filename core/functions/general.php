<?php
function timestampToHours($mysqltime){
	return date('H:i',strtotime($mysqltime));
}

function timestampToDates($mysqltime){
	return date('d-m',strtotime($mysqltime));
}

// now
function amIInAnAppointment($moment, $date, $userID){
	$command="SELECT * FROM `UCPM_appointments` WHERE (TIME(starttime) < '$moment') AND (TIME(endtime) > '$moment') AND (DATE(starttime) > $date) AND (userID=1)";
	
	$query = mysql_query($command);

	if (mysql_num_rows($query) > 0){
		return true;
	} else {
		return false;
	}
}

// for the day
function foundAppointment($day, $month, $year, $userID){
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) = '$year-$month-$day') AND (TIMESTAMP(endtime) > CONVERT_TZ(NOW(),'+00:00','+2:00')) AND userID=$userID ORDER BY starttime ASC");
	if (mysql_num_rows($result) == 0){
		return false;
	} else {
		while($row = mysql_fetch_array($result)){
			return true;
			}
	}	
}
?>
