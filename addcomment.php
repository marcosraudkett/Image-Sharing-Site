<?php
//database
include("db.php");

// if ($_POST['submit']) {

	//get info from "kuva.php" aka picture page.
	$get_comment = $_POST["comment"];
	$get_pic_id = $_POST["kuvaid"];
	$get_user_id = $_POST["u_id"];

	//add comment to database
	mysql_query("INSERT INTO kommentit (kommentti_kuvan_id, kommentin_lisannyt, kommentin_sisalto) VALUES ('$get_pic_id', '$get_user_id', '$get_comment')");

	//return user back to the original post(picture)
	header("Location: http://marcosraudkett.com/projektityo/kuva.php?kuva_id=$get_pic_id");

// } else {

// 	 echo 'valitettavasti emme pystyneet lisäämään kommenttia. kokeile uudelleen ja jos vika toistuu niin ota yhteyttä <a href="info@marcosraudkett.com">info@marcosraudkett.com</a>';

// }


?>
