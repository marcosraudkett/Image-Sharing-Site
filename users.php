<?php 


//Lisätään sivulle tietokanta
include("db.php");

 if(isset($_COOKIE['ID_my_site'])) { 

        $username = $_COOKIE['ID_my_site'];  
        $pass = $_COOKIE['Key_my_site']; 
        $check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());
        $email = mysql_real_escape_string($_POST['email']);
        $res=mysql_query("SELECT * FROM users WHERE email='$email'");

 	while($info = mysql_fetch_array( $check )) 	 { 

 		if ($pass != $info['password']) { 			
 			header("Location: login.php"); 
 		} else { 

 	//tässä tarkistetaan onko käyttäjä: ylläpitäjä, postaaja tai tavallinen käyttäjä
 	// 1 = ylläpitäjä, 2 = postaaja, 3 = tavallinen käyttäjä
 		$userdata = mysql_query("SELECT * FROM users WHERE username = '$username'");
 		$_SESSION = mysql_fetch_assoc($userdata);
        $user_id = $_SESSION["id"];

 		if ($_SESSION['privileges'] == 1) {
 			//pysyy tällä sivulla
 			
 		} elseif ($_SESSION['privileges'] == 2) {
 				//estetään pääsy tälle sivulle
                    header("Location: profile.php");
 			} elseif ($_SESSION['privileges'] == 3) {
 				    //postaaja siirtyy "user.php" sivuille
 					  header("Location: profile.php");
 				}


?>
<!--DOCTYPE html -->
<html><head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="css/flat-ui.css" rel="stylesheet">
    <title>Tili</title>
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
                                        //jos käyttäjä ei ole kirjautunut sisään!
                                        ?> 
                                            <li class="propClone">
                                            <a href="auth" data-selector="nav a, a.edit" src="http://icons.iconarchive.com/icons/elegantthemes/beautiful-flat-one-color/72/profle-icon.png" style="outline: none; color: rgb(255, 255, 255); font-weight: bold; text-transform: none;">KIRJAUDU SISÄÄN&nbsp;<span class="fa fa-lock" data-selector="span.fa" style="outline: none;"></span></a>
                                            </li>
                                        <?php
                                    } else {
                                    ?>
                                    <li class="propClone active">
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


<div class="container">
  <div class="item portfolio">
    		
    		<div class="container">
    		
    			<div class="row margin-bottom-40">
    			
    				<div class="col-md-12 text-center">


<br><br>
<?php 
//Luodaan MENU jokaiselle käyttäjätyypeille
if ($_SESSION['privileges'] == 1) {
            ?>
                <div class="btn-group">
                      <a class="btn btn-primary" href="admin.php">Kuvat <span class="fui-photo"></span></a>
                      <a class="btn btn-primary" href="messages.php">Viestit <span class="fui-chat"></span></a>
                      <a class="btn btn-primary" href="profile.php">Profiili <span class="fui-home"></span></a>
                      <a class="btn btn-primary" href="liked.php">Tykätyt Kuvat <span class="fui-heart"></span></a>
                      <a class="btn btn-primary" href="commented.php">Kommentit <span class="fui-chat"></span></a>
                      <a class="btn btn-primary active" href="#">Käyttäjät <span class="fui-user"></span></a>
                      <a class="btn btn-primary" href="logout.php">Kirjaudu Ulos <span class="fui-cross"></span></a>
                </div>

            <?php
            
        } elseif ($_SESSION['privileges'] == 2) {
            ?>
                    <div class="btn-group">
                          <a class="btn btn-primary" href="members.php">Kuvat <span class="fui-photo"></span></a>
                          <a class="btn btn-primary" href="profile.php">Profiili <span class="fui-home"></span></a>
                          <a class="btn btn-primary" href="liked.php">Tykätyt Kuvat <span class="fui-heart"></span></a>
                          <a class="btn btn-primary" href="commented.php">Kommentit <span class="fui-chat"></span></a>
                          <a class="btn btn-primary" href="logout.php">Kirjaudu Ulos <span class="fui-cross"></span></a>
                    </div>

            <?php
               
            } elseif ($_SESSION['privileges'] == 3) {
                ?>
                    <div class="btn-group">
                          <a class="btn btn-primary" href="user.php">Profiili <span class="fui-home"></span></a>
                          <a class="btn btn-primary" href="liked.php">Tykätyt Kuvat <span class="fui-heart"></span></a>
                          <a class="btn btn-primary" href="commented.php">Kommentit <span class="fui-chat"></span></a>
                          <a class="btn btn-primary" href="logout.php">Kirjaudu Ulos <span class="fui-cross"></span></a>
                    </div>
                <?php
                    
                }

?>
</div>
	
<br><br><br><br>

	</p>
		KUVATON Käyttäjät.<br>
		<br> 
        Oikeudet: 1 - Ylläpitäjä, 2 - Postaaja, 3 - Tavallinen 
        <form><button style="float:right;" class="btn btn-primary btn-embossed btn-lg btn-wide" type="button" id="submit_button"  data-toggle="modal" data-target="#adduser" value="Jaa Kuvaa" />Lisää Käyttäjä</button></form>
        <br><br>
         <table class="table">
            <thead>
                <tr>
                    <th>Oikeudet</th>
                    <th>Käyttäjänimi</th>
                    <th>Sähköposti</th>
                    <th>Profiilikuva</th>
                    <th>Liittynyt</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
<?php
        //haetaan käyttäjät ja sortataan ne liittymisajan ja oikeuksien perusteella
        $receive_users = mysql_query("SELECT * FROM users ORDER BY privileges");
            //tarkistetaan että onko käyttäjii olemassa
            if (mysql_num_rows($receive_users) == 0) {
                //käyttäjii ei löydetty
                echo 'Yhtäkään käyttäjää ei löydetty? miten pääsit tänne?!';
            } else {
                //Hakee kuvat tietokannasta ($receive_pic) 
                while($row_get_users = mysql_fetch_array($receive_users)) {
                   echo '<tr><td>'.$row_get_users["privileges"].'</td>
                             <td>'.$row_get_users["username"].'</td>
                             <td>'.$row_get_users["email"].'</td>
                             <td>';
                            if ($row_get_users["profile_pic"] == "") { 

                            } else { 

                           echo '<a target="_BLANK" href="'.$row_get_users["profile_pic"].'">Avaa</a></td>'; }
                           echo  '<td>'.$row_get_users["join_date"].'</td>
                             <td style="display:inline-flex;">

                             <form>

                             <button style="padding:4px;" class="btn btn-primary btn-embossed btn-lg btn-wide" type="button" id="submit_button" value="Jaa Kuvaa" data-toggle="modal" data-target="#notavailable">
                             Muokkaa
                             </button>

                             </form> 

                            &nbsp;&nbsp;

                             <form method="POST" action="deleteuser.php">
                             <input type="hidden" name="del_user_id" value="'.$row_get_users["id"].'"></input>
                             <button style="padding:4px;" class="btn btn-danger btn-embossed btn-lg btn-wide" type="submit" id="submit_button"  value="Poista" />Poista</button>
                             </form>

                             </td>';
                }
            }
?>	

	</tbody>
  </table>
		<br><br><br>


	</p>

    <div id="notavailable" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ei käytössä!</h4>
      </div>
      <div class="modal-body">
      Tämä ominaisuus on otettu pois käytöstä!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sulje Ikkuna</button>
      </div>
    </div>

  </div>
</div>  

<div id="adduser" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Lisää Käyttäjä</h4>
      </div>
      <form method="POST" action="adduser.php">
      <div class="modal-body">
      <div class="col-md-2">
            Käyttäjänimi
      </div>
      
      <div class="col-md-1"></div>
          
          <div class="col-md-9">
                <input style="width:100%;" type="text" name="username" placeholder="Käyttäjänimi"></input>
          </div>
            <br>
            <br>
      <div class="col-md-2">
      Salasana
      </div>

      <div class="col-md-1"></div>

      <div class="col-md-9">
      <input style="width:100%;" type="password" name="password" placeholder="Salasana"></input>
      </div>
        <br>
        <br>
      <div class="col-md-2">
      Sähköposti
      </div>

      <div class="col-md-1"></div>

      <div class="col-md-9">
      <input style="width:100%;" type="email" name="email" placeholder="Sähköposti"></input>
      </div>
        <br>
        <br><hr>

      <div class="col-md-2">
      Oikeudet
      </div>

      <div class="col-md-1"></div>

      <div class="col-md-9">
      <select style="width:100%;" name="privileges">
            <option name="normaluser" value="3">Tavallinen</option>
            <option name="poster" value="2">Postaaja</option>
            <option name="admin" value="1">Ylläpitäjä</option>
      </select>
      </div>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sulje Ikkuna</button>
        <button type="submit" class="btn btn-primary">Lisää Käyttäjä</button>
    </form>
      </div>
    </div>

  </div>
</div>  


<div id="edituser" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Muokkaa Käyttäjää</h4>
      </div>
      <form method="POST" action="edituser.php">
      <div class="modal-body">
      <div class="col-md-2">
            Käyttäjänimi
      </div>
      
      <div class="col-md-1"></div>
          
          <div class="col-md-9">
                <input style="width:100%;" type="text" name="username" placeholder="Käyttäjänimi"></input>
          </div>
            <br>
            <br>
      <div class="col-md-2">
      Salasana
      </div>

      <div class="col-md-1"></div>

      <div class="col-md-9">
      <input style="width:100%;" type="password" name="password" placeholder="Salasana"></input>
      </div>
        <br>
        <br>
      <div class="col-md-2">
      Sähköposti
      </div>

      <div class="col-md-1"></div>

      <div class="col-md-9">
      <input style="width:100%;" type="email" name="email" placeholder="Sähköposti"></input>
      </div>
        <br>
        <br><hr>

      <div class="col-md-2">
      Oikeudet
      </div>

      <div class="col-md-1"></div>

      <div class="col-md-9">
      <select style="width:100%;" name="privileges">
            <option name="normaluser" value="3">Tavallinen</option>
            <option name="poster" value="2">Postaaja</option>
            <option name="admin" value="1">Ylläpitäjä</option>
      </select>
      </div>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Sulje Ikkuna</button>
        <button type="submit" class="btn btn-primary">Päivitä Tiedot</button>
    </form>
      </div>
    </div>

  </div>
</div>  


</div>
</div>
</div>
</div>
</div>


</center>

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
</body>
</html>

<?php

} 
 	} 

 		} else 
 //if the cookie does not exist, they are taken to the login screen 
 {			 

 header("Location: login.php"); 

 } 


 ?> 
