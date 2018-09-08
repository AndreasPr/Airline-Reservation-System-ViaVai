<!DOCTYPE html>
<html>
<head>
	<title>About</title>


<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="CSS/member_club.css">


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<style>
.container_about
{
	position: absolute;
	left:20%;
	right: 20%;

}	
p
{
	font-family: Tahoma, Geneva, sans-serif;
}
hr
{
	display: block;
    height: 4px;
    border: 0;
	background-color: rgb(0, 64, 255);
}
#gray_shade
{
	position: absolute;
	width: 100%;
	height: 62%;
	top: 200%;

}
#team_card
{
	position: absolute;
	top:205%;
	left: 20%;
}

#media_card
{
	position: absolute;
	top:205%;
	left: 60%;
}
#blog_card
{
	position: absolute;
	top:205%;
	left: 70%;
}


.social:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 .social {
     -webkit-transform: scale(0.8);
     /* Browser Variations: */
     
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }

/*
    Multicoloured Hover Variations
*/
 
 #social-fb:hover {
     color: #3B5998;
 }
 #social-tw:hover {
     color: #4099FF;
 }
 #social-gp:hover {
     color: #d34836;
 }
 #social-em:hover {
     color: #f39c12;
 }
 .nav-item .container
 {
    position: relative;
    left: 300%;
 }

</style>

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">

<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="homepage.php">
    <img src="images/v_favicon.png" width="30" height="30" class="d-inline-block align-top" alt="ViaVai"/>
    ViaVai
  </a>
</nav>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Book a Ticket <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="destinations.php">Discover Routes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="join_our_member_club_login.php">Sign in</a>
      </li>
      <li class="nav-item">

		<div class="container">
        	<div class="text-center center-block">
                <a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="https://www.google.com/gmail"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
			</div>
		</div>

      </li>
    </ul>
  </div>
</nav>


<img src="images/about.jpg" id = "about_eikona" alt="about_picture" width="100%" height="60%" />
<br><br>
<div class = "container_about">
<h2>Discover ViaVai</h2>
<br>
<p>ViaVai is a leading global travel search site, a place where people are inspired to plan and book direct from millions of travel options at the best prices.</p>

<p>We are unbiased and free, which means that the 60 million people who use us every month can trust our comprehensive range of flight options.</p>
<p>
Our secret is in our unique proprietary technology that connects people directly to everything the travel industry has to offer. We also power travel search for over 1200 partners through our ViaVai for Business products.</p>

<hr>
<h3><i>We are a high-growth business with a simple aim: to inspire travellers around the world and make travel search as easy as possible through our world-class technology.</i></h3>
<hr>

<p>We're global but local and our products are available in over 30 languages and 70 currencies.</p>

<p>Founded in 2003, we employ over 900 staff, with offices in Athens, Barcelona, Beijing, Budapest, Edinburgh, Glasgow, London, Miami, Shenzhen, Singapore and Sofia. ViaVai is part of the Ctrip group.</p>

<p>ViaVai is always free for travellers and we never charge travellers commission. We work with our airline and online travel agent partners in a number of ways: some partners agree to give ViaVai a commission for every booking made through us or for every time travellers visit a partners website. Other partners advertise on the ViaVai website and app. We always make sure any adverts are labelled or separate from any search results so users know exactly what is what.</p>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<img src="images/gray_shade.jpg" id = "gray_shade" alt = "Grey Shade"/>


<div class="card" style="width: 18rem; height: 22rem;" id = "team_card">
  <img class="card-img-top" src="images/our_team.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">ViaVai employs over 1000 people in the world.Find out more about the team who lead them.</p>
    <a href="collaborate.html" class="btn btn-primary" style = "display: flex; align-items: center; justify-content: center;">Team</a>
  </div>
</div>



<div class="card" style="width: 18rem; height: 22rem;" id = "media_card">
  <img class="card-img-top" src="images/media_pic.jpg" alt="Card image cap" width="286px" height="205px">
  <div class="card-body">
    <p class="card-text">Media enquiry? Get in contact with us.</p>
    <a href="member_club.php" class="btn btn-primary" style = "display: flex; align-items: center; justify-content: center;">Media</a>
  </div>
</div>




<footer id="myFooter">
        <div class="container">
            <div class="row">

                <div class="col-sm-3">
                    <h5>Explore!</h5>
                        <ul>
                            <li><a href="destinations.php">Destinations</a></li>
                            <li><a href="airlines.php">Airlines</a></li>
                            <li><a href="offers.php">Offers</a></li>
                            <li><a href="trips_and_more.php">Trips & More</a></li>
                        </ul>
                </div>


                <div class="col-sm-3">
                    <h5>Join Us</h5>
                        <ul>
                            <li><a href="collaborate.php">to Collaborate</a></li>
                            <li><a href="member_club.php">ViaVai Member Club</a></li>
                            <li><a href="join_our_member_club_login.php">Join our Member Club</a></li>
                            <li><a href="events.php">ViaVai Events</a></li>
                        </ul>
                </div>


                <div class="col-sm-3">
                        <h5>Learn more about us!</h5>
                        <ul>
                            <li><a href="about.php">About ViaVai</a></li>
                            <li><a href="terms.php">Terms of Use & Conditions</a></li>
                            <li><a href="policy.php">Privacy Policy</a></li>
                          <li><a href="cookies.php">Cookies Policy</a></li>  
                        </ul>
                </div>


                <div class="col-sm-3">
                        <h5>Feel free to</h5>
                        <ul>
                            <li><a href="contact.php">Contact us</a></li>
                            <li><a href="help.php">Ask for Help</a></li>
                            <li><a href="Experience/experience.php">Share your experience!</a></li>
                            <li><a href="5_stars_system/index_new.php">Reviews</a></li>
                        </ul>
                  </div>


                  <div class="col-sm-3">
                       <h5></h5>
                  </div>
            </div>
<iframe id="map-container" src="http://maps.google.com/maps?q=35.856737, 10.606619&z=15&output=embed" width="360" height="270" frameborder="0" style="border:0"></iframe>

        </div>

        <div class="social-networks">
              <a href="https://twitter.com/" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://plus.google.com" class="google"><i class="fa fa-google-plus"></i></a>
        </div>

        <div class="footer-copyright">
            <p>© 2018 Copyright Text </p>
        </div>

        
    </footer>

</body>
</html>