<?php 
//add connection to the database
include("db.php");

//warning! some of these ways are insecure!

//$_GET["kuva_id"] = picture id

//first we get the picture id as below
$selected_pic = $_GET["kuva_id"];

//then we check if it's empty or not
if ($selected_pic == '') {
    //in here we could redirect our user if the photo id is empty
    //with code ->    header("Location: 404.php");    if we want to.
} else {
    //Here we will check the database for the selected picture ($selected_pic) 
    $select_pic = mysql_query("SELECT * FROM kuvat WHERE kuva_id = '$selected_pic' LIMIT 0, 1");
        //check if it exists (again)
            if (mysql_num_rows($selected_pic) == 0) {
                //here we could redirect the user if picture is not found.
            } else {
                //and if the picture exists, then we get all the information from it.
            while ($row_pic = mysql_fetch_array($select_pic)) {
                    //picture info
                    $selected_pic_link = $row_pic["kuvan_linkki"]; //picture link
                    $selected_pic_text = $row_pic["kuvan_teksti"]; //picture description
                    $selected_pic_added = $row_pic["kuvan_lisannyt_id"]; //user id (who added)
                    $selected_pic_lisaysaika = $row_pic["selected_pic_lisaysaika"]; //add time+date

                }
        }

    //This will receive the current picture comments and limit that 10 newest comments are shown (we could make a pagination) we could make this 
    //work with AJAX that when we scroll down then it loads more comments.. and then we would have to change the place for the comment textfield.
    $select_comment = mysql_query("SELECT * FROM kommentit WHERE kommentti_kuvan_id = '$selected_pic_added' ORDER BY kommentti_lisaysaika DESC LIMIT 0, 7");
    //below we count how many comments there are as "total"
    $select_comment_count = mysql_query("SELECT count(*) as total FROM kommentit WHERE kommentti_kuvan_id = '$selected_pic_added'");
        //check if there are any comments
            if (mysql_num_rows($select_comment) == 0) { 
                //here we could do something (if no comments are found)
            } else {
                //if comments exist we get all the info on them:
            while ($row_comment = mysql_fetch_array($select_comment)) {
                    //comment info
                    $selected_comment_id = $row_comment["kommenti_id"]; //user id (who added)
                    $selected_comment_sisalto = $row_comment["kommentin_sisalto"]; //username
                    $selected_comment_lisannyt = $row_comment["kommentin_lisannyt"]; //email
                    $selected_comment_kuva = $row_comment["kommentin_sisalto"]; //comment itself
            }
    }

    //Here we will get all the info on the user that added the photo just in case. ($selected_pic_added)
    $select_user = mysql_query("SELECT * FROM users WHERE id = '$selected_pic_added' LIMIT 0, 1");
        //check if the user exists
            if (mysql_num_rows($select_user) == 0) { 
                //Do something...
            } else {
                //and if the user exists we get the info:
            while ($row_user = mysql_fetch_array($select_user)) {
                    //user info
                    $selected_user_id = $row_user["id"]; //user ID
                    $selected_user_username = $row_user["username"]; //username
                    $selected_user_email = $row_user["email"]; //email
            }
    }

    //Here we get the logged in persons information
    $username = $_COOKIE[ID_my_site];
    $select_username = mysql_query("SELECT * FROM users WHERE username = '$username' LIMIT 0, 1");

            while ($row_loguserbef = mysql_fetch_array($select_username)) {
                        //get logged in user ID
                        $selected_user_id_before = $row_loguserbef["id"]; //käyttäjän ID
            }
        $select_user_logged = mysql_query("SELECT * FROM users WHERE id = '$selected_user_id_before' LIMIT 0, 1");
            //check if the user exists
                if (mysql_num_rows($select_user_logged) == 0) { 
                    //Do something...
                } else {
                    //if the user exists we get the info:
                while ($row_loguser = mysql_fetch_array($select_user_logged)) {
                        //Logged in user info
                        $selected_user_id_after = $row_loguser["id"]; //user ID
                        $selected_user_username_after = $row_loguser["username"]; //username
                        $selected_user_email_after = $row_loguser["email"]; //email

                    }
            }
}

//user info
$username = $_COOKIE['ID_my_site'];  
$userdata = mysql_query("SELECT * FROM users WHERE username = '$username'");
$_SESSION = mysql_fetch_assoc($userdata);

?>


<!--DOCTYPE html -->
<html><head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="css/flat-ui.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-contact.css" rel="stylesheet">
    <link href="css/style-content.css" rel="stylesheet">
    <link href="css/style-footers.css" rel="stylesheet">
    <link href="css/style-headers.css" rel="stylesheet">
    <link href="css/style-portfolios.css" rel="stylesheet">
    <link href="css/style-pricing.css" rel="stylesheet">
    <link href="css/style-team.css" rel="stylesheet">
    <link href="css/style-dividers.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">


</head>
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

    <div id="page" class="page">
        
    <header class="item header margin-top-0 padding-bottom-0">
    
    		<div class="wrapper">   	
    			<div class="container">   		
    				<nav role="navigation" class="navbar navbar-inverse navbar-embossed navbar-lg navbar-fixed-top">
    					<div class="container">
    				
    						<div class="navbar-header">
    							<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
    								<span class="sr-only">Toggle navigation</span>
    							</button>
    							<a href="#" class="navbar-brand brand" data-selector="nav a, a.edit" style="outline: none; cursor: default;"> KUVATON</a>
   							</div>
    								
    						<div id="navbar-collapse-02" class="collapse navbar-collapse">
    							<ul class="nav navbar-nav">			      
    								<li class="propClone"><a href="etusivu" data-selector="nav a, a.edit" src="images/uploads/sharing.economy image.jpg" style="outline: none; color: rgb(253, 253, 253); font-weight: bold; text-transform: none;">ETUSIVU</a></li>
    								<li class="propClone"><a href="kuvat" data-selector="nav a, a.edit" style="outline: none;">KUVIA</a></li>
    								<li class="propClone"><a href="tietoa" data-selector="nav a, a.edit" src="images/image1.png" style="outline: none; color: rgb(255, 255, 255); font-weight: bold; text-transform: none;">YHTEYSTIEDOT</a></li>
    								<br>
    							</ul> 		      
    							<ul class="nav navbar-nav navbar-right">
    								<?php 
                                    if ($_COOKIE[ID_my_site] == '') {
                                        //if the user is not logged in.
                                        ?> 
                                            <li class="propClone">
                                            <a href="auth" data-selector="nav a, a.edit" src="http://icons.iconarchive.com/icons/elegantthemes/beautiful-flat-one-color/72/profle-icon.png" style="outline: none; color: rgb(255, 255, 255); font-weight: bold; text-transform: none;">KIRJAUDU SISÄÄN&nbsp;<span class="fa fa-lock" data-selector="span.fa" style="outline: none;"></span></a>
                                            </li>
                                        <?php
                                    } else {
                                    ?>
                                    <li class="propClone">
    									<a href="auth" data-selector="nav a, a.edit" src="http://icons.iconarchive.com/icons/elegantthemes/beautiful-flat-one-color/72/profle-icon.png" style="outline: none; color: rgb(255, 255, 255); font-weight: bold; text-transform: none;"><?php echo $_SESSION["email"]; ?>&nbsp;</a>
    								</li>
                                    <?php 
                                    }
                                    ?>
    							</ul>
    						</div>    					
    					</div>    					
    				</nav>
    			
    				<div class="row banner">
    					<div class="col-md-12">    				    						
    						<div class="text-center">
    							
    						</div>    				
    					</div>    			
    				</div>    		
    			</div>    	
    		</div>
    	
    	</header>

    <div class="item portfolio">    		
    		<div class="container">    		
    			<div class="row margin-bottom-40">    			
    				<div class="col-md-12">
    				<br><br>
    					<p class="lead text-center" data-selector="p" style="outline: none;">
    						<a href="dropbox.php">Takaisin</a> <br>
                             KUVA 
                            
    				
                    <center>

                        <div class="dropbox">
                            <?php
//here we can get the picture we did in the beginning.
    
    //check
    if ($selected_pic_link == '') {
        //check if the picture exists
        echo 'Kyseistä kuvaa ei löydetty!';
    } else {
        //prints the selected image
        echo '<img style="max-height:660px;max-width:100%;border:1;" src="'.$selected_pic_link.'"></img>';
        echo '<div class="description">"'.$selected_pic_text.'"</div>';
    }

    //checks if we found the user
    if ($selected_user_username == '') {
            //Do something...
        } else {
            $gm_result = mysql_query("SELECT * FROM kuvat WHERE kuva_id = '$selected_pic'");
            while ($m_row = mysql_fetch_assoc($gm_result)) {
                //prints the adders info
                date_default_timezone_set('Finland/Helsinki'); setlocale(LC_TIME, array('fi_FI.UTF-8','fi_FI@euro','fi_FI','finnish'));
                //first we make the date and time into a better format as below: change the timezones to whatever you want.
                $time = ucwords(strftime("%d %B %Y",  strtotime($m_row["kuvan_lisaysaika"])));  date_default_timezone_set('Europe/Helsinki');
                //prints the added time.
                echo '<p>Lisännyt: <b>' . $selected_user_username. '</b>&nbsp;&nbsp;&nbsp; Lisätty: <b>' . $time . '</b></p>';
            }
    }


    if ($_COOKIE[ID_my_site] == '') {
        echo 'Kirjaudu sisään tykätäkseen tai kommentoitakseen kuvaa!';
    } else {
        echo '<div style="display:inline-flex;" class="form-style-1">';

        //LIKE button.
        //check likes
    $select_likes_logged = mysql_query("SELECT * FROM likes WHERE like_photo_id = '$selected_pic' AND like_user_id = '$selected_user_id_after'");
        //check the amount of likes
    $select_likes_total = mysql_query("SELECT COUNT(*) as total FROM likes WHERE like_photo_id = '$selected_pic'");
    $data = mysql_fetch_assoc($select_likes_total);
            //check is the picture already liked.
            if (mysql_num_rows($select_likes_logged) == 0) {
                     //if user has not liked then it prints the LIKE button
                    echo '
                    <form name="like" method="POST" action="like.php">
                    <input type="hidden" name="photo_id" value="'.$selected_pic.'" />
                    <input type="hidden" name="user_id" value="'.$selected_user_id_after.'" />
                    <button class="btn btn-info btn-embossed btn-lg btn-wide" id="submit_button" name="like" type="submit" value="Tykkää">Tykkää</button>
                    </form>&nbsp;
                    ';

            } else {
                    //if user has liked it will print DISLIKE button.
                    echo '
                    <form name="unlike" method="POST" action="unlike.php">
                    <input type="hidden" name="photo_id" value="'.$selected_pic.'" />
                    <input type="hidden" name="user_id" value="'.$selected_user_id_after.'" />
                    <button class="btn btn-info btn-embossed btn-lg btn-wide" id="submit_button" name="unlike" type="submit" value="Älä Tykkää">Älä Tykkää</button>
                    </form>&nbsp;
                    ';        
    }

        //share button: 
        echo '<form name="share"><button class="btn btn-default btn-embossed btn-lg btn-wide" type="button" id="submit_button"  data-toggle="modal" data-target="#share" value="Jaa Kuvaa" />Jaa Kuvaa</button></form>';
        
        echo '</div>';
        //here we print the total like amount.
        if (mysql_num_rows($select_likes_total) == '0') { } else { echo '<br>Tykkäyksiä: '.$data["total"]; };

    }
?>
                            </div>

<br><br>
                            <div class="comments col-md-3"></div>
                            <div class="comments col-md-6">
                            <h4><?php echo $select_comment_count["total"]; ?>
                            <?php 
                            if ($_COOKIE[ID_my_site] == '') {

                            } else {
                            if (mysql_num_rows($select_comment_count) == 0) {

                            } else {
                                echo 'Kommentit';
                            }
                            }

                            ?>  
                            </h4>
                                <?php
                                    //check if there are any comments
                                    if (mysql_num_rows($select_comment_count) == 0) {
                                        //Do something...
                                        echo '<p>0 Kommenttia</p>';
                                    } else {

                                    $select_comment_print = mysql_query("SELECT * FROM kommentit LEFT JOIN kuvat ON kuvat.kuva_id = kommentit.kommentti_kuvan_id WHERE kommentti_kuvan_id = '$selected_pic' ORDER BY kommentti_lisaysaika DESC");
                                        while ($row_comment_print = mysql_fetch_array($select_comment_print)) {
                                            echo '<br><br><div class="comment"><blockquote>';
                                                //Prints comment
                                                //Checks if there is a user who added it (if not then it will say "Anonymous") -not active currently.. (only members of the site can add comments)
                                                if ($row_comment_print["kommentin_lisannyt"] == '') {
                                                    echo '<p>'.$row_comment_print["kommentin_sisalto"].'</p>';
                                                    echo '<p>Tuntematon</p>';
                                                } else {
                                                    //prints the comment itself
                                                    echo '<p>"'.$row_comment_print["kommentin_sisalto"].'"</p>';
                                                    //print the username who added the comment
                                                    echo '<small><span class="fui-user"></span> <b>'.$row_comment_print["kommentin_lisannyt"].'</b></small>';
                                                    //only the adder or admin has the ability to delete the comment 
                                                
                                                   
                                                if ($_COOKIE[ID_my_site] == $row_comment_print["kommentin_lisannyt"]) {
                                                    echo '<form name="deletecomment" action="deletecomment.php" method="post" id="delete_comment">
                                                    <input type="hidden" name="delete_comment_id" value="'.$row_comment_print["kommentti_id"].'"></input>
                                                    <input type="hidden" name="delete_photo_id" value="'.$selected_pic.'"></input>
                                                    <button style="float:right;padding:4px;" class="btn btn-danger btn-embossed btn-lg btn-wide" type="submit" id="delete_submit"  value="Poista" />Poista</button><form>';
                                                } else {
                                                    //if the user has ADMIN privileges (1) then he can delete any comment on the page using "deletecommentadmin.php" where we could double check if the user is admin.
                                                        if ($_SESSION["privileges"] == '1') {
                                                                echo '<form name="deletecommentadmin" action="deletecommentadmin.php" method="post">
                                                                <input type="hidden" name="delete_com_id" value="'.$row_comment_print["kommentti_id"].'"></input>
                                                                <input type="hidden" name="delete_ph_id" value="'.$selected_pic.'"></input>
                                                                <button style="float:right;padding:4px;" class="btn btn-danger btn-embossed btn-lg btn-wide" type="submit" id="delete_admin_submit"  value="Poista" />Poista</button><form>';
                                                        } else {

                                                        } 
                                                    }
                                                } 
                                                
                                                    
                                            echo '<br></div></blockquote>';
                                        }
                                    }

                            //all the script names should be covered in generated tokens or something else? to improve security..
                            ?>

                            <?php 
                            //here we grant commenting only for the ones that are logged in.
                                //if you want to add permissions for everyone just delete this PHP part or add //
                              $select_likes_logged = mysql_query("SELECT * FROM likes WHERE like_photo_id = '$selected_pic' AND like_user_id = '$selected_user_id_after'");
                                    //
                                    if ($_COOKIE[ID_my_site] == '') {
                                        //message here ? (ex. You must be logged in to comment on this photo! Click here to login)
                                    } else {
                            ?>
                            <div class="form-style-1">
                                <form id="contact_form" name="comment" action="addcomment.php"  method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <br><label for="comment">Teksti*:</label><br>
                                            <input style="visibility:hidden;" name="u_id" value="<?php echo $selected_user_username_after; ?>"></input>
                                            <input style="visibility:hidden;" name="kuvaid" value="<?php echo $selected_pic; ?>"></input><br>
                                            <textarea id="comment" class="input" name="comment" rows="5" cols="32" placeholder="Lisää kommentti tähän..."></textarea><br />
                                        </div><br><br>
                                    <input style="margin-top:-42px;background-color: #1abc9c;" class="btn btn-default btn-embossed" id="submit_button" type="submit" value="Kommentoi" />
                                </form>     
                            </div>
                        </div>

<div id="share" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Jaa Kuvaa</h4>
      </div>
      <div class="modal-body">
        <p>Valitse mihin haluat jakaa kuvaa:</p>
        <?php 
        echo '<div class="fb-send" data-href="http://marcosraudkett.com/projektityo/kuva.php?kuva_id='.$selected_pic.'"></div>'
        ?>
        <div class="fb-share-button" data-href="http://marcosraudkett.com/projektityo/kuva.php?kuva_id=<?php echo $selected_pic; ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmarcosraudkett.com%2Fprojektityo%2Fkuva.php%3Fkuva_id%3D<?php echo $selected_pic; ?>&amp;src=sdkpreparse">Share</a></div><br>
        <div class="fb-save" data-uri="http://marcosraudkett.com/projektityo/kuva.php?kuva_id=<?php echo $selected_pic; ?>" data-size="small"></div>
        <br>
<iframe
 src="https://platform.twitter.com/widgets/tweet_button.html?size=l&url=http://marcosraudkett.com/projektityo/kuva.php?kuva_id=<?php echo '.$selected_pic.' ?>&via=marcosraudkett&text=<?php echo $selected_pic_text; ?>"
  width="100"
  height="48"
  title="Twitter Tweet Button"
  style="border: 0; overflow: hidden;margin-right:-25px;">
</iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sulje Ikkuna</button>
      </div>
    </div>

  </div>
</div>

                    </center>
    				</div>    			
    			</div>
    		    	<?php } ?>	
    			
    		</div>
    	</div><div class="footerWrapper">
    </div>

    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/application.js"></script>
    <!-- lightbox lisäosa (jotta voisi avata kuvia isompana) -->
    <script src="lightbox/dist/js/lightbox-plus-jquery.min.js"></script>

</body></html>
