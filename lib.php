<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pass = "enqkfwkdb77";
$mysql_db   = "test";

$mysqli = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
if ( $mysqli->connect_error ) exit("접속 실패 : ".$mysqli->connect_error);
$mysqli->set_charset("utf8");

$ip_address	= $_SERVER['REMOTE_ADDR'];



// 현재 일자, 시간 구함
$curdate = date("Y-m-d", time());
$curtime = date("H:i:s", time());
$now     = $curdate . " " . $curtime;
?>