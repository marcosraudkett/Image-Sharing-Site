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
                    <li class="propClone"><a href="etusivu" data-selector="nav a, a.edit" style="outline: none;">ETUSIVU</a></li>
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

    <div class="item content padding-bottom-60">
        
        <div class="container">
                
          <div class="row">
          
            <div class="col-md-12 text-center">
                <br><br><br><br>
                  <h4>Hups!</h4>
                  <p>Sivustoa ei löydetty!</p>

            </div>

          </div>


       </div>

  </div>

  </center>
</body>
