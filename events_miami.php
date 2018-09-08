<!DOCTYPE html>
<html>
<head>
	<title>Events Miami</title>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

	<style>
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

#icons {
    text-align:center;
   
}

#icons .fa {
    color: #66a3ff; /*white*/
  
    margin: 5px 15px;
    padding-left: 210%;
    position:relative;
    bottom:0;
    transition:all 0.2s ease-in-out;
}

#icons .twitter:hover {
    color:#6cadde;
    bottom:5px;
}

#icons .facebook:hover {
    color:#3b5998;
    bottom:5px;
}

#icons .google:hover {
    color:#ea4335;
    bottom:5px;
}

#icons .instagram:hover {
    color:#cc0066;  
     /*517fa6*/
    bottom:5px;
}


.col-md-12{
  margin-left: 100%;
  height: 20%;

}
.nav-item{
  margin-top: 1.5%; /*1*/ 

}

/*#navbarSupportedContent{
    background-color:#ffeee6;
    margin-right: 0;
}*/

#myFooter {
    background-color: #182c39;
    color: white;
    padding-top: 20px;
    width: 100%;
    margin-top: 12%;
}

#map-container {
    height: 240px;
    width: 100%;
    margin-top: 30px;
    margin-bottom: 10px;
}

#myFooter .row {
    margin: 0 85px;
}

#myFooter .footer-copyright {
    background-color: #10222e;
    padding-top: 3px;
    padding-bottom: 3px;
    text-align: center;
}

#myFooter .footer-copyright p {
    margin: 10px;
    color: #ccc;
}

#myFooter .container {
    width: auto;
}

#myFooter ul {
    list-style-type: none;
    padding-left: 0;
    line-height: 1.7;
}

#myFooter h5 {
    font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter a {
    color: #d2d1d1;
    text-decoration: none;
    flex: 0 0 auto;
   -webkit-flex: 0 0 auto;
}

#myFooter a:hover,
#myFooter a:focus {
    text-decoration: none;
    color: white;
}

#myFooter .social-networks {
    text-align: center;
    padding-top: 30px;
    padding-bottom: 38px;
}

#myFooter .fa {
    font-size: 30px;
    margin-right: 15px;
    margin-left: 20px;
    background-color: white;
    color: #182c39;
    border-radius: 51%;
    padding: 10px;
    height: 50px;
    width: 50px;
    text-align: center;
    line-height: 31px;
    text-decoration: none;
    transition: color 0.2s;
}

#myFooter .fa-facebook:hover {
    color: #2b55ff;
}

#myFooter .fa-facebook:focus {
    color: #2b55ff;
}

#myFooter .fa-google-plus:hover {
    color: red;
}

#myFooter .fa-google-plus:focus {
    color: red;
}

#myFooter .fa-twitter:hover {
    color: #00aced;
}

#myFooter .fa-twitter:focus {
    color: #00aced;
}


#myFooter .fa-instagram:hover {
    color: fuchsia;
}

#myFooter .fa-instagram:focus {
    color: fuchsia;
}


@media screen and (max-width: 767px) {
    #myFooter {
        text-align: center;
    }
    #myFooter .row {
        margin: 0;
    }
}

.box
{
	position: relative;
	margin-top: 5%;
	height: 50%;
}
.text-block
{
	position: absolute;
    bottom: 70%;
    right: 36%;
    background-color: black;
    color: white;
    padding-left: 20px;
    padding-right: 20px;
}


.card-header
{
	color: #0080ff;
	font-family: Georgia, serif;

}
.card
{
	margin-left: 20%;
	margin-right: 20%;
}

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="homepage.php">
    <img src="images/v_favicon.png" width="30" height="30" class="d-inline-block align-top" alt="ViaVai">
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
        <a class="nav-link" href="join_our_member_club_login.php">Sign-in</a>
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

<div class="box">
<img src="images/miami_next_step.jpg" id="events" alt="Events" width="100%"/>
 <div class="text-block">
	<h1>Community Events</h1>
 </div>
  <div class="shade"></div>
</div>
<br>
<br>



<div class="card">
  <div class="card-header">
    <font font size="5">MI Bay Area: Escape to Nola Happy Hour</font>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    	<footer class="blockquote-footer">Nov 27, 2017 at 06:15 PM - 08:00 PM</footer>
      <p>Come join the Bay Area travel community for happy hour bites, Nola-style, in downtown Palo Alto!</p>
      <p style="font-size: 80%; color:#0080ff; ">&#64; Nola</p>
      <footer class="blockquote-footer"><cite title="Source Title">535 Ramona St, Palo Alto, CA 94301
</cite></footer>
    </blockquote>
  </div>
</div>
<br>
<br>

<div class="card">
  <div class="card-header">
    <font font size="5">Miami: Future Female Leaders Networking Event</font>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    	<footer class="blockquote-footer">Nov 15, 2017 at 06:30 PM - 08:00 PM</footer>
      <p>ATTENTION: FUTURE FEMALE LEADERS OF THE WORLD TripMI and PINC International invite students holding a leadership position on campus to an exclusive free networking event with a female executive panel!</p>
      <p style="font-size: 80%; color:#0080ff; ">&#64; WeWork Park South</p>
      <footer class="blockquote-footer"><cite title="Source Title">401 Park Avenue South, Miami, USA
</cite></footer>
    </blockquote>
  </div>
</div>
<br>
<br>

<div class="card">
  <div class="card-header">
    <font font size="5">Miami: Win a West Coast Train Adventure</font>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    	<footer class="blockquote-footer">Oct 31, 2017 at 11:45 PM - 11:15 PM</footer>
      <p>Trip.com MI is giving away one of its most breathtaking prizes yet - an adventure on Amtrak’s Coast Starlight train from MI to Seattle. Considered one of the most scenic trips in North America, this stunning journey whisks through Santa Barbara, San Francisco, Sacramento and Portland. Mountain tops, lush forests, ocean views, sunsets, and sunrises await the lucky winner! </p>
      <p style="font-size: 80%; color:#0080ff; ">&#64; Trip by ViaVai MI</p>
      <footer class="blockquote-footer"><cite title="Source Title">Miami, MI
</cite></footer>
    </blockquote>
  </div>
</div>
<br>
<br>

<div class="card">
  <div class="card-header">
    <font font size="5">Miami: Haunted Hotel</font>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    	<footer class="blockquote-footer">Oct 30, 2017 at 08:00 PM - 09:15 PM</footer>
      <p>Prepare to be spooked Mischief Night at the haunted Gravesend Inn!</p>
      <p style="font-size: 80%; color:#0080ff; ">&#64; Voorhees Hall</p>
      <footer class="blockquote-footer"><cite title="Source Title">186 Jay St, Brooklyn, MI 11201
</cite></footer>
    </blockquote>
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


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>