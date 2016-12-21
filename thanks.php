
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
    
    <div id="page" class="page">
        
    <!-- /.item --><!-- /.wrapperDark --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.item --><!-- /.item --><!-- /.wrapperDark --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.wrapperDark --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.item --><!-- /.footerWrapper --><!-- /.item --><!-- /.item --><!-- /.footerWrapper --><header class="item header margin-top-0 padding-bottom-0">
    
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
    	
    	</header><!-- /.item --><div class="item content padding-top-0 padding-bottom-0">
    	
    		<div class="wrapper grey">
    		
    		<div class="container">
    		
    		

                <br><br>

                <div class="row">
            <div class="col-md-4"></div>
                    <div class="col-md-4 ">
                    <h1 style="text-align:center;">KIITOS!</h1><br><br>
                    <p>Kiitos kun otit meihin yhteyttä! vastaamme pian!</p>
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
