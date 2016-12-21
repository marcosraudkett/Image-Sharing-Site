<?php
//Tällä scriptillä lisätään tietokantaan kommentti

//lisätään yhteys tietokantaan
include("../mvrclabs/uploads/8/0/4/6/8046813/tietokanta.php");

// if ($_POST['submit']) {

	//haetaan tiedot users.php sivulta
	$user_id = $_POST["del_user_id"];

	$getuser = mysql_query("SELECT * FROM users WHERE id = '$user_id'");
		while ($get = mysql_fetch_assoc($getuser)) {
				$idreq = $get["id"];
				$iduser = $get["username"];
		}

	if ($_POST["del_user_id"] == '1') {
		echo 'Tätä käyttäjää ei ole mahdollista poistaa!';
	} else {

	//poistetaan tietokannasta käyttäjän: käyttäjä, tykkäykset, kuvat, kommentit
	mysql_query("DELETE FROM users WHERE id = '$user_id'");
	mysql_query("DELETE FROM likes WHERE like_user_id = '$user_id'");
	mysql_query("DELETE FROM kuvat WHERE kuvan_lisannyt_id = '$user_id'");
	mysql_query("DELETE FROM kommentit WHERE kommentin_lisannyt = '$iduser'");

	//palautetaan käyttäjä takaisin kuvan luo
	header("Location: http://marcosraudkett.com/projektityo/users.php");

// } else {

// 	 echo 'valitettavasti emme pystyneet lisäämään kommenttia. kokeile uudelleen ja jos vika toistuu niin ota yhteyttä <a href="info@marcosraudkett.com">info@marcosraudkett.com</a>';

// }
}

?>