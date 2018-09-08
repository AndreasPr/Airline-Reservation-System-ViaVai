<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checked Bags</title>
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
<br>


	<h3 style="color: grey; margin-left: 5%;">Checked Bags</h3>
	<p style="color: grey; margin-left: 5%;">Prices are shown in USD</p>

	<div class="container-fluid bg-light py-3" style="width: 90%;">
    <form id="contact-form" method="POST" action="homepage_checked_bags_oneway.php" role="form">
        <div class="messages"></div>
        <div class="controls">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="form_name">Passenger Name</label>
                        <input id="form_name" type="text" name="fullname" class="form-control" readonly="readonly" value="
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

                  $lastname = $_SESSION['lastname'];

                  $sql2 = mysqli_query($con,'SELECT lastname
                  FROM contact_details_booking_oneway
                  WHERE lastname = "$lastname" ') or die(mysqli_error($con));

                  if(isset($_SESSION['lastname']))
                  {
                    echo $lastname;
                    
                  }

                  ?> ">
                        <h3></h3>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">                        
						<label for="inputGroupSelect01">Checked Bags*</label>
						  <select class="custom-select" id="inputGroupSelect01"   placeholder="Please enter the number of your baggages *" required="required" name="select_bag_option" data-error="Number of baggages is required.">
						    <option value="0" selected>0 bags</option>
						    <option value="0">1 bag + 0 USD</option>
						    <option value="60">2 bags + 60 USD</option>
						  </select>
           
                    </div>
					<img src="images/baggage.png" name="baggage1" id="baggage1"/>
					<img src="images/baggage.png" name="baggage2" id="baggage2"/>
					<img src="images/baggage.png" name="baggage3" id="baggage3"/>
					<img src="images/equal.png" name="equal" id="equal" width="15%" height="30%" style="position: relative; left: 3%;" />
					<img src="images/baggagekg.png" name="baggage4" id="baggage4" style="position: relative; left: 6%;"/>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="form_cost">Total Cost:</label>
                        <input id="form_cost" type="text" name="cost" class="form-control" readonly="readonly" value="
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

                  
                  $price = $_SESSION['price'];
                  $flight_no = $_SESSION['flight_no'];

                  $sql2 = mysqli_query($con,'SELECT flight_no, price
                  FROM  flights_oneway
                  WHERE price = "$price" AND flight_no = "$flight_no" ') or die(mysqli_error($con));

                  if(isset($_SESSION['price']))
                  {
                    echo $price.'$';
                  }

                  ?>
                  ">
                        <div class="help-block with-errors"></div>
                    </div>
                    <p style="position: absolute; left: 22%;">Total Weight</p>
                    <img src="images/baggage.png" name="baggage5" id="baggage5" />
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

                <p class="text-muted"><strong>*</strong> This field is required.</p>
                <input id="info1" type="text" name="info1" class="form-control" value="Excess weight is excluded from Free Checked Bags." readonly="readonly">
                <input id="info2" type="text" name="info2" class="form-control" value="Sports Equipment should be included in your checked bags for flights to/from USA" readonly="readonly">
                <input id="info3" type="text" name="info3" class="form-control" value="The carry on / cabin baggage weight limit is 10kg on JetBlue flights. Partner flights may be different." readonly="readonly">
        <br>
        <button id="confirm" name="confirm" class="btn btn-primary" style="margin-left: 90%;">Confirm</button>
    </form>
</div>

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


          if(isset($_POST['confirm']))
          {
            $select_bag_option = $_POST['select_bag_option'];

          global $sql;
            $sql = "INSERT INTO check_baggage_oneway (check_baggage) VALUES ('$select_bag_option')";

            if(mysqli_query($con, $sql))
            {
              echo "<br><br>";
                echo "<div class='input-group' style = 'position: relative; left: 30%;  width: 40%;'>
                       <div class='input-group-prepend'>
                         <a href = 'homepage_seat_booking_oneway.php' style = 'text-decoration: none;' name = 'continue'>
                        <span class='input-group-text' ><b style = 'color:green;'>Continue</b></span></a>
                       </div>
                        <input readonly='readonly' type='text' class='form-control' value='Records added successfully.'>

                      </div>";
                    
                    $_SESSION["select_bag_option"] = $select_bag_option;            
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
</body>
</html>