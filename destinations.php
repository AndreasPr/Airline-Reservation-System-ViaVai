<!DOCTYPE html>
<html>
<head>
	<title>Destinations</title>

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
		<title>Destinations</title>

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









#accordion .panel{
    border: none;
    border-radius: 0;
    box-shadow: none;
   /* margin: 0 30px 10px 30px;*/
    overflow: hidden;
    position: relative;
}
#accordion .panel-heading{
    padding: 0;
    border: none;
    border-radius: 0;
    position: relative;
}
#accordion .panel-title a{
    display: block;
    padding: 15px 20px;
    margin: 0;
    background: #fe7725;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 1px;
    color: #fff;
    border-radius: 0;
    position: relative;
}
#accordion .panel-title a.collapsed{ background: #1c2336;}
#accordion .panel-title a:before,
#accordion .panel-title a.collapsed:before{
    content: "\f068";
    font-family: fontawesome;
    width: 30px;
    height: 30px;
    line-height: 25px;
    border-radius: 50%;
    background: #fe7725;
    font-size: 14px;
    font-weight: normal;
    color: #fff;
    text-align: center;
    border: 3px solid #fff;
    position: absolute;
    top: 10px;
    right: 14px;
}
#accordion .panel-title a.collapsed:before{
    content: "\f067";
    background: #ababab;
    border: 4px solid #626262;
}
#accordion .panel-title a:after,
#accordion .panel-title a.collapsed:after{
    content: "";
    width: 17px;
    height: 7px;
    background: #fff;
    position: absolute;
    top: 22px;
    right: 0;
}
#accordion .panel-title a.collapsed:after{
    width: 19px;
    background: #ababab;
}
#accordion .panel-body{
    border-left: 3px solid #fe7725;
    border-top: none;
    background: #fff;
    /*font-size: 15px;*/
    color: #1c2336;
    line-height: 27px;
    position: relative;
}
#accordion .panel-body:before{
    content: "";
    height: 3px;
    width: 50%;
    background: #fe7725;
    position: absolute;
    bottom: 0;
    left: 0;
}
#accordion .panel-body p{
  padding: 10px;
}






.column {
    float: left;
    width: 50%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.grammi::after {
    content: "";
    clear: both;
    display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
    .column {
        width: 100%;
    }
}

#ads
{
    position: relative;
    left: 15%;
}

#service
{
    position: relative;
    left: 10%;
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


    
<h3 style="color: grey; font-weight: normal; margin-left: 13%;">Popular Destinations</h3>

<hr style="border: 0; height: 0; border-top: 1px solid rgba(0, 0, 0, 0.1); border-bottom: 1px solid rgba(255, 255, 255, 0.3); width: 80%;">

<h5 style="margin-left: 30%; color: gray; font-size: 85%;">Estimated lowest prices only. Found in the last 15 days</h5>





    
<div class="grammi">


 <section id="service" class="column">
    <div class="container">
    <div class="row">
        <div class="col-md-6">

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading1">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                Austria
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                        <div class="panel-body">
                            <img src="images/countries/Vienna.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Vienna</h4>
                            <h5>Diverse and energetic. Vienna is one of the most international cities in the world and is like a small sample of the whole world.</h5>
                            <a href="destinations_austria.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading2">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Russia
                            </a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                        <div class="panel-body">
                            <img src="images/countries/russia.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Kremlin</h4>
                            <h5>Being the entertainment capitol of the world, any given day or night of the week can be an adventure if you know the right people.</h5>
                            <a href="destinations_russia.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading3">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Belgium
                            </a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                        <div class="panel-body">
                            <img src="images/countries/belgium.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>City of Brussels</h4>
                            <h5>Often overlooked by tourists, Brussels is one of the more attractive cities in the US and has a vibrant culinary scene.</h5>
                            <a href="destinations_belgium.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading4">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Bosnia and Herzegovina
                            </a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                        <div class="panel-body">
                           <img src="images/countries/bosnia.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Sarajevo</h4>
                            <h5>Truly one of the best cities in the world. Full of diversity, great food, restaurants, bars, cool people, culture, history, and so much more.</h5>
                            <a href="destinations_bosnia.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading5">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Bulgaria
                            </a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                        <div class="panel-body">
                           <img src="images/countries/bulgaria.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Sofia</h4>
                            <h5>I always have a good time here. There's something crazy and fun about exploring the strip, people watching and enjoy the entertainment in the city</h5>
                            <a href="destinations_bulgaria.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></div></a>
                    </div>
                </div>


                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading6">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                Croatia
                            </a>
                        </h4>
                    </div>
                    <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                        <div class="panel-body">
                           <img src="images/countries/croatia.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Zagreb</h4>
                            <h5>Once you get used to rainy weather 97.4 percent of the time (or so it seems) this relaxed yet culturally vibrant city along Puget Sound has a lot to offer.</h5>
                            <a href="destinations_croatia.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>                        </div>
                    </div>
                </div>


                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading7">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                Cyprus
                            </a>
                        </h4>
                    </div>
                    <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                        <div class="panel-body">
                           <img src="images/countries/cyprus.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Nicosia</h4>
                            <h5>Nicosia will always be in my heart. Probably the biggest secret in the Cyprus. The bar and restaurant scene is out of this world.</h5>
                            <a href="destinations_cyprus.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading8">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                Czech Republic
                            </a>
                        </h4>
                    </div>
                    <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                        <div class="panel-body">
                           <img src="images/countries/czech.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Prague</h4>
                            <h5>Where else can you go to the beach, the desert, mountains, and then a downtown bar all in one day? Few places, but Prague is one.</h5>
                            <a href="destinations_czech.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading9">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                Denmark
                            </a>
                        </h4>
                    </div>
                    <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                        <div class="panel-body">
                           <img src="images/countries/denmark.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Copenhagen</h4>
                            <h5>Copenhagen is a really cool old West town, with lots of charm. It is the gateway to great skiing in the Tetons, both at Grand Targhee</h5>
                            <a href="destinations_denmark.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading10">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                Finland
                            </a>
                        </h4>
                    </div>
                    <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                        <div class="panel-body">
                           <img src="images/countries/finland.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Helsinki</h4>
                            <h5>Helsinki is a fun, modern city full of southern charm. Walking its historic streets you'll find great restaurants and a vibrant arts scene.</h5>
                            <a href="destinations_finland.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading11">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                France
                            </a>
                        </h4>
                    </div>
                    <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                        <div class="panel-body">
                           <img src="images/countries/france.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Paris</h4>
                            <h5>Paris is more than the Eiffel Tower and the Louvre. It is a vital and beautiful city. It is a symbol of fashion, food and revolution all in one</h5>
                            <a href="destinations_france.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading12">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                Germany
                            </a>
                        </h4>
                    </div>
                    <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                        <div class="panel-body">
                           <img src="images/countries/germany.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Berlin</h4>
                            <h5>From its museums to great restaurants and friendly people, Berlin is the heartland.</h5>
                            <a href="destinations_germany.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading13">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                Greece
                            </a>
                        </h4>
                    </div>
                    <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                        <div class="panel-body">
                           <img src="images/countries/athens.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Athens</h4>
                            <h5>Athens is a wonderful place to live, work, and play. No matter the season, there is ALWAYS something to see or do.</h5>
                            <a href="destinations_greece.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading14">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                Iceland
                            </a>
                        </h4>
                    </div>
                    <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                        <div class="panel-body">
                           <img src="images/countries/iceland.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Reykjavik</h4>
                            <h5>Reykjavik is, hands down, my favorite city in the world.</h5>
                            <a href="destinations_iceland.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading15">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                Ireland
                            </a>
                        </h4>
                    </div>
                    <div id="collapse15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading15">
                        <div class="panel-body">
                           <img src="images/countries/ireland.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Dublin</h4>
                            <h5>So many interesting things to see and do, and the food! oh my! This town has heart and personality to spare.</h5>
                            <a href="destinations_ireland.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading16">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                Italy
                            </a>
                        </h4>
                    </div>
                    <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                        <div class="panel-body">
                           <img src="images/countries/italy.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Rome</h4>
                            <h5>Diverse and energetic. Rome is one of the most international cities in the world and is like a small sample of the whole world.</h5>
                            <a href="destinations_italy.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading17">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                Malta
                            </a>
                        </h4>
                    </div>
                    <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
                        <div class="panel-body">
                           <img src="images/countries/malta.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Valletta</h4>
                            <h5>Being the entertainment capitol of the world, any given day or night of the week can be an adventure if you know the right people.</h5>
                            <a href="destinations_malta.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading18">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                Moldova
                            </a>
                        </h4>
                    </div>
                    <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
                        <div class="panel-body">
                           <img src="images/countries/moldova.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Chișinău</h4>
                            <h5>Often overlooked by tourists, Chișinău is one of the more attractive cities in the Moldova and has a vibrant culinary scene.</h5>
                            <a href="destinations_moldova.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading19">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                Netherlands
                            </a>
                        </h4>
                    </div>
                    <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
                        <div class="panel-body">
                           <img src="images/countries/netherlands.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Amsterdam</h4>
                            <h5>Truly one of the best cities in the world. Full of diversity, great food, restaurants, bars, cool people, culture, history, and so much more.</h5>
                            <a href="destinations_netherlands.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading20">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                Norway
                            </a>
                        </h4>
                    </div>
                    <div id="collapse20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading20">
                        <div class="panel-body">
                           <img src="images/countries/norway.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Oslo</h4>
                            <h5>I always have a good time here. There's something crazy and fun about exploring the strip, people watching and enjoy the entertainment in the city</h5>
                            <a href="destinations_norway.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading21">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                Poland
                            </a>
                        </h4>
                    </div>
                    <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">
                        <div class="panel-body">
                           <img src="images/countries/poland.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Warsaw</h4>
                            <h5>Warsaw is a vital and beautiful city. It is a symbol of fashion, food and revolution all in one</h5>
                            <a href="destinations_poland.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading22">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                Portugal
                            </a>
                        </h4>
                    </div>
                    <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading22">
                        <div class="panel-body">
                           <img src="images/countries/portugal.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Lisbon</h4>
                            <h5>Once you get used to rainy weather 97.4 percent of the time (or so it seems) this relaxed yet culturally vibrant city along Puget Sound has a lot to offer.</h5>
                            <a href="destinations_portugal.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading23">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                Serbia
                            </a>
                        </h4>
                    </div>
                    <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">
                        <div class="panel-body">
                            <img src="images/countries/serbia.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Belgrade</h4>
                            <h5>Belgrade will always be in my heart. Probably the biggest secret in the Serbia. The bar and restaurant scene is out of this world.</h5>
                            <a href="destinations_serbia.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading24">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                Slovakia
                            </a>
                        </h4>
                    </div>
                    <div id="collapse24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading24">
                        <div class="panel-body">
                           <img src="images/countries/slovakia.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Bratislava</h4>
                            <h5>Where else can you go to the beach, the desert, mountains, and then a downtown bar all in one day? Few places, but Bratislava is one.</h5>
                            <a href="destinations_slovakia.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading25">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                Slovenia
                            </a>
                        </h4>
                    </div>
                    <div id="collapse25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading25">
                        <div class="panel-body">
                           <img src="images/countries/slovenia.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Ljubljana</h4>
                            <h5>Ljubljana is a really cool old West town, with lots of charm. It is the gateway to great skiing in the Tetons, both at Grand Targhee</h5>
                            <a href="destinations_slovenia.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading26">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                Spain
                            </a>
                        </h4>
                    </div>
                    <div id="collapse26" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading26">
                        <div class="panel-body">
                           <img src="images/countries/spain.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Madrid</h4>
                            <h5>Madrid is a fun, modern city full of southern charm. Walking its historic streets you'll find great restaurants and a vibrant arts scene.</h5>
                            <a href="destinations_spain.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading27">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                Sweden
                            </a>
                        </h4>
                    </div>
                    <div id="collapse27" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading27">
                        <div class="panel-body">
                           <img src="images/countries/sweden.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Stockholm</h4>
                            <h5>From its museums to great restaurants and friendly people, Indy is the heartland.</h5>
                            <a href="destinations_sweden.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading28">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                Switzerland
                            </a>
                        </h4>
                    </div>
                    <div id="collapse28" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading28">
                        <div class="panel-body">
                           <img src="images/countries/switzerland.png" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Bern</h4>
                            <h5>Bern is a wonderful place to live, work, and play. No matter the season, there is ALWAYS something to see or do.</h5>
                            <a href="destinations_switzerland.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading29">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse29" aria-expanded="false" aria-controls="collapse29">
                                Ukraine
                            </a>
                        </h4>
                    </div>
                    <div id="collapse29" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading29">
                        <div class="panel-body">
                           <img src="images/countries/ukraine.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Kiev</h4>
                            <h5>Kiev is, hands down, my favorite city in the world.</h5>
                            <a href="destinations_ukraine.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>

                                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading30">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                Turkey
                            </a>
                        </h4>
                    </div>
                    <div id="collapse30" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading30">
                        <div class="panel-body">
                           <img src="images/countries/turkey.jpg" alt="Austria" class="img-thumbnail" width="50%"/>
                            <h4>Ankara</h4>
                            <h5>So many interesting things to see and do, and the food! oh my! This town has heart and personality to spare.</h5>
                            <a href="destinations_turkey.php"><button type="button" class="btn btn-success" style="float: right; left: 20%; ">View</button></a>
                        </div>
                    </div>
                </div>
<br><br>
<h4>If you believe any information on this page is incorrect then please contact ViaVai.</h4>
            </div>
        </div>
    </div>
</div>
</section>





<section id = "ads" class="column">

<div class="card" style="width: 35rem;">
  <div class="card-body">
    <h3 class="card-title">70% Off All Flights</h3>
    <h6 class="card-subtitle mb-2 text-muted">Flight Sale Just Announced Where Flights are on Sale 24/7.</h6>
    <p class="card-text">+1 855-258-5310</p>
    <a href="#" class="card-link">www.travel.deals/ViaVai</a>
  </div>
</div>

<div class="card" style="width: 35rem;">
  <div class="card-body">
    <h3 class="card-title">Flights to Vienna - Book now with Airlines</h3>
    <h6 class="card-subtitle mb-2 text-muted">Book the lowest prices online and discover the best experience on-board!</h6>
    <p class="card-text">+1 855-258-8975</p>
    <a href="#" class="card-link">flights.airlines.com/Flights_to/Vienna</a>
  </div>
</div>

<div class="card" style="width: 35rem;">
  <div class="card-body">
    <h3 class="card-title">Cheap Kremlin Round Trip - Searching for Cheap Flights?</h3>
    <h6 class="card-subtitle mb-2 text-muted">Grab Our Cheapest Flight Deals to Athens. Pay Less & Save More. Book Today!</h6>
    <p class="card-text">+1 855-258-1234</p>
    <a href="#" class="card-link">www.cheapoair.com/Kremlin/Cheap-Flights
+1 </a>
  </div>
</div>

<div class="card" style="width: 35rem;">
  <div class="card-body">
    <h3 class="card-title">Cheap Flights from Madrid, Spain to Europe, from 60$ Round trip</h3>
    <h6 class="card-subtitle mb-2 text-muted">Find Cheap, Last Minute Flights From Greece. Book Right Now!</h6>
    <p class="card-text">+1 855-258-3457</p>
    <a href="#" class="card-link">www.comparetrips.com/</a>
  </div>
</div>

<div class="card" style="width: 35rem;">
  <div class="card-body">
    <h3 class="card-title">Cheap Flight Deals - Fast & Easy Airline Tickets</h3>
    <h6 class="card-subtitle mb-2 text-muted">Find Low Rates on 400+ Airlines. Save up to $603 by Booking a Flight + Hotel!</h6>
    <p class="card-text">+1 855-258-9530</p>
    <a href="#" class="card-link">www.experience.com/Flight-Deals</a>
  </div>
</div>

</section>

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