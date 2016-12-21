<!-- BY MARCOS RAUDKETT! (UPLOADER) -->

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
</body>

<?php

//Scriptin tarkoitus: hakee kuvan upload.php scriptiltä, muodostaa sille uuden md5() hashatun nimen ja siirtää sen /uploads/ kansioon johon on laitettu/annettu oikeudet 777
        
        //tässä haetaan kaikki informaatio valitusta kuvasta.
        $name=  $_FILES['image']['name'];
        $temp=  $_FILES['image']['tmp_name'];
        $type=  $_FILES['image']['type'];
        $size=  $_FILES['image']['size'];

        
        //tässä lisätään hyväksytyt kuvatiedostot (muodot)
        switch( $type ){

                // .jpg

                case 'image/jpeg':

                        $ext= '.jpg';

                break;

                // .png

                case 'image/png':

                        $ext= '.png';

                break;

                // .gif gifit

                case 'image/gif':

                        $ext= '.gif';

                break;

                
        }

        //tässä muodostetaan md5(hash) kuvan entisestä nimestä
        //tähän voitais myös lisätä tarkistus että onko kuva jo olemassa?
		$path= 'uploads/' . md5( rand( 0, 1000 ) . rand( 0, 1000 ) . rand( 0, 1000 ) . rand( 0, 1000 ) ) . $ext;

        //tämä tulostetaan vasta kun kuva on ladattu.
        $data= '<h2 color="green">ONNISTUI!</h2>' . '<h4>Linkki Kuvaan:</h4>' . '<b><p>http://marcosraudkett.com/projektityo/' . $path . '</p></b>' . '<div class="fb-send" data-href="http://marcosraudkett.com/projektityo/' . $path . '"></div>' . '<br/>' . '<br/>' . '<h4>Esikatselu:</h4><br>' . '<a target="_blank" href="http://marcosraudkett.com/projektityo/' . $path . '"><img border="1" src="http://marcosraudkett.com/projektityo/' . $path . '" alt="preview" width="190" height="120"></a></p>' . '' . '<h5>Paina kuvaa katsoakseen.</h5>' . '<br />' . '<br> <a href="home">Lataa Lisää</a>';
    
    //jos on painettu "lataa kuva painiketta"
        if( $_POST ){
                if( $_FILES ){
                        //hankitaan tiedot jotta voitais päivittää tietokantaa
                        $pic_description = $_POST["pic_description"];
                        $pic_user_add_id = $_POST["pic_user_add_id"];
                        $pic_link = 'http://marcosraudkett.com/projektityo/'.$path;
                        //kun tiedot on haettu sivulta sitten päivitetään tässä vaiheessa myös tietokantaa
                        mysql_query("INSERT INTO kuvat (kuvan_teksti, kuvan_lisannyt_id, kuvan_linkki) VALUES ('$pic_description', '$pic_user_add_id', '$pic_link')");
                        //siirretään ladattu tiedosto oikeaseen osoitteeseen/kansioon /uploads/UUSITIEDOSTONNIMI md5()
                        move_uploaded_file( $temp, $path );
                        //tulostetaan tiedot $data
                        echo $data;                  
                }      
        }
?>