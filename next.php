<?php
//Tällä scriptillä navigoidaan seuraavaan kuvaan tietokannassa

//aluksi lisätään yhteys tietokantaan
include("../mvrclabs/uploads/8/0/4/6/8046813/tietokanta.php");

//sitten haetaan kuvat

// if ($_POST['submit']) {

	//haetaan tiedot kuva.php sivulta $_GET käskyllä
	$get_photo_id = $_GET["photo_id"];

	//lisätään tietokantaan
	receive: $getpic_id = mysql_query("SELECT * FROM kuvat WHERE kuva_id = '$get_photo_id' + 1");

	while ($row = mysql_fetch_assoc($getpic_id)) {
		if (mysql_num_rows($getpic_id) == 0) { 
				goto receive;
		} else {
		$pic_id = $row["kuva_id"];
		//navigoidaan seuraavaan kuvaan
		header("Location: http://marcosraudkett.com/projektityo/kuva.php?kuva_id=$pic_id");
	} }

// } else {

// 	 echo 'valitettavasti emme pystyneet lisäämään kommenttia. kokeile uudelleen ja jos vika toistuu niin ota yhteyttä <a href="info@marcosraudkett.com">info@marcosraudkett.com</a>';

// }


?>