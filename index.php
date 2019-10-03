<?php 
require_once 'template/config.php';
include 'template/visitors.php'; 
?>


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
      <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
      <!--//stylesheets-->
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <style>
          
      </style>
   </head>
   <body>
      <div class="header-outs" id="header">
         <div class="header-w3layouts">
            <!--navigation section -->
            <?php include 'template/navbar.php'; ?>
            <!-- navbar ends here -->
            <div class="clearfix"> </div>
         </div>
         <!--//navigation section -->
         <div class="slider">
            <!-- Slideshow 3 -->
            <ul class="rslides" id="slider">
               <li>
                  <div class="slider-img one-img">
                     <div class="container">
                        <div class="slider-info" style="text-shadow: 2px 2px 4px #000000;">
                           <h5 class="display-3">Punarnava Ecological Services</h5>
                           <h4>and Eco-design Solutions</h4>
                           <!--<div class="outs_more-buttn mt-md-4 mt-3">
                              <a href="#" data-toggle="modal" data-target="#eagle">Read More</a>
                           </div>-->
                        </div>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="slider-img two-img">
                     <div class="container">
                        <div class="slider-info" style="text-shadow: 2px 2px 4px #000000;">
                           <h4>Punarnava</h4>
                           <h5>Adopt the pace of nature</h5>
                           <!-- <p>Nature gives to every time and season some beauties of its own.</p> -->
                           <!--<div class="outs_more-buttn mt-md-4 mt-3">
                              <a href="#" data-toggle="modal" data-target="#butterfly">Read More</a>
                           </div>-->
                        </div>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="slider-img three-img" style="background-position: 5% 51%;">
                     <div class="container">
                        <div class="slider-info" style="text-shadow: 2px 2px 4px #000000;">
                           <h4>Survey documentation</h4>
                           <h5>analysis</h5>
                        </div>
                        <!--<div class="outs_more-buttn mt-md-4 mt-3">
                           <a href="#" data-toggle="modal" data-target="#Sun-bird">Read More</a>
                        </div>-->
                     </div>
                  </div>
               </li>
            </ul>
            <!-- Slideshow 3 Pager -->
           <!-- <ul id="slider3-pager">
               <li><a href="#"></a></li>
               <li><a href="#"></a></li>
               <li><a href="#"></a></li>
            </ul>-->
         </div>
      </div>
      <!--//Slideshow 3 Pager -->
      <!-- //banner -->
      <!--********************************-->
      <!--our services-->
      
      <section class="service py-1 body_background" id="service">
      <div class="container py-3">
        <!--<h1 class="text-center text-white">Our Services</h1>   -->
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 service-grid-wthree text-center mb-xs-3 mb-sm-3 mb-3">
            <div class="ser-Agriculture-grid bg-col">
              <div class="about-icon mb-md-4 mb-3">
               <div class="ser-inner-sub">
                    <span class="fa fa-pagelines" aria-hidden="true"></span>
                </div>
              </div>
              <div class="ser-sevice-grid">
                <h4 class="pb-3 ">SURVEY </h4>
                <p>The aim of these surveys is to provide......</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 service-grid-wthree text-center mb-xs-3 mb-sm-3 mb-3">
            <div class="ser-Agriculture-grid bg-col">
              <div class="about-icon mb-md-4 mb-3">
                <div class="ser-inner-sub">
                    <span class="fa fa-pagelines" aria-hidden="true"></span>
                </div>
              </div>
              <div class="ser-sevice-grid">
                <h4 class="pb-3">HABITAT DEVELOPMENT</h4>
                <p>An ecosystem is a very complex system......</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 service-grid-wthree text-center mb-xs-3 mb-sm-3 mb-3">
            <div class="ser-Agriculture-grid bg-col">
              <div class="about-icon mb-md-4 mb-3">
               <div class="ser-inner-sub">
                    <span class="fa fa-pagelines" aria-hidden="true"></span>
                </div>
              </div>
              <div class="ser-sevice-grid">
                <h4 class="pb-3">LANDSCAPE</h4>
                <p>Zoning within the site depends upon the site......</p>
              </div>
            </div>
          </div>
          <!--<div class="col-lg-4 col-md-6 col-sm-6 mt-lg-4 mt-3 service-grid-wthree text-center">-->
          <!--  <div class="ser-Agriculture-grid">-->
          <!--    <div class="about-icon mb-md-4 mb-3">-->
          <!--      <span class="fa fa-viadeo" aria-hidden="true"></span>-->
          <!--    </div>-->
          <!--    <div class="ser-sevice-grid">-->
          <!--      <h4 class="pb-3">Always Fresh</h4>-->
          <!--      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna</p>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <!--<div class="col-lg-4 col-md-6 col-sm-6 mt-lg-4 mt-3 service-grid-wthree text-center">-->
          <!--  <div class="ser-Agriculture-grid">-->
          <!--    <div class="about-icon mb-md-4 mb-3">-->
          <!--      <span class="fa fa-pagelines" aria-hidden="true"></span>-->
          <!--    </div>-->
          <!--    <div class="ser-sevice-grid">-->
          <!--      <h4 class="pb-3">Garden Care</h4>-->
          <!--      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna</p>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          <!--<div class="col-lg-4 col-md-6 col-sm-6 mt-lg-4 mt-3 service-grid-wthree text-center">-->
          <!--  <div class="ser-Agriculture-grid">-->
          <!--    <div class="about-icon mb-md-4 mb-3">-->
          <!--      <span class="fa fa-leaf" aria-hidden="true"></span>-->
          <!--    </div>-->
          <!--    <div class="ser-sevice-grid">-->
          <!--      <h4 class="pb-3">Plant Renovation</h4>-->
          <!--      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna</p>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
      </div>
      <!--<div class="text-center py-3">-->
      <!--  <a href="services.php"> <button class="btn btn-success btn btn-primary btn-lg">Read more....</button></a>-->
      <!--</div>-->
    </section>
      
      <!--//our services-->
      
      <!-- ************************************** -->
      <!---------------about section--------------------------------->
    <section class="about  py-1 body_background">
        <div class="container" style="background:rgba(2,2,2,0.4)">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-5 col-lg-4 col-xl-4 border-right">
                    <div class="panel panel-default">
                        <div class="text-center text-white my-3"><h3 class"text-white">News</h3></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="demo1">
                                        <?php
                                            for($i=0;$i<10;$i++)
                                            {
                                        ?>
                                        <li class="news-item">
                                            <table cellpadding="4">
                                                <tr class="border-bottom border-white">
                                                    <td><img src="images/bird.jpg" width="60" class="img-circle" /></td>
                                                    <td class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#" class="text-muted">Read more...</a></td>
                                                </tr>
                                            </table>
                                        </li>
                                        <?php } ?>
                                        <!--<li class="news-item ">-->
                                        <!--    <table cellpadding="4">-->
                                        <!--        <tr class="border-bottom border-white">-->
                                        <!--            <td><img src="images/bird.jpg" width="60" class="img-circle" /></td>-->
                                        <!--            <td class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#" class="text-muted">Read more...</a></td>-->
                                        <!--        </tr>-->
                                        <!--    </table>-->
                                        <!--</li>-->
                                        <!--<li class="news-item">-->
                                        <!--    <table cellpadding="4">-->
                                        <!--        <tr class="border-bottom border-white">-->
                                        <!--            <td><img src="images/bird.jpg" width="60" class="img-circle" /></td>-->
                                        <!--            <td class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#" class="text-muted">Read more...</a></td>-->
                                        <!--        </tr>-->
                                        <!--    </table>-->
                                        <!--</li>-->
                                        <!--<li class="news-item">-->
                                        <!--    <table cellpadding="4">-->
                                        <!--        <tr class="border-bottom border-white">-->
                                        <!--            <td><img src="images/bird.jpg" width="60" class="img-circle" /></td>-->
                                        <!--            <td class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#" class="text-muted">Read more...</a></td>-->
                                        <!--        </tr>-->
                                        <!--    </table>-->
                                        <!--</li>-->
                                        <!--<li class="news-item">-->
                                        <!--    <table cellpadding="4">-->
                                        <!--        <tr class="border-bottom border-white">-->
                                        <!--            <td><img src="images/bird.jpg" width="60" class="img-circle" /></td>-->
                                        <!--            <td class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#" class="text-muted">Read more...</a></td>-->
                                        <!--        </tr>-->
                                        <!--    </table>-->
                                        <!--</li>-->
                                        <!--<li class="news-item">-->
                                        <!--    <table cellpadding="4">-->
                                        <!--        <tr class="border-bottom border-white">-->
                                        <!--            <td><img src="images/bird.jpg" width="60" class="img-circle" /></td>-->
                                        <!--            <td class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#" class="text-muted">Read more...</a></td>-->
                                        <!--        </tr>-->
                                        <!--    </table>-->
                                        <!--</li>-->
                                        <!--<li class="news-item">-->
                                        <!--    <table cellpadding="4" >-->
                                        <!--        <tr class="border-bottom border-white">-->
                                        <!--            <td><img src="images/bird.jpg" width="60" class="img-circle" /></td>-->
                                        <!--            <td class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#" class="text-muted">Read more...</a></td>-->
                                        <!--        </tr>-->
                                        <!--    </table>-->
                                        <!--</li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--<div class="panel-footer card-footer"> </div>-->
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-7 col-lg-8 col-xl-8">
                    <div class="text-center text-white my-3"><h3 class"text-white">About</h3></div>
                    <p class="text-justify text-white">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                        type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
                        passages, 
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                    </p>
                    <p class="text-justify text-white">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                        type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
                        passages, 
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                    </p>
                    <p class="text-justify text-white">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of 
                        type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
                        
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!---------------ends about section--------------------------------->
    <!--******************************************-->
    <!------------------event start------------>
    <section class="py-lg-3 py-md-3 py-sm-3 py-1 body_background">
         <div class="container py-lg-3 py-md-3 py-sm-3 py-1">
            <div class="row">
                <div class="text-center text-white py-3 col-12" style="background:rgba(2,2,2,0.4)">
                    <h3 class"text-white">Events</h3>
                </div>
               <div class="col-lg-6 col-md-6 blog-by-blog border-grid-right border-grid-bottom">
                  <div class="row">
                     <div class="col-lg-4">
                        <img src="images/blog/Parrot.jpg" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-8 col-lg-8 blog-w3layouts-grids ">
                        <div class="blog-matter mb-3">
                           <h6><a href="#" data-toggle="modal" data-target="#exampleModalLive" class="text-white">New Bird</a></h6>
                           <h5 class="mt-2">
                              <a href="#about" class="text-light"> November 11 2017</a>
                           </h5>
                        </div>
                        <div class="event-blog-w3pvt mt-md-4 mt-3 ">
                           <p>Suspendisse tincidunt velit velit sagittis vehicula. Duis posuere  mollis iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 blog-by-blog border-grid-bottom">
                  <div class="row">
                     <div class="col-lg-4">
                        <img src="images/blog/Parrot.jpg" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-8 col-lg-8 blog-w3layouts-grids">
                        <div class="blog-matter mb-3">
                           <h6><a href="#" data-toggle="modal" data-target="#exampleModalLive" class="text-white">Original And Exotic Bird</a></h6>
                           <h5 class="mt-2">
                              <a href="#about" class="text-light"> November 11 2017</a>
                           </h5>
                        </div>
                        <div class="event-blog-w3pvt mt-md-4 mt-3 p-0">
                           <p>Suspendisse tincidunt velit velit sagittis vehicula. Duis posuere  mollis iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6 col-md-6 blog-by-blog  border-grid-right ">
                  <div class="row">
                     <div class="col-lg-4">
                        <img src="images/blog/Parrot.jpg" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-8 col-lg-8 blog-w3layouts-grids">
                        <div class="blog-matter mb-3">
                           <h6><a href="#" data-toggle="modal" data-target="#exampleModalLive" class="text-white"> Pet Bird</a></h6>
                           <h5 class="mt-2">
                              <a href="#about" class="text-light"> November 11 2017</a>
                           </h5>
                        </div>
                        <div class="event-blog-w3pvt mt-md-4 mt-3 p-0">
                           <p>Suspendisse tincidunt velit velit sagittis vehicula. Duis posuere  mollis iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 blog-by-blog ">
                  <div class="row">
                     <div class="col-lg-4">
                        <img src="images/blog/Parrot.jpg" class="img-fluid" alt="">
                     </div>
                     <div class="col-lg-8 col-lg-8 blog-w3layouts-grids">
                        <div class="blog-matter mb-3">
                           <h6><a href="#" data-toggle="modal" data-target="#exampleModalLive" class="text-white">Trained bird </a></h6>
                           <h5 class="mt-2">
                              <a href="#about" class="text-light"> April 16 2020</a>
                           </h5>
                        </div>
                        <div class="event-blog-w3pvt mt-md-4 mt-3 p-0">
                           <p>Suspendisse tincidunt velit velit sagittis vehicula. Duis posuere  mollis iaculis.Lorem ipsum dolor sit amet, consectetur adipiscing  </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
    <!------------------event start------------>
    <!--***********************************************-->
      <!-- footer -->
      <?php include 'template/footer.php'?>
      <!--//footer -->
      <!-- *************************************** -->
      
      <!--js working-->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.bootstrap.newsbox.min.js"></script>
      <script type="text/javascript">
        $(function () {
        $(".demo1").bootstrapNews({
        newsPerPage: 5,
        autoplay: true,
        pauseOnHover:true,
        direction: 'up',
        newsTickerInterval: 4000,
        onToDo: function () {
        //console.log(this);
        }
        });
        });
</script>
      <!--//js working-->	
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
   </body>
</html>