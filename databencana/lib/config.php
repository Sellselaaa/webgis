<?php

$db_host			= 'localhost';
$db_user 			= 'root';
$db_pass 			= '';
$db_name 			= 'blog';

mysql_connect($db_host, $db_user, $db_pass) or die ("Error connecting to database server.<br>reason:".mysql_error());
mysql_select_db($db_name) or die ("Database \"" . $db_name . "\" not found!");

?>