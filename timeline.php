<?php  require_once("data/session.php"); 
require_once("/data/db_connection.php"); 
?>

<?php
$_SESSION["id"]=3;



?>

<!DOCTYPE html>
<!-- saved from url=(0051)http://thunder-team.com/friend-finder/timeline.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......">
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page">
		<meta name="robots" content="index, follow">
		<title>My Timeline | This is My Coolest Profile</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="./My Timeline _ This is My Coolest Profile_files/bootstrap.min.css">
    <link rel="stylesheet" href="./data/minimalist-notify.css"> 
    <link rel="stylesheet" href="./data/animate.css">  
    <link rel="stylesheet" href="./data/autocomplete.css">          
		<link rel="stylesheet" href="./My Timeline _ This is My Coolest Profile_files/style.css">
		<link rel="stylesheet" href="./My Timeline _ This is My Coolest Profile_files/ionicons.min.css">
    <link rel="stylesheet" href="./My Timeline _ This is My Coolest Profile_files/font-awesome.min.css">
    <link href="./My Timeline _ This is My Coolest Profile_files/emoji.css" rel="stylesheet">
    <!--Google Webfont-->
		<link href="./My Timeline _ This is My Coolest Profile_files/css" rel="stylesheet" type="text/css">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="http://thunder-team.com/friend-finder/images/fav.png">
     <script src="./data/jquery-3.1.1.min.js"></script>
    <script src="./data/myJqueryFunctions.js"></script>
    <script src="./data/bootstrap.min.js"></script>

	</head>
  <body>
	<input type="hidden" value="<?php echo $_SESSION["id"]; ?>" id="id" name="id"><!--current user id -->
    <!-- Header
    ================================================= -->
		<header id="header">
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
            <a class="navbar-brand" href="http://thunder-team.com/friend-finder/index.html"><img src="./My Timeline _ This is My Coolest Profile_files/logo.png" alt="logo"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul style="margin-left:300px;" class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="#">Home</a></li>
                            <li class="dropdown"><a href="#">Newsfeed</a></li>
              <li class="dropdown"><a href="#">Timeline</a></li>

              
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" id="search" class="form-control" placeholder="Search friends by name or Email">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->


    <div class="container">
<?php

$userID=$_GET["id"];
$query="SELECT * FROM users ";
$query.="WHERE user_id={$userID}";
$result=mysqli_query($connection,$query);
//test if there is a query 
if(!$result){
	//die("query error");
	echo("query error".$query);
}


$row=mysqli_fetch_assoc($result);



?>
      <!-- Timeline
      ================================================= -->
      <div class="timeline">
      <?php 
      echo('<div class="timeline-cover" style="background: url(./pictures/'.$row["user_cover"].') no-repeat;">');
      ?>

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                      <?php 
      echo('<img src="./pictures/'.$row["user_image"].'" class="img-responsive profile-photo">');
      ?>

                  <h3><?php echo($row["user_name"]);?></h3>
                  <p class="text-muted">Creative Director</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="#" class="active">Timeline</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Album</a></li>
                  <li><a href="#">Friends</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>
                    <?php
                    //if he sent a request
$query="SELECT * FROM friend_request ";
$query.="WHERE (user_id={$_SESSION['id']} and sender_id={$_GET['id']}) LIMIT 1";
$result=mysqli_query($connection,$query);

if($result && mysqli_num_rows($result)!=0){ //success
$row=mysqli_fetch_assoc($result);

$displayString='<button class="btn btn-success accept-button2" style="margin-right:3px" userId="'.$row["user_id"].'" requestId="'.$row["id"].'">Accept</button></li>';
$displayString.='<li><button class="btn btn-danger refuse-button2" requestId="'.$row["id"].'">Refuse</button>';
    echo ($displayString);
}

//if I sent a request
$query="SELECT * FROM friend_request ";
$query.="WHERE (sender_id={$_SESSION['id']} and user_id={$_GET['id']}) LIMIT 1";
$result2=mysqli_query($connection,$query);

if($result2 && mysqli_num_rows($result2)!=0){ //success

$string='<h5>Request sent</h5>';
    echo ($string);
}
if($result && $result2 && mysqli_num_rows($result)==0 && mysqli_num_rows($result2)==0 && $_SESSION["id"]!=$_GET["id"]){

  $str=' <button class="btn-primary request-button2" userId="'.$_GET['id'].'">Send request</button>';
  echo ($str);
}



                    ?>
                    </li>
                    <li>
                      <?php 
                      if($_SESSION["id"]!=$_GET["id"]){
                    $s='<button class="btn-primary" userId="send-msg" data-toggle="modal" data-target="#myModal">Send a Message</button>';
                    echo($s);
                    }
                    ?>
                  </li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
              <img src="#" alt="" class="img-responsive profile-photo">
              <h4>Sarah Cruiz</h4>
              <p class="text-muted">Creative Director</p>
            </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="http://thunder-team.com/friend-finder/timline.html" class="active">Timeline</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline-about.html">About</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline-album.html">Album</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline-friends.html">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- Post Create Box
              ================================================= -->
              <div class="create-post">
                <div class="row">
                  <div class="col-md-7 col-sm-7">
                    <div class="form-group">
                      <img src="./pictures/<?php echo($row["user_image"])?>" alt="" class="profile-photo-md">
                      <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                    </div>
                  </div>
                  <div class="col-md-5 col-sm-5">
                    <div class="tools">
                      <ul class="publishing-tools list-inline">
                        <li><a href="http://thunder-team.com/friend-finder/timeline.html#"><i class="ion-compose"></i></a></li>
                        <li><a href="http://thunder-team.com/friend-finder/timeline.html#"><i class="ion-images"></i></a></li>
                        <li><a href="http://thunder-team.com/friend-finder/timeline.html#"><i class="ion-ios-videocam"></i></a></li>
                        <li><a href="http://thunder-team.com/friend-finder/timeline.html#"><i class="ion-map"></i></a></li>
                      </ul>
                      <button class="btn btn-primary pull-right">Publish</button>
                    </div>
                  </div>
                </div>
              </div><!-- Post Create Box End-->

              <!-- Post Content
              ================================================= -->
              <div class="post-content">

                <!--Post Date-->
                <div class="post-date hidden-xs hidden-sm">
                  <h5>Sarah</h5>
                  <p class="text-grey">Sometimes ago</p>
                </div><!--Post Date End-->

                <img src="pictures/7.jpg" alt="post-image" class="img-responsive post-image">
                <div class="post-container">
                  <img src="./My Timeline _ This is My Coolest Profile_files/user-1.jpg" alt="user" class="profile-photo-md pull-left">
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">Sarah Cruiz</a> <span class="following">following</span></h5>
                      <p class="text-muted">Published a photo about 15 mins ago</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-comment">
                      <img src="./My Timeline _ This is My Coolest Profile_files/user-11.jpg" alt="" class="profile-photo-sm">
                      <p><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="./My Timeline _ This is My Coolest Profile_files/user-4.jpg" alt="" class="profile-photo-sm">
                      <p><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="./My Timeline _ This is My Coolest Profile_files/user-1.jpg" alt="" class="profile-photo-sm">
                      <input type="text" class="form-control" placeholder="Post a comment">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Post Content
              ================================================= -->
              <div class="post-content">

                <!--Post Date-->
                <div class="post-date hidden-xs hidden-sm">
                  <h5>Sarah</h5>
                  <p class="text-grey">10/22/2016</p>
                </div><!--Post Date End-->

                <img src="pictures/8.jpg" alt="post-image" class="img-responsive post-image">
                <div class="post-container">
                  <img src="./My Timeline _ This is My Coolest Profile_files/user-1.jpg" alt="user" class="profile-photo-md pull-left">
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">Sarah Cruiz</a> <span class="following">following</span></h5>
                      <p class="text-muted">Yesterday</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 49</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-comment">
                      <img src="./My Timeline _ This is My Coolest Profile_files/user-11.jpg" alt="" class="profile-photo-sm">
                      <p><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="./My Timeline _ This is My Coolest Profile_files/user-4.jpg" alt="" class="profile-photo-sm">
                      <p><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="./My Timeline _ This is My Coolest Profile_files/user-1.jpg" alt="" class="profile-photo-sm">
                      <input type="text" class="form-control" placeholder="Post a comment">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Post Content
              ================================================= -->
              <div class="post-content">

                <!--Post Date-->
                <div class="post-date hidden-xs hidden-sm">
                  <h5>Sarah</h5>
                  <p class="text-grey">10/21/2016</p>
                </div><!--Post Date End-->

                <div class="post-container">
                  <img src="./My Timeline _ This is My Coolest Profile_files/user-1.jpg" alt="user" class="profile-photo-md pull-left">
                  <div class="post-detail">
                    <div class="user-info">
                      <h5><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">Sarah Cruiz</a> <span class="following">following</span></h5>
                      <p class="text-muted">2 days ago</p>
                    </div>
                    <div class="reaction">
                      <a class="btn text-green"><i class="icon ion-thumbsup"></i> 49</a>
                      <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-comment">
                      <img src="./My Timeline _ This is My Coolest Profile_files/user-11.jpg" alt="" class="profile-photo-sm">
                      <p><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="./My Timeline _ This is My Coolest Profile_files/user-4.jpg" alt="" class="profile-photo-sm">
                      <p><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                    <div class="post-comment">
                      <img src="./My Timeline _ This is My Coolest Profile_files/user-1.jpg" alt="" class="profile-photo-sm">
                      <input type="text" class="form-control" placeholder="Post a comment">
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="container">
      	<div class="row">
          <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
              <a href="http://thunder-team.com/friend-finder/timeline.html"><img src="./My Timeline _ This is My Coolest Profile_files/logo-black.png" alt="" class="footer-logo"></a>
              <ul class="list-inline social-icons">
              	<li><a href="http://thunder-team.com/friend-finder/timeline.html#"><i class="icon ion-social-facebook"></i></a></li>
              	<li><a href="http://thunder-team.com/friend-finder/timeline.html#"><i class="icon ion-social-twitter"></i></a></li>
              	<li><a href="http://thunder-team.com/friend-finder/timeline.html#"><i class="icon ion-social-googleplus"></i></a></li>
              	<li><a href="http://thunder-team.com/friend-finder/timeline.html#"><i class="icon ion-social-pinterest"></i></a></li>
              	<li><a href="http://thunder-team.com/friend-finder/timeline.html#"><i class="icon ion-social-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>For individuals</h6>
              <ul class="footer-links">
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Signup</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">login</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Explore</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Finder app</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Features</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Language settings</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>For businesses</h6>
              <ul class="footer-links">
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Business signup</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Business login</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Benefits</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Resources</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Advertise</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Setup</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>About</h6>
              <ul class="footer-links">
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">About us</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Contact us</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Privacy Policy</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Terms</a></li>
                <li><a href="http://thunder-team.com/friend-finder/timeline.html">Help</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-3">
              <h6>Contact Us</h6>
                <ul class="contact">
                	<li><i class="icon ion-ios-telephone-outline"></i>+1 (234) 222 0754</li>
                	<li><i class="icon ion-ios-email-outline"></i>info@thunder-team.com</li>
                  <li><i class="icon ion-ios-location-outline"></i>228 Park Ave S NY, USA</li>
                </ul>
            </div>
          </div>
      	</div>
      </div>
      <div class="copyright">
        <p>Thunder Team © 2016. All rights reserved</p>
      </div>
		</footer>
    
    <!--preloader-->
    <div id="spinner-wrapper" style="display: none;">
      <div class="spinner"></div>
    </div>

    <!-- Scripts
    ================================================= -->
    <script src="./My Timeline _ This is My Coolest Profile_files/jquery-3.1.1.min.js.téléchargement"></script>
    <script src="./My Timeline _ This is My Coolest Profile_files/bootstrap.min.js.téléchargement"></script>
    <script src="./data/bootstrap-notify.min.js"></script>
    <script src="./data/jquery-ui.js"></script>    
    <script src="./My Timeline _ This is My Coolest Profile_files/jquery.sticky-kit.min.js.téléchargement"></script>
    <script src="./My Timeline _ This is My Coolest Profile_files/jquery.scrollbar.min.js.téléchargement"></script>
    <script src="./My Timeline _ This is My Coolest Profile_files/script.js.téléchargement"></script>

  
<?php include '/data/message-modal.php'; ?>

</body></html>