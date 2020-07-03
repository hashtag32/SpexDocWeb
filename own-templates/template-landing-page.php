<?php

/**
 * Template Name: Landing Page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */


// // Skip the front page
if (is_user_logged_in()) { 
	wp_redirect("https://dronorder.net/front-page");
}

// Skip the front page 
get_header();  

?>

<main id="site-content" class="landing-page" role="main"> 

	<div class="has-text-align-center">
		<div class="site-logo faux-heading zoom-1"><a href="https://dronorder.net/" class="custom-logo-link" rel="home"><img width="86" height="71" style="height: 71px;" src="https://dronorder.net/wp-content/uploads/2020/06/Dronorder_Logo_orange.png" class="custom-logo" alt="dronorder"></a><span class="screen-reader-text">DronOrder</span></div>
		<div class="site-description" style="color:black">Package Delivery by Drones</div><!-- .site-description -->
	</div>

	<h3 class="has-text-align-center" style="padding:2rem">Get updates on our project</h3>
	<div class="tnp tnp-subscription">
		<form method="post" action="https://dronorder.net/?na=s" onsubmit="return newsletter_check(this)">

			<input style="border-radius:10px;background-color:white;" placeholder="enter email" class="input-form " type="email" name="ne" required>
			<div class="tnp-field tnp-field-button button-wrap">
				<button class="smart-button" type="submit" value="orange" value="Subscribe">
					Get them for free
				</button>
			</div>
		</form>
	</div>

</main><!-- #site-content -->

<a class="skip-lp" href="https://dronorder.net/front-page">
	<span class="to-the-top-long">
		<?php
		/* translators: %s: HTML character for up arrow. */
		printf(__('Skip %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&rarr;</span>');
		?>
	</span><!-- .to-the-top-long -->
	<span class="to-the-top-short">
		<?php
		/* translators: %s: HTML character for up arrow. */
		printf(__('Skip %s', 'twentytwenty'), '<span class="arrow" aria-hidden="true">&rarr;</span>');
		?>
	</span><!-- .to-the-top-short -->
</a><!-- .to-the-top -->