<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: thank you Page Template
 *
 * Handles to show thank you Page Content
 * @since Velocity Automotive
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the thank you Page Content template.
	get_template_part('page-contents/content', 'thankyou');
endwhile; //end of while
get_footer();?>