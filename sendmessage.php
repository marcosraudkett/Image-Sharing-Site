<?php
//Tällä scriptillä lisätään tietokantaan kommentti

//lisätään yhteys tietokantaan
include("db.php");

// if ($_POST['submit']) {

	//haetaan tiedot kuva.php sivulta
	$get_name = $_POST["name"];
	$get_email = $_POST["email"];
	$get_message = $_POST["message"];

	//lisätään tietokantaan
	mysql_query("INSERT INTO messages (message_name, message_email, message_text) VALUES ('$get_name', '$get_email', '$get_message')");

	//palautetaan käyttäjä takaisin kuvan luo
	header("Location: http://marcosraudkett.com/projektityo/thanks.php");

// } else {

// 	 echo 'valitettavasti emme pystyneet lisäämään kommenttia. kokeile uudelleen ja jos vika toistuu niin ota yhteyttä <a href="info@marcosraudkett.com">info@marcosraudkett.com</a>';

// }


?>
