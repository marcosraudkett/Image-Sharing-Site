<?php
//Tällä scriptillä lisätään tietokantaan kommentti

//lisätään yhteys tietokantaan
include("db.php");

// if ($_POST['submit']) {

	//haetaan tiedot users.php sivulta
	$comment_id = $_POST["delete_com_id"];
	$get_pic_id = $_POST["delete_ph_id"];

	//poistetaan viesti tietokannasta
	mysql_query("DELETE FROM kommentit WHERE kommentti_id = '$comment_id'");

	//palautetaan takaisin viesteihin
	header("Location: http://marcosraudkett.com/projektityo/kuva.php?kuva_id=$get_pic_id");

// } else {

// 	 echo 'valitettavasti emme pystyneet lisäämään kommenttia. kokeile uudelleen ja jos vika toistuu niin ota yhteyttä <a href="info@marcosraudkett.com">info@marcosraudkett.com</a>';

// }

?>
