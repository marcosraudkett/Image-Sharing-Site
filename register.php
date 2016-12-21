<?php 

//Lisätään sivulle tietokanta
include("db.php");


 if (isset($_POST['submit'])) { 

 if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2'] ) {
        die('You did not complete all of the required fields');
    }

    if (!get_magic_quotes_gpc()) {
        $_POST['username'] = addslashes($_POST['username']);
    }

 $usercheck = $_POST['username'];
 $check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'") 
or die(mysql_error());
$check2 = mysql_num_rows($check);

 if ($check2 != 0) {
        die('Sorry, the username '.$_POST['username'].' is already in use.');
                }

    if ($_POST['pass'] != $_POST['pass2']) {
        die('Your passwords did not match. ');
    }


    $_POST['pass'] = $_POST['pass'];
    if (!get_magic_quotes_gpc()) {
        $_POST['pass'] = $_POST['pass'];
        $_POST['username'] = $_POST['username'];
            }


    $insert = "INSERT INTO users (privileges, username, password, email) VALUES ('3', '".$_POST['username']."', '".$_POST['pass']."', '".$_POST['email']."')";
    $add_member = mysql_query($insert);


//tässä voitais ohjaa käyttäjä ihan erilliselle sivulle (esim register_success.php)
    ?>
 
 <h1>Valmista!</h1>

 <p>Kiitos! voit nyt sis&auml;&auml;nkirjautua k&auml;ytt&auml;en k&auml;ytt&auml;j&auml;nime&auml; <a href="auth">Tästä</a>.</p>
 
 <?php 
 } 

 else 
 {  
   

//haetaan käyttäjätiedot
$username = $_COOKIE['ID_my_site'];  
$userdata = mysql_query("SELECT * FROM users WHERE username = '$username'");
$_SESSION = mysql_fetch_assoc($userdata);

?> <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
<!--DOCTYPE html -->
<html><head>
    <meta charset="utf-8">
    <title>Rekiströidy - Kuvaton</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
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

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
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
    								<li class="propClone"><a href="etusivu" data-selector="nav a, a.edit" style="outline: none;  color: rgb(255, 255, 255); font-weight: bold; text-transform: none;" src="images/image1.png">ETUSIVU</a></li>
    								<li class="propClone"><a href="kuvat" data-selector="nav a, a.edit" style="outline: none;  color: rgb(255, 255, 255); font-weight: bold; text-transform: none;" src="images/image1.png">KUVIA</a></li>
    								<li class="propClone"><a href="tiedot" data-selector="nav a, a.edit" style="outline: none; color: rgb(255, 255, 255); font-weight: bold; text-transform: none;" src="images/image1.png">YHTEYSTIEDOT</a></li>
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
    	
    	</header><div class="item content padding-top-0 padding-bottom-0">
    	
    		<div class="wrapper grey">
    		
    		<div class="container">
    		
    		

                <br><br>

                <div class="row">
            <div class="col-md-4"></div>
                    <div class="col-md-4 ">
                    <h1 style="text-align:center;">REKISTRÖIDY</h1><br><br>

                <form class="form-signin" action="checklogin.php">
                        <div class="form-style-1">
                        <div class="row">
                        <input input type="email" name="email" id="email" maxlength="40" class="form-control" placeholder="Sähköposti" autofocus><br>
                        </div>
                        <div class="row">
                        <input input type="text" name="username" id="username" maxlength="40" class="form-control" placeholder="Käyttäjänimi" autofocus><br>
                        </div>
                        <div class="row">
                        <input input type="password" name="pass" id="pass" maxlength="50"  class="form-control" placeholder="Salasana">
                        </div><br>
                        <div class="row">
                        <input input type="password" name="pass2" id="pass2" maxlength="50"  class="form-control" placeholder="Salasana vahvistus">
                        </div><br>
                        <input style="float:right;margin-top:-12px;background-color: #1abc9c;" class="btn btn-default btn-embossed" id="submit_button" type="submit" value="Rekiströidy" input type="submit" name="submit"/>
                </form><br>
                    <p style="text-align:center;">On jo tili olemassa? kirjaudu <a href="auth">tästä</a></p>
                </div>
            <br><br>
            <br><br>
            <br><br>
            <br><br>
    		<br><br>
    		</div><!-- /.container -->
    		
    		</div><!-- /.wrapper -->
    	
    	</div><!-- /.item -->

        <div class="footerWrapper">
    
    </div><!-- /#page -->


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


</body></html>
<?php } ?> 
