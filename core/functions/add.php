<?php
// List with all the employees except the active userID
function listEmployees($userID){
	$result = mysql_query("SELECT * FROM `UCPM_employees` WHERE userID!=$userID");
		while($row = mysql_fetch_array($result)){
			echo '<option value="'.$row['userID'].'">'.$row['name'].'</option>';
		}
}

function postEvent($user, $title, $location, $start, $end, $invitee, $label, $secret){
	$q = "INSERT INTO `UCPM_appointments`(`userID`, `title`, `location`, `starttime`, `endtime`, `inviteesID`, `label`, `secret`) VALUES ('$user','$title','$location','$start','$end','$invitee','$label','$secret')";
	$result = mysql_query($q) or die(mysql_error());
	//echo $q;

}
?>