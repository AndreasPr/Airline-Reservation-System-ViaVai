<!doctype html>
<html class="no-js"  lang="en">

	<head>

		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Home</title>

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

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

<style>
/*-------------------------------------
		4. 	Travel-box
--------------------------------------*/

#BOX {
    background-image: url("images/image_fir.jpeg");
    
}
.single-travel-boxes {
    margin-top: -105px;
    background: rgba(255, 255, 255,0.8);
}
.tab-para p {
    font-size: 24px;
}
/* .desc-tabs */
.desc-tabs {
    border: transparent;
    box-shadow: 0 10px 20px rgba(0,0,0,.1);
    margin-top: 10%;
}
.desc-tabs .nav-tabs {
    display: inline-block;
    border-right: 0px solid #fff;
}

.desc-tabs .nav-tabs>li.active>a{
	color: #fff;
    background: #00d8ff;
    cursor: default;
    font-size: 20px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    text-transform: capitalize;
    -webkit-transition: .5s; 
	-moz-transition:.5s; 
	-ms-transition:.5s; 
	-o-transition:.5s;
    transition: .5s;
}
.desc-tabs .nav-tabs>li.active>a:focus, 
.desc-tabs .nav-tabs>li.active>a:hover {
    color: #565a5c;
    text-decoration: none;
}
.desc-tabs .nav-tabs>li>a{
	color: #fff;
    background: #00d8ff;
    cursor: default;
    font-size: 20px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    text-transform: capitalize;
    padding: 17px 40px 17px 46px;
    border: 0;
    -webkit-transition: .5s; 
	-moz-transition:.5s; 
	-ms-transition:.5s; 
	-o-transition:.5s;
    transition: .5s;
}
.single-travel-boxes .nav>li>a:focus, 
.single-travel-boxes .nav>li>a:hover {
	color: #565a5c;
	background: #fff;
	border: 0;
    text-decoration: none;
}
.desc-tabs .nav-tabs>li>a>i{
	padding-right: 6px;
}
/* .desc-tabs */



/*===ab-select-box===*/
.tab-para{
	padding: 43px 42px 24px;
}
.single-tab-select-box h2{
	color: #565a5c;
    font-size: 20px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    text-transform: capitalize;
    margin-bottom: 17px;
}
.travel-select-icon{
	position:relative;
}
.travel-select-icon:after{
	position: absolute;
    content: "\f107";
    right: 0px;
    top: 0;
    font-size: 18px;
    color: #aaa;
    background: #f9f9f9;
    font-family: "fontAwesome";
    pointer-events: none;
    border:1px solid #d7d7d7;
    border-bottom: transparent;
    padding: 10px;
}

.travel-check-icon{
    position: relative;
}
.travel-check-icon:after{
    position: absolute;
    content: "\f073";
    right: 0px;
    top: 0;
    font-size: 18px;
    color: #aaa;
    background: #f9f9f9;
    font-family: "fontAwesome";
    pointer-events: none;
    border:1px solid #d7d7d7;
    border-bottom: transparent;
    padding: 10px 8px;
}/*travel-select-icon*/

.travel-select-icon  select,.travel-check-icon  input {
	color:#aaa;
	font-size:14px;
	font-family: 'Poppins', sans-serif;
	text-transform: capitalize;
	height: 48px;
}/*select*/

.travel-select-icon .form-control,.travel-check-icon .form-control{
	-webkit-appearance:none;
	-moz-appearance:none;
	-o-appearance:none;
	-ms-appearance:none;
	appearance:none;
	outline:0!important;
	box-shadow:none;
	border:1px solid #d7d7d7;
	border-radius: 0px;
	margin-bottom: 20px;
}/*.travel-select-icon .form-control*/

/*.trip-circle*/
.trip-circle {
    display: flex;
    margin-bottom: 17px;
}
.single-trip-circle{
    display: flex;
}
.single-trip-circle:nth-child(2){
    display: flex;
    margin-left: 42px;
}
.single-trip-circle input[type="radio"] {
    display:none;
}
.single-trip-circle input[type="radio"] + label {
    color: #565a5c;
    font-size: 16px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    text-transform: capitalize;
    margin-bottom: 17px;
    margin-left:0px;
}
.single-trip-circle input[type="radio"] + label span.round-boarder{
    display:inline-block;
    width:15px;
    height:15px;
    margin:-1px 4px 0 0;
    vertical-align:middle;
    cursor:pointer;
    -moz-border-radius:  50%;
    border-radius:  50%;
}
.single-trip-circle input[type="radio"] + label span.round-boarder1{
    display:inline-block;
    width: 9px;
    height: 9px;
    margin: -13px 0px 0 1px;
    vertical-align:middle;
    cursor:pointer;
    -moz-border-radius:  50%;
    border-radius:  50%;
}
.single-trip-circle input[type="radio"] + label span.round-boarder{
    border:2px solid #aaa;
}

.single-trip-circle input[type="radio"] + label span.round-boarder1 {
    border:1px solid #fff;
    background-color:#fff;
}

.single-trip-circle input[type="radio"]:checked + label span.round-boarder1{
     background-color:#00d8ff;
}

.single-trip-circle input[type="radio"] + label span.round-boarder1,
.single-trip-circle input[type="radio"]:checked + label span.round-boarder1 {
  -webkit-transition:background-color 0.4s linear;
  -o-transition:background-color 0.4s linear;
  -moz-transition:background-color 0.4s linear;
  transition:background-color 0.4s linear;
}
/*.trip-circle*/


/* filter */
.travel-budget {
    margin-top: 38px;
}
.travel-budget h3{
	color: #565a5c;
    font-size: 20px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    text-transform: capitalize;
}
.price_filter{
	margin-top: 9px;
}
.price_filter .ui-slider.ui-slider-horizontal.ui-widget.ui-widget-content.ui-corner-all {
    background:  #d7d7d7;
    border: medium none;
    border-radius: 0;
    height: 6px;
	border: 1px solid #d7d7d7;
	border-radius: 5px;
}
.price_filter .ui-slider-handle.ui-state-default.ui-corner-all {
    background: #00d8ff none repeat scroll 0 0;
    border: 0px solid #00d8ff;
    border-radius:50%;
    height: 12px;
    width: 12px;
    outline: 0;
    cursor: pointer;
    z-index: 1;
}
.price_filter .ui-slider-range {background: #00d8ff none repeat scroll 0 0;}
.price_slider_amount > input[type="text"] {
    font-weight: 500;
    font-size: 14px;
    color: #aaa;
    letter-spacing: 5.5px;
    height: 40px;
    text-align: center;
    width: 280px;
    border: none !important;;
	font-family: 'Poppins', sans-serif;
}
.price_slider_amount label {
    font-weight: 500;
    font-size: 14px;
    color: #aaa;
	font-family: 'Poppins', sans-serif;
}
.price_slider_amount > input[type="text"]:focus {outline: 0}
.price_slider_amount > input[type="submit"] {outline: 0;}
.price_slider_amount {letter-spacing: 2px;}
.price_slider_amount > input[type="submit"] {
   	font-weight: 500;
    font-size: 14px;
    color: #aaa;
	font-family: 'Poppins', sans-serif;
}

/* .travel-btn */
.about-view.travel-btn{
	width: 180px;
	margin-right: 15px;
}

.about-btn {
    margin-top: 39px;
    margin-left: 300px;
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
 
#bs-example-navbar-collapse-1
{
	position: relative;
	left: 5%;
	padding: 1%;

}
#navbarSupportedContent
{
	position: absolute;
}
.navbar-brand > span
{
	position: absolute;
	left: 4%;
	bottom: 47%;
}
body
{
	background-image: url(image_fir.jpeg);
}


</style>

</head>

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

       <a class="navbar-brand" href="homepage.php">
    		<img src="images/v_favicon.png" width="30" height="30" id="v_favicon" class="d-inline-block align-top" alt="ViaVai"/>
    		<span>ViaVai</span>
  		</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="homepage.php">Book a Ticket <span class="sr-only">(current)</span></a></li>
        <li><a href="destinations.php">Discover Routes</a></li>
        <li><a href="join_our_member_club_login.php">Sign in</a></li>
    	<li>
        	<div id="navbarSupportedContent">
					<div class="container">
			          	<div class="text-center center-block">
			                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
			              <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
			              <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
			              <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
			      		</div>
			    	</div>
			 </div>
        </li>
      </ul>
  
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

		<!--travel-box start-->
		<section  class="travel-box" id="BOX">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-12">
        				<div class="single-travel-boxes">
        					<div id="desc-tabs" class="desc-tabs">

								<ul class="nav nav-tabs" role="tablist">

									<li role="presentation" class="active">
									 	<a href="#tours" aria-controls="tours" role="tab" data-toggle="tab">
									 		<i class="fa fa-tree"></i>
									 		one-way
									 	</a>
									</li>

									<li role="presentation">
									 	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">
									 		<i class="fa fa-plane"></i>
									 		round trip
									 	</a>
									</li>
								</ul>

        <!-- Tab panes -->
        <div class="tab-content">

        <div role="tabpanel" class="tab-pane active fade in" id="tours">
        <form action="homepage_searchResults_one_way.php" method="POST">


        <div class="tab-para">

        <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="single-tab-select-box">
           <h2>from</h2>
            <div class="travel-select-icon">
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
                        $query = "SELECT CountryName FROM countries";
                        $result2 = mysqli_query($con,$query);
                        $options = "";
                        if($result2){
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            $options = $options."<option>$row2[0]</option>";
                        }
                        }
                        else
                        {
                            echo "Error:".mysqli_error($con);
                        }
                        ?>
                        <select required="required" class="form-control" name="from_flight_select" id="from_flight_select">
                            <option value="">enter your location</option>
                         <?php echo $options;?>
                        </select>
            </div><!-- /.travel-select-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->

        <div class="col-lg-2 col-md-3 col-sm-4">
        <div class="single-tab-select-box">
        	<h2>Departure</h2>
        	<div class="travel-check-icon">
                <input required="required" placeholder="15/01/2018" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="departure_imera" id="departure_imera" >

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
                         ?>
        	</div><!-- /.travel-check-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->

        <div class="col-lg-2 col-md-1 col-sm-4">
        <div class="single-tab-select-box">
        	<h2>Adults</h2>
        	<div class="travel-select-icon">
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
                        $query = "SELECT Adults_Number FROM adults";
                        $result2 = mysqli_query($con,$query);
                        $options = "";
                        if($result2){
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            $options = $options."<option>$row2[0]</option>";
                        }
                        }
                        else
                        {
                            echo "Error:".mysqli_error($con);
                        }
                        ?>
                        <select required="required" name="adults" class="form-control">
                            <option value="">Adults</option>
                         <?php echo $options;?>
                        </select>
        	</div><!-- /.travel-select-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->

        <div class="col-lg-2 col-md-1 col-sm-4">
        <div class="single-tab-select-box">
        	<h2>Children</h2>
        	<div class="travel-select-icon">
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
                        $query = "SELECT Children_Number FROM children";
                        $result2 = mysqli_query($con,$query);
                        $options = "";
                        if($result2){
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            $options = $options."<option>$row2[0]</option>";
                        }
                        }
                        else
                        {
                            echo "Error:".mysqli_error($con);
                        }
                        ?>
                        <select required="required" name="children" class="form-control">
                            <option value="">Children</option>
                         <?php echo $options;?>
                        </select>
        	</div><!-- /.travel-select-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->

        <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="single-tab-select-box">
            <h2>to</h2>
            <div class="travel-select-icon">
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
                        $query = "SELECT CountryName FROM countries";
                        $result2 = mysqli_query($con,$query);
                        $options = "";
                        if($result2){
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            $options = $options."<option>$row2[0]</option>";
                        }
                        }
                        else
                        {
                            echo "Error:".mysqli_error($con);
                        }
                        ?>
                        <select required="required" class="form-control" name="to_flight_select" id="to_flight_select">
                    <option value="">enter your destination location</option>
                         <?php echo $options;?>
                        </select>
            </div><!-- /.travel-select-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-4">
        <div class="single-tab-select-box">
            <h2>class</h2>
            <div class="travel-select-icon">
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
                        $query = "SELECT Class_type FROM class";
                        $result2 = mysqli_query($con,$query);
                        $options = "";
                        if($result2){
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            $options = $options."<option>$row2[0]</option>";
                        }
                        }
                        else
                        {
                            echo "Error:".mysqli_error($con);
                        }
                        ?>
                        <select required="required" class="form-control" name="class" id="class">
                    <option value="">enter class</option>
                         <?php echo $options;?>
                        </select>
            </div><!-- /.travel-select-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-4">
        <div class="single-tab-select-box">
            <h2>Airline Company</h2>
            <div class="travel-select-icon">
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
                        $query = "SELECT Airline_Company FROM airlines";
                        $result2 = mysqli_query($con,$query);
                        $options = "";
                        if($result2){
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            $options = $options."<option>$row2[0]</option>";
                        }
                        }
                        else
                        {
                            echo "Error:".mysqli_error($con);
                        }
                        ?>
                        <select required="required" class="form-control" name="company" id="company">
                    <option value="">enter airline company</option>
                         <?php echo $options;?>
                        </select>
            </div><!-- /.travel-select-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->
        </div><!--/.row-->

        <div class="row">
        <div class="clo-sm-7">
        <div class="about-btn travel-mrt-0 pull-right">
        	<button name="search_one_way" class="about-view travel-btn">
        		search	
        	</button><!--/.travel-btn-->
        </div><!--/.about-btn-->
        </div><!--/.col-->

        </div><!--/.row-->

        </div><!--/.tab-para-->
        </form>
        </div><!--/.tabpannel-->















































        <div role="tabpanel" class="tab-pane fade in" id="flights">
        <form action="searchResults.php" method="POST">


        <div class="tab-para">
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="single-tab-select-box">

           <h2>from</h2>

        	<div class="travel-select-icon">
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
                        $query = "SELECT CountryName FROM countries";
                        $result2 = mysqli_query($con,$query);
                        $options = "";
                        if($result2){
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            $options = $options."<option>$row2[0]</option>";

                        }
                        }
                        else
                        {
                            echo "Error:".mysqli_error($con);
                        }


                        ?>
                        <select required class="form-control" name="from_flight_select" id="from_flight_select" >
                            <option value="">enter your location</option>
                         <?php echo $options;?>
                        </select>
        	</div><!-- /.travel-select-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->




        <div class="col-lg-2 col-md-3 col-sm-4">
        <div class="single-tab-select-box">
        	<h2>departure</h2>
        	<div class="travel-check-icon">
                    <input required="required" placeholder="12/01/2018" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="departure" id="departure" >
        		
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

                         ?>
        	</div><!-- /.travel-check-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->

        <div class="col-lg-2 col-md-3 col-sm-4">
        <div class="single-tab-select-box">
            <h2>return</h2>
            <div class="travel-check-icon">
                <!--data-toggle="datepicker"-->
                <input required="required" placeholder="15/01/2018" class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="imerominia" id="imerominia" >

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
                         ?>
            </div><!-- /.travel-check-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->


        <div class="col-lg-2 col-md-1 col-sm-4">
        <div class="single-tab-select-box">
        	<h2>adults</h2>
        	<div class="travel-select-icon">
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
                        $query = "SELECT Adults_Number FROM adults";
                        $result2 = mysqli_query($con,$query);
                        $options = "";
                        if($result2){
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            $options = $options."<option>$row2[0]</option>";

                        }
                        }
                        else
                        {
                            echo "Error:".mysqli_error($con);
                        }


                        ?>
                        <select required class="form-control" name="adults" id="adults">
                            <option value="">Adults</option>
                         <?php echo $options;?>
                        </select>
        	</div><!-- /.travel-select-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->

        <div class="col-lg-2 col-md-1 col-sm-4">
        <div class="single-tab-select-box">
        	<h2>children</h2>
        	<div class="travel-select-icon">
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
                        $query = "SELECT Children_Number FROM children";
                        $result2 = mysqli_query($con,$query);
                        $options = "";
                        if($result2){
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            $options = $options."<option>$row2[0]</option>";

                        }
                        }
                        else
                        {
                            echo "Error:".mysqli_error($con);
                        }


                        ?>

                        <select required class="form-control" name="children" id="children">
                            <option value="">Children</option>
                         <?php echo $options;?>
                        </select>
        	</div><!-- /.travel-select-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->

        </div><!--/.row-->

        <div class="row">
        <div class="col-lg-4 col-md-3 col-sm-12">
        <div class="single-tab-select-box">
        	<h2>to</h2>
        	<div class="travel-select-icon">
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
                        $query = "SELECT CountryName FROM countries";
                        $result2 = mysqli_query($con,$query);
                        $options = "";
                        if($result2){
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            $options = $options."<option>$row2[0]</option>";

                        }
                        }
                        else
                        {
                            echo "Error:".mysqli_error($con);
                        }


                        ?>
                        <select required class="form-control" name="to_flight_select" id="to_flight_select">
                    <option value="">enter your destination location</option>
                         <?php echo $options;?>
                        </select>
        	</div><!-- /.travel-select-icon -->

        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->


        <div class="col-lg-3 col-md-3 col-sm-4">
        <div class="single-tab-select-box">

        	<h2>class</h2>
        	<div class="travel-select-icon">
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
                        $query = "SELECT Class_type FROM class";
                        $result2 = mysqli_query($con,$query);
                        $options = "";
                        if($result2){
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            $options = $options."<option>$row2[0]</option>";

                        }
                        }
                        else
                        {
                            echo "Error:".mysqli_error($con);
                        }


                        ?>
                        <select required class="form-control" name="class" id="class">
                    <option value="">enter class</option>
                         <?php echo $options;?>
                        </select>
        	</div><!-- /.travel-select-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->
        <div class="col-lg-3 col-md-3 col-sm-4">
        <div class="single-tab-select-box">

            <h2>Airline Company</h2>
            <div class="travel-select-icon">
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
                        $query = "SELECT Airline_Company FROM airlines";
                        $result2 = mysqli_query($con,$query);
                        $options = "";
                        if($result2){
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            $options = $options."<option>$row2[0]</option>";

                        }
                        }
                        else
                        {
                            echo "Error:".mysqli_error($con);
                        }


                        ?>
                        <select required class="form-control" name="company" id="company">
                    <option value="">enter airline company</option>
                         <?php echo $options;?>
                        </select>
            </div><!-- /.travel-select-icon -->
        </div><!--/.single-tab-select-box-->
        </div><!--/.col-->
        <div class="clo-sm-5">
        <div class="about-btn pull-right">
        	<button id="search_but" name="search_FLIGHT" class="about-view travel-btn">
        		search	
        	</button><!--/.travel-btn-->
        </div><!--/.about-btn-->
        </div><!--/.col-->

        </div><!--/.row-->

        </div>
        </form>

        </div><!--/.tabpannel-->






        </div><!--/.tab content-->
        </div><!--/.desc-tabs-->
        </div><!--/.single-travel-box-->
        </div><!--/.col-->
        </div><!--/.row-->
        </div><!--/.container-->

        </section><!--/.travel-box-->
        <!--travel-box end-->

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

        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

<script>
    $( document ).ready(function(){

        $("select#from_flight_select").change(function()
        {
            var from_flight_select = $("#from_flight_select option:selected").val();
            alert("fdfdf");
        });

        $("select#departure").change(function()
        {
            var departure = $("#departure option:selected").val();
        });

        $("select#return").change(function()
        {
            var return = $("#return option:selected").val();
        });

        $("select#adults").change(function()
        {
            var adults = $("#adults option:selected").val();
        });

        $("select#children").change(function()
        {
            var children = $("#children option:selected").val();
        });

        $("select#to_flight_select").change(function()
        {
            var to_flight_select = $("#to_flight_select option:selected").val();
        });

        $("select#class").change(function()
        {
            var class = $("#class option:selected").val();
        });

        $("select#company").change(function()
        {
            var company = $("#company option:selected").val();
        });


     





    });


</script>



	</body>

</html>