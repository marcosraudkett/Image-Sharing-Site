 <?php 

//Lisätään sivulle tietokanta
include("tietokanta.php");


//TÄMÄ scripti ei ole käytössä sivuilla! vain testi!
if(isset($_COOKIE['ID_my_site']))	{ 	
	$username = $_COOKIE['ID_my_site']; 	
	$pass = $_COOKIE['Key_my_site']; 	 	

	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 	

	while($info = mysql_fetch_array( $check )) { 		
		if ($pass != $info['password']) { 			 			

		} else { 			
			header("Location: members.php"); 			
		} 		
	} 
} 

 if (isset($_POST['submit'])) { 
 	if(!$_POST['username'] | !$_POST['pass']) {
 		die('Tarkista kentät!');
 	}
 	if (!get_magic_quotes_gpc()) {
 		$_POST['email'] = addslashes($_POST['email']);
 	}
 	$check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());
 
 $check2 = mysql_num_rows($check);
 if ($check2 == 0) {
 		die('Tiliä ei löydetty!');
 				}
 while($info = mysql_fetch_array( $check )) 	
 {
 $_POST['pass'] = stripslashes($_POST['pass']);
 	$info['password'] = stripslashes($info['password']);
 	$_POST['pass'] = ($_POST['pass']);

 	if ($_POST['pass'] != $info['password']) {
 		die('Salasana väärin!');
 	}
 else 

 { 

 	 $_POST['username'] = stripslashes($_POST['username']); 

 	 $hour = time() + 3600; 

 setcookie(ID_my_site, $_POST['username'], $hour); 

 setcookie(Key_my_site, $_POST['pass'], $hour);	 

 
 header("Location: members.php"); 

 } 

 } 

 } 

 else 

{	 

?> <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
<meta http-equiv="refresh" content="0; URL='http://marcosraudkett.com/projektityo/index.html'" />
<?php } ?> 