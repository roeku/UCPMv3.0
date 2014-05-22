<?php
$connection_error = "Sorry, we ondervinden problemen met de verbinding… We doen ons uiterste best om dit zo snel mogelijk op te lossen.";

mysql_connect('localhost', 'jellevandevelde', 'UCPM100') or die($connection_error);
mysql_select_db('jellevandevelde') or die($connection_error);
?>
