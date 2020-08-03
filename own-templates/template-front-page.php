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

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-
  scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">


	<!-- Bootstrap core CSS -->
	<link href="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="<?php echo get_template_directory_uri() ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() ?>/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/landing-page.min.css" />

</head>

<body>

	<!-- Navigation -->
	<nav class="navbar navbar-light bg-light static-top">
		<div class="container">
			<a class="navbar-brand" href="#">SpexDoc</a>
		</div>
	</nav>

	<!-- Masthead -->
	<header class="masthead text-white text-center">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-12 mx-auto">
					<h1 class="mb-3">Die digitale Patientenakte für Ärtze und Patienten </h1>
				</div>
				<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
					<form onsubmit="window.location.href = 'https://app.spexdoc.net'; return false;">
						<div class="form-row">
							<div class="col-12 col-md-3">
							</div>
							<div class="col-12 col-md-6">
								<button type="submit" class="btn btn-block btn-lg btn-primary">App starten</button>
							</div> 

						</div>
					</form>
				</div>
			</div>
		</div>
	</header>

	<!-- Icons Grid -->
	<section class="features-icons bg-light text-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
						<div class="features-icons-icon d-flex">
							<i class="fa fa-heart m-auto text-primary"></i>
						</div>
						<h3>Mit Herz</h3>
						<p class="lead mb-0">Durch unsere Kundenorientierung können wir gemeinsam alles schaffen</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
						<div class="features-icons-icon d-flex">
							<i class="m-auto text-primary fas fa-shield-alt"></i>
						</div>
						<h3>Sicher</h3>
						<p class="lead mb-0">Unser Quellcode ist Open Source und wir ständig getestet</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="features-icons-item mx-auto mb-0 mb-lg-3">
						<div class="features-icons-icon d-flex">
							<i class="fa fa-user-md m-auto text-primary"></i>
						</div>
						<h3>Kompetenz</h3>
						<p class="lead mb-0">Die Inhalte werden in Zusammenarbeit mit Ärzten erstellt</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Image Showcases -->
	<section class="showcase">
		<div class="container-fluid p-0">
			<div class="row no-gutters">

				<div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/digital-doctor.jpg');"></div>
				<div class="col-lg-6 order-lg-1 my-auto showcase-text">
					<h2>Willkommen im digitalen Zeitalter</h2> 
					<p class="lead mb-0">Verwalten Sie alle Patientendaten an einem Ort. Ganz gleich ob diese von Ihrer Smart Watch, Ihrem Handy oder vom Facharzt kommen. Hier sind sie sicher.</p>
				</div> 
			</div>
			<div class="row no-gutters">
				<div class="col-lg-6 text-white showcase-img" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/teddy.jpg');"></div>
				<div class="col-lg-6 my-auto showcase-text">
					<h2>Manchmal ist online angenehmer</h2>
					<p class="lead mb-0">Vereinbaren Sie einen Online Termin mit Ihrem Arzt und schonen Sie sich lieber zuhause. Nicht jede Erkrankung erfordert eine persönliche Anwesenheit.</p>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/bg-showcase-3.jpg');"></div>
				<div class="col-lg-6 order-lg-1 my-auto showcase-text">
					<h2>Für Groß &amp; Klein</h2>
					<p class="lead mb-0">Unser Service steht jedem rund um die Uhr zur Verfügung. Über die Smart Doc Funktionalität können auch Online Diagnosen gestellt werden.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonials -->
	<section class="testimonials text-center bg-light">
		<div class="container">
			<h2 class="mb-5">Unsere Rezensionen</h2>
			<div class="row">
				<div class="col-lg-4">
					<div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri() ?>/img/testimonials-1.jpg" alt="">
						<h5>Leonie E.</h5>
						<p class="font-weight-light mb-0">"Die App funktioniert wirklich super! Bin sehr dankbar, dass ich meine Patientendaten endlich geordnet auf meinem PC habe!"</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri() ?>/img/testimonials-2.jpg" alt="">
						<h5>Nico S.</h5>
						<p class="font-weight-light mb-0">"Ich konnte meinem Arzt über einen Link meine Daten zeigen. Er war begeistert - ich auch :)"</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="testimonial-item mx-auto mb-5 mb-lg-0">
						<img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri() ?>/img/testimonials-3.jpg" alt="">
						<h5>Sarah W.</h5>
						<p class="font-weight-light mb-0">"Egal ob über mein Tablet, Handy oder PC es funktioniert immer gleich."</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Call to Action -->
	<section class="call-to-action text-white text-center">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-xl-9 mx-auto">
					<h2 class="mb-4">Abonnieren Sie unseren Newsletter</h2>
				</div>
				<div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
					<form>
						<div class="form-row">
							<div class="col-12 col-md-9 mb-2 mb-md-0">
								<input type="email" class="form-control form-control-lg" placeholder="Ihre Email...">
							</div>
							<div class="col-12 col-md-3">
								<button type="submit" class="btn btn-block btn-lg btn-primary">Abonnieren</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="footer bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 h-100 text-center text-lg-left my-auto">
					<ul class="list-inline mb-2">
						<li class="list-inline-item">
							<a href="#">About</a>
						</li>
						<li class="list-inline-item">&sdot;</li>
						<li class="list-inline-item">
							<a href="#">Contact</a>
						</li>
						<li class="list-inline-item">&sdot;</li>
						<li class="list-inline-item">
							<a href="#">Terms of Use</a>
						</li>
						<li class="list-inline-item">&sdot;</li>
						<li class="list-inline-item">
							<a href="#">Privacy Policy</a>
						</li>
					</ul>
					<p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2020. All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 h-100 text-center text-lg-right my-auto">
					<ul class="list-inline mb-0">
						<li class="list-inline-item mr-3">
							<a href="#">
								<i class="fab fa-facebook fa-2x fa-fw"></i>
							</a>
						</li>
						<li class="list-inline-item mr-3">
							<a href="#">
								<i class="fab fa-twitter-square fa-2x fa-fw"></i>
							</a>
						</li>
						<li class="list-inline-item">
							<a href="#">
								<i class="fab fa-instagram fa-2x fa-fw"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>




