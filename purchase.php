<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Purchase</title>

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


#corner
{
    border-radius: 25px;
    border: 2px solid #000066;
    padding: 20px; 
    width: 100%;
    height: 100%;	
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
<br>


<h1 style="margin-left: 8.5%;">Purchase</h1>
<div class="container" id="corner">
	<div class="row" style="margin-left: 0%; color: #000066;"><h5>Flight Details</h5></div>
	<div class="row" style="margin-left: 0%; ">As you can see below, are included flight time, from, to, fare, aircraft type and terminal information</div><hr>
  <div class="row">
    <div class="col-sm" style="width: 33.33%;">
      <div style="color: #000066">Flight Info.</div><hr>
      <div id="flight_info">
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

                  $airline = $_SESSION['airline'];

                  $sql2 = mysqli_query($con,'SELECT airline
                  FROM  flights
                  WHERE airline = "$airline" ') or die(mysqli_error($con));

                  if(isset($_SESSION['airline']))
                  {
                    echo "<b>".$airline."</b>";
                    echo "<br>";
                    echo "<br>";
                  }
                  ?>
      </div><hr>
    </div>
    <div class="col-sm">
	  <div style="color: #000066">Departing</div> <hr>
	  <div id="departing">
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

                  $from_country = $_SESSION['from_country'];
                  $departure_date = $_SESSION['departure_date'];

                  $sql2 = mysqli_query($con,'SELECT from_country, departure_date 
                  FROM  flights
                  WHERE from_country = "$from_country" AND departure_date = "$departure_date" ') or die(mysqli_error($con));

                  if(isset($_SESSION['from_country'],$_SESSION['departure_date']))
                  {
                    echo "<b>".$from_country."</b>";
                    echo "<br>";
                    echo "<b>".$departure_date."</b>";
                  }
                  ?>
    </div><hr>   
	</div>
    <div class="col-sm">
      <div style="color: #000066">Arriving</div><hr>
	  <div id="arriving">
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

                  $to_country = $_SESSION['to_country'];
                  $back_date = $_SESSION['back_date'];

                  $sql2 = mysqli_query($con,'SELECT to_country, back_date 
                  FROM  flights
                  WHERE to_country = "$to_country" AND back_date = "$back_date" ') or die(mysqli_error($con));

                  if(isset($_SESSION['to_country'],$_SESSION['back_date']))
                  {
                    echo "<b>".$to_country."</b>";
                    echo "<br>";
                    echo "<b>".$back_date."</b>";
                  }
                  ?> 
    </div><hr>   
    </div>
  </div>
</div>


<div class="container" id="corner">
  <div class="row" style="margin-left: 0%; color: #000066;"><h5>Passenger Details</h5></div>
  <div class="row">
    <div class="col-sm">
      <div style="color: #000066">Passenger Name</div><hr>
      <div id="passenger_name">
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
                  FROM  contact_details_booking
                  WHERE firstname = "$firstname" AND lastname = "$lastname" ') or die(mysqli_error($con));

                  if(isset($_SESSION['firstname'],$_SESSION['lastname']))
                  {
                    echo "<b>".$firstname."</b> ";
                    echo "<b>".$lastname."</b>";
                  }
                  ?>         
      </div><hr>
    </div>
  </div>
</div>


<div class="container" id="corner">
  <div class="row" style="margin-left: 0%; color: #000066;"><h5>Seats Selected</h5></div>
  <div class="row">
    <div class="col-sm">
      <div style="color: #000066">Flight</div><hr>
      <div id="flight_from_to">
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

                  $from_country = $_SESSION['from_country'];
                  $to_country = $_SESSION['to_country'];
                  $flight_code = $_SESSION["flight_code"];

                  $sql2 = mysqli_query($con,'SELECT from_country, to_country, flight_code 
                  FROM  flights
                  WHERE from_country = "$from_country" AND to_country = "$to_country" AND flight_code = "$flight_code" ') or die(mysqli_error($con));

                  if(isset($_SESSION['from_country'],$_SESSION['to_country'],$_SESSION['flight_code']))
                  {
                    echo "<b>".$flight_code.": </b>";
                    echo "<b>".$from_country."</b> - ";
                    echo "<b>".$to_country."</b>";
                  }
                  ?>
      </div><hr>
    </div>
   <div class="col-sm">
      <div style="color: #000066">Seats</div><hr>
      <div id="seat_number">
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

                  $techno = $_SESSION["techno"];

                  $sql2 = mysqli_query($con,'SELECT seat_booking_check
                  FROM  seat_booking
                  WHERE seat_booking_check = "$techno" ') or die(mysqli_error($con));

                  
                    print "<b>".join(',', $techno)."</b>";
                  
                  ?> 
      </div><hr>
    </div>
  </div>
</div>


<div class="container" id="corner">
  <div class="row" style="margin-left: 0%; color: #000066;"><h5>Card Information</h5></div>
  <div class="row">
    <div class="col-sm">
      <div style="color: #000066; width: 100%;">Total Amount Due<div id="total_amount_due" style="margin-left: 90%; ">
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

                  $select_bag_option = $_SESSION['select_bag_option'];

                  

                  $sql2 = mysqli_query($con,'SELECT price 
                  FROM  flights
                  WHERE price = "$price" ') or die(mysqli_error($con));

                  if(isset($_SESSION['price']))
                  {
                    $sum = $price + $select_bag_option;
                    echo "<b>".$sum."</b>$";
                  }
                  ?> 
      </div></div><hr>
      <p style="color: grey;">* Required Fields</p>

<form action="purchase.php" method="POST">
		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">Cardholder First Name:</span>
		  </div>
		  <input type="text" name="card_firstname" class="form-control" required="required" data-error="First Name is required.">
		</div><br>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">Cardholder Last Name:</span>
		  </div>
		  <input type="text" name="card_lastname" class="form-control" required="required" data-error="Last Name is required.">
		</div><br>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">Card Type:</span>
		  </div>
		  <select class="custom-select" name="card_type" id="inputGroupSelect01" required="required" data-error="Card Type is required.">
		    <option value="Visa" selected>Visa</option>
		    <option value="American Express">American Express</option>
		    <option value="Mastercard">Mastercard</option>
		  </select>
		</div><br>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">Card Number:</span>
		  </div>
		  <input type="text" name="card_number" pattern="[A-Z0-9]{16}" placeholder="no spaces" required="required" data-error="Card Number is required." class="form-control">
		</div><br>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">Card Expiry Month/Year:</span>
		  </div>
		  <select name="card_month" class="custom-select" id="inputGroupSelect01" required="required" data-error="Card expiry month is required.">
		    <option selected>1</option>
		    <option value="2">2</option>
		    <option value="3">3</option>
		    <option value="4">4</option>
		    <option value="5">5</option>
		    <option value="6">6</option>
		    <option value="7">7</option>
		    <option value="8">8</option>
		    <option value="9">9</option>
		    <option value="10">10</option>
		    <option value="11">11</option>
		    <option value="12">12</option>
		  </select>
		  <select name="card_year" class="custom-select" id="inputGroupSelect01" required="required" data-error="Card expiry year is required.">
		    <option selected>2018</option>
		    <option value="2019">2019</option>
		    <option value="2020">2020</option>
		    <option value="2021">2021</option>
		    <option value="2022">2022</option>
		    <option value="2023">2023</option>
		    <option value="2024">2024</option>
		    <option value="2025">2025</option>
		    <option value="2026">2026</option>
		    <option value="2027">2027</option>
		    <option value="2028">2028</option>
		    <option value="2029">2029</option>
		    <option value="2030">2030</option>
		  </select>
		</div><br>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">CVV Number:</span>
		  </div>
		  <input name="card_cvv" pattern="[0-9]{4}" type="text" class="form-control" required="required" data-error="CVV Number is required.">
		</div><br>
    </div>
  </div>
</div>


<div class="container" id="corner">
  <div class="row" style="margin-left: 0%; color: #000066;"><h5>Address Information</h5></div>
  <div class="row">
    <div class="col-sm">
      <p style="color: grey;">* Required Fields</p>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">Cardholder Address:</span>
		  </div>
		  <input name="card_address" type="text" class="form-control" required="required" data-error="Address is required.">
		</div><br>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">City/Town:</span>
		  </div>
		  <input name="card_city" type="text" class="form-control" placeholder="no punctuation" required="required" data-error="City/Town is required.">
		</div><br>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">State:</span>
		  </div>
		  <input name="card_state" type="text" placeholder="no punctuation" required="required" data-error="State/Country is required." class="form-control">
		</div><br>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">Country</span>
		  </div>
		  <select name="card_country" class="custom-select" id="inputGroupSelect01" required="required" data-error="Country is required.">
		    <option value="Czech" selected>Czech</option>
		    <option value="Vienna">Vienna</option>
		    <option value="Russia">Russia</option>
		    <option value="Belgium">Belgium</option>
		    <option value="Bosnia">Bosnia</option>
		    <option value="Bulgaria">Bulgaria</option>
		    <option value="Croatia">Croatia</option>
		    <option value="Cyprus">Cyprus</option>
		    <option value="Denmark">Denmark</option>
		    <option value="Finland">Finland</option>
		    <option value="France">France</option>
		    <option value="Germany">Germany</option>
		    <option value="Greece">Greece</option>
		    <option value="Iceland">Iceland</option>
		    <option value="Ireland">Ireland</option>
		    <option value="Italy">Italy</option>
		    <option value="Malta">Malta</option>
		    <option value="Moldova">Moldova</option>
		    <option value="Netherlands">Netherlands</option>
		    <option value="Norway">Norway</option>
		    <option value="Poland">Poland</option>
		    <option value="Portugal">Portugal</option>
		    <option value="Serbia">Serbia</option>
		    <option value="Slovakia">Slovakia</option>
		    <option value="Slovenia">Slovenia</option>
		    <option value="Spain">Spain</option>
		    <option value="Sweden">Sweden</option>
		    <option value="Switzerland">Switzerland</option>
		    <option value="Ukraine">Ukraine</option>
		    <option value="Turkey">Turkey</option>
		  </select>
		</div><br>

		<div class="input-group">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">Postal/Zip Code</span>
		  </div>
		  <input pattern="[0-9]{5}" name="card_postal" type="text" class="form-control" required="required" data-error="Postal/Zip Code is required.">
		</div><br>
    </div>
  </div>
</div>


<div class="container" id="corner">
  <div class="row" style="margin-left: 0%; color: #000066;"><h5>Ticketing Method</h5></div>
  <div class="row">
    <div class="col-sm">
      <div style="color: #000066">Email Address</div><hr>
      <div id="email_address">
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

                  $email = $_SESSION['email'];

                  $sql2 = mysqli_query($con,'SELECT email 
                  FROM  contact_details_booking
                  WHERE email = "$email" ') or die(mysqli_error($con));

                  if(isset($_SESSION['email']))
                  {
                    echo "<b>".$email."</b>";
                  }
                  ?>   
      </div><hr>
      <p><b>Email:</b> An Itinerary and Receipt email will be sent to the email address provided. If you have an email filter and you are booking a flight please allow your mailbox to receive mails from <b>bookingviavai@airlines.com</b></p>
    </div>
  </div>
</div>


<div class="container" id="corner">
  <div class="row" style="margin-left: 0%; color: #000066;"><h5>Authorise Payment</h5></div>
  <div class="row">
    <div class="col-sm">
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <div class="input-group-text">
		      <input type="checkbox" required="required" aria-label="Checkbox for following text input">
		    </div>
		  </div>
		  <input type="text" class="form-control" readonly="readonly" value="I authorise ViaVai to debit 
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
$select_bag_option = $_SESSION['select_bag_option'];


$sql2 = mysqli_query($con,'SELECT price 
FROM  flights
WHERE price = "$price" ') or die(mysqli_error($con));

if(isset($_SESSION['price']))
{
  $sum = $price + $select_bag_option;
  echo $sum;
}
?>$ from my card for my flight." aria-label="Text input with checkbox">
		</div>
    </div>
  </div>
      <button name="Button_Purchase" style="margin-left: 90%;" class="btn btn-primary">Purchase</button>
</div>
</form>

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
    else
    {
        ;
    }

if(isset($_POST['Button_Purchase']))
{
  $card_firstname = mysqli_real_escape_string($con,$_POST['card_firstname']);
  $card_lastname = mysqli_real_escape_string($con,$_POST['card_lastname']);
  $card_type = $_POST['card_type'];
  $card_number = mysqli_real_escape_string($con,$_POST['card_number']);
  $card_month = $_POST['card_month'];
  $card_year = $_POST['card_year'];
  $card_cvv = mysqli_real_escape_string($con,$_POST['card_cvv']);
  $card_address = mysqli_real_escape_string($con,$_POST['card_address']);
  $card_city = mysqli_real_escape_string($con,$_POST['card_city']);
  $card_state = mysqli_real_escape_string($con,$_POST['card_state']);
  $card_country = $_POST['card_country'];
  $card_postal = mysqli_real_escape_string($con,$_POST['card_postal']);



global $sql;
  $sql = "INSERT INTO purchase (card_firstname, card_lastname, card_type, card_number, card_month, card_year, card_cvv, card_address, card_city, card_state, card_country, card_postal) VALUES ('$card_firstname', '$card_lastname', '$card_type', '$card_number', '$card_month', '$card_year', '$card_cvv', '$card_address', '$card_city', '$card_state', '$card_country', '$card_postal')";

  if(mysqli_query($con, $sql))
  {
    echo "<br><br>";
      echo "<div class='input-group' style = 'position: relative; left: 30%;  width: 40%;'>
             <div class='input-group-prepend'>
               <a href = 'congratulations.php' style = 'text-decoration: none;' name = 'continue'>
              <span class='input-group-text' ><b style = 'color:green;'>Continue</b></span></a>
             </div>
              <input readonly='readonly' type='text' class='form-control' value='Records added successfully.'>

            </div>";

//$_SESSION["firstname"] = $firstname;            

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

<br>
<br><br><br><br><br>
<div class="container" id="corner">
  <div class="row" style="margin-left: 0%; color: grey;"><h5>About your Fare</h5></div>
  <div class="row">
    <div class="col-sm">
      <ul>
      	<li style="color: grey;"><b>Review Itinerary:</b> Please review your flight and passenger details before purchasing.</li>
      	<li style="color: grey;"><b>Confirmation:</b> We kindly ask for your patience, as it may take a few moments to process your request.</li>
      </ul>
    </div>
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