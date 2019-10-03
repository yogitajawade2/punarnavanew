<?php
require_once('includes/config.php');?>

<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Punarnava | Gallery</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="gallery" />
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
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--gallery-->
      <!--<link rel="stylesheet" href="css/lightbox.css">-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
      <link href="css/cards-gallery.css" rel='stylesheet' type='text/css' media="all">
      <!--//gallery-->
      <!-- pop-ups-->
      <link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
      <!-- //pop-ups-->
      <!--stylesheets-->
      <link href="css/style2.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
   </head>
   <body class="body_background">
      <!-- ---header img---->
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
            <ul class="rslides" id="slider" style="height:71px;">
               <li>
                  <div class="slider-img bg-slider">
                     <div class="container p-0 m-0" style="max-width: -webkit-fill-available;">
                        <div class="slider-info" style="background: rgba(85,145,47,0.8);padding: 12em 0 7em 0em;">
                           <!--<h1 class="text-center" style="color:white;">Gallery</h1>   -->
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
      <!-- //header img-->
       <!--gallery -->
      <section class="gallery-block cards-gallery">
	    <div class="container">
	        <div class="row">
	           <?php
                      $sql="select *from gallery ";
                      $result=mysqli_query($con,$sql);
                      while($row=mysqli_fetch_array($result)){
                      ?>    
               
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="admin/<?php echo $row['image1'] ;?>">
	                		<img src="admin/<?php echo $row['image1'] ?>" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#"><?php echo $row['caption'] ?></a></h6>
	                        <p class="text-muted card-text"><?php echo $row['description'] ?></p>
	                    </div>
	                </div>
	            </div>
	            <? } ?>
	             <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
						<a class="lightbox" href="../images/gallery1/2.jpg">
		                	<img src="../images/gallery1/2.jpg" alt="Card Image" class="card-img-top">
		                </a>
	                    <div class="card-body">
	                        <h6><a href="#">Flower</a></h6>
	                        <p class="text-muted card-text">All medicinal plants are native.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="../images/gallery1/1.jpg">
	                		<img src="../images/gallery1/1.jpg" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Tree</a></h6>
	                        <p class="text-muted card-text">Even a single tree on a big landscape should be protected. It can be a food source for many birds</p>
	                    </div>
	                </div>
	            </div>
	           <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="../images/gallery1/2.jpg">
	                		<img src="../images/gallery1/2.jpg" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Flower</a></h6>
	                        <p class="text-muted card-text">All medicinal plants are native.</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="../images/gallery1/3.jpg">
	                		<img src="../images/gallery1/3.jpg" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Tree</a></h6>
	                        <p class="text-muted card-text">Abundant source of nectar for birds and insects. Plant natives</p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-6 col-lg-4">
	                <div class="card border-0 transform-on-hover">
	                	<a class="lightbox" href="../images/gallery1/4.jpg">
	                		<img src="../images/gallery1/4.jpg" alt="Card Image" class="card-img-top">
	                	</a>
	                    <div class="card-body">
	                        <h6><a href="#">Star Fish</a></h6>
	                        <p class="text-muted card-text">Every specie has its own importance</p>
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
      <script src='js/jquery.min.js'></script>
      
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.cards-gallery', { animation: 'slideIn'});
    </script>
      <!--//js working-->
      <!-- gallery -->
      <!--<script src="js/lightbox-plus-jquery.min.js"></script>-->
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