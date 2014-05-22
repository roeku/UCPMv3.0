<?php 
	function checkForUpcomingHolidays($day, $month, $year) {
		if((checkForChildren($userID))== true) {
			echo '<p class="succes">Your kids have a holiday in the upcoming week!</p>';
		} else {
			echo '<p class="succes">Your colleagues kids have a holiday in the upcoming week!</p>';
		}
	}
	
	function checkForProfessionalAppointments($day, $month, $year, $bufferday, $buffermonth, $bufferday ,$userID){
		$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) < '$year-$month-$day') OR (DATE(starttime) > '$bufferyear-$buffermonth-$bufferday') AND label='professional' AND userID=$userID");
		if (mysql_num_rows($result) == 0){
			echo '<p class="succes">You don\'t have any work appointment(s) scheduled.</p>';
		} else {
			echo '<p class="succes">You currently have work appointment(s) scheduled.</p>';
		}
		checkForUpcomingHolidays($day, $month, $year);
		getAllOtherPlannedHolidays($day, $month, $year, $userID);
	}

	function checkForChildren($userID) {
		$result = mysql_query("SELECT * FROM `UCPM_employees` WHERE kids > 0 AND userID=$userID");
		if (mysql_num_rows($result) > 0){
			return true;
		} else {
			return false;
		}
	}

	function getAllOtherPlannedHolidays($day, $month, $year, $userID) {
			$result = mysql_query("SELECT * FROM `UCPM_appointments` INNER JOIN `UCPM_employees` ON UCPM_appointments.userID = UCPM_employees.userID WHERE label='holiday' AND UCPM_appointments.userID!=$userID ORDER BY starttime ASC");
	if (mysql_num_rows($result) == 0){
		echo '<p class="center">Your colleagues don\'t have a holiday planned.</p>';
	} else {
		while($row = mysql_fetch_array($result)){
			echo '<article class="info_list"><div class="info_pic"><img src="img/'.$row['img'].'" height="80"></div><div class="info_container"><div class="info_title">'.$row['name'].'</div><div class="info_extra">'.$row['function'].'</div><div class="info_extra">Goes on holiday on <b> '.timestampToDates($row['starttime']).'</b></div></div></article>';
			}
	}	
}


	function getMyPlannedHolidays() {
		$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE label='holiday' AND userID=$userID");
		if (mysql_num_rows($result) > 0){
			return true;
		} else {
			return false;
		}
	}

?>