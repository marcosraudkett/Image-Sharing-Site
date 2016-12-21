
<head>
<title>Kiitos!</title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8">
</head>

<?php
// Tämä tiedosto lähettää viestin alapuolella olevaan sähköpostiin (contact.html) sivulta.


if(isset($_POST['email'])) {

    $email_to = "projects@marcosraudkett.com";
    $email_subject = "Projektityö Sivusto / Yhteydenotto";

    function died($error) {
        echo "Hups! Emme pystyneet lähettämään viestiääsi, kokeilethan myöhemmin uudelleen!";
        echo "Tarkista:<br /><br />";
        echo $error."<br /><br />";
        die();

    }

    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['message'])) {
        died('Hups! Emme pystyneet lähettämään viestiääsi, kokeilethan myöhemmin uudelleen!');       

    }

     
    //ottaa kentät vastaan contact.html tiedostosta.
    $first_name = $_POST['first_name']; // PAKOLLINEN
    $last_name = $_POST['last_name']; // PAKOLLINEN
    $email_from = $_POST['email']; // PAKOLLINEN
    $telephone = $_POST['telephone']; // EI PAKOLLINEN
    $message = $_POST['message']; // VIESTI

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Väärä sähköpostiosoite?<br />';
  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Hups! Emme pystyneet lähettämään viestiääsi, kokeilethan myöhemmin uudelleen (ETUNIMI)<br />';
  }

  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'Hups! Emme pystyneet lähettämään viestiääsi, kokeilethan myöhemmin uudelleen (SUKUNIMI)<br />';
  }

  if(strlen($message) < 10) {
    $error_message .= 'Viesti pitää sisältää ainakin 10 kirjainta!<br />';
  }

  if(strlen($error_message) > 0) {

    died($error_message);

  }

    $email_message = "Viesti tuli osoitteesta: <a href='http://marcosraudkett.com/mvrc/contact.html'>http://marcosraudkett.com/projektityo/contact.html</a> \n\n";

     

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

  $email_message .= "Etunimi: ".clean_string($first_name)."\n";
	$email_message .= "Sukunimi: ".clean_string($last_name)."\n";
  $email_message .= "Sähköposti: ".clean_string($email_from)."\n";
	$email_message .= "Puhelinnumero: ".clean_string($telephone)."\n";
  $email_message .= "Viesti: ".clean_string($message)."\n\n";

     
$headers = 'Lähettänyt: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);  
?>
Kiitos kun otit yhteyttä! palataan asiaan pian!<br> Pääset takaisin <a href="index.html">tästä</a>

<?php

}

?>