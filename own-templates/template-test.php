<?php

/**
 * Template Name: Test Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	/* Template Name: Api Template */




	// function sendMail($requesterMail, $startCoordinates, $endCoordinates, $date)
	// {
	// 	$subject = "New Delivery request";
	// 	$content = 'From: ' . $requesterMail . ' \n StartCoordinates: ' . $startCoordinates . ' \n EndCoordinates: ' . $endCoordinates . ' \n Date: ' . $date;
	// 	$recipient = "request@stockvoting.net";
	// 	// $mailheader = "From: alex@treib \r\n";
	// 	mail($recipient, $subject, $content) or die("Error!");
	// }

	?>

</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php get_footer(); ?>