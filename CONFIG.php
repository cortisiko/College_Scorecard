<?php
// This is an example of config.php
$databasehost  = '127.0.0.1';
$dbuser = 'cdavidco_cdavid0';
$dbpass = 'Scccccc45';

$conn = mysql_connect($databasehost , $dbuser, $dbpass) or die('Error connecting to mysql');
$dbname = 'cdavidco_ban_dits';
mysql_select_db($dbname);

?>