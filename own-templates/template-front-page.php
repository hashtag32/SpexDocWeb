<?php

/**
 * Template Name: Front Page
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Leaflet -->
	<script src="https://unpkg.com/leaflet/dist/leaflet-src.js"></script>
	<script src="https://unpkg.com/esri-leaflet"></script>
	<script src="https://unpkg.com/esri-leaflet-geocoder"></script>

	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
	<!-- Third party plugin CSS-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />

	<!-- Core theme CSS (includes Bootstrap)-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bootstrap_styles.css" />
	<!-- Own_styles has higher priority (1. Own, then Bootstrap, then Wordpress) -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/own_styles.css" />

	<!-- Leaflet-->
	<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
	<link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder/dist/esri-leaflet-geocoder.css">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
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
					<div class="frontpage-subtitle">Package Delivery by Drones </div>
					<div class="has-text-align-center button-wrap">
						<a class="smart-button" value="orange" href="#scheduleFlight">Let's Go</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Schedule your drone delivery -->
	<section class="page-section bg-primary" id="scheduleFlight">
		<div class="container">
			<h2 class="own-h2 has-text-align-center" style="font-size:40px;font-weight:600;color:black;padding:30px">Schedule your package delivery</h2>

			<div class="has-text-align-center button-wrap">
				<button id="request_delivery_button" class="smart-button" type="button" value="demoButton" onClick="OpenAndPlayHowToModal();">
					View Demo
				</button>
			</div>
 
			<form method="post" class="schedule_flight_form">
				<!-- Date -->
				<div class="input-group mb-3">
					<input class="input-form" type="datetime-local" id="startTime_input" value="2020-10-13T13:00" required='required'>
				</div>

				<!-- Map -->
				<div style="height:450px;" id="mapid" class="flight-map"></div>

				<!-- Price -->
				<div class="input-group has-text-align-center mb-3">
					<div id="DistanceAndPriceId" class="container" style="display:none">
						<h3 id="distance_output" class="mb-4 own-h3 "></h3>
						<h3 id="price_output" class="mb-4 own-h3"></h3>
					</div>
				</div>

				<!-- Email -->
				<div class="input-group mb-3">
					<input id="email_input" placeholder="enter email" class="input-form" type="email" name="ne" required='required'>
				</div>

				<!-- Item -->
				<div class="input-group mb-3">
					<select name="shipped_item" id="shipped_item_id" class="input-form" required='required'>
						<option value="">Your item to ship</option>
						<option value="Medication">Medication</option>
						<option value="Food">Food</option>
						<option value="Something else">Something else</option>
					</select>
				</div>

				<!-- Button Request-->
				<div class="has-text-align-center button-wrap">
					<button id="request_delivery_button" class="smart-button" type="submit" value="black" onClick="requestDelivery(this,email_input.value,startTime_input.value, shipped_item_id.value ); ">
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
				<div class="modal-header">
					<h5 class="modal-title col-12 text-center">How To</h5>
				</div>

				<div class="modal-body">
					<div id="HowToVideoDivID">
						<video id="HowToVideoID" controls loop autoplay>
							<source src="https://dronorder.net/wp-content/uploads/2020/06/howto_map.mp4" type="video/mp4" />
							Your browser does not support the video tag.
						</video>
					</div>
				</div>

				<!-- Footer group -->
				<div class="modal-footer">
					<button type="button" class="smart-button" value="black" data-dismiss="modal">Close</button>
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
					<h2 class=" has-text-align-center">
						Thank you! We will process your request.

						Please check your mails</h2>
				</div>

				<!-- Footer group -->
				<div class="modal-footer">
					<button type="button" class="smart-button" value="black" data-dismiss="modal">Close</button>
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
	<section class="page-section has-text-align-center bg-dark text-white">
		<h2 class="mb-4">Become a registered pilot and earn money!</h2>

		<div class="has-text-align-center button-wrap">
			<a class="smart-button" value="orange" href="https://dronorder.net/pilot-registration/">Register here</a>
		</div>

	</section>
	<!-- Subscription -->
	<section class="page-section bg-primary text-white">
		<div class="container text-center">
			<h2 class="mb-4">Subscribe for latest updates on our project!</h2>

			<div class="tnp tnp-subscription">
				<form method="post" action="https://dronorder.net/?na=s" onsubmit="return newsletter_check(this)">

					<input style="border-radius:10px;background-color:white;" placeholder="enter email" class="input-form" type="email" name="ne" required>
					<div class="tnp-field tnp-field-button button-wrap">
						<button class="smart-button" style="background-color:black" type="submit" value="orange">
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
					<p class="text-muted mb-5">You have problems or questions. Feel free to contact us. Thanks! We will get back to you as soon as possible!</p>
				</div>
			</div>
			<div class="row">
				<div class="text-center" style="margin:auto;position:relative">
					<a href="https://dronorder.net/contact">
						<span class="fill-div-with-link"></span>
					</a>
					<i class="fas fa-envelope fa-5x mb-3 text-muted"></i>
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