<?php

$host = 'localhost';
$user = 'root';
$pass = ''; 
$database = 'curtas';

$conn = mysql_connect($host, $user, '', $database, '3306');
if (!$conn) {

    die('Could not connect to MySQL: ' . mysql_connect_error());
}
mysql_select_db($database);




