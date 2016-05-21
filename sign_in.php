<?php
session_start();
include_once 'config/database_connector.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$upass = mysql_real_escape_string($_POST['pass']);
	
	$email = trim($email);
	$upass = trim($upass);
	
	$res=mysql_query("SELECT user_id, user_name, user_pass FROM users WHERE user_email='$email'");
	$row=mysql_fetch_array($res);
	
	$count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row
	
	if($count == 1 && $row['user_pass']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: home.php");
	}
	else
	{
		?>
        <script>alert('Username / Password Seems Wrong !');</script>
        <?php
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Log in for Streamaz</title>
          <!--Import Google Icon Font-->      
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->     
      <link href="libs/css/materialize/css/materialize.min.css" rel="stylesheet" type="text/css" media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      
      <link href="libs/css/sign-in-form.css" rel="stylesheet" type="text/css"/>
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
             <div class="nav-wrapper blue lighten-2">
                 <a href="hive.php" class="brand-logo">
                     <img src="images/sly_Code.png" alt="" width="45" height="45"/>  
                     
                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>


               <ul class="right hide-on-med-and-down">

                 <li><a href="trending.php">Trending</a></li>
                 <!-- Dropdown Trigger -->
                 <li><a class="gallery-dropdown-button" href="#!" data-activates="dropdown1">Gallery<i class="material-icons right">arrow_drop_down</i></a></li>
                 <li><a href = "register.php" class="waves-effect waves-light btn blue darken-3">Sign up</a></li>
                 
               </ul>
               

               <ul class="side-nav" id="mobile-demo">
                 <li><a href="trending.php">Trending</a></li>
                 <li><a class="gallery-dropdown-button" href="#!" data-activates="dropdown2">Gallery<i class="material-icons right">arrow_drop_down</i></a></li>
                 <li><a href = "register.php" class="waves-effect waves-light btn blue darken-3">Sign up</a></li>
                 
               </ul>
               
             </div>
            </nav>
        </div>
    <!-- Navigation bar end -->
    
    <form method="post" name="validation" onSubmit="return checkEmail(document.validation.email.value)">
         <div id="login-form">
            <div class="left-placement">
              <center>
              <h1>Log in</h1>

              <input type="text" name="email" placeholder="E-mail" required/>
              <input type="password" name="pass" placeholder="Password" required/>
              
              
              <button class="waves-effect waves-ripple btn-large orange" type="submit" name="btn-login">Log in
              <i class="material-icons right">polymer</i>
              </button>
              <a href="register.php" class="waves-effect waves-light btn blue lighten-1 text-white" name="btn-signup" id="log" >Sign up 
              <i class="material-icons right">assignment_ind</i>
              </a>
              </center>
             
            </div>
           </form>
            <div class="right-placement">
              <span class="loginwith">Log in with<br />social network</span>

              <button class="social-signin facebook">Log in with facebook</button>
              <button class="social-signin twitter">Log in with Twitter</button>
              <button class="social-signin google">Log in with Google+</button>
            </div>
            <div class="or">OR</div>
      
            
      <!--Import jQuery before materialize.js-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
      <script src="libs/js/main-app.js" type="text/javascript"></script>
      <script src="libs/css/materialize/js/materialize.min.js" type="text/javascript"></script>
</body>
</html>