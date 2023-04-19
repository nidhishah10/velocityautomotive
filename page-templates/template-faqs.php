<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Faqs Page Template
 *
 * Handles to show faqs Page Content
 * @since Velocity Automotive
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Faqs Page Content template.
	get_template_part('page-contents/content', 'faqs');
endwhile; //end of while
get_footer();?>