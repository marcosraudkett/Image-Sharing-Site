<?php
//Tällä scriptillä lisätään tietokantaan kommentti

//lisätään yhteys tietokantaan
include("../mvrclabs/uploads/8/0/4/6/8046813/tietokanta.php");


// if ($_POST['submit']) {

	//haetaan tiedot kuva.php sivulta
	$get_username = $_POST["username"];
	$get_password = $_POST["username"];
	$get_email = $_POST["email"];
	$get_privileges = $_POST["privileges"];

	//lisätään tietokantaan
	mysql_query("INSERT INTO users (username, password, email, privileges) VALUES ('$get_username', '$get_password', '$get_email', '$get_privileges')");

	//palautetaan käyttäjä takaisin kuvan luo
	header("Location: http://marcosraudkett.com/projektityo/users.php");

// } else {

// 	 echo 'valitettavasti emme pystyneet lisäämään kommenttia. kokeile uudelleen ja jos vika toistuu niin ota yhteyttä <a href="info@marcosraudkett.com">info@marcosraudkett.com</a>';

// }

?>