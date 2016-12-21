<?php
//Tällä scriptillä lisätään tietokantaan kommentti

//lisätään yhteys tietokantaan
include("../mvrclabs/uploads/8/0/4/6/8046813/tietokanta.php");

// if ($_POST['submit']) {

	//haetaan tiedot kuva.php sivulta
	$get_photo_id = $_POST["photo_id"];
	$get_user_id = $_POST["user_id"];

	//lisätään tietokantaan
	mysql_query("DELETE FROM likes WHERE like_photo_id = '$get_photo_id' AND like_user_id = '$get_user_id'");

	//palautetaan käyttäjä takaisin kuvan luo
	header("Location: http://marcosraudkett.com/projektityo/kuva.php?kuva_id=$get_photo_id");

// } else {

// 	 echo 'valitettavasti emme pystyneet lisäämään kommenttia. kokeile uudelleen ja jos vika toistuu niin ota yhteyttä <a href="info@marcosraudkett.com">info@marcosraudkett.com</a>';

// }


?>