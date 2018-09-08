<!DOCTYPE html>
<html>
<head>
	<title>Destination Belgium</title>

 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="circle.css">

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

.clearfix:before,.clearfix:after {content: " "; display: table;}
.clearfix:after {clear: both;}
.clearfix {*zoom: 1;}
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

<div class="box">
<img src="images/destination_belgium.jpg" id="events" alt="Events" width="100%"/>
 <div class="text-block">
	<h1>Belgium</h1>
 </div>
  <div class="shade"></div>
</div>
<br>
<br>
<br>


<h4 style="margin-left: 40%;">Popular hotels in BELGIUM</h4>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
          <img class="card-img-top" src="images/hotel_belgium_1_hotelMartinsPatershof.jpg" alt="hotel1_belgium">
        <h5 class="card-title">Hotel Martin's Patershof</h5>
        <p class="card-text" style="color: grey;">Hotel class: 4</p>
        <div class="row">
          <div class="col-sm-6">
            <button type="button" class="btn btn-light">Luxury</button>
          </div>
          <div class="col-sm-6">
            <button type="button" class="btn btn-light">Nightlife</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
          <img class="card-img-top" src="images/hotel_belgium2.jpg" alt="hotel2_belgium">
        <h5 class="card-title">Special treatment</h5>
        <p class="card-text" style="color: grey;">Hotel class: 4</p>
        <div class="row">
          <div class="col-sm-6">
            <button type="button" class="btn btn-light">Luxury</button>
          </div>
          <div class="col-sm-6">
            <button type="button" class="btn btn-light">Nightlife</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
          <img class="card-img-top" src="images/hotel_belgium3.jpg" alt="hotel3_belgium">
        <h5 class="card-title">Unique accomodation</h5>
        <p class="card-text" style="color: grey;">Hotel class: 4</p>
        <div class="row">
          <div class="col-sm-6">
            <button type="button" class="btn btn-light">Luxury</button>
          </div>
          <div class="col-sm-6">
            <button type="button" class="btn btn-light">Nightlife</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
          <img class="card-img-top" src="images/hotel_belgium4.jpg" alt="hotel4_belgium">
        <h5 class="card-title">Tastes like...home!</h5>
        <p class="card-text" style="color: grey;">Hotel class: 4</p>
        <div class="row">
          <div class="col-sm-6">
            <button type="button" class="btn btn-light">Luxury</button>
          </div>
          <div class="col-sm-6">
            <button type="button" class="btn btn-light">Nightlife</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<br><br><br>


<h4 style="margin-left: 40%;">Popular things to do in Belgium</h4>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
          <img class="card-img-top" src="images/things_belgium_1.jpg" alt="belgium_activities">
        <h5 class="card-title">Try all types of chocolate!</h5>
        <p class="card-text" style="color: grey;">Go for it!</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
          <img class="card-img-top" src="images/things_belgium_2.jpg" alt="belgium_activities">
        <h5 class="card-title">See the sights!</h5>
        <p class="card-text" style="color: grey;">Go gor it!</p>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
         <img class="card-img-top" src="images/things_belgium_3.jpg" alt="belgium_activities">
        <h5 class="card-title">Try the gondola!</h5>
        <p class="card-text" style="color: grey;">Go for It!</p>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
         <img class="card-img-top" src="images/things_belgium_4.jpg" alt="belgium_activities">
        <h5 class="card-title">Take a wonderful walk!</h5>
        <p class="card-text" style="color: grey;">Go for It!</p>
      </div>
    </div>
  </div>


<br><br><br>


<h4 style="margin-left: 47.5%;">Photos</h4>
<br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 80%; margin-left: 10%;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/other_belgium_1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/other_belgium_2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/other_belgium_3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<br><br><br>



<h4 style="margin-left: 40%;">Popular restaurants in Belgium</h4>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
          <img class="card-img-top" src="images/restaurant_belgium_1_thonHotels.jpg" alt="restaurants">
        <h5 class="card-title">Thon Hotels</h5>
        
       
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
<img class="card-img-top" src="images/restaurant_belgium_2_auberge_napoleon.jpg" alt="restaurants">        <h5 class="card-title">Auberge Napoleon </h5>
       
      </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
<img class="card-img-top" src="images/restaurant_belgium_3.webp" alt="restaurants">        <h5 class="card-title"></h5>
      
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
<img class="card-img-top" src="images/restaurant_belgium_4.jpg" alt="restaurants">        <h5 class="card-title"></h5>
       
      </div>
    </div>
  </div>
</div>


<br><br><br>


<h4 style="margin-left: 40%;">What travelers are saying</h4>
<br>
<div class="row" style="margin-left: 15%;">
  <div class="col-sm-2">
    <div class="page">
     <div class="clearfix">
        <div class="c100 p25">
            <span>25%</span>
            <div class="slice">
                <div class="bar"></div>
                <div class="fill"></div>
            </div>
        </div>
        <p>Foodies</p>
     </div>
    </div>
  </div>
  <div class="col-sm-2">
   <div class="page">
     <div class="clearfix">
        <div class="c100 p30">
            <span>30%</span>
            <div class="slice">
                <div class="bar"></div>
                <div class="fill"></div>
            </div>
        </div>
        <p>Nightlife Lovers</p>
     </div>
   </div>
  </div>
    <div class="col-sm-2">
   <div class="page">
     <div class="clearfix">
        <div class="c100 p45">
            <span>45%</span>
            <div class="slice">
                <div class="bar"></div>
                <div class="fill"></div>
            </div>
        </div>
        <p>Adventure Travellers</p>
     </div>
   </div>
  </div>
    <div class="col-sm-2">
   <div class="page">
     <div class="clearfix">
        <div class="c100 p75">
            <span>75%</span>
            <div class="slice">
                <div class="bar"></div>
                <div class="fill"></div>
            </div>
        </div>
        <p>Design Lovers</p>
     </div>
   </div>
  </div>
      <div class="col-sm-2">
   <div class="page">
     <div class="clearfix">
        <div class="c100 p15">
            <span>15%</span>
            <div class="slice">
                <div class="bar"></div>
                <div class="fill"></div>
            </div>
        </div>
        <p>History Buffs</p>
     </div>
   </div>
  </div>
</div>


<br><br><br>


<div class="card">
  <div class="card-header">
    <font font size="5">Comment</font>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <footer class="blockquote-footer">May 23, 2018 at 07:00 PM - 08:15 PM</footer>
      <p>What an amazing city! I feel like my life is more complete after visiting this famous big city. With more high rises than I imagined and pretty billboards, I am just in awe of how many people are here!!! In the early mornings, everyone seems to be in a rush on the streets and subways. Get a weekly subway pass if you plan to be here for 3 days or more. It is worth it. I can get to all the touristy places without a car, using the subway and walking!!!</p>
      <p style="font-size: 80%; color:#0080ff; ">&#64; Recommended for:Business TravellersFamily TravellersFoodiesHistory Buffs</p>
    </blockquote>
  </div>
</div>
<br>
<br>
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