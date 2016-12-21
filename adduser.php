<?php
//database
include("db.php");


// if ($_POST['submit']) {

	//get the information from "kuva.php" page.
	$get_username = $_POST["username"];
	$get_password = $_POST["username"];
	$get_email = $_POST["email"];
	$get_privileges = $_POST["privileges"];

	//add user to database
	mysql_query("INSERT INTO users (username, password, email, privileges) VALUES ('$get_username', '$get_password', '$get_email', '$get_privileges')");

	//return "admin" back to users list page
	header("Location: http://marcosraudkett.com/projektityo/users.php");

// } else {

// 	 echo 'valitettavasti emme pystyneet lisäämään kommenttia. kokeile uudelleen ja jos vika toistuu niin ota yhteyttä <a href="info@marcosraudkett.com">info@marcosraudkett.com</a>';

// }

?>
