<!DOCTYPE html>
<html>
<head>
	<title>Airlines</title>

<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Airlines</title>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="assets/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="assets/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="assets/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css"/>

		<!--responsive.css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />

<style>
	
/*-------------------------------------
        8. Packages 
--------------------------------------*/
.packages{
    padding:30px 0 90px;
}
.packages-content{
    margin-top:65px;
}
/*single-package-item */
.single-package-item{
    margin-bottom: 30px;
    padding-bottom: 20px;
    box-shadow: 0 0 20px rgba(0,0,0,.1);
    -webkit-transition: .5s; 
    -moz-transition:.5s; 
    -ms-transition:.5s; 
    -o-transition:.5s;
    transition: .5s;
}
.single-package-item-txt{
    padding: 0 25px;
}
.single-package-item img {
    width: 100%;
}
.single-package-item h3{
    position: relative;
    font-size: 20px;
    color: #565a5c;
    font-weight:500;
    font-family: 'Poppins', sans-serif;
    padding: 20px 0;
}
.single-package-item h3:after{
    position: absolute;
    content: " ";
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background: #ebebeb;
}
.packages-para{
    padding:17px 0 0;
    text-transform: capitalize;
}
.packages-para p{
    font-size: 14px;
    color: #aaa;
    font-family: 'Poppins', sans-serif;
    margin-bottom:15px;
}
.packages-para p span{
    display: inline-block;
    width: 150px;
}
.packages-review p i{
    color: #ffdf00;
    font-size: 16px;
}
.packages-review span{
    margin-left: 20px;
    font-size: 14px;
    color: #aaa;
    font-family: 'Poppins', sans-serif;
    text-transform: capitalize;
}
.about-view.packages-btn{
    width: 110px;
    height: 35px;
    font-size: 14px;
    color: #fff;
    text-transform: capitalize;
    -webkit-transition: .5s; 
    -moz-transition:.5s; 
    -ms-transition:.5s; 
    -o-transition:.5s;
    transition: .5s;

}
.about-view.packages-btn:hover{
    box-shadow: 0 5px 20px rgba(14,15,18,.3);
}
.single-package-item:hover{
    box-shadow: 0 0 20px rgba(0,0,0,.2);
}
/*single-package-item */

/*-------------------------------------
        9. Testemonial 
--------------------------------------*/

.testemonial{
    position:relative;
    background: #f9f9f9;
    padding:120px 0;
}

/*testemonial-carousel*/
.home1-testm-single {
    max-width: 345px;
    background: #fff;
    padding: 50px 0;
    box-shadow: 0 0 20px rgba(0,0,0,.1);
    -webkit-transition: .5s; 
    -moz-transition:.5s; 
    -ms-transition:.5s; 
    -o-transition:.5s;
    transition: .5s;
}
.home1-testm-single:hover {
    box-shadow: 0 0 30px rgba(0,0,0,.3);
}
.home1-testm.item {
    padding-top: 74px;
    padding-bottom: 30px;
}

/*.home1-testm-img*/
.testemonial .owl-carousel .owl-item img {
    display: inline-block;
    width:80px;
    height: 80px;
    line-height: 80px;
    border-radius: 50%;
}/*.home1-testm-img*/

/*owl-carousel*/
.testemonial .owl-carousel .owl-stage-outer {
    position: relative;
    overflow: hidden;
    padding: 0 19px;
}
.testemonial .owl-theme .owl-nav.disabled+.owl-dots {
    margin-top: 20px;
}
.testemonial .owl-theme .owl-dots .owl-dot span {
    width: 15px;
    height: 15px;
    margin: 5px 3px;
    border-radius:50%;
    background: #aaa; 
}
.testemonial .owl-theme .owl-dots .owl-dot.active span{
    background: #00d8ff;
}/*owl-carousel*/

/*home1-testm-txt*/
.home1-testm-txt {
    padding-top: 27px;
}
.home1-testm-txt p{
    color: #aaa;
    font-size: 16px;
    font-family: 'Poppins', sans-serif;
    max-width: 284px;
    margin: 0 auto;
    padding: 20px 0;
}
.home1-testm-txt h3 a{
    display: block;
    color: #00d8ff;
    font-size: 16px;
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    text-transform: capitalize;
}
.home1-testm-txt h4{
    color: #aaa;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
    padding: 15px 0 0px;
}
.home1-testm-txt span {
    color: #ddd;
    font-size: 18px;
}/*home1-testm-txt*/

/*testemonial-carousel*/

.about-btn {
    margin-top: 39px;
    letter-spacing: 1.2px;
     -webkit-transition: 0.5s ease-in-out;
    -moz-transition: 0.5s ease-in-out;
    -ms-transition: 0.5s ease-in-out;
    -o-transition: 0.5s ease-in-out;
    transition: 0.5s ease-in-out;
}
.about-view {
	display: flex;
    justify-content: center;
    align-items: center;
    background: #00d8ff;
    border: 1px solid #00d8ff;
    width: 200px;
    height: 60px;
    white-space: nowrap;
    color: #fff;
    font-size:16px;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    border-radius: 5px;
    box-shadow: 0 5px 20px rgba(14,15,18,.2);
    -webkit-transition: 0.5s ease-in-out;
    -moz-transition: 0.5s ease-in-out;
    -ms-transition: 0.5s ease-in-out;
    -o-transition: 0.5s ease-in-out;
    transition: 0.5s ease-in-out;
}
.about-btn:hover .about-view{
    color: #fff;
    background: #00d8d5;
    box-shadow: 0 5px 20px rgba(14,15,18,.7);
	border: 1px solid #00d8d5;
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


.navbar-brand {
  padding: 0px;
}
.navbar-brand>img {
  height: 100%;
  padding: 9px;
  margin-top: 14%;
  width: auto;
}
.navbar-brand>span
{
	position: absolute;
	left: 70%;
	top: 49%;
}
#navbarSupportedContent
{
	margin-left: 4%;
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
 #navbarSupportedContent .container
 {
 	position: absolute;
 	left: 45%;
    
 }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="homepage.php">
    <img src="images/v_favicon.png" width="30" height="30" id="v_favicon" class="d-inline-block align-top" alt="ViaVai"/>
    <span>ViaVai</span>
  </a>
</nav>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php">Book a Ticket <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="destinations.php">Discover Routes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="join_our_member_club_login.php">Sign in</a>
      </li>
	</ul>
    	<div class="container">
          	<div class="text-center center-block">
                <a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
              <a href="https://twitter.com"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
              <a href="https://plus.google.com"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
              <a href="https://www.google.com/gmail"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
      		</div>
    	</div>
  </div>
</nav>

		<!--packages start-->
		<section id="pack" class="packages">
			<div class="container">
				<div class="gallary-header text-center">
					<h2>
						Airlines
					</h2>
					<p>
						Perfect Holidays  
					</p>
				</div><!--/.gallery-header-->
				<div class="packages-content">
					<div class="row">

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="images/american-airlines-logo.png" alt="package-place">
								<div class="single-package-item-txt">
									<h3>American Airlines </h3>
									<div class="packages-para">
										<p>
										American Airlines, Inc. (AA) is the world's largest airline when measured by fleet size, scheduled passengers carried, scheduled passenger-kilometers flown, and number of destinations served.
										</p>
										
									</div><!--/.packages-para-->
								
									<div class="about-btn">
                                        <a style="text-decoration: none;" href="https://www.aa.com/i18n/index.jsp?locale=en_GR">
										<button  class="about-view packages-btn">
											Learn more
										</button>
                                        </a>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="images/jetblue-airways-logo.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>JetBlue</h3>
									<div class="packages-para">
										<p>
											JetBlue Airways Corporation stylized as jetBlue, is an American low cost airline headquartered in New York City. A major air carrier and the sixth-largest airline in the United States. 
										</p>
									
									</div><!--/.packages-para-->
									<div class="about-btn">
                                        <a style="text-decoration: none;" href="https://www.jetblue.com/">
										<button  class="about-view packages-btn">
											Learn more
										</button>
                                        </a>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="images/delta-air-lines-logo.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Delta Air Lines</h3>
									<div class="packages-para">
										<p>The Delta Air Lines operates over 5,400 flights daily and serves an extensive domestic and international network that includes 319 destinations in 54 countries on six continents.
										</p>
										
									</div><!--/.packages-para-->
									<div class="about-btn">
                                        <a style="text-decoration: none;" href="https://www.delta.com/">
										<button  class="about-view packages-btn">
											Learn more
										</button>
                                        </a>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="images/british-airways-logo.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>British Airways</h3>
									<div class="packages-para">
										<p>
										British Airways (BA) is the flag carrier and the largest airline in the United Kingdom based on fleet size, or the second largest, behind easyJet, when measured by passengers carried
										</p>
										
									</div><!--/.packages-para-->
									
									<div class="about-btn">
                                        <a style="text-decoration: none;" href="https://www.britishairways.com/travel/home/public/en_us">
										<button  class="about-view packages-btn">
											Learn more
										</button>
                                        </a>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="images/alaska-airlines-logo.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Alaska Airlines </h3>
									<div class="packages-para">
										<p>
											Alaska Airlines is an American airline headquartered in the Seattle metropolitan area of the state of Washington. The company was founded in 1932 offering flights from Anchorage, Alaska.
										</p>
									
									</div><!--/.packages-para-->
								
									<div class="about-btn">
                                        <a style="text-decoration: none;" href="https://www.alaskaair.com/">
										<button  class="about-view packages-btn">
											Learn more
										</button>
                                        </a>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->
						
						<div class="col-md-4 col-sm-6">
							<div class="single-package-item">
								<img src="images/air-canada-logo.jpg" alt="package-place">
								<div class="single-package-item-txt">
									<h3>Air Canada</h3>
									<div class="packages-para">
										<p>
											Air Canada is the largest airline of Canada by fleet size and passengers carried. The airline provides scheduled and charter air transport for passengers and cargo to 182 destinations worldwide.
										</p>
										
									</div><!--/.packages-para-->
								
									<div class="about-btn">
                                        <a style="text-decoration: none;" href="https://www.aircanada.com/ca/en/aco/home.html">
										<button  class="about-view packages-btn">
											Learn more
										</button>
                                        </a>
									</div><!--/.about-btn-->
								</div><!--/.single-package-item-txt-->
							</div><!--/.single-package-item-->

						</div><!--/.col-->

					</div><!--/.row-->
				</div><!--/.packages-content-->
			</div><!--/.container-->

		</section><!--/.packages-->
		<!--packages end-->

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
		<script src="assets/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="assets/js/bootstrap.min.js"></script>

		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="assets/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="assets/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="assets/js/custom.js"></script>

</body>
</html>