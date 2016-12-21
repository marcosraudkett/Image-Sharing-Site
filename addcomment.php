<?php
//Tällä scriptillä lisätään tietokantaan kommentti

//lisätään yhteys tietokantaan
include("../mvrclabs/uploads/8/0/4/6/8046813/tietokanta.php");

// if ($_POST['submit']) {

	//haetaan tiedot kuva.php sivulta
	$get_comment = $_POST["comment"];
	$get_pic_id = $_POST["kuvaid"];
	$get_user_id = $_POST["u_id"];

	//lisätään tietokantaan
	mysql_query("INSERT INTO kommentit (kommentti_kuvan_id, kommentin_lisannyt, kommentin_sisalto) VALUES ('$get_pic_id', '$get_user_id', '$get_comment')");

	//palautetaan käyttäjä takaisin kuvan luo
	header("Location: http://marcosraudkett.com/projektityo/kuva.php?kuva_id=$get_pic_id");

// } else {

// 	 echo 'valitettavasti emme pystyneet lisäämään kommenttia. kokeile uudelleen ja jos vika toistuu niin ota yhteyttä <a href="info@marcosraudkett.com">info@marcosraudkett.com</a>';

// }


?>