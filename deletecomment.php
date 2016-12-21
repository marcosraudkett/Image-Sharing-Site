<?php
//database
include("db.php");

// if ($_POST['submit']) {

	//get info from "kuva.php" page
	$comment_id = $_POST["delete_comment_id"];
	$get_pic_id = $_POST["delete_photo_id"];

	//delete comment from database
	mysql_query("DELETE FROM kommentit WHERE kommentti_id = '$comment_id'");

	//return user
	header("Location: http://marcosraudkett.com/projektityo/kuva.php?kuva_id=$get_pic_id");

// } else {

// 	 echo 'valitettavasti emme pystyneet lisäämään kommenttia. kokeile uudelleen ja jos vika toistuu niin ota yhteyttä <a href="info@marcosraudkett.com">info@marcosraudkett.com</a>';

// }

?>
