<?php
//Lisätään sivulle tietokanta
include("db.php");

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
    								<li class="active"><a href="#" data-selector="nav a, a.edit" style="outline: none;">ETUSIVU</a></li>
    								<li class="propClone"><a href="kuvat" data-selector="nav a, a.edit" src="images/image1.png" style="outline: none; color: rgb(255, 255, 255); font-weight: bold; text-transform: none;">KUVIA</a></li>
    								<li class="propClone"><a href="tietoa" data-selector="nav a, a.edit" src="images/image1.png" style="outline: none; color: rgb(255, 255, 255); font-weight: bold; text-transform: none;">YHTEYSTIEDOT</a></li>
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
    						<h1 class="text-center margin-top-100" data-selector="h1" style="outline: none; cursor: default;">Tervetuloa Kuvaton:in sivuille!</h1>
    						
    						<div class="text-center">
    							
    						</div>    				
    					</div>   			
    				</div>
    			</div>
    		</div>
    	</header>

    <div class="wrapperDark">
    
    		<div class="container">    	
    			<div class="col-md-12">       
    				<div class="divider dashed">
    					<span data-selector=".divider > span" style="outline: none; cursor: default;">MITÄ VOIT TEHDÄ KÄYTTÄJÄNÄ?</span></div>
    			    		
    			</div>
    		</div>
    	</div>

    <div class="item content padding-bottom-60">
    		
    		<div class="container">
    		    		
    			<div class="row">
    			
    				<div class="col-md-4 text-center">
    				       				   	
    				   	<img alt="" src="http://icons.iconarchive.com/icons/graphicloads/colorful-long-shadow/72/Hand-thumbs-up-like-icon.png" data-selector="img" style="outline: none; cursor: default; border-radius: 0px; border-color: rgb(52, 73, 94); border-style: none; border-width: 1px;">
    				   	    					
    					<h3 data-selector="h3" style="outline: none; cursor: default;">Tykkäile ja Jaa Kuvia</h3>
    						
    					<p data-selector="p" style="outline: none; cursor: default;">
    						Käyttäjänä voit tykätä kuvista tai sitten jakaa omille profiileille.</p>
    					
    					<a href="signup" class="btn btn-default btn-embossed" data-selector="a.btn" style="outline: none;  border-radius: 4px; font-size: 15px; background-color: rgb(111, 88, 154);" src="images/image1.png">Rekiströidy</a></div><!-- /.col-md-4 col -->
    				
    				<div class="col-md-4 text-center">
    				        				    
    				    <img alt="" src="http://icons.iconarchive.com/icons/icojam/blue-bits/72/chat-comment-icon.png" data-selector="img" style="outline: none; cursor: default; border-radius: 0px; border-color: rgb(52, 73, 94); border-style: none; border-width: 1px;">
    				    			    					
    					<h3 data-selector="h3" style="outline: none;">Kommentoida kuville</h3>
    						
    					<p data-selector="p" style="outline: none; cursor: default;">
    						Käyttäjänä voit kommentoida kuville ja myöhemmin katsoa profiilista mihin olet kommentoinnu.</p>
    						
    					<a href="signup" class="btn btn-default btn-embossed" data-selector="a.btn" style="outline: none; border-radius: 4px; font-size: 15px; background-color: rgb(111, 88, 154);" src="images/image1.png">Rekiströidy</a><br></div><!-- /.col-md-4 col -->
    				
    				<div class="col-md-4 text-center">
    				   	    				   	
    				   	<img alt="" src="http://icons.iconarchive.com/icons/elegantthemes/beautiful-flat-one-color/72/profle-icon.png" data-selector="img" style="outline: none;border-radius: 0px; border-color: rgb(52, 73, 94); border-style: none; border-width: 1px;">
    				   				    					
    					<h3 data-selector="h3" style="outline: none;">Katsoa muiden profiileja</h3>
    						
    					<p data-selector="p" style="outline: none;">
    						Käyttäjänä voit katsoa muiden profiileja ja niitten tykkäämistä kuvista.</p>
    						
    					<a href="signup" class="btn btn-default btn-embossed" data-selector="a.btn" style=" outline: none; border-radius: 4px; font-size: 15px; background-color: rgb(111, 88, 154);" src="images/image1.png">Rekiströidy</a><br></div><!-- /.col-md-4 col -->
    			
    			</div><!-- /.row -->
    		
    		</div><!-- /.container -->
    	
    	</div><!-- /.item --><div class="footerWrapper">
    
    	<div class="item footer dark">
    	    	
    		<div class="container">
   				<div class="row">
 					<div class="col-md-6 col-md-offset-3 text-center social">
 						
 						<h2 data-selector="h2" style="outline: none; cursor: default;">Me ollaan Kuvaton!</h2>
 						
 						<span>SEURAA MEITÄ SOSIAALIMEDIASSA:</span><br>
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
