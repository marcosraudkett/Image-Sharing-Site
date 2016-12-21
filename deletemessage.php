<?php
//Tällä scriptillä lisätään tietokantaan kommentti

//lisätään yhteys tietokantaan
include("../mvrclabs/uploads/8/0/4/6/8046813/tietokanta.php");

// if ($_POST['submit']) {

	//haetaan tiedot users.php sivulta
	$message_id = $_POST["message_id"];

	//poistetaan viesti tietokannasta
	mysql_query("DELETE FROM messages WHERE message_id = '$message_id'");

	//palautetaan takaisin viesteihin
	header("Location: http://marcosraudkett.com/projektityo/messages.php");

// } else {

// 	 echo 'valitettavasti emme pystyneet lisäämään kommenttia. kokeile uudelleen ja jos vika toistuu niin ota yhteyttä <a href="info@marcosraudkett.com">info@marcosraudkett.com</a>';

// }

?>