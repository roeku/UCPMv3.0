<?php
function getAppointments($day, $month, $year, $userID){
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) <= '$year-$month-$day') AND (DATE(endtime) >= '$year-$month-$day') AND (TIMESTAMP(endtime) > CONVERT_TZ(NOW(),'+00:00','+2:00')) AND userID=$userID ORDER BY starttime ASC");
	if (mysql_num_rows($result) == 0){
		echo '<li><div class="empty">Nothing planned for this day…</div></li>';
	} else {
		while($row = mysql_fetch_array($result)){
			if ($row['secret']==1){
				$secret= '<div class="label secret">secret</div>';
			} else {
				$secret='';
			}
			if(date('Y-m-d', strtotime($row['endtime']))==date('Y-m-d', strtotime($row['starttime']))){
			echo '<li><a href="edit.php?id='.$row['appID'].'"><div class="label '.$row['label'].'">'.$row['label'].'</div>'.$secret.'<div class="time">'.timestampToHours($row['starttime']).' till '.timestampToHours($row['endtime']).'</div><div class="title">'.$row['title'].'</div><div class="location">At '.$row['location'].'</div></li></a>';
			} else {
			echo '<li><a href="edit.php?id='.$row['appID'].'"><div class="label '.$row['label'].'">'.$row['label'].'</div>'.$secret.'<div class="time">'.timestampToDates($row['starttime']).' <em>('.timestampToHours($row['starttime']).')</em> till '.timestampToDates($row['endtime']).' <em>('.timestampToHours($row['endtime']).')</em></div><div class="title">'.$row['title'].'</div><div class="location">At '.$row['location'].'</div></li></a>';
			}
		}
	}	
}

function getAllAppointments($day, $month, $year, $userID){
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) <= '$year-$month-$day') AND (DATE(endtime) >= '$year-$month-$day')  AND userID=$userID ORDER BY starttime ASC");
	if (mysql_num_rows($result) < 1){
		echo '<li><div class="empty">Nothing planned for this day…</div></li>';
	} else {
		while($row = mysql_fetch_array($result)){
			if ($row['secret']==1){
				$secret= '<div class="label secret">secret</div>';
			} else {
				$secret='';
			}
			if(date('Y-m-d', strtotime($row['endtime']))==date('Y-m-d', strtotime($row['starttime']))){
			echo '<a href="edit.php?id='.$row['appID'].'"><li><div class="label '.$row['label'].'">'.$row['label'].'</div>'.$secret.'<div class="time">'.timestampToHours($row['starttime']).' till '.timestampToHours($row['endtime']).'</div><div class="title">'.$row['title'].'</div><div class="location">At '.$row['location'].'</div></li></a>';
			} else {
			echo '<li><a href="edit.php?id='.$row['appID'].'"><div class="label '.$row['label'].'">'.$row['label'].'</div>'.$secret.'<div class="time">'.timestampToDates($row['starttime']).' <em>('.timestampToHours($row['starttime']).')</em> till '.timestampToDates($row['endtime']).' <em>('.timestampToHours($row['endtime']).')</em></div><div class="title">'.$row['title'].'</div><div class="location">At '.$row['location'].'</div></li></a>';
			}
		}
	}	
}

function getEvent($id, $info){
	$result = mysql_query("SELECT $info FROM `UCPM_appointments` WHERE appID=$id");
	while($row = mysql_fetch_array($result)){
		return $row[$info];
		}
}


/*
function meetingsTogether(){
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) = '$year-$month-$day') AND inviteesID!=0")
}


function checkDayForPrivateAppointment($day, $month, $year){
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) = '$year-$month-$day') AND label='private' AND userID=1");
	if (mysql_num_rows($result) > 0){
		$matchFound='<a>&bull;</a>';
	} else {
		$matchFound='<a>&thinsp;</a>';
	}
	return $matchFound;
}

function checkDayForProfessionalAppointment($day, $month, $year){
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (DATE(starttime) = '$year-$month-$day') AND label='professional' AND userID=1");
	if (mysql_num_rows($result) > 0){
		$matchFound='<a>&bull;</a>';
	} else {
		$matchFound='<a>&thinsp;</a>';
	}
	return $matchFound;
}
*/
?>