<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Careers Page Template
 *
 * Handles to show careers Page Content
 * @since Velocity Automotive
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Careers Page Content template.
	get_template_part('page-contents/content', 'careers');
endwhile; //end of while
get_footer();?>