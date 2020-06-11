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
// if (is_user_logged_in()) {
// 	wp_redirect("https://stockvoting.net/front-page");
// }

ob_start();
get_header();
$header = ob_get_clean();
$header = preg_replace('#<title>(.*?)<\/title>#', '<title>' . "Dronorder - Drone Delivery Service" . '</title>', $header);
echo $header;
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Creative - Start Bootstrap Theme</title>
	<!-- Favicon-->
	<link rel="icon" type="image/x-icon" href="http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/img/favicon.ico" />
	<!-- Font Awesome icons (free version)-->
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
	<!-- Third party plugin CSS-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
	<!-- Core theme CSS (includes Bootstrap)-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/bootstrap_styles.css" />

</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto my-2 my-lg-0">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Masthead-->
	<header class="masthead">
		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center text-center">
				<div class="col-lg-10 align-self-end">
					<h1 class="text-uppercase text-white font-weight-bold">Dronorder</h1>
					<hr class="divider my-4" />
				</div>
				<div class="col-lg-8 align-self-baseline">
					<p class="text-white-75 font-weight-light mb-5"> Request a drone delivery flight from A to B</p>
					<a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Let's Go</a>
				</div>
			</div>
		</div>
	</header>
	<!-- About-->
	<section class="page-section bg-primary" id="about">
		<div class="container">

			<form>
				<div class="form-group row">
					<label for="text" class="col-2 col-form-label">Text Field</label>
					<div class="col-10">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i class="fa fa-address-card"></i>
								</div>
							</div>
							<input id="text" name="text" type="text" class="form-control">
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="text1" class="col-2 col-form-label">Start Point</label>
					<div class="col-10">
						<input id="text1" name="text1" type="text" class="form-control">
					</div>
				</div>
				<div class="form-group row">
					<div class="offset-2 col-10">
						<button name="submit" type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</form>




		</div>
	</section>
	<!-- Services-->
	<section class="page-section" id="services">
		<div class="container">
			<h2 class="text-center mt-0">At Your Service</h2>
			<hr class="divider my-4" />
			<div class="row">
				<div class="col-lg-3 col-md-6 text-center">
					<div class="mt-5">
						<i class="fas fa-4x fa-gem text-primary mb-4"></i>
						<h3 class="h4 mb-2">Sturdy Themes</h3>
						<p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="mt-5">
						<i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
						<h3 class="h4 mb-2">Up to Date</h3>
						<p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="mt-5">
						<i class="fas fa-4x fa-globe text-primary mb-4"></i>
						<h3 class="h4 mb-2">Ready to Publish</h3>
						<p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="mt-5">
						<i class="fas fa-4x fa-heart text-primary mb-4"></i>
						<h3 class="h4 mb-2">Made with Love</h3>
						<p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio-->
	<div id="portfolio">
		<div class="container-fluid p-0">
			<div class="row no-gutters">
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/img/portfolio/fullsize/1.jpg"><img class="img-fluid" src="http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/img/portfolio/thumbnails/1.jpg" alt="" />
						<div class="portfolio-box-caption">
							<div class="project-category text-white-50">Category</div>
							<div class="project-name">Project Name</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/img/portfolio/fullsize/2.jpg"><img class="img-fluid" src="http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/img/portfolio/thumbnails/2.jpg" alt="" />
						<div class="portfolio-box-caption">
							<div class="project-category text-white-50">Category</div>
							<div class="project-name">Project Name</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/img/portfolio/fullsize/3.jpg"><img class="img-fluid" src="http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/img/portfolio/thumbnails/3.jpg" alt="" />
						<div class="portfolio-box-caption">
							<div class="project-category text-white-50">Category</div>
							<div class="project-name">Project Name</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/img/portfolio/fullsize/4.jpg"><img class="img-fluid" src="http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/img/portfolio/thumbnails/4.jpg" alt="" />
						<div class="portfolio-box-caption">
							<div class="project-category text-white-50">Category</div>
							<div class="project-name">Project Name</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/img/portfolio/fullsize/5.jpg"><img class="img-fluid" src="http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/img/portfolio/thumbnails/5.jpg" alt="" />
						<div class="portfolio-box-caption">
							<div class="project-category text-white-50">Category</div>
							<div class="project-name">Project Name</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a class="portfolio-box" href="http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/img/portfolio/fullsize/6.jpg"><img class="img-fluid" src="http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/img/portfolio/thumbnails/6.jpg" alt="" />
						<div class="portfolio-box-caption p-3">
							<div class="project-category text-white-50">Category</div>
							<div class="project-name">Project Name</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Call to action-->
	<section class="page-section bg-dark text-white">
		<div class="container text-center">
			<h2 class="mb-4">Free Download at Start Bootstrap!</h2>
			<a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
		</div>
	</section>
	<!-- Contact-->
	<section class="page-section" id="contact">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<h2 class="mt-0">Let's Get In Touch!</h2>
					<hr class="divider my-4" />
					<p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
					<i class="fas fa-phone fa-3x mb-3 text-muted"></i>
					<div>+1 (555) 123-4567</div>
				</div>
				<div class="col-lg-4 mr-auto text-center">
					<i class="fas fa-envelope fa-3x mb-3 text-muted"></i><!-- Make sure to change the email address in BOTH the anchor text and the link target below!--><a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer-->
	<footer class="bg-light py-5">
		<div class="container">
			<div class="small text-center text-muted">Copyright © 2020 - Dronorder </div>
		</div>
	</footer>
	<!-- Bootstrap core JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
	<!-- Third party plugin JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
	<!-- Core theme JS-->
	<script src="js/scripts.js"></script>
</body>

</html>


<main id="site-content" class="landing-page" role="main">


	<h2 class="has-text-align-center title-header  zoom-1">Dronorder</h2>
	<h2 class="has-text-align-center subtitle-header zoom-1">Drone delivery service</h2>








	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>














	<script type="text/javascript">
		$(document).ready(function() {
			$(function() {
				$('#datetimepicker_start').datetimepicker();
			});
		});
	</script>
	<div class="section-inner">

		<form method="post" action="" onsubmit="">
			<div class='input-group' id='datetimepicker_start'>
				<input style="border-radius:10px;background-color:white;margin:30px;" type='text' class="input-box input-form" />
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>

			<div class="input-group mb-3">
				<input id="start_gps_location_input" style="border-radius:10px;background-color:white;margin:30px;margin-bottom:0px" placeholder="Start GPS Location" class="input-box input-form " type="text" name="ne" required>
				<!-- <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"> -->
				<div style="margin:auto;width:90%" class="input-group-append">
					<!-- todo:start coordinates here -->
					<a target="_blank" href="https://www.google.com/maps/@49.406876,6.9686856,15z?hl=de-DE">
						<span class="input-group-text " id="basic-addon2">Search on Maps</span>
					</a>
				</div>
			</div>


			<div class="input-group mb-3">
				<input id="end_gps_location_input" style="border-radius:10px;background-color:white;margin:30px;margin-bottom:0px;" placeholder="End GPS Location" class="input-box input-form " type="text" name="ne" required>
				<!-- <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"> -->
				<div style="margin:auto;width:90%" class="input-group-append">
					<!-- todo:start coordinates here -->
					<a target="_blank" href="https://www.google.com/maps/@49.406876,6.9686856,15z?hl=de-DE">
						<span class="input-group-text " id="basic-addon2">Search on Maps </span>
					</a>
				</div>
			</div>

			<h2 id="distance_h2" class="own-h2 has-accent-color" style="font-size:35px">Distance: </h2>
			<h2 id="price_h2" class="own-h2 has-accent-color" style="font-size:35px">Price: </h2>

			<input id="email_input" style="border-radius:10px;background-color:white;margin:30px;" placeholder="enter email" class="input-box input-form " type="text" name="ne" required>

			<div class=" button-wrap">
				<button class="smart-button" type="submit" value="Subscribe" onClick="displayMap();">
					Request delivery
				</button>
			</div>
		</form>



		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS9C0YTzYEEbq4U6nrSlgo5q_CHMPl1MQ&callback=initMap">
		</script>

		<script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
		<script src="/http://dronorder.doc12.org/wp-content/themes/twentytwenty/assets/gmap3.js?body=1" type="text/javascript"></script>
		<div id="map-wrapper">
			<div id="map-canvas" style="width: 500px; height: 500px;"></div>
		</div>
		<div>

			<style>
				html,
				body,
				#map-wrapper,
				#map_canvas {
					margin: 0;
					padding: 0;
					height: 100%;
					width: 100%;
				}
			</style>
			<div id="map-wrapper">
				<div id="map_canvas" style="width: 500px; height: 500px;"></div>
			</div>


			<script>
				// Read in GPS location
				navigator.geolocation.getCurrentPosition(function(location) {
					var start_gps_location_id = document.getElementById('start_gps_location_input');
					console.log(location.coords.longitude);
					start_gps_location_id.value = location.coords.latitude + ", " + location.coords.longitude;
				});


				function checkForm() {
					return true;
				}
				// Set the marker on maps
				function displayMap() {
					var start_gps_location_id = document.getElementById('start_gps_location_input');
					var start_gps_value = start_gps_location_id.value;

					var startLong;
					var startLat;
					if (start_gps_value != "") {
						start_gps_array = start_gps_value.split(/, /);
						startLat = parseFloat(start_gps_array[0]);
						startLong = parseFloat(start_gps_array[1]);
					} else {
						//todo:remove
						startLat = 49.412069;
						startLong = 6.981903;
					}

					var end_gps_location_id = document.getElementById('end_gps_location_input');

					var end_gps_value = end_gps_location_id.value;

					var endLat;
					var endLong;
					if (end_gps_value != "") {
						end_gps_array = end_gps_value.split(/, /);
						endLat = parseFloat(end_gps_array[0]);
						endLong = parseFloat(end_gps_array[1]);
					} else {
						//todo:remove
						startLat = 49.412069;
						startLong = 6.981903;
					}



					// var endLat = 49.409031;
					// var endLong = 6.964063;




					var middleLong = (startLong + endLong) / 2;
					var middleLat = (startLat + endLat) / 2;

					var total_dist_km = distance(startLat, startLong, endLat, endLong, "K");
					total_dist_m = (total_dist_km * 1000).toFixed(2);
					document.getElementById('distance_h2').innerText += total_dist_m + " m";

					var price_dollar = price(total_dist_m);


					document.getElementById('price_h2').innerText += " ~" + price_dollar + " $";



					console.log(total_dist_m);
					console.log(middleLong);
					console.log(middleLat);

					var locations = [
						['Start Point', startLat, startLong],
						['End Point', endLat, endLong],
					];


					var map = new google.maps.Map(document.getElementById('map-canvas'), {
						zoom: 13,
						center: new google.maps.LatLng(middleLat, middleLong),
						mapTypeId: google.maps.MapTypeId.ROADMAP
					});

					var infowindow = new google.maps.InfoWindow();

					var marker, i;

					for (i = 0; i < locations.length; i++) {
						marker = new google.maps.Marker({
							position: new google.maps.LatLng(locations[i][1], locations[i][2]),
							map: map
						});

						google.maps.event.addListener(marker, 'click', (function(marker, i) {
							return function() {
								infowindow.setContent(locations[i][0]);
								infowindow.open(map, marker);
							}
						})(marker, i));
					}




				}






				// General functions


				function price(distance_m) {
					// 2.5$ fixed + 1$ per 200m
					return 2.5 + 1 * distance_m / 200;
				}

				function distance(lat1, lon1, lat2, lon2, unit) {
					if ((lat1 == lat2) && (lon1 == lon2)) {
						return 0;
					} else {
						var radlat1 = Math.PI * lat1 / 180;
						var radlat2 = Math.PI * lat2 / 180;
						var theta = lon1 - lon2;
						var radtheta = Math.PI * theta / 180;
						var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
						if (dist > 1) {
							dist = 1;
						}
						dist = Math.acos(dist);
						dist = dist * 180 / Math.PI;
						dist = dist * 60 * 1.1515;
						if (unit == "K") {
							dist = dist * 1.609344
						}
						if (unit == "N") {
							dist = dist * 0.8684
						}
						return dist;
					}
				}
			</script>



			<?php

			function sendMail($requesterMail, $startCoordinates, $endCoordinates, $date)
			{
				$subject = "New Delivery request";
				$content = 'From: ' . $requesterMail . ' \n StartCoordinates: ' . $startCoordinates . ' \n EndCoordinates: ' . $endCoordinates . ' \n Date: ' . $date;
				$recipient = "request@stockvoting.net";
				// $mailheader = "From: alex@treib \r\n";
				mail($recipient, $subject, $content) or die("Error!");
			}
			?>
















</main><!-- #site-content -->


<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php get_footer(); ?>