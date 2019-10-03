<!DOCTYPE html>
<html lang="eng">
   <head>
      <title>Punarnava | Home</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Punarnava" />
      <link rel="icon" type="images/ico"  href="images/logo/favicon.png" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--gallery-->
      <link rel="stylesheet" href="css/lightbox.css">
      <!--//gallery-->
      <!-- pop-ups-->
      <link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
      <!-- //pop-ups-->
      <!--stylesheets-->
      <link href="css/style2.css" rel='stylesheet' type='text/css' media="all">
      <link href="css/style1.css" rel='stylesheet' type='text/css' media="all">
      <link href="css/custome.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <style>
          <style type="text/css">
		/*-- banner --*/
		.banner{
		    background: url(../images/banner3.jpg) no-repeat 0px -90px;
		    background-size: cover;
		    padding: 1em 0 5em;
		}
		/*-- top-nav --*/
.header {
    background: rgba(0, 0, 0, 0.4);
    padding: 1em 0;
}
.navbar-header h1{
	margin:0;
}
.navbar-header h1 a {
    color: #ffffff;
    text-decoration: none;
    display: block;
    margin: 0;
    font-size: 1em;
    font-family: 'Oswald', sans-serif;
}
nav.navbar.navbar-default {
    background: none !important;
    padding: 0 !important;
    margin: 0;
}
ul.nav.navbar-nav.navbar-right {
    margin: 1em 0 0 0;
}
ul.nav.navbar-nav.navbar-right li {
    margin: 0 1em;
}
ul.nav.navbar-nav.navbar-right li:nth-child(6) {
    margin-right: 0;
}
.navbar-default .navbar-nav > li > a {
    color: #FFFFFF;
    font-size: 1em;
    padding: 0;
    position: relative;
}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav li a.active {
    color: #fbb034;
}
/*-- //top-nav --*/
/* Effect 5: same word slide in */
.cl-effect-5 a {
	overflow: hidden;
	padding: 0 4px;
}

.cl-effect-5 a span {
	position: relative;
	display: inline-block;
	-webkit-transition: -webkit-transform 0.3s;
	-moz-transition: -moz-transform 0.3s;
	transition: transform 0.3s;
}

.cl-effect-5 a span::before {
	position: absolute;
	top: 100%;
	content: attr(data-hover);
	-webkit-transform: translate3d(0,0,0);
	-moz-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

.cl-effect-5 a:hover span,
.cl-effect-5 a:focus span {
	-webkit-transform: translateY(-100%);
	-moz-transform: translateY(-100%);
	transform: translateY(-100%);
}

/*-- banner-info --*/
.banner-info{
    padding: 8em 0;
}
.w3ls-text{
    padding: 3em 2em;
    border: solid 2px #FFFFFF;
    width: 60%;
    text-align: center;
    margin: 0 auto;
}
.w3ls-text h3{
	font-size: 2em;
    color: #FFFFFF;
    margin: 0;
    font-family: 'Oswald', sans-serif;
    letter-spacing: 1px;
}
.w3ls-text h5{
    font-size: 1.5em;
    text-transform: uppercase;
    margin: 0;
    position: relative;
    font-weight: 600;
    color: #fbb034;
    padding-bottom: 2em;
}
.w3ls-text h5:after{
    content: '';
    position: absolute;
    height: 2px;
    width: 10%;
    background: #FFFFFF;
    top: 39px;
    left: 280px;
}
.w3ls-text p{
	font-size:1em;
	line-height:1.8em;
	margin:2em 0 0 0;
	color:#FFFFFF;
}
/*--slider--*/
#slider2,
#slider3 {
  box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  margin: 0 auto;
}
.rslides_tabs li:first-child {
  margin-left: 0;
}
.rslides_tabs .rslides_here a {
  background: rgba(255,255,255,.1);
  color: #fff;
  font-weight: bold;
}
.events {
  list-style: none;
}
.callbacks_container {
  position: relative;
  float: left;
  width: 100%;
}
.callbacks {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
}
.callbacks li {
  position: absolute;
  width: 100%;
}
.callbacks img {
  position: relative;
  z-index: 1;
  height: auto;
  border: 0;
}
.callbacks .caption {
	display: block;
	position: absolute;
	z-index: 2;
	font-size: 20px;
	text-shadow: none;
	color: #fff;
	left: 0;
	right: 0;
	padding: 10px 20px;
	margin: 0;
	max-width: none;
	top: 10%;
	text-align: center;
}
.callbacks_nav {
    position: absolute;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    bottom: -50%;
    left: 0;
    opacity: 0.6;
    z-index: 3;
    text-indent: -9999px;
    overflow: hidden;
    text-decoration: none;
    width: 40px;
    height: 40px;
    background: transparent url("../images/arrows.png") no-repeat left top;
}
 .callbacks_nav:hover{
  	opacity: 0.3;
  }
.callbacks_nav.next {
  left: auto;
    background-position: right top;
  left: 95.5%;
 }
 .callbacks_nav.prev {
	right: auto;
	background-position:left top;
	left: 91%;
}
#slider3-pager a {
  display: inline-block;
}
#slider3-pager span{
  float: left;
}
#slider3-pager span{
	width:100px;
	height:15px;
	background:#fff;
	display:inline-block;
	border-radius:30em;
	opacity:0.6;
}
#slider3-pager .rslides_here a {
  background: #FFF;
  border-radius:30em;
  opacity:1;
}
#slider3-pager a {
  padding: 0;
}
#slider3-pager li{
	display:inline-block;
}
.rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
}
.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display:none;
  width: 100%;
  left: 0;
  top: 0;
}
.rslides li{
  position: relative;
  display: block;
  float: left;
}
.rslides img {
  height: auto;
  border: 0;
  }
.callbacks_tabs{
    list-style: none;
    position: absolute;
    bottom: -50%;
    z-index: 999;
    left: 0;
    padding: 0;
    margin: 0;
    display: block;
}
.slider-top span{
	font-weight:600;
}
.callbacks_tabs li{
  display: inline-block;
  margin: 0 .3em;
}
/*----*/
.callbacks_tabs a{
 visibility: hidden;
}
.callbacks_tabs a:after {
    content: "\f111";
  font-size: 0;
  font-family: FontAwesome;
  visibility: visible;
  display: block;
  height: 15px;
  width: 15px;
  display: inline-block;
  background: #fff;
  border: 2px solid #fff;
  border-radius:50%;
  -webkit-border-radius:50%;
  -o-border-radius:50%;
  -moz-border-radius:50%;
  -ms-border-radius:50%;
}
.callbacks_here a:after{
     background:#EFA52C;
    border: 2px solid #EFA52C;
}
/*-- //banner-info --*/
      </style>
   </head>
   <body class="body_background">
        
         
         
         <div class="banner">
             <div class="header-outs" id="header">
            <div class="header-w3layouts">
                <!--navigation section -->
                <?php include 'template/navbar.php'; ?>
                <!-- navbar ends here -->
                <div class="clearfix"> </div>
            </div>
        </div>
         <!--//navigation section -->
		<div class="banner-info">
			<div class="container">
				<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li id="callbacks1_s0" class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out 0s;">
								<div class="w3ls-text">
									<h5>Vivamus</h5>
									<h3>Cras ultrices lorem a hendrerit condimentum</h3>
									<p>Cras ultrices lorem a hendrerit condimentum. Sed at eros odio. Nulla justo arcu, rutrum a suscipit ut, fermentum ac massa. Donec sollicitudin facilisis lorem vitae luctus.</p>
								</div>
							</li>
							<li id="callbacks1_s1" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out 0s;">
								<div class="w3ls-text">
									<h5>Suscipit</h5>
									<h3>Donec tristique velit in ligula bibendum</h3>
									<p>Proin enim massa, vestibulum ac accumsan gravida, aliquet eget dui. Cras non accumsan velit. Proin malesuada neque mauris, at sagittis ligula rhoncus a.</p>
								</div>
							</li>
							<li id="callbacks1_s2" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out 0s;">
								<div class="w3ls-text">
									<h5>fermentum</h5>
									<h3>Quisque blandit orci vitae tellus molestie</h3>
									<p>Phasellus dictum hendrerit ante quis vestibulum. Fusce tellus est, pulvinar sed mollis et, eleifend eget sem. Integer auctor, velit ut tristique suscipit</p>
								</div>
							</li>
						</ul><a href="#" class="callbacks_nav callbacks1_nav prev">Previous</a><a href="#" class="callbacks_nav callbacks1_nav next">Next</a><ul class="callbacks_tabs callbacks1_tabs"><li class="callbacks1_s1 callbacks_here"><a href="#" class="callbacks1_s1">1</a></li><li class="callbacks1_s2"><a href="#" class="callbacks1_s2">2</a></li><li class="callbacks1_s3"><a href="#" class="callbacks1_s3">3</a></li></ul>
					</div>
					<script src="js/responsiveslides.min.js"></script>
					<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					 </script>
					<!--banner Slider starts Here-->
				</div>
			</div>
		</div>
	</div>
         
        
      <!-- ************************************** -->
      <!-- footer -->
      <?php include 'template/footer.php'?>
      <!--//footer -->
      <!-- *************************************** -->

      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <script src="js/jquery.vide.min.js"></script>
      <!--//js working-->
      <!-- gallery -->
      <script src="js/lightbox-plus-jquery.min.js"></script>
      <!-- //gallery --> 	
      <!-- For-Banner -->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
           $("#slider").responsiveSlides({
         	auto: true,
         	manualControls: '#slider3-pager',
           });
         });
          
      </script>
      <!-- //For-Banner -->
      
      <!--start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>