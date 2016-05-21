<?php
session_start();
include_once 'config/database_connector.php';

if(!isset($_SESSION['user']))
{
	header("Location: sign_in.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<!DOCTYPE html> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['user_email']; ?></title>
<!--Import Google Icon Font-->      
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->     
      <link href="libs/css/materialize/css/materialize.min.css" rel="stylesheet" type="text/css" media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="libs/css/main-style.css" rel="stylesheet" type="text/css"/>
    

</head>

    <body>
        <!-- Navigation bar -->
        <!-- Navigation bar drop down menu -->
        <ul id="dropdown1" class="dropdown-content ">
            <li><a href="#!">movies</a></li>
            <li><a href="#!">tv-shows</a></li>
            <li class="divider"></li>
            <li><a href="#!">music</a></li>
        </ul>
        
        <ul id="dropdown2" class="dropdown-content ">
            <li><a href="#!">movies</a></li>
            <li><a href="#!">tv-shows</a></li>
            <li class="divider"></li>
            <li><a href="#!">music</a></li>
        </ul>
        <!-- Navigation bar drop down menu end-->
        <div class="navbar-fixed">
            <nav>
             <div class="nav-wrapper red darken-1">
                 <a href="home.php" class="brand-logo">
                     <img src="images/sly_Code.png" alt="" width="45" height="45"/>                  
                 </a>
               <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>


               <ul class="right hide-on-med-and-down">
                <li>    
                     <div id="right">
                        <div id="content">
                            hi' <?php echo $userRow['user_name']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
                        </div>
                    </div>
                </li>
               </ul>
               

               <ul class="side-nav" id="mobile-demo">
                 <li>    
                     <div id="right">
                        <div id="content">
                            hi' <?php echo $userRow['user_name']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
                        </div>
                    </div>
                 </li>
               </ul>
             </div>
         </nav>
         <!-- Navigation bar end --> 
        </div>
 
        <!-- Footer-->
        <footer class=" blue page-footer">
            <div class="container">  
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">STREAMAZ</h5>
                        
                </div>
                <div class="  col l4 offset-l2 s12">
                  <h5 class="white-text">Links</h5>
                    <ul class="list-inline">
                    <li><a target="_blank" title="follow me on Twitter" href="http://www.twitter.com/PLACEHOLDER"><img alt="follow me on twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter40x40.png" border=0></a></li>

                    <li><a target="_blank" title="follow me on facebook" href="http://www.facebook.com/PLACEHOLDER"><img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook40x40.png" border=0></a></li>

                    <li> <a target="_blank" title="follow me on youtube" href="http://www.youtube.com/PLACEHOLDER"><img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube40x40.png" border=0></a></li>

                    <li><a target="_blank" title="follow me on instagram" href="http://www.instagram.com/PLACEHOLDER"><img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram40x40.png" border=0></a></li>

                    <li> <a target="_blank" title="follow me on google plus" href="https://plus.google.com/PLACEHOLDER"><img alt="follow me on google plus" src="https://c866088.ssl.cf3.rackcdn.com/assets/googleplus40x40.png" border=0></a></li>
                  </ul>
                </div>
              </div>
              </div>
           
            <div class="blue darken-3 footer-copyright">
              <div class="container">
              © 2016 Streamaz All rights reserved
              <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
              </div>
            </div>
        </footer>
        <!-- Footer end-->
        
      
      <!--Import jQuery before materialize.js-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
      <script src="libs/js/main-app.js" type="text/javascript"></script>
      <script src="libs/css/materialize/js/materialize.min.js" type="text/javascript"></script>
      
    </body>
</html>