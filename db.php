<?php 
//connetction to the database (change to whatever you'd like.)
$conn = mysql_connect("localhost", "root", "") or die(mysql_error()); mysql_select_db("") or die(mysql_error()); 
//charset to UTF8
mysql_set_charset("utf8", $conn);

?>