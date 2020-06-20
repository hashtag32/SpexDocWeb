<?php

/**
 * Template Name: Landing Page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


// Skip the front page

get_header();
?>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Creative - Start Bootstrap Theme</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="https://dronorder.net/wp-content/themes/twentytwenty/assets/img/favicon.ico" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
	<!-- Third party plugin CSS-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bootstrap_styles.css" />
	<!-- Own_styles has higher priority (1. Own, then Bootstrap, then Wordpress) -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/own_styles.css" />


	<!-- Load Leaflet from CDN-->
	<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet/dist/leaflet-src.js"></script>

	<!-- Load Esri Leaflet from CDN -->
	<script src="https://unpkg.com/esri-leaflet"></script>

	<!-- Esri Leaflet Geocoder -->
	<link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder/dist/esri-leaflet-geocoder.css">
	<script src="https://unpkg.com/esri-leaflet-geocoder"></script>


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>


</head>

<body id="page-top">

	<!-- Masthead-->
	<header class="masthead">
		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center text-center">
				<div class="col-lg-10 align-self-end">
					<div class="frontpage-logo">
						<?php twentytwenty_site_logo(); ?>
					</div>
					<div class="frontpage-title">Dronorder</div>
					<hr class="divider my-4" />
				</div>
				<div class="col-lg-8 align-self-baseline">
					<div class="frontpage-subtitle"> Order a drone delivery flight </div>
					<div class="has-text-align-center button-wrap">
						<a class=" smart-button" value="letsgo-button" href="#scheduleFlight">Let's Go</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Schedule your drone delivery -->
	<section class="page-section bg-primary" id="scheduleFlight">
		<div class="container">
			<h2 class="own-h2 has-text-align-center" style="font-size:40px;font-weight:600;color:black;padding:30px">Schedule your drone delivery</h2>

			<form method="post" action="" class="schedule_flight_form" onsubmit="">
				<div class="input-group mb-3">
					<input class="input-form" type="datetime-local" id="startTime_input" required='required'>
				</div>
			
				<div style="height:450px;" id="mapid" class="flight-map"></div>
				<div id="DistanceAndPriceId" class="container" style="display:none">
					<h3 id="distance_output" class="mb-4 own-h3 "></h3>
					<h3 id="price_output" class="mb-4 own-h3"></h3>
				</div>

				<div class="input-group mb-3">
					<input id="email_input" placeholder="Email" class="input-form " type="email" name="ne" required='required'>
				</div>
				<div class="has-text-align-center button-wrap">
					<button id="request_delivery_button" class="smart-button" type="submit" value="request_delivery_button" onClick="requestDelivery(this,email_input.value,startTime_input.value); ">
						Request delivery
					</button>
				</div>
			</form>
		</div>
	</section>


	<!-- Modal/Popup for How To Map -->
	<div class="modal fade" id="HowToMapID" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div id="HowToVideoDivID">
						<video id="HowToVideoID" controls loop autoplay>
							<source src="https://dronorder.net/wp-content/uploads/2020/06/howto_map.mp4" type="video/mp4" />
							Your browser does not support the video tag.
						</video> 
					</div> 
				</div>
			</div>
		</div>
	</div>

	<!-- Modal/Popup for Submission -->
	<div class="modal fade" id="submissionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">

				<!-- Header -->
				<div class="modal-header">
					<h5 class="modal-title col-12 text-center">Drone delivery requested</h5>
				</div>

				<!-- Body -->
				<div class="modal-body">
					<h2 class=" has-text-align-center">Please check your mails</h2>
				</div>

				<!-- Footer group -->
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Services-->
	<section class="page-section bg-white" id="services">
		<div class="container">
			<h2 class="text-center mt-0">At Your Service</h2>
			<hr class="divider my-4" />
			<div class="row">
				<div class="col-lg-3 col-md-6 text-center">
					<div class="mt-5">
						<i class="fas fa-4x fa-paper-plane text-primary mb-4"></i>
						<h3 class="h4 mb-2">Quick response</h3>
						<p class="text-muted mb-0">Most pilots answer between several hours to few days!</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="mt-5">
						<i class="fas fa-4x fa-fighter-jet text-primary mb-4"></i>
						<h3 class="h4 mb-2">Safety</h3>
						<p class="text-muted mb-0">We only fly in allowed flight zones. Please clarify the details with your pilot.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="mt-5">
						<i class="fas fa-4x fa-address-card text-primary mb-4"></i>
						<h3 class="h4 mb-2">200k+ Listed Pilots</h3>
						<p class="text-muted mb-0">Drone pilots are waiting for you for your first flight!</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="mt-5">
						<i class="fas fa-4x fa-heart text-primary mb-4"></i>
						<h3 class="h4 mb-2">Made with Love</h3>
						<p class="text-muted mb-0">Be kind and we can bring drones in an useful way in our lives.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Become a pilot -->
	<section class="page-section bg-dark text-white">
		<div class="container text-center">
			<h2 class="mb-4">Become a registered pilot and earn money!</h2>
			<a class="btn btn-light btn-xl" href="https://dronorder.net/pilot-registration/">Register here</a>
		</div>
	</section>
	<!-- Testimonials-->
	<div id="portfolio">
		<div class="container-fluid p-0">
			<div style="width:100%;margin:auto" class="row no-gutters">
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box"><img class="img-fluid" src="https://dronorder.net/wp-content/themes/twentytwenty/assets/img/portfolio/thumbnails/1.jpg" alt="" />
						<div class="portfolio-box-caption">
							<div class="project-category text-white-50">Eric David</div>
							<div class="project-name">Seattle</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box"><img class="img-fluid" src="https://dronorder.net/wp-content/themes/twentytwenty/assets/img/portfolio/thumbnails/2.jpg" alt="" />
						<div class="portfolio-box-caption">
							<div class="project-category text-white-50">Maria Santos</div>
							<div class="project-name">Los Angeles</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box"><img class="img-fluid" src="https://dronorder.net/wp-content/themes/twentytwenty/assets/img/portfolio/thumbnails/3.jpg" alt="" />
						<div class="portfolio-box-caption">
							<div class="project-category text-white-50">Alexander Treib</div>
							<div class="project-name">Stuttgart</div>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>
	<!-- Subscription -->
	<section class="page-section bg-dark text-white">
		<div class="container text-center">
			<h2 class="mb-4">Subscribe for latest updates!</h2>

			<div class="tnp tnp-subscription">
				<form method="post" action="https://dronorder.net/?na=s" onsubmit="return newsletter_check(this)">

					<input style="border-radius:10px;background-color:white;" placeholder="enter email" class="input-form" type="email" name="ne" required>
					<div class="tnp-field tnp-field-button button-wrap">
						<button class="smart-button" style="background-color:#f4623a" type="submit" value="subscription-button">
							Subscribe
						</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- Contact-->
	<section class="page-section text-white" id="contact">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<h2 class="mt-0">Let's Get In Touch!</h2>
					<hr class="divider my-4" />
					<p class="text-muted mb-5">You have problems or questions. Just write us and email or use our contact form. Thanks! We will get back to you as soon as possible!</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 mr-auto text-center" style="margin:auto">
					<i class="fas fa-envelope fa-3x mb-3 text-muted"></i><!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a class="d-block" href="mailto:info@dronorder.net">info@dronorder.net</a>
				</div>
			</div>
		</div>
	</section>
</body>

</html>



<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS9C0YTzYEEbq4U6nrSlgo5q_CHMPl1MQ&callback=initMap">
</script>





<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php get_footer(); ?>