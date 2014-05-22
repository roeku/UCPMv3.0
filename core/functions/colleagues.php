<?php

//get other peeps appointments with names
function getOthersAppointments($day, $month, $year, $userID){
	//echo '<h1>Colleagues</h1>';
	$result = mysql_query("SELECT * FROM `UCPM_appointments` INNER JOIN `UCPM_employees` ON UCPM_appointments.userID = UCPM_employees.userID WHERE $userID!=inviteesID AND (DATE(starttime) = '$year-$month-$day') AND UCPM_appointments.userID!=$userID ORDER BY starttime ASC");
	if (mysql_num_rows($result) == 0){
		echo '<li><div class="empty">Nothing planned for this day…</div></li>';
	} else {
		while($row = mysql_fetch_array($result)){
			echo '<li><div class="time">'.timestampToHours($row['starttime']).' till '.timestampToHours($row['endtime']).'</div><div class="title">'.$row['title'].'</div><div class="location">'.$row['location'].'</div><div class="title">'.$row['name'].'</div></li>';
			}
	}	
}

function getColleagues($userID){
	$result = mysql_query("SELECT * FROM `UCPM_employees` WHERE userID!=$userID");
	if (mysql_num_rows($result) == 0){
		echo 'No colleagues found';
	} else {
		while($row = mysql_fetch_array($result)){
			echo '<a href="c_calendar.php?day='.date("j").'&month='.date("n").'&year='.date("Y").'&id='.$row['userID'].'">';
			echo '<article class="info_list"><div class="info_pic"><img src="img/'.$row['img'].'" height="80"></div><div class="info_container"><div class="info_title">'.$row['name'].'</div><div class="info_extra">'.$row['function'].'</div></div></article>';
			echo '</a>';
			}
	}	
}


function getColleaguesName($userID){
	$result = mysql_query("SELECT name FROM `UCPM_employees` WHERE userID=$userID");
	if (mysql_num_rows($result) == 0){
		echo 'No name found';
	} else {
		while($row = mysql_fetch_array($result)){
			echo $row['name'];
			}
	}	
}


?> 