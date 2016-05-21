<!DOCTYPE html> 
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Hive</title>
      <!--Import Google Icon Font-->      
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->     
      <link href="libs/css/materialize/css/materialize.min.css" rel="stylesheet" type="text/css" media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      
     
      <link href="libs/css/main-style.css" rel="stylesheet" type="text/css"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>

    <body>
        <!-- Navigation bar -->
        <!-- Navigation bar drop down menu -->
        <ul id="dropdown1" class="dropdown-content dropdown-full full blue">
            <li><a href="#!"><span class="black-text text-darken-2">Movies</span></a></li>
            <li><a href="#!"><span class="black-text text-darken-2">TV-Shows</span></a></li>
            <li class="divider"></li>
            <li><a href="#!"><span class="black-text text-darken-2">Music</span></a></li>
        </ul>
        
        <ul id="dropdown2" class="dropdown-content dropdown-full full blue">
            <li><a href="#!"><span class="black-text text-darken-2">Movies</span></a></li>
            <li><a href="#!"><span class="black-text text-darken-2">TV-Shows</span></a></li>
            <li class="divider"></li>
            <li><a href="#!"><span class="black-text text-darken-2">Music</span></a></li>
        </ul>
        <!-- Navigation bar drop down menu end-->
        <div class="navbar-fixed">
            <nav>
             <div class="nav-wrapper blue darken-2">
                 <a href="hive.php" class="brand-logo">
                     <img src="images/sly_Code.png" alt="" width="45" height="45"/>                   
                 </a>
               <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>


               <ul class="right hide-on-med-and-down">

                 <li><a href="trending.php">Trending</a></li>
                 <!-- Dropdown Trigger -->
                 <li><a class="gallery-dropdown-button" href="#!" data-activates="dropdown1">Gallery<i class="material-icons right">arrow_drop_down</i></a></li>
                 <li><a href="sign_in.php" class="waves-effect waves-light btn blue lighten-1">Log in</a></li>
                 <li><a href = "register.php" class="waves-effect waves-light btn red darken-5">Sign up</a></li>
                 
               </ul>
               

               <ul class="side-nav" id="mobile-demo">
                 <li><a href="trending.php">Trending</a></li>
                 <li><a class="gallery-dropdown-button" href="#!" data-activates="dropdown2">Gallery<i class="material-icons right">arrow_drop_down</i></a></li>
                 <li><a href="sign_in.php" class="waves-effect waves-light btn blue lighten-1">Log in</a></li>
                 <li><a href = "register.php" class="waves-effect waves-light btn red darken-5">Sign up</a></li>
                 
               </ul>
             </div>


         </nav>
         <!-- Navigation bar end --> 
            
        </div>
        
        
        <div class="main-content"> <!-- main container -->
            <div class="slider-portion">
            
                <!-- slider -->
                <div class="slider">
                    <ul class="slides" >
                      <li>
                          <img src="http://wallpapersdsc.net/wp-content/uploads/2015/11/277.jpg"> <!-- random image -->
                        <div class="caption right-align">
                          <h2 class="amber-text text-darken-2">The Angry Birds Movie</h2>
                          <a class="waves-effect waves-light btn-large red">DOWNLOAD NOW</a>
                         
                          <h5 class="white-text text-darken-3">Experience the fun!!!</h5>
                        </div>
                      </li>
                      <li>
                        <img src="http://hdwallpicx.com/wp-content/uploads/2015/04/batman-vs-superman-2016-movie-wallpaper-hd-1080p-1920x1080-desktop.jpg"> <!-- random image -->
                          <div class="caption centers-align">
                          <h2 class="amber-text text-darken-2">Superman vs Batman</h2>
                          <a class="waves-effect waves-green btn-large lime">DOWNLOAD NOW</a>
                         
                          <h5 class="white-text text-darken-3">Experience the fun!!!</h5>
                        </div>
                      </li>
                      <li>
                        <img src="http://1.bp.blogspot.com/-DKCUPr7XKy0/UzjC8NJD9FI/AAAAAAAAHoQ/TXN3X526TFM/s1921/electro-vs-spider-man-2-2014-movie-hd-1920x1080.jpg"> <!-- random image -->
                        <div class="caption left-align">
                          <h2 class="amber-text text-darken-2">The Spectacular Spider-man</h2>
                          <a class="waves-effect waves-ripple btn-large blue">DOWNLOAD NOW</a>
                         
                          <h5 class="white-text text-darken-3">Experience the fun!!!</h5>
                        </div>
                      </li>
                      <li>
                        <img src="http://static.theglobeandmail.ca/a15/arts/music/article25825556.ece/ALTERNATES/w620/MUSIC+Drake+20150729.JPG"> <!-- random image -->
                         <div class="caption center-align">
                          <h2 class="purple-text text-darken-2">Drake at OVO Fest</h2>
                          <a class="waves-effect waves-ripple btn-large purple">WATCH NOW</a>
                         
                          <h5 class="white-text text-darken-3">Experience greatness!!!</h5>
                        </div>
                      </li>
                      <li>
                        <img src="http://4.bp.blogspot.com/-IOaJG082oVw/U14pKi_1SsI/AAAAAAAAAaw/2BoGod7A_Ks/s1600/the-avengers-big.jpg"> <!-- random image -->
                        <div class="caption right-align">
                          <h2 class="green-text text-darken-2">The Avengers</h2>
                          <a class="waves-effect waves-ripple btn-large orange black-text text-darken-2">DOWNLOAD NOW</a>
                         
                          <h5 class="white-text text-darken-3">Marvel strikes again!!!</h5>
                        </div>
                      </li>
                      <li>
                        <img src="http://hiphop-n-more.com/wp-content/uploads/2013/07/magna-carta-1500-HHNM.jpg"> <!-- random image -->
                        <div class="caption left-align">
                          <h2 class="purple-text text-darken-2">Jay Z's Magna Carter Holy Grail</h2>
                          <a class="waves-effect waves-light btn-large lime black-text text-darken-3">LISTEN NOW</a>
                         
                          <h5 class="white-text text-darken-3">Hov's best album yet!!!</h5>
                        </div>
                      </li>
                       <li>
                        <img src="http://www.huxtonst.co/wp-content/uploads/2016/04/beyonce-lemonade-video-trailer.jpg"> <!-- random image -->
                        <div class="caption right-align">
                          <h2 class="amber-text text-darken-2">BEYONCE's LEMONADE</h2>
                          <a class="waves-effect waves-purple btn-large pink">LISTEN NOW</a>
                         
                          <h5 class="white-text text-darken-3">Exclusive visual album!!!</h5>
                        </div>
                      </li>
                    </ul>
                  </div>  <!-- slider ends -->   
            </div>
        
        </div> <!-- main container end -->

        
        <!-- Paralax content -->
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center blue  black-text text-darken-1">ADVANCED ANALYTICS</h1>
        <div class="row center">
            <h5 class="header col s12 black"><span class="red-text">A modern responsive content analysis app based on Material Design and uses Machine learning</span></h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light red lighten-1">DOWNLOAD</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="http://assets.materialup.com/uploads/036bf3da-7b74-4cda-baf4-dbc018213684/Material-video-mobile-app-christophe-kerebel.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
            <h3 class="header col s12 black blue-text">A modern responsive front-end framework based on Material Design</h3>
              <button class="btn btn-large waves-effect waves-purple blue">
                  <span class="black-text">DOWNLOAD</span></button>
          
        </div>
      </div>
    </div>
    <div class="parallax"><img src="http://gameswallpaperhd.com/wp-content/uploads/2013/12/ps3-wallpaper-1080phomefront-wallpaper-hd-1080p-ps3----gamingboltcom--video-game-news-3szxf8fs.jpg" alt="Unsplashed background img 2"></div>
  </div>

        <!-- paralax content -->
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
      <script src="libs/js/main-app-chart.js" type="text/javascript"></script>
      <script src="libs/css/materialize/js/materialize.min.js" type="text/javascript"></script>
      
      
    </body>
  </html>
