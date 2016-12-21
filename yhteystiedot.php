<?php
//Lisätään sivulle tietokanta
include("../mvrclabs/uploads/8/0/4/6/8046813/tietokanta.php");

//haetaan käyttäjätiedot
$username = $_COOKIE['ID_my_site'];  
$userdata = mysql_query("SELECT * FROM users WHERE username = '$username'");
$_SESSION = mysql_fetch_assoc($userdata);
?>


<!--DOCTYPE html -->
<html><head>
    <meta charset="utf-8">
    <title></title>
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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=879707942148925";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    <div id="page" class="page">
        
    <!-- /.item --><!-- /.wrapperDark --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.item --><!-- /.item --><!-- /.wrapperDark --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.wrapperDark --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.item --><!-- /.footerWrapper --><header class="item header margin-top-0 padding-bottom-0">
    
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
    								<li class="propClone"><a href="etusivu" data-selector="nav a, a.edit" src="images/image1.png" style="outline: none; color: rgb(255, 255, 255); font-weight: bold; text-transform: none;">ETUSIVU</a></li>
    								<li class="propClone"><a href="kuvat" data-selector="nav a, a.edit" src="images/image1.png" style="outline: none; color: rgb(255, 255, 255); font-weight: bold; text-transform: none;">KUVIA</a></li>
    								<li class="active propClone"><a href="#" data-selector="nav a, a.edit" style="outline: none;">YHTEYSTIEDOT</a></li>
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
    						</div><!-- /.navbar-collapse -->
    					
    					</div><!-- /.container -->
    					
    				</nav>
    			
    				<div class="row banner">
    				
    					<div class="col-md-12">
    					
    						
    						
    						<div class="text-center">
    							
    						</div>
    				
    					</div>
    			
    				</div><!-- /.row -->
    		
    			</div><!-- /.container -->
    	
    		</div><!-- /.wrapper -->
    	
    	</header><!-- /.item --><div class="item contact">
    	    	
    		<div class="container">
    		
    			<div class="col-md-4 col-md-offset-2">
    			<br><br>
    				<h4>Yhteystiedot</h4>
    				
                    <p data-selector="p" style="outline: none; cursor: default;">Helsinki, Finland | Luonut Marcos Raudkett</p>
                    <div class="fb-follow" data-href="https://www.facebook.com/marcosraudkett" data-layout="button_count" data-size="small" data-show-faces="true"></div>
                    <br><br>
    				<p data-selector="p" style="outline: none; cursor: default;"> <br>
                    <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.</p>
    			
    			</div><!-- ./col-md-4 -->
    			<br><br>
    			<div class="col-md-4 col-offset-2">
    			
    				<h4>Ota Yhteyttä</h4>
    			
    				<form method="POST" action="sendmessage.php">
    				
    					<div class="form-group">
    				    	<input type="text" class="form-control input-lg" id="name" name="name" placeholder="Nimesi *">
    				  	</div>
    				  	    				  	
    				  	<div class="form-group">
    				  		<input type="email" class="form-control input-lg" id="email" name="email" placeholder="Sähköposti *">
    				  	</div>
    				  	
    				  	<div class="form-group">
    				  		<textarea class="form-control" rows="4" name="message" placeholder="Lisää viesti...."></textarea>
    				  	</div>
    				      				  	
    				  	<button type="submit" class="btn btn-primary btn-embossed btn-lg btn-wide"><span class="fui-mail"></span> Lähetä</button>
    				
    				</form>
    			
    			</div><!-- /.col-md-4 -->
    		
    		</div><!-- /.container -->
    		    	
    	</div><!-- /.item --><div class="footerWrapper">
    
    	<div class="item footer dark">
    	    	
    		<div class="container">
   				<div class="row">
 					<div class="col-md-6 col-md-offset-3 text-center social">
 						
 						<h2 data-selector="h2" style="outline: none; cursor: default;">Me ollaan Kuvaton!</h2>
 						
 						<span>SEURAA MEITÄ SOSIAALIMEDIOISSA:</span><br>
 						<a href="#"><span class="fa fa-facebook-square" data-selector="span.fa" style="outline: none; cursor: default;"></span></a>
 						<a href="#"><span class="fa fa-twitter-square" data-selector="span.fa" style="outline: none; cursor: default;"></span></a>
 						<a href="#"><span class="fa fa-linkedin-square" data-selector="span.fa" style="outline: none; cursor: default;"></span></a>
 						<a href="#"><span class="fa fa-github-square" data-selector="span.fa" style="outline: none; cursor: default;"></span></a>
 						<a href="#"><span class="fa fa-google-plus-square" data-selector="span.fa" style="outline: none; cursor: default;"></span></a>
 						<a href="#"><span class="fa fa-pinterest-square" data-selector="span.fa" style="outline: none; cursor: default;"></span></a>
 						<a href="#"><span class="fa fa-reddit-square" data-selector="span.fa" style="outline: none; cursor: default;"></span></a>
 					</div><!-- /.col -->
   				</div><!-- /.row -->
   			</div>
    		    	
    	</div><!-- /.item -->
    	
    	</div><!-- /.footerWrapper --></div><!-- /#page -->


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