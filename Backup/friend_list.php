<?php require_once("data/db_connection.php"); 
?>

<?php

//2-assemble a mysql query
$userID=$_GET["id"];
$query="SELECT FROM friend_list ";
$query.="WHERE id_user={$userID}";
$result=mysqli_query($connection,$query);
//test if there is a query 
if(!$result){
	//die("query error");
	echo("query error");
}


//5-close db connection
mysqli_close($connection);
?>

<!DOCTYPE html>
<!-- saved from url=(0059)http://thunder-team.com/friend-finder/newsfeed-friends.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......">
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page">
		<meta name="robots" content="index, follow">
		<title>Friend List | Your Friend List</title>

		<!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="./Friend List _ Your Friend List_files/bootstrap.min.css">
		<link rel="stylesheet" href="./Friend List _ Your Friend List_files/style.css">
		<link rel="stylesheet" href="./Friend List _ Your Friend List_files/ionicons.min.css">
    <link rel="stylesheet" href="./Friend List _ Your Friend List_files/font-awesome.min.css">
    <!--Google Webfont-->
		<link href="./Friend List _ Your Friend List_files/css" rel="stylesheet" type="text/css">
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="http://thunder-team.com/friend-finder/images/fav.png">
    <script src="./data/jquery-3.1.1.min.js"></script>
    <script src="./data/myJqueryFunctions.js"></script>
    
	</head>
  <body>

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
            <a class="navbar-brand" href="http://thunder-team.com/friend-finder/index.html"><img src="./Friend List _ Your Friend List_files/logo.png" alt="logo"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="http://thunder-team.com/friend-finder/index.html">Home</a></li>
              <li class="dropdown">
                <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="./Friend List _ Your Friend List_files/down-arrow.png" alt=""></span></a>
                  <ul class="dropdown-menu newsfeed-home">
                    <li><a href="http://thunder-team.com/friend-finder/newsfeed.html">Newsfeed</a></li>
                    <li><a href="http://thunder-team.com/friend-finder/newsfeed-people-nearby.html">Poeple Nearly</a></li>
                    <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">My friends</a></li>
                    <li><a href="http://thunder-team.com/friend-finder/newsfeed-messages.html">Chatroom</a></li>
                    <li><a href="http://thunder-team.com/friend-finder/newsfeed-images.html">Images</a></li>
                    <li><a href="http://thunder-team.com/friend-finder/newsfeed-videos.html">Videos</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="./Friend List _ Your Friend List_files/down-arrow.png" alt=""></span></a>
                <ul class="dropdown-menu login">
                  <li><a href="http://thunder-team.com/friend-finder/timeline.html">Timeline</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/timeline-about.html">Timeline About</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/timeline-album.html">Timeline Album</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/timeline-friends.html">Timeline Friends</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">All Pages <span><img src="./Friend List _ Your Friend List_files/down-arrow.png" alt=""></span></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="http://thunder-team.com/friend-finder/index.html">Landing Page</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/newsfeed.html">Newsfeed</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/newsfeed-people-nearby.html">Poeple Nearly</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">My friends</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/newsfeed-messages.html">Chatroom</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/newsfeed-images.html">Images</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/newsfeed-videos.html">Videos</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/timeline.html">Timeline</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/timeline-about.html">Timeline About</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/timeline-album.html">Timeline Album</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/timeline-friends.html">Timeline Friends</a></li>
                  <li><a href="http://thunder-team.com/friend-finder/contact.html">Contact Us</a></li>
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

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3" style="position:static;">
            <div class="profile-card">
            	<img src="./Friend List _ Your Friend List_files/user-1.jpg" alt="user" class="profile-photo">
            	<h5><a href="http://thunder-team.com/friend-finder/timeline.html" class="text-white">Sarah Cruiz</a></h5>
            	<a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="http://thunder-team.com/friend-finder/newsfeed.html">My Newsfeed</a></div></li>
              <li><i class="icon ion-ios-people"></i><div><a href="http://thunder-team.com/friend-finder/newsfeed-people-nearby.html">People Nearby</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Friends</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="http://thunder-team.com/friend-finder/newsfeed-messages.html">Messages</a></div></li>
              <li><i class="icon ion-images"></i><div><a href="http://thunder-team.com/friend-finder/newsfeed-images.html">Images</a></div></li>
              <li><i class="icon ion-ios-videocam"></i><div><a href="http://thunder-team.com/friend-finder/newsfeed-videos.html">Videos</a></div></li>
            </ul><!--news-feed links ends-->

          </div>
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <div class="create-post">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="./Friend List _ Your Friend List_files/user-1.jpg" alt="" class="profile-photo-md">
                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div>
            		<div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#"><i class="ion-compose"></i></a></li>
                      <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#"><i class="ion-images"></i></a></li>
                      <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#"><i class="ion-ios-videocam"></i></a></li>
                      <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#"><i class="ion-map"></i></a></li>
                    </ul>
                    <button class="btn btn-primary pull-right">Publish</button>
                  </div>
                </div>
            	</div>
            </div><!-- Post Create Box End -->
						<input type="hidden" value="<?php echo $_GET["id"]; ?>" id="id" name="id"><!--current user id -->

            <!-- Friend List
            ================================================= -->
            <div class="friend-list">
            	<div class="row">
            		<div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="./Friend List _ Your Friend List_files/1.jpg" alt="profile-cover" class="img-responsive cover">
                  	<div class="card-info">
                      <img src="./Friend List _ Your Friend List_files/user-3.jpg" alt="user" class="profile-photo-lg">
                      <div class="friend-info">
                        <button id="b" class="btn-primary pull-right request-button" userId="2">Send request</button>
                      	<h5><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">Sophia Lee</a></h5>
                      	<p>Student at Harvard</p>
                      </div>
                    </div>
                  </div>
                </div>
            		<div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="./Friend List _ Your Friend List_files/3.jpg" alt="profile-cover" class="img-responsive cover">
                  	<div class="card-info">
                      <img src="./Friend List _ Your Friend List_files/user-4.jpg" alt="user" class="profile-photo-lg">
                      <div class="friend-info">
                        <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">John Doe</a></h5>
                      	<p>Traveler</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="./Friend List _ Your Friend List_files/4.jpg" alt="profile-cover" class="img-responsive cover">
                  	<div class="card-info">
                      <img src="./Friend List _ Your Friend List_files/user-10.jpg" alt="user" class="profile-photo-lg">
                      <div class="friend-info">
                        <a href="http://thunder-team.com/friend-finder/timeline.html" class="pull-right text-green">My Friend</a>
                      	<h5><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="profile-link">Julia Cox</a></h5>
                      	<p>Art Designer</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="./Friend List _ Your Friend List_files/5.jpg" alt="profile-cover" class="img-responsive cover">
                  	<div class="card-info">
                      <img src="./Friend List _ Your Friend List_files/user-7.jpg" alt="user" class="profile-photo-lg">
                      <div class="friend-info">
                        <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="http://thunder-team.com/friend-finder/timelime.html" class="profile-link">Robert Cook</a></h5>
                      	<p>Photographer at Photography</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="./Friend List _ Your Friend List_files/6.jpg" alt="profile-cover" class="img-responsive cover">
                  	<div class="card-info">
                      <img src="./Friend List _ Your Friend List_files/user-8.jpg" alt="user" class="profile-photo-lg">
                      <div class="friend-info">
                        <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">Richard Bell</a></h5>
                      	<p>Graphic Designer at Envato</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="./Friend List _ Your Friend List_files/7.jpg" alt="profile-cover" class="img-responsive cover">
                  	<div class="card-info">
                      <img src="./Friend List _ Your Friend List_files/user-2.jpg" alt="user" class="profile-photo-lg">
                      <div class="friend-info">
                        <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">Linda Lohan</a></h5>
                      	<p>Software Engineer</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="./Friend List _ Your Friend List_files/8.jpg" alt="profile-cover" class="img-responsive cover">
                  	<div class="card-info">
                      <img src="./Friend List _ Your Friend List_files/user-9.jpg" alt="user" class="profile-photo-lg">
                      <div class="friend-info">
                        <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">Anna Young</a></h5>
                      	<p>Musician</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="./Friend List _ Your Friend List_files/9.jpg" alt="profile-cover" class="img-responsive cover">
                  	<div class="card-info">
                      <img src="./Friend List _ Your Friend List_files/user-6.jpg" alt="user" class="profile-photo-lg">
                      <div class="friend-info">
                        <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">James Carter</a></h5>
                      	<p>CEO at IT Farm</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <div class="friend-card">
                  	<img src="./Friend List _ Your Friend List_files/10.jpg" alt="profile-cover" class="img-responsive cover">
                  	<div class="card-info">
                      <img src="./Friend List _ Your Friend List_files/user-5.jpg" alt="user" class="profile-photo-lg">
                      <div class="friend-info">
                        <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="pull-right text-green">My Friend</a>
                      	<h5><a href="http://thunder-team.com/friend-finder/timeline.html" class="profile-link">Alexis Clark</a></h5>
                      	<p>Traveler</p>
                      </div>
                    </div>
                  </div>
                </div>
            	</div>
            </div>
          </div>

    			<!-- Newsfeed Common Side Bar Right
          ================================================= -->
    			<div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Requests</h4>
              <div class="follow-user">
                <img src="./Friend List _ Your Friend List_files/user-11.jpg" alt="" class="profile-photo-sm pull-left">
                <div>
                  <h5><a href="http://thunder-team.com/friend-finder/timeline.html">Diana Amber</a></h5>
                  <button id="b2" class="btn btn-success btn-xs accept-button" userId="2" requestId="2">Accept</button>
                  <button id="b3" class="btn btn-danger btn-xs refuse-button" requestId="2">Refuse</button>
                 
                </div>
              </div>
              <div class="follow-user">
                <img src="./Friend List _ Your Friend List_files/user-12.jpg" alt="" class="profile-photo-sm pull-left">
                <div>
                  <h5><a href="http://thunder-team.com/friend-finder/timeline.html">Cris Haris</a></h5>
                  <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="./Friend List _ Your Friend List_files/user-13.jpg" alt="" class="profile-photo-sm pull-left">
                <div>
                  <h5><a href="http://thunder-team.com/friend-finder/timeline.html">Brian Walton</a></h5>
                  <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="./Friend List _ Your Friend List_files/user-14.jpg" alt="" class="profile-photo-sm pull-left">
                <div>
                  <h5><a href="http://thunder-team.com/friend-finder/timeline.html">Olivia Steward</a></h5>
                  <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="./Friend List _ Your Friend List_files/user-15.jpg" alt="" class="profile-photo-sm pull-left">
                <div>
                  <h5><a href="http://thunder-team.com/friend-finder/timeline.html">Sophia Page</a></h5>
                  <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#" class="text-green">Add friend</a>
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
              <a href="http://thunder-team.com/friend-finder/newsfeed-friends.html"><img src="./Friend List _ Your Friend List_files/logo-black.png" alt="" class="footer-logo"></a>
              <ul class="list-inline social-icons">
              	<li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#"><i class="icon ion-social-facebook"></i></a></li>
              	<li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#"><i class="icon ion-social-twitter"></i></a></li>
              	<li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#"><i class="icon ion-social-googleplus"></i></a></li>
              	<li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#"><i class="icon ion-social-pinterest"></i></a></li>
              	<li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html#"><i class="icon ion-social-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>For individuals</h6>
              <ul class="footer-links">
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Signup</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">login</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Explore</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Finder app</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Features</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Language settings</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>For businesses</h6>
              <ul class="footer-links">
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Business signup</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Business login</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Benefits</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Resources</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Advertise</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Setup</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>About</h6>
              <ul class="footer-links">
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">About us</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Contact us</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Privacy Policy</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Terms</a></li>
                <li><a href="http://thunder-team.com/friend-finder/newsfeed-friends.html">Help</a></li>
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

    <script src="./Friend List _ Your Friend List_files/jquery-3.1.1.min.js.téléchargement"></script>
    <script src="./Friend List _ Your Friend List_files/bootstrap.min.js.téléchargement"></script>
    <script src="./Friend List _ Your Friend List_files/jquery.sticky-kit.min.js.téléchargement"></script>
    <script src="./Friend List _ Your Friend List_files/jquery.scrollbar.min.js.téléchargement"></script>
    <script src="./Friend List _ Your Friend List_files/script.js.téléchargement"></script>
    

</body></html>
<?php
//5-close db connection
mysqli_close($connection);
?>