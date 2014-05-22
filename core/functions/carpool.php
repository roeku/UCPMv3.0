<?php
function listTransfers($userID){
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (endtime > NOW()) AND (userID!=$userID) AND (userID!=0) AND (label!='holiday') AND (DATE(endtime) = CURDATE()) ORDER BY starttime ASC");
	
	if (mysql_num_rows($result) == 0){
		echo '/';
	} else {
	while($row = mysql_fetch_array($result)){		
		echo '<article class="info_list"><div class="info_pic"><img src="img/'.getEmployee($row['userID'], 'img').'" width="80"></div><div class="info_container"><div class="info_title">'.timestampToHours($row['endtime']).' till '.timestampToHours(getNextInfo($row['userID'], $row['endtime'], 'starttime')).'</div><div class="info_extra">From '.$row['location'].' to '.getNextInfo($row['userID'], $row['endtime'], 'location').'</div></div></article>';
		}
	}	
}

function getNextInfo($user, $start, $info){

	//$user=1;
	$result = mysql_query("SELECT * FROM `UCPM_appointments` WHERE (userID=$user) AND (label!='holiday') AND (`starttime`>'$start') ORDER BY endtime ASC");
	

	if (mysql_num_rows($result) == 0){
		if($info='location'){
			return 'home';
		} else {
			return 'N/A';
		}
		
	} else {
	while($row = mysql_fetch_array($result)){
		return $row[$info];
		}
	}	

}

?>