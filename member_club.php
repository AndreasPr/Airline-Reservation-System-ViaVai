<!DOCTYPE html>
<html>
<head>
	<title>Member Page</title>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="CSS/member_club.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<style>
	body
	{
		background-image: url("images/gray_background.jpg");
	}
	#titlo_ViaVai
	{
		margin-left: 25%;
		margin-top: 5%;
	}
	#white_background
	{
		position: absolute;
		left: 25%;
		top: 30%;
		z-index:0;
	}
	#discount_pic

	{
		position: absolute;
		left: 28%;
		top: 50%;
		z-index:1;
	}
	#baggage_pic
	{
		position: absolute;
		z-index:1;
		left: 43%;
		top: 50%;
	}
	#companions
	{
		position: absolute;
		z-index:1;
		left: 59%;
		top: 50%;
	}
	#premium_pic
	{
		position: absolute;
		z-index:1;
		left: 28%;
		top: 90%;
	}
	#membership_pic
	{
		position: absolute;
		z-index:1;
		left: 43%;
		top: 90%;
	}
	#group_membership_pic
	{
		position: absolute;
		z-index:1;
		left: 59%;
		top: 90%;
	}
	.logia
	{
		font-size: 80%; 
	}
	#disc_logia
	{
		position: absolute;
		z-index:1;
		left: 31%;
		top: 67%;
	}
	#bagg_logia
	{
		position: absolute;
		z-index:1;
		left: 46%;
		top: 67%;

	}
	#com_logia
	{
		position: absolute;
		z-index:1;
		left: 61%;
		top: 67%;
	}
	#prem_logia
	{
		position: absolute;
		z-index:1;
		left: 31%;
		top: 108%;
	}
	#memb_logia
	{
		position: absolute;
		z-index:1;
		left: 43%;
		top: 108%;
	}
	#group_logia
	{
		position: absolute;
		z-index:1;
		left: 59%;
		top: 108%;
	}
	#epexigisi
	{
		position: absolute;
		top: 140%;
		left: 18%;
		right: 18%;
		object-fit: contain; 	
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



<h3 id = "titlo_ViaVai">ViaVai Member Club</h3>

<img src="images/discount_pic.svg" id = "discount_pic" alt = "Discount" width="10%" height="15%" />
		<div class = "logia" id = "disc_logia">
			<p>min. 10 EUR</p>
			<p>DISCOUNT</p>
			<p>on ticket fares</p>
		</div>

<img src="images/baggage_pic.svg" id="baggage_pic" alt="Baggage" width="10%" height="15%"/>
		<div class = "logia" id = "bagg_logia">
			<p>min. 5 EUR</p>
			<p>DISCOUNT</p>
			<p>on baggage <br>purchased online</p>
		</div>

<img src="images/membership_pic.png" id="companions" alt="Companions" width="10%" height="15%"/>
		<div class = "logia" id = "com_logia">
			<p>COMPANIONS</p>
			<p>DISCOUNT</p>
			<p>extend the benefits<br> to your travel companions</p>
		</div>

<img src="images/premium_pic.png" id="premium_pic" alt="Premium" width="10%" height="15%"/>
		<div class = "logia" id = "prem_logia">
			<p>PREMIUM</p>
			<p>OFFERS</p>
			<p>get access to<br> members-only deals</p>
		</div>

<img src="images/membership_pic.png" id="membership_pic" alt="Membership" width="10%" height="15%"/>
		<div class = "logia" id = "memb_logia">
			<p>STANDARD MEMBERSHIP</p>
			<p>MEMBER + 1 COMPANION</p>
			<p>29.99 EUR / year</p>
		</div>

<img src="images/membership_pic.png" id="group_membership_pic" alt="Group Membership" width="10%" height="15%" />
		<div class = "logia" id = "group_logia">
			<p>GROUP MEMBERSHIP</p>
			<p>MEMBER + UP TO 5 COMPANIONS</p>
			<p>59.99 EUR / year</p>
		</div>

<img src="images/white_background.png" id="white_background" alt="White Background" width="50%" height="100%" />





<div id="epexigisi">


<p>Get a Standard Membership if you usually travel solo or with one travel companion and opt for a Group Membership if you travel with more people!</p>
<br>
 

<p style="margin-left: 6%"><img src="text_bullet.png" width="2%" height="2%"/>
guaranteed minimum discount of €10 on each flight on all fares from €19.99, anytime during your membership</p>
<p style="margin-left: 6%"><img src="text_bullet.png" width="2%" height="2%"/>
 min. €5 discount on baggage purchased online</p>
<p style="margin-left: 6%"><img src="text_bullet.png" width="2%" height="2%"/>
 the discounts also apply to the reservation of the member’s travel companion (within the same booking as the member, maximum one more passenger per booking for a Standard Membership and up to 5 passengers for a Group Membership)</p>
<p style="margin-left: 6%"><img src="text_bullet.png" width="2%" height="2%"/>
 get informed about member-only promotional offers via email before others and get access to additional discounts after you subscribe to ViaVai Special Offers</p>

<br><br>
<h3 style="color: rgba(0, 0, 240, 0.8);">How does it work?</h3>



<p>An example of saving with a Standard Membership</p>
<br>
 

<p>Two passengers are travelling with checked-in bags on a return flight.</p>
<div style="border:1px; border-style:solid; border-color:rgb(0, 0, 204); padding: 1em; font-size: 80%; background-color: white;">
<p>Annual Viavai Discount Club Standard Membership Fee: €29.99</p>
<p>Saving on the ticket fares: 4 x €10 = €40 
Saving on bag fees: 4 x €5 = €20 
Total savings: €60</p>
</div>


<p>An example of saving with a Group Membership</p>
<br>
<br>

<p>A family of four is travelling with two checked-in bags on a return flight.</p>
<div style="border:1px; border-style:solid; border-color:rgb(0, 0, 204); padding: 1em; font-size: 80%; background-color: white;">
<p>Annual Viavai Discount Club Group Membership Fee: €59.99</p>
<p>Saving on the ticket fares: 8*x €10 = €80 
Saving on bag fees: 4*x €5 = €20
Total saving: €100</p>
</div>

<p>When you book a trip with a ViaVai Discount Club Memberships, just like in the examples above; you will have already saved more than the cost of the annual membership fee.</p>

<p>The more you travel, the more you save with ViaVai Discount Club!</p>

<br><br>
<h3 style="color: rgba(0, 0, 240, 0.8);">How to get a ViaVai Discount Club Membership?</h3>

<p>Just follow these 5 easy steps:</p>
<br>

<div style="border:1px; border-style:solid; border-color:rgb(0, 0, 204); padding: 1em; font-size: 80%; background-color: white;">
<p><img src="images/text_bullet.png" width="2%" height="2%"/> select the flights you wish to book</p>
<p><img src="images/text_bullet.png" width="2%" height="2%"/> click the “Purchase” button to add the annual ViaVai Discount Club membership fee to your booking</p>
<p><img src="images/text_bullet.png" width="2%" height="2%"/> complete the booking by filling out the contact details and completing the payment of the reservation and the membership fee - your ViaVai Discount Club  membership will be activated for one year calculated from the day of the purchase</p>
<p><img src="images/text_bullet.png" width="2%" height="2%"/> anytime you would like to book at discounted Club fares please log in to your profile with your email address and password</p>
<p><img src="images/text_bullet.png" width="2%" height="2%"/> after login you will be able to view your account information, like your recent bookings or the ViaVai Discount Club  membership expiration date</p>
</div>

<br><br>
<h4 style="color: rgba(0, 0, 240, 0.8);">Upgrade</h4>

<p>You can upgrade to a Group Membership if you are already a member at any time during the validity of your membership by paying the difference in the membership fees.</p>
<br>
<p>Membership upgrade does not extend the term of your membership.</p>

<p>Don’t forget to sign up for the ViaVai Special Offers on the homepage to receive information about special member promotional offers!</p>
<br>
<div style="border:1px; border-style:solid; border-color:rgb(0, 0, 204); padding: 1em; font-size: 80%; background-color: white;">
<p><img src="images/text_bullet.png" width="2%" height="2%"/> When booking your flight in a different currency, the amounts may vary due to the exchange rates’ fluctuation.</p>
<p><img src="images/text_bullet.png" width="2%" height="2%"/> The ViaVai Discount Club ticket fares and online baggage fees are applicable to the accompanying passengers only where the Club member is also a Passenger in the booking.</p>

<p><img src="images/text_bullet.png" width="2%" height="2%"/> The number of seats at the indicated ViaVai Discount Club price is subject to availability.</p>

<p><img src="images/text_bullet.png" width="2%" height="2%"/> Baggage fee discounts cannot be applied to bookings made before the purchase of the membership.</p>

<p><img src="images/text_bullet.png" width="2%" height="2%"/> Read the Terms and Conditions of ViaVai Discount Club. </p>
</div>



</div>


		<!--subscribe start-->
		<section id="subs" class="subscribe">
			
			<div class="layer"></div>
			<div class="container">
				<div class="subscribe-title text-center">
					<h2>
						Join our Subscribers List to Get Regular Update
					</h2>
					<p>
						Subscribe Now. We will send you Best offer for your Trip 
					</p>
				</div>
				<form action="member_club.php" method="POST">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<div class="custom-input-group">
								<input type="email" name="subscriber_email" class="form-control" placeholder="Enter your Email Here">
								<button class="appsLand-btn subscribe-btn" name="subscribe_button">Subscribe</button>
								<div class="clearfix"></div>
								<i class="fa fa-envelope"></i>
							</div>
						</div>
					</div>
				</form>
			</div>
		</section>
		<!--subscribe end-->

       <?php
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "db_viavai"; 

		$con = new mysqli($hostname , $username , $password , $dbname);
		if($con->connect_error)
		{
		  die("Connection failed: ". $con->connect_error);
		}

if(isset($_POST['subscribe_button']))
{
	$subscriber_email = mysqli_real_escape_string($con,$_POST['subscriber_email']);

	global $sql;
	$sql = "INSERT INTO subscribers (subscribe_email) VALUES ('$subscriber_email')";

  if(mysqli_query($con, $sql))
  {
    echo "<br><br>";
      echo "<div class='input-group' style = 'position: relative;  left: 12%; width: 76%;'>
             <div class='input-group-prepend'>
              <span class='input-group-text'><b style = 'color:green;'>Success</b></span>
             </div>
              <input readonly='readonly' type='text' class='form-control' value='Your email was added successfully.'>
            </div>";
  } 
  else
  {
    echo "<br><br>";
    echo "<div class='input-group' style = 'position: relative;  left: 12%; width: 76%;'>
             <div class='input-group-prepend'>
              <span class='input-group-text'><b style = 'color:red;'>ERROR</b></span>
             </div>
              <input readonly='readonly' type='text' class='form-control' value='Could not able to execute your request.Try again!'>
            </div>";
  }

}





		mysqli_close($con);
        ?>


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