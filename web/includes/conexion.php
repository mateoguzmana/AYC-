<?

$host="localhost";
$user="asesoriayconsult";
$password=".(=9sTElH69Z";
$database="asesoria_web";
$id=mysql_connect($host,$user, $password);

mysql_query("SET CHARACTER SET utf8 ");
mysql_select_db($database, $id);

?>