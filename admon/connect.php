<?
$dbhost							= "localhost";
$dbuser							= "asesoriayconsult";
$dbpass							= ".(=9sTElH69Z";
$dbname							= "asesoria_web";

$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ("Error connecting to database");
mysql_select_db($dbname);
?>