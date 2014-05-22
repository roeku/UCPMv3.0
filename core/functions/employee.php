<?php
function getEmployee($user, $info){
	$result = mysql_query("SELECT $info FROM `UCPM_employees` WHERE userID=$user");
	while($row = mysql_fetch_array($result)){
		return $row[$info];
		}
}

?>