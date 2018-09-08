<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Congratulations</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

	</style>
</head>
<body onload="makeid()">
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
<br>
<br>
<form method="POST" action="homepage_congratulations_oneway.php">
<div class="jumbotron jumbotron-fluid" >
  <div class="container">
    <h1 class="display-4">Congratulations!</h1>
    <p class="lead"><div id="passenger_name">
                  <?php
                  $hostname = 'localhost';
                  $username = 'root';
                  $password = '';
                  $dbname = 'db_viavai'; 

                  $con = new mysqli($hostname , $username , $password , $dbname);
                  if($con->connect_error)
                  {
                  die('Connection failed: '. $con->connect_error);
                  }  

                  $firstname = $_SESSION['firstname'];
                  $lastname = $_SESSION['lastname'];

                  $sql2 = mysqli_query($con,'SELECT firstname, lastname 
                  FROM  contact_details_booking_oneway
                  WHERE firstname = "$firstname" AND lastname = "$lastname" ') or die(mysqli_error($con));

                  if(isset($_SESSION['firstname'],$_SESSION['lastname']))
                  {
                    echo "Dear, ";
                    echo "<b>".$firstname."</b> ";
                    echo "<b>".$lastname."</b>";
                  }
                  ?> 
    </div></p>
    <p><b>Your flight booking is completed!</b></p>
    <p>Booking Reference Number:  <input type="text" name="booking_reference_number" id="booking_reference_number" style="font-weight: bold;" readonly="readonly" /></p>
    <p>Thank you for booking your travel itinerary with <b style="color: #000066;">viavai.com</b></p>
  </div>
  <button name="Continue_checkin" class="btn btn-primary" style="margin-left: 80%;">Continue</button>
</div>
</form>

<script>
function makeid() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

  for (var i = 0; i < 6; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  document.getElementById("booking_reference_number").value = text;
}
</script>

<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'db_viavai'; 

$con = new mysqli($hostname , $username , $password , $dbname);
if($con->connect_error)
{
die('Connection failed: '. $con->connect_error);
}  

if(isset($_POST['Continue_checkin']))  
{ 
  $booking_reference_number = mysqli_real_escape_string($con,$_POST['booking_reference_number']);

  global $sql;
  $sql = "INSERT INTO check_in_oneway (check_in_number) VALUES ('$booking_reference_number')";

  if(mysqli_query($con, $sql))
  {
    echo "<br><br>";
    echo "<div class='input-group' style = 'position: relative; left: 30%;  width: 40%;'>
             <div class='input-group-prepend'>
               <a href = 'homepage_check_in_oneway.php' style = 'text-decoration: none;' name = 'continue'>
              <span class='input-group-text' ><b style = 'color:green;'>Continue</b></span></a>
             </div>
              <input readonly='readonly' type='text' class='form-control' value='Records added successfully.'>

            </div>";

            $_SESSION["booking_reference_number"] = $booking_reference_number;
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



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>