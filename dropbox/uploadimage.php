<?php 
 //Haetaan sisäänkirjautunut käyttäjä cookiella myös
    //tämä kannattaisi siirtää addcomment.php scriptiin estääkseen SQL Injunction:ia
    $username = $_COOKIE[ID_my_site];
    $select_username = mysql_query("SELECT * FROM users WHERE username = '$username' LIMIT 0, 1");

            while ($row_loguserbef = mysql_fetch_array($select_username)) {
                        //tässä kirjataan kuvan tiedot muistiin.
                        $selected_user_id_before = $row_loguserbef["id"]; //käyttäjän ID
            }
        $select_user_logged = mysql_query("SELECT * FROM users WHERE id = '$selected_user_id_before' LIMIT 0, 1");
            //tarkistetaan onko kuva olemassa
                if ($select_user_logged == '') { 
                    //tähän voitais myös ilmoittaa että kuvaa ei löytynyt yms tai ohjata jonnekki muualle..
                } else {
                    //jos kuva on olemassa niin haetaan kuvan tiedot tietokannasta.
                while ($row_loguser = mysql_fetch_array($select_user_logged)) {
                        //tässä kirjataan kuvan tiedot muistiin.
                        $selected_user_id_after = $row_loguser["id"]; //käyttäjän ID
                        $selected_user_username_after = $row_loguser["username"]; //käyttäjän username
                        $selected_user_email_after = $row_loguser["email"]; //käyttäjän sähköposti

                    }
            }
?>

<div class="form-style-1">
	<form method="post" enctype="multipart/form-data">
	        <input type="hidden" type="submit" name="p" value="1" />
	        <input type="hidden" type="submit" name="pic_user_add_id" value="<?php echo $selected_user_id_before; ?>" />
	        <input type="file" name="image" /> <br>
	        <textarea name="pic_description" placeholder="Kuvateksti tähän"></textarea><br><br>
	        <input class="btn btn-default btn-embossed btn-lg btn-wide" type="submit" onclick="loading()" value="Lataa Kuva" /> <div id="ladataan"  style="display:none;" class="answer_list" ><img width="24" height="24" src="http://rs1186.pbsrc.com/albums/z377/Akemi_Wong/small%20icon/aki-small-219.gif~c200"></div>
	        <script>

function loading() {
   document.getElementById('ladataan').style.display = "block";
}
</script>
	</form>
</div>