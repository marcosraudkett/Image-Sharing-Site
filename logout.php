<?php 
//uloskirjautuminen (poistaa eväät)


 $past = time() - 100; 

 //tämä pitäisi tehdä token tavalla eli tallentaa tietokantaan token jonka se sitten hakee..
 //epäturvallinen tapa säilyttää käyttäjänimi ja salasana... ja salasanatkin pitäisi hashaa joko
 //md5, sha1 yms...

 setcookie(ID_my_site, gone, $past); 
 setcookie(Key_my_site, gone, $past); 

 header("Location: auth"); 

 ?> 