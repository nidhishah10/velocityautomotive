<?php

//Exit if Directly accessed

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Template Name: Giving-Back Page Template
 *
 * Handles to show Giving-Back Page Content
 * @since Velocity Automotive
 **/

get_header();
// Loop Start Here
while (have_posts()): the_post();
	// Include the Giving-Back Page Content template.
	get_template_part('page-contents/content', 'giving-back');
endwhile; //end of while
get_footer();?>