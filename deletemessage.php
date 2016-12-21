<?php

include("db.php");

// if ($_POST['submit']) {

	$message_id = $_POST["message_id"];

	mysql_query("DELETE FROM messages WHERE message_id = '$message_id'");


	header("Location: http://marcosraudkett.com/projektityo/messages.php");

// } else {

// 	 echo 'valitettavasti emme pystyneet lisäämään kommenttia. kokeile uudelleen ja jos vika toistuu niin ota yhteyttä <a href="info@marcosraudkett.com">info@marcosraudkett.com</a>';

// }

?>
