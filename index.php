<!DOCTYPE html>

<?php
/**require_once("session.php"); 
require_once("db_connection.php"); 

if(isset($_POST['username']) && isset($_POST['password'])){
$query="select * ";
$query.="from comptes where ";
$query.="user='{$_POST['username']}' and password='{$_POST['password']}'";
$result=mysqli_query($connection,$query);
//test if there is a query 

$row=mysqli_fetch_assoc($result);
$_SESSION["id"]=$row['id'];
 header("Location: feed.php");
     exit;
}
*/
?>
<!-- saved from url=(0048)http://thunder-team.com/friend-finder/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......">
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page">
		<meta name="robots" content="index, follow">
		<title>Friend Finder | A Complete Social Network Template</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="./style/bootstrap.min.css">
		<link rel="stylesheet" href="./style/style.css">
		<link rel="stylesheet" href="./style/ionicons.min.css">
    <link rel="stylesheet" href="./style/font-awesome.min.css">
    <!--Google Webfont-->
		<link href="./style/css" rel="stylesheet" type="text/css">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="http://thunder-team.com/friend-finder/images/fav.png">
	</head>
	<body>

    <!-- Header
    ================================================= -->
		<header id="header" class="lazy-load">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="./style/logo.png" alt="logo"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="#">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="./style/down-arrow.png" alt=""></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="#">Newsfeed</a></li>
                    <li><a href="#">Poeple Nearly</a></li>
                    <li><a href="#">My friends</a></li>
                    <li><a href="#">Chatroom</a></li>
                    <li><a href="#">Images</a></li>
                    <li><a href="#">Videos</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="./style/down-arrow.png" alt=""></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="#">Timeline</a></li>
                  <li><a href="#">Timeline About</a></li>
                  <li><a href="#">Timeline Album</a></li>
                  <li><a href="#">Timeline Friends</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="./style/down-arrow.png" alt=""></span></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="#">Landing Page</a></li>
                  <li><a href="#">Newsfeed</a></li>
                  <li><a href="#">Poeple Nearly</a></li>
                  <li><a href="#">My friends</a></li>
                  <li><a href="#">Chatroom</a></li>
                  <li><a href="#">Images</a></li>
                  <li><a href="#">Videos</a></li>
                  <li><a href="#">Timeline</a></li>
                  <li><a href="#">Timeline About</a></li>
                  <li><a href="#">Timeline Album</a></li>
                  <li><a href="#">Timeline Friends</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="http://thunder-team.com/friend-finder/contact.html">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <!-- Top Banner
    ================================================= -->
		<section id="banner">
			<div class="container">

        <!-- Sign Up Form
        ================================================= -->
        <div class="sign-up-form">
					<a href="http://thunder-team.com/friend-finder/index.html" class="logo"><img src="./style/logo.png" alt="Friend Finder"></a>
					<h2 class="text-white">Find My Friends</h2>
					<div class="line-divider"></div>
					<div class="form-wrapper">
						<p class="signup-text">Signup now and meet awesome people around the world</p>


						<form action="index.php" method="POST" >
							
							<fieldset class="form-group">
								<input type="email" class="form-control" name="username" id="username" placeholder="Enter email">
							</fieldset>
							<fieldset class="form-group">
								<input type="password" class="form-control" name="password" id="password" placeholder="Enter a password">
							</fieldset>
                          <button type="submit" class="btn-secondary">login</button>

						</form>


						<p>By signning up you agree to the terms</p>
					</div>
					<a href="http://thunder-team.com/friend-finder/index.html#">Already have an account?</a>
					<img class="form-shadow" src="./style/bottom-shadow.png" alt="">
				</div><!-- Sign Up Form End -->

 
			</div>
		</section>

    

    <!-- Footer
    ================================================= -->
		<footer id="footer">
  
      <div class="copyright">
        <p>copyright M'sila 2017. All rights reserved</p>
      </div>
		</footer>

    <!--preloader-->
    <div id="spinner-wrapper" style="display: none;">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="./style/jquery-3.1.1.min.js.téléchargement"></script>
    <script src="./style/bootstrap.min.js.téléchargement"></script>
    <script src="./style/jquery.appear.min.js.téléchargement"></script>
		<script src="./style/jquery.incremental-counter.js.téléchargement"></script>
    <script src="./style/script.js.téléchargement"></script>
    
	

</body></html>