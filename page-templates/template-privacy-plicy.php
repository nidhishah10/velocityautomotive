<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Privacy Policy Page Template
 *
 * Handles to show privacy-policy Page Content
 * @since Velocity Automotive
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Privacy Policy Page Content template.
	get_template_part('page-contents/content', 'privacy-policy');
endwhile; //end of while
get_footer();?>