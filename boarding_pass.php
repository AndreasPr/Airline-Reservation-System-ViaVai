<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Boarding Pass</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
  background: #c5d8e6;
  font-family: helvetica, arial;
  text-transform: uppercase;
  box-sizing: border-box;
}

h1 {
  color: #ccc;
  font-weight: 200;
  font-size: 2.1em;
  margin: 0px;
}

h2 {
  color: #ccc;
  opacity: .5;
  font-weight: 100;
  font-size: .9em;
  margin: 0px;
}

h3 {
  color: #ccc;
  opacity: .8;
  font-weight: 100;
  font-size: .9em;
  margin: 0px;
}

.cards_wrapper {
  text-align: center;
  padding-top: 20px;
}

.card {
  width: 320px;
  border-radius: 20px;
  background: #4d1532;
  display: inline-block;
  margin: 10px;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.4);
}
.card img {
  width: 100%;
}
.card .inner {
  position: absolute;
  width: 320px;
  height: 100%;
  z-index: 1;
  opacity: 0.1;
  background-image: url(https://puu.sh/rE78K/33424202f7.svg);
  background-size: 130px;
  background-repeat: repeat-y;
  background-position: 0px 0px;
  background-repeat: repeat-x;
  animation: animatedBackground 40s linear infinite;
}
@keyframes animatedBackground {
  from {
    background-position: 100% -10px;
  }
  to {
    background-position: 0% -10px;
  }
}
.card_logo {
  background: #ffffff;
  border-radius: 20px 20px 0 0;
}
.card_logo img.qatar {
  margin: 10px;
  text-align: center;
  width: 70%;
}
.card_logo img.tigerair {
  margin-top: 10px;
  text-align: center;
  width: 45%;
}
.card_logo img.airasia {
  margin: -10px;
  text-align: center;
  width: 35%;
}
.card_heading h2 {
  padding-top: 20px;
  text-align: center;
}
.card_thumbnail {
  min-height: 150px;
  margin-top: 10px;
}
.card_thumbnail img {
  width: 100%;
  height: auto;
}
.card_trip {
  text-align: center;
  width: 85%;
  margin: 30px auto;
  display: flex;
  height: 72px;
}
.card_trip div {
  display: inline-block;
  height: 100%;
  vertical-align: middle;
}
.card_trip div h1 {
  margin: 0px;
}
.card_trip div h2 {
  margin: 0px;
  letter-spacing: 2px;
}
.card_trip div.trip_from {
  text-align: left;
  width: 35%;
}
.card_trip div.trip_from h2 {
  padding-left: 2px;
}
.card_trip div.trip_icon {
  width: 30%;
}
.card_trip div.trip_icon img {
  padding-top: 20px;
  opacity: 1;
  width: 25px;
}
.card_trip div.trip_to {
  text-align: right;
  width: 35%;
}
.card_trip div.trip_to h2 {
  padding-right: 3px;
}
.card_departure {
  margin: -20px auto 32px;
}
.card_departure div {
  color: #ccc;
}
.card_divider {
  position: relative;
  width: 100%;
}
.card_divider .divider_left {
  left: -15px;
}
.card_divider .divider_hole {
  position: absolute;
  top: -12px;
  padding: 0px;
  height: 25px;
  width: 25px;
  border-radius: 100%;
  background: #c5d8e6;
}
.card_divider .divider {
  width: 85%;
  margin: auto;
  height: 2px;
  background: linear-gradient(to right, #c5d8e6 50%, transparent 50%);
  background-size: 10px 8px, 100% 2px;
  opacity: .2;
}
.card_divider .divider_right {
  right: -15px;
}
.card_flight_details h2 {
  font-size: .7em;
}
.card_flight_details .card_seating {
  width: 85%;
  margin: 30px auto;
  display: flex;
}
.card_flight_details .card_seating div {
  display: inline-block;
  width: 50%;
}
.card_flight_details .card_seating div.seating_passenger {
  text-align: left;
}
.card_flight_details .card_seating div.airline_company {
  text-align: left;
  padding-left: 32px;
}
.card_flight_details .card_seating div.seating_seat {
  text-align: right;
}
.card_flight_details .card_details {
  width: 85%;
  margin: 30px auto;
  display: flex;
}
.card_flight_details .card_details div {
  display: inline-block;
  width: 33%;
}
.card_flight_details .card_details div.details_flight {
  text-align: left;
}
.card_flight_details .card_details div.details_date {
  text-align: center;
}
.card_flight_details .card_details div.details_time {
  text-align: right;
}
.card_flight_details .card_details_continued {
  width: 85%;
  margin: 30px auto;
  display: flex;
  padding-bottom: 30px;
}
.card_flight_details .card_details_continued div {
  display: inline-block;
  width: 33%;
}
.card_flight_details .card_details_continued div.details_flight {
  text-align: left;
}
.card_flight_details .card_details_continued div.details_date {
  text-align: center;
}
.card_flight_details .card_details_continued div.details_time {
  text-align: right;
}
.card .card_seating {
  width: 85%;
  margin: 30px auto;
  display: flex;
}
.card .card_seating div {
  display: inline-block;
  width: 50%;
}
.card .card_seating div.seating_passenger {
  text-align: left;
}
.card .card_seating div.airline_company {
  text-align: left;
  padding-left: 32px;
}
.card .card_seating div.seating_seat {
  text-align: right;
}
.card .card_details {
  width: 85%;
  margin: 30px auto;
  display: flex;
}
.card .card_details div {
  display: inline-block;
  width: 33%;
}
.card .card_details div.details_flight {
  text-align: left;
}
.card .card_details div.details_date {
  text-align: center;
}
.card .card_details div.details_time {
  text-align: right;
}
.card .card_details_continued {
  width: 85%;
  margin: 30px auto;
  display: flex;
  padding-bottom: 30px;
}
.card .card_details_continued div {
  display: inline-block;
  width: 33%;
}
.card .card_details_continued div.details_flight {
  text-align: left;
}
.card .card_details_continued div.details_date {
  text-align: center;
}
.card .card_details_continued div.details_time {
  text-align: right;
}

.ta-theme {
  background: #b26a07;
}
.ta-theme .card_logo {
  border-top: 5px solid #F69E25;
}

.aa-theme {
  background: #961a14;
}
.aa-theme .card_logo {
  border-top: 5px solid #DA251D;
}

.qr-theme {
  background: #000066;
}
.qr-theme .card_logo {
  border-top: 5px solid #000066;
}
#finish_button
{
  position: relative;
  left: 70%;
}
#print
{
  position: relative;
  left: 23%;
  margin-bottom: 0%;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<body onload="randomStringPattern() ">



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


if(isset($_SESSION["flight_no"]))
{
  $flight_no = $_SESSION["flight_no"];
  $from_country = $_SESSION["from_country"];
  $to_country = $_SESSION["to_country"];
  $adults = $_SESSION["adults"];
  $children = $_SESSION["children"];
  $class = $_SESSION["class"];
  $airline = $_SESSION["airline"];
  $flight_code = $_SESSION["flight_code"]; 
  $booking_reference_number = $_SESSION["booking_reference_number"];
?>


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


echo "<form action='boarding_pass.php' method='POST'>";

?>


<div class="cards_wrapper">
		<div class="card qr-theme">
        <div class="card_heading">
					<div class="card_logo">
						<img src="images/ViaVai_logo.jpg" class="qatar">
					</div>
					<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/281813/SIN.jpg" />
					<div class="card_divider">
            <div class="divider_left divider_hole">
            </div>
            <div class="divider">
            </div>
            <div class="divider_right divider_hole">
            </div>
        </div>
					<h2>Boarding Pass</h2>
          <div class="inner"></div>
        </div>
        <div class="card_trip">
            <div class="trip_from">
                <h1>From</h1>
                <h2>
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
                    echo $from_country;
                  ?> 
                </h2>
            </div>
            <div class="trip_icon">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/553328/From.png" />
            </div>
            <div class="trip_to">
                <h1>To</h1>
                <h2>
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
                    echo $to_country;
                  ?> 
                </h2>
            </div>
        </div>
        <div class="card_divider">
            <div class="divider_left divider_hole">
            </div>
            <div class="divider">
            </div>
            <div class="divider_right divider_hole">
            </div>
        </div>
      <div class="card_flight_details">
        <div class="card_seating">
            <div class="seating_passenger">
                <h2>Passenger</h2>
                <h3>
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
                    echo $firstname;
                    echo "<br>";
                    echo $lastname;
                  }
                  ?> 
                </h3>
            </div>
            <div class="airline_company">
                <h2>Airline Company</h2>
                <h3>
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
                    echo $airline;
                  ?> 
                </h3>
            </div>
            <div class="seating_seat">
                <h2>Seat</h2>
                <h3>
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
                </h3>
            </div>
        </div>
        <div class="card_details">
            <div class="details_flight">
                <h2>Depart on</h2>
                <h3>
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

                  
                  $departure_date = $_SESSION['departure_date'];

                  $sql2 = mysqli_query($con,'SELECT departure_date 
                  FROM  flights
                  WHERE departure_date = "$departure_date" ') or die(mysqli_error($con));

                  if(isset($_SESSION['departure_date']))
                  {
                    echo $departure_date;
                  }
                  ?>
                </h3>
            </div>
            <div class="details_date">
                <h2>Depart at</h2>
                <h3>20:30 pm</h3>
            </div>
            <div class="details_time">
                 <h2>Class</h2>
                 <h3 class="countdown">
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
                    echo $class;
                  ?>
                 </h3>
             </div>
        </div>
        <div class="card_details_continued">
              <div class="details_flight">
                  <h2>Flight</h2>
                  <h3>
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
                    echo $flight_code;
                  ?>
                  </h3>
              </div>
              <div class="details_date">
                  <h2>Confirmation </h2>
                  <h3>
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
                    echo $booking_reference_number;
                  ?>
                  </h3>
              </div>
              <div class="details_time">
                  <h2>Gate</h2>
                  <h3><p id="gate"><div id="gate_number"></div></p></h3>
              </div>
          </div>
      </div>
    </div>
    

</div>

<script>
function randomStringPattern(input) {
  var text = "";
  var possible;
  for (var j = 0; j < input.length; j++) {
  if (input[j] == " ") {
    possible = ' ';
  } else if ((input[j] == input[j].toUpperCase()) && (input[j] != input[j].toLowerCase())) {
      possible = "ABCDE";
    } else if ((input[j] == input[j].toLowerCase()) && (input[j] != input[j].toUpperCase())) {
      possible = "abcdefghijklmnopqrstuvwxyz";
    } else if ('0123456789'.indexOf(input[j]) !== -1) {
        possible = "0123456789";
    } else {
      possible = "#!@~$%^&*)-_"
    }
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  }
  return text;
}
  document.getElementById("gate").innerHTML += randomStringPattern('X49 ') + "<br />";
</script>




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



}
else{
  echo "Wrong!!!";
}

echo "<br><br>";
echo "<button type='button' id = 'print' style='background-color: #000066;' class='btn btn-primary'>Print</button>";
echo "<button id = 'finish_button' name = 'finish_button' style='background-color: #000066;' class='btn btn-primary'>Finish</button>";
echo "</form>";


?>


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

if(isset($_POST['finish_button']))
{

  $from_country = $_SESSION["from_country"];
  $to_country = $_SESSION["to_country"];
  $firstname = $_SESSION["firstname"];
  $lastname = $_SESSION["lastname"];
  $airline = $_SESSION["airline"];
  $techno = $_SESSION["techno"];
  $departure_date = $_SESSION['departure_date'];
  $class = $_SESSION["class"];
  $flight_code = $_SESSION["flight_code"]; 
  $booking_reference_number = $_SESSION["booking_reference_number"];

  global $sql;

  for($i = 0; $i<sizeof($techno); $i++)
  {
  $sql = "INSERT INTO bookings (from_country, to_country, firstname, lastname, airline, seat, departure_date, class, flight_code, confirmation_no) VALUES ('$from_country', '$to_country', '$firstname', '$lastname', '$airline', '".$techno[$i]."', '$departure_date', '$class', '$flight_code', '$booking_reference_number')";
  }

  if(mysqli_query($con, $sql))
  {
    echo "<script>if(confirm('Your Boarding Pass Sucessfully Inserted!!!')){document.location.href='homepage.php'};</script>";
  }
  else
  {
    echo "<script>if(confirm('ERROR!Could not able to execute your request.Try again!')){document.location.href='boarding_pass.php'};</script>";    
  }

}
?>
<br>
<br>

  </body>
  <script>
      // ----- On render -----
$(function() {
  var currentTime = moment().unix(); // Timestamp - Sun, 21 Apr 2013 13:00:00 GMT
  var eventTime = moment('22-04-2017 20:30:00', 'DD-MM-YYYY HH:mm:ss').unix() + 100000; // Timestamp - Sun, 21 Apr 2013 12:30:00 GMT
  var diffTime = (eventTime - currentTime);
  var duration = moment.duration(diffTime * 1000, 'milliseconds');
  var interval = 1000;

  setInterval(function() {
    duration = moment.duration(duration - interval, 'milliseconds');
    var text = '';
    if (duration.days() > 0) {
      var text = text + duration.days() + 'd ';
    } else if (duration.days() == 1) {
      var text = text + '1d';
    }
    text = text + duration.hours() + ":" + duration.minutes() + ":" + duration.seconds();
    $('.countdown').text(text);
  }, interval);

  var myx;
  var myy;
  var oldx;
  var oldy;
  //check for mobile and accerlerometer support
  if (window.DeviceOrientationEvent) {
    //wireup the event
    window.addEventListener('deviceorientation', function(e) {
      
      //grab the accelerometer values
      myx = Math.floor(e.gamma / 3); //exaggerate the effect
      myy = Math.floor(e.beta / 3);
      /*if (oldtarget.x != thetarget.x || oldtarget.y != thetarget.y) {*/
      if (myx != parseInt($('#oldX').text()) || myy != parseInt($('#oldY').text())) {
        sparkle();
      }
        $('#oldX').text(myx)
        $('#oldY').text(myy)
      /*}*/
    }, false);
  }
  sparkle();

  function sparkle() {
    $.each($('.sparkler>.square'), function(i, square) {
      $(square).css('background-color', getColor());
    })
  }
  function generateSparkles() {
    var container = $('.sparkler');
    var i = 0;
    for (i = 0; i < 64; i = i + 1) {
      var spark = $('<div class="square"></div>');
      spark.css('background-color', getColor());
      container.append(spark)
    }
  }
  function getColor() {
    var red = Math.floor(Math.random()*(255-200+1)+200)
    var green = Math.floor(Math.random()*(225-175+1)+175);
    var blue = Math.floor(Math.random()*(55-0+1)+0);
    return 'rgb('+ red + ',' + green +',' + blue + ')';
  }
  generateSparkles();
});
  </script>
<script type="text/javascript">

</script>


<script>
  $('#print').click(function(){
    alert("Your boarding pass is being printed!!!");
  });
</script>

</body>
</html>
