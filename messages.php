<?php  require_once("data/session.php"); 
require_once("/data/db_connection.php"); 
?>

<?php




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
		<link rel="stylesheet" href="./data/minimalist-notify.css"> 
    <link rel="stylesheet" href="./data/animate.css">  
    <link rel="stylesheet" href="./data/autocomplete.css">          
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

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3" style="position:static;">
            <div class="profile-card">
            	<img src="pictures/u2.jpg" alt="user" class="profile-photo">
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

           
						<input type="hidden" value="<?php echo $_GET["id"]; ?>" id="id" name="id"><!--current user id -->

            <!-- Friend List
            ================================================= -->
            <div class="friend-list">
            	<div id="friends" class="row">



 
	<!-- messages block3
          ================================================= -->
<div class="chat-room">
              <div class="row">
                <div style="padding:20px;">

                  <!--Chat Messages in Right-->
                  <div><div><div>
                    <div class="tab-pane active">
                      <div class="chat-body">
                      	<ul class="chat-message">

<?php
//2-assemble a mysql query
$userID=$_GET["id"];
$query="SELECT * FROM messages ";
$query.="WHERE receiver={$userID} ORDER BY msg_date DESC";
$result=mysqli_query($connection,$query);
//test if there is a query 
if(!$result){
	//die("query error");
	echo("query error".$query);
}


$displayString="";
while($row=mysqli_fetch_assoc($result)){
$friendID=$row["sender"];
$query2="SELECT * FROM users ";
$query2.="WHERE user_id={$friendID}";
$result2=mysqli_query($connection,$query2);

$row2=mysqli_fetch_assoc($result2);


 $displayString.='<li class="left">';
 $displayString.='<img src="pictures/';
 $displayString.=$row2["user_image"];
 $displayString.='" class="profile-photo-sm pull-left">
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>';
                                $displayString.=$row2["user_name"];
                                $displayString.='</h5>
                              	<small class="text-muted">';
                                 $displayString.=$row["msg_date"];
                                  $displayString.='</small>
                              </div>
                              <h5>';
                               $displayString.=$row["msg_sub"];
                               $displayString.='</h5>
                              <p>';
                              $displayString.= $row["msg_topic"];
                               $displayString.='</p>
                            </div>
                      		</li>';

}
echo($displayString);

?>


                    
                      	</ul>
                      </div>
                    </div>
                    
                    
                    
                    
                    
                  </div></div></div><!--Chat Messages in Right End-->

                  
                </div>
              </div>
            </div>
                      
	<!-- messages block3 end
          ================================================= -->

            	</div>
            </div>
          </div>



    			<!-- Newsfeed Common Side Bar Right
          ================================================= -->
    			<div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Requests</h4>
<?php

$userID=$_GET["id"];
$query="SELECT * FROM friend_request ";
$query.="WHERE user_id={$userID}";
$result=mysqli_query($connection,$query);
//test if there is a query 
if(!$result){
	//die("query error");
	echo("query error".$query);
}


$displayString="";
while($row=mysqli_fetch_assoc($result)){
$senderID=$row["sender_id"];
$query2="SELECT * FROM users ";
$query2.="WHERE user_id={$senderID}";
$result2=mysqli_query($connection,$query2);

$row2=mysqli_fetch_assoc($result2);


$displayString.='<div class="follow-user">';
$displayString.='<img src="/social-network/pictures/'.$row2["user_image"].'" class="profile-photo-sm pull-left">';
$displayString.= '<div>';
$displayString.='<h5><a href="/social-network/timeline.php?id='.$row2["user_id"].'">'.$row2["user_name"].'</a></h5>';
$displayString.='<button class="btn btn-success btn-xs accept-button" style="margin-right:3px" userId="'.$row2["user_id"].'" requestId="'.$row["id"].'">Accept</button>';
$displayString.='<button class="btn btn-danger btn-xs refuse-button" requestId="'.$row["id"].'">Refuse</button>';
$displayString.='</div>';
$displayString.='</div>';
} 
echo($displayString); 
?>
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
    <script src="./data/bootstrap-notify.min.js"></script>
    <script src="./data/jquery-ui.js"></script>    
    <script src="./Friend List _ Your Friend List_files/jquery.sticky-kit.min.js.téléchargement"></script>
    <script src="./Friend List _ Your Friend List_files/jquery.scrollbar.min.js.téléchargement"></script>
    <script src="./Friend List _ Your Friend List_files/script.js.téléchargement"></script>
    

</body></html>
<?php
//5-close db connection
mysqli_close($connection);
?>