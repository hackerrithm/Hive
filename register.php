<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'config/database_connector.php';

if(isset($_POST['btn-signup']))
{
	$uname = mysql_real_escape_string($_POST['uname']);                     $uname = trim($uname);
        $fname = mysql_real_escape_string($_POST['fname']);                     $fname = trim($fname);
        $lname = mysql_real_escape_string($_POST['lname']);                     $lname = trim($lname);
	$email = mysql_real_escape_string($_POST['email']);                     $email = trim($email);
	$upass = md5(mysql_real_escape_string($_POST['pass']));                 $upass = trim($upass);

	// email exist or not
	$query = "SELECT user_email FROM users WHERE user_email='$email'";
	$result = mysql_query($query);
	
	$count = mysql_num_rows($result); // if email not found then register
	
	if($count == 0){
		
		if(mysql_query("INSERT INTO users(user_name,user_fname,user_lname,user_email,user_pass) VALUES('$uname','$fname','$lname','$email','$upass')"))
		{
                    	$res=mysql_query("SELECT user_id, user_name, user_pass FROM users WHERE user_email='$email'");
                        $row=mysql_fetch_array($res);
			?>
			<script>alert('successfully registered ');</script>
			<?php
                        $_SESSION['user'] = $row['user_id'];
                        header("Location: home.php");
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}		
	}
	else{
			?>
			<script>alert('Sorry Email ID already taken ...');</script>
			<?php
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sign up for Streamaz</title>
          <!--Import Google Icon Font-->      
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->     
      <link href="libs/css/materialize/css/materialize.min.css" rel="stylesheet" type="text/css" media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="libs/css/register-form-style.css" rel="stylesheet" type="text/css"/>
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
             <div class="nav-wrapper purple darken-2">
                 <a href="hive.php" class="brand-logo">
                    <img src="images/sly_Code.png" alt="" width="45" height="45"/>  
                               <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>


               <ul class="right hide-on-med-and-down">

                 <li><a href="trending.php">Trending</a></li>
                 <!-- Dropdown Trigger -->
                 <li><a class="gallery-dropdown-button" href="#!" data-activates="dropdown1">Gallery<i class="material-icons right">arrow_drop_down</i></a></li>
                 
                 <li><a href="sign_in.php" class="waves-effect waves-light btn red lighten-1">Log in</a></li>
               </ul>
               

               <ul class="side-nav" id="mobile-demo">
                 <li><a href="trending.php">Trending</a></li>
                 <li><a class="gallery-dropdown-button" href="#!" data-activates="dropdown2">Gallery<i class="material-icons right">arrow_drop_down</i></a></li>
                 
                 <li><a href="sign_in.php" class="waves-effect waves-light btn red lighten-1">Log in</a></li>
               </ul>
               
             </div>
            </nav>
        </div>
         <!-- Navigation bar end -->

         <form method="post" name="validation" onSubmit="return checkEmail(document.validation.email.value)">
         <div id="login-form">
            <div class="left-placement">
              <center>
              <h1>Sign up</h1>
              <i class="material-icons prefix">account_circle</i>
              <input type="text" name="uname" placeholder="Username" required/>
              <input type="text" name="fname" placeholder="First name" required/>
              <input type="text" name="lname" placeholder="Last name" required/>
              <input type="text" name="email" placeholder="E-mail" required/>
              <input type="password" name="pass" placeholder="Password" required/>
              
              
              <button class="waves-effect waves-ripple btn-large orange" type="submit" name="btn-signup">Sign up
              <i class="material-icons right">polymer</i>
              </button>
              <a href="sign_in.php" class="waves-effect waves-light btn blue lighten-1 text-white" name="btn-login" id="log" >Log in 
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