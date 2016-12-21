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

 		if ($_SESSION['privileges'] == 1) {
 			//jos on ylläpitäjä niin siirtyy "admin.php" sivuille

 		} elseif ($_SESSION['privileges'] == 2) {
 				//pysyy tällä sivulla

 			} elseif ($_SESSION['privileges'] == 3) {
 				//postaaja siirtyy "user.php" sivuille

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
                      <a class="btn btn-primary active" href="profile.php">Profiili <span class="fui-home"></span></a>
                      <a class="btn btn-primary" href="liked.php">Tykätyt Kuvat <span class="fui-heart"></span></a>
                      <a class="btn btn-primary" href="commented.php">Kommentit <span class="fui-chat"></span></a>
                      <a class="btn btn-primary" href="users.php">Käyttäjät <span class="fui-user"></span></a>
                      <a class="btn btn-primary" href="logout.php">Kirjaudu Ulos <span class="fui-cross"></span></a>
                </div>

            <?php
            
        } elseif ($_SESSION['privileges'] == 2) {
            ?>
                    <div class="btn-group">
                          <a class="btn btn-primary" href="members.php">Kuvat <span class="fui-photo"></span></a>
                          <a class="btn btn-primary active" href="profile.php">Profiili <span class="fui-home"></span></a>
                          <a class="btn btn-primary" href="liked.php">Tykätyt Kuvat <span class="fui-heart"></span></a>
                          <a class="btn btn-primary" href="commented.php">Kommentit <span class="fui-chat"></span></a>
                          <a class="btn btn-primary" href="logout.php">Kirjaudu Ulos <span class="fui-cross"></span></a>
                    </div>

            <?php
               
            } elseif ($_SESSION['privileges'] == 3) {
                ?>
                    <div class="btn-group">
                          <a class="btn btn-primary active" href="user.php">Profiili <span class="fui-home"></span></a>
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
		<br>
        <div class="col-md-2">
        <?php 
        if ($_SESSION["profile_pic"] == '') {
                echo '<img style="border-radius:50%;height:160px;width:100%;" src="http://www.mvrclabs.info/uploads/8/0/4/6/8046813/user_orig.jpg"></img>';
            } else { 
                 echo '<img style="border-radius:50%;height:160px;width:100%;"  src="'.$_SESSION["profile_pic"].'"/>';
            }

        ?>
        </div>
        <div class="col-md-9">
                <?php echo $_SESSION["email"]; ?><br>
                Käyttäjänimi: <?php echo $_SESSION["username"]; ?><br>
                Salasana: <a href="#">Vaihda Salasana</a>
               <br><br>
    
    <?php
        if ($_SESSION['privileges'] == 1) {
            echo 'Oikeudet: Hallita käyttäjiä, Hallita viestejä, Lisätä/poistaa kuvia, Tykätä kuvista, Lisätä/poistaa kommentteja';       
        } elseif ($_SESSION['privileges'] == 2) {
                echo 'Oikeudet: Lisätä kuvia, Tykätä kuvista, Kommentoida kuville';       
            } elseif ($_SESSION['privileges'] == 3) {
                    echo 'Oikeudet: Tykätä kuvista, Kommentoida kuville';
            }
    ?>
        </div>
        </div>
		<div class="col-md-5">
            <h3>Vaihda Profiilikuva</h3>
				<?php
                        if( !isset( $_POST['p'] ) ){ $_POST['p']=0; }
                        if( $_POST['p'] == 1 ){
                                include( 'profile/upload_file.php' );
                        }else{
                                include( 'profile/uploadimage.php' );
                        }

                ?>
        </div>


</div>
</div>
</div>

<!-- Load JS here for greater good =============================-->
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
