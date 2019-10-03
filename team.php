<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Punarnava | Contact</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Birds Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
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
      <!--//stylesheets-->
      <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
      <style>
         .bg-slider
         {
            background: url(images/flower-bg.jpg) no-repeat 0px 0px;
            min-width: 100%;
            min-height: 203px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;

         }
         .f1
         {
            box-shadow: 7px 7px 10px 0 rgba(76, 110, 245, .1);
        	text-align:center;
        }
        
        
        
        
      </style>
   </head>
   <body>
      <div class="header-outs" id="header">
         <div class="header-w3layouts">
            <!--navigation section -->
            <?php include 'template/navbar.php' ?>
            <!-- navbar ends here -->
            <div class="clearfix"> </div>
         </div>
         <!--//navigation section -->
         <div class="slider">
            <!-- Slideshow 3 -->
            <ul class="rslides" id="slider" style="height:94px;">
               <li>
                  <div class="slider-img bg-slider">
                     <div class="container p-0 m-0" style="max-width: -webkit-fill-available;">
                        <div class="slider-info" style="background: rgba(85,145,47,0.8);padding: 12em 0 7em 0em;">
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
      <section>
          <div class="container">
              <div class="row">
                  <div class="column">
                      <div class="col-md-3">
                          <div class="card">
                              <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
                              <div class="container">
                                <h2>Jane Doe</h2>
                                <p class="title">CEO & Founder</p>
                                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                                <p>example@example.com</p>
                                <p><button class="button">Contact</button></p>
                              </div>
                            </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>


      <!-- footer -->
      <?php include 'template/footer.php'?>
      <!--//footer -->
      
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
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
      <!-- about Tabs -->
      <script>
         $(function() {
         var $tabButtonItem = $('#tab-button li'),
            $tabSelect = $('#tab-select'),
            $tabContents = $('.tab-contents'),
            activeClass = 'is-active';
         
         $tabButtonItem.first().addClass(activeClass);
         $tabContents.not(':first').hide();
         
         $tabButtonItem.find('a').on('click', function(e) {
          var target = $(this).attr('href');
         
          $tabButtonItem.removeClass(activeClass);
          $(this).parent().addClass(activeClass);
          $tabSelect.val(target);
          $tabContents.hide();
          $(target).show();
          e.preventDefault();
         });
         
         $tabSelect.on('change', function() {
          var target = $(this).val(),
              targetSelectNum = $(this).prop('selectedIndex');
         
          $tabButtonItem.removeClass(activeClass);
          $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
          $tabContents.hide();
          $(target).show();
         });
         });
      </script>
      <!--//about Tabs -->
      <!--pop-up-box video-->
      <script src="js/jquery.magnific-popup.js"></script>
      <script>
         $(document).ready(function() {
         $('.popup-with-zoom-anim').magnificPopup({
         type: 'inline',
         fixedContentPos: false,
         fixedBgPos: true,
         overflowY: 'auto',
         closeBtnInside: true,
         preloader: false,
         midClick: true,
         removalDelay: 300,
         mainClass: 'my-mfp-zoom-in'
         });
         
         });
      </script>
      <!-- //pop-up-box video -->
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